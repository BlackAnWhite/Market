<template>
<yd-layout class="hasnav">

  <yd-navbar slot="navbar" title="购物车" bgcolor="#e8380d" color="#fff">

  </yd-navbar>

  <div class="cen">
    <!-- 循环shop -->
    <div class="shop">
      <div class="shop-tit">
        <yd-checkbox v-model="isCheckAll" shape="circle" :change="checkAll" color="#e8380d">华为官方旗舰店 {{isCheckAll}}</yd-checkbox>
      </div>

      <yd-checklist v-model="checklist3" ref="checklistDemo" :callback="change" :label="false" color="#e8380d">
        <!-- <yd-checklist-item val="1">
          <div style="height: 50px;line-height: 50px;">1 -- 值：{{checklist3}}</div>
        </yd-checklist-item> -->

        <yd-checklist-item val="2">
          <yd-flexbox style="padding: 10px 0;">
            <!-- <router-link :to="{ name: '', params: {} }"> -->
              <img src="../assets/img-11.jpg" class="img">
              <yd-flexbox-item align="top" class="goods-right">
                <p class="goods-tit">类似购物车 / 类似购物车 / 类似购物车 / 类似购物车</p>
                <div class="goods-type">
                  <span>草木绿</span> <span>64g</span> <span>官方标配</span>
                </div>
                <p style="color:#F00;"><span>￥20</span><span style="float:right">×2</span></p>
                <p style="color:#F00;">选中值：{{checklist3}}</p>
              </yd-flexbox-item>
            <!-- </router-link> -->
          </yd-flexbox>
        </yd-checklist-item>

        <yd-checklist-item val="3">
          <div style="height: 50px;line-height: 50px;">3</div>
        </yd-checklist-item>

      </yd-checklist>
    </div>

  </div>

  <div slot="bottom">111</div>

  <navbar slot="tabbar" navbar="3"></navbar>


</yd-layout>
</template>

<script type="text/babel">
export default {
  data() {
    return {
      checklist3: [],
      isCheckAll: false
    }
  },
  methods: {
    change(value, isCheckAll) {
      this.isCheckAll = isCheckAll;
    },
    checkAll() {
      this.isCheckAll = !this.isCheckAll;
      this.$refs.checklistDemo.$emit('ydui.checklist.checkall', this.isCheckAll);
    }
  }
}
</script>

<style scoped>
.shop {
  background: #ffffff;
  margin-top: .2rem;
}

.shop-tit {
  width: 100%;
  padding: .24rem .24rem;
  border-bottom: 1px solid #e0e0e0;
}
.img{
  width: 1.8rem;
  height: 1.8rem;
}
.goods-right{
  padding-left: .2rem;
}
</style>
