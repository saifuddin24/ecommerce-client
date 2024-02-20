import {createRouter, createWebHistory} from 'vue-router';

const routes = [
  {
    path:'/',
    component:() => import('@/js/pages/DashboardPage.vue')
  },
  {
    path:'/products',
    component:() => import('@/js/pages/ProductsPage.vue')
  },
  {
    path:'/components',
    component:() => import('@/js/components/ExampleComponents.vue')
  }
];

export default createRouter({
  history: createWebHistory('/'),
  routes
})
