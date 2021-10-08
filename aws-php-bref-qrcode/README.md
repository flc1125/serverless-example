# aws-php-bref-qrcode

## 说明

基于 [bref](https://bref.sh/) 的二维码服务

## 使用

- 安装 serverless
    
    ```bash
    npm install -g serverless
    ```

- 配置 aws key

    ```bash
    serverless config credentials --provider aws --key <key> --secret <secret>
    ```

    > [如何创建秘钥](https://bref.sh/docs/installation/aws-keys.html)

- 发布应用

    ```bash
    sls deploy
    ```

## 参数说明

|参数|说明|
|----|----|
|`text`|二维码内容|
|`margin`|二维码白边距|
|`width`|二维码尺寸|

## License

MIT