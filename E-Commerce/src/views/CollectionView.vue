<template>
      <div class="w-screen">
        <nav class="w-[100%] grid grid-cols-[0.5fr,1.3fr,0.5fr] font-bold border-b-2 border-gray-300 h-[60px] items-center sticky top-0 bg-white shadow z-10">
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
            <img src="@/assets/images/girlcollecthead.png" alt="" class="object-contain w-[76.9%] mx-16">
            <div>
              <div>
                <h1 class="font-jetbrains-mono font-semibold text-7xl w-[70%] mb-5">SUMMER COLLECTION</h1>
                <div class="flex px-2">
                  <a href="#">
                    <img src="@/assets/images/fb.png" alt="" class="object-contain h-[35px] w-[35px]">
                  </a>
                  <a href="#">
                    <img src="@/assets/images/ig.png" alt="" class="object-contain h-[35px] w-[35px]">
                  </a>
                  <a href="#">
                    <img src="@/assets/images/tw.png" alt="" class="object-contain h-[35px] w-[35px]">
                  </a>
                  <a href="#">
                    <img src="@/assets/images/yt.png" alt="" class="object-contain h-[35px] w-[35px]">
                  </a>
                </div>
              </div>
              <div class="grid grid-cols-[0.5fr,1fr]">
                <div class="px-2">
                  <p class="text-[#4b372f] mt-8 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi reiciendis ipsam perspiciatis atque quo, magni et commodi.</p>
                  <button class="font-semibold bg-black text-white text-sm h-[40px] w-[110px] text-center flex items-center justify-center rounded-3xl">SHOP NOW</button>
                </div>
                <div class="font-jetbrains-mono grid grid-cols-[0.61fr,1fr] bg-black">
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

        <section>
          <div>
            <div class="flex justify-center text-center m-5 font-semibold text-xl">
              <a href="#" class="p-4 underline">All</a>
              <a href="#" class="p-4">Springtime</a>
              <a href="#" class="p-4">Spring Shower</a>
              <a href="#" class="p-4">Spring Layers</a>
              <a href="#" class="p-4">Spring Wind</a>
              <a href="#" class="p-4">Spring Chill</a>
            </div>

            <div class="flex justify-center items-center mt-8">
              <div class="grid grid-cols-[1fr,1.7fr,1fr] w-[90%]">
                <div class="grid grid-rows-[0.66fr,0.5fr]">
                  <div class="relative">
                    <img src="@/assets/images/suit1.jpg" alt="" class="object-cover h-[330px] w-[100%]">
                    <div class="absolute bottom-24 left-1/2 transform -translate-x-1/2 translate-y-1/2 text-center text-3xl font-bold w-[80%]">
                      <p class="leading-relaxed">Suit</p>
                      <p>UP TO 35% OFF</p>
                    </div>
                  </div>
                  
                  <div>
                    <img src="@/assets/images/womenbag.jpg" alt="" class="object-cover mt-4 h-[255px] w-[100%]">
                  </div>
                </div>
                <div class="relative flex justify-center">
                  <img src="@/assets/images/womentopp.png" alt="" class="object-cover w-[90%] h-[600px]">
                  <div class="absolute top-1/4 left-1/2 transform -translate-x-1/2 translate-y-1/2">
                    <p class="text-sm text-[#4a4a49]">Explore yourself</p>
                    <p class="font-bold text-xl w-[70%]">YOU LOOK GOOD WITH YOUR STYLE</p>
                    <button class="bg-black h-[30px] text-sm px-3 rounded-2xl text-white">SHOP NOW</button>
                  </div>
                </div>
                <div class="grid grid-rows-[0.66fr,0.5fr] gap-4">
                  <div class="relative">
                    <img src="@/assets/images/milkjacket.jpg" alt="" class="object-cover w-[100%] h-[280px]">
                    <div class="absolute top-1/4 left-1/2 transform -translate-x-1/2 translate-y-1/2">
                      <p>Women Denim Jacket</p>
                      <p class="font-bold">CREATE YOUR FASHION WITH US</p>
                      <button class="bg-black h-[30px] text-sm px-3 rounded-2xl text-white">SHOP NOW</button>
                    </div>
                  </div>
                  <div class="relative">
                    <img src="@/assets/images/glass.jpg" alt="" class="object-cover w-[100%] h-[305px]">
                    <p class="absolute bottom-6 left-1/2 transform -translate-x-1/2 translate-y-1/2 text-center w-[100%]">LET'S SUN EPLORE YOU</p>
                  </div>
                </div>
              </div>
            </div>
              
            <div class="bg-orange-600 h-[180px] flex justify-center items-center text-white text-center mt-8">
              <img src="@/assets/images/2women.png" alt="" class="object-cover h-[200px]">
              <div>
                <p class="text-xl text-shadow">WE OFFER BRAND NEW STYLES</p>
                <p>Let's us explore your style</p>
                <button class="text-black text-xs h-[25px] bg-white px-3 rounded-2xl mt-5 shadow-md">SEE FULL COLLECTION</button>
              </div> 
            </div>

            <div class="flex flex-col justify-center items-center text-center mt-12">
              <div class="text-center">
                <p class="text-xl font-jetbrains-mono">PRODUCT TYPE</p>
                <p class="text-[#4d4d4d] font-jetbrains-mono">Up to 30% discount</p>
              </div>
              <div class="flex">
                <div class="m-3 relative h-[400px]">
                  <img src="@/assets/images/office.jpg" alt="" class="object-cover w-[300px] h-[400px]">
                  <button class="absolute bg-black text-white text-xs px-4 h-[30px] w-[90px] rounded-2xl bottom-12 left-1/2 transform -translate-x-1/2 translate-y-1/2">OFFICE</button>
                </div>
                <div class="m-3 relative h-[400px]">
                  <img src="@/assets/images/party.jpg" alt="" class="object-cover w-[300px] h-[400px]">
                  <button class="absolute bg-black text-white text-xs px-4 h-[30px] w-[90px] rounded-2xl bottom-12 left-1/2 transform -translate-x-1/2 translate-y-1/2">Party</button>
                </div>
                <div class="m-3 relative h-[400px]">
                  <img src="@/assets/images/outdoor.jpg" alt="" class="object-cover w-[300px] h-[400px]">
                  <button class="absolute bg-black text-white text-xs px-4 h-[30px] w-[90px] rounded-2xl bottom-12 left-1/2 transform -translate-x-1/2 translate-y-1/2">OUTDOOR</button>
                </div>
              </div>

              <div class="">
                <p class="font-bold text-xl my-12">FEATURED PRODUCTS</p>
                <div class="flex">
                  <div class="mx-2">
                    <img src="@/assets/images/jacketshirt.jpg" alt="" class="object-cover w-[220px] h-[350px]">
                    <div class="text-start mt-4">
                      <p class="font-bold">Oversized Sweatshirt</p>
                      <p class="text-[#4d4d4d]">Casual</p>
                      <div class="flex justify-between w-[60%]">
                        <p class="text-[#4d4d4d]">$70.00</p>
                        <p>$57.00</p>
                      </div>
                    </div>
                  </div>

                  <div class="mx-2">
                    <img src="@/assets/images/casual.jpg" alt="" class="object-cover w-[220px] h-[350px]">
                    <div class="text-start mt-4">
                      <p class="font-bold">Long Pants</p>
                      <p class="text-[#4d4d4d]">Casual</p>
                      <div class="flex justify-between w-[60%]">
                        <p class="text-[#4d4d4d]">$90.70</p>
                        <p>$72.00</p>
                      </div>
                    </div>
                  </div>

                  <div class="mx-2">
                    <img src="@/assets/images/officewomensuit.jpg" alt="" class="object-cover w-[220px] h-[350px]">
                    <div class="text-start mt-4">
                      <p class="font-bold">Office Suit</p>
                      <p class="text-[#4d4d4d]">Office</p>
                      <div class="flex justify-between w-[60%]">
                        <p class="text-[#4d4d4d]">$70.00</p>
                        <p>$57.00</p>
                      </div>
                    </div>
                  </div>

                  <div class="mx-2">
                    <img src="@/assets/images/swag.jpg" alt="" class="object-cover w-[220px] h-[350px]">
                    <div class="text-start mt-4">
                      <p class="font-bold">Oversized T-Shirt</p>
                      <p class="text-[#4d4d4d]">Casual</p>
                      <div class="flex justify-between w-[60%]">
                        <p class="text-[#4d4d4d]">$20.00</p>
                        <p>$17.00</p>
                      </div>
                    </div>
                  </div>
                </div>

                <button class="mt-8 h-[40px] w-[100px] border-orange-600 border-2 rounded-3xl text-sm shadow-lg">SHOW MORE</button>
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
                  <input type="email" class="bg-orange-600 font-medium w-[78%] h-[27px] placeholder-white p-1 rounded outline-none text-white" placeholder="Enter your email here">
                  <button class="bg-green-700 px-2 rounded h-[27px] shadow-lg text-white">SUBCRIBE</button>
                </div>
                <span class="after:content-['SopheakSor'] after:text-orange-600">StareM4.Power by </span>
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
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=JetBrains+Mono&display=swap');

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
    .font-jetbrains-mono{
      font-family: 'JetBrains Mono', monospace;
    }

    .text-shadow {
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
</style>
  