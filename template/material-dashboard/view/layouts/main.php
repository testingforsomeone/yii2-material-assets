<?php
use yii\helpers\Html;
use spl\widgets\Noti;
use spl\web\MaterialDashboardAsset;
    if (Yii::$app->controller->action->id === 'login') { 
        echo $this->render(
            'main-login',
            ['content' => $content]
        );
    } else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }
	$bundle = MaterialDashboardAsset::register($this);    
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/spl/yii2-material-template/template/material-dashboard');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
	<body>
		<?php $this->beginBody() ?>
		  <div class="wrapper ">
		    <?= $this->render(
                'left.php',
                ['directoryAsset' => $directoryAsset ]
            ) ?>
		    <div class="main-panel">
		    	<?= $this->render('header.php') ?>
			    <div class="content">
			    	<div class="container">
                        <?= Noti::widget() ?>
            			<?= $content ?>
			    	</div>
			    </div>
		    </div>
		  </div>
		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>

<?php } ?> 
