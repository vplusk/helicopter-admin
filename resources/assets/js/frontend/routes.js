import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import MainData from './components/MainData.vue';
import Services from './components/Services.vue';
import Offers from './components/Offers.vue';

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/dashboard/main',
      name: 'main',
      component: MainData
    },
    {
      path: '/dashboard/services',
      name: 'services',
      component: Services
    },
    {
      path: '/dashboard/offers',
      name: 'offers',
      component: Offers
    },
  ]
});

export default router;