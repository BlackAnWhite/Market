<template>
<div class="banner">
  <yd-slider autoplay="3000" style="height:3rem;">
    <yd-slider-item v-for="(banner,key,index) in banners" :key="index">
      <a v-bind:href="banner.href">
          <img v-bind:src="banner.src">
        </a>
    </yd-slider-item>
  </yd-slider>
</div>
</template>

<script>
export default {
  data () {
    return {
      banners: [
        {
          href: 'https://www.baidu.com',
          src: require('../assets/banner.png')
        },
        {
          href: 'https://www.baidu.com',
          src: require('../assets/banner.png')
        }
      ]
    }
  },
  create: function(){
    
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
