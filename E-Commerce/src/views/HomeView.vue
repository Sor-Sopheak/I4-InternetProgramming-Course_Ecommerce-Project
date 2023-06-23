<template>
  <div class="w-screen">
    <nav class="w-[100%] grid grid-cols-[0.5fr,1.3fr,0.5fr] font-bold border-b-2 border-gray-300 h-[60px] items-center sticky top-0 bg-white shadow">
      <div class="logo flex flex-column">
        <h1 class="font-jolly font-black text-3xl ml-12">
          <span class="after:content-['M'] after:text-orange-600">Style</span>ingle
        </h1>
      </div>
      <div class="font-itim text-xl">
        <a href="#" v-for="(link, index) in links" :key="index" :class="{'text-orange-600': link.clicked, 'text-black': !link.clicked, 'underline': !link.clicked }" @click.prevent="changeColor(index)" class="underline p-4">
          <router-link v-if="link.text === 'Home'" :to="{ name: 'home' }" class="underline p-4" exact>
            {{ link.text }}
          </router-link>
          <router-link v-else-if="link.text === 'Category'" :to="{ name: 'category' }" class="underline p-4" exact>
            {{ link.text }}
          </router-link>
          <span v-else>
            {{ link.text }}
          </span>
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
        <div class="left_header w-[50%] ml-[100px] m-[25px]">
          <h2 class="font-dancing text-[#ea2be2] text-7xl font-bold">Best Collection</h2><br>
          <h1 class="text-5xl font-itim font-bold leading-relaxed w-[80%]">WOMEN'S LATEST FASTION SALE</h1><br>
          <p class="text-gray-400 text-xl font-medium">Ready to start your new outfit today</p>
          <button class="h-[40px] bg-orange-600 text-2xl px-5 text-white font-medium mt-7 rounded">SHOP NOW</button>
        </div>
        <div class="right_header items-end">        
          <img src="@/assets/images/women-logo.png" alt="women" class=" mr-32 ">
        </div>
      </div>
      <div class="mt-48 m-auto w-[60%]">
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
            <img src="@/assets/images/dressc1.png" alt="dress catogory" class="object-fill w-[80px] h-[70px]">
            <p class="text-start">Clothes</p>
            <p>+</p>
          </div>

          <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
            <img src="@/assets/images/footware.png" alt="dress catogory" class="object-fill w-[80px] h-[70px]">
            <p class="text-start">Footware</p>
            <p>+</p>
          </div>

          <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
            <img src="@/assets/images/jewelry.png" alt="dress catogory" class="object-fill w-[80px] h-[70px]">
            <p class="text-start">Jewelry</p>
            <p>+</p>
          </div>

          <div class="flex-grow h-px bg-gray-400 m-5"></div> 
          <div class="flex flex-col mx-5 font-jaldi text-2xl">
            <div class="text-gray-500 flex justify-between">
              <p>Earrings</p>
              <p>23</p>
            </div>
            <div class="text-gray-500 flex justify-between">
              <p>Couple Rings</p>
              <p>76</p>
            </div>
            <div class="text-gray-500 flex justify-between">
              <p>Necklace</p>
              <p>51</p>
            </div>
          </div>
          <div class="text-2xl">
            <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
              <img src="@/assets/images/perfume.png" alt="dress catogory" class="object-fill w-[80px] h-[70px]">
              <p class="text-start">Perfume</p>
              <p>+</p>
            </div>

            <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
              <img src="@/assets/images/beutiful.png" alt="dress catogory" class="object-fill w-[80px] h-[70px]">
              <p class="text-start">Cosmetics</p>
              <p>+</p>
            </div>

            <div class="ml-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
              <img src="@/assets/images/glasses.png" alt="dress catogory" class="object-fill w-[80px] h-[70px]">
              <p class="text-start">Glasses</p>
              <p>+</p>
            </div>

            <div class="ml-2 mb-2 text-2xl text-gray-500 grid grid-cols-[1fr,1fr,0.5fr] h-[70px] flex-row justify-center items-center text-center">
              <img src="@/assets/images/bag.png" alt="dress catogory" class="object-fill w-[80px] h-[70px]">
              <p class="text-start">Bags</p>
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

          <!-- <div class="grid grid-rows-3 mx-7 overflow-y-scroll scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100"></div> -->
          <div class="grid grid-rows-3 mx-7 overflow-y-scroll">
            <!--grid row 1-->
            <div class="flex">
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/black-tshirt.png" alt="black t-shirt" class="w-[100px] h-[100px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Black T-Shirt</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
                    <p class="text-green-700 text-lg font-bold">$7.99</p>
                    <p class="text-gray-500 text-lg line-through">$12.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/women-dress.png" alt="black t-shirt" class="w-[80px] h-[130px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Women's Dress</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
                    <p class="text-green-700 text-lg font-bold">$25.99</p>
                    <p class="text-gray-500 text-lg line-through">$37.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/white-skirt.png" alt="women short skirt" class="w-[90px] h-[100px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">White Short Skirt</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
                    <p class="text-green-700 text-lg font-bold">$12.99</p>
                    <p class="text-gray-500 text-lg line-through">$15.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/denim-jackit.png" alt="women short skirt" class="w-[90px] h-[100px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Men's Denim Jean Jacket</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
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
                  <img src="@/assets/images/men-jean.png" alt="men jeans" class="w-[80px] h-[120px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Men's Jeans</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
                    <p class="text-green-700 text-lg font-bold">$27.99</p>
                    <p class="text-gray-500 text-lg line-through">$30.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/men-shirt.png" alt="men shirt" class="w-[80px] h-[100px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Men's Jeans</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
                    <p class="text-green-700 text-lg font-bold">$20.</p>
                    <p class="text-gray-500 text-lg line-through">$27.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/men-suit.png" alt="men suit" class="w-[80px] h-[120px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Men's Jeans</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
                    <p class="text-green-700 text-lg font-bold">$250.99</p>
                    <p class="text-gray-500 text-lg line-through">$295.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/men-hoodi.png" alt="men suit" class="w-[90px] h-[110px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Men's Jeans</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
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
                  <img src="@/assets/images/sport-clown.png" alt="men suit" class="w-[110px] h-[90px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Sports Clown</h3>
                  <p class="text-gray-500">Sport</p>
                  <div class="flex justify-between">
                    <p class="text-green-700 text-lg font-bold">$57.99</p>
                    <p class="text-gray-500 text-lg line-through">$60.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/men-belt.png" alt="men suit" class="w-[120px] h-[80px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Leader Belt, Brown</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
                    <p class="text-green-700 text-lg font-bold">$25.99</p>
                    <p class="text-gray-500 text-lg line-through">$37.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/silver.png" alt="men suit" class="w-[110px] h-[90px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Leader Belt, Brown</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
                    <p class="text-green-700 text-lg font-bold">$25.99</p>
                    <p class="text-gray-500 text-lg line-through">$37.00</p>
                  </div>
                </div>
              </div>
              <div class="flex w-[400px] h-[165px] border-solid border-2 rounded-lg items-center mr-7">
                <div class="m-5">
                  <img src="@/assets/images/women-boots.png" alt="men suit" class="w-[110px] h-[90px]">
                </div>
                <div class="m-5">
                  <h3 class="font-bold">Women's Boots</h3>
                  <p class="text-gray-500">Clothes</p>
                  <div class="flex justify-between">
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
        { text: 'Home', clicked: true },
        { text: "Collection", clicked: false },
        { text: "Category", clicked: false },
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

  /* ::-webkit-scrollbar {
  width: 6px;
  }

  ::-webkit-scrollbar-thumb {
    background-color: #718096;
  }

  ::-webkit-scrollbar-track {
    background-color: #CBD5E0;
  } */

</style>

