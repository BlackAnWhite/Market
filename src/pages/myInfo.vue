<template >
<div class="container">

  <div class="top">
    <yd-navbar title="完善资料" bgcolor="#d94927" color="#fff">
      <section slot="left" @click="handleBack">
        <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
      </section>
    </yd-navbar>
  </div>

  <div class="cen">
    <yd-cell-group>
      <yd-cell-item>
        <span slot="left">绑定手机号：</span>
        <yd-input slot="right" v-model="input1" regex="mobile" placeholder="请输入手机号码" ref="input1"></yd-input>
      </yd-cell-item>

      <yd-cell-item>
        <input type="text" slot="right" placeholder="请输入验证码">

        <!-- ↓↓关键代码是这里↓↓ -->
        <yd-sendcode slot="right" v-model="start" second="2" @click.native="sendCode" type="warning" storage-key="dashuaibi"></yd-sendcode>
        <!-- ↑↑关键代码是这里↑↑ -->

      </yd-cell-item>

    </yd-cell-group>
  </div>


</div>
</template>

<script>
export default {
  data() {
    return {
      input1: '',
      start: false
    }
  },
  methods: {
    handleBack() {
      this.$router.go(-1);
      // console.log(this.$router);
    },
    // clickHander() {
    //   const input = this.$refs.input1;
    //   console.log(this.result);
    // },
    sendCode() {
      const input = this.$refs.input1;
      console.log(this.result);
      this.$dialog.loading.open('发送中...');
      setTimeout(() => {

        this.start = true;
        this.$dialog.loading.close();

        this.$dialog.toast({
          mes: '已发送',
          icon: 'success',
          timeout: 1500
        });

      }, 1000);
    }
  }
}
</script>

<style scoped>

</style>
