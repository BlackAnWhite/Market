<template>
<yd-navbar class="head" bgcolor="#e8380d">
  <router-link to="/my" slot="left">
    <span class="headPic" v-bind:style="{ backgroundImage : 'url(' + headPic + ')' }"></span>
  </router-link>

  <!-- <div  class="search">搜索</div> -->
  <router-link to="/search" slot="center">
    <div class="search-box"> {{ keyWords }} </div>
  </router-link>

  <router-link to="/search" slot="right">
    <span class="search-btn">搜索</span>
  </router-link>
</yd-navbar>
</template>

<script>
export default {
  name: 'navIndex',
  data () {
    return {
      headPic: require("../assets/headPic.jpg"),
      keyWords: 'iphone X'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.head a{
  display: black !important;
}
.headPic{
  display: block;
  width: .64rem;
  height: .64rem;
  border-radius: 50%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  margin-left: 0.1rem;
  /* background-image: "../assets/xiaobian.jpg"; */
}
.search-box {
  width: 5rem;
  height: .54rem;
  line-height: .54rem;
  padding: 0 .2rem;
  padding-left: 0.6rem;
  border-radius: .30rem;
  display: block;
  border: 1px solid #fff;
  color: #ecc7c3;
  font-size: 0.24rem;
  background-image: url("../assets/search.png") ;
  background-size: 0.4rem;
  background-repeat: no-repeat;
  background-position:  0.1rem center;
}
.search-btn {
  color: #fff;
  font-size: 0.28rem;
  padding-right: 0.15rem;
}
.navbar-bottom-line-color:after {
  border-color: #e8380d !important;
}
.yd-navbar-center-box:after {
  width: 80% !important;
}
</style>
