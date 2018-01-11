<template>
  <div class="search">
    <yd-search :placeholder="placeholder" v-model="value1" :on-submit="submitHandler" :on-cancel="clearValue"></yd-search>
    <goodslist theme="4"></goodslist>
  </div>
</template>

<script type="text/babel">
export default {
  data() {
    return {
      placeholder: "iphone X",
      value1: ''
    }
  },
  methods: {
    submitHandler(value) {
      this.$dialog.toast({
        mes: `搜索：${value}`
      });
    },
    clearValue() {
      this.value1="";
      this.$router.go(-1);      
    }
  }
}
</script>

<style scoped>
.search .yd-search-input .search-input{
  background: translate !important;
}

</style>
