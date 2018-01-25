<template >
<div class="container">

  <div class="top">
    <yd-navbar title="收货地址" bgcolor="#d94927" color="#fff">
      <section slot="left" @click="handleBack">
        <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
      </section>

      <router-link class="addBtn" to="/addAddress" slot="right">
        添加
      </router-link>
    </yd-navbar>
  </div>

  <div class="cen">

    <div class="list">
      <div class="item">
        <yd-flexbox>
            <yd-flexbox-item>
              <div class="item-top">
                张三 <span class="phone">19365401782</span>
              </div>
              <div class="item-address">
                <span class="default" v-if="seen">[默认]</span>河南省 郑州市 金水区 农业路与花园路交叉口向东50米路南豫博大厦西塔511
              </div>
            </yd-flexbox-item>
            <div>
              <router-link to="/addAddress"><yd-icon size=".32rem" color="#999" style="display:inline-block;margin-bottom:.2rem;" name="compose"></yd-icon></router-link>
              <br>
              <yd-icon size=".32rem" color="#999" name="delete"></yd-icon>
            </div>
        </yd-flexbox>
      </div>

      <div class="item">
        <yd-flexbox>
            <yd-flexbox-item>
              <div class="item-top">
                张三 <span class="phone">19365401782</span>
              </div>
              <div class="item-address">
                <span class="default" v-if="seen2">[默认]</span>河南省 郑州市 金水区 农业路与花园路交叉口向东50米路南豫博大厦西塔511
              </div>
            </yd-flexbox-item>
            <div>
              <router-link to="/addAddress"><yd-icon size=".32rem" color="#999" style="display:inline-block;margin-bottom:.2rem;" name="compose"></yd-icon></router-link>

              <br>
              <yd-icon size=".32rem" color="#999" name="delete"></yd-icon>
            </div>
        </yd-flexbox>

      </div>
    </div>


  </div>


</div>
</template>

<script>
export default {
  data() {
    return {
      seen:true,
      seen2:false,
      input2: '',
    }
  },
  methods: {
    handleBack() {
      this.$router.go(-1);
    },
    clickHander() {
      this.$dialog.toast({
        mes: '已提交',
        timeout: 1500
      });
    }
  }
}
</script>

<style scoped>
.cen {
  padding-top: .2rem;
}
.addBtn{
  color: #fff;
}
.list{
  padding: .1rem .2rem;
}
.item{
  width: 100%;
  height: auto;
  padding: .1rem .2rem;
  background: #ffffff;
  margin-bottom: .2rem;
}
.item-top{
  line-height: .5rem;
}
.item-top span{
  margin-left: .5rem;
}
.item-address{
  padding-right: .2rem;
  font-size: .24rem;
  line-height: .4rem;
}
.default{
  color: #e8380d;
  font-size: .24rem;
  font-weight: bold;
}
</style>
