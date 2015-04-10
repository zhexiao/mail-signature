<?php
/* @var $this yii\web\View */
$this->title = 'Generate Mail Signature';
use yii\helpers\Url;
?>

<div class="index-top">
    <div class="mail-sign-example">
        <div class="slide"> <img src="/images/ex1.png"></div>
        <div class="slide"> <img src="/images/ex2.png"></div>
        <div class="slide"> <img src="/images/ex3.png"></div>
        <div class="slide"> <img src="/images/ex4.png"></div>
    </div>
</div>

<div class="clearfix index-mid isotope js-isotope" data-isotope-options='{ "layoutMode": "fitRows", "itemSelector": ".email-tpl-wrap" }'></div>

<div class="clearfix"></div>

<div class="share-div text-right clearfix">
    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>" class="fa fa-facebook">
    </a>

    <a target="_blank" href="http://twitter.com/home?status=<?=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>" class="fa fa-twitter">
    </a>

    <a target="_blank" href="http://plus.google.com/share?url=<?=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>" class="fa fa-google-plus" >
    </a>

    <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?>" class="fa fa-linkedin" >
    </a>
</div>

<?php
// load signature script template
echo $this->render('/signature/sig_tpl');
?>

<!-- js -->
<script type="text/javascript">
var indexScript = (function($){
    var _loadScrollReveal = function(){
        window.sr = new scrollReveal();
    }

    var _loadTemplate = function(){
        $.ajax({
            type : 'post',
            url : '<?=Url::to(['signature/index']);?>',
            dataType : 'json'
        }).done(function(res){
            var template = Handlebars.compile( $("#mail-sig-tpl").html() );
            var content = template(res);
            $('.index-mid').html(content);
        })
    }

    var _loadSlide = function(){
        $('.mail-sign-example').bxSlider({
            infiniteLoop : true,
            hideControlOnEnd : true,
            slideWidth: 750,
            minSlides: 1,
            maxSlides: 1 ,
            moveSlides: 1,
            slideMargin: 20,
            pager : false,
            auto : true,
            autoDelay : 2000,
        });
    }

    return {
        init : function(){

        },

        autoload : function(){
            _loadScrollReveal();
            _loadTemplate();
            _loadSlide();
        }
    }
})(window.jQuery);

<!-- Load  Js-->
$(function(){
	indexScript.init();
	indexScript.autoload();
})
</script>