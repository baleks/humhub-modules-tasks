<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\modules\ui\form\widgets\DatePicker;

/* @var $this \humhub\components\View */
?>
<?= DatePicker::widget([
    'dateFormat' => Yii::$app->params['formatter']['defaultDateFormat'],
    'clientOptions' => [],
    'options' => array_merge(['autocomplete' => "on"], $options)
]) ?>