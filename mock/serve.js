const Koa = require("koa");
const app = new Koa();
const router = require('koa-router')();

router.get('/api', function(ctx, next) {
  ctx.body = 'Hello World!';
});
// 头像和默认搜索关键字
router.get('/api/navIndex', function(ctx, next) {
  ctx.body = {
    data: {
      "headPic": "headPic.jpg",
      "keyWords": "iphone X",
      test: ctx
    }
  };

  // console.log(ctx.query.id);
  console.log('请求navIndex成功!!');
});

//轮播图
router.get('/api/banners', function(ctx, next) {
  ctx.body = {
    data: [
      {
        href: "https://www.baidu.com",
        src: "banner.png"
      }, {
        href: "https://www.baidu.com",
        src: "banner.png"
      }
    ]
  }
  console.log('请求banners成功!!');
});

// 专题组件
router.get('/api/special', function(ctx, next) {
  ctx.body = {
    data: [
      {
        id:1,
        img: "headPic.jpg",
        info:[
          {
            id:'1',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          },
          {
            id:'2',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          },
          {
            id:'3',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          },
          {
            id:'4',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          },
          {
            id:'5',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          },
          {
            id:'6',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          }
        ]
      },
      {
        id:1,
        img: "headPic.jpg",
        info:[
          {
            id:'1',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          },
          {
            id:'2',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          },
          {
            id:'3',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          },
          {
            id:'4',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          },
          {
            id:'5',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          },
          {
            id:'6',
            img:'',
            title:'',
            desc:'',
            price:['rmb','b']
          }
        ]
      }
    ]
  };

  // console.log(ctx.query.id);
  console.log('请求navIndex成功!!');
});

router.post('/api/submitComment', function(ctx, next) {
  console.log('提交评论');

  let postdata;
  ctx.req.addListener('data', (data) => {
    postdata += data;
    console.log(data);
  });
  ctx.req.addListener('end', function() {
    console.log(postdata);
  });

  //返回值
  ctx.body = {
    errno: 0,
    msg: 'ok'
  }
})

app.use(router.routes()).use(router.allowedMethods());

//监听8088端口
app.listen(8088, _ => {
  console.log('server started')
});
