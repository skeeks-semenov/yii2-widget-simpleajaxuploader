<?php
/**
 * Asset
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 21.10.2014
 * @since 1.0.0
 */
namespace skeeks\widget\simpleajaxuploader;

use yii\web\AssetBundle;

/**
 * Class Core
 * @package skeeks\widget\simpleajaxloader
 */
class Asset extends AssetBundle
{
    public $sourcePath = '@vendor/skeeks/yii2-widget-simpleajaxuploader/assets';
    public $css = [];
    public $js = [
        'SimpleAjaxUploader.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}