<template>
    <div class="flex justify-center items-center h-screen">
        <div class="w-3/5 h-[435px] flex flex-row justify-center items-center shadow-lg mt-20">
            <div class=" w-[375px] h-[600px] flex-1">
                <img src="@/assets/images/login1.jpg" alt="" class="object-contain">
            </div>
            <form @submit.prevent="login" class="flex flex-1 flex-col justify-center items-center text-center">
                <h1 class="font-jolly text-black text-7xl mt-[-10rem] mb-4">
                    <span class="after:content-['M'] after:text-orange-600">Style</span>ingle
                </h1>
                <h1 class="text-3xl text-center mb-4">Login</h1>

                <div class="w-7/12">
                    <div class="flex justify-center items-center text-center border-2 border-orange-600 active:border-black my-4 rounded-full h-[30px] ">
                        <img src="https://cdn.icon-icons.com/icons2/2506/PNG/512/user_icon_150670.png" alt="" class="w-[15px] h-[15px] ml-2">
                        <input type="email" name="email" id="email" v-model="email" placeholder="Email" class="xl:bg-transparent text-center input-field">
                    </div>
                    <div class="flex justify-center items-center text-center border-2 border-orange-600 active:border-black mt-4 rounded-full h-[30px]">
                        <img src="@/assets/images/key.png" alt="" class="w-[13px] h-[15px] ml-2">
                        <div class="control is-expanded">
                            <input type="password" v-model="password" placeholder="Password" class="xl:bg-transparent text-center input-field">
                        </div>
                    </div>
                    <router-link to="/resetpassword" class="text-orange-600 hover:underline text-sm mt-1 flex text-left">Forgot Password?</router-link>
                    <div class="flex text-white items-center justify-center text-center shadow-lg mt-5 bg-orange-600 text-lg h-[30px] rounded-full cursor-pointer hover:bg-black">
                        <input type="submit" value="LOGIN">
                    </div>
                    <div class="flex items-center justify-center text-center text-sm mt-2">
                        <p>Not Register?  &nbsp</p>
                        <router-link to="/signup" class="text-orange-600 hover:underline">Create an account</router-link>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import { useAuthStore } from '../store/authStore';
export default {
    data() {
        return {
            email: '',
            password: '',
            authStore: useAuthStore()
        };
    },

    created() {
        const token = localStorage.getItem('token');
        if(token) {
            this.$router.push({ name: "home" });
        }
    },

    methods: {
        async login() {
            const data = {
                email: this.email,
                password: this.password,
            };

            await fetch('https://sopheak.tysophearum.tech/api/login', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(res => {
                console.log('Response:', res);
                if(res.status<200 || res.status>=300) {
                    throw new Error('Login failed');
                } 
                return res.json();
            })
            .then(data => {
                if (!data.ok) {
                    console.log('Data:', data);
                    localStorage.setItem("token", data.token);
                    localStorage.setItem("user", JSON.stringify(data.user));
                    this.authStore.setIsLogin(true)
                    this.$router.push({ name: "home" });
                } else {
                    throw new Error('Login failed');
                }
            })
            . catch (async (error) => {
                if (error.response) {
                    const responseData = await error.response.json();
                    console.log("Response data:", responseData);
                    console.log("Status code:", error.response.status);
                    if (responseData.errors) {
                        console.log("Validation errors:", responseData.errors);
                    }
                }
                console.log('Login failed');
            });
        },
        
    }
}

</script>

<style>
    .input-field {
        border: none;
        outline: none; 
    }

    .input-field:focus {
        box-shadow: none; 
    }
    
</style>