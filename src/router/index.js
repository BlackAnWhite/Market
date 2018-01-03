import Vue from 'vue'
import Router from 'vue-router'
import index from '@/pages/index'
import goodsClass from '@/pages/goodsClass'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'index',
      component: index
    },
    {
      path: '/goodsClass',
      name: 'goodsClass',
      component: goodsClass    
    }
  ]
})
