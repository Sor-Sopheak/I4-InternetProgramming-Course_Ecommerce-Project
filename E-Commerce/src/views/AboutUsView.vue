<template>
  <div class="w-screen">
    <section>
      <div class="w-[100%]">
        <div class="relative">
          <img src="@/assets/images/bgimg3.png" alt="" class="object-cover w-[100%] h-[300px] opacity-75">
          <div class="absolute p-2 bg-white flex left-1/2 transform -translate-x-1/2 -translate-y-1/2 shadow-lg shadow-[#a6a6a6]">
            <img src="@/assets/images/aboutmegirl1.jpg" alt="" class="object-cover h-[350px] w-[350px] pr-5">
            <div class="py-10 pr-12">
              <p class="pb-6">Hello</p>
              <p class="pb-6">Welcome to our About Us page!</p>
              <p class="pb-6">
                We're passionate about our purpose. 
                With 3 months of experience, we deliver products to exceed expectations.
                Our mission is to let you to explore your style. We strive for excellence in everything we do.
              </p>
              <p>
                Thank you for choosing StyleMingle.
              </p>
            </div>
          </div>
        </div>
        <div class="mt-52 flex flex-col justify-center items-center text-center">
          <p class="font-bold text-lg">WORKING PROGRESS</p>
          <div class="mt-6 flex flex-col-3 justify-center items-center">
            <img src="@/assets/images/aboutme2.jpg" alt="" class="object-contain w-full h-[350px] pr-2">
            <img src="@/assets/images/aboutme3.jpg" alt="" class="object-contain w-full h-[350px] pr-2">
            <img src="@/assets/images/aboutme4.jpg" alt="" class="object-contain w-full h-[350px] pr-2">
          </div>
          <div class="mt-6 w-[55%] flex text-left">
            <p class="text-7xl">L</p>
            <p class="pt-2 pl-3 text-[#6a6a6a]">
              Our approach is simple: we understand your needs, meticulously plan and implement, striving for excellence at every step. Trust [Your Company Name] for success, and experience a seamless journey towards achieving your goals.
            </p>
          </div>
          <div class="w-[55%] mt-12">
            <p class="font-bold text-lg mb-5">FEATURED ON</p>
            <div class="w-[100%] h-px bg-gray-300 mt-4 mb-6"></div>
            <div class="flex justify-between">
              <p>Trendsetting</p>
              <p>Diverse</p>
              <p>Premium</p>
              <p>Personalized</p>
              <p>Hassle-Free</p>
            </div>
            <div class="flex flex-col-2 bg-[#eeeae9] mt-10 h-[200px]">
              <img src="@/assets/images/aboutme5.jpg" alt="" class="object-contain w-[350px] h-[200px]">
              <div class="text-left p-10">
                <p class="font-bold text-lg pb-5">KEEP IN TOUCH FOR THE GOOD STUFF</p>
                <p class="text-[#6a6a6a]">
                  Stay connected for exciting updates, exclusive offers, and the latest in girl's fashion. Join our vibrant fashion community today.
                  Be the first to know about new arrivals and seasonal collections. Don't miss out on the good stuff!
                </p>
                <p class="text-right text-[#6a6a6a]">Good bey</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
     
    </section>

    <div class="w-[100%] h-px bg-gray-300 mt-28"></div>
    <Footer />


  </div>
</template>

<script>
import NavbarGuest from'@/components/NavbarGuest.vue'
import Footer from'@/components/Footer.vue'

export default {
  components : { NavbarGuest, Footer},

  data() {
    return {
      links: [
        { text: 'Home', clicked: false },
        { text: "Collection", clicked: false },
        { text: "Category", clicked: false },
        { text: 'About us', clicked: true },
        { text: 'Contact us', clicked: false },
      ]
    };
  },
  methods: {
    changeColor(index) {
      this.links.forEach((link, i) => {
        link.clicked = i === index;
      });
    }
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
</style>
