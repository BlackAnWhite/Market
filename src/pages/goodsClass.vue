<template>
<section class="container hasnav">
  <nav class="nav">
    <navThree></navThree>
  </nav>
  <!-- <section class="main"> -->
    <section class="goodsClass">
      <scrollTab></scrollTab>
    </section>
  <!-- </section> -->
  <navbar navbar= "2" ></navbar>
</section>
</template>

<script type="text/babel">

import config from '@/config.js';

export default {

  created() {
    let url = `${config.host}/index.php?m=Mobile&c=Index&a=GoodsCats`;
    this.$http.get(url).then(res=>{
      console.log(res.body);
    });
  }
}
</script>

<style scoped>
.container {
  display: flex;
  flex-direction:column;
  height: 100vh;
}
.nav {
  height: 1rem;
}

.goodsClass {
  position: relative;
  flex: 1;
  margin-bottom: -1px;
}
</style>
