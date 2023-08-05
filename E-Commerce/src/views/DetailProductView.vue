<template>
  <div class="w-full" v-if="categories != null">
    <div>
        <div class="ml-12 mt-4 flex">
            <router-link :to="{ name: 'home' }" class="hover:text-orange-600 hover:underline">Home</router-link>
            <p>&nbsp>&nbsp</p>
            <router-link :to="{ name: 'category' }" class="hover:underline text-gray-500">Category</router-link>
            <p>&nbsp>&nbsp</p>
            <p class="text-gray-500">{{ categories.category_name }}</p>
        </div>

        <div class="grid grid-cols-2 mx-12 mt-6">
            <div class="flex flex-col mr-8">
            <div
                class="flex justify-center items-center border-[1px] h-[350px] border-orange-600 mx-12"
            >
                <img v-if="product != ''"
                :src="'https://sopheak.tysophearum.tech'+product.product_images[index].image"
                alt=""
                class="w-[300px] h-[300px] object-contain"
                />
            </div>

            <div
                class="flex justify-start items-center h-[140px] border-[1px] mx-12 border-orange-600"
            >
                <div
                v-for="(productImage, index) in product.product_images"
                class="flex flex-row m-2"
                >
                <img
                    :src="'https://sopheak.tysophearum.tech'+productImage.image"
                    @click="change(index)"
                    alt=""
                    class="w-[110px] h-[120px] object-contain cursor-pointer"
                />
                </div>
            </div>
            </div>
            <div class="ml-8">
                <p class="text-3xl font-semibold mb-4">{{ product.product_name }}</p>
                <p class="text-3xl font-semibold mb-2">${{ product.price }}</p>
                <hr />
                <div class="my-5">
                    <div>
                    <div class="flex justify-between">
                        <div
                        class="inline-flex items-center border border-black rounded p-2"
                        >
                        <label for="size">Size:</label>
                        <select
                            v-model="selectedSize"
                            @change="listSize"
                            name="size"
                            id="size"
                            class="select-field border-none bg-transparent appearance-none focus:outline-none custom-select"
                        >
                            <option value="">Select Size</option>
                            <option
                                v-for="size in sizes"
                                :key="size.id"
                                :value="size.id"
                                >
                                {{ size.size }}
                            </option>
                        </select>
                        </div>
                        <div class="inline-flex items-center border border-black rounded p-2">
                            <button @click="decrement" class="border-r rounded-l px-2 focus:outline-none">-</button>
                            <input disabled type="number" min="1" v-model="quantity" class="w-16 text-center border-none"/>
                            <button @click="increment" class="border-l rounded-r px-2 focus:outline-none">+</button>
                        </div>
                        <button @click="addToCart" class="bg-black text-white h-[57px] rounded px-8">ADD TO CART</button>
                    </div>
                    </div>
                </div>
                <div class="text-gray-500 text-sm flex flex-row justify-between">
                    <div>
                        <button  @click="isShowingSizeGuide = !isShowingSizeGuide" class="hover:underline hover:text-orange-600">
                            Open size guide
                        </button>
                        <img v-if="isShowingSizeGuide" src="https://cdn11.bigcommerce.com/s-fykcc646/product_images/uploaded_images/size-chart.png" alt="" class="w-11/12"/>
                    </div>

                </div>
                <div class="text-sm mt-12">
                    <p class="text-xl mb-5 font-semibold">DESCRIPTION</p>
                    <p class="mb-4">{{ product.description }}</p>
                    <div class="ml-8 mb-4">
                    <ul>
                        <li>
                        &#8226; Timeless and elegant knee-length dress suitable for
                        various occasions
                        </li>
                        <li>
                        &#8226; Flattering and versatile denim style, perfect for
                        casual or chic looks
                        </li>
                        <li>
                        &#8226; Cozy and effortlessly stylish garment for a relaxed
                        vibe
                        </li>
                        <li>
                        &#8226; Flattering and feminine with a waist-cinching self-tie
                        closure
                        </li>
                        <li>
                        &#8226; Edgy and versatile outerwear that adds attitude to any
                        outfit
                        </li>
                        <li>
                        &#8226; Flowy and comfortable dress ideal for summer or
                        beachwear
                        </li>
                        <li>
                        &#8226; Classic and practical footwear suitable for various
                        outfits
                        </li>
                    </ul>
                    </div>
                    <div>
                    <p>Side length 31.5 cm</p>
                    <p>Back length 56.5 cm</p>
                    </div>
                    <div class="mt-4">
                    <p class="font-semibold">SHARE THIS</p>
                    <div class="mt-1 flex">
                        <img
                        src="https://1000logos.net/wp-content/uploads/2021/04/Facebook-logo.png"
                        alt=""
                        class="object-cover w-[30px] h-[30px]"
                        />
                        <img
                        src="https://1000logos.net/wp-content/uploads/2017/02/Instagram-Logo-500x281.png"
                        class="object-coverw-[30px] h-[30px]"
                        />
                        <img
                        src="https://1000logos.net/wp-content/uploads/2019/06/Tiktok_Logo-500x313.png"
                        class="object-coverw-[30px] h-[30px]"
                        />
                        <img
                        src="https://1000logos.net/wp-content/uploads/2021/05/Google-logo-500x281.png"
                        class="object-coverw-[30px] h-[30px]"
                        />
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-[0.5px] bg-gray-700 my-12"></div>
        <div>
            <p class="text-center">YOU MAY BE INTERESTED</p>
            <div  class= "hide-scroll flex m-8 overflow-x-auto">
            <div
                v-for="product in productList"
                :key="product.id"
                class="flex justify-start items-center text-sm "
            >
                <button @click="changeProduct(product.id)" class="border-2 border-gray-500 w-[170px] p-4 mr-8 h-[15rem] flex flex-col  justify-between items-center">
                <img
                
                    :src="'https://sopheak.tysophearum.tech'+product.image"
                    alt=""
                    class=" max-h-[70%] max-w-full  object-cover"
                />
                <div class="w-full flex flex-col  justify-between items-center">
                    <div class="w-full flex justify-between mt-2">
                        <p class="truncate long-text">{{ product.product_name }}</p>
                        <p>${{ product.price }}</p>
                    </div>
                    <div class="flex justify-center items-center mt-2">
                        <router-link :to="'/productDetail/'+[product.id]">
                            <button class="bg-orange-600 rounded text-white w-[60px]">
                                BUY
                            </button>
                        </router-link>
                    </div>

                </div>
                </button>
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
import axios from "axios";
export default {
    components: {
        NavbarGuest,
        Footer,
    },

    data() {
        return {
            selectedSize: '',
            quantity: 1,
            index: 0,
            categories: Object,
            product: Object,
            productList: [],
            sizes: [],
            isShowingSizeGuide: false,
            currectProductId: this.$route.params.id
        };
    },

    created() {
        this.showProductChange();  
    },

    methods: {

        async showProductChange() {
            const id = this.currectProductId;
            this.product = await this.getProduct(id);
            this.getCategory(this.product.category_id);
            this.listInterestedProduct();

            if (this.sizes.length > 0) {
                this.selectedSize = this.sizes[0].id;
            }
            this.listSize();
        },

        changeProduct(id) {
            this.currectProductId = id
            this.$router.push(`/productDetail/${this.currectProductId}`);
            this.showProductChange()
        },

        async getProduct(id) {
            // const response = await fetch(`https://sopheak.tysophearum.tech/api/products/${this.$route.params.id}`);
            const response = await fetch(`https://sopheak.tysophearum.tech/api/products/${id}`);
            const data = await response.json();;
            return data
        },

        async getCategory(id) {
        try {
            const response = await fetch(`https://sopheak.tysophearum.tech/api/categories/products/${id}`);
            const data = await response.json();
            this.categories = data;
        } catch (error) {
            console.log("Error fetching product", error);
        }
        },

        async listInterestedProduct() {
            const response = await fetch(`https://sopheak.tysophearum.tech/api/products`);
            const data = await response.json();
            this.productList = data;
        },
        
        addToCart() {
            const user = JSON.parse(localStorage.getItem("user"));
            const token = localStorage.getItem("token");
            if (!user || !token) {
                alert("Please log in first to add items to your cart.");
                return;
            }
            
            axios.post("https://sopheak.tysophearum.tech/api/carts",{
                user_id: user.id,
                // user_id: JSON.parse(localStorage.getItem("user")).id,
                product_id: this.$route.params.id,
                size_id: this.$route.params.id,
                price: this.$route.params.id,
                quantity: this.quantity
            },
            {
                headers: {
                    Authorization: "Bearer " + localStorage.getItem("token"),
                },
            })
            .then((res) => {
                this.$router.push({name: 'cart'});
            });
        },

        decrement() {
            if (this.quantity > 1) {
                this.quantity--;
                // this.getQuantity();
            }
        },

        increment() {
            this.quantity++;
            // this.getQuantity();
        },

        change(i) {
            this.index = i;
        },

        async listSize() {
            const res = await fetch('https://sopheak.tysophearum.tech/api/sizes', {
                method: "GET",
                headers: {
                "Content-type": "application/json",
                },
            });

            const result = await res.json();
            this.sizes = await result;
            console.log(result);
        },
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
.hide-scroll::-webkit-scrollbar{
    display: none;
}
</style>
