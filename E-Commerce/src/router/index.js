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
      component: HomeView,
      meta: {
        requireAuth: true, // This route requires authentication
      }
    },
    {
      path: '/collection',
      name: 'collection',
  
      component: () => import('../views/CollectionView.vue')
    },
    {
      path: '/category',
      name: 'category',
      component: () => import('../views/CategoryView.vue'),
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
      path: '/login',
      name: 'login',
      component: () => import('../views/LoginView.vue'),
      beforeEnter:(to, from, next) => {
        const token = localStorage.getItem("token");
        if(token) {
          next({ name: 'home' });
        }else {
          next();
        }
      }
    },
    {
      path: '/signup',
      name: 'signup',
      component: () => import('../views/SignUpView.vue')
    },
    {
      path: '/:pathMatch(.*)',
      name: 'notfound',
      component: () => import('../views/NotFound.vue')
    },
    {
      path: '/productDetail/:id',
      name: 'detailproduct',
      component: () => import('../views/DetailProductView.vue')
    },
    {
      path: '/cart',
      name: 'cart',
      component: () => import('../views/CartView.vue')
    },
    {
      path: '/wishlist',
      name: 'wishlist',
      component: () => import('../views/WishlistView.vue')
    },
    {
      path: '/visa',
      name: 'visa',
      component: () => import('../views/paymentmothod/Visa.vue')
    },
    {
      path: '/mater-card',
      name: 'master',
      component: () => import('../views/paymentmothod/MasterCard.vue')
    },
    {
      path: '/american-express',
      name: 'americanexpress',
      component: () => import('../views/paymentmothod/AmericanExpress.vue')
    },
    {
      path: '/paypal',
      name: 'paypal',
      component: () => import('../views/paymentmothod/PayPal.vue')
    },
    {
      path: '/shipping-address',
      name: 'shippingaddress',
      component: () => import('../views/ShippingAddress.vue')
    },
    {
      path: '/checkout',
      name: 'checkout',
      component: () => import('../views/Checkout.vue')
    },
    {
      path: '/completed',
      name: 'completed',
      component: () => import('../views/ThankYou.vue')
    }
  
  ]
})

export default router
