# fastArea 极速地区模块儿

用于thinkphp的area初始化最新的地区库，方便使用

## 一：安装说明

`composer require sxqibo/fast-area`

备注：
> 1. 安装后会自动把database目录下的文件复制到项目对应的database目录下
> 2. 执行php think migrate:run 生成数据表
> 3. 执行 php think seed:run -s InitAreaSeeder 生成地区相关初始数据


## 二：数据来源 `@vant/area-data`

具体地址如下： 

https://github.com/youzan/vant/blob/main/packages/vant-area-data/src/index.ts

说明：这个库是基于 `@vant/area-data` 这个库的，只是把数据格式化一下而已，方便我们使用。

因为这个库经常在更新，因此我们会定时更新这个库，保证数据是最新的。


## 三：thinkphp配置说明
1. composer.json 增加
```json
  "scripts": {
    "post-package-install": [
      "Plugin::install"
    ],
    "pre-package-uninstall": [
      "Plugin::uninstall"
    ]
  }
```


2. 增加 extend/Plugin.php 文件
可以参考 https://github.com/sxqibo/saas-system-thinkphp.git 中的 extend/Plugin.php 文件