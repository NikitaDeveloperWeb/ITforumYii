<?php

namespace app\controllers;

use app\models\Login;
use Yii;
use yii\web\Controller;
use app\models\Signup;
use app\models\User;

class SiteController extends Controller
{
 
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
            /**
     * Displays about page.
     *
     * @return string
     */

    public function  actionRegistration()
    {
        $model = new Signup();
        $model->typeUser = 'User';
        if(isset($_POST['Signup'])){
          
          $model->attributes = Yii::$app->request->post('Signup'); 
  
        }
        if($model->validate() &&  $model->signup()){
         
          return $this->redirect('auth');
        }
        return $this->render('registration', ['model'=>$model]);
    }


    public function  actionAdduser()
    {
      $model = new Signup();
     
      if(isset($_POST['Signup'])){
        
        $model->attributes = Yii::$app->request->post('Signup'); 

      }
      if($model->validate() &&  $model->signup()){
       
        return $this->redirect('lc');
      }
        return $this->render('adduser',['model'=>$model]);
    }
    public function actionLogout(){
      if(Yii::$app->user->isGuest){
        Yii::$app->user->logout();
        return $this->redirect(['authAdm']);
      }

    }

    public function  actionAuthadm()
    {
      if(!Yii::$app->user->isGuest)
      {
          return $this->redirect('lc');
      }


      $login_model = new Login();
        
      if(Yii::$app->request->post('Login') && $login_model['typeUser'] != 0)
      {
        $login_model->attributes = Yii::$app->request->post('Login');
        if($login_model->validate())
        {
          Yii::$app->user->login($login_model->getUser());
          return $this->redirect('lc');
        };
      }
        return $this->render('authAdm',['login_model'=>$login_model]);
    }

    public function  actionDeleteuser($id)
    {
      $model = User::findOne($id);
      if($model){
        $model->delete();
      }
        return $this->redirect(['lc','id'=>$id]);
    }
    public function  actionLc()
    {
        return $this->render('lc');
    }
    

}
