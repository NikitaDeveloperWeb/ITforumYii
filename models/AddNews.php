<?php

namespace app\models;
use yii\base\Model;

class AddNews extends Model{

  public  $title;
  public  $date;
  public $image;
  public $text;
  public $autor;
  public function rules(){
     return [
      [['title','date','text','autor'],'required']
     ];
  }


}