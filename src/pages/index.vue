<template>
  <div class="container">
    <navIndex></navIndex>
    <banner></banner>
    <rollNotice></rollNotice>
    <grides></grides>
    <div class="special-list" v-for="(item,index) of specials" :key="index">
      <special :data="item"></special>
    </div>
    <navbar navbar= "1"></navbar>
  </div>
</template>

<script>
export default {
  data(){
    return {
      specials:[]
    }
  },
  created(){
    let self = this;
    this.$http.get('/api/special').then(res=>{
      let temp = res.body.data;
      console.log(temp)
      self.specials.push(...temp);
      console.log(self.specials);
    })
  }
}
</script>

<style>

</style>
