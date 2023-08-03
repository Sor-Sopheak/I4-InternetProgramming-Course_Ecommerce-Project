import { defineStore } from "pinia";

export const useAuthStore = defineStore('authStore', {
  state: () => ({
    isAuth: localStorage.getItem('token') == null ? false : true,
    token: localStorage.getItem('token'),
    isCheckout: false
  }),

  getters: {
    isLogin() {
        return localStorage.getItem('token') == null ? false : true
    }
  },

  actions: {
    setIsLogin(boolean) {
        this.isAuth = boolean
   },
}
})