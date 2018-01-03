<template>
  <div class="scroll-list">
    <div class="top">
      special name
      <img :src="data.img" alt="">
    </div>
    <swiper :options="swiperOption">
      <swiper-slide v-for="(item,index) of data.info" :key="index">
        <router-link :to="'/detail?'+item.id">
          {{item.id}} ----------
          <span v-if="item.price.length == 1">{{item.price[0]}}</span>
          <span v-if="item.price.length == 2">{{item.price[0]}}+{{item.price[1]}}</span>
        </router-link>
      </swiper-slide>
    </swiper>
  </div>
</template>
<script>
import config from '@/config.js';
export default {
  data() {
    return {
      swiperOption: {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      }
    }
  },
  props: {
    data: {
      default: {}
    }
  },
  created() {
    this.data.img = config.host + this.data.img;
  }
}

</script>
<style>


</style>
