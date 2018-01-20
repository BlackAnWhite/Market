<template>
<div class="container">
  <div class="top">
    <yd-navbar title="我的订单" bgcolor="#d94927" color="#fff">
      <section slot="left" @click="handleBack">
        <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
      </section>
    </yd-navbar>
  </div>
  <div class="order">
    <yd-tab active-color="#e8380d">

      <yd-tab-panel label="待发货" tabkey="1">
        <div class="list">
          <div class="list-item">
            <div class="list-tit">
              订单号:2018461214562455 <span>2018-11-05</span>
            </div>
            <div class="list-item-body">
              <yd-flexbox>
                <div class="goods-img">
                  <img src="../assets/img-01.jpg" alt="">
                </div>
                <yd-flexbox-item class="list-body-right">
                  <p>Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
                  <div class="goods-type">
                    规格：“<span>4G 64G 草木绿</span>”
                  </div>
                  <p class="goods-price">
                    单价：<i>￥20</i><span>×2</span>
                  </p>
                </yd-flexbox-item>
              </yd-flexbox>
            </div>

            <div class="list-item-body">
              <yd-flexbox>
                <div class="goods-img">
                  <img src="../assets/img-01.jpg" alt="">
                </div>
                <yd-flexbox-item class="list-body-right">
                  <p>Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
                  <div class="goods-type">
                    规格：“<span>4G 64G 草木绿</span>”
                  </div>
                  <p class="goods-price">
                    单价：<i>￥20</i><span>×2</span>
                  </p>
                </yd-flexbox-item>
              </yd-flexbox>
            </div>

            <div class="list-item-bot">
              总计：<i>￥122</i>
            </div>

          </div>

          <div class="list-item">
            <div class="list-tit">
              订单号:2018461214562455 <span>2018-11-05</span>
            </div>
            <div class="list-item-body">
              <yd-flexbox>
                <div class="goods-img">
                  <img src="../assets/img-01.jpg" alt="">
                </div>
                <yd-flexbox-item class="list-body-right">
                  <p>Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
                  <div class="goods-type">
                    规格：“<span>4G 64G 草木绿</span>”
                  </div>
                  <p class="goods-price">
                    单价：<i>￥20</i><span>×2</span>
                  </p>
                </yd-flexbox-item>
              </yd-flexbox>
            </div>

            <div class="list-item-body">
              <yd-flexbox>
                <div class="goods-img">
                  <img src="../assets/img-01.jpg" alt="">
                </div>
                <yd-flexbox-item class="list-body-right">
                  <p>Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
                  <div class="goods-type">
                    规格：“<span>4G 64G 草木绿</span>”
                  </div>
                  <p class="goods-price">
                    单价：<i>￥20</i><span>×2</span>
                  </p>
                </yd-flexbox-item>
              </yd-flexbox>
            </div>

            <div class="list-item-bot">
              总计：<i>￥122</i>
            </div>

          </div>
        </div>
      </yd-tab-panel>

      <yd-tab-panel label="已发货" tabkey="2">
        <div class="list">
          <div class="list-item">
            <div class="list-tit">
              订单号:2018461214562455 <span>2018-11-05</span>
            </div>
            <div class="list-item-body">
              <yd-flexbox>
                <div class="goods-img">
                  <img src="../assets/img-01.jpg" alt="">
                </div>
                <yd-flexbox-item class="list-body-right">
                  <p>Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
                  <div class="goods-type">
                    规格：“<span>4G 64G 草木绿</span>”
                  </div>
                  <p class="goods-price">
                    单价：<i>￥20</i><span>×2</span>
                  </p>
                </yd-flexbox-item>
              </yd-flexbox>
            </div>

            <div class="list-item-body">
              <yd-flexbox>
                <div class="goods-img">
                  <img src="../assets/img-01.jpg" alt="">
                </div>
                <yd-flexbox-item class="list-body-right">
                  <p>Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
                  <div class="goods-type">
                    规格：“<span>4G 64G 草木绿</span>”
                  </div>
                  <p class="goods-price">
                    单价：<i>￥20</i><span>×2</span>
                  </p>
                </yd-flexbox-item>
              </yd-flexbox>
            </div>

            <div class="list-item-bot">
              总计：<i>￥122</i> <span>确认收货</span> <span class="yellow">查看物流</span>
            </div>

          </div>
        </div>
      </yd-tab-panel>

      <yd-tab-panel label="待签收" tabkey="3">
        <div class="list">
          <div class="list-item">
            <div class="list-tit">
              订单号:2018461214562455 <span>2018-11-05</span>
            </div>
            <div class="list-item-body">
              <yd-flexbox>
                <div class="goods-img">
                  <img src="../assets/img-01.jpg" alt="">
                </div>
                <yd-flexbox-item class="list-body-right">
                  <p>Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
                  <div class="goods-type">
                    规格：“<span>4G 64G 草木绿</span>”
                  </div>
                  <p class="goods-price">
                    单价：<i>￥20</i><span>×2</span>
                  </p>
                </yd-flexbox-item>
              </yd-flexbox>
            </div>

            <div class="list-item-body">
              <yd-flexbox>
                <div class="goods-img">
                  <img src="../assets/img-01.jpg" alt="">
                </div>
                <yd-flexbox-item class="list-body-right">
                  <p>Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
                  <div class="goods-type">
                    规格：“<span>4G 64G 草木绿</span>”
                  </div>
                  <p class="goods-price">
                    单价：<i>￥20</i><span>×2</span>
                  </p>
                </yd-flexbox-item>
              </yd-flexbox>
            </div>

            <div class="list-item-bot">
              总计：<i>￥122</i> <span>确认收货</span> <span class="yellow">查看物流</span>
            </div>

          </div>
        </div>
      </yd-tab-panel>

      <yd-tab-panel label="已完成" tabkey="4">
        <div class="list">
          <div class="list-item">
            <div class="list-tit">
              订单号:2018461214562455 <span>2018-11-05</span>
            </div>
            <div class="list-item-body">
              <yd-flexbox>
                <div class="goods-img">
                  <img src="../assets/img-01.jpg" alt="">
                </div>
                <yd-flexbox-item class="list-body-right">
                  <p>Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
                  <div class="goods-type">
                    规格：“<span>4G 64G 草木绿</span>”
                  </div>
                  <p class="goods-price">
                    单价：<i>￥20</i><span>×2</span>
                  </p>
                </yd-flexbox-item>
              </yd-flexbox>
            </div>

            <div class="list-item-body">
              <yd-flexbox>
                <div class="goods-img">
                  <img src="../assets/img-01.jpg" alt="">
                </div>
                <yd-flexbox-item class="list-body-right">
                  <p>Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
                  <div class="goods-type">
                    规格：“<span>4G 64G 草木绿</span>”
                  </div>
                  <p class="goods-price">
                    单价：<i>￥20</i><span>×2</span>
                  </p>
                </yd-flexbox-item>
              </yd-flexbox>
            </div>

            <div class="list-item-bot">
              总计：<i>￥122</i>  <span class="yellow">立即评价</span>
            </div>

          </div>
        </div>
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
      // console.log(this.$router);
    }
  }
}
</script>

