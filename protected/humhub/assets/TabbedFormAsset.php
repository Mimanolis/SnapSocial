<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\assets;

use yii\web\AssetBundle;

/**
 * tabbed form asset
 * 
 * @author buddha
 */
class TabbedFormAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    /**
     * @inheritdoc
     */
    public $js = ['js/tabbedForm.js'];
    
}