<template>
  <div class="main-content-inner">
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
      <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Add Location</h3>
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
            <div class="text-tiny">Add Skill</div>
          </li>
        </ul>
      </div>
      <!-- new-attribute -->
      <div class="wg-box">
        <form @submit.prevent="submitLocation" class="form-new-product form-style-1">
          <fieldset class="name">
            <div class="body-title">Name</div>
            <input
              type="text"
              placeholder="Name"
              v-model="form.name"
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
import axios from 'axios';
import api from '../../helpers/axios'
import router from '../../router'

export default {
  data() {
    return {
      form: {
        name: '',
      },
    };
  },
  methods: {
    async submitLocation() {
      try {
        const response = await api.post('/location/store', this.form);
        alert('Location added successfully');
        this.form.name = '';
        router.push({ name: 'locationList' })
      } catch (error) {
        alert('Something went wrong while adding the location.');
      }
    },
  },
};
</script>

