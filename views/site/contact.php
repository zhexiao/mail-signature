<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="contact-wrap">  
    <div class="container">
        <div id="map-canvas"></div>
        <div id="save-widget">
           <strong>Stamford, Connecticut, USA</strong>
           <p>Ya.. I am living at this city.</p>
         </div>

        <div class="site-contact">
            <h1><?= Html::encode($this->title) ?></h1>

            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
            <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
            </div>
            <?php else: ?>
            <p>
                If you have any questions, please fill out the following form to contact me. Thank you.
            </p>

            <div class="row">
                <div class="col-lg-6">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <?= $form->field($model, 'name') ?>
                        <?= $form->field($model, 'email') ?>
                        <?= $form->field($model, 'subject') ?>
                        <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-6">{input}</div><div class="col-lg-3">{image}</div></div>',
                        ]) ?>
                    <div class="form-group">
                         <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var myLatLng = new google.maps.LatLng(41.0982636, -73.5654152);
        var mapOptions = {
            center: myLatLng,
            zoom: 10,
        }

        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
            map: map,
            // Define the place with a location, and a query string.
            place: {
                location: myLatLng,
                query: 'Google, Stamford, Connecticut, USA'
            },
        });

        // Create a new SaveWidgetOptions object for Google Sydney.
        var saveWidgetOptions = {
            place: {
                placeId: 'ChIJC7zHsmShwokRbrc0nIuGQ4c',
                location: myLatLng
            },
            attribution: {
                source: 'Google Maps JavaScript API',
                webUrl: 'https://developers.google.com/maps/'
            }
        };
        var widgetDiv = document.getElementById('save-widget');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(widgetDiv);

        // Append a Save Control to the existing save-widget div.
        saveWidget = new google.maps.SaveWidget(widgetDiv, saveWidgetOptions);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

