<template>
  <div class="container">
    <navIndex></navIndex>
    <banner></banner>
    <rollNotice></rollNotice>
    <grides></grides>
    <div class="special-list" v-for="(item,key,index) in specials" :key="index">
      <special :data="data"></special>
    </div>



    <navbar navbar= "1"></navbar>
  </div>
</template>

<script>


export default {
}
</script>

<style>

</style>
