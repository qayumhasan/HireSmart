import axios from 'axios'
import router from '../router'

const api = axios.create({
  baseURL: import.meta.env.VITE_API_BASE_URL || 'http://localhost:8000/api',
  headers: {
    'Content-Type': 'application/json',
  },
})

api.interceptors.request.use(config => {
  const token = localStorage.getItem('token')
  if (token) {
    config.headers.Authorization = `Bearer ${token}`
  }
  return config
})

// Global response interceptor
api.interceptors.response.use(
  response => response,
  error => {
    if (error.response && error.response.status === 401 || error.response.status === 403) {
      localStorage.removeItem('token')
      localStorage.removeItem('role')
      router.push({ name: 'Login' })
    }
    return Promise.reject(error)
  }
)

export default api
