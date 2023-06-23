<template>
    <div class="w-screen">
        <nav class="w-[100%] grid grid-cols-[0.5fr,1.3fr,0.5fr] font-bold border-b-2 border-gray-300 h-[60px] items-center sticky top-0 bg-white shadow">
          <div class="logo flex flex-column">
            <h1 class="font-jolly font-black text-3xl ml-12">
              <span class="after:content-['M'] after:text-orange-600">Style</span>ingle
            </h1>
          </div>
            <div class="font-jolly text-xl">
              <a href="#" v-for="(link, index) in links" :key="index" :class="{'text-orange-600': link.clicked, 'text-black': !link.clicked, 'underline': !link.clicked }" @click.prevent="changeColor(index)" class="underline p-4">
                <router-link v-if="link.text === 'Category'" :to="{ name: 'category' }" class="underline p-4" exact>
                  {{ link.text }}
                </router-link>
                <router-link v-else-if="link.text === 'Home'" :to="{ name: 'home' }" class="underline p-4" exact>
                  {{ link.text }}
                </router-link>
                <span v-else>
                  {{ link.text }}
                </span>
              </a>
            </div>
            <div class="cart flex flex-row justify-end px-5">
                <div class="pr-2">
                <img src="https://cdn.icon-icons.com/icons2/2506/PNG/512/user_icon_150670.png" alt="" class="w-[35px] h-[35px]">
                </div>
                <div  class="pr-2">
                <img src="https://www.freeiconspng.com/thumbs/cart-icon/basket-cart-icon-27.png" alt="" class="w-[35px] h-[35px]">
                </div>
                <h2 class="font-itim font-black text-2xl">Cart(0)</h2>
            </div>
        </nav>

        <section class="h-[700px]">
            <div>
              <div class="flex p-12">
                <a href="">Home</a>
                <span>></span>
                <a href="">Categories</a>
              </div>
              <div class="text-center">
                <h1>Categories</h1>
              </div>
              <div class="grid grid-cols-[0.2fr,1fr]">
                <div class="border-2 border-gray-300 text-center">
                  <h3>Categories</h3>
                  <div>
                    <p>Dress</p>
                    <p>Skirt</p>
                    <p>Bikini</p>
                    <p>Jeans</p>
                    <p>Pants</p>
                    <p>Trousers</p>
                    <p>Crop top</p>
                    <p></p>
                  </div>
                </div>

                <div> 
                  <div class="relative flex">
                    <div class="relative z-10">
                      <h2>All Product</h2>
                      <p>The center of women trending clothes in the world</p>
                    </div>
                    <div class="absolute inset-0 flex justify-center">
                      <!-- <img src="https://img.huffingtonpost.com/asset/5c8a92ad3b000054066c237a.jpeg?ops=scalefit_720_noupscale" alt="" class="object-cover w-full h-[300px] opacity-70"> -->
                      <!-- <div class="object-none w-full h-[300px] bg-[#e8d5b8] opacity-50"></div> -->
                      <!-- <img src="https://media.istockphoto.com/id/1157772116/photo/fashion-womens-clothes-in-shopping-mall-windows.webp?b=1&s=170667a&w=0&k=20&c=nf94ywLNPgARYhmeA1W0HfzJXOEawDBQ2ZYgX5Hxgd8=" alt="" class="object-none w-full h-[300px]"> -->
                      <img src="@/assets/images/2women.png" alt="" class="">
                      <div class="object-none w-full  bg-[#e8d5b8] opacity-50"></div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>



      <footer class="w-[100%] bg-orange-600 grid grid-cols-[0.4fr,1fr] text-white text-sm mt-7">
      <div class="flex flex-col m-4 text-lg">
        <h2>FOLLOW</h2>
        <div class="mt-2 flex ">
          <img src="https://1000logos.net/wp-content/uploads/2021/04/Facebook-logo.png" alt="" class="object-cover w-[30px] h-[30px]">
          <img src="https://1000logos.net/wp-content/uploads/2017/02/Instagram-Logo-500x281.png" class="object-coverw-[30px] h-[30px]">
          <img src="https://1000logos.net/wp-content/uploads/2019/06/Tiktok_Logo-500x313.png" class="object-coverw-[30px] h-[30px]">
          <img src="https://1000logos.net/wp-content/uploads/2021/05/Google-logo-500x281.png" class="object-coverw-[30px] h-[30px]">
        </div>

        <div class="grid grid-cols-2 mt-2">
          <div>
            <p>Autumn</p>
            <p>Winter</p>
            <p>Spring</p>
            <p>Summer</p>
          </div>
          <div>
            <p>Casual</p>
            <p>Classic</p>
            <p>Urban</p>
            <p>Sport</p>
          </div>
        </div>
      </div>
      <div class="flex flex-col m-7">
        <div class="flex justify-between w-[50%] text-lg">
          <p>NEW ARRIVALS</p>
          <p>DISCOUNTS</p>
          <p>CONTACT US</p>
        </div>
        <div>
          <p>Subcribe to get the lotest on sales, new releases and more ...</p>
          <div class="w-[50%] flex justify-between mt-2">
            <p class="bg-white w-[78%] h-[30px]"></p>
            <button class="bg-green-700 px-2 font-bold rounded h-[30px] shadow-lg">SUBCRIBE</button>
          </div>
          <span class="after:content-['Sopheak'] after:text-black mt-3">StareM4.Power by </span>
        </div>
        <div class="mt-4">
          <p>Supported payment systems</p>
          <div class="flex mt-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Former_Visa_%28company%29_logo.svg/2560px-Former_Visa_%28company%29_logo.svg.png" alt="facebook icon" class="w-[50px] h-[40px] mr-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/200px-MasterCard_Logo.svg.png" alt="instagram icon" class="w-[60px] h-[40px] mr-5">
            <img src="https://logodix.com/logo/61114.jpg" alt="line icon" class="w-[70px] h-[40px] mr-5">
            <img src="https://m.media-amazon.com/images/G/01/gc/designs/livepreview/a_generic_white_10_us_noto_email_v2016_us-main._CB627448186_.png" class="w-[70px] h-[40px] mr-5">
            <img src="https://sm.pcmag.com/pcmag_uk/review/p/paypal/paypal_kzfp.png" class="w-[60px] h-[40px] mr-5">
          </div>
        </div>
      </div>
    </footer>
    </div>
</template>

<script>

export default {
  //click nav change color 
  data() {
    return {
      links: [
        { text: 'Home', clicked: false },
        { text: "Collection", clicked: false },
        { text: "Category", clicked: true },
        { text: 'Feature', clicked: false },
        { text: 'About us', clicked: false },
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