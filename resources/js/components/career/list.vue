<template>
  <div class="main-content" style="margin: 20px;">
    <div class="main-content-inner">
      <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
          <h3>HireSmart Career Page</h3>
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

            <ul class="flex flex-column">
              <li
                v-for="job in jobs"
                :key="job.id"
                class="product-item gap14"
              >
                <div class="flex items-center justify-between gap20 flex-grow">
                  <div class="body-text font-semibold">
                    {{ job.title }}
                  </div>

                  <div class="body-text">
                    <ul>
                      <li v-for="skill in job.skills ?? []" :key="skill"><button class="tf-button w208" type="button"> {{ skill.name }} </button></li>
                    </ul>
                  </div>


                  <div class="body-text">
                    {{ formatDate(job.posted_at) }}
                  </div>
                  <div class="body-text">
                    {{ formatDate(job.expires_at) }}
                  </div>


                  <div class="list-icon-function">
                    <button class="tf-button w208" type="button">
                      View
                    </button>
                  </div>
                </div>
              </li>
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
    };
  },
  mounted() {
    this.fetchJobs();
  },
  methods: {
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
    formatDate(date) {
      if (!date) return '-';
      const options = { year: 'numeric', month: 'short', day: 'numeric' };
      return new Date(date).toLocaleDateString(undefined, options);
    },
  },
};
</script>
