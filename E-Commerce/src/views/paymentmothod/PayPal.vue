<template>
    <div class="w-full flex justify-center items-center">
        <div class="w-1/3 border-2 px-12 flex flex-col justify-center items-center mt-20 shadow-2xl shadow-gray-300">
          <router-link :to="{ name: 'checkout' }" class="flex self-end pt-4 text-red-600 cursor-pointer">
            <p>X</p>    
          </router-link>
          <h1 class="mt-10 text-2xl">Pay with PayPal</h1>
          <div class="flex justify-between py-10">
              <router-link :to="{ name: 'visa' }">
                  <img src="@/assets/images/Visalogo.png" alt="" class="w-[70px] h-[30px]">
              </router-link>
              <div class="w-px h-5px bg-gray-400 mx-5"></div>
              <router-link :to="{ name: 'master' }">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/200px-MasterCard_Logo.svg.png" alt="instagram icon" class="w-[50px] h-[30px]">
              </router-link>
              <div class="w-px h-5px bg-gray-400 mx-5"></div>
              <router-link :to="{ name: 'americanexpress' }">
                  <img src="https://logodix.com/logo/61114.jpg" alt="line icon" class="w-[60px] h-[30px]">
              </router-link>
          </div>
          <form @submit.prevent="payByPayPal">
            <div class="w-full items-center">
                <input v-model="email" required type="text" placeholder="Email or mobile number" class="w-full rounded-sm h-[35px] mb-4">     
                <input v-model="password" required type="password" class="w-full h-[35px] rounded-sm mb-4" placeholder="Password">
                <input v-model="payment_method_id" required class="hidden" placeholder="Password">
              </div>
            <button type="submit" class="w-full h-[40px] bg-blue-500 hover:bg-blue-600 rounded-md text-white mt-2 mb-8">Pay now</button>
          </form>
            
       </div>
    </div>
</template>

  
  <script>
  export default {
    data() {
      return {
        payment_method_id: 4,
        email: '',
        password: '',
      };
    },
    methods: {
      async payByPayPal() {
        const data = {
        payment_method_id: this.payment_method_id,
        email: this.email,
        password: this.password
      };

        localStorage.setItem("Payment Method", JSON.stringify(data));
        this.payment_method_id = "",
        this.email = "",
        this.password = ""
        this.$router.push({ name: 'checkout' })
      }
      
    },

  };
  </script>
  

<style>
      .form-select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%239ca3af' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 0.5rem center;
        background-size: 1.5em 1.5em;
        -webkit-tap-highlight-color: transparent;
      }

      .submit-button:disabled {
        cursor: not-allowed;
        background-color: #D1D5DB;
        color: #111827;
      }

      .submit-button:disabled:hover {
        background-color: #9CA3AF;
      }

      .credit-card {
        max-width: 420px;
        margin-top: 3rem;
      }

      @media only screen and (max-width: 420px)  {
        .credit-card .front {
          font-size: 100%;
          padding: 0 2rem;
          bottom: 2rem !important;
        }

        .credit-card .front .number {
          margin-bottom: 0.5rem !important;
        }
      }
    </style>