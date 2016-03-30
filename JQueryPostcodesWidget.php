<?php

/**
 * @copyright Copyright (c) 2016. Wubbleyou Ltd
 */

namespace wubbleyou\jquerypostcodes;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Adds a jQuery postcode widget to the page
 */
class JQueryPostcodesWidget extends Widget
{
    
    /**
     * @var array
     *
     * [
     *  'api_key' => 'your_key_goes_here',
     *  // Pass in CSS selectors pointing to your input fields
     *  'output_fields' => [
     *      'line_1' => '#first_line',
     *      'line_2' => '#second_line',
     *      'line_3' => '#third_line',
     *      'post_town' => '#post_town',
     *      'postcode' => '#postcode'
     *  ]
     * ]
     */
    public $pluginOptions = [];

    /**
     * Renders the widget.
     */
    public function run()
    {

        $view = $this->getView();
        JQueryPostcodesAsset::register($view);

        $uID = uniqid('ps_lookup_');
        $view->registerJs("$('#$uID').setupPostcodeLookup(" . Json::encode($this->pluginOptions) . ");");

        echo Html::tag('div', '', ['id' => $uID, 'class' => 'form-group']);
    }
}
