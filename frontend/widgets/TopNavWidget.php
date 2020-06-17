<?php

namespace frontend\widget;

use yii\base\Widget;
use yii\bootstrap\Html;

class TopNavWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        return $this->render('topnav');
    }

    public function run()
    {
        return Html::encode($this->message);
    }
}