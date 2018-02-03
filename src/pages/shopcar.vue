<template>
<yd-layout class="hasnav">

  <yd-navbar slot="navbar" title="购物车" bgcolor="#e8380d" color="#fff">

  </yd-navbar>


  <div class="cen">
    <yd-checklist v-model="checklist" :label="false" color="#e8380d">
      <!-- 循环shop -->
      <div class="shop" v-for="item,key in data" :key="key">
        <div class="shop-tit">
          {{item.shopName}}
        </div>
        <yd-checklist-item :val="sub.cartId" v-for="sub,index in item.shopgoods" :key="index">
          <router-link :to="{ name: 'detail', params: { goodsId:sub.goodsId } }">
            <yd-flexbox style="padding: 10px 0;">
              <img :src="sub.goodsThums" class="img">
              <yd-flexbox-item align="top" class="goods-right">
                <p class="goods-tit">{{sub.goodsName}}</p>
                <div class="goods-type">
                  <span>{{sub.attrVal}}</span>
                </div>
                <p style="color:#e8380d;"><span>￥{{sub.goodsPrice}}</span>
                  <span class="goods-num">× {{sub.cnt}}</span>
                </p>
              </yd-flexbox-item>
            </yd-flexbox>
          </router-link>
        </yd-checklist-item>
      </div>

    </yd-checklist>

  </div>

  <div class="payBtnBox" slot="bottom">
    <yd-flexbox>
      <div class="del-btn" @click="delCart">
        <yd-icon size=".4rem" color="#b2b2b2" name="delete"></yd-icon>
      </div>
      <yd-flexbox-item class="sum">总计：<span>￥{{sumPrice}}</span></yd-flexbox-item>
      <div class="pay-btn">结 算</div>
    </yd-flexbox>
  </div>

  <navbar slot="tabbar" navbar="3"></navbar>


</yd-layout>
</template>

<script type="text/babel">
import config from "@/config.js";
export default {
  data() {
    return {
      sumPrice: 0,
      spinner: 1,
      checklist: [],
      data: []
    }
  },
  watch: {
    checklist(now) {
      this.sumPrice = 0;
      for (let i = 0; i < now.length; i++) {
        for (let j = 0; j < this.data.length; j++) {
          for (let k = 0; k < this.data[j].shopgoods.length; k++) {
            if (now[i] == this.data[j].shopgoods[k].cartId) {
              let price = parseFloat(this.data[j].shopgoods[k].goodsPrice) * parseInt(this.data[j].shopgoods[k].cnt);
              // console.log(price);
              this.sumPrice = (parseFloat(this.sumPrice) + price).toFixed(2);
              break;
            }
          }
        }
      }
    }
  },
  created() {
    let userId = 40,
      url = `${config.host}index.php?m=Mobile&c=Cart&a=getCartInfo&userId=${userId}`;
    this.$http.get(url).then((res) => {
      let data = res.body;
      for (let i = 0; i < data.length; i++) {
        for (let j = 0; j < data[i].shopgoods.length; j++) {
          data[i].shopgoods[j].goodsThums = config.host + data[i].shopgoods[j].goodsThums;
          let goodsPriceSum = (data[i].shopgoods[j].goodsPrice * data[i].shopgoods[j].cnt).toFixed(2);
        };
      };
      // console.log(res.body);
      this.data = data;
    })
  },
  methods: {
    delCart() {
      let checked = this.checklist,
          url = `${config.host}index.php?m=Mobile&c=Cart&a=delCartGoods`,
          userId = 40;

      let i,
          j,
          k,
          data = {
                    userId:userId,
                    deleteInfo:[]
                  },
          lists = this.data;
          // newList = this.data;
      for(i=0;i<checked.length;i++){
        for(j=0;j<lists.length;j++){
          for(k=0;k<lists[j].shopgoods.length;k++){
            if(parseInt(checked[i]) == parseInt(lists[j].shopgoods[k].cartId)){
              data.deleteInfo.push({
                goodsId:lists[j].shopgoods[k].goodsId,
                goodsAttrId:lists[j].shopgoods[k].goodsAttrId
              });
              // mewList[j].shopgoods.splice(k,1);
            }
          }
        }
      };

      // console.log(data);

      this.$http.post(url,data, {
        emulateJSON: true
      }).then((res) => {
        console.log(res.body);
        if(res.body.status==1){
          this.$dialog.toast({
            mes: '删除成功!',
            timeout: 1500
          });
          // this.data = mewList;
          window.location.reload();
        } else{
          this.$dialog.toast({
            mes: '删除失败!',
            timeout: 1500
          });
        }
      }, (err) => {
        // console.log(err);
      })
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

.goods-right p:last-child {
  line-height: .6rem;
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

.del-btn {
  width: .8rem;
  line-height: 1rem;
  text-align: center;
  border-right: 1px solid #ececec;
}

.sum {
  padding: 0 .1rem;
  color: #666;
  text-align: right;
  font-size: .24rem;
}

.sum>span {
  color: #e8380d;
}

.pay-btn {
  width: 2rem;
  height: 1rem;
  line-height: 1rem;
  text-align: center;
  font-size: .32rem;
  background-image: -webkit-linear-gradient(left, #F36847, #e8380d);
  /* Safari 5.1 - 6.0 */
  background-image: -o-linear-gradient(right, #F36847, #e8380d);
  /* Opera 11.1 - 12.0 */
  background-image: -moz-linear-gradient(right, #F36847, #e8380d);
  /* Firefox 3.6 - 15 */
  background-image: linear-gradient(to right, #F36847, #e8380d);
}
</style>
