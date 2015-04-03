<?php
/* @var $this yii\web\View */
$this->title = 'Generate Mail Signature';
use yii\helpers\Url;
?>
<br>
<div class="index-top">
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
				Our email signature generator allows you to effortlessly create signatures to use with your email accounts.
				Our email signature generator allows you to effortlessly create signatures to use with your email accounts.
				Our email signature generator allows you to effortlessly create signatures to use with your email accounts.
				Our email signature generator allows you to effortlessly create signatures to use with your email accounts.
				Our email signature generator allows you to effortlessly create signatures to use with your email accounts.
			</div>
			<br>
			<div>
				<button class="btn btn-primary">Create Your Signature</button>
			</div>
			<br>
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