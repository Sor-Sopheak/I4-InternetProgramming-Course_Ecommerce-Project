<script>
import { RouterLink, RouterView } from 'vue-router'
import Index from './views/Index.vue';
import Checkout from './views/Checkout.vue';
import GuestNavbar from './components/NavbarGuest.vue';
import UserNavbar from './components/NavbarUser.vue';
import {useAuthStore} from './store/authStore'

export default {
  data(){
    return{
      isCheckout: false,
      name: 'App',
      navbarComponent: GuestNavbar, // Start with the GuestNavbar by default
      token: localStorage.getItem('token'),
      authStore: useAuthStore()
    };
  },
  created() {
    const token = localStorage.getItem("token");
    if(token) {
      this.navbarComponent = UserNavbar;
    }else {
      this.navbarComponent = GuestNavbar;
    }

  },
  computed: {
    // isLogin() {
    //   return this.token == null ? false : true
    // }
  },  
  
  components: {
    Index,
    Checkout, GuestNavbar, UserNavbar
  }
};
</script>

<template>
  <div id="app">
     <!-- <div>
      <Checkout @cancel="isCheckout = false" v-if="isCheckout"/>
      <Index v-else @checkout="isCheckout = true"/>
    </div> -->

    <!-- <div>{{ authStore.isAuth }}</div> -->
    <UserNavbar v-if="authStore.isAuth == true"/>
    <GuestNavbar v-else/>

    <!-- <div>{{ authStore.isAuth }}</div>
    <component :is="navbarComponent"></component> -->
    <!-- <Nav/> -->

    <router-view></router-view>
    
  </div>
</template>

