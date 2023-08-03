<template>
  <div class="w-screen m-0 p-0">
    <section class="flex flex-col w-[100%]">
      <div class="flex justify-between h-[200px]">
        <div class="left_header w-[50%] ml-[100px] mt-[25px]">
          <h2 class="font-dancing text-[#ea2be2] text-5xl font-bold leading-none">Best Collection</h2><br>
          <h1 class="text-5xl font-itim font-bold w-[80%] leading-tight">WOMEN'S LATEST FASTION SALE</h1><br>
          <p class="text-gray-400 text-xl font-medium w-[30%] leading-none">Ready to start your new outfit today</p>
          <button class="h-[40px] bg-orange-600 hover:bg-black text-2xl px-5 text-white font-medium mt-7 rounded">SHOP NOW</button>
        </div>
        <div class="right_header items-end">        
          <img src="@/assets/images/women-logo.png" alt="women" class=" mr-32 ">
        </div>
      </div>
      <div class="mt-48 m-auto w-[75%]">
        <div class=" h-[50px] border-solid border-gray-500 border-2 rounded-full flex items-center justify-between font-itim text-xl"> 
          <div class="flex">
            <img src="@/assets/images/search.png" alt="search icon" class="w-[30px] h-[30px] m-6">
            <input type="text" placeholder="Search more products" class="xl:bg-transparent input-field text-xl border-none focus:border-none">
          </div>
          <button class=" bg-orange-600 w-[120px] h-[40px] rounded-full text-white m-2">Search</button>
        </div>
      </div>
    </section>
    <section class="w-[95%] mx-10">
      <div class="grid grid-cols-[0.3fr,1fr] mt-20 justify-center">
        <!-- CATEGORY -->
        <div class="border-solid border-2 border-gray-500 rounded-lg font-jaldi">
          <h1 class="font-bold text-center p-2 text-2xl">CATEGORY</h1>
          <div v-for="category in filtered3Categories" :key="category.id" @click="getProducts(category.id)">
            <div class="ml-4 text-2xl cursor-pointer text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
              <img :src="category.image" class="object-fill w-[50px] h-[60px]">
              <p class="text-start">{{ category.category_name }}</p>
              <p>+</p>
            </div>
          </div>

          <div class="flex-grow h-px bg-gray-400 m-5"></div> 
          <div class="flex flex-col mx-5 font-jaldi text-2xl">
            <div class="text-gray-500 flex justify-between">
              <p>Outdoor</p>
              <p>23</p>
            </div>
            <div class="text-gray-500 flex justify-between">
              <p>Office</p>
              <p>76</p>
            </div>
            <div class="text-gray-500 flex justify-between">
              <p>Party</p>
              <p>51</p>
            </div>
          </div>

          <div v-for="category in filteredMoreCategories" :key="category.id" class="text-2xl">
            <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
              <img :src="category.image" alt="black t-shirt"  class="object-fill w-[60px] h-[70px]">
              <p class="text-start">{{ category.category_name }}</p>
              <p>+</p>
            </div>
          </div>
        </div>

        <!-- items -->
        <div class="grid">
          <div class="flex justify-between font-jaldi mx-7">
            <div>
              <h2 class="font-bold text-2xl">New Arrivals</h2>
              <div class="flex-grow h-px bg-gray-400 w-[250px]"></div> 
            </div>
            <div>
              <h2 class="font-bold text-2xl">Trending</h2>
              <div class="flex-grow h-px bg-gray-400 w-[250px]"></div> 
            </div>
            <div>
              <h2 class="font-bold text-2xl">Top Rated</h2>
              <div class="flex-grow h-px bg-gray-400 w-[250px]"></div> 
            </div>
          </div>

          <div class="grid grid-rows-3 grid-flow-col ml-7 mt-12 overflow-x-scroll">
            <div v-for="product in products" :key="product.id">
              <router-link :to="'/productDetail/'+[product.id]">
                <div  class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7 mb-7">
                  <div class="m-5">
                    <img :src="product.image" alt="black t-shirt" class="object-fill w-[100px] h-[130px]">
                  </div>
                  <div class="mx-5">
                    <h3 class="font-semibold text-xl mb-2.5">{{ product.product_name }}</h3>
                    <p class="text-gray-500 mb-2.5 text-xl">{{ product.product_type }}</p>
                    <div class="flex justify-between w-[150px] text-xl">
                      <p class="text-green-700 font-bold">${{ product.price }}</p>
                      <p class="text-gray-500 line-through">$12.00</p>
                    </div>
                  </div>
                </div>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="w-[100%] h-px bg-gray-300 mt-28"></div>
    <Footer/>
    
  </div> 
</template>

<script>
import NavbarUser from'@/components/NavbarUser.vue'
import NavbarGuest from'@/components/NavbarGuest.vue'
import Footer from'@/components/Footer.vue'

  export default {
    components : { NavbarGuest, NavbarUser, Footer },

    //click nav change color 
    data() {
      return {
        products: [],
        searchQuery: '',
        searchResults: [],
        categories: [],
        isLoggedIn: false, 
      };
    },

    computed: {
      filtered3Categories() {
        // Return the first three categories from the categories array
        return this.categories.slice(0, 3);
      },

      filteredMoreCategories() {
        return this.categories.slice(3);
      }
    },

    async mounted() {
      try {
        const categoryResponse = await fetch("http://localhost:8000/api/categories");
        const productResponse = await fetch("http://localhost:8000/api/products");

        const categoryData = await categoryResponse.json();
        const productData = await productResponse.json();

        this.categories = categoryData;
        this.products = productData;


      } catch (error) {
        console.error("Error fetching categories", error);
      }
    },

    methods: {
      async listCategory() {
        try {
          let url = "http://localhost:8000/api/categories";

          const response = await fetch(url);
          const category = await response.json();

          this.categories = category;
        } catch (error) {
          console.error("Error fetching category", error);
        }
      },

      async listProduct() {
        const response = await fetch("http://localhost:8000/api/products");
        const data = await response.json();
        this.product = data;
      },

      async getProducts(id) {
        try {
          let url = `http://localhost:8000/api/categories/products/${id}`;

          const response = await fetch(url);
          const data = await response.json();
        
          this.products = data.products;
        } catch (error) {
          console.log("Error fetching product", error);
        }
      } 


    },

    

    searchCategorys(category_name) {
      const endpoint = 'http://localhost:8000/api/categories/search/{category_name}'; // Update the endpoint accordingly

      // Construct the URL with the search query as a query parameter
      const url = new URL(endpoint);
      url.searchParams.append('q', this.searchQuery);

      fetch(url)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          this.searchResults = data;
        })
        .catch(error => {
          console.error('Error fetching search results:', error);
        });
    }
  };
</script>

<style>
  @import url('https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Jolly+Lodger&display=swap');

  .font-jolly{
    font-family: 'Jolly Lodger', cursive;
  }
  .font-itim{ 
    font-family: 'Itim', cursive;
  }
  .font-jaldi{
    font-family: 'Jaldi', sans-serif;
  }
  .font-dancing{
    font-family: 'Dancing Script', cursive;
  }
  .input-field {
    border: none;
    outline: none; 
  }

  .input-field:focus {
      box-shadow: none; 
  }
</style>

