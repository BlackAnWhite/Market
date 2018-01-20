<template>
<div class="container hasnav">
  <div class="top">
    <yd-navbar slot="navbar" title="个人中心" bgcolor="#e8380d" color="#fff"></yd-navbar>
  </div>
  <div class="cen">
    <div class="centop">
      <!-- J资本信息盒子 -->
      <div class="cenbg">
        <yd-flexbox>
          <div class="head-pic autoimg" v-bind:style="{ backgroundImage : 'url(' + headPic + ')' }"></div>
          <yd-flexbox-item>
            <p class="name">莺莺燕燕雁雁鹰鹰</p>
            <p class="id">ID: 2018520</p>
          </yd-flexbox-item>
          <div class="qrcode">
            <router-link to="/shareQR">
              <div class="icon-qrcode">
                <img src="../assets/icon-qrcode.png" alt="">
              </div>
              <span>分享二维码</span>
            </router-link>

          </div>
        </yd-flexbox>
      </div>
      <!-- 积分电子币盒子 -->
      <div class="money">
        <yd-flexbox>
          <yd-flexbox-item>
            <p>100</p>
            <p><span>积分</span></p>
          </yd-flexbox-item>
          <yd-flexbox-item>
            <p>99</p>
            <p><span>电子币</span></p>
          </yd-flexbox-item>
        </yd-flexbox>
      </div>

    </div>
    <div class="cenlist">
      <yd-cell-group>

        <yd-cell-item arrow type="link" href="/myOrder">
            <span slot="left">我的订单</span>
            <span slot="right">查看全部订单</span>
        </yd-cell-item>
        <yd-cell-item arrow type="link" href="/messages">
            <span slot="left">我的消息</span>
        </yd-cell-item>
        <yd-cell-item arrow type="link" href="/collect">
            <span slot="left">我的收藏</span>
        </yd-cell-item>
        <yd-cell-item arrow type="link" href="/childrens">
            <span slot="left">我的成员</span>
        </yd-cell-item>
        <yd-cell-item arrow type="link" href="/myInfo">
            <span slot="left">个人信息</span>
            <span slot="right">完善个人信息</span>
        </yd-cell-item>
        <yd-cell-item arrow type="link" href="/adress">
            <span slot="left">收货地址</span>
            <span slot="right">管理收货地址</span>
        </yd-cell-item>
        <yd-cell-item arrow type="link" href="contact">
            <span slot="left">客服咨询</span>
            <span slot="right">666-6666666</span>
        </yd-cell-item>

    </yd-cell-group>
    </div>
  </div>
  <div class="bot">
    <navbar navbar="4"></navbar>
  </div>
</div>
</template>

<script>
import config from '@/config.js';
export default {
  data() {
    return {
      headPic: ''
    }
  },
  created: function() {
    // `this` 指向 vm 实例
    let self = this;
    this.$http.get('api/navIndex?id=666').then(data => {
      let res = data.body.data;
      // console.log(res);
      // console.log(config.host);
      self.headPic = config.host + res['headPic'];
      self.keyWords = res['keyWords'];
    })
  }
}
</script>

<style scoped>
.centop {
  width: 100%;
  height: 3.8rem;
  color: #fff;
  position: relative;
}

.cenbg {
  width: 100%;
  height: 2.8rem;
  background-image: radial-gradient(#e8380d, #f55a35);
  /* 标准的语法 */
  padding: .3rem;
}

.head-pic {
  width: 1.4rem;
  height: 1.4rem;
  border-radius: 50%;
  margin-right: .2rem;
}
.name{
  font-size: .3rem;
  line-height: .6rem;
}
.id{
  font-size: .24rem;
}
.icon-qrcode{
  clear: both;
  height: .7rem;
}
.qrcode img{
  width:.7rem;
  text-align: right;
  height: .7rem;
  display:block;
  float: right;
  /* margin-left: .5rem; */
}
.qrcode span{
  display: block;
  font-size: .20rem;
  margin-top: .1rem;
}
.money{
  width: 7rem;
  height: 1.6rem;
  background: #ffffff;
  position: absolute;
  top: 2rem;
  left: 50%;
  margin-left: -3.5rem;
  border-radius: 2px;
  box-shadow: 0 0 4px rgba(0,0,0,.2);
  padding: .2rem;
}
.money:after{
  content: '';
  display:block;
  width: 1px;
  height: 1.2rem;
  background: #e0e0e0;
  position: absolute;
  left: 50%;
  top: .2rem;
}
.money p{
  color: #e8380d;
  font-size: .48rem;
  text-align: center;
}
.money p span{
  color: #454545;
  font-size: .28rem;
}
.yd-cell:after {
  border-bottom: 0 !important;
}
</style>
