<template>
<yd-layout class="hasnav">

  <yd-navbar slot="navbar" title="购物车" bgcolor="#e8380d" color="#fff">

  </yd-navbar>


  <div class="cen">
    <yd-checklist v-model="checklist" :label="false" color="#e8380d">
      <!-- 循环shop -->
      <div class="shop">
        <div class="shop-tit">
          华为官方旗舰店 选中值：{{checklist}}
        </div>
        <yd-checklist-item val="1">
          <yd-flexbox style="padding: 10px 0;">
            <img src="../assets/img-11.jpg" class="img">
            <yd-flexbox-item align="top" class="goods-right">
              <p class="goods-tit">Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
              <div class="goods-type">
                <span>草木绿</span> <span>64g</span> <span>官方标配</span>
              </div>
              <p style="color:#e8380d;"><span>￥20</span><span class="goods-num">×2</span></p>
            </yd-flexbox-item>
          </yd-flexbox>
        </yd-checklist-item>
        <yd-checklist-item val="2">
          <yd-flexbox style="padding: 10px 0;">
            <img src="../assets/img-15.jpg" class="img">
            <yd-flexbox-item align="top" class="goods-right">
              <p class="goods-tit">Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
              <div class="goods-type">
                <span>草木绿</span> <span>64g</span> <span>官方标配</span>
              </div>
              <p style="color:#e8380d;"><span>￥20</span><span class="goods-num">×2</span></p>
            </yd-flexbox-item>
          </yd-flexbox>
        </yd-checklist-item>
      </div>

      <!-- 循环shop -->
      <div class="shop">
        <div class="shop-tit">
          华为官方旗舰店 选中值：{{checklist}}
        </div>
        <yd-checklist-item val="3">
          <yd-flexbox style="padding: 10px 0;">
            <img src="../assets/img-01.jpg" class="img">
            <yd-flexbox-item align="top" class="goods-right">
              <p class="goods-tit">Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
              <div class="goods-type">
                <span>草木绿</span> <span>64g</span> <span>官方标配</span>
              </div>
              <p style="color:#e8380d;"><span>￥20</span><span class="goods-num">×2</span></p>
            </yd-flexbox-item>
          </yd-flexbox>
        </yd-checklist-item>
        <yd-checklist-item val="4">
          <yd-flexbox style="padding: 10px 0;">
            <img src="../assets/img-17.jpg" class="img">
            <yd-flexbox-item align="top" class="goods-right">
              <p class="goods-tit">Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
              <div class="goods-type">
                <span>草木绿</span> <span>64g</span> <span>官方标配</span>
              </div>
              <p style="color:#e8380d;"><span>￥20</span><span class="goods-num">×2</span></p>
            </yd-flexbox-item>
          </yd-flexbox>
        </yd-checklist-item>
      </div>

      <!-- 循环shop -->
      <div class="shop">
        <div class="shop-tit">
          华为官方旗舰店 选中值：{{checklist}}
        </div>
        <yd-checklist-item val="5">
          <yd-flexbox style="padding: 10px 0;">
            <img src="../assets/img-21.jpg" class="img">
            <yd-flexbox-item align="top" class="goods-right">
              <p class="goods-tit">Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
              <div class="goods-type">
                <span>草木绿</span> <span>64g</span> <span>官方标配</span>
              </div>
              <p style="color:#e8380d;"><span>￥20</span><span class="goods-num">×2</span></p>
            </yd-flexbox-item>
          </yd-flexbox>
        </yd-checklist-item>
        <yd-checklist-item val="6">
          <yd-flexbox style="padding: 10px 0;">
            <img src="../assets/img-19.jpg" class="img">
            <yd-flexbox-item align="top" class="goods-right">
              <p class="goods-tit">Green Orange/青橙 VOGA 55909 激光投影手机全网通4G</p>
              <div class="goods-type">
                <span>草木绿</span> <span>64g</span> <span>官方标配</span>
              </div>
              <p style="color:#e8380d;"><span>￥20</span><span class="goods-num">×2</span></p>
            </yd-flexbox-item>
          </yd-flexbox>
        </yd-checklist-item>
      </div>

    </yd-checklist>

  </div>

  <div class="payBtnBox" slot="bottom">
    <yd-flexbox>
      <div class="del-btn"><yd-icon size=".4rem" color="#b2b2b2" name="delete"></yd-icon></div>
      <yd-flexbox-item class="sum">总计：<span>￥0</span></yd-flexbox-item>
      <div class="pay-btn">结 算</div>
    </yd-flexbox>
  </div>

  <navbar slot="tabbar" navbar="3"></navbar>


</yd-layout>
</template>

<script type="text/babel">
export default {
  data() {
    return {
      checklist: []
    }
  }
}
</script>

<style scoped>
.hasnav {
  padding-bottom: 2.1rem;
}

.yd-checklist:after {
  border-bottom: 0 !important;
}

.shop {
  background: #ffffff;
  margin-top: .2rem;
}

.shop-tit {
  width: 100%;
  padding: .24rem .24rem;
  border-bottom: 1px solid #e0e0e0;
  color: #353535;
}

.img {
  width: 1.8rem;
  height: 1.8rem;
}

.goods-type {
  color: #999;
  font-size: .24rem;
  margin: .1rem 0;
}

.goods-right {
  padding-left: .2rem;
}

.goods-num {
  float: right;
  color: #666;
}

.payBtnBox {
  position: fixed;
  width: 100%;
  height: 1rem;
  color: #fff;
  bottom: 1.08rem;
  background: #efefef;
  z-index: 99;
}
.del-btn{
  width: .8rem;
  line-height: 1rem;
  text-align: center;
  border-right: 1px solid #ececec;
}
.sum{
  padding: 0 .1rem;
  color: #666;
  text-align: right;
  font-size: .24rem; 
}
.sum>span{
  color:#e8380d;
}

.pay-btn{
  width: 2rem;
  height: 1rem;
  line-height: 1rem;
  text-align: center;
  font-size: .32rem;
  background-image: -webkit-linear-gradient(left,  #F36847 , #e8380d); /* Safari 5.1 - 6.0 */
  background-image: -o-linear-gradient(right,  #F36847 , #e8380d); /* Opera 11.1 - 12.0 */
  background-image: -moz-linear-gradient(right,  #F36847 , #e8380d); /* Firefox 3.6 - 15 */
  background-image: linear-gradient(to right, #F36847 , #e8380d);
}

</style>
