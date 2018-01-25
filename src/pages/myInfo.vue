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
        <yd-input slot="right" v-model="input1" required regex="^1[3|4|5|6|7|8|9][0-9]{9}$" placeholder="请输入手机号码" ref="input1"></yd-input>
      </yd-cell-item>

      <yd-cell-item>
        <input class="color" type="text" slot="right" placeholder="请输入验证码">

        <!-- ↓↓关键代码是这里↓↓ -->
        <yd-sendcode slot="right" v-model="start" second="2" @click.native="sendCode" type="warning" storage-key="dashuaibi"></yd-sendcode>
        <!-- ↑↑关键代码是这里↑↑ -->

      </yd-cell-item>

    </yd-cell-group>

    <yd-button-group>
      <yd-button bgcolor="#e8380d" color="#fff" size="large" @click.native="clickHander">提交</yd-button>
    </yd-button-group>
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
    },
    sendCode() {
      const input = this.$refs.input1;

      // this.result = `{<br />  valid：${input.valid}，<br />  errorMes：'${input.errorMsg}'，<br />  errorCode：'${input.errorCode}'<br />}`;
      // console.log(this.result);
      if(input.valid){
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
      } else if(input.errorCode === "NOT_NULL"){
        this.$dialog.toast({
          mes: "手机号码不能为空",
          icon: 'error',
          timeout: 1500
        });
      } else {
        this.$dialog.toast({
          mes: "请输入正确的手机号码",
          icon: 'error',
          timeout: 1500
        });
      }

    },
    clickHander(){
      this.$dialog.toast({
        mes: '已提交',
        timeout: 1500
      });
    }
  }
}
</script>

<style scoped>
.cen{
  padding-top: .2rem;
}
.yd-cell::after {
  border: 0 !important;
}

input:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: #b2b2b2;
  opacity: 1;
}

input::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: #b2b2b2;
  opacity: 1;
}

input:-ms-input-placeholder {
  color: #b2b2b2;
  opacity: 1;
}

input::-webkit-input-placeholder {
  color: #b2b2b2;
  opacity: 1;
}
</style>
