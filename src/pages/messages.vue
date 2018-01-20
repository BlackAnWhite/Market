<template >
  <div class="container">

    <div class="top">
      <yd-navbar title="消息中心" bgcolor="#d94927" color="#fff">
        <section slot="left" @click="handleBack">
          <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
        </section>
      </yd-navbar>
    </div>

    <div class="cen">
      <div class="item">
        <yd-flexbox>
          <div class="logo">
            <img src="../assets/headPic.jpg" alt="">
          </div>
        </yd-flexbox>
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

<style lang="css">
</style>
