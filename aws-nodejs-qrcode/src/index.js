const qrcode = require('qrcode');

exports.qrcode = async(event, context, callback) => {
    return {
        statusCode: 200,
        body: JSON.stringify(event)
    };

    let { text, margin, width } = event.queryStringParameters;

    let options = {
        margin: margin || 1,
        width: width || 250
    }

    let result = await qrcode.toDataURL(text, options)

    return {
        "isBase64Encoded": false,
        "statusCode": 200,
        // "headers": { "Content-Type": "image/png" },
        "headers": { "Content-Type": "text/html" },
        "body": result.replace(new RegExp('data:image/png;base64,'), '')
    };
}