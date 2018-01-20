import Vue from 'vue'
import Router from 'vue-router'

import index from '@/pages/index'
import goodsClass from '@/pages/goodsClass'
import shopcar from '@/pages/shopcar'
import my from '@/pages/my'
import search from '@/pages/search'

import detail from '@/pages/detail'
import shareQR from '@/pages/shareQR'
import myOrder from '@/pages/myOrder'
import collect from '@/pages/collect'
import messages from '@/pages/messages'

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
    },
    {
      path: '/detail',
      name: 'detail',
      component: detail
    },
    {
      path: '/shareQR',
      name: 'shareQR',
      component: shareQR,
    },
    {
      path: '/myOrder',
      name: 'myOrder',
      component: myOrder,
    },
    {
      path: '/collect',
      name: 'collect',
      component: collect,
    },
    {
      path: '/messages',
      name: 'messages',
      component: messages,
    },
  ]
})
