<template>
    <div class="w-full">
        <div class="flex justify-between mb-10 mx-20 text-5xl pt-10">
            <h1>WISHLIST</h1>
            <router-link :to="{ name: 'home' }">
                <p class="text-2xl hover:text-red-600 cursor-pointer">X</p>
            </router-link>
        </div>
        
        <div class="mx-20 max-w-11/12 xl:px-0">
            <hr class="py-6">
            <div class="md:w-full border-b-[1px] bg-white p-6">
                <form action="" method="post">
                    <div class="justify-between sm:flex sm:justify-start h-[150px]">
                        <img
                        src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        alt="product-image"
                        class="w-full rounded-lg sm:w-40"
                        />
                        <div class="flex justify-center items-center text-center w-full">
                            <div class="sm:ml-4 sm:flex sm:w-5/6 sm:justify-between text-center items-center">
                                <div class="flex flex-col justify-center items-start">
                                    <h2 class="text-2xl text-gray-900">Shoes</h2>
                                </div>
                                <div class="mt-4 flex w-4/12 justify-between sm:mt-0">
                                    <div class="flex flex-col">
                                        <p class="text-2xl line-through text-gray-500">$21.00</p>
                                        <p class="text-2xl">$17.00</p>
                                    </div>
                                </div>
                            </div>
                            <router-link :to=" { name: 'cart' } ">
                                <button type="submit" class="bg-black text-white h-[57px] rounded px-8 hover:bg-orange-600">ADD TO CART</button>
                            </router-link>
                        </div>
                    </div>
                </form>
                
            </div>

        </div>
  
      <Footer />
    </div>
  </template>
  
  <script>
  import NavbarGuest from "@/components/NavbarGuest.vue";
  import Footer from "@/components/Footer.vue";
  
    export default {
        components: { NavbarGuest, Footer },
    
        data() {
            return {
                quantity: 1
            }
        },  
  
        methods: {
            decrement() {
                if(this.quantity > 1) {
                    this.quantity--;
                }
            },
            increment() {
                this.quantity++;
            },
            
        }
    };
    </script>
  