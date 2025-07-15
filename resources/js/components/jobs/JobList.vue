<template>
  <div class="main-content-inner">
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
      <!-- all-attribute -->
      <div class="wg-box">
        <div class="flex items-center justify-between gap10 flex-wrap">
          <div class="wg-filter flex-grow">
            <h3>All Attributes</h3>
          </div>
          <router-link
            :to="{ name: 'Jobcreate' }"
            class="tf-button style-1 w208"
            href="add-attributes.html"
            ><i class="icon-plus"></i>Add new</router-link
          >
        </div>
        <div class="wg-table table-all-attribute">
          <ul class="table-title flex gap20 mb-14">
            <li>
              <div class="body-title">Category</div>
            </li>
            <li>
              <div class="body-title">Value</div>
            </li>
            <li>
              <div class="body-title">Action</div>
            </li>
          </ul>
          <ul class="flex flex-column">
            <li
              v-for="job in jobs"
              :key="job.id"
              class="attribute-item flex items-center justify-between gap20"
            >
              <div class="name">
                <a href="#" class="body-title-2">{{ job.title }}</a>
              </div>
              <div class="body-text">
                {{ job.description }} — Salary: {{ job.min_salary }} to
                {{ job.max_salary }}
              </div>
              <div class="list-icon-function">


                <router-link
                  :to="{ name: 'JobView', params: { id: job.id } }"
                  class="item eye"
                >
                <i class="icon-eye"></i>
                </router-link>
                <router-link
                  :to="{ name: 'JobEdit', params: { id: job.id } }"
                  class="item edit"
                >
                  <i class="icon-edit-3"></i>
                </router-link>

                <div class="item trash">
                  <i class="icon-trash-2"></i>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="divider"></div>
      </div>
      <!-- /all-attribute -->
    </div>
    <!-- /main-content-wrap -->
  </div>
</template>

<script>
import api from '../../helpers/axios'

export default {
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
      const apiUrl = import.meta.env.VITE_API_BASE_URL;
      api
        .get(`${apiUrl}/jobs`)
        .then((response) => {
          this.jobs = response.data.jobs;
        })
        .catch((error) => {
          console.error("Error fetching jobs:", error);
        });
    },
    fetchSkills() {
      api
        .get('/skills')
        .then((response) => {
          console.log(response.data.skills)
          this.skills = response.data.skills || response.data;
        })
        .catch((error) => {
          console.error("Error fetching skills:", error);
        });
    },

  },
};
</script>
