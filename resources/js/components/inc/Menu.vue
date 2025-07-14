<template>
  <div class="center-item">
    <div class="center-heading">All page</div>
    <ul class="menu-list">
      <!-- Job List: visible to admin and employer -->
      <li v-if="role === 'admin' || role === 'employer'" class="menu-item">
        <router-link :to="{ name: 'Joblist' }" class="">
          <div class="icon"><i class="icon-pie-chart"></i></div>
          <div class="text">Job List</div>
        </router-link>
      </li>

      <!-- Skills: visible to admin and employer -->
      <li v-if="role === 'admin'" class="menu-item">
        <router-link :to="{ name: 'skillList' }" class="">
          <div class="icon"><i class="icon-pie-chart"></i></div>
          <div class="text">Skills</div>
        </router-link>
      </li>

      <!-- Locations: visible to admin and employer -->
      <li v-if="role === 'admin'" class="menu-item">
        <router-link :to="{ name: 'locationList' }" class="">
          <div class="icon"><i class="icon-pie-chart"></i></div>
          <div class="text">Locations</div>
        </router-link>
      </li>

      <!-- Career List: visible to candidate and admin -->
      <li v-if="role === 'candidate' || role === 'admin'" class="menu-item">
        <router-link :to="{ name: 'careerList' }" class="">
          <div class="icon"><i class="icon-pie-chart"></i></div>
          <div class="text">Career List</div>
        </router-link>
      </li>
    </ul>
  </div>
</template>

  <script>
export default {
  data() {
    return {
      role: null,
    };
  },
  created() {
    this.role = localStorage.getItem("role");
  },
};
</script>

  <style scoped>
/* your styles here */
</style>
