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
    </div>

    <!-- 联系方式 -->
    .

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
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
</style>
