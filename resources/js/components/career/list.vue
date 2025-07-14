<template>
  <div class="main-content" style="margin: 20px">
    <div class="main-content-inner">
      <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
          <h3>HireSmart Career Page</h3>
        </div>
        <div class="gap22 cols mb-5">
          <div class="row">
            <div class="col">
              <fieldset class="male">
                <div class="body-title mb-10">
                  Search By Key Word <span class="tf-color-1">*</span>
                </div>
                <input
                  type="text"
                  @input="performSearch"
                  class="form-control"
                  v-model="searchKeyword"
                  name="search"
                  placeholder="Enter your key word"
                />
              </fieldset>
            </div>
            <div class="col">
              <fieldset class="male">
                <div class="body-title mb-10">
                  Search By Location <span class="tf-color-1">*</span>
                </div>
                <select class="form-control" v-model="selectedLocation" @change="performSearch">
                  <option
                    v-for="(location, index) in locations"
                    :value="location.id"
                    :key="index"

                  >
                    {{ location.name }}
                  </option>
                </select>
              </fieldset>
            </div>
          </div>
        </div>

        <!-- Job List -->
        <div class="wg-box">
          <div class="wg-table table-product-list">
            <ul class="table-title flex gap20 mb-14">
              <li><div class="body-title">Job Title</div></li>
              <li><div class="body-title">Skills</div></li>
              <li><div class="body-title">Posted At</div></li>
              <li><div class="body-title">Deadline</div></li>
              <li><div class="body-title">Action</div></li>
            </ul>

            <ul class="flex flex-column" v-if="jobs.length > 0">
              <li v-for="job in jobs" :key="job.id" class="product-item gap14">
                <div class="flex items-center justify-between gap20 flex-grow">
                  <div class="body-text font-semibold">
                    {{ job.title }}
                  </div>

                  <div class="body-text">
                    <div class="skills">
                      <div
                        class="skill-badge"
                        v-for="(skill, index) in job.skills"
                        :key="index"
                      >
                        {{ skill.name }}
                      </div>
                    </div>
                  </div>

                  <div class="body-text">
                    {{ formatDate(job.posted_at) }}
                  </div>
                  <div class="body-text">
                    {{ formatDate(job.expires_at) }}
                  </div>

                  <router-link
                    :to="{ name: 'applicationForm', params: { id: job.id } }"
                    class="tf-button w208"
                  >
                    Apply Now
                  </router-link>
                </div>
              </li>
            </ul>
            <ul v-else>
                <div class="body-text font-semibold">
                    No Data Found !
                  </div>
            </ul>
          </div>
        </div>
        <!-- /Job List -->
      </div>
    </div>
  </div>
</template>
<script>
import api from "../../helpers/axios";

export default {
  name: "CareerPageComponent",
  data() {
    return {
      jobs: [],
      locations: [],
    };
  },
  mounted() {
    this.fetchJobs();
    this.fetchLocations();
  },
  methods: {
    fetchLocations() {
      api
        .get("/locations")
        .then((response) => {
          this.locations = response.data.locations || response.data;
        })
        .catch((error) => {
          console.error("Error fetching locations:", error);
        });
    },
    fetchJobs() {
      api
        .get(`/jobs`)
        .then((response) => {
          this.jobs = response.data.jobs;
        })
        .catch((error) => {
          console.error("Error fetching jobs:", error);
        });
    },

    performSearch() {
      const params = {
        keyword: this.searchKeyword,
        location_id: this.selectedLocation,
      };

      api
        .post("/jobs/search", params )
        .then((res) => {
          this.jobs = res.data.jobs;
        })
        .catch((err) => {
          console.error("Search failed:", err);
        });
    },
    formatDate(date) {
      if (!date) return "-";
      const options = { year: "numeric", month: "short", day: "numeric" };
      return new Date(date).toLocaleDateString(undefined, options);
    },
  },
};
</script>
<style scoped>
.skills {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.skill-badge {
  background-color: #e1ecf4;
  color: #0366d6;
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 14px;
}
</style>
