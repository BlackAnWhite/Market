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


export default {
  name: 'app'
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 0.28rem;
  color: #666;
  width: 100%;
  max-width: 750px;
  margin: 0 auto;
}
</style>
