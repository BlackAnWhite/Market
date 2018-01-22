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
        <yd-flexbox style="align-items:flex-start">
          <div class="logo">
            <div class="logo-box">
              <img src="../assets/logo.png" alt="">
            </div>
          </div>
          <yd-flexbox-item>
            <div class="message">
              <div class="msg-tit">
                商城平台招募商家入驻啦！！！
              </div>
              <div class="msg-body">
                我的小鱼你醒了，还认识早晨吗？昨夜你曾经说，愿夜幕永不开启，你的香腮边轻轻滑落的，是你的泪，还是我的泪？初吻吻别的那个季节，不是已经哭过了吗......
              </div>
              <p class="msg-time">2018-01-12 19:56</p>
            </div>
          </yd-flexbox-item>

        </yd-flexbox>
      </div>

      <div class="item">
        <yd-flexbox style="align-items:flex-start">
          <div class="logo">
            <div class="logo-box">
              <img src="../assets/logo.png" alt="">
            </div>
          </div>
          <yd-flexbox-item>
            <div class="message">
              <div class="msg-tit">
                2018 疯狂年货节 一大波年货正在路上...
              </div>
              <div class="msg-body">
                我的小鱼你醒了，还认识早晨吗？昨夜你曾经说，愿夜幕永不开启，你的香腮边轻轻滑落的，是你的泪，还是我的泪？初吻吻别的那个季节，不是已经哭过了吗......
              </div>
              <p class="msg-time">2018-01-12 19:56</p>
            </div>
          </yd-flexbox-item>

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

<style scoped>
.cen{
  width: 100%;
}
.cen .item{
  width: 100%;
  margin: .1rem 0;
  background: #ffffff;
  padding: 0.2rem;
}
.item .logo{
  width: 1rem;
  height: 100%;
  margin-right: .2rem;
}
.item .logo .logo-box{
  width:1rem;
  height: 1rem;
  overflow:hidden;
  border-radius: 50%;
  /* margin-top: .2rem; */
}
.item .logo .logo-box img{
  width: 100%;
}
.message .msg-tit{
  width: 100%;
  line-height: .5rem;
  font-size: .3rem;
  color: #353535;
  font-weight: bold;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.message .msg-time{
  font-size: .24rem;
  line-height: .5rem;
  color: #999;
}
</style>
