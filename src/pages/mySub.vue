<template >
<div class="container">

  <div class="top">
    <yd-navbar title="我的成员" bgcolor="#d94927" color="#fff">
      <section slot="left" @click="handleBack">
        <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
      </section>
    </yd-navbar>
  </div>

  <div class="cen">
    <yd-tab>
      <yd-tab-panel class="item" label="一级会员(99)">
        <div class="sub">天王盖地虎<span>活跃度: 9999</span></div>
        <div class="sub">天王盖地虎<span>活跃度: 9999</span></div>
        <div class="sub">天王盖地虎<span>活跃度: 9999</span></div>
      </yd-tab-panel>
      <yd-tab-panel class="item" label="二级会员(999)">
        <div class="sub">天王盖地虎<span>活跃度: 9999</span></div>
        <div class="sub">天王盖地虎<span>活跃度: 9999</span></div>
        <div class="sub">天王盖地虎<span>活跃度: 9999</span></div>
      </yd-tab-panel>
      <yd-tab-panel class="item" label="三级会员(9999)">
        <div class="sub">天王盖地虎<span>活跃度: 9999</span></div>
        <div class="sub">天王盖地虎<span>活跃度: 9999</span></div>
        <div class="sub">天王盖地虎<span>活跃度: 9999</span></div>
      </yd-tab-panel>

    </yd-tab>
  </div>


</div>
</template>

<script>
export default {
  methods: {
    handleBack() {
      this.$router.go(-1);
    }
  }
}
</script>
<style scoped>
.item{
  width: 100%;
  padding: .2rem 0;
}
.sub{
  width: 100%;
  padding: 0 .2rem;
  height: .8rem;
  line-height: .8rem;
  background: #ffffff;
  border-bottom: 1px solid #eee;
}
.sub span{
  float: right;
  font-size: .24rem;
}
</style>
