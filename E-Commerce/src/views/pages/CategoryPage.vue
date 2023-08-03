<!-- <template>
    <div>
        <div>
            <div class="h-[40px] w-[35%] border-solid border-orange-600 border-2 rounded-full flex items-center justify-between m-5">
                <div class="flex justify-center items-center px-2">
                <img
                    src="@/assets/images/search.png"
                    alt="search icon"
                    class="w-[25px] h-[25px]"
                />
                <p class="text-left text-gray-400 py-8 px-4 text-xl">Search more product</p>
                </div>
                <button class="bg-orange-600 w-[80px] h-[30px] rounded-full text-white m-2">Search</button>
            </div>
        </div>

        <div class="w-[100%] h-px bg-gray-300 my-8"></div>

        <div class="flex p-5">
            <router-link :to="{ name: 'home' }">Home</router-link>
            <span class="mx-2">></span>
            <router-link :to="{ name: 'category' }" class="text-[#6e6d6d]"
                >Category</router-link
            >
            <span class="mx-2">></span>
            <a href="" class="text-[#6e6d6d]">{{ category.category_name }}</a>
        </div>

        <div v-for="product in category.products" :key="product.id" class="p-5">
            <a href="#" @click="listProduct(product.id)" class="text-4xl font-semibold">{{ product.product_name }}</a>
        </div>

        <div v-for="product in products" :key="product.id">
            <div class="grid grid-cols-3 px-24">
            <div
                class="w-[300px] h-[370px] relative parent-container border-2 rounded-2xl m-3">
                <router-link :to="{ name: 'detailproduct' }">
                <img
                    :src="product.image"
                    alt=""
                    class="object-cover w-[300px] h-[250px] rounded-t-2xl"
                />
                </router-link>
                <div
                class="absolute flex justify-between w-[260px] top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                >
                <p
                    class="bg-orange-100 h-[30px] w-[50px] py-1 text-center text-sm text-orange-600 rounded-lg"
                >
                    NEW
                </p>
                <div>
                    <img
                    src="https://www.transparentpng.com/thumb/instagram-heart/OtpLVC-heart-shaped-instagram-transparent-image.png"
                    alt=""
                    class="w-[30px]"
                    />
                </div>
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
                    <img
                        src="https://icon-library.com/images/white-shopping-cart-icon/white-shopping-cart-icon-9.jpg"
                        alt=""
                        class="w-[20px]"
                    />
                    </button>
                </div>
                </div>
            </div>
            </div>
        </div>   
    </div>
</template>

<script>
    export default {
        data() {
            return {
                categories: [],
                products: [],
            };
        },

        async mounted() {
            try{
                const categoryResponse = await fetch("http://localhost:8000/api/categories");
                const productResponse = await fetch("http://localhost:8000/api/products");
                
                const categoryData = await categoryResponse.json();
                const productData = await productResponse.json();

                this.categories = categoryData.data;
                this.products = productData;
            } catch(error) {
                console.error('Error to fetching categories', error);
            }
        },
    }
</script> -->