<template>
  <div class="flex justify-center items-center h-screen">
    <div
      class="w-3/5 h-[550px] flex flex-row justify-center items-center shadow-lg"
    >
      <div class="border-blue-700 flex-1">
        <img
          src="@/assets/images/signup1.jpg"
          alt=""
          class="w-[375px] h-full object-contain"
        />
      </div>
      <form
        @submit.prevent="signUp"
        class="flex flex-1 flex-col justify-center items-center text-center"
      >
        <h1 class="font-jolly text-black text-7xl mb-4">
          <span class="after:content-['M'] after:text-orange-600">Style</span
          >ingle
        </h1>
        <h1 class="text-3xl text-center mb-4">Sign Up</h1>

        <div class="w-8/12">
          <div class="txt_field">
            <input
              type="text"
              name="first_name"
              id="first_name"
              v-model="first_name"
              required
              class="input-field"
            />
            <span></span>
            <label for="first_name">First name</label>
          </div>
          <div class="txt_field">
            <input
              type="text"
              name="last_name"
              id="last_name"
              v-model="last_name"
              required
              class="input-field"
            />
            <span></span>
            <label for="last_name">Last name</label>
          </div>
          <div class="txt_field">
            <input
              type="text"
              name="username"
              id="username"
              v-model="username"
              required
              class="input-field"
            />
            <span></span>
            <label for="username">Username</label>
          </div>
          <div class="txt_field">
            <input
              type="email"
              name="email"
              id="email"
              v-model="email"
              required
              class="input-field"
            />
            <span></span>
            <label for="email">Email</label>
          </div>

          <div class="txt_field">
            <input
              type="password"
              v-model="password"
              required
              class="input-field"
            />
            <span></span>
            <label for="password">Password</label>
          </div>
          <div class="txt_field">
            <input
              type="password"
              v-model="password_confirmation"
              required
              class="input-field"
            />
            <span></span>
            <label for="password_confirmation">Confirm password</label>
          </div>
          <p class="text-blue-500">{{ pwDontMatch }}</p>
          <!-- add role as user -->
          <input type="hidden" v-model="role_id" required />
          <div
            class="flex text-white items-center justify-center text-center shadow-lg mt-5 bg-orange-600 text-lg h-[40px] rounded-full cursor-pointer hover:bg-black"
          >
            <input type="submit" value="SIGN UP" />
          </div>
          <div
            class="flex items-center justify-center text-center text-sm mt-2"
          >
            <p>Already Have Account? &nbsp</p>
            <router-link to="/login" class="text-orange-600 hover:underline"
              >Login</router-link
            >
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { useAuthStore } from "../store/authStore";

export default {
  data() {
    return {
      first_name: "",
      last_name: "",
      username: "",
      email: "",
      password: "",
      password_confirmation: "",
      role_id: 1,
      authStore: useAuthStore(),

      inValidEmail: null,
      pwDontMatch: null,
    };
  },



  methods: {
    async signUp() {
      const data = {
        first_name: this.first_name,
        last_name: this.last_name,
        username: this.username,
        email: this.email,
        password: this.password,
        password_confirmation: this.password_confirmation,
        role_id: this.role_id,
      };

      

      console.log("Request data:", data);

      await fetch("https://sopheak.tysophearum.tech/api/signup", {
        method: "POST",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
      }).then(async (res) => {
        console.log(res.status);
        if (res.status >= 300 || res.status < 200) {
          const data = await res.json();
          if (data.errors.email) {
            this.inValidEmail = data.errors.email[0];
          }
          if (data.errors.password) {
            this.pwDontMatch = data.errors.password[0];
          }
        } else {
          const data = await res.json();
          localStorage.setItem("token", data.token);
          localStorage.setItem("user", JSON.stringify(data.user));
          this.authStore.setIsLogin(true);
          this.$router.push({ name: "home" });
        }
      });
    },
  },
};
</script>

<style>
.txt_field {
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 15px 0;
}

.txt_field input {
  width: 100%;
  padding: 0 5px;
  height: 30px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
  box-shadow: none;
  border: 0;
}

.txt_field label {
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: 0.5s;
}

.txt_field span::before {
  content: "";
  position: absolute;
  top: 30px;
  left: 0;
  width: 0%;
  height: 1.5px;
  background: #e15012;
  transition: 0.5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label {
  top: -3px;
  color: #e15012;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before {
  width: 100%;
}

.pass {
  margin: -3px 0 15px 3px;
  color: #a6a6a6;
  cursor: pointer;
  font-size: 14px;
}

.pass:hover {
  text-decoration: underline;
  color: #e15012;
}

.input-field {
  border: none;
  outline: none;
}

.input-field:focus {
  box-shadow: none;
}
</style>
