<?php
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Авторизация';
?>
      <header>
        <!-- логотип в svg -->
        <div class="logo">
          <svg
            width="160"
            height="167"
            viewBox="0 0 831 528"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M0 0L349 28L564 156L201 61L0 0Z" fill="#EB8484" />
            <path
              d="M575.74 527.036L227.75 488.463L16.732 354L376.683 459.967L575.74 527.036Z"
              fill="#EB8484"
            />
            <path d="M286 83L348 97V465L286 456V83Z" fill="#EB8484" />
            <path d="M431.5 156L755.5 169.5L831 216.5H377L431.5 156Z" fill="#EB8484" />
            <path d="M580.5 183L638 196L611.5 528H558.5L580.5 183Z" fill="#EB8484" />
          </svg>
          <h1><a href=<?=  Url::to(['/']);?>>Международный ИТ-ФОРУМ</a></h1>
        </div>
        <div class="header_form">
          <h2>Административная панель</h2>
          <?php $form = ActiveForm::begin( ['options' => ['class' => 'form']]); ?>
            <?= $form->field($login_model,'email')->input('email',['class'=>'field','placeholder'=>'Почта'])->label('');  ?>
            <?= $form->field($login_model,'password')->passwordInput(['class'=>'field','placeholder'=>'Пароль'])->label(''); ?>
          <button type="submit">ВОЙТИ</button>
          <?php ActiveForm::end(); ?>

        </div>

      </header>

