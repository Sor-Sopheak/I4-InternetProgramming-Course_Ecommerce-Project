<template>
      <div class="w-screen">
        <nav class="w-[100%] grid grid-cols-[0.5fr,1.3fr,0.5fr] font-bold border-b-2 border-gray-300 h-[60px] items-center sticky top-0 bg-white shadow">
          <div class="logo flex flex-column">
            <h1 class="font-jolly font-black text-3xl ml-12">
              <span class="after:content-['M'] after:text-orange-600">Style</span>ingle
            </h1>
          </div>
          <div class="text-xl font-medium">
            <a href="#" v-for="(link, index) in links" :key="index" :class="{'text-orange-600': link.clicked, 'text-black': !link.clicked, 'underline': !link.clicked }" @click.prevent="changeColor(index)" class="underline p-4">
              <router-link v-if="link.text === 'Collection'" :to="{ name: 'collection' }" class="underline p-4" exact>
                {{ link.text }}
              </router-link>
              <router-link v-else-if="link.text === 'Home'" :to="{ name: 'home' }" class="underline p-4" exact>
                {{ link.text }}
              </router-link>
              <router-link v-else-if="link.text === 'Category'" :to="{ name: 'category' }" class="underline p-4" exact>
                {{ link.text }}
              </router-link>
              <router-link v-else-if="link.text === 'About us'" :to="{ name: 'aboutus' }" class="underline p-4" exact>
                {{ link.text }}
              </router-link>
              <router-link v-else-if="link.text === 'Contact us'" :to="{ name: 'contactus' }" class="underline p-4" exact>
                {{ link.text }}
              </router-link>
            </a>
          </div>
          <div class="cart flex flex-row justify-end px-5 mr-12">
            <div class="pr-2">
              <img src="https://cdn.icon-icons.com/icons2/2506/PNG/512/user_icon_150670.png" alt="" class="w-[35px] h-[35px]">
            </div>
            <div  class="pr-2">
              <img src="https://www.freeiconspng.com/thumbs/cart-icon/basket-cart-icon-27.png" alt="" class="w-[35px] h-[35px]">
            </div>
              <h2 class="font-itim font-black text-2xl">Cart(0)</h2>
          </div>
        </nav>

        <section>
          <div class="h-500px bg-[#fab89c] grid grid-cols-[0.7fr,1fr]">
            <img src="@/assets/images/girlcollecthead.png" alt="" class="object-contain w-[80%] mx-16">
            <div>
              <div>
                <h1 class="text-7xl w-[70%] mb-5">SUMMER COLLECTION</h1>
                <div class="flex mb-5 px-2">
                  <a href="#">
                    <img src="@/assets/images/fb.png" alt="" class="object-contain h-[40px] w-[40px]">
                  </a>
                  <a href="#">
                    <img src="@/assets/images/ig.png" alt="" class="object-contain h-[40px] w-[40px]">
                  </a>
                  <a href="#">
                    <img src="@/assets/images/tw.png" alt="" class="object-contain h-[40px] w-[40px]">
                  </a>
                  <a href="#">
                    <img src="@/assets/images/yt.png" alt="" class="object-contain h-[40px] w-[40px]">
                  </a>
                </div>
              </div>
              <div class="grid grid-cols-[0.5fr,1fr]">
                <div class="px-2">
                  <p class="text-[#666666] mb-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi reiciendis ipsam perspiciatis atque quo, magni et commodi.</p>
                  <button class="bg-black text-white text-xs h-[40px] w-[110px] text-center flex items-center justify-center rounded-3xl">SHOP NOW</button>
                </div>
                <div class="grid grid-cols-[0.61fr,1fr] bg-black">
                  <img src="@/assets/images/iu.jpg" alt="" class="object-contain h-[350px] w-[250px]">
                  <div class="text-white p-5 h-[350px]">
                    <span class="text-center text-4xl leading-snug">SPECIAL OFFER OF THE MONTH</span>
                    <p class="text-[#b2b2b2]">Black long sleeve</p>
                    <div class="flex justify-between">
                      <div class="flex justify-between w-[100px]">
                        <p class="line-through">$128</p>
                        <p class="text-xl font-bold">$180</p>
                      </div>
                      <button class="bg-white text-black text-xs h-[30px] w-[90px] text-center flex items-center justify-center rounded-3xl">SHOP NOW</button>
                    </div>
                    <div class="flex justify-between mt-8">
                      <div class="bg-white text-black w-[90px] text-center p-2 rounded-xl">
                        <p class="text-5xl">09</p>
                        <p class="text-sm text-[#666666]">Hello</p>
                        <p>jkasdjfa</p>
                      </div>
                      <div class="bg-white text-black w-[90px] text-center p-2 rounded-xl">
                        <p class="text-5xl">09</p>
                        <p class="text-sm text-[#666666]">Hello</p>
                        <p>jkasdjfa</p>
                      </div>
                      <div class="bg-white text-black w-[90px] text-center p-2 rounded-xl">
                        <p class="text-5xl">09</p>
                        <p class="text-sm text-[#666666]">Hello</p>
                        <p>jkasdjfa</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
        </section>


        <div class="w-[100%] h-px bg-gray-300 mt-28"></div>
    
        <footer class="w-[100%] grid grid-rows-[0.4fr,0.1fr] text-sm">
          <div class="grid grid-cols-[0.4fr,1fr] mx-5">
            <div class="flex flex-col m-4 text-lg">
              <h2>FOLLOW</h2>
              <div class="mt-1 flex ">
                <img src="https://1000logos.net/wp-content/uploads/2021/04/Facebook-logo.png" alt="" class="object-cover w-[30px] h-[30px]">
                <img src="https://1000logos.net/wp-content/uploads/2017/02/Instagram-Logo-500x281.png" class="object-coverw-[30px] h-[30px]">
                <img src="https://1000logos.net/wp-content/uploads/2019/06/Tiktok_Logo-500x313.png" class="object-coverw-[30px] h-[30px]">
                <img src="https://1000logos.net/wp-content/uploads/2021/05/Google-logo-500x281.png" class="object-coverw-[30px] h-[30px]">
              </div>

              <div class="flex justify-between mt-3 w-[45%] text-sm">
                <div class="leading-tight">
                  <p>Autumn</p>
                  <p>Winter</p>
                  <p>Spring</p>
                  <p>Summer</p>
                </div>
                <div class="leading-tight">
                  <p>Casual</p>
                  <p>Classic</p>
                  <p>Urban</p>
                  <p>Sport</p>
                </div>
              </div>
            </div>

            <div class="flex flex-col m-7">
              <div class="flex justify-between w-[40%] text-lg mb-5">
                <p>NEW ARRIVALS</p>
                <p>DISCOUNTS</p>
                <p>CONTACT US</p>
              </div>
              <div>
                <p>Subcribe to get the lotest on sales, new releases and more ...</p>
                <div class="w-[50%] flex justify-between my-3">
                  <p class="bg-orange-600 font-medium w-[78%] h-[27px] text-white p-1 rounded">Enter your email here</p>
                  <button class="bg-green-700 px-2 rounded h-[27px] shadow-lg text-white">SUBCRIBE</button>
                </div>
                <span class="after:content-['Sopheak'] after:text-orange-600">StareM4.Power by </span>
              </div>
              <div>
                <p>Supported payment systems</p>
                <div class="flex mt-2">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Former_Visa_%28company%29_logo.svg/2560px-Former_Visa_%28company%29_logo.svg.png" alt="facebook icon" class="w-[40px] h-[30px] mr-5">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/200px-MasterCard_Logo.svg.png" alt="instagram icon" class="w-[50px] h-[30px] mr-5">
                  <img src="https://logodix.com/logo/61114.jpg" alt="line icon" class="w-[60px] h-[30px] mr-5">
                  <img src="https://sm.pcmag.com/pcmag_uk/review/p/paypal/paypal_kzfp.png" class="w-[50px] h-[30px] mr-5">
                </div>
              </div>
            </div>
          </div>
          
          <div class="bg-orange-600 h-[50px] text-white text-center p-2 text-sm">
            <p>@2023 All Rights Reserved Terms of Use</p>
            <p>and Privacy Plicy.</p>
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
            { text: "Collection", clicked: true },
            { text: "Category", clicked: false },
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
  