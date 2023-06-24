import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue';

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
    {
      path: '/checkout',
      name: 'checkout',
  
      component: () => import('../views/Checkout.vue')
    }
  ]
})

export default router
