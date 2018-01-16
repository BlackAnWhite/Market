<template>
<div class="container hasnav">
  <div class="top">
    <yd-navbar title="商品详情" bgcolor="#e8380d" color="#fff">
      <section slot="left" @click="this.$router.go(-1)">
        <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
      </section>
    </yd-navbar>
  </div>
  <div class="cen">
    <!-- 商品主图 -->
    <div class="slidebox">

      <yd-slider>
        <yd-slider-item>
          <img src="../assets/img-01.jpg">
        </yd-slider-item>
        <yd-slider-item>
          <img src="../assets/img-02.jpg">
        </yd-slider-item>
        <yd-slider-item>
          <img src="../assets/img-03.jpg">
        </yd-slider-item>
        <yd-slider-item>
          <img src="../assets/img-04.jpg">
        </yd-slider-item>
        <yd-slider-item>
          <img src="../assets/img-05.jpg">
        </yd-slider-item>
      </yd-slider>

    </div>
    <div class="goodsinfo">
      <div class="goods-tit">Meitu/美图 M6S 4G全网通美图手机指纹自拍美颜手机M6 自拍神器M8
      </div>
      <div class="goods-desc">Meitu/美图 M6S 4G全网通美图手机指纹自拍美颜手机M6 自拍神器M8
      </div>
      <div class="goods-price">￥229 <span class="goods-sales">评分: 4.8 &nbsp; 已售: 20</span>
      </div>

    </div>
    <div class="table-box">
      <yd-tab active-color="#e8380d">
        <yd-tab-panel label="详情" active tabkey="1">
          <div class="goods-info">
            <!-- 这里面放详情 -->
            <img src="../assets/img-01.jpg">
            <img src="../assets/img-02.jpg">
            <img src="../assets/img-03.jpg">
            <img src="../assets/img-04.jpg">
            <img src="../assets/img-05.jpg">
          </div>
        </yd-tab-panel>
        <yd-tab-panel label="评论" tabkey="2">
          <div class="comment">

            <div class="comment-item">
              <p class="com-mame">马丁·路德·金 <span>2017-01-11</span></p>
              <p class="com-info">
                我的小鱼你醒了，还认识早晨吗？昨夜你曾经说，愿夜幕永不开启，你的香腮边轻轻滑落的，是你的泪，还是我的泪？初吻吻别的那个季节，不是已经哭过了吗？我的指尖还记忆着，你慌乱的心跳，温润的体香里，那一绺长发飘飘......
              </p>
            </div>

            <div class="comment-item">
              <p class="com-mame">马丁·路德·金 <span>2017-01-11</span></p>
              <p class="com-info">
                我的小鱼你醒了，还认识早晨吗？昨夜你曾经说，愿夜幕永不开启，你的香腮边轻轻滑落的，是你的泪，还是我的泪？初吻吻别的那个季节，不是已经哭过了吗？我的指尖还记忆着，你慌乱的心跳，温润的体香里，那一绺长发飘飘......
              </p>
            </div>

          </div>
        </yd-tab-panel>
      </yd-tab>
    </div>
  </div>

  <!-- 弹出选择框 -->
  <div class="choose">
    <yd-popup v-model="show" position="bottom" height="60%">
      <div class="choose-top" slot="top">
        <p class="choose-tit">Meitu/美图 M6S 4G全网通美图手机指纹自拍美颜手机M6 自拍神器M8</p>
        <p class="choosed">已选：“<span>4g + 32g 白色 ， 2件 ， <i>￥9999</i></span>”</p>
      </div>
      <div class="choose-cen">
        <div class="choose-type">
          <p>选择规格：</p>
          <yd-radio-group v-model="radio" color="#e8380d">
            <p><yd-radio val="1">4g + 32g 白色</yd-radio></p>
            <p><yd-radio val="2">4g + 32g 黑色</yd-radio></p>
            <p><yd-radio val="3">4g + 32g 绿色</yd-radio></p>
            <p><yd-radio val="4">4g + 64g 白色</yd-radio></p>
            <p><yd-radio val="5">4g + 64g 黑色</yd-radio></p>
            <p><yd-radio val="6">4g + 64g 绿色</yd-radio></p>
            <p><yd-radio val="7">6g + 64g 白色</yd-radio></p>
            <p><yd-radio val="8">6g + 64g 黑色</yd-radio></p>
            <p><yd-radio val="9">6g + 64g 绿色</yd-radio></p>
          </yd-radio-group>
        </div>
        <div class="choose-num">
          <p>选择数量：</p>
           <yd-spinner v-model="spinner" max="100"></yd-spinner>
           <span>库存：100</span>
        </div>


      </div>
      <div class="btn-group" slot="bottom">
        <yd-flexbox>
          <yd-flexbox-item>
            <div class="inCar">
              <yd-button  bgcolor="#353535" color="#FFF" @click.native="inCar">加入购物车</yd-button>
            </div>
          </yd-flexbox-item>
          <yd-flexbox-item>
            <div class="buy" @click.native="show = true">
              <yd-button  bgcolor="#e8380d" color="#FFF" @click.native="buyNow">立即购买</yd-button>
            </div>

          </yd-flexbox-item>
        </yd-flexbox>
      </div>

    </yd-popup>
  </div>






  <div class="bot">
    <yd-flexbox>
      <div class="collect">
        <yd-icon name="star-outline" size=".4rem" color="#e8380d"></yd-icon>
        <p>收藏</p>
      </div>
      <div class="shop">
        <yd-icon name="home-outline" size=".4rem" color="#e8380d"></yd-icon>
        <p>店铺</p>
      </div>
      <yd-flexbox-item>
        <div class="inCar">
          <yd-button  bgcolor="#353535" color="#FFF" @click.native="show = true">加入购物车</yd-button>
        </div>
      </yd-flexbox-item>
      <yd-flexbox-item>
        <div class="buy" @click.native="show = true">
          <yd-button  bgcolor="#e8380d" color="#FFF" @click.native="show = true">立即购买</yd-button>
        </div>

      </yd-flexbox-item>
    </yd-flexbox>
  </div>
