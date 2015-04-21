<?php
/* @var $this yii\web\View */
$this->title = '12345Mail Signature';
use yii\helpers\Url;
?>

<div id="top-slider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#top-slider" data-slide-to="0" class="active"></li>    
        <li data-target="#top-slider" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/images/slide1.jpg" >
        </div>

        <div class="item">
            <img src="/images/slide2.jpg" >
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#top-slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#top-slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="mail-sign-benefit">
    <ul>
        <li data-sr="wait 0.5s enter top and then ease-in-out 300px" style="background-color:#DCC6E0">
            <h4>Promote Your Business With Every Email</h4>
            If you send lots of emails throughout the day, this is a great opportunity to showcase your business and create some brand awareness. The bottom of your email is free advertising space, so why not use it?
        </li>
        <li data-sr="wait 0.5s enter right and then ease-in-out 300px" style="background-color:#E4F1FE">
            <h4>Get More Customers</h4>
            There has been times where I have emailed someone in relation to their business, only for them to turn around and ask me about my business, simply because they saw my email signature. If I hadn’t included an email signature, that person would have never known that I offered the exact services he was looking for.
        </li>
        <li data-sr="wait 0.5s enter bottom and then ease-in-out 300px" style="background-color:#C5EFF7">
            <h4>Make It Easier To Contact You</h4>
            By ending your emails with your contact information, there is no way your customers will not know how to get in contact with you. Whether it be your website, your telephone or your location, all the information is right at their fingertips whenever they need it. And that can’t be bad for business.
        <li data-sr="wait 0.5s enter left and then ease-in-out 300px" style="background-color:#F1A9A0">
            <h4>Get More Fans</h4>
            If you want more fans on your Facebook or Twitter pages, you need to let your customers know they exist! You can (and should) include links to your social pages in your email signature.
        </li>
        <li data-sr="wait 0.5s enter top and then ease-in-out 300px" style="background-color:#C8F7C5">
            <h4>The Big Players Do It</h4>
            There’s a reason all the phone companies started adding a “Sent by my iPhone” or “Sent by my Samsung” message to the end of all your outgoing emails (though it’s easy to change those). It’s about creating brand awareness. If these big players think that their brand should be displayed on your emails, why not take advantage of that knowledge and promote your own brand?
        </li>
        <li data-sr="wait 0.5s enter right and then ease-in-out 300px" style="background-color:#FDE3A7">
            <h4>Look Professional</h4>
            You may be working from home in your underpants and eating two-minute noodles, but your email signature doesn’t have to reflect that. Using a professionally designed email signature it sends the right message to your customers, both new and old: “I am professional and you can trust me”. Just leave the bit out about what you are wearing.
        </li>
    </ul>
</div>


<div class="clearfix index-mid row"></div>

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