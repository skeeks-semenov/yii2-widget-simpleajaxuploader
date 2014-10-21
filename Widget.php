<?php
/**
 * Widget
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 22.10.2014
 * @since 1.0.0
 */
namespace skeeks\widget\simpleajaxuploader;

use skeeks\widget\simpleajaxuploader\Asset;
use yii\helpers\Json;
use yii\base\Widget as BaseWidget;

/**
 * For example:
 *
 * <?php
 * namespace bla\bla;
 * use skeeks\widget\simpleajaxuploader\Widget;

 * echo Widget::widget({
 *      "clientOptions" =>
 *      [
 *          "name" => ""
 *      ]
 * });
 * ```
 *
 * @author HimikLab
 * @see http://www.jacklmoore.com/colorbox/
 * @package himiklab\colorbox
 */
class Widget extends BaseWidget
{
    /** @var array $targets */
    public $clientOptions = [];

    public function init()
    {
        parent::init();
        $view = $this->getView();

        $options = Json::encode($this->clientOptions);
        $script = "new ss.SimpleUpload($options);" . PHP_EOL;

        $view->registerJs($script);
        Asset::register($view);
    }
}