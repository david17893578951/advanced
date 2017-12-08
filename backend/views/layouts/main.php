<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'Registrar', 'url' => 'http://localhost:8084/advanced/frontend/web/index.php?r=site%2Fsignup'],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => 'http://localhost:8084/advanced/backend/web/index.php?r=site%2Flogin'];
            } else {
                $menuItems[] = ['label' => 'Banner', 'url' => ['/banner']];
                $menuItems[] = ['label' => 'Cargos', 'url' => ['/cargos']];
                $menuItems[] = ['label' => 'Afiliados', 'url' => ['/unapes']];
                $menuItems[] = ['label' => 'Directiva', 'url' => ['/directiva']];
                $menuItems[] = ['label' => 'Eventos', 'url' => ['/eventos']];
                $menuItems[] = ['label' => 'Grupo', 'url' => ['/grupo']];
                $menuItems[] = ['label' => 'Galeria', 'url' => ['/galeria']];
                $menuItems[] = ['label' => 'Miembros', 'url' => ['/miembros']];
                $menuItems[] = ['label' => 'Periodo', 'url' => ['/periodo']];
                $menuItems[] = ['label' => 'Columnas', 'url' => ['/columna']];
                $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>

            <div class="container">
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
