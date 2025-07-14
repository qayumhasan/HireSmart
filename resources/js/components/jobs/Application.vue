<template>
     <div class="resume-container">
    <div class="resume-header">
      <h1>{{ application?.user?.name}}</h1>
      <p>Email: {{ application?.user?.email }}</p>
    </div>




    <div class="section">
      <h2>Cover Letter</h2>
      <p>
        {{ application?.cover_letter}}
      </p>
    </div>

    <div class="section">
      <h2>Skills</h2>
      <div class="skills">
        <div class="skill-badge" v-for="(skill,index) in application?.user?.skills" :key="index">{{ skill.name }}</div>

      </div>
    </div>

    <a :href="application.resume_path" class="download-btn"  :download="`${application?.user?.name}.pdf`">Download Resume PDF</a>
  </div>
  </template>
<script>
import api from '../../helpers/axios';

export default {
  name: 'ApplicationsViewComponent',
  data() {
    return {
        application :{}
    };
  },
  mounted() {
    this.fetchApplication();
  },
  methods: {

    fetchApplication() {
      api.get(`/jobs/${this.$route.params.id}/view`)
        .then((res) => {
          this.application = res.data.application;

        })
        .catch((err) => console.error('Failed to load job:', err));
    },

  },
};
</script>
<style scoped>
.resume-container {
      max-width: 900px;
      margin: 50px auto;
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .resume-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .resume-header h1 {
      margin: 0;
      font-size: 28px;
    }

    .resume-header p {
      color: #666;
      font-size: 16px;
      margin-top: 5px;
    }

    .section {
      margin-top: 30px;
    }

    .section h2 {
      font-size: 20px;
      color: #333;
      border-bottom: 1px solid #ddd;
      padding-bottom: 6px;
      margin-bottom: 15px;
    }

    .section p,
    .section li {
      color: #555;
      line-height: 1.6;
    }

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

    .download-btn {
      display: inline-block;
      background-color: #007bff;
      color: white;
      padding: 12px 20px;
      text-decoration: none;
      border-radius: 6px;
      margin-top: 30px;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .download-btn:hover {
      background-color: #0056b3;
    }
</style>

