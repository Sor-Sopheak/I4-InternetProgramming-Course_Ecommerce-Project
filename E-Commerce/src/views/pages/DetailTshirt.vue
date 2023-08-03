<template>
    <div class="w-screen m-0 p-0">
        <NavbarGuest/>
        <div class="bg-green-200 w-64 mt-4 ml-12 rounded">
            <p class="text-green-700 px-2">50% OFF ENDS TOMORROW</p>
        </div>
        <div class="ml-12 mt-2 flex">
            <router-link :to="{ name: 'home' }">Home</router-link>
            <p>&nbsp> Clothes</p>
            <p>> Skirt</p>
        </div>
        <!-- route -->
        <div class="grid grid-cols-2 mx-12 mt-6">
            <div class="flex flex-col mr-8">
                <div class="flex justify-center items-center border-[1px] border-orange-600">
                    <img src="@/assets/images/skirt.png" alt="" class="w-[300px] h-[350px] object-contain">
                </div>

                <div class="flex justify-start items-center h-[120px] border-[1px] border-orange-600">
                    <img src="@/assets/images/skirt.png" alt="" class="w-[100px] h-[100px] object-contain">
                    <img src="@/assets/images/skirt.png" alt="" class="w-[100px] h-[100px] object-contain">
                    <img src="@/assets/images/skirt.png" alt="" class="w-[100px] h-[100px] object-contain">
                </div>
            </div>
            <div class=" ml-8">
                <p class="text-3xl font-semibold mb-4">Kawaii Skirt</p>
                <p class="text-3xl font-semibold mb-2">$17</p>
                <hr>
                <div class="my-5">
                    <div>
                        <span class="text-lg font-semibold">COLOR: </span>
                        <span>Pink</span>
                    </div>
                    <div>
                        <div class="flex mb-5">
                            <div class="w-8 h-8 border-[1px] border-pink-400 rounded-full flex justify-center items-center text-center mr-2">
                                <div class="w-6 h-6 bg-pink-400 rounded-full"></div>
                            </div>
                            <div class="w-8 h-8 border-[1px] border-blue-500 rounded-full flex justify-center items-center text-center mr-2">
                                <div class="w-6 h-6 bg-blue-400 rounded-full"></div>
                            </div>
                            <div class="w-8 h-8 border-[1px] border-yellow-500 rounded-full flex justify-center items-center text-center mr-2">
                                <div class="w-6 h-6 bg-yellow-400 rounded-full"></div>
                            </div>
                            <div class="w-8 h-8 border-[1px] border-red-500 rounded-full flex justify-center items-center text-center mr-2">
                                <div class="w-6 h-6 bg-red-400 rounded-full"></div>
                            </div>
                        </div>
                        
                        <div class="flex justify-between">
                            <div class="inline-flex items-center border border-black rounded p-2">
                                <label for="size">Size:</label>
                                <select name="size" id="size" class="select-field border-none bg-transparent appearance-none focus:outline-none custom-select">
                                    <option value="0">S</option>
                                    <option value="1">M</option>
                                    <option value="2">X</option>
                                    <option value="3">XL</option>
                                    <option value="4">XXL</option>
                                </select>
                            </div>
                            <div class="inline-flex items-center border border-black rounded p-2">
                                <button @click="decrement" class="border-r rounded-l px-2 focus:outline-none">-</button>
                                <input
                                    type="number"
                                    name="size"
                                    id="size"
                                    min="1"
                                    v-model="quantity"
                                    class="w-16 text-center border-none"
                                />
                                <button @click="increment" class="border-l rounded-r px-2 focus:outline-none">+</button>
                            </div>
                            <button type="submit" class="bg-black text-white h-[57px] rounded px-8">ADD TO CART</button>
                        </div>   
                    </div>
                </div>
                <div class="text-gray-500 text-sm flex justify-between">
                    <div class="hover:underline hover:text-orange-600">Open size guide</div>
                    <div class="flex hover:underline hover:text-orange-600">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="37px" height="32px" viewBox="0 0 37 32" enable-background="new 0 0 37 32" xml:space="preserve">
                            <g>
                                <path fill="#828282" d="M27,0c-2.476,0-4.856,0.921-6.704,2.595C19.594,3.23,18.993,3.952,18.5,4.749   c-0.493-0.797-1.094-1.519-1.796-2.155C14.856,0.921,12.476,0,10,0C4.486,0,0,4.486,0,10c0,3.722,1.158,6.66,3.871,9.825   c3.942,4.6,13.919,11.62,14.342,11.917c0.086,0.061,0.187,0.091,0.287,0.091s0.201-0.03,0.287-0.091   c0.423-0.297,10.4-7.317,14.343-11.917C35.842,16.66,37,13.722,37,10C37,4.486,32.514,0,27,0z M32.371,19.175   C28.876,23.251,20.191,29.516,18.5,30.72c-1.691-1.204-10.376-7.469-13.87-11.545C2.085,16.206,1,13.462,1,10c0-4.963,4.038-9,9-9   c2.227,0,4.37,0.829,6.032,2.335c0.838,0.76,1.518,1.656,2.02,2.664c0.17,0.34,0.726,0.34,0.896,0   c0.502-1.008,1.182-1.904,2.02-2.663C22.63,1.829,24.773,1,27,1c4.962,0,9,4.037,9,9C36,13.462,34.915,16.206,32.371,19.175z"/>
                            </g>
                        </svg> -->
                        <img src="@/assets/images/heart.svg" alt="" class="w-[15px] heart-icon">
                        <p class="pl-2">Add to Wishlist</p>
                    </div>
                </div>
                <div class="text-sm mt-12">
                    <p class="text-xl mb-5 font-semibold">DESCRTIPTION</p>
                    <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure asperiores quae ratione voluptatibus at accusantium, cupiditate delectus. Consectetur consequuntur porro explicabo voluptate tempore? Asperiores repellendus neque quasi impedit officiis! Laboriosam.</p>
                    <div class="ml-8 mb-4">
                        <ul>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                            <li>Lorem ipsum dolor</li>
                        </ul>
                    </div>
                    <div>
                        <p>Side length 31.5 cm</p>
                        <p>Back length 56.5 cm</p>
                    </div>
                    <div class="mt-4">
                        <p class="font-semibold">SHARE THIS</p>
                        <div class="mt-1  flex ">
                            <img src="https://1000logos.net/wp-content/uploads/2021/04/Facebook-logo.png" alt="" class="object-cover w-[30px] h-[30px]">
                            <img src="https://1000logos.net/wp-content/uploads/2017/02/Instagram-Logo-500x281.png" class="object-coverw-[30px] h-[30px]">
                            <img src="https://1000logos.net/wp-content/uploads/2019/06/Tiktok_Logo-500x313.png" class="object-coverw-[30px] h-[30px]">
                            <img src="https://1000logos.net/wp-content/uploads/2021/05/Google-logo-500x281.png" class="object-coverw-[30px] h-[30px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-[0.5px] bg-gray-700 my-12"></div>
        <div>
            <p class="text-center">YOU MAY BE INTERESTED</p>
            <div class="grid grid-rows-1 overflow-auto mt-8">
                <div class="flex justify-start items-center text-sm">
                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>

                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>

                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>

                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>

                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>

                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>

                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>
                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>
                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>
                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>
                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>
                    <div class="border-2 border-gray-500 h-[200px] w-[170px] p-4 mr-4">
                        <img src="@/assets/images/skirt.png" alt="" class="w-[150px] h-[130px] object-contain">
                        <div class="flex justify-between">
                            <p>Mini Skirt</p>
                            <p>$17</p>
                        </div>
                        <div class="flex justify-center items-center mt-2">
                            <button class="bg-orange-600 rounded text-white w-[60px]">BUY</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <Footer/>
    </div>
</template>

<script>
import NavbarGuest from'@/components/NavbarGuest.vue'
import Footer from'@/components/Footer.vue'

export default {
    components: {
        NavbarGuest,
        Footer
    },

    data() {
        return {
            quantity: 1,
        };
    },

    methods: {
        decrement() {
            if(this.quantity > 1) {
                this.quantity--;
            }
        },
        increment() {
            this.quantity++;
        }
    },
};
</script>

<style>
    .select-field {
        border: none;
        outline: none; 
    }

    .select-field:focus {
        box-shadow: none; 
    }
</style>
