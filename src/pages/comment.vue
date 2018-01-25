<template >
  <div class="container">

    <div class="top">
      <yd-navbar title="评论" bgcolor="#d94927" color="#fff">
        <section slot="left" @click="handleBack">
          <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
        </section>
      </yd-navbar>
    </div>

    <div class="cen">
      <yd-cell-group>
        <yd-cell-item>
          <!-- <span slot="left">提示文字</span> -->
            <yd-rate slot="left" v-model="rate" size=".4rem" :show-text="showText"></yd-rate>
        </yd-cell-item>
        <yd-cell-item>
          <yd-textarea slot="right" placeholder="请写下您的评价吧" maxlength="200"></yd-textarea>
        </yd-cell-item>

    </yd-cell-group>
    <yd-button-group>
      <yd-button bgcolor="#e8380d" color="#fff" size="large" @click.native="clickHander">提交评价</yd-button>
    </yd-button-group>
    </div>


  </div>
</template>

<script>
export default {
  data(){
    return {
      rate:3,
      showText:['很差','还行','一般','挺好','非常好']
    }
  },
  methods: {
    handleBack() {
      this.$router.go(-1);
      // console.log(this.$router);
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

</style>
