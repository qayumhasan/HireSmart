<template>
    <div class="main-content" style="margin: 20px;">
        <div class="main-content-inner">
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
      <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>HireSmart Career Page</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">

        </ul>
      </div>
      <!-- product-list -->
      <div class="wg-box">
        <div class="flex items-center justify-between gap10 flex-wrap">
          <div class="wg-filter flex-grow">
            <div class="flex gap10">
              <div class="select w200">
                <select class="">
                  <option>Bulk Action</option>
                  <option>Action 1</option>
                  <option>Action 2</option>
                </select>
              </div>
              <!-- <button class="tf-button style-1 w128">Filters</button> -->
            </div>
            <form class="form-search">
              <fieldset class="name">
                <input
                  type="text"
                  placeholder="Search here..."
                  class=""
                  name="name"
                  tabindex="2"
                  value=""
                  aria-required="true"
                  required=""
                />
              </fieldset>
              <div class="button-submit">
                <button class="" type="submit">
                  <i class="icon-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="wg-table table-product-list">
          <ul class="table-title flex gap20 mb-14">
            <li>
              <div class="body-title">Product</div>
            </li>
            <li>
              <div class="body-title">Product ID</div>
            </li>
            <li>
              <div class="body-title">Price</div>
            </li>
            <li>
              <div class="body-title">Quantity</div>
            </li>
            <li>
              <div class="body-title">Sale</div>
            </li>
            <li>
              <div class="body-title">Stock</div>
            </li>
            <li>
              <div class="body-title">Start date</div>
            </li>
            <li>
              <div class="body-title">Action</div>
            </li>
          </ul>
          <ul class="flex flex-column">
            <li class="product-item gap14">
              <div class="flex items-center justify-between gap20 flex-grow">
                <div class="name">
                  <a href="product-list.html" class="body-title-2"
                    >Dog Food, Chicken &amp; Chicken Liver Recipe...</a
                  >
                </div>
                <div class="body-text">#7712309</div>
                <div class="body-text">$1,452.500</div>
                <div class="body-text">1,638</div>
                <div class="body-text">20</div>
                <div>
                  <div class="block-not-available">Out of stock</div>
                </div>
                <div class="body-text">$28,672.36</div>
                <div class="list-icon-function">
                    <button class="tf-button w208" type="submit">Apply Now</button>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="divider"></div>

      </div>
      <!-- /product-list -->
    </div>
    <!-- /main-content-wrap -->
  </div>
    </div>

</template>

  <script>
import api from "../../helpers/axios";

export default {
  data() {
    return {
      jobs: [],
    };
  },
  mounted() {
    this.fetchJobs();
  },
  methods: {
    fetchJobs() {
      const apiUrl = import.meta.env.VITE_API_BASE_URL;
      api
        .get(`${apiUrl}/jobs`)
        .then((response) => {
          this.jobs = response.data.jobs;
        })
        .catch((error) => {
          console.error("Error fetching jobs:", error);
        });
    },
  },
};
</script>
