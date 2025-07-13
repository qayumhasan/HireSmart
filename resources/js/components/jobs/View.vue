<template>
    <div class="container">

        <!-- Job Description -->
        <div class="job-box">
            <div class="job-title">{{ job.title }}</div>
            <div class="company-location">Deadline: {{ job.expires_at }}</div>
            <div class="section">
      <h2>Skills</h2>
      <div class="skills">
        <div class="skill-badge" v-for="(skill,index) in job.skills" :key="index">{{ skill.name }}</div>
      
      </div>
    </div>

            <div class="section-title">Job Description</div>
            <div class="description">
                {{ job.description }}
            </div>

            
        </div>

        <!-- Candidate List -->
        <div class="applicant-list">
            <div class="section-title">Applicants</div>

            <!-- Example applicant -->
            <div class="applicant-item">
                <div class="applicant-details">
                    <div class="applicant-name">Qayum Hasan</div>
                    <div class="applicant-email">qayum@example.com</div>
                </div>
                <div class="applicant-actions">
                    <a href="#">View Resume</a>
                    <a href="#">Contact</a>
                </div>
            </div>

            <div class="applicant-item">
                <div class="applicant-details">
                    <div class="applicant-name">Fatema Akter</div>
                    <div class="applicant-email">fatema@example.com</div>
                </div>
                <div class="applicant-actions">
                    <a href="#">View Resume</a>
                    <a href="#">Contact</a>
                </div>
            </div>

            <!-- If no applicants -->
            <!-- <div class="no-applicants">No applications received yet.</div> -->

        </div>
    </div>
</template>
<script>
import api from '../../helpers/axios';

export default {
  name: 'JobView',
  data() {
    return {
     job :{}
    };
  },
  mounted() {
    this.fetchJob();
  },
  methods: {
   
    fetchJob() {
      api.get(`/jobs/${this.$route.params.id}`)
        .then((res) => {
          this.job = res.data.job || res.data;
          
        })
        .catch((err) => console.error('Failed to load job:', err));
    },
    
  },
};
</script>
<style scoped>

.container {
      /* max-width: 1100px; */
      margin: 40px auto;
      padding: 20px;
    }

    .job-box {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      margin-bottom: 40px;
    }

    .job-title {
      font-size: 26px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .company-location {
      color: #666;
      font-size: 16px;
      margin-bottom: 20px;
    }

    .section-title {
      font-size: 20px;
      font-weight: 600;
      margin-top: 30px;
      margin-bottom: 15px;
      color: #333;
    }

    .description {
      line-height: 1.6;
      color: #444;
    }

    .applicant-list {
      background-color: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .applicant-item {
      border-bottom: 1px solid #eee;
      padding: 15px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .applicant-item:last-child {
      border-bottom: none;
    }

    .applicant-details {
      flex: 1;
    }

    .applicant-name {
      font-weight: bold;
      color: #007bff;
    }

    .applicant-email {
      color: #666;
    }

    .applicant-actions a {
      text-decoration: none;
      background-color: #28a745;
      color: white;
      padding: 8px 14px;
      border-radius: 5px;
      margin-left: 10px;
      font-size: 14px;
    }

    .applicant-actions a:hover {
      background-color: #218838;
    }

    .no-applicants {
      text-align: center;
      color: #999;
      padding: 20px;
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

</style>