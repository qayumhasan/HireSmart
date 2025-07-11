<template>
    <div class="main-content-inner">
      <!-- main-content-wrap -->
      <div class="main-content-wrap">
        <!-- all-attribute -->
        <div class="wg-box">
          <div class="flex items-center justify-between gap10 flex-wrap">
            <div class="wg-filter flex-grow">
              <h3>All Locations</h3>
            </div>
            <router-link
              :to="{ name: 'locationCreate' }"
              class="tf-button style-1 w208"
            >
              <i class="icon-plus"></i>Add New Location
            </router-link>
          </div>
          <div class="wg-table table-all-attribute">
            <ul class="table-title flex gap20 mb-14">
              <li>
                <div class="body-title">Name</div>
              </li>
              <li>
                <div class="body-title">Action</div>
              </li>
            </ul>
            <ul class="flex flex-column">
              <li
                v-for="location in locations"
                :key="location.id"
                class="attribute-item flex items-center justify-between gap20"
              >
                <div class="name">
                  <a href="#" class="body-title-2">{{ location.name }}</a>
                </div>

                <div class="list-icon-function">
                  <router-link
                    :to="{ name: 'locationEdit', params: { id: location.id } }"
                    class="item edit"
                  >
                    <i class="icon-edit-3"></i>
                  </router-link>

                  <div class="item trash" @click="deleteLocation(location.id)">
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
        locations: [],
      };
    },
    mounted() {
      this.fetchLocations();
    },
    methods: {
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
      deleteLocation(id){
        api
          .delete(`/location/delete/${id}`)
          .then((response) => {
            this.fetchLocations();
            alert('Location deleted successfully.')
          })
          .catch((error) => {
            console.error("Error fetching locations:", error);
          });
      }
    },
  };
  </script>
