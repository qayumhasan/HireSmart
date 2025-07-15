<template>
    <div class="header-dashboard w-100">
      <div class="wrap">
        <div class="header-left">
          <a href="index.html">
            <img
              id="logo_header_mobile"
              alt=""
              data-light="images/logo/logo.png"
              data-dark="images/logo/logo-dark.png"
              data-width="154px"
              data-height="52px"
              data-retina="images/logo/logo@2x.png"
            />
          </a>
          <div class="button-show-hide">
            <i class="icon-menu-left"></i>
          </div>
          <form class="form-search flex-grow"></form>
        </div>
        <div class="header-grid">
          <div class="popup-wrap user type-header">
            <div class="dropdown">
              <button
                class="btn btn-secondary dropdown-toggle show"
                type="button"
                id="dropdownMenuButton3"
                data-bs-toggle="dropdown"
                aria-expanded="true"
              >
                <span class="header-user wg-user">
                  <span class="image"></span>
                  <span class="flex flex-column">
                    <span class="body-title mb-2">Kristin Watson</span>
                    <span class="text-tiny">Admin</span>
                  </span>
                </span>
              </button>
              <ul
                class="dropdown-menu dropdown-menu-end has-content show"
                aria-labelledby="dropdownMenuButton3"
                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-18px, 39px);"
              >
                <li>

                    <router-link
                    :to="{ name: 'CandidateAccount'}"
                    class="user-item"
                  >
                  <div class="icon">
                      <i class="icon-user"></i>
                    </div>
                    <div class="body-title-2">Account</div>
                  </router-link>
                </li>

                <li>
                  <a href="#" class="user-item" @click.prevent="logout">
                    <div class="icon">
                      <i class="icon-log-out"></i>
                    </div>
                    <div class="body-title-2">Log out</div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  import axios from 'axios';
  import api from "../../../helpers/axios";
  import router from '../../../router'

  export default {
    methods: {
      logout() {
        api.post('/logout', {}, { withCredentials: true })
          .then(() => {
            localStorage.removeItem('token')
      localStorage.removeItem('role')
      router.push({ name: 'Login' })
          })
          .catch((error) => {
            console.error('Logout error:', error);
            alert('Logout failed. Please try again.');
          });
      },
    },
  };
  </script>

  <style scoped>
  .w-100 {
    width: calc(100%) !important;
  }
  </style>
