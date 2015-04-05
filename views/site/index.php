<?php
/* @var $this yii\web\View */
$this->title = 'Generate Mail Signature';
use yii\helpers\Url;
?>

<div class="index-top">
    <div id="mail-sig-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#mail-sig-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#mail-sig-carousel" data-slide-to="1"></li>
            <li data-target="#mail-sig-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="http://blogs-images.forbes.com/learnvest/files/2014/09/side-business-grow.jpg">
            </div>
            <div class="item">
                <img src="http://www.albertpalacci.net/wp-content/uploads/2014/06/Mobile-Business.jpg">
            </div>
            <div class="item">
                <img src="http://www.the-faith.com/wp-content/uploads/2014/10/businesses.jpg">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#mail-sig-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#mail-sig-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

	<div class="row">
		<div class="col-md-4 i-t-left-wrap" data-sr="wait 0.5s and then ease-in-out 100px">
			<div class="i-t-example">
				<div class="i-t-e-top clearfix">
					<span class="dot dot-red"></span>
					<span class="dot dot-yellow"></span>
					<span class="dot dot-green"></span>
					<span class="i-t-e-text text-right">Signature Example</span>
				</div>
			</div>
		</div>

		<div class="col-md-8 i-t-right-wrap" data-sr="enter bottom and scale up 20% over 1.5s">
			<div class="i-t-r-info">
				<div>
                    First impressions count and your email signature is no different. With over 500 billion emails sent every day, you need to make your email signature stand out!
                </div>
                <br>
                <div>
                    When you join Email Signature Rescue, you use our email signature software to build your very own email signature templates in no time. And you don't get just one email signature template, you get them all!
                </div>
                
                <div class="share-div text-right">
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
		</div>
	</div>
</div>
<br>
<div class="index-mid row"></div>

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

    return {
        init : function(){

        },

        autoload : function(){
            _loadScrollReveal();
            _loadTemplate();
        }
    }
})(window.jQuery);

<!-- Load  Js-->
$(function(){
	indexScript.init();
	indexScript.autoload();
})
</script>