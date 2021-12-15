<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Добавить новость';
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
          <h2>Добавить новость</h2>
          <form action="">
            <input type="text" placeholder="Заголовк">
            <input type="file" placeholder="Изображение">
            <textarea type="text" placeholder="Введите текст"></textarea>

            <button type="submit">Добавить</button>
          </form>
          <a href=<?=  Url::to(['site/admnews/']);?>>В личный кабинет</a>
        </div>

</header>
