<template>
<div class="banner">
  <yd-slider autoplay="3000" style="height:3rem;">
    <yd-slider-item v-for="(banner,key,index) in banners" :key="index">
      <a v-bind:href="banner.href">
          <img v-bind:src=" host + banner.src">
        </a>
    </yd-slider-item>
  </yd-slider>
</div>
</template>

<script>
import config from '@/config.js';
export default {
  data () {
    return {
      banners: [],
      host: config.host
    }
  },
  created: function(){
    // `this` 指向 vm 实例
    let self = this;
    this.$http.get('api/banners?id=666').then( data => {
      let res = data.body.data;
      // console.log(res);
      // console.log(config.host);
      this.banners.push(...res)
    })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.banner{
  /* height: 3rem; */
  overflow: hidden;
}
</style>
