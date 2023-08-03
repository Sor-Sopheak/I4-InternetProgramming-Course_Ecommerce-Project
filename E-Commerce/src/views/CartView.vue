<template>
  <div class="w-full">
    <router-link to="/productDetail/1">
      <h1 class="mb-10 ml-20 text-5xl pt-5 hover:text-orange-600">&lt; My Cart</h1>
    </router-link>
    <div class="mx-20 max-w-11/12 justify-between md:flex md:space-x-6 xl:px-0">
      <div class="w-11/12">
        <div
          class="flex justify-between items-center p-2 mb-8 w-11/12 border-y-2 border-black text-2xl"
        >
          <div>Item</div>
          <div class="w-4/12 flex justify-between">
            <div>Price</div>
            <div class="pr-6">Quantity</div>
          </div>
        </div>

        <div class="rounded-lg md:w-11/12">
            <div v-for="cart in carts" class="rounded-lg mb-6 shadow-md bg-white p-6">
                <div class="justify-between sm:flex sm:justify-start">
                    <img
                    :src="cart.product.image"
                    alt="product-image"
                    class="w-full h-[150px] object-fit rounded-lg sm:w-40"
                    />
                    <div class="flex flex-col w-full">
                        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between text-center">
                            <div class="flex mt-5 flex-col justify-center items-start">
                                <h2 class="text-2xl text-gray-900">{{ cart.product.product_name }}</h2>
                                <p class="mt-1 text-lg text-gray-700">Size: S</p>
                            </div>
                            <div class="mt-4 flex w-5/12 justify-between sm:mt-0">
                                <div class="flex items-center">
                                <p class="text-2xl">${{ cart.product.price }}</p>
                                </div>
                                <div class="inline-flex items-center border-black rounded p-2">
                                    <button @click="updateQuantity(cart.id, cart.quantity-1)" class="border-r rounded-l px-2 focus:outline-none">-</button>
                                    <input  
                                        disabled
                                        type="number"
                                        name="size"
                                        id="size"
                                        min="1"
                                        v-model="cart.quantity"
                                        class="w-14 text-center border-none"
                                    />
                                    <button @click="updateQuantity(cart.id, cart.quantity+1)" class="border-l rounded-r px-2 focus:outline-none">+</button>
                                </div>
                            </div>
                        </div>
                        <button @click="deleteCart(cart.id)" class="flex justify-end cursor-pointer hover:text-red-600 hover:underline mt-12">
                            Remove
                        </button>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div
        class="mt-6 h-full border bg-orange-600 p-6 shadow-md md:mt-0 md:w-1/3"
      >
        <div class="mb-2 flex justify-between">
          <p class="text-xl">Summary (1 item)</p>
        </div>
        <div class="mb-2 flex justify-between">
          <p>Subtotal</p>
          <p class="text-white">${{ subtotal }}</p>
        </div>
        <div class="flex justify-between">
          <p>Shipping estimate</p>
          <p class="text-white">${{ shippingEst }}</p>
        </div>
        <div class="flex justify-between ">
          <p>Tax estimate</p>
          <p class="text-white">-</p>
        </div>
        <hr class="my-4" />
        <div class="flex justify-between">
          <p class="text-xl">Total</p>
          <p class="mb-1 text-xl">${{ total }}</p>
        </div>
        <router-link :to="{ name: 'shippingaddress' }">
          <button class="mt-6 w-full shadow-lg bg-black py-1.5 font-medium text-blue-50 hover:bg-white hover:text-black">Check out</button>
        </router-link>
        
      </div>
    </div>

    <Footer />
  </div>
</template>

<script>
import NavbarGuest from "@/components/NavbarGuest.vue";
import Footer from "@/components/Footer.vue";
import axios from 'axios'
export default {
    components: { NavbarGuest, Footer },

    data() {
        return {
            quantity: 1,
            carts: Object,
            total: 0,
            shippingEst: 5,
            subtotal: ''
        }
    },  
    mounted() {
        this.getCartProduct()
    },
    methods: {
        updateQuantity(id, quantity) {
          if(quantity > 0) {
            axios.put('http://localhost:8000/api/carts/'+id, {
              quantity: quantity
            }, {
              headers: {
                Authorization: 'Bearer '+localStorage.getItem('token')
              }
            })
            .then(res => {
              this.getCartProduct()
            })
          }
        },
        getCartProduct() {
            axios.get('http://localhost:8000/api/carts/products/'+JSON.parse(localStorage.getItem('user')).id)
            .then(res => {
                this.carts = res.data
                let tmpTotal = 0
                this.carts.forEach(cart => {
                  tmpTotal = tmpTotal + (cart.quantity*cart.product.price)
                  
                });
                this.subtotal = tmpTotal;
                this.total = tmpTotal + this.shippingEst;
            })
        },
        deleteCart(id) {
            axios.delete('http://localhost:8000/api/carts/'+id, {
                headers: {
                    Authorization: 'Bearer '+localStorage.getItem('token')
                }
            })
            .then(res => {
                this.getCartProduct()
            })
        }
    }
};
</script>
