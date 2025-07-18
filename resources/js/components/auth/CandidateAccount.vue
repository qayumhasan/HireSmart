<template>
  <div class="main-content-inner">
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
      <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <HeaderComponent />
      </div>
      <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Add New User {{ user.name }}</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
          <li>
            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
          </li>
          <li>
            <i class="icon-chevron-right"></i>
          </li>
          <li>
            <a href="#"><div class="text-tiny">User</div></a>
          </li>
          <li>
            <i class="icon-chevron-right"></i>
          </li>
          <li>
            <div class="text-tiny">User Accounts</div>
          </li>
        </ul>
      </div>
      <!-- add-new-user -->
      <form
        class="form-add-new-user form-style-2"
        @submit.prevent="updateProfile"
      >
        <div class="wg-box">
          <div class="left">
            <h5 class="mb-4">Account</h5>
            <div class="body-text">
              Fill in the information below to add a new account
            </div>
          </div>
          <div class="right flex-grow">
            <fieldset class="name mb-24">
              <div class="body-title mb-10">Name</div>
              <input
                class="flex-grow"
                type="text"
                placeholder="Username"
                name="name"
                tabindex="0"
                aria-required="true"
                required=""
                v-model="form.name"
              />
            </fieldset>
            <fieldset class="email mb-24">
              <div class="body-title mb-10">Email</div>
              <input
                class="flex-grow"
                type="email"
                placeholder="Email"
                name="email"
                tabindex="0"
                aria-required="true"
                required=""
                v-model="form.email"
              />
            </fieldset>
          </div>
        </div>
        <div class="wg-box">
          <div class="left">
            <h5 class="mb-4">Locations & Expected Salary</h5>

          </div>
          <div class="right flex-grow">
            <fieldset class="category  mb-24">
              <div class="body-title mb-10">

              </div>
              <div class="select">
                <select class="" v-model="form.location_id">
                  <option v-for="(location,index) in locations" :key="index" :value="location.id" >{{ location.name }}</option>
                </select>
              </div>
            </fieldset>

            <fieldset class="email mb-24">
              <input
                class="flex-grow"
                type="text"
                placeholder="Expected Salary"
                name="expected_salary"
                tabindex="0"
                aria-required="true"
                required=""
                v-model="form.expected_salary"
              />
            </fieldset>
          </div>
        </div>
        <div class="wg-box">
          <div class="left">
            <h5 class="mb-4">Skills</h5>
            <div class="body-text">
              Items that the account is allowed to edit
            </div>
          </div>
          <div class="right flex-grow">
            <fieldset class="mb-24">
              <div class="body-title mb-10">Add Skills</div>
              <div class="radio-buttons">
                <div class="item" v-for="(skill, index) in skills" :key="index">
                  <input
                    type="checkbox"
                    :id="'skill-' + skill.id"
                    :value="skill.id"
                    name="add-product[]"
                    v-model="form.selectedSkills"
                  />
                  <label :for="'skill-' + skill.id">
                    <span class="body-title-2">{{ skill.name }}</span>
                  </label>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="bot">
          <button class="tf-button w180" type="submit">Save</button>
        </div>
      </form>
      <!-- /add-new-user -->
    </div>
    <!-- /main-content-wrap -->
  </div>
</template>
<script>
import axios from "axios";
import { useToast } from "vue-toastification";
import api from "../../helpers/axios";
import HeaderComponent from "../career/inc/header.vue";

export default {
  name: "AccountComponent",
  data() {
    return {
      user: "",
      skills: "",
      locations: [],

      form: {
        name: "",
        email: "",
        selectedSkills: [],
        location_id:'',
        expected_salary:'',
      },
    };
  },
  mounted() {
    this.getUser();
    this.getSkills();
    this.getLocations();
  },
  methods: {
    getUser() {
      api
        .get("/me", {})
        .then((res) => {
          this.user = res?.data;
          this.form.name = res?.data?.name;
          this.form.email = res?.data?.email;
          this.form.location_id = res?.data?.location_id;
          this.form.expected_salary = res?.data?.expected_salary;
          this.form.selectedSkills = this.user.skills.map((skill) => skill.id);
        })
        .catch((error) => {
          console.error("Logout error:", error);
        });
    },
    getSkills() {
      api
        .get("/skills")
        .then((response) => {
          this.skills = response.data.skills || response.data;
        })
        .catch((error) => {
          console.error("Error fetching skills:", error);
        });
    },
    getLocations() {
      api
        .get("/locations")
        .then((response) => {
          this.locations = response.data.locations || response.data;
        })
        .catch((error) => {
          console.error("Error fetching skills:", error);
        });
    },
    async updateProfile() {
      const toast = useToast();
      try {
        const response = await api.post("/profile/update", this.form);
        toast.success(response.data.message);
      } catch (error) {
        if (error.response) {
          toast.error(error.response.data.message || "Login failed");
        } else {
          alert("Something went wrong");
        }
      }
    },
  },
  components: {
    HeaderComponent,
  },
};
</script>
