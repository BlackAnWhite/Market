<template>
<yd-scrolltab>
  <yd-scrolltab-panel :label="item.name" v-for="(item, key) in data" :key="key">
    <div class="subClass">
      <a href="#" v-for="(sub, key) in item.sub" :key="key">{{ sub }}</a>
    </div>
  </yd-scrolltab-panel>
  <!-- ... -->
</yd-scrolltab>
</template>

<script type="text/babel">
export default {
  data(){
    return {
      data:[
        {
          name:"家用电器",
          sub:[
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器"
          ]
        },
        {
          name:"电脑",
          sub:[
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器"
          ]
        },
        {
          name:"手机",
          sub:[
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器"
          ]
        },
        {
          name:"平板",
          sub:[
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器"
          ]
        },
        {
          name:"衣服鞋帽",
          sub:[
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器"
          ]
        },
        {
          name:"家用电器",
          sub:[
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器",
            "电热水器"
          ]
        }
      ]
    }
  }
}
</script>

<style scoped>
.subClass a{
  display: inline-block;
  margin-left: .2rem;
  color: #999;
  font-size: .28rem;
  padding: .04rem;
}
</style>
