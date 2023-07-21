import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue';

const auth = (token) => {
  return new Promise((resolve, reject) => {
    if (token) {
      resolve();
    } else {
      reject();
    }
  });
};

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/collection',
      name: 'collection',
  
      component: () => import('../views/CollectionView.vue')
    },
    {
      path: '/category',
      name: 'category',
      component: () => import('../views/CategoryView.vue')
    },
    {
      path: '/aboutus',
      name: 'aboutus',
      component: () => import('../views/AboutUsView.vue')
    },
    {
      path: '/contactus',
      name: 'contactus',
      component: () => import('../views/ContactUsView.vue')
    },
    // {
      // path: '/api',
      // name: 'api',
      // children: [
      //   {
      //     path: 'login',
      //     name: 'login',
      //     component: () => import('../views/LoginView.vue')
      //   },
      //   {
      //     path: 'request-password',
      //     name: 'requestPassword',
      //     component: () => import('../views/RequestPassword.vue')
      //   },
      //   {
      //     path: 'reset-password',
      //     name: 'resetPassword',
      //     component: () => import('../views/ResetPassword.vue')
      //   },
      //   {
      //     path: '/:pathMatch(.*)',
      //     name: 'notfound',
      //     component: () => import('../views/NotFound.vue')
      //   }
      // ]
    // },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/LoginView.vue')
    },
    {
      path: '/signup',
      name: 'signup',
      component: () => import('../views/SignUpView.vue')
    }
  ]
})

export default router
