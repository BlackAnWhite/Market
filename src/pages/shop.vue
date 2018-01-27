<template >
  <div class="container">

    <div class="top">
      <yd-navbar title="店铺主页" bgcolor="#d94927" color="#fff">
        <section slot="left" @click="handleBack">
          <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
        </section>
      </yd-navbar>
    </div>

    <div class="cen">
      <div class="main-pic" style="background-image: url('../assets/img-12.jpg')">
        <!-- <yd-slider style="height:4rem;">
          <yd-slider-item>
            <a href="#">
                <img src=" ../assets/img-12.jpg">
              </a>
          </yd-slider-item>
        </yd-slider> -->
      </div>
      <!-- 联系方式 -->
      <div class="contact">
        <p class="shop-name">测试店铺111</p>
        <p class="shop-area">所在地区：<span>广东省广州市天河区</span></p>
        <p class="shop-tel">联系方式：<span>69458636</span></p>
      </div>

      <div class="goods-list">
        <p class="title">
          店内所有商品
        </p>
        <goodslist theme="3"></goodslist>
      </div>
    </div>


  </div>
</template>

<script>
export default {
  methods: {
    handleBack() {
      this.$router.go(-1);
      // console.log(this.$router);
    }
  }
}
</script>

<style scoped>
.main-pic{
  width: 100%;
  height: 4rem;
  background-color: #666;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.contact{
  width: 100%;
  background: #ffffff;
  padding: 0.1rem .2rem;
}
.contact .shop-name{
  height: .8rem;
  line-height: .8rem;
  color: #353535;
  font-size: .3rem;
  font-weight: bold;
}
.contact .shop-area,
.contact .shop-tel{
  line-height: .7rem;
}
.contact .shop-area span,
.contact .shop-tel span{
  float: right;
  font-size: .24rem;
}
.goods-list {
  margin-top: .2rem;
}
.goods-list .title{
  padding: 0 .2rem;
  font-size: .28rem;
  color: #353535;
  font-weight: bold;
  line-height: .8rem;
  background: #ffffff;
}
</style>
