<template>
    <nav class="w-full grid grid-cols-[0.5fr,1.3fr,0.5fr] font-bold border-b-2 border-gray-300 h-[60px] items-center sticky top-0 bg-white shadow z-10">
      <div class="logo flex flex-column">
        <h1 class="font-jolly font-black text-3xl ml-12">
          <span class="after:content-['M'] after:text-orange-600">Style</span>ingle
        </h1>
      </div>
      <div class="text-xl font-medium text-black flex justify-center text-center items-center">
        <router-link :to="{ name: 'home' }" class="p-4" :class="{ 'text-orange-600 underline': isHomeRoute }">Home</router-link>
        <router-link :to="{ name: 'collection' }" class="p-4" :class="{ 'text-orange-600 underline': isCollectionRoute }">Collection</router-link>
        <router-link :to="{ name: 'category' }" class="p-4" :class="{ 'text-orange-600 underline': isCategoryRoute }">Category</router-link>
        <router-link :to="{ name: 'aboutus' }" class="p-4" :class="{ 'text-orange-600 underline': isAboutUsRoute }">About Us</router-link>
        <router-link :to="{ name: 'contactus' }" class="p-4" :class="{ 'text-orange-600 underline': isContactUsRoute }">Contact Us</router-link>
      </div>


      <div class="cart flex flex-row justify-end mr-12 mt-6 h-full">
          <div class="relative inline-block text-left mr-4">
            <button @click="toggleDropdown" data-dropdown-toggle="dropdownAvatar" class="flex mx-3 bg-orange-100 rounded-full md:mr-0 focus:ring-2 focus:ring-gray-300 dark:focus:ring-orange-600" type="button">
              <div class="w-9 h-9 rounded-full flex items-center justify-center text-center">
                <span class="text-orange-600">
                  {{ first_name ? first_name[0].toUpperCase() : '' }}
                </span>
                <span>
                  {{ last_name ? last_name[0].toUpperCase() : '' }}
                </span>
              </div>
            </button>

          <div id="dropdownAvatar" :class="`${isDropdownOpen? 'h-[7rem]': 'h-0'} fixed mt-1 -ml-2 duration-150 overflow-hidden z-20 bg-black divide-y rounded-lg shadow w-44`">
            <div v-if="user" class="px-4 py-3 text-sm text-gray-900 dark:text-white">
              <div>{{ user.username }}</div>
              <div class="font-medium truncate">{{ user.email }}</div>
            </div>
            <button  @click="logout" class="py-2 w-full">
              <p class="block px-4 py-2 text-sm text-left text-gray-200 hover:bg-gray-100 dark:hover:bg-white dark:text-white dark:hover:text-black">Sign out</p>
            </button>
          </div>
          </div>
          <RouterLink to="/cart" class="flex">
            <div  class="pr-2">
              <img src="https://www.freeiconspng.com/thumbs/cart-icon/basket-cart-icon-27.png" alt="" class="w-[30px] h-[30px]">
            </div>
              <h2 class="font-itim font-black text-2xl hover:text-orange-600">Cart</h2>
          </RouterLink>
      </div>
    </nav>

    
</template>

<script>
import { RouterLink } from 'vue-router';
import { useAuthStore } from '../store/authStore';


  export default {
    data() {
        return {
            isDropdownOpen: false,
            user: null,
            authStore: useAuthStore()
        };
    },
    computed: {
        isHomeRoute() {
            return this.$route.name === 'home';
        },
        isCollectionRoute() {
            return this.$route.name === 'collection';
        },
        isCategoryRoute() {
            return this.$route.name === 'category' || this.$route.name === 'detailproduct';
        },
        isAboutUsRoute() {
            return this.$route.name === 'aboutus';
        },
        isContactUsRoute() {
            return this.$route.name === 'contactus';
        },        

        isLogin() {
          return this.user != null ? true : false
        }
    },

    methods: {
        toggleDropdown() {
            this.isDropdownOpen = !this.isDropdownOpen;
        },

        getUser() {
          const user = JSON.parse(localStorage.getItem('user'));
          if (user) {
              this.first_name = user.first_name || '';
              this.last_name = user.last_name || '';

              this.firstLetters = this.first_name[0] + this.last_name[0];
          }
          return user;
        },

        logout() {
          localStorage.removeItem('token');
          localStorage.removeItem('user');
          this.authStore.setIsLogin(false)
          this.$router.push({ name: 'home' })
        }
    },
    created() {
      this.user = this.getUser();
    }
        
};
</script>