<template >
<div class="container">

  <div class="top">
    <yd-navbar title="客服咨询" bgcolor="#d94927" color="#fff">
      <section slot="left" @click="handleBack">
        <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
      </section>
    </yd-navbar>
  </div>

  <div class="cen">
    <yd-cell-group>

      <yd-cell-item arrow >
        <span slot="left">客服Q Q</span>
        <span slot="right">68549312</span>
      </yd-cell-item>
      <yd-cell-item arrow >
        <span slot="left">客服微信</span>
        <span slot="right">gongxiangshuiji</span>
      </yd-cell-item>
      <yd-cell-item arrow >
        <span slot="left">客服电话</span>
        <span slot="right">0371-68549312</span>
      </yd-cell-item>

    </yd-cell-group>
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
