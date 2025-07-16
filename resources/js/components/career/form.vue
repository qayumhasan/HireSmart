<template>
  <div>
    <div class="form-container">
      <!-- Job Details -->
      <div class="job-box">
        <div class="job-title">{{ job.title }}</div>
        <div class="company-location">Deadline: {{ formatDate(job.expires_at) }}</div>

        <div class="section">
          <h6>Skills</h6>
          <div class="skills-list">
            <span class="skill" v-for="skill in job.skills" :key="skill.id">
              {{ skill.name }}
            </span>
          </div>
        </div>

        <div class="section-title">Job Description</div>
        <p class="job-description">
          {{ job.description }}
        </p>
      </div>
    </div>

    <div class="form-container">
      <h5>Apply for This Job</h5>
      <form @submit.prevent="submitApplication(job.id)" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Full Name *</label>
          <input v-model="form.name" type="text" id="name" required />
        </div>

        <div class="form-group">
          <label for="email">Email Address *</label>
          <input v-model="form.email" type="email" id="email" required />
        </div>

        <div class="form-group">
          <label for="phone">Phone Number *</label>
          <input v-model="form.phone" type="tel" id="phone" required />
        </div>

        <div class="form-group">
          <label for="resume">Upload Resume (PDF/DOC) *</label>
          <input
            @change="handleResumeUpload"
            type="file"
            id="resume"
            accept=".pdf,.doc,.docx"
            required
          />
        </div>

        <div class="form-group">
          <label for="cover">Cover Letter</label>
          <textarea
            v-model="form.cover"
            id="cover"
            placeholder="Write your message or cover letter..."
          ></textarea>
        </div>

        <button type="submit" class="submit-btn">Submit Application</button>
      </form>
    </div>
  </div>
</template>

  <script>
import axios from "axios";
import { useToast } from "vue-toastification";
import api from "../../helpers/axios";

export default {
  data() {
    return {
      job: {},
      form: {
        name: "",
        email: "",
        phone: "",
        resume: null,
        cover: "",
      },
      toast: useToast(),
    };
  },
  mounted() {
    this.fetchJob();
  },
  methods: {
    fetchJob() {
      api
        .get(`/jobs/${this.$route.params.id}`)
        .then((res) => {
          this.job = res.data.job || res.data;
        })
        .catch((err) => console.error("Failed to load job:", err));
    },
    handleResumeUpload(event) {
      this.form.resume = event.target.files[0];
    },
    async submitApplication(id) {
      const formData = new FormData();
      formData.append("name", this.form.name);
      formData.append("email", this.form.email);
      formData.append("phone", this.form.phone);
      formData.append("resume", this.form.resume);
      formData.append("cover", this.form.cover);

      try {
        const response = await api.post(
          `/jobs/${this.job.id}/apply`,
          formData,
          {
            headers: {
              "Content-Type": "multipart/form-data",
            },
          }
        );
        this.$router.push({name:"careerList"});
        this.toast.success(response.data.message);
        this.form = { name: "", email: "", phone: "", resume: null, cover: "" };
      } catch (error) {
        const message = error.response?.data?.message || "Submission failed";
        this.toast.error(message);
      }
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
.form-container {
  max-width: 600px;
  margin: 50px auto;
  background-color: #fff;
  padding: 30px 40px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.form-container h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
  font-weight: 600;
  color: #444;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea,
input[type="file"] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 14px;
  box-sizing: border-box;
}

textarea {
  resize: vertical;
  height: 120px;
}

.submit-btn {
  width: 100%;
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 14px;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit-btn:hover {
  background-color: #0056b3;
}

.job-box {
  max-width: 800px;
  margin: 40px auto;
  background: #fff;
  border-radius: 10px;
  padding: 30px;
}

.job-title {
  font-size: 28px;
  font-weight: bold;
  color: #333;
}

.company-location {
  font-size: 16px;
  color: #666;
  margin-bottom: 20px;
}

.section-title {
  font-size: 18px;
  font-weight: 600;
  margin-top: 25px;
  margin-bottom: 10px;
  color: #444;
}

.job-description {
  font-size: 15px;
  color: #555;
  line-height: 1.6;
}

.skills-list {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 10px;
}

.skill {
  background-color: #e1ecf4;
  color: #0366d6;
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 14px;
}
</style>
