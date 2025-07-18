<template>
  <div class="main-content-inner">
    <div class="main-content-wrap">
      <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Edit Vacancy</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
          <li><a href="#"><div class="text-tiny">Dashboard</div></a></li>
          <li><i class="icon-chevron-right"></i></li>
          <li><a href="#"><div class="text-tiny">Jobs</div></a></li>
          <li><i class="icon-chevron-right"></i></li>
          <li><div class="text-tiny">Edit Job</div></li>
        </ul>
      </div>

      <div class="wg-box">
        <form @submit.prevent="updateJob" class="form-new-product form-style-1">
          <fieldset class="name">
            <div class="body-title">Job Title</div>
            <input type="text" placeholder="Job Title" v-model="form.title" required />
          </fieldset>

          <fieldset class="name">
            <div class="body-title">Description</div>
            <textarea placeholder="Job Description" v-model="form.description" required></textarea>
          </fieldset>

          <fieldset class="name">
            <div class="body-title">Location</div>
            <select v-model="form.location_id" required>
              <option v-for="location in locations" :key="location.id" :value="location.id">
                {{ location.name }}
              </option>
            </select>
          </fieldset>

          <fieldset class="name">
            <div class="body-title">Required Skills</div>
            <select v-model="form.skills" multiple required>
              <option v-for="skill in skills" :key="skill.id" :value="skill.id">
                {{ skill.name }}
              </option>
            </select>
          </fieldset>

          <fieldset class="name">
            <div class="body-title">Min Salary</div>
            <input type="number" step="0.01" v-model.number="form.min_salary" required />
          </fieldset>

          <fieldset class="name">
            <div class="body-title">Max Salary</div>
            <input type="number" step="0.01" v-model.number="form.max_salary" required />
          </fieldset>

          <fieldset class="name">
            <div class="body-title">Is Active</div>
            <select v-model="form.is_active" required>
              <option :value="true">Active</option>
              <option :value="false">Inactive</option>
            </select>
          </fieldset>

          <fieldset class="name">
            <div class="body-title">Posted At</div>
            <input type="date" v-model="form.posted_at" required />
          </fieldset>

          <fieldset class="name">
            <div class="body-title">Expires At</div>
            <input type="date" v-model="form.expires_at" required />
          </fieldset>

          <div class="bot">
            <div></div>
            <button class="tf-button w208" type="submit">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import api from '../../helpers/axios';
import { useToast } from 'vue-toastification'

export default {
  name: 'JobEdit',
  data() {
    return {
      jobId: this.$route.params.id,
      form: {
        title: '',
        description: '',
        min_salary: null,
        max_salary: null,
        is_active: true,
        posted_at: '',
        expires_at: '',
        location_id: '',
        skills: [],
      },
      skills: [],
      locations: [],
    };
  },
  mounted() {
    this.fetchSkills();
    this.fetchLocations();
    this.fetchJob();
  },
  methods: {
    fetchSkills() {
      api.get('/skills')
        .then((res) => {
          this.skills = res.data.skills || res.data;
        })
        .catch((err) => console.error('Failed to load skills:', err));
    },
    fetchLocations() {
      api.get('/locations')
        .then((res) => {
          this.locations = res.data.locations || res.data;
        })
        .catch((err) => console.error('Failed to load locations:', err));
    },
    fetchJob() {
      api.get(`/jobs/${this.jobId}`)
        .then((res) => {
          const job = res.data.job || res.data;
          this.form = {
            title: job.title,
            description: job.description,
            min_salary: job.min_salary,
            max_salary: job.max_salary,
            is_active: job.is_active,
            posted_at: job.posted_at?.split('T')[0],
            expires_at: job.expires_at?.split('T')[0],
            location_id: job?.location?.id,
            skills: job.skills?.map(skill => skill.id) || [],
          };
        })
        .catch((err) => console.error('Failed to load job:', err));
    },
    updateJob() {
        const toast = useToast()
      if (this.form.min_salary > this.form.max_salary) {
        alert('Min salary cannot be greater than max salary.');
        return;
      }

      const data = {
        ...this.form,
        posted_at: this.form.posted_at + 'T00:00:00.000000Z',
        expires_at: this.form.expires_at + 'T00:00:00.000000Z',
      };

      api.put(`/jobs/${this.jobId}`, data)
        .then(() => {
            toast.success('Job updated successfully!');
          this.$router.push({ name: 'Joblist' });
        })
        .catch((error) => {
      if (error.response) {
        const response = error.response;
        if (response.status === 422 && response.data.errors) {
          const errors = response.data.errors;
          for (let field in errors) {
            toast.error(errors[field][0]);
          }
        }
        else if (response.data.message) {
          toast.error(response.data.message);
        } else {
          toast.error("Something went wrong.");
        }
      }
    });
    },
  },
};
</script>
