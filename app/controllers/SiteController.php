<?php
/**
 * SiteController class
 * @author Pascal Brewing <pascalbrewing@gmail.com>
 * @link http://www.pascal-brewing.de
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
class SiteController extends EController
{

    /**
    * @return array action filters
    */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','css','ajaxTest','doc','error','components','javascript'),
                'users'=>array('*'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    public function actionIndex()
    {
//        $this->redirect('site/css');
        $this->render('home');
    }

    public function actionCss(){
        $model = new User();
      
        $this->layout = '//layouts/column_2';

        if(isset($_POST['User']))
        {
           
          echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        $this->render('css',array('model' => $model));
    }

    public function actionComponents(){
        $model = new User();
        $this->layout = '//layouts/column_2';

        if(isset($_POST['User']))
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        $this->render('components',array('model' => $model));
    }
    public function actionJavascript(){
        $model = new User();
        $this->layout = '//layouts/column_2';

        if(isset($_POST['User']))
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        $this->render('javascript',array('model' => $model));
    }
    /**
     * Ajax Sample
     */
    public function actionAjaxTest()
    {
        $message = $_POST['message'];
        echo BSHtml::alert(BSHtml::ALERT_COLOR_INFO, "<strong>Message:</strong>{$message}");
        Yii::app()->end();
    }

    /**
     * Apigen Documentation
     * php apigen.php apigen --source bootstrap/app/lib/vendor/drmabuse/yii-bootstrap-3-module/ --destination bootstrap/www/class_reference
     */
    public function actionDoc(){
        $this->render('documentation');
    }
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model=new ContactForm;
        if(isset($_POST['ContactForm']))
        {
            $model->attributes=$_POST['ContactForm'];
            if($model->validate())
            {
                $headers="From: {$model->email}\r\nReply-To: {$model->email}";
                mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
                Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact',array('model'=>$model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH)
            throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");

        $model=new LoginForm;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}