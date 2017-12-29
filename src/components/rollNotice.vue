<template>
<div class="rollNotice">

  <yd-rollnotice autoplay="2000" style="background: transparent !important;" height="40">
    <yd-rollnotice-item v-for="(notice,key,index) in notices" :key="index">
      <span style="color:#e8380d; padding-right: .1rem"> 荐 </span>
      {{ notice.tit }}
    </yd-rollnotice-item>
  </yd-rollnotice>

</div>
</template>

<script>
export default {
  data() {
    return {
      notices: [
        {
          tit: "荣耀V9 1月超级钜惠！下单立减200元"
        },
        {
          tit: "平台招商入驻 加盟火热进行中..."
        },
        {
          tit: "平台年终钜惠 海量商品最低5折起..."
        }
      ]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.rollNotice {
  height: .8rem;
  overflow: hidden;
  background: #efefef;
  padding: 0 .2rem;
  padding-left: .8rem;
  background-image: url('../assets/notice.png');
  background-repeat: no-repeat;
  background-position: 0.2rem center;
  background-size: .55rem .8rem;
}
</style>
