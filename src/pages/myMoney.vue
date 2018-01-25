<template >
  <div class="container hasnav">

    <div class="top">
      <yd-navbar title="电子币明细" bgcolor="#d94927" color="#fff">
        <section slot="left" @click="handleBack">
          <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
        </section>
      </yd-navbar>
    </div>

    <div class="cen">
      <div class="list">
        <div class="item">
          <p class="green">+500 <span>2018-01-16 19:45</span></p>
          <div class="info">
            成功推荐一名会员加入分领商城，奖励积分。
          </div>
        </div>

        <div class="item">
          <p class="green">+500 <span>2018-01-16 19:45</span></p>
          <div class="info">
            成功推荐一名会员加入分领商城，奖励积分。
          </div>
        </div>

        <div class="item">
          <p class="red">-500 <span>2018-01-16 19:45</span></p>
          <div class="info">
            成功推荐一名会员加入分领商城，奖励积分。
          </div>
        </div>
      </div>
    </div>

    <div class="bot">
      <yd-flexbox>
        <yd-flexbox-item class="moneyIn">
          <router-link to="">
            充值
          </router-link>
        </yd-flexbox-item>
        <yd-flexbox-item class="moneyOut">
          <router-link to="">
            提现
          </router-link>
        </yd-flexbox-item>
      </yd-flexbox>
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
  width: 100%;
  padding: 0.2rem 0;
}
.item{
  width: 100%;
  padding: .2rem;
  background: #fff;
  margin-bottom: .2rem;
}
.item p{
  width: 100%;
  font-size: .4rem;
  line-height: .5rem;
  border-bottom: 1px solid #eee;
}
.item p span{
  color:#999;
  font-size: .24rem;
  float: right;
}
.item .info{
  width: 100%;
  padding-top: .1rem;
  color: #777;
  line-height: .4rem;
}
.red{
  color:#e8380d;
}
.green{
  color: #59BD54;
}
.bot{
  width: 100%;
  height: 1rem;
  position: fixed;
  bottom: 0;
}
.bot .moneyIn,
.bot .moneyOut{
  font-size: .32rem;
  color: #fff;
  height: 1rem;
  line-height: 1rem;
  text-align: center;
}
.moneyIn{
  background: #353535;
}
.moneyOut{
  background: #e8380d;
}
</style>