</div>
</template>

<script>
export default {
       data() {
           return {
               show: false,
               radio:1,
               spinner:1
           }
       },
       methods:{
         inCar(){
           alert('加入购物车成功');
         },
         buyNow(){
           alert('购买成功');
         }
       }
   }
</script>

<style scoped>
.slidebox {
  width: 100%;
  height: 7.5rem;
  overflow: hidden;
}
/* 弹出选择框 */
.choose{
  width: 100%;
  height: 60%;
  position: relative;
}
.choose .btn-group{
  width: 100%;
  height: 1rem;
}
.choose-top{
  width: 100%;
  height: auto;
  padding: .1rem .2rem;
  border-bottom:1px solid #e5e5e5;
}
/* 商品详情 */

.goodsinfo {
  width: 100%;
  background: #ffffff;
  margin-bottom: .2rem;
}
.goods-info img{
  width:100%;
  display:block;
}
.goodsinfo .goods-tit {
  font-size: .28rem;
  color: #353535;
  font-weight: bold;
  line-height: .4rem;
  padding: .1rem .2rem;
}

.goodsinfo .goods-desc {
  font-size: .24rem;
  color: #888;
  line-height: .36rem;
  padding: 0 .2rem;
}

.goods-price {
  height: .5rem;
  line-height: .5rem;
  font-size: .32rem;
  color: #e8380d;
  padding: 0 .2rem;
}

.goods-price .goods-sales {
  float: right;
  font-size: .24rem;
  color: #999;
}
/* 评论 */
.comment{
  width: 100%;
  padding-bottom: .2rem;
  background: #f4f8fe;
}
.comment-item{
  width: 100%;
  height: auto;
  background: #ffffff;
  padding: .1rem .2rem;
  margin-bottom: .2rem;
}
.comment-item p{
  width: 100%;
  line-height: .5rem;
  color: #454545;
  font-size: .28rem;
}
.comment-item p span{
  float: right;
  font-size: .24rem;
  color: #999;
}
.comment-item .com-info{
  line-height: .4rem;
  font-size: .24rem;
  color: #888;
}
/* 固定底部 */

.bot {
  width: 100%;
  height: 1rem;
  line-height: 1rem;
  background: #fff;
  position: fixed;
  bottom: 0;
  left: 0;
}

.buy {
  width: 100%;
  height: 1rem;
  line-height: 1rem;
  background: #e8380d;
  text-align: center;
  color: #fff;
  font-size: .30rem;
}
.yd-btn{
  font-size: .30rem;
}
.inCar {
  width: 100%;
  height: 1rem;
  line-height: 1rem;
  background: #333;
  text-align: center;
  color: #fff;
  font-size: .30rem;
}

.collect,
.shop {
  width: 1rem;
  height: 1rem;
  line-height: .6rem;
  text-align: center;
}

.collect p,
.shop p {
  font-size: .22rem;
  line-height: .2rem;
  color: #999;
}

.shop {
  margin-right: .15rem;
}

.collect {
  margin-left: .15rem;
}
</style>
