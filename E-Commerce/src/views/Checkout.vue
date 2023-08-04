<template>
  <div class="min-w-screen min-h-screen bg-gray-50 py-5">
    <div class="px-5">
        <router-link :to="{ name: 'cart' }">
            <button class="text-3xl md:text-5xl font-bold hover:text-orange-600 mt-4">&lt;Checkout</button>
        </router-link>
        <div class="mb-5 mt-6 text-gray-400">
            <a href="#" class="focus:outline-none hover:underline hover:text-orange-600 text-gray-500">Home</a> / <a href="#" class="hover:text-orange-600 focus:outline-none hover:underline text-gray-500">Cart</a> / <span class="text-gray-600">Checkout</span>
        </div>
    </div>
    <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-10 text-gray-800">
        <div class="w-full">
            <div class="-mx-3 md:flex items-start">
                <div class="px-3 md:w-7/12 lg:pr-10">
                    <div v-for="(cart, index) in carts" :key="index" class="w-full flex flex-col mx-auto text-gray-800 font-light mb-6 border-b border-gray-200 pb-6">
                        <div class="w-full flex items-center">
                            <div class="overflow-hidden rounded-lg w-16 h-16 bg-gray-50 border border-gray-200">
                                <img :src="cart.product.image" alt="">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-semibold uppercase text-gray-600">{{ cart.product.product_name }}</h6>
                                <p class="text-gray-400">x {{ cart.quantity }}</p>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-600 text-xl">${{ cartTotal(cart) }}</span><span class="font-semibold text-gray-600 text-sm">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6 pb-6 border-b border-gray-200 text-gray-800">
                        <div class="w-full flex mb-3 items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Subtotal</span>
                            </div>
                            <div class="pl-3">
                                <span class="font-semibold">${{ subtotal }}</span><span class="font-semibold text-sm">.00</span>
                            </div>
                        </div>
                        <div class="w-full flex items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Shipping estimate</span>
                            </div>
                            <div class="pl-3">
                                <span class="font-semibold">${{ shippingEst }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6 pb-6 border-b border-gray-200 md:border-none text-gray-800 text-xl">
                        <div class="w-full flex items-center">
                            <div class="flex-grow">
                                <span class="text-gray-600">Total</span>
                            </div>
                            <div class="pl-3">
                              <span class="font-semibold">${{ total }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3 md:w-5/12">
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-3 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-3 items-center">
                            <div class="w-32">
                                <span class="text-gray-600 font-semibold">Contact</span>
                            </div>
                            <div class="flex-grow pl-3">
                                <span>{{ first_name }}&nbsp;&nbsp;</span>
                                <span>{{ last_name }}</span>
                            </div>
                        </div>
                        <div class="w-full flex items-center">
                            <div class="w-32">
                                <span class="text-gray-600 font-semibold">Billing Address</span>
                            </div>
                            <div class="flex-grow pl-3">
                               <span>{{ address }}&nbsp;{{ state }} ,&nbsp;{{ city }},&nbsp;{{ country }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 text-gray-800 font-light mb-6">
                        <div class="w-full p-3 border-b border-gray-200">
                            <div class="mb-5">
                                <label for="type1" class="flex items-center cursor-pointer">
                                    <router-link :to="{ name: 'visa' }" class="flex">
                                        <input type="radio" class="mr-5 form-radio h-5 w-5 hover:text-indigo-600 focus:text-orange-600" name="type" id="type1" @click="handleInputChange('type1')" :checked="selectedInput === 'type1'">
                                        <img src="@/assets/images/Visalogo.png" alt="" class="w-[70px] h-[30px]">
                                    </router-link>
                                </label>
                                <hr class="my-5">
                                <label for="type2" class="flex items-center cursor-pointer">
                                    <router-link :to="{ name: 'master' }" class="flex">
                                        <input type="radio" class="mr-5 form-radio h-5 w-5 hover:text-indigo-600 focus:text-orange-600" name="type" id="type2" @click="handleInputChange('type2')" :checked="selectedInput === 'type2'">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/200px-MasterCard_Logo.svg.png" alt="instagram icon" class="w-[50px] h-[30px]">
                                    </router-link>
                                </label>
                                <hr class="my-5">
                                <label for="type3" class="flex items-center cursor-pointer">
                                    <router-link :to="{ name: 'americanexpress' }" class="flex">
                                        <input type="radio" class="mr-5 form-radio h-5 w-5 hover:text-indigo-600 focus:text-orange-600" name="type" id="type3" @click="handleInputChange('type3')"  :checked="selectedInput === 'type3'">
                                        <img src="https://logodix.com/logo/61114.jpg" alt="line icon" class="w-[50px] h-[30px]">
                                    </router-link>
                                </label>
                                <hr class="my-5">
                                <label for="type4" class="flex items-center cursor-pointer">
                                    <router-link :to="{ name: 'paypal' }" class="flex">
                                        <input type="radio" class="mr-5 form-radio h-5 w-5 hover:text-indigo-600 focus:text-orange-600" name="type" id="type4" @click="handleInputChange('type4')" :checked="selectedInput === 'type4'">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" width="80" class="ml-3"/>
                                    </router-link>
                                </label>
                            </div>
                            </div>
                        </div>
                    <div>
                        <button @click="checkout()" class="w-full max-w-xs mx-auto bg-orange-600 hover:bg-black hover:text-white focus:bg-orange-600 text-white rounded-lg px-3 py-2 font-semibold"><i class="mdi mdi-lock-outline mr-1"></i> PAY NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-[100%] h-px bg-gray-300 mt-28"></div>
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
            productTotal: 0,
            total: 0,
            shippingEst: 5,
            subtotal: 0,
            carts: [],
            selectedInput: 'type1'
        }
    },  
    mounted() {
        this.getCartProduct();
        this.getAddressShipping();
    },
    methods: {
        handleInputChange(id) {
          this.selectedInput = id;
        },

        checkout(){
            const user = JSON.parse(localStorage.getItem('user'))
            axios.delete('http://localhost:8000/api/carts/clear/'+user.id, {
                headers: {
                    Authorization: 'Bearer '+localStorage.getItem('token')
                }
            })
            .then(res => {
                this.$router.push('/completed')
            })
        },
        getCartProduct() {
            const userId = JSON.parse(localStorage.getItem('user')).id;
            axios.get('http://localhost:8000/api/carts/products/' + userId)
            .then(res => {
                this.carts = res.data;
                this.calculateSubtotal();
            })
            .catch(error => {
                console.error('Error fetching cart products:', error);
            });
        },

        calculateSubtotal() {
            let tmpTotal = 0;
            this.carts.forEach(cart => {
                tmpTotal = tmpTotal + (cart.quantity * cart.product.price);
            });
            this.subtotal = tmpTotal;
            this.total = tmpTotal + this.shippingEst;
        },

        cartTotal(cart) {
            return cart.quantity * cart.product.price;
        },

        getAddressShipping() {
            const address = JSON.parse(localStorage.getItem('Address'));
            if(address) {
                this.address = address.address;
                this.state = address.state;
                this.city = address.city;
                this.postal_code = address.postal_code;
                this.country = address.country;

                this.first_name = address.first_name;
                this.last_name = address.last_name;
            }
            return address;
        }
    },

    created() {
        this.getCartProduct();
        this.getAddressShipping();
    },
};
</script>

<style>
    label.flex.cursor-pointer {
      color: #000;
    }

    input[type="radio"]:checked + label.flex.cursor-pointer {
      color: #ff5900;
    }
  </style>
