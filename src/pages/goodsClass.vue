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


export default {
  created() {
    document.title = '分类';
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
