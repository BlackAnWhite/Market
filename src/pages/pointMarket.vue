<template >
  <div class="container">

    <div class="top">
      <yd-navbar title="积分兑换" bgcolor="#d94927" color="#fff">
        <section slot="left" @click="handleBack">
          <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
        </section>
      </yd-navbar>
    </div>

    <div class="cen">
      <goodslist theme="1"></goodslist>

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

</style>
