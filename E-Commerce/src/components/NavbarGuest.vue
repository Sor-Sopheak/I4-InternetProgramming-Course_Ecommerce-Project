<template>
    <nav class="w-[100%] grid grid-cols-[0.5fr,1.3fr,0.5fr] font-bold border-b-2 border-gray-300 h-[60px] items-center sticky top-0 bg-white shadow z-10">
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
      <div class="cart font-medium flex flex-row justify-end mr-12">
          <router-link :to="{ name: 'login' }">
            <button class="border-2 border-black hover:bg-black hover:text-white p-2 px-5 mr-2 rounded-full">Sing in</button>
          </router-link>
          <router-link :to="{ name: 'signup' }">
            <button class="border-2 border-black bg-black text-white hover:bg-white hover:text-black p-2 px-4 rounded-full ml-2">Sign up</button>
          </router-link>
      </div>
    </nav>
</template>

<script>
  export default {
  computed: {
    isHomeRoute() {
      return this.$route.name === 'home' || this.$route.name === 'login' || this.$route.name === 'signup';
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
  },
};
</script>