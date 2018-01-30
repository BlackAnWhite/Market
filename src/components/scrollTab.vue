<template>
<yd-scrolltab>
  <yd-scrolltab-panel :label="item.catName" v-for="item,key in classData" :key="key">
    <div class="subClass">
      <a href="#" v-for="(sub, key) in item.childs" :key="key">{{ sub.catName }}</a>
    </div>
  </yd-scrolltab-panel>
  <!-- ... -->
</yd-scrolltab>
</template>

<script type="text/babel">
export default {
  data(){
    return {
      classData:[]
    }
  },
  props:{
    classData: {
      default: []
    },
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
