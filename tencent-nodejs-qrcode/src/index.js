const qrcode = require('qrcode');

exports.qrcode = async(event, context, callback) => {
    let { text, margin, width } = event.queryString;

    let options = {
        margin: margin || 1,
        width: width || 250
    }

    result = await qrcode.toDataURL(text, options)

    return {
        "isBase64Encoded": true,
        "statusCode": 200,
        "headers": { "Content-Type": "image/png" },
        "body": result.replace(new RegExp('data:image/png;base64,'), '')
    };
}