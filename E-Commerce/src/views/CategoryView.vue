<template>
  <div class="w-full">
    <section>
      <div>
        <div class="grid grid-cols-[20%,80%]">
          <div class="border-2 border-gray-300 text-start pr-12">
            <p class="font-semibold text-xl mt-5 ml-4">Category</p>
            <div class="w-[90%] m-2 ml-20">
              <div v-for="category in categories" :key="category.id" @click="handleCategoryClick(category.id)">
                <p class="cursor-pointer hover:text-orange-600" :class="{'text-orange-600': selectedCategoryId === category.id}">{{ category.category_name }}</p>
              </div>
            </div>
          </div>

          <div class="">
            <div class="h-[40px] w-2/3 border-solid border-orange-600 border-2 rounded-full flex items-center justify-between m-5">
              <div @click="focusInput" class="flex justify-center items-center px-2">
                <img
                  src="@/assets/images/search.png"
                  alt="search icon"
                  class="w-[25px] h-[25px]"
                />
                <input type="text" placeholder="Search more products" class="xl:bg-transparent input-field text-xl border-none focus:border-none">
              </div>
              <button @click="searchProducts"
                class="bg-orange-600 w-[80px] h-[30px] rounded-full text-white m-2"
              >
                Search
              </button>
            </div>
            <div class=" h-px bg-gray-300 my-8"></div>

            <div class="flex p-5">
              <router-link :to="{ name: 'home' }" class="hover:text-orange-600 hover:underline">Home</router-link>
              <span class="mx-2">></span>
              <router-link :to="{ name: 'category' }" class="text-[#6e6d6d] hover:underline"
                >Category</router-link
              >
              <span class="mx-2">></span>
              <div>
                <a href="" class="text-[#6e6d6d]">{{ category }}</a>
              </div>
              
            </div>

            <!-- list product -->
            <div v-for="category in categories" :key="category.id">
              <div v-for="product in category.products" :key="product.id" class="p-5">
                <a href="#" @click="listProduct(product.id)" class="text-4xl font-semibold">{{ product.product_name }}</a>
              </div>
            </div>
            

            <div class="grid grid-rows-2 grid-flow-col mx-14 overflow-x-auto">
              <div v-for="product in products" :key="product.id"
                class="w-[280px] h-[420px] relative parent-container border-2 rounded-2xl m-3">
                <router-link :to="'/productDetail/'+[product.id]">
                  <img
                    :src="'https://sopheak.tysophearum.tech'+product.image"
                    alt=""
                    class="object-contain w-[280px] h-[300px] rounded-t-2xl"
                  />
                </router-link>
                <div
                  class="absolute flex justify-between w-[260px] top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                >
                </div>
                <div class="p-4">
                  <p class="font-bold">{{ product.product_name }}</p>
                  <div class="flex justify-between items-center">
                    <div class="mt-4">
                      <p class="text-sm text-[#6d6d6d]">Price:</p>
                      <p>${{ product.price }}</p>
                    </div>
                    <button
                      class="bg-orange-600 p-1.5 h-[30px] w-[35px] rounded-lg"
                    >
                    <router-link :to="'/productDetail/'+[product.id]">
                      <img
                        src="https://icon-library.com/images/white-shopping-cart-icon/white-shopping-cart-icon-9.jpg"
                        alt=""
                        class="w-[20px]"
                      />
                    </router-link>
                      
                    </button>
                  </div>
                </div>
              </div>
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
import NavbarGuest from "@/components/NavbarGuest.vue";
import Footer from "@/components/Footer.vue";

export default {
  components: {
    NavbarGuest,
    Footer,
  },

  data() {
    return {
      categories: [],
      products: [],
      category: 'All',
      selectedCategoryId: null,
    };
  },

  async mounted() {
    try {
        const categoryResponse = await fetch("https://sopheak.tysophearum.tech/api/categories");
        const productResponse = await fetch("https://sopheak.tysophearum.tech/api/products");
        
        const categoryData = await categoryResponse.json();
        const productData = await productResponse.json();
  
        this.categories = categoryData;
        this.products = productData;
      } catch (error) {
        console.error("Error fetching categories", error);
      }
  },

  methods: {
    handleCategoryClick(categoryId) {
      this.selectedCategoryId = categoryId;
      this.getProducts(categoryId);
    },
    async getProducts(id) {
        try {
          let url = `https://sopheak.tysophearum.tech/api/categories/products/${id}`;
  
          const response = await fetch(url);
          const data= await response.json();
          this.products = data.products;
          this.category = data.category_name
        } catch (error) {
          console.error("Error fetching product", error);
        }
    },

    

  },

  
};
</script>

<style>
@import url("https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Dancing+Script&family=Jolly+Lodger&display=swap");

.font-jolly {
  font-family: "Jolly Lodger", cursive;
}
.font-itim {
  font-family: "Itim", cursive;
}
.font-jaldi {
  font-family: "Jaldi", sans-serif;
}
.font-dancing {
  font-family: "Dancing Script", cursive;
}
.input-field {
    border: none;
    outline: none; 
}

.input-field:focus {
    box-shadow: none; 
}
    
</style>
