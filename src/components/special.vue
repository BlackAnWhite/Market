<template>
<div class="scroll-list">
  <div class="top autoimg" :style="{ backgroundImage : 'url(' + data.img + ')' }">
    <!-- <img :src="data.img" alt=""> -->
  </div>
  <swiper :options="swiperOption" class="slist-box">
    <swiper-slide class="list-item" v-for="(item,index) of data.list" :key="index">
      <router-link :to="'/detail?'+item.id">
        <div class="goods-img autoimg" :style="{ backgroundImage : 'url(' + item.img + ')' }">
          <!-- 商品小图 -->
        </div>
        <div class="goods-info">
          <p class="goods-tit">{{ item.title }}</p>
          <div class="goods-desc">
            {{ item.desc }}
          </div>
          <p class="goods-price">
            <span v-if="item.price.length == 1">&yen;{{item.price[0]}}</span>
            <span v-if="item.price.length == 2">&yen;{{item.price[0]}}+<i>฿</i>{{item.price[1]}}</span>
          </p>
        </div>
      </router-link>
    </swiper-slide>
  </swiper>
</div>
</template>
<script>
import config from '@/config.js';
export default {
  data() {
    return {
      swiperOption: {
        slidesPerView: 2.5,
        spaceBetween: 10,
        freeMode: true,
        touchRatio : 0.3,
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      }
    }
  },
  props: {
    data: {
      default: {}
    }
  },
  created() {
    this.data.img = config.host + this.data.img;
    for (let i = 0; i < this.data.list.length; i++) {
      this.data.list[i].img = config.host + this.data.list[i].img;
    }
  }
}
</script>
<style scoped>
.scroll-list {
  width: 100%;
  height: 8.2rem;
  padding-top: 0.2rem;
}

.scroll-list .top {
  width: 100%;
  height: 3.3rem;
  overflow: hidden;
}

.scroll-list .slist-box {
  width: 100%;
  height: 4.5rem;
  padding: 0 .15rem;
  margin-top: .2rem;
}

.scroll-list .slist-box .list-item {
  width: 2.82rem;
  height: 4.5rem;
  overflow: hidden;
  background: #fff;
  border: 1px solid #f0f0f0;
  border-radius: 4px;
}

.scroll-list .slist-box .list-item .goods-img {
  width: 100%;
  height: 2.8rem;
}
.goods-info{
  width: 100%;
  height: 1.7rem;
  padding: 0 .1rem;
}
.goods-info .goods-tit{
  width: 100%%;
  height: .42rem;
  line-height: .42rem;
  font-size: .28rem;
  color: #353535;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.goods-info .goods-desc{
  width: 100%%;
  height: .84rem;
  line-height: .42rem;
  color: #999;
  font-size: .24rem;
  overflow: hidden;
}
.goods-info .goods-price{
  width: 100%%;
  height: .42rem;
  line-height: .42rem;
  font-size: .28rem;
  color: #e8380d;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
