
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;

use yii\bootstrap4\Html;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Кодировка -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <title>МЕЖДУНАРОДНЫЙ IT-FORUM</title>
  </head>
  <body>
  <?php $this->beginBody() ?>
    <div class="wrapper">
      <!-- шапка -->
     <?=$content  ?>
      <!-- подвалы -->
      <footer>
        <h2>8 (800) 000-00-00</h2>
        <h2>info@itclastersib.ru</h2>
        <ul>
          <li>© 2017-2022 г. Официальный сайт «Международный ИT-форум</li>
          <li>
            <a href="#"><?= Html::img('@web/img/telegram.png', ['alt'=>'some', 'class'=>'icon']);?></a>
            <a href="#"> <?= Html::img('@web/img/vk.png', ['alt'=>'some', 'class'=>'icon']);?></a>
            <a href="#"><?= Html::img('@web/img/facebook.png', ['alt'=>'some', 'class'=>'icon']);?></a>
            <a href="#"> <?= Html::img('@web/img/instagram.png', ['alt'=>'some', 'class'=>'icon']);?></a>
          </li>
        </ul>
      </footer>
    </div>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>