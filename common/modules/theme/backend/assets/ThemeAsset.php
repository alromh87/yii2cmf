<?php

/**
 * Created by PhpStorm.
 * Author: yidashi
 * DateTime: 2017/7/10 13:54
 * Description:
 */
namespace common\modules\theme\backend\assets;


class ThemeAsset extends \yii\web\AssetBundle
{
    public $css = ['theme.css'];

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->sourcePath = dirname(__DIR__) . '/static';
    }
}