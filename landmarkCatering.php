<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>地标餐饮</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/element.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/reset-element.css">
    <link rel="stylesheet" href="./font/iconfont.css">
    <script src="./js/vue.js"></script>
    <script src="./js/element.js"></script>
</head>
<body>
    <div id="app">
        <div class="w header">
            <div class="nav">
                <div class="logo">
                    <a href="">
                        <img src="./img/logo.jpg" alt="">
                    </a>
                </div>
                <ul class="nav-list" id="nav">
                    <li><a href="./index.php">品牌之光</a></li>
                    <li class="on"><a href="./landmarkCatering.php">地标餐饮</a></li>
                    <li><a href="./search.php">查询中心</a></li>
                    <li><a href="./broadcastTv.php">品牌展播</a></li>
                    <li><a href="./supportTeam.php">新闻中心</a></li>
                    <li><a href="./contactUs.php">联系我们</a></li>
                </ul>
                <div class="nav-list-show">
                    <i class="iconfont icon-daohang" @click="drawer = true"></i>
                </div>
            </div>
        </div>

        <div class="w landmark-catering">
            <div class="top-title">
                <h5>LANDMARK CATERING</h5>
                <span>地标餐饮</span>
            </div>
            <div class="landmark-images">
                <div class="image-container" v-for="index in 18" :key="index">
                    <img :src="'./img/地表餐饮/地标餐饮_' + (index-1).toString().padStart(2, '0') + '.png'" :alt="'地标餐饮图片' + index">
                </div>
            </div>
        </div>

        <el-drawer title="导航" size="50%" :visible.sync="drawer" :with-header="false" class="el">
            <div class="title">
                <i class="iconfont icon-cuowu" @click="drawer=false"></i>
            </div>
            <ul class="nav-list" id="nav">
                <li><a href="./index.php">品牌之光</a></li>
                <li class="on"><a href="./landmarkCatering.php">地标餐饮</a></li>
                <li><a href="./search.php">查询中心</a></li>
                <li><a href="./broadcastTv.php">品牌展播</a></li>
                <li><a href="./supportTeam.php">新闻中心</a></li>
                <li><a href="./contactUs.php">联系我们</a></li>
            </ul>
        </el-drawer>
    </div>

    <script>
        new Vue({
            el: '#app',
            data() {
                return {
                    drawer: false,
                    windowWidth: window.innerWidth
                }
            },
            mounted() {
                window.addEventListener('resize', () => {
                    this.windowWidth = window.innerWidth
                })
            }
        })
    </script>
</body>
</html>
