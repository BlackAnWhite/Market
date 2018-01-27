<template>
  <div class="container hasnav">
    <!-- 头部 -->
    <navIndex></navIndex>
    <!-- 头部 end-->
    <!-- 轮播图 -->
    <banner></banner>
    <!-- 轮播图 end-->
    <!-- 滚动公告 -->
    <router-link :to="{name:'messages',params:{userId:userId}}">
      <rollNotice></rollNotice>
    </router-link>
    <!-- 滚动公告 end-->
    <!-- 宫格快捷入口 -->
    <grides></grides>
    <!-- 宫格快捷入口 end-->
    <!-- 专题模块 -->
    <div class="special-list" v-for="(item,index) of specials" :key="index">
      <special :specialData="item"></special>
    </div>
    <!-- 专题模块 end-->
    <!-- 热门推荐列表 -->
    <div class="goods-sug">
      <div class="goods-sug-tit">
        <span>热门推荐</span>
      </div>
      <div class="goods-sug-box">
        <goodslist :url="url"></goodslist>
      </div>
    </div>
    <!-- 热门推荐列表 end-->
    <!-- 底部导航 -->
    <navbar navbar= "1"></navbar>
    <!-- 底部导航 end-->
  </div>
</template>

<script>
import config from '@/config.js';
export default {
  data(){
    return {
      specials:[],
      url:`${config.host}index.php?m=Mobile&c=Index&a=goodsHot&p=`,
    }
  },
  created(){
    let self = this;
    let specialUrl = `${config.host}index.php?m=Mobile&c=Index&a=Ads&rows=20`;

    this.$http.get(specialUrl).then(res=>{
      let temp = res.body;
      // console.log(temp);
      self.specials.push(...temp);
      // console.log(self.specials);
    });
  }
}
</script>

<style scoped>
.goods-sug-tit{
  width: 100%;
  height: .8rem;
  background: #fff;
  font-size: .32rem;
  color: #353535;
  line-height: .8rem;
  text-align: center;
  margin-top: .2rem;
}
.goods-sug-tit span{
  background-color: #ffffff;
  padding: 0 .1rem;
  position: relative;
  z-index: 3;
}
.goods-sug-tit span::before{
  content: '';
  position: absolute;
  left: -50%;
  top: 50%;
  z-index: -1;
  padding: 0 1.5rem;
  height: 1px;
  background: transparent;
  border-bottom: 1px solid #444;
}
</style>
