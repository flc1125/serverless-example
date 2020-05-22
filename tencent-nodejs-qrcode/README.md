# serverless-nodejs-qrcode

## 说明

基于腾讯云的 serverless 搭建的二维码服务，语言：`nodejs`

## 使用

**安装 npm 包**

```sh
cd src && npm install
```

**发布**

```sh
sls deploy
```

> 根目录执行，根据提示进行操作

## 案例

https://service-lqj2wybo-1259035730.gz.apigw.tencentcs.com/?text=1&margin=1&width=250

## 参数说明

|参数|说明|
|----|----|
|`text`|二维码内容|
|`margin`|二维码白边距|
|`width`|二维码尺寸|

## License

MIT