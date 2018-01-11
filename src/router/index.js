import Vue from 'vue'
import Router from 'vue-router'

import index from '@/pages/index'
import goodsClass from '@/pages/goodsClass'
import shopcar from '@/pages/shopcar'
import my from '@/pages/my'
import search from '@/pages/search'

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
    },
    {
      path: '/shopcar',
      name: 'shopcar',
      component: shopcar
    },
    {
      path: '/my',
      name: 'my',
      component: my
    },
    {
      path: '/search',
      name: 'search',
      component: search
    }
  ]
})
