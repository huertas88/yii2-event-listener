<?php

namespace huertas88\elistener;

use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\web\Response;
use yii\web\View;

/**
 * The Yii Event listner provides a listener for lot of events
 *
 * @author Toni Huertas <ahuertas@factorenergia.com>
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    public $eventsToListener = [''];

    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        
    }
}
