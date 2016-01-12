<?php

Yii::import('ext.runactions.components.ERunActions');

class TestController extends Controller
{

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        Yii::log('action: Index', 'error');
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    public function actionTimeConsumingProcess()
    {
        Yii::log('action: TimeConsumingProcess', 'error');
        ERunActions::touchUrl(
            $this->createAbsoluteUrl('test/SendMail'),null,null,array()
        );
        echo json_encode(array('status'=>'ok'));
    }

    public function actionSendMail()
    {
        Yii::log('action: SendMail', 'error');
    }

}
