<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;


/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  
  <title><?php echo Html::encode($this->title); ?></title>
  <?php $this->head(); ?>
	
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  
  <!-- CSS  -->
  <link href="<?php echo $this->theme->baseUrl ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo $this->theme->baseUrl ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <?php $this->beginBody() ?>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo">Pariwisata Karanganyar</a>
	  		<?php
						echo Nav::widget([
						    'options' => ['id' => "nav-mobile", 'class' => 'right side-nav'],
						    'items' => [
                    ['label' => 'Home', 'url' => ['site/index'], 'visible'=> Yii::$app->user->isGuest],
                    ['label' => 'Home', 'url' => ['site/tempatwisata'], 'visible'=>! Yii::$app->user->isGuest],
                    Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                  )
                    . Html::endForm()
                    . '</li>'
                  )
						    ],
						]);
					?>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <!-- <br><br>
      <h1 class="header center orange-text">Selamat Datang!!</h1>
      <div class="row center">
        <h5 class="header col s12 light">Layanan Pariwisata Karanganyar</h5>
      </div>
      <div class="row center">
      <p><a class="btn btn-lg btn-success" href="login">Getting Started</a></p>
      </div>
      <br><br> -->

    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m12">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
  </div>

  

  <footer class="orange">
    <div class="container">
      <div class="row">
        <div class="col l3 s12">
          <h5 class="white-text">Lokasi</h5>
          <p class="white-text">Jl. Dr. Soetomo, Mangkubumen, Banjarsari, Mangkubumen, Banjarsari, 
                Kota Surakarta, Jawa Tengah 57125 
          </p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contact</h5>
          <ul>
            <li><a class="white-text" href="#!">@wisata_tawangmangu</a></li>
            <li><a class="white-text" href="#!">Wisata Tawangmangu</a></li>
            <li><a class="white-text" href="#!">wisata_tawangmangu@gmail.com</a></li>
            <li><a class="white-text" href="#!">(0271) 7655123</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text lighten-3" href="http://materializecss.com">Kel 1</a>
      </div>
    </div>
  </footer>  


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo $this->theme->baseUrl ?>/js/materialize.js"></script>
  <script src="<?php echo $this->theme->baseUrl ?>/js/init.js"></script>
  
  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage(); ?>