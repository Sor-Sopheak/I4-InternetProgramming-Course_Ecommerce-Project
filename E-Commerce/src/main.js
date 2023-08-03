import { createApp } from 'vue'
import { createPinia } from 'pinia'
import App from './App.vue'
import router from './router'
import './assets/css/main.css'

const app = createApp(App);
app.use(createPinia())

    app.config.warnHandler = () => {};
    app.use(router)
    app.mount('#app')


router.beforeEach((to, from, next) => {
    const token = localStorage.getItem("token");
    if(token) {
        if(to.matched.some(record => record.meta.requiresAuth)) {
            next({ name: 'userNavbar '});
        }else {
            next();
        }
    }else{
        next();
    }
})
