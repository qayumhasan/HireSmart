<template>
  <div class="header-dashboard w-100">
    <div class="wrap">
      <div class="header-left">
        <a href="index.html">
          <h1>Hello World</h1>
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
                  <span class="body-title mb-2">{{ user.name }}</span>
                  <span class="text-tiny">{{ user.role }}</span>
                </span>
              </span>
            </button>
            <ul
              class="dropdown-menu dropdown-menu-end has-content show"
              aria-labelledby="dropdownMenuButton3"
              style="
                position: absolute;
                inset: 0px auto auto 0px;
                margin: 0px;
                transform: translate(-18px, 39px);
              "
            >
              <li>
                <router-link
                  :to="{ name: 'CandidateAccount' }"
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
import axios from "axios";
import api from "../../../helpers/axios";
import router from "../../../router";

export default {
    data(){
        return {
            user:{},
        }
    },
    mounted(){
        this.getUser();
    },
  methods: {
    logout() {
      api
        .post("/logout", {}, { withCredentials: true })
        .then(() => {
          localStorage.removeItem("token");
          localStorage.removeItem("role");
          router.push({ name: "Login" });
        })
        .catch((error) => {
          console.error("Logout error:", error);
          alert("Logout failed. Please try again.");
        });
    },
    getUser() {
      api
        .get("/me", {})
        .then((res) => {
            this.user = res?.data
        })
        .catch((error) => {
          console.error("Logout error:", error);
          alert("Logout failed. Please try again.");
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
