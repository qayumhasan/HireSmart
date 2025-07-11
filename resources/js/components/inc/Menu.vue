<template>
  <div class="center-item">
    <div class="center-heading">All page</div>
    <ul class="menu-list">
      <li class="menu-item">
        <router-link :to="{ name: 'Joblist' }" class="">
          <div class="icon"><i class="icon-pie-chart"></i></div>
          <div class="text">Job List</div>
        </router-link>
        <router-link :to="{ name: 'skillList' }" class="">
          <div class="icon"><i class="icon-pie-chart"></i></div>
          <div class="text">Skills</div>
        </router-link>
        <router-link :to="{ name: 'locationList' }" class="">
          <div class="icon"><i class="icon-pie-chart"></i></div>
          <div class="text">Locations</div>
        </router-link>
        <router-link :to="{ name: 'careerList' }" class="">
          <div class="icon"><i class="icon-pie-chart"></i></div>
          <div class="text">Career List</div>
        </router-link>
      </li>
    </ul>
  </div>
</template>
<script>
export default {};
</script>