<style scoped>
.list{
  background: #f4f8fe;
}
.list-item {
  width: 100%;
  padding: 0.1rem 0;
  background: #ffffff;
  margin: 0.1rem 0;
  margin-bottom: .2rem;
}

.list-tit {
  height: .7rem;
  line-height: .7rem;
  border-bottom: 1px solid #e5e5e5;
  padding: 0 .2rem;
  color: #666;
}
.list-tit span{
  float: right;
  font-size: .24rem;
  color: #999;
}
.list-item-body{
  width: 100%;
  padding: .2rem;
  background: #fefefe;
  margin-bottom: .1rem;
  padding-bottom: .1rem;
  border-bottom: 1px solid #f4f4f4;
}
.list-item .list-item-body:last-child{
  margin-bottom: 0;
}
.list-item-body .goods-img{
  width: 1.8rem;
  height: 1.8rem;
  overflow: hidden;
}
.list-item-body .goods-img img{
  width: 100%;
}
.list-body-right{
  padding-left: .2rem;
}
.list-body-right .goods-type{
  color: #666;
  font-size: .24rem;
  line-height: .4rem;
}
.list-body-right .goods-type span{
  color: #999;
}
.goods-price{
  font-size: .24rem;
  color: #666;
}
.goods-price i{
  color: #e8380d;
}
.goods-price span{
  float: right;
}
.list-item-bot{
  height: .7rem;
  line-height: .7rem;
  padding: 0 .2rem;
}
.list-item-bot i{
  color: #e8380d;
}
.list-item-bot span{
  float: right;
  /* display: inline-block; */
  padding: 0 .25rem;
  height: .6rem;
  line-height: .6rem;
  color: #fff;
  margin-left: .2rem;
  border-radius: 4px;
  background: #e8380d;
}
.yellow{
  background: #ffae01 !important;
}
</style>
