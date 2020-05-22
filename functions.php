<?php

use yii\helpers\VarDumper;

/**
 * Dump and Die function
 * @param $data
 * @throws \yii\base\ExitException
 */
function dd($data)
{
    yii\helpers\VarDumper::dump($data, 10, true);
    Yii::$app->end();
}