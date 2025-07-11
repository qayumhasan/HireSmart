<template>
  <div class="main-content-inner">
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
      <!-- all-attribute -->
      <div class="wg-box">
        <div class="flex items-center justify-between gap10 flex-wrap">
          <div class="wg-filter flex-grow">
            <h3>All Skills</h3>
          </div>
          <router-link
            :to="{ name: 'skillCreate' }"
            class="tf-button style-1 w208"
          >
            <i class="icon-plus"></i>Add New Skill
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
              v-for="skill in skills"
              :key="skill.id"
              class="attribute-item flex items-center justify-between gap20"
            >
              <div class="name">
                <a href="#" class="body-title-2">{{ skill.name }}</a>
              </div>

              <div class="list-icon-function">
                <router-link
                  :to="{ name: 'skillEdit', params: { id: skill.id } }"
                  class="item edit"
                >
                  <i class="icon-edit-3"></i>
                </router-link>

                <div class="item trash" @click="deleteSkill(skill.id)">
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
  name:'SkillComponent',
  data() {
    return {
      skills: [],
    };
  },
  mounted() {
    this.fetchSkills();
  },
  methods: {
    fetchSkills() {
      api
        .get('/skills')
        .then((response) => {
          console.log(response.data.skills)
          this.skills = response.data.skills || response.data;
        })
        .catch((error) => {
          console.error("Error fetching skills:", error);
        });
    },
    deleteSkill(id){
      api
        .delete(`/skill/delete/${id}`)
        .then((response) => {
          this.fetchSkills();
          alert('Skill deleted successfully.')
        })
        .catch((error) => {
          console.error("Error fetching Skills:", error);
        });
    }
  },
};
</script>
