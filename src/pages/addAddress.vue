<template >
<div class="container hasNav">

  <div class="top">
    <yd-navbar title="收货地址" bgcolor="#d94927" color="#fff">
      <section slot="left" @click="handleBack">
        <yd-navbar-back-icon color="#fff"></yd-navbar-back-icon>
      </section>
    </yd-navbar>
  </div>

  <div class="cen">
    <div class="form">
      <yd-cell-group>

        <yd-cell-item>
          <span slot="left">姓名：</span>
          <yd-input slot="right" v-model="input1" regex="" placeholder="请输入收货人姓名" ref="input1"></yd-input>
        </yd-cell-item>

        <yd-cell-item>
          <span slot="left">手机：</span>
          <yd-input slot="right" v-model="input2" regex="" placeholder="请输入收货人手机号"></yd-input>
        </yd-cell-item>

        <yd-cell-item>
          <span slot="left">邮编：</span>
          <yd-input slot="right" v-model="input3" regex="" placeholder="请输入邮政编码"></yd-input>
        </yd-cell-item>

        <yd-cell-item arrow>
          <span slot="left">地区：</span>
          <input slot="right" type="text" @click.stop="show = true" v-model="model" readonly placeholder="请选择省、市、县/区">
        </yd-cell-item>

        <yd-cell-item>
          <yd-textarea slot="right" placeholder="请输入您的详细地址"></yd-textarea>
        </yd-cell-item>

        <yd-cell-item>
          <span slot="left">设为默认地址</span>
          <yd-switch slot="right" color="#e8380d" v-model="switch1"></yd-switch>
        </yd-cell-item>

      </yd-cell-group>




      <yd-cityselect title="选择省、市、县/区" v-model="show" ref="cityselectDemo" :callback="result" :items="district" provance="河南" city="郑州市" area="金水区"></yd-cityselect>
    </div>
  </div>

  <div class="saveBtn">
    保 存
  </div>
</div>
</template>

<script>
import District from 'ydui-district/dist/jd_province_city_area';
export default {
  data() {
    return {
      switch1:false,
      input1: '',
      input2: '',
      input3: '',
      show: false,
      model: '河南 郑州市 金水区',
      district: District
    }
  },
  methods: {
    handleBack() {
      this.$router.go(-1);
    },
    result(ret) {
      this.model = ret.itemName1 + ' ' + ret.itemName2 + ' ' + ret.itemName3;
    }
  }
}
</script>

<style scoped>
.cen {
  padding-top: .2rem;
}

.yd-cell-title {
  line-height: .8rem important;
}

.saveBtn {
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 1rem;
  line-height: 1rem;
  font-size: .32rem;
  text-align: center;
  background: #e8380d;
  color: #fff;
}


</style>
