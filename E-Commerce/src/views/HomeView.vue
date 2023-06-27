<template>
  <div class="w-screen m-0 p-0">
    <nav class="w-[100%] grid grid-cols-[0.5fr,1.3fr,0.5fr] font-bold border-b-2 border-gray-300 h-[60px] items-center sticky top-0 bg-white shadow">
      <div class="logo flex flex-column">
        <h1 class="font-jolly font-black text-3xl ml-12">
          <span class="after:content-['M'] after:text-orange-600">Style</span>ingle
        </h1>
      </div>
      <div class="text-xl font-medium">
        <a href="#" v-for="(link, index) in links" :key="index" :class="{'text-orange-600': link.clicked, 'text-black': !link.clicked, 'underline': !link.clicked }" @click.prevent="changeColor(index)" class="underline p-4">
          <router-link v-if="link.text === 'Home'" :to="{ name: 'home' }" class="underline p-4" exact>
            {{ link.text }}
          </router-link>
          <router-link v-else-if="link.text === 'Collection'" :to="{ name: 'collection' }" class="underline p-4" exact>
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

    <section class="flex flex-col w-[100%]">
      <div class="flex justify-between h-[200px]">
        <div class="left_header w-[50%] ml-[100px] mt-[25px]">
          <h2 class="font-dancing text-[#ea2be2] text-5xl font-bold leading-none">Best Collection</h2><br>
          <h1 class="text-5xl font-itim font-bold w-[80%] leading-tight">WOMEN'S LATEST FASTION SALE</h1><br>
          <p class="text-gray-400 text-xl font-medium w-[30%] leading-none">Ready to start your new outfit today</p>
          <button class="h-[40px] bg-orange-600 text-2xl px-5 text-white font-medium mt-7 rounded">SHOP NOW</button>
        </div>
        <div class="right_header items-end">        
          <img src="@/assets/images/women-logo.png" alt="women" class=" mr-32 ">
        </div>
      </div>
      <div class="mt-48 m-auto w-[75%]">
        <div class=" h-[50px] border-solid border-gray-500 border-2 rounded-full flex items-center justify-between font-itim text-xl"> 
          <div class="flex">
            <img src="@/assets/images/search.png" alt="search icon" class="w-[30px] h-[30px] m-6">
            <p class="text-left text-gray-400 p-6 text-2xl">Search more product</p>
          </div>
          <button class=" bg-orange-600 w-[120px] h-[40px] rounded-full text-white m-2">Search</button>
        </div>
      </div>
    </section>
    <section class="w-[95%] mx-10">
      <div class="grid grid-cols-[0.3fr,1fr] mt-20 justify-center">
        <!-- CATEGORY -->
        <div class="border-solid border-2 border-gray-500 rounded-lg font-jaldi">
          <h1 class="font-bold text-center p-2 text-2xl">CATEGORY</h1>
          <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
            <img src="@/assets/images/women-dress.png" alt="black t-shirt"  class="object-fill w-[60px] h-[70px]">
            <p class="text-start">Dress</p>
            <p>+</p>
          </div>

          <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
            <img src="@/assets/images/t-shirt.png" alt="black t-shirt"  class="object-fill w-[60px] h-[70px]">
            <p class="text-start">T-shirt</p>
            <p>+</p>
          </div>

          <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
            <img src="@/assets/images/shirt.png" alt="men shirt"  class="object-fill w-[60px] h-[70px]">
            <p class="text-start">Shirt</p>
            <p>+</p>
          </div>

          <div class="flex-grow h-px bg-gray-400 m-5"></div> 
          <div class="flex flex-col mx-5 font-jaldi text-2xl">
            <div class="text-gray-500 flex justify-between">
              <p>Casual</p>
              <p>23</p>
            </div>
            <div class="text-gray-500 flex justify-between">
              <p>Suit</p>
              <p>76</p>
            </div>
            <div class="text-gray-500 flex justify-between">
              <p>Swim</p>
              <p>51</p>
            </div>
          </div>
          <div class="text-2xl">
            <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
              <img src="@/assets/images/skirt.png" alt="women short skirt" class="object-fill w-[60px] h-[70px]">
              <p class="text-start">Skirt</p>
              <p>+</p>
            </div>

            <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
              <img src="@/assets/images/jumpsuit.png" alt="men shirt" class="object-fill w-[60px] h-[70px]">
              <p class="text-start">Jumpsuit</p>
              <p>+</p>
            </div>

            <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
              <img src="@/assets/images/pants.png" alt="black t-shirt" class="object-fill w-[60px] h-[70px]">
              <p class="text-start">Pants</p>
              <p>+</p>
            </div>

            <div class="ml-2 mb-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
              <img src="@/assets/images/jeans.png" alt="dress catogory" class="object-fill w-[60px] h-[70px]">
              <p class="text-start">Jeans</p>
              <p>+</p>
            </div>
          </div>
        </div>

        <!-- items -->
        <div class="grid">
          <div class="flex justify-between font-jaldi mx-7">
            <div>
              <h2 class="font-bold text-2xl">New Arrivals</h2>
              <div class="flex-grow h-px bg-gray-400 w-[250px]"></div> 
            </div>
            <div>
              <h2 class="font-bold text-2xl">Trending</h2>
              <div class="flex-grow h-px bg-gray-400 w-[250px]"></div> 
            </div>
            <div>
              <h2 class="font-bold text-2xl">Top Rated</h2>
              <div class="flex-grow h-px bg-gray-400 w-[250px]"></div> 
            </div>
          </div>
          
          <div class="grid grid-rows-3 mx-7 overflow-x-scroll">
            <div class="flex">
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/black-tshirt.png" alt="black t-shirt" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="mx-5">
                  <h3 class="font-semibold text-lg ">Black T-Shirt</h3>
                  <p class="text-gray-500">Outdoor</p>
                  <div class="flex justify-between w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$7.99</p>
                    <p class="text-gray-500 text-lg line-through">$12.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/women-dress.png" alt="black t-shirt" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">Women's Dress</h3>
                  <p class="text-gray-500">Outdoor</p>
                  <div class="flex justify-between  w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$25.99</p>
                    <p class="text-gray-500 text-lg line-through">$37.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/white-skirt.png" alt="women short skirt" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">White Short Skirt</h3>
                  <p class="text-gray-500">Outdoor</p>
                  <div class="flex justify-between  w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$12.99</p>
                    <p class="text-gray-500 text-lg line-through">$15.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/denim-jackit.png" alt="women short skirt" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">Denim Jean Jacket</h3>
                  <p class="text-gray-500">Outdoor</p>
                  <div class="flex justify-between w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$31.00</p>
                    <p class="text-gray-500 text-lg line-through">$45.00</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- row2 -->
            <div class="flex">
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/men-jean.png" alt="men jeans" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">Jeans</h3>
                  <p class="text-gray-500">Outdoor</p>
                  <div class="flex justify-between w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$27.99</p>
                    <p class="text-gray-500 text-lg line-through">$30.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/shirt.png" alt="men shirt" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">Shirt</h3>
                  <p class="text-gray-500">Office</p>
                  <div class="flex justify-between w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$20.</p>
                    <p class="text-gray-500 text-lg line-through">$27.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/suit.jpg" alt="men suit" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">Suit</h3>
                  <p class="text-gray-500">Office</p>
                  <div class="flex justify-between w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$250.99</p>
                    <p class="text-gray-500 text-lg line-through">$295.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/men-hoodi.png" alt="men suit" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">Hoodi</h3>
                  <p class="text-gray-500">Outdoor</p>
                  <div class="flex justify-between w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$250.99</p>
                    <p class="text-gray-500 text-lg line-through">$295.00</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- row3 -->
            <div class="flex">
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/pants.png" alt="men suit" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">Pants</h3>
                  <p class="text-gray-500">Outdoor</p>
                  <div class="flex justify-between w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$57.99</p>
                    <p class="text-gray-500 text-lg line-through">$60.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/cardigan.png" alt="men suit" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">Cadigan</h3>
                  <p class="text-gray-500">Outdoor</p>
                  <div class="flex justify-between w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$25.99</p>
                    <p class="text-gray-500 text-lg line-through">$37.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/jasmindress.jpg" alt="men suit" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">Jasmin dress</h3>
                  <p class="text-gray-500">Office</p>
                  <div class="flex justify-between w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$25.99</p>
                    <p class="text-gray-500 text-lg line-through">$37.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/knitmididress.jpg" alt="men suit" class="object-contain w-[100px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-semibold text-lg">Knit Midi Dress</h3>
                  <p class="text-gray-500">Outdoor</p>
                  <div class="flex justify-between w-[150px]">
                    <p class="text-green-700 text-lg font-bold">$25.99</p>
                    <p class="text-gray-500 text-lg line-through">$30.00</p>
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
          { text: 'Home', clicked: true },
          { text: "Collection", clicked: false },
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

