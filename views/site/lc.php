<?php
use yii\bootstrap4\Html;
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Административная панель';
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
       <div class="adm_panel">
         <aside>
           <a href=<?=  Url::to(['/site/lc']);?>>Пользователи</a>
           <a href=<?=  Url::to(['/site/admnews']);?>>Новости</a>

         </aside>
         <div class="adm_panel_content">
           <div class="adm_panel_content_header"><h2>Пользователи</h2><a href=<?=  Url::to(['site/adduser']);?>><?= Html::img('@web/img/addition.png', ['alt'=>'some', 'class'=>'icon']);?></a></div>
           <ul>
             <li>
               <div class="user_name blocks"><strong>Имя</strong><p>Русаков Никита Вячеславович</p></div>
               <div class="user_phone blocks"><strong>Телефон</strong><p>890883743263</p></div>
               <div class="user_email blocks"><strong>Почта</strong><p>rusakdeveloper@gmail.com</p></div>
               <div class="user_action">
                 <a href=<?=  Url::to(['site/edituser']);?>> <?= Html::img('@web/img/edit.png', ['alt'=>'some', 'class'=>'icon']);?></a>
                 <a  href="<?=  Url::to(['site/deleteuser']);?>"> <?= Html::img('@web/img/delete.png', ['alt'=>'some', 'class'=>'icon']);?></a>
               </div>
             </li>
            
           </ul>
         </div>
       </div>

      </header>
