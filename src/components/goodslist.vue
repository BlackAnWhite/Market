<template>
<yd-infinitescroll :callback="loadList" ref="infinitescrollDemo">

  <yd-list :theme="theme" slot="list">

    <yd-list-item :href="'/detail?'+item.id" v-for="item, key in data" :key="key">
      <!-- <router-link :to="'/detail?'+item.id"> -->
      <img slot="img" :src="item.img">
      <span class="goods-tit" slot="title">{{item.title}}</span>
      <p class="goods-desc" slot="other">{{item.desc}}</p>
      <yd-list-other class="goods-price-box" slot="other">
        <div>
          <span class="goods-price" v-if="item.price.length == 1">&yen;{{item.price[0]}}</span>
          <span class="goods-price" v-if="item.price.length == 2">&yen;{{item.price[0]}}+<i>฿</i>{{item.price[1]}}</span>
          <!-- <span class="list-price"><em>¥</em>{{item.marketprice}}</span>
                        <span class="list-del-price">¥{{item.productprice}}</span> -->
        </div>
        <div class="goods-sales">已售：{{item.sales}}</div>
      </yd-list-other>
      <!-- </router-link> -->
    </yd-list-item>

  </yd-list>

  <!-- 数据全部加载完毕显示 -->
  <span slot="doneTip">啦啦啦，啦啦啦，没有更多啦~~</span>

  <!-- 加载中提示，不指定，将显示默认加载中图标 -->
  <img slot="loadingTip" src="http://static.ydcss.com/uploads/ydui/loading/loading10.svg" />

</yd-infinitescroll>
</template>

<script type="text/babel">
import config from '@/config.js';
let page = 1;
export default {
  props: {
    theme: {
      default: 3
    }
  },
  data() {
    return {
      data:[]
    }
  },
  created() {
    let self = this;
    this.page = 1 ;
    this.pageSize = 10 ;
    self.$http.get(`/api/goodslist?page=${this.page}`).then( res => {
      this.page++;
      let data = res.body.data.list;
      for (let i = 0; i < data.length; i++) {
        data[i].img = config.host + data[i].img;
      };
      console.log(data);
      this.data.push(...data);
    });

  },
  methods: {
    loadList() {
      this.$http.get(`/api/goodslist?page=${this.page}`, {
        params: {
          page: this.page,
          pagesize: this.pageSize
        }
      }).then(function(response) {
        const _list = response.body;

        this.list = [...this.list, ..._list];

        if (_list.length < this.pageSize || this.page == 3) {
          /* 所有数据加载完毕 */
          this.$refs.infinitescrollDemo.$emit('ydui.infinitescroll.loadedDone');
          return;
        }

        /* 单次请求数据完毕 */
        this.$refs.infinitescrollDemo.$emit('ydui.infinitescroll.finishLoad');

        this.page++;
      });
    }
  }
}
</script>
<style scoped>
.goods-tit {
  color: #353535;
  font-size: .28rem;
  font-weight: normal;
}

.goods-desc {
  width: 100%;
  height: 0.6rem;
  line-height: 0.3rem;
  font-size: 0.24rem;
  color: #666;
  overflow: hidden;
  margin-top: 0.1rem;
}

.goods-price {
  color: #e8380d;
}

.goods-sales {
  font-size: .24rem;
}

.goods-price-box {
  height: 0.4rem;
}
</style>
