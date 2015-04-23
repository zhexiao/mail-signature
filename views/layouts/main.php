<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<?php
    NavBar::begin([
        'brandLabel' => "<i class='fa fa-envelope-o' style='font-size:32px;color:#ccc;'></i>",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default navbar-static-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
        ],
    ]);
    NavBar::end();
?>

<div class="clearfix"></div>

<div class="container-fluid index-container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= $content ?>
</div>

<footer class="footer clearfix">
    <div class="container">
        <p class="pull-left">&copy; Mail Signature <?= date('Y') ?></p>

        <div class="share-div pull-right clearfix">
            <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>" class="fa fa-facebook">
            </a>

            <a target="_blank" href="http://twitter.com/home?status=<?=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>" class="fa fa-twitter">
            </a>

            <a target="_blank" href="http://plus.google.com/share?url=<?=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>" class="fa fa-google-plus" >
            </a>

            <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>" class="fa fa-linkedin" >
            </a>
        </div>
    </div>
</footer>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61497955-1', 'auto');
  ga('send', 'pageview');
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
