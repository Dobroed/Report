<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PhoneController extends EController
{

    public function actionIndex()
{
$model=new PhoneForm();
 // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='phone_form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        
    if(isset($_POST['PhoneForm']))
    {
        // получаем данные от пользователя
        $model->attributes=$_POST['PhoneForm'];
        // проверяем полученные данные и, если результат проверки положительный,
        // перенаправляем пользователя на предыдущую страницу
        if($model->validate())
            $this->redirect(Yii::app()->user->returnUrl);
    }
    // рендерим представление
    $this->render('phone',array('model'=>$model));
}

public function actionStatus()
{
    return "asdasd";
    
}

 

}

