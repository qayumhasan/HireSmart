<template>
  <div class="main-content" style="margin: 20px">
    <div class="main-content-inner">
      <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">

            <div class="header-dashboard" style="width: calc(100%); !important">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="index.html">
                                    <img class="" id="logo_header_mobile" alt="" data-light="images/logo/logo.png" data-dark="images/logo/logo-dark.png" data-width="154px" data-height="52px" data-retina="images/logo/logo@2x.png">
                                </a>
                                <div class="button-show-hide">
                                    <i class="icon-menu-left"></i>
                                </div>
                                <form class="form-search flex-grow">
                                    <fieldset class="name">
                                        <input type="text" placeholder="Search here..." class="show-search" name="name" tabindex="2" value="" aria-required="true" required="">
                                    </fieldset>
                                    <div class="button-submit">
                                        <button class="" type="submit"><i class="icon-search"></i></button>
                                    </div>
                                    <div class="box-content-search" id="box-content-search">
                                        <ul class="mb-24">
                                            <li class="mb-14">
                                                <div class="body-title">Top selling product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">

                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Dog Food Rachael Ray Nutrish®</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">

                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Natural Dog Food Healthy Dog Food</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">

                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Freshpet Healthy Dog Food and Cat</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </div>
                                </form>
                            </div>
                            <div class="header-grid">

                                <div class="header-item button-dark-light">
                                    <i class="icon-moon"></i>
                                </div>
                                <div class="popup-wrap noti type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-bell"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <h6>Message</h6>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">

                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Cameron Williamson</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Hello?</div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="popup-wrap message type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-message-square"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton2">
                                            <li>
                                                <h6>Notifications</h6>
                                            </li>
                                            <li>
                                                <div class="message-item item-1">
                                                    <div class="image">
                                                        <i class="icon-noti-1"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Discount available</div>
                                                        <div class="text-tiny">Morbi sapien massa, ultricies at rhoncus at, ullamcorper nec diam</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-2">
                                                    <div class="image">
                                                        <i class="icon-noti-2"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Account has been verified</div>
                                                        <div class="text-tiny">Mauris libero ex, iaculis vitae rhoncus et</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-3">
                                                    <div class="image">
                                                        <i class="icon-noti-3"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order shipped successfully</div>
                                                        <div class="text-tiny">Integer aliquam eros nec sollicitudin sollicitudin</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-4">
                                                    <div class="image">
                                                        <i class="icon-noti-4"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order pending: <span>ID 305830</span></div>
                                                        <div class="text-tiny">Ultricies at rhoncus at ullamcorper</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-item button-zoom-maximize">
                                    <div class="">
                                        <i class="icon-maximize"></i>
                                    </div>
                                </div>

                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle show" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="true">
                                            <span class="header-user wg-user">
                                                <span class="image">

                                                </span>
                                                <span class="flex flex-column">
                                                    <span class="body-title mb-2">Kristin Watson</span>
                                                    <span class="text-tiny">Admin</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content show" aria-labelledby="dropdownMenuButton3" data-popper-placement="bottom-end" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-18px, 39px);">
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <div class="body-title-2">Account</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-mail"></i>
                                                    </div>
                                                    <div class="body-title-2">Inbox</div>
                                                    <div class="number">27</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-file-text"></i>
                                                    </div>
                                                    <div class="body-title-2">Taskboard</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="setting.html" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-settings"></i>
                                                    </div>
                                                    <div class="body-title-2">Setting</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-headphones"></i>
                                                    </div>
                                                    <div class="body-title-2">Support</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login.html" class="user-item">
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
        </div>
        <div class="gap22 cols mb-5" style="margin-top: 5%;">
          <div class="row">
            <div class="col">
              <fieldset class="male">
                <div class="body-title mb-10">
                  Search By Key Word <span class="tf-color-1">*</span>
                </div>
                <input
                  type="text"
                  @input="performSearch"
                  class="form-control"
                  v-model="searchKeyword"
                  name="search"
                  placeholder="Enter your key word"
                />
              </fieldset>
            </div>
            <div class="col">
              <fieldset class="male">
                <div class="body-title mb-10">
                  Search By Location <span class="tf-color-1">*</span>
                </div>
                <select class="form-control" v-model="selectedLocation" @change="performSearch">
                  <option
                    v-for="(location, index) in locations"
                    :value="location.id"
                    :key="index"

                  >
                    {{ location.name }}
                  </option>
                </select>
              </fieldset>
            </div>
          </div>
        </div>

        <!-- Job List -->
        <div class="wg-box">
          <div class="wg-table table-product-list">
            <ul class="table-title flex gap20 mb-14">
              <li><div class="body-title">Job Title</div></li>
              <li><div class="body-title">Skills</div></li>
              <li><div class="body-title">Posted At</div></li>
              <li><div class="body-title">Deadline</div></li>
              <li><div class="body-title">Action</div></li>
            </ul>

            <ul class="flex flex-column" v-if="jobs.length > 0">
              <li v-for="job in jobs" :key="job.id" class="product-item gap14">
                <div class="flex items-center justify-between gap20 flex-grow">
                  <div class="body-text font-semibold">
                    {{ job.title }}
                  </div>

                  <div class="body-text">
                    <div class="skills">
                      <div
                        class="skill-badge"
                        v-for="(skill, index) in job.skills"
                        :key="index"
                      >
                        {{ skill.name }}
                      </div>
                    </div>
                  </div>

                  <div class="body-text">
                    {{ formatDate(job.posted_at) }}
                  </div>
                  <div class="body-text">
                    {{ formatDate(job.expires_at) }}
                  </div>

                  <router-link
                    :to="{ name: 'applicationForm', params: { id: job.id } }"
                    class="tf-button w208"
                  >
                    Apply Now
                  </router-link>
                </div>
              </li>
            </ul>
            <ul v-else>
                <div class="body-text font-semibold">
                    No Data Found !
                  </div>
            </ul>
          </div>
        </div>
        <!-- /Job List -->
      </div>
    </div>
  </div>
</template>
<script>
import api from "../../helpers/axios";

export default {
  name: "CareerPageComponent",
  data() {
    return {
      jobs: [],
      locations: [],
    };
  },
  mounted() {
    this.fetchJobs();
    this.fetchLocations();
  },
  methods: {
    fetchLocations() {
      api
        .get("/locations")
        .then((response) => {
          this.locations = response.data.locations || response.data;
        })
        .catch((error) => {
          console.error("Error fetching locations:", error);
        });
    },
    fetchJobs() {
      api
        .get(`/jobs`)
        .then((response) => {
          this.jobs = response.data.jobs;
        })
        .catch((error) => {
          console.error("Error fetching jobs:", error);
        });
    },

    performSearch() {
      const params = {
        keyword: this.searchKeyword,
        location_id: this.selectedLocation,
      };

      api
        .post("/jobs/search", params )
        .then((res) => {
          this.jobs = res.data.jobs;
        })
        .catch((err) => {
          console.error("Search failed:", err);
        });
    },
    formatDate(date) {
      if (!date) return "-";
      const options = { year: "numeric", month: "short", day: "numeric" };
      return new Date(date).toLocaleDateString(undefined, options);
    },
  },
};
</script>
<style scoped>
.skills {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.skill-badge {
  background-color: #e1ecf4;
  color: #0366d6;
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 14px;
}
</style>
