<template>
  <div class="w-full md:w-2/4 md:max-w-full mx-auto mt-6">
    <form
      @submit="addressShipping"
      class="p-6 border border-gray-300 sm:rounded-md"
    >
      <div class="bg-black text-white p-4 mb-4">
        Shipping & billing information
      </div>
      <hr />
      <div>
        <label class="block my-4">
          <span class="text-gray-700">Select shipping country</span>
          <select
            v-model="country"
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
          >
            <option value="">Select Country</option>
            <option value="Cambodia">Cambodia</option>
          </select>
        </label>
      </div>
      <hr class="mt-6" />
      <div class="mt-4">
        <div class="flex justify-between">
          <input
            v-model="first_name"
            type="text"
            required
            class="block w-2/4 mr-2 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="First name *"
          />
          <input
            v-model="last_name"
            type="text"
            required
            class="block w-2/4 ml-2 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Last name *"
          />
        </div>
        <div class="flex justify-between my-4">
          <input
            v-model="email"
            type="email"
            required
            class="block w-2/4 mr-2 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Email *"
          />
          <input
            v-model="phone_number"
            type="text"
            required
            class="block w-2/4 ml-2 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Phone number *"
          />
        </div>
        <input
          v-model="address"
          type="text"
          required
          class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
          placeholder="Address / Street*"
        />
      </div>

      <div class="bg-orange-100 p-3 my-4">
        Additional delivery info (optional)
      </div>

      <div class="flex justify-between my-4">
        <input
          v-model="city"
          type="text"
          class="block w-2/4 mr-2 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
          placeholder="City *"
        />
        <input
          v-model="postal_code"
          type="text"
          class="block w-2/4 ml-2 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
          placeholder="Zip code/ Postal code *"
        />
      </div>
      <div class="flex justify-between my-4">
        <input
          type="text"
          class="block w-2/4 mr-2 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
          placeholder="Country *"
        />
        <input
          v-model="state"
          type="text"
          class="block w-2/4 ml-2 mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
          placeholder="State *"
        />
      </div>
      <div class="flex my-4">
        <input
          v-model="company"
          type="text"
          class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
          placeholder="Company"
        />
      </div>

      <button
        type="submit"
        class="h-10 px-5 bg-orange-600 rounded-lg transition-colors duration-150 text-white focus:bg-orange-600 focus:shadow-outline hover:bg-black hover:text-white"
      >
        Next
      </button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      first_name: "",
      last_name: "",
      email: "",
      phone_number: "",
      address: "",
      city: "",
      postal_code: "",
      country: "",
      state: "",
      company: "",
    };
  },

  methods: {
    async addressShipping(e) {
      e.preventDefault();

      const data = {
        first_name: this.first_name,
        last_name: this.last_name,
        email: this.email,
        phone_number: this.phone_number,
        address: this.address,
        city: this.city,
        postal_code: this.postal_code,
        country: this.country,
        state: this.state,
        company: this.company,
      };

    localStorage.setItem("Address", JSON.stringify(data));
        this.first_name = "",
        this.last_name = "",
        this.email = "",
        this.phone_number = "",
        this.address = "",
        this.city = "",
        this.postal_code = "",
        this.country = "",
        this.state = "",
        this.company = "",
        this.$router.push('/checkout')
    },
  },
};
</script>
