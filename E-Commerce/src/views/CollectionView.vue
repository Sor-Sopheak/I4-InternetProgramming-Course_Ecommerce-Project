<template>
      <div class="w-full">
        <section>
          <div class="h-500px bg-[#fab89c] grid grid-cols-[0.7fr,1fr]">
            <img src="@/assets/images/girlcollecthead.png" alt="" class="object-contain w-[76.9%] mx-16">
            <div>
              <div>
                <h1 class="font-jetbrains-mono font-semibold text-7xl w-[70%] mb-5">SUMMER COLLECTION</h1>
                <div class="flex px-2">
                  <a href="#">
                    <img src="@/assets/images/fb.png" alt="" class="object-contain h-[35px] w-[35px]">
                  </a>
                  <a href="#">
                    <img src="@/assets/images/ig.png" alt="" class="object-contain h-[35px] w-[35px]">
                  </a>
                  <a href="#">
                    <img src="@/assets/images/tw.png" alt="" class="object-contain h-[35px] w-[35px]">
                  </a>
                  <a href="#">
                    <img src="@/assets/images/yt.png" alt="" class="object-contain h-[35px] w-[35px]">
                  </a>
                </div>
              </div>
              <div class="grid grid-cols-[0.5fr,1fr]">
                <div class="px-2">
                  <p class="text-[#4b372f] mt-8 mb-4">
                    Discover a curated collection of stylish garments that embrace elegance and sustainability. Express your unique style and make a lasting impression with our versatile fashion choices.
                  </p>
                  <router-link :to="{ name: 'category' }">
                    <button class="font-semibold hover:bg-white hover:text-black bg-black text-white text-sm h-[40px] w-[130px] text-center flex items-center justify-center rounded-3xl">EXLPORE NOW</button>
                  </router-link>
                  </div>
                <div class="font-jetbrains-mono grid grid-cols-[0.61fr,1fr] bg-black">
                  <img src="@/assets/images/iu.jpg" alt="" class="object-contain h-[350px] w-[250px]">
                  <div class="text-white p-5 h-[350px]">
                    <span class="text-center text-4xl leading-snug">SPECIAL OFFER OF THE MONTH</span>
                    <p class="text-[#b2b2b2]">Black long sleeve</p>
                    <div class="flex justify-between">
                      <div class="flex justify-between w-[100px]">
                        <p class="line-through">$180</p>
                        <p class="text-xl font-bold">$128</p>
                      </div>
                      <button class="bg-white hover:text-white hover:bg-black hover:border-white hover:border-2 text-black text-xs h-[30px] w-[90px] text-center flex items-center justify-center rounded-3xl">SHOP NOW</button>
                    </div>
                    <div class="flex justify-between mt-8">
                      <div class="bg-white text-black w-[90px] text-center p-2 rounded-xl">
                        <p class="text-5xl">09</p>
                        <p class="text-sm text-[#666666]">Best</p>
                        <p>Diverse</p>
                      </div>
                      <div class="bg-white text-black w-[90px] text-center p-2 rounded-xl">
                        <p class="text-5xl">09</p>
                        <p class="text-sm text-[#666666]">Offer</p>
                        <p>Hassle</p>
                      </div>
                      <div class="bg-white text-black w-[90px] text-center p-2 rounded-xl">
                        <p class="text-5xl">09</p>
                        <p class="text-sm text-[#666666]">For You</p>
                        <p>Personal</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
        </section>

        <section>
          <div>
            <div class="flex justify-center items-center mt-24">
              <div class="grid grid-cols-[1fr,1.7fr,1fr] w-[90%]">
                <div class="grid grid-rows-[0.66fr,0.5fr]">
                  <div class="relative">
                    <img src="@/assets/images/suit1.jpg" alt="" class="object-cover h-[330px] w-[100%]">
                    <div class="absolute bottom-24 left-1/2 transform -translate-x-1/2 translate-y-1/2 text-center text-3xl font-bold w-[80%]">
                      <p class="leading-relaxed">Suit</p>
                      <p>UP TO 35% OFF</p>
                    </div>
                  </div>
                  
                  <div>
                    <img src="@/assets/images/womenbag.jpg" alt="" class="object-cover mt-4 h-[255px] w-[100%]">
                  </div>
                </div>
                <div class="relative flex justify-center">
                  <img src="@/assets/images/womentopp.png" alt="" class="object-cover w-[90%] h-[600px]">
                  <div class="absolute top-1/4 left-1/2 transform -translate-x-1/2 translate-y-1/2">
                    <p class="text-sm text-[#4a4a49]">Explore yourself</p>
                    <p class="font-bold text-xl w-[70%]">YOU LOOK GOOD WITH YOUR STYLE</p>
                    <router-link :to="{ name: 'category' }">
                      <button class="hover:text-black hover:bg-white bg-black h-[30px] text-sm px-3 rounded-2xl text-white">SHOP NOW</button>
                    </router-link>
                    </div>
                </div>
                <div class="grid grid-rows-[0.66fr,0.5fr] gap-4">
                  <div class="relative">
                    <img src="@/assets/images/denim_jacket1.jpg" alt="" class="object-cover w-[100%] h-[280px]">
                    <div class="absolute top-1/4 left-1/2 transform -translate-x-1/2 translate-y-1/2">
                      <p>Women Denim Jacket</p>
                      <p class="font-bold">CREATE YOUR FASHION WITH US</p>
                      <router-link :to="{ name: 'category' }">
                        <button class="hover:text-black hover:bg-white bg-black h-[30px] text-sm px-3 rounded-2xl text-white">SHOP NOW</button>
                      </router-link>
                      </div>
                  </div>
                  <div class="relative">
                    <img src="@/assets/images/glass.jpg" alt="" class="object-cover w-[100%] h-[305px]">
                    <p class="absolute bottom-6 left-1/2 transform -translate-x-1/2 translate-y-1/2 text-center w-[100%]">LET'S SUN EPLORE YOU</p>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="bg-orange-600 h-[180px] flex justify-center items-center text-white text-center mt-8">
              <img src="@/assets/images/2women.png" alt="" class="object-cover h-[200px]">
              <div>
                <p class="text-xl text-shadow">WE OFFER BRAND NEW STYLES</p>
                <p>Let's us explore your style</p>
                <button @click="fetchAllProducts" class="hover:text-white hover:bg-black text-black text-xs h-[25px] bg-white px-3 rounded-2xl mt-5 shadow-md">SEE FULL COLLECTION</button>
              </div> 
            </div>

            <div class="flex flex-col justify-center items-center text-center mt-12">
              <div class="text-center">
                <p class="text-xl font-jetbrains-mono">PRODUCT TYPE</p>
                <p class="text-[#4d4d4d] font-jetbrains-mono">Up to 30% discount</p>
              </div>
              <div class="flex">
                <div class="m-3 relative h-[400px]">
                  <img src="@/assets/images/office.jpg" alt="" class="object-cover w-[300px] h-[400px]">
                  <button @click="fetchType('office')" class="absolute hover:bg-white hover:text-black bg-black text-white text-xs px-4 h-[30px] w-[90px] rounded-2xl bottom-12 left-1/2 transform -translate-x-1/2 translate-y-1/2">OFFICE</button>
                </div>
                <div class="m-3 relative h-[400px]">
                  <img src="@/assets/images/party.jpg" alt="" class="object-cover w-[300px] h-[400px]">
                  <button @click="fetchType('party')" class="absolute hover:bg-white hover:text-black bg-black text-white text-xs px-4 h-[30px] w-[90px] rounded-2xl bottom-12 left-1/2 transform -translate-x-1/2 translate-y-1/2">PARTY</button>
                </div>
                <div class="m-3 relative h-[400px]">
                  <img src="@/assets/images/outdoor.jpg" alt="" class="object-cover w-[300px] h-[400px]">
                  <button @click="fetchType('outdoor')" class="absolute hover:bg-white hover:text-black bg-black text-white text-xs px-4 h-[30px] w-[90px] rounded-2xl bottom-12 left-1/2 transform -translate-x-1/2 translate-y-1/2">OUTDOOR</button>
                </div>
              </div>

              <div>
                <p class="font-bold text-xl my-12">FEATURED PRODUCTS</p>
                <div class="grid grid-cols-4 grid-flow-row">
                  <div v-for="product in products" class="mx-2.5 mb-12 shadow-lg">
                    <router-link :to="'/productDetail/'+[product.id]" class="w-[220px] flex">
                      <img :src="'https://sopheak.tysophearum.tech'+product.image" alt="" class="object-cover w-full">
                    </router-link>
                    <div class="text-start mt-4 m-2">
                      <p class="font-semibold">{{ product.product_name }}</p>
                      <p class="text-[#6e6e6e]">{{ product.product_type }}</p>
                      <div class="flex justify-between">
                        <p class="text-[#6e6e6e]">Price: </p>
                        <p>${{ product.price }}</p>
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
  import axios from "axios";
  import NavbarGuest from "@/components/NavbarGuest.vue";
  import Footer from "@/components/Footer.vue";
    export default {
      components: {
        NavbarGuest,
        Footer,
      },
     //click nav change color 
      data() {
        return {
          products: [],
        };
      },

      async mounted() {
        this.fetchAllProducts();
      },

      methods: {
        async fetchAllProducts() {
          try {
            const productResponse = await fetch("https://sopheak.tysophearum.tech/api/products");

            const productData = await productResponse.json();
            this.products = productData;
          } catch (error) {
            console.log("Error fetching products", error);
          }
        },

        fetchType(type) {
          axios.get('https://sopheak.tysophearum.tech/api/products/type/'+type)
          .then(res => {
            this.products = res.data
          })
        }
      }
    };
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Jolly+Lodger&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=JetBrains+Mono&display=swap');

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
    .font-jetbrains-mono{
      font-family: 'JetBrains Mono', monospace;
    }

    .text-shadow {
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
</style>
  