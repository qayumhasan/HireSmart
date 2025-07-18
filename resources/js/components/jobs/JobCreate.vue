<template>
    <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Add New Vacancy</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Attributes</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Add Attribute</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- new-attribute -->
                                <div class="wg-box">
                                    <form @submit.prevent="submitJob" class="form-new-product form-style-1">
    <fieldset class="name">
      <div class="body-title">Job Title</div>
      <input
        type="text"
        placeholder="Job Title"
        v-model="form.title"
        required
      />
    </fieldset>

    <fieldset class="name">
      <div class="body-title">Description</div>
      <textarea
        placeholder="Job Description"
        v-model="form.description"
        required
      ></textarea>
    </fieldset>

    <fieldset class="name">
  <div class="body-title">Location</div>
  <select v-model="form.location_id" required>
    <option v-for="(location,index) in locations" :key="index" :value="location.id">{{ location.name }}</option>

  </select>
</fieldset>

<fieldset class="name">
  <div class="body-title">Required Skills</div>
  <select v-model="form.skills" multiple required>

    <option v-for="(skill,index) in skills" :key="index" :value="skill.id">{{ skill.name }}</option>

  </select>
</fieldset>

    <fieldset class="name">
      <div class="body-title">Min Salary</div>
      <input
        type="number"
        step="0.01"
        placeholder="Min Salary"
        v-model.number="form.min_salary"
        required
      />
    </fieldset>

    <fieldset class="name">
      <div class="body-title">Max Salary</div>
      <input
        type="number"
        step="0.01"
        placeholder="Max Salary"
        v-model.number="form.max_salary"
        required
      />
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
      <input
        type="date"
        v-model="form.posted_at"
        required
      />
    </fieldset>

    <fieldset class="name">
      <div class="body-title">Expires At</div>
      <input
        type="date"
        v-model="form.expires_at"
        required
      />
    </fieldset>

    <div class="bot">
      <div></div>
      <button class="tf-button w208" type="submit">Save</button>
    </div>
  </form>
                                </div>
                                <!-- /new-category -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
</template>

<script>
import axios from "axios";
import api from '../../helpers/axios'
import router from '../../router'
import { useToast } from 'vue-toastification'

export default {
  name:'JobComponent',
  data() {
    return {
      form: {
        title: "",
        description: "",
        min_salary: null,
        max_salary: null,
        is_active: true,
        posted_at: "",
        expires_at: "",
        location_id: "",
        skills: "",
      },
      skills:'',
      locations:''
    };
  },
  mounted(){
    this.fetchSkills();
    this.fetchLocations();
  },
  methods: {

    submitJob() {
        const toast = useToast()
      if (this.form.min_salary > this.form.max_salary) {
        toast.error("Min salary cannot be greater than max salary.")
        return;
      }
      const postData = { ...this.form };
      postData.posted_at = this.form.posted_at + "T00:00:00.000000Z";
      postData.expires_at = this.form.expires_at + "T00:00:00.000000Z";

      api
        .post('/jobs', postData)
        .then((response) => {
            router.push({name:'Joblist'})
            toast.success(response.data.message)
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
    fetchSkills() {
      api
        .get('/skills')
        .then((response) => {
          this.skills = response.data.skills || response.data;
        })
        .catch((error) => {
          console.error("Error fetching skills:", error);
        });
    },
    fetchLocations() {
        api
          .get('/locations')
          .then((response) => {
            this.locations = response.data.locations || response.data;
          })
          .catch((error) => {
            console.error("Error fetching locations:", error);
          });
      },
  },
};
</script>
