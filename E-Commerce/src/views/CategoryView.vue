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
            <router-link v-if="link.text === 'Category'" :to="{ name: 'category' }" class="underline p-4" exact>
              {{ link.text }}
            </router-link>
            <router-link v-else-if="link.text === 'Home'" :to="{ name: 'home' }" class="underline p-4" exact>
              {{ link.text }}
            </router-link>
            <router-link v-else-if="link.text === 'Collection'" :to="{ name: 'collection' }" class="underline p-4" exact>
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
            <div>
              <div class="grid grid-cols-[0.2fr,1fr]">
                <div class="border-2 border-gray-300 text-start">
                  <p class="font-semibold text-xl mt-5 ml-4">Category</p>
                  <div class="flex justify-center mb-5">
                    <div class="flex flex-col text-start">
                      <a v-for="(item, index) in items" :key="index" :class="{ 'text-orange-600': selectedItem === index }" @click="selectItem(index)">
                        {{ item }}
                      </a>
                    </div>
                  </div>

                  <div class="w-[90%] h-px bg-gray-300 m-2"></div>

                  <p class="font-semibold text-xl mt-5 ml-4">Filter by:</p>
                  <p class="text-lg mt-4 ml-4">Type</p>
                  <div class="flex justify-center mb-5">
                    <div class="text-start">
                      <p>Office</p>
                      <p>Party</p>
                      <p>Outdoor</p>
                    </div>
                  </div>

                  <p class="text-lg mt-4 ml-4">Looks</p>
                  <div class="flex justify-center mb-5">
                    <div class="text-start">
                      <p>Swag</p>
                      <p>Casual</p>
                      <p>Sweatshirt</p>
                      <p>Office</p>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="">
                    <div class="h-[40px] w-[35%] border-solid border-orange-600 border-2 rounded-full flex items-center justify-between m-5"> 
                      <div class="flex justify-center items-center px-2">
                        <img src="@/assets/images/search.png" alt="search icon" class="w-[25px] h-[25px]">
                        <p class="text-left text-gray-400 py-8 px-4 text-xl">Search more product</p>
                      </div>
                      <button class=" bg-orange-600 w-[80px] h-[30px] rounded-full text-white m-2">Search</button>
                    </div>
                  </div> 

                  <div class="w-[100%] h-px bg-gray-300 my-8"></div>

                  <div class="flex p-5">
                    <a href="">Home</a>
                    <span class="mx-2">></span>
                    <a href="" class="text-[#6e6d6d]">Category</a>
                    <span class="mx-2">></span>
                    <a href="" class="text-[#6e6d6d]">Office suit</a>
                  </div>

                  <div class="p-5">
                    <p class="text-4xl font-semibold">Office suit</p>
                  </div>

                  <div class="grid grid-cols-3 px-24">
                    <div class="w-[300px] h-[370px] relative parent-container border-2 rounded-2xl m-3">
                      <img src="@/assets/images/suit11.jpg" alt="" class="object-cover w-[300px] h-[250px] rounded-t-2xl">
                      <div class="absolute flex justify-between w-[260px] top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <p class="bg-orange-100 h-[30px] w-[50px] py-1 text-center text-sm text-orange-600 rounded-lg">NEW</p>
                        <div>
                          <img src="https://www.transparentpng.com/thumb/instagram-heart/OtpLVC-heart-shaped-instagram-transparent-image.png" alt="" class="w-[30px]">
                        </div>
                      </div>
                      <div class="p-4">
                        <p class="font-bold">aslfjsafdsf</p>
                        <div class="flex justify-between items-center">
                          <div class="mt-4">
                            <p class="text-sm text-[#6d6d6d]">Price:</p>
                            <p>$200</p>
                          </div>
                          <button class="bg-orange-600 p-1.5 h-[30px] w-[35px] rounded-lg">
                            <img src="https://icon-library.com/images/white-shopping-cart-icon/white-shopping-cart-icon-9.jpg" alt="" class="w-[20px]">
                          </button>
                        </div>
                      </div>
                    </div>

                    <div class="w-[300px] h-[370px] relative parent-container border-2 rounded-2xl m-3">
                      <img src="@/assets/images/suit22.jpg" alt="" class="object-cover w-[300px] h-[250px] rounded-t-2xl">
                      <div class="absolute flex justify-between w-[260px] top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <p class="bg-orange-100 h-[30px] w-[50px] py-1 text-center text-sm text-orange-600 rounded-lg">NEW</p>
                        <div>
                          <img src="https://www.transparentpng.com/thumb/instagram-heart/OtpLVC-heart-shaped-instagram-transparent-image.png" alt="" class="w-[30px]">
                        </div>
                      </div>
                      <div class="p-4">
                        <p class="font-bold">aslfjsafdsf</p>
                        <div class="flex justify-between items-center">
                          <div class="mt-4">
                            <p class="text-sm text-[#6d6d6d]">Price:</p>
                            <p>$200</p>
                          </div>
                          <button class="bg-orange-600 p-1.5 h-[30px] w-[35px] rounded-lg">
                            <img src="https://icon-library.com/images/white-shopping-cart-icon/white-shopping-cart-icon-9.jpg" alt="" class="w-[20px]">
                          </button>
                        </div>
                      </div>
                    </div>

                    <div class="w-[300px] h-[370px] relative parent-container border-2 rounded-2xl m-3">
                      <img src="@/assets/images/suit33.jpg" alt="" class="object-cover w-[300px] h-[250px] rounded-t-2xl">
                      <div class="absolute flex justify-between w-[260px] top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <p class=" h-[30px] w-[50px] py-1 text-center text-sm text-orange-600 rounded-lg"></p>
                        <div>
                          <img src="https://www.transparentpng.com/thumb/instagram-heart/OtpLVC-heart-shaped-instagram-transparent-image.png" alt="" class="w-[30px]">
                        </div>
                      </div>
                      <div class="p-4">
                        <p class="font-bold">aslfjsafdsf</p>
                        <div class="flex justify-between items-center">
                          <div class="mt-4">
                            <p class="text-sm text-[#6d6d6d]">Price:</p>
                            <p>$200</p>
                          </div>
                          <button class="bg-orange-600 p-1.5 h-[30px] w-[35px] rounded-lg">
                            <img src="https://icon-library.com/images/white-shopping-cart-icon/white-shopping-cart-icon-9.jpg" alt="" class="w-[20px]">
                          </button>
                        </div>
                      </div>
                    </div>

                    <div class="w-[300px] h-[370px] relative parent-container border-2 rounded-2xl m-3">
                      <img src="@/assets/images/suit44.jpg" alt="" class="object-cover w-[300px] h-[250px] rounded-t-2xl">
                      <div class="absolute flex justify-between w-[260px] top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <p class="bg-orange-100 h-[30px] w-[50px] py-1 text-center text-sm text-orange-600 rounded-lg">NEW</p>
                        <div>
                          <img src="https://www.transparentpng.com/thumb/instagram-heart/OtpLVC-heart-shaped-instagram-transparent-image.png" alt="" class="w-[30px]">
                        </div>
                      </div>
                      <div class="p-4">
                        <p class="font-bold">aslfjsafdsf</p>
                        <div class="flex justify-between items-center">
                          <div class="mt-4">
                            <p class="text-sm text-[#6d6d6d]">Price:</p>
                            <p>$200</p>
                          </div>
                          <button class="bg-orange-600 p-1.5 h-[30px] w-[35px] rounded-lg">
                            <img src="https://icon-library.com/images/white-shopping-cart-icon/white-shopping-cart-icon-9.jpg" alt="" class="w-[20px]">
                          </button>
                        </div>
                      </div>
                    </div>

                    <div class="w-[300px] h-[370px] relative parent-container border-2 rounded-2xl m-3">
                      <img src="@/assets/images/suit55.jpg" alt="" class="object-cover w-[300px] h-[250px] rounded-t-2xl">
                      <div class="absolute flex justify-between w-[260px] top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <p class=" h-[30px] w-[50px] py-1 text-center text-sm text-orange-600 rounded-lg"></p>
                        <div>
                          <img src="https://www.transparentpng.com/thumb/instagram-heart/OtpLVC-heart-shaped-instagram-transparent-image.png" alt="" class="w-[30px]">
                        </div>
                      </div>
                      <div class="p-4">
                        <p class="font-bold">aslfjsafdsf</p>
                        <div class="flex justify-between items-center">
                          <div class="mt-4">
                            <p class="text-sm text-[#6d6d6d]">Price:</p>
                            <p>$200</p>
                          </div>
                          <button class="bg-orange-600 p-1.5 h-[30px] w-[35px] rounded-lg">
                            <img src="https://icon-library.com/images/white-shopping-cart-icon/white-shopping-cart-icon-9.jpg" alt="" class="w-[20px]">
                          </button>
                        </div>
                      </div>
                    </div>

                    <div class="w-[300px] h-[370px] relative parent-container border-2 rounded-2xl m-3">
                      <img src="@/assets/images/suit66.jpg" alt="" class="object-cover w-[300px] h-[250px] rounded-t-2xl">
                      <div class="absolute flex justify-between w-[260px] top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <p class="h-[30px] w-[50px] py-1 text-center text-sm text-orange-600 rounded-lg"></p>
                        <div>
                          <img src="https://www.transparentpng.com/thumb/instagram-heart/OtpLVC-heart-shaped-instagram-transparent-image.png" alt="" class="w-[30px]">
                        </div>
                      </div>
                      <div class="p-4">
                        <p class="font-bold">aslfjsafdsf</p>
                        <div class="flex justify-between items-center">
                          <div class="mt-4">
                            <p class="text-sm text-[#6d6d6d]">Price:</p>
                            <p>$200</p>
                          </div>
                          <button class="bg-orange-600 p-1.5 h-[30px] w-[35px] rounded-lg">
                            <img src="https://icon-library.com/images/white-shopping-cart-icon/white-shopping-cart-icon-9.jpg" alt="" class="w-[20px]">
                          </button>
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
  data() {
    return {
      links: [
        { text: 'Home', clicked: false },
        { text: "Collection", clicked: false },
        { text: "Category", clicked: true },
        { text: 'About us', clicked: false },
        { text: 'Contact us', clicked: false },
      ],
      items: ['T-Shirt', 'Shirt', 'Sweatshirt', 'Dress', 'Skirt', 'Jeans', 'Pants', 'Jumpsuit', 'Office Suit'],
      selectedItem: null
    };
  },
  methods: {
    changeColor(index) {
      this.links.forEach((link, i) => {
        link.clicked = i === index;
      });
    },

    selectItem(index) {
      this.selectedItem = index;
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