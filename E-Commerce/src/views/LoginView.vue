<!-- <template>
    <div>
        <form action="" @submit.prevent="login">
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                email: '',
                password: '',
            };
        },

        created() {
            const token = localStorage.getItem('token');
            if(token) {
                this.$router.push({ name: 'home' });
            }
        },

        methods: {
            login() {
                const data = {
                    email: this.email,
                    password: this.password,
                };

                fetch('http://localhost:8000/api/login', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                })
                .then(res=> {
                    if(res.status<200 || res.status>=300) {
                        throw new Error('Login failed');
                    }
                    return res.json();
                })
                .then(data => {
                    if(data.success) {
                        localStorage.setItem("token", data.token);
                        this.$router.push({ name: "home"});
                    } else{
                        throw new Error('Login failed');
                    }
                })
                .catch(error => {
                    console.error(error);
                })
            }
        }
    }
</script> -->

<template></template>