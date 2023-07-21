<script>
import { RouterLink, RouterView } from 'vue-router'
import Index from './views/Index.vue';
import Checkout from './views/Checkout.vue';

export default {
  data(){
    return{
      isCheckout: false,
      name: 'App',
    };
  },
  components: {
    Index,
    Checkout
  }
};
</script>

<template>
  <div id="app">
     <!-- <div>
      <Checkout @cancel="isCheckout = false" v-if="isCheckout"/>
      <Index v-else @checkout="isCheckout = true"/>
    </div> -->

    <router-view></router-view>
    
  </div>
</template>


