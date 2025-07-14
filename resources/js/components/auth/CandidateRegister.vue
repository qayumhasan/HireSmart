<template>
    <div class="register-container">
      <h2>Candidate Registration</h2>

      <form @submit.prevent="registerCandidate">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" v-model="form.name" required />
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" v-model="form.email" required />
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" v-model="form.password" required />
        </div>

        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" v-model="form.password_confirmation" required />
        </div>

        <div class="form-group">
          <label>Skills</label>
          <select v-model="form.skills" multiple>
            <option v-for="skill in skills" :key="skill.id" :value="skill.id">
              {{ skill.name }}
            </option>
          </select>
        </div>

        <button type="submit">Register</button>
      </form>
    </div>
  </template>
<script>
import api from '../../helpers/axios';

export default {
  name: 'CandidateRegister',
  data() {
    return {
      form: {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        skills: [],
      },
      skills: [],
    };
  },
  mounted() {
    this.loadSkills();
  },
  methods: {
    loadSkills() {
      api.get('/skills').then((res) => {
        this.skills = res.data.skills;
      }).catch((err) => {
        console.error('Failed to fetch skills:', err);
      });
    },
    registerCandidate() {
      api.post('/register', {
        ...this.form,
        role: 'candidate',
      })
        .then((res) => {
          alert('Registration successful!');
          this.$router.push({ name: 'Login' });
        })
        .catch((err) => {
          console.error('Registration failed:', err);
        });
    },
  },
};
</script>

<style scoped>
.register-container {
  max-width: 500px;
  margin: 50px auto;
  padding: 30px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.form-group {
  margin-bottom: 15px;
}
label {
  font-weight: 600;
  display: block;
  margin-bottom: 5px;
}
input,
select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
button {
  padding: 10px 20px;
  background-color: #2e7d32;
  color: #fff;
  border: none;
  border-radius: 5px;
}
</style>

