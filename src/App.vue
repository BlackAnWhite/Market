<template>
  <div id="app">
    <router-view/>
  </div>
</template>

<script>
// 引用vue
import vue from "vue";
// 注册首页TOP
import navIndex from "@/components/navIndex";
vue.component("navIndex",navIndex);
//注册通用TOP
import navThere from "@/components/navThere";
vue.component("navThere", navThere);
//注册分类组件
import scrollTab from "@/components/scrollTab";
vue.component("scrollTab", scrollTab);
//注册轮播组件
import banner from "@/components/banner";
vue.component("banner", banner);
//注册公告组件
import rollNotice from "@/components/rollNotice";
vue.component("rollNotice", rollNotice);
//注册宫格组件
import grides from "@/components/grides";
vue.component("grides", grides);
//注册nav组件
import navbar from "@/components/navbar";
vue.component("navbar", navbar);
//注册专题组件
import special from "@/components/special";
vue.component("special", special);



import 'swiper/dist/css/swiper.css';
import { swiper, swiperSlide } from 'vue-awesome-swiper';
vue.component('swiper',swiper);
vue.component('swiper-slide',swiperSlide);





export default {
  name: 'app'
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background: #f4f8fe;
  min-height: 100%;
  font-size: 0.28rem;
  color: #666;
  width: 100%;
  max-width: 750px;
  margin: 0 auto;
}
</style>
