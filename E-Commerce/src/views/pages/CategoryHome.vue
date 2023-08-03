<template>
    <div class="border-solid border-2 border-gray-500 rounded-lg font-jaldi">
        <h1 class="font-bold text-center p-2 text-2xl">CATEGORY</h1>
        <div v-for="category in categories" :key="category.id" class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
            <!-- <img src="@/assets/images/women-dress.png" alt="black t-shirt"  class="object-fill w-[60px] h-[70px]"> -->
            <div class="object-fill w-[60px] h-[70px]">{{ category.image }}</div>
            <div class="text-start">{{ category.category_name }}</div>
            <p>+</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Category',

    data() {
        return {
            categories: [],

            category_name: '',
            image: ''
        };
    },

    async mounted() {
        try{
            const categoryResponse = await fetch(`http://localhost:8000/api/categories`);
            const cartegoryData = await categoryResponse.json();
            this.categories = cartegoryData;
        } catch (error) {
            console.error("Error fetching categories: ", error);
        }
    }
}
</script>