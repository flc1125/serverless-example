<?php

require_once __DIR__ . '/vendor/autoload.php';

use SimpleSoftwareIO\QrCode\Generator;

class App
{
    /**
     * 二维码尺寸
     *
     * @var int
     */ 
    protected int $size = 300;

    /**
     * 二维码边距
     *
     * @var int
     */
    protected int $margin = 0;

    /**
     * 二维码内容
     *
     * @var string
     */
    protected string $text = '';

    /**
     * 创建一个实例
     *
     * @param array $params
     */
    public function __construct(array $params)
    {
        $this->text = $_GET['text'] ?? '';
        $this->size = $_GET['size'] ?? 300;
        $this->margin = $_GET['margin'] ?? 0;
    }

    /**
     * 输出内容
     *
     * @return void
     */
    public function toBody()
    {
        if (empty($this->text)) {
            echo '二维码生成器：http://url.com/?text=[二维码内容]&margin=[边距]&size=[尺寸]';
            exit;
        }

        header('Content-Type: image/svg+xml');

        echo (new Generator())
            ->size($this->size)
            ->margin($this->margin)
            ->generate($this->text);
    }
}

(new App($_GET))->toBody();