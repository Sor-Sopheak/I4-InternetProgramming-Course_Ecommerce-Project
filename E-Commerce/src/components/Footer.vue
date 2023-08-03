<template>
  <div class="w-fit h-px bg-gray-300 mt-28"></div>
  
    <footer class="grid grid-rows-[0.4fr,0.1fr] text-sm">
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
              <input type="email" class="bg-orange-600 font-medium w-[78%] h-[27px] placeholder-white p-1 rounded border-none outline-none text-white" placeholder="Enter your email here">
              <router-link :to="{ name: 'login' }">
                <button class="bg-green-700 px-2 rounded h-[27px] shadow-lg text-white hover:bg-black">SUBCRIBE</button>
              </router-link>
              
            </div>
            <span class="after:content-['SopheakSor'] after:text-orange-600">StareM4.Power by </span>
          </div>
          <div>
            <p>Supported payment systems</p>
            <div class="flex mt-2">
              <router-link :to="{ name: 'visa' }">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Former_Visa_%28company%29_logo.svg/2560px-Former_Visa_%28company%29_logo.svg.png" alt="facebook icon" class="w-[40px] h-[30px] mr-5">
              </router-link>
              <router-link :to="{ name: 'master' }">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/200px-MasterCard_Logo.svg.png" alt="instagram icon" class="w-[50px] h-[30px] mr-5">
              </router-link>
              <router-link :to="{ name: 'americanexpress' }">
                <img src="https://logodix.com/logo/61114.jpg" alt="line icon" class="w-[60px] h-[30px] mr-5">
              </router-link>
              <router-link :to="{ name: 'paypal' }">
                <img src="https://sm.pcmag.com/pcmag_uk/review/p/paypal/paypal_kzfp.png" class="w-[50px] h-[30px] mr-5">
              </router-link>
            </div>
          </div>
        </div>
      </div>
      
      <div class="bg-orange-600 h-[50px] text-white text-center p-2 text-sm">
        <p>@2023 All Rights Reserved Terms of Use</p>
        <p>and Privacy Plicy.</p>
      </div>
    </footer>
</template>

<script>
export default {
  name: 'Footer'
}
</script>