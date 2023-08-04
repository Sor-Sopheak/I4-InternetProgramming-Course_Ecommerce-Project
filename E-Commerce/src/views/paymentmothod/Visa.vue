<template>
    <div class="w-full flex justify-center items-center">
        <div @submit.prevent="payByVisa" class="w-1/3 border-2 px-12 flex flex-col justify-center items-center mt-6 shadow-2xl shadow-gray-300">
          <router-link :to="{ name: 'checkout' }" class="flex self-end pt-4 text-red-600 cursor-pointer">
            <p>X</p>    
          </router-link>
          <div>
            <h1 class="mt-10 text-2xl">Pay with VisaCard</h1>
          </div>
          
            <div class="flex justify-between py-10">
                <router-link :to="{ name: 'master' }">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/200px-MasterCard_Logo.svg.png" alt="instagram icon" class="w-[50px] h-[30px]">
                </router-link>
                <div class="w-px h-5px bg-gray-400 mx-5"></div>
                <router-link :to="{ name: 'americanexpress' }">
                    <img src="https://logodix.com/logo/61114.jpg" alt="line icon" class="w-[60px] h-[30px]">
                </router-link>
                <div class="w-px h-5px bg-gray-400 mx-5"></div>
                <router-link :to="{ name: 'paypal' }">
                    <img src="https://sm.pcmag.com/pcmag_uk/review/p/paypal/paypal_kzfp.png" class="w-[50px] h-[30px] mr-5">
                </router-link>
            </div>
        <form @submit.prevent="payByVisa">
          <div class="w-full items-center">
              <div>
                  <label>Card number</label>
                  <input v-model="card_number" required type="text" maxlength="16" placeholder="0000 0000 0000 0000" class="w-full rounded-sm h-[35px] mb-4">
              </div>
              <div>
                  <p>Name on card</p>
                  <input v-model="name_on_card" required type="text" class="w-full h-[35px] rounded-sm mb-4" placeholder="Sor Sopheak">
              </div>
              <div class="flex justify-between">
                  <div class="">
                      <p>Expiry date</p>
                      <input v-model="expiry_date" required type="text" placeholder="01/08" class="w-[140px] h-[35px] mb-4 rounded-sm">
                  </div>
                  <div>
                      <p>CVV</p>
                      <input v-model="cvv" required type="text" maxlength="3" placeholder="123" class="w-[140px] h-[35px] rounded-sm mb-4">
                  </div>
                  <input v-model="payment_method_id" required class="hidden">
              </div>
          </div>
          <button type="submit" class="w-full h-[40px] bg-blue-500 rounded-md text-white mt-2 mb-8">Pay now</button>
        </form>
      </div>
    </div>
</template>

  
  <script>
  export default {
    data() {
      return {
        payment_method_id: 1,
        name_on_card: '',
        card_number: '',
        expiry_date: '',
        cvv: '',
      };
    },

    computed: {
      formattedCardNumber() {
        if (this.card_number.length > 18) {
          return this.card_number;
        }
        return this.card_number.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
      },
      isValid() {
        if (this.name_on_card.length < 5) {
          return false;
        }
        if (this.card_number === '') {
          return false;
        }
        if (this.expiry_date === '') {
          return false;
        }
        if (this.cvv.length !== 3) {
          return false;
        }
        return true;
      },
    },
    methods: {
      onSubmit() {
        alert(`You did it ${this.name_on_card}.`);
      },

      async payByVisa() {

        const data = {
          payment_method_id: this.payment_method_id,
          name_on_card: this.name_on_card,
          card_number: this.card_number,
          expiry_date: this.expiry_date,
          cvv: this.cvv,

        };

        localStorage.setItem("Payment Method", JSON.stringify(data));
          this.payment_method_id = "",
          this.name_on_card = "",
          this.card_number = "",
          this.expiry_date = "",
          this.cvv = "",
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