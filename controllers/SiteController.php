<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Signup;

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
    public function  actionNews()
    {
        return $this->render('news');
    }
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
    public function  actionAuth()
    {
        return $this->render('auth');
    }

    public function  actionAddnews()
    {
        return $this->render('addNews');
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
    public function  actionAdmnews()
    {
        return $this->render('admNews');
    }
    public function  actionAuthadm()
    {
        return $this->render('authAdm');
    }
    public function  actionDeletenews()
    {
        return $this->render('deleteNews');
    }
    public function  actionDeleteuser()
    {
        return $this->render('deleteUser');
    }
    public function  actionEdituser()
    {
        return $this->render('editUser');
    }
    public function  actionEditnews()
    {
        return $this->render('editNews');
    }
    public function  actionLc()
    {
        return $this->render('lc');
    }
    /**
    
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

}
