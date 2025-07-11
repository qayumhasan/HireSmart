const state = () => ({
    user: null,
    token: localStorage.getItem('token') || null,
    role: localStorage.getItem('role') || null,
  })

  const mutations = {
    setUser(state, user) {
      state.user = user
    },
    setToken(state, token) {
      state.token = token
      localStorage.setItem('token', token)
    },

  }

  const getters = {
    isAuthenticated: state => !!state.token,
    userRole: state => state.role,
  }

  const actions = {
    login({ commit }, { token, role }) {
        console.log(token);
      commit('setToken', token)
      commit('setRole', role)
    },
    logout({ commit }) {
      commit('logout')
    },
  }

  export default {
    namespaced: true,
    state,
    mutations,
    actions,
    getters,
  }
