<template>
  <div id="page">
    <div class="wrap-login-page">
      <div class="flex-grow flex flex-column justify-center gap30">
        <div class="login-box">
          <div>
            <h3>Login to account</h3>
            <div class="body-text">Enter your email & password to login</div>
          </div>
          <form
            class="form-login flex flex-column gap24"
            @submit.prevent="handleLogin"
          >
            <fieldset class="email">
              <div class="body-title mb-10">
                Email address <span class="tf-color-1">*</span>
              </div>
              <input
                type="email"
                v-model="email"
                placeholder="Enter your email address"
                required
              />
            </fieldset>
            <fieldset class="password">
              <div class="body-title mb-10">
                Password <span class="tf-color-1">*</span>
              </div>
              <input
                type="password"
                v-model="password"
                placeholder="Enter your password"
                required
              />
            </fieldset>
            <div class="flex justify-between items-center">
              <div class="flex gap10">
                <input type="checkbox" id="signed" v-model="keepSignedIn" />
                <label class="body-text" for="signed">Keep me signed in</label>
              </div>
              <a href="#" class="body-text tf-color">Forgot password?</a>
            </div>
            <button type="submit" class="tf-button w-full">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

  <script>
import axios from "axios";
import { useToast } from 'vue-toastification'
import api from '../../helpers/axios';

export default {
  name: "LoginPage",
  data() {
    return {
      email: "",
      password: "",
      keepSignedIn: false,
    };
  },
  methods: {
      async handleLogin() {
        const toast = useToast()
        try {
            const toast = useToast()
          const response = await api.post('/login', {
            email: this.email,
            password: this.password
          })

          const token = response.data.access_token
          const role = response.data.role
          localStorage.setItem('token', token)
          localStorage.setItem('role', role)
          this.$router.push('/')
          toast.success(response.data.message)
        } catch (error) {
          if (error.response) {
            toast.error(error.response.data.message || 'Login failed')
          } else {
            alert('Something went wrong')
          }
        }
      }
  },
};
</script>
