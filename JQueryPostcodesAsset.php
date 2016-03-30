<?php

/**
 * @copyright Copyright (c) 2016. Wubbleyou Ltd
 */

namespace wubbleyou\jquerypostcodes;
use yii\web\AssetBundle;

/**
 * Asset bundle for JQueryPostcodes Widget
 */
class JQueryPostcodesAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.postcodes';

    public $js = [
        'dist/postcodes.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}