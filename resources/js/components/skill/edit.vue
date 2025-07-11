<template>
  <div class="main-content-inner">
    <div class="main-content-wrap">
      <div class="flex items-center flex-wrap justify-between gap20 mb-27">
        <h3>Edit Skill</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
          <li><a href="#"><div class="text-tiny">Dashboard</div></a></li>
          <li><i class="icon-chevron-right"></i></li>
          <li><a href="#"><div class="text-tiny">Attributes</div></a></li>
          <li><i class="icon-chevron-right"></i></li>
          <li><div class="text-tiny">Edit Skill</div></li>
        </ul>
      </div>

      <div class="wg-box">
        <form @submit.prevent="submitSkill" class="form-new-product form-style-1">
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
            <button class="tf-button w208" type="submit">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import api from '../../helpers/axios';

export default {
  data() {
    return {
      form: {
        name: '',
      },
    };
  },
  mounted() {
    this.fetchSkill();
  },
  methods: {
    fetchSkill() {
      const id = this.$route.params.id;
      api.get(`/skill/edit/${id}`)
        .then((response) => {
          this.form.name = response.data.skill.name;
        })
        .catch((error) => {
          console.error('Failed to fetch Skill:', error);
        });
    },
    submitSkill() {
      const id = this.$route.params.id;
      api.put(`/skill/update/${id}`, this.form)
        .then(() => {
          alert('Skill updated successfully!');
          this.$router.push({ name: 'skillList' });
        })
        .catch((error) => {
          console.error('Failed to update Skill:', error);
          alert('Something went wrong.');
        });
    },
  },
};
</script>
