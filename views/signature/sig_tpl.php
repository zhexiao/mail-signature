<script id="mail-sig-tpl" type="text/x-handlebars-template">
    <form id="m-s-t-upload-form" method="post" enctype="multipart/form-data" style="display:none;">
        <input type="file" id="v-t-w-file" onchange="signature._imgChange(event);">
    </form>

    <div class="col-md-4 email-tpl-wrap">
        <div class="e-t-w-container clearfix">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);"></i>

            <img src="<?='http://'.$_SERVER['SERVER_NAME']?>/images/profile.png" width="60" height="60" style="float: left;margin: 3px 10px 3px 0px;cursor:pointer;border-radius:50%;" onclick="signature._uploadImg(event);" >

            <div style="float:left;">
                <div class="edit-ele name" style="font-size:14px;font-weight: bold;">
                    {{first-last-name}}
                </div>

                <div class="edit-ele position" style="font-size:13px;margin-top:5px;">
                    {{job-position}}
                </div>

                <div style="margin-top:5px;">
                    <span style="display:inline-block;font-size:12px;color:#5696BC;">email:</span>
                    <a style="display:inline-block;font-size:13px;color:#000;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
                </div>

                <div>
                    <span style="display:inline-block;font-size:12px;color:#5696BC;">website:</span>
                    <a class="edit-ele c-link" href="{{website}}" target="_blank" style="display:inline-block;font-size:13px;color:#000;padding-right:10px;">{{website}}</a>
                </div>

                 <div>
                    <span style="display:inline-block;font-size:12px;color:#5696BC;">phone:</span>
                    <span class="edit-ele phone" style="display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;">{{phone}}</span>
                </div>  

                <button class="btn btn-success btn-xs generate-signature clearfix" style="margin-top:10px;display:block;" onclick="signature._gen(event);">Generate your signature</button>
            </div>
        </div>
    </div>

    <div class="col-md-4 email-tpl-wrap">
        <div class="e-t-w-container clearfix">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);"></i>

            <div style="float:left;padding-left:0px;border-left:5px solid #E04836;">
                <img src="<?='http://'.$_SERVER['SERVER_NAME']?>/images/profile.png" width="60" height="60" style="margin: 0px 10px 10px 10px;cursor:pointer;border-radius:50%;" onclick="signature._uploadImg(event);" >

                <div class="edit-ele name" style="margin-left:10px;font-size:14px;font-weight: bold;">
                    {{first-last-name}}
                </div>

                <div class="edit-ele position" style="margin-left:10px;font-size:13px;margin-top:5px;">
                    {{job-position}}
                </div>

                <div style="margin-top:5px;margin-left:10px;">
                    <span style="display:inline-block;font-size:12px;color:#5696BC;">email:</span>
                    <a style="display:inline-block;font-size:13px;color:#000;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
                </div>

                <div style="margin-left:10px;">
                    <span style="display:inline-block;font-size:12px;color:#5696BC;">website:</span>
                    <a class="edit-ele c-link" href="{{website}}" target="_blank" style="display:inline-block;font-size:13px;color:#000;padding-right:10px;">{{website}}</a>
                </div>

                 <div style="margin-left:10px;">
                    <span style="display:inline-block;font-size:12px;color:#5696BC;">phone:</span>
                    <span class="edit-ele phone" style="display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;">{{phone}}</span>
                </div>  
            </div>

            <div class="clearfix"></div>

            <button class="btn btn-success btn-xs generate-signature clearfix" style="margin-top:10px;display:block;" onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>

    <div class="col-md-4 email-tpl-wrap">
        <div class="e-t-w-container clearfix">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);"></i>

            <div class="edit-ele name" style="font-size:14px;font-weight: bold;">
                {{first-last-name}}
            </div>

            <div class="edit-ele position" style="font-size:13px;margin-top:5px;">
                {{job-position}}
            </div>

            <img src="<?='http://'.$_SERVER['SERVER_NAME']?>/images/profile.png" width="60" height="60" style="margin: 5px 10px 5px 0px;border-radius:50%;cursor:pointer;" onclick="signature._uploadImg(event);">

            <div style="margin-top:5px;">
                <span style="display:inline-block;font-size:12px;color:#5696BC;">email:</span>
                <a style="display:inline-block;font-size:13px;color:#000;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
            </div>
          
            <div>
                <span style="display:inline-block;font-size:12px;color:#5696BC;">website:</span>
                <a class="edit-ele c-link" href="{{website}}" target="_blank" style="display:inline-block;font-size:13px;color:#000;padding-right:10px;">{{website}}</a>
            </div>

             <div>
                <span style="display:inline-block;font-size:12px;color:#5696BC;">phone:</span>
                <span class="edit-ele phone" style="display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;">{{phone}}</span>
            </div>            

            <button class="btn btn-success btn-xs generate-signature clearfix" style="margin-top:10px;display:block;" onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>

    <div class="col-md-4 email-tpl-wrap">
        <div class="e-t-w-container clearfix">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);"></i>

            <div class="edit-ele name" style="font-size:14px;font-weight: bold;">
                {{first-last-name}}
            </div>

            <div class="edit-ele position" style="font-size:13px;margin-top:5px;">
                {{job-position}}
            </div>

            <img src="<?='http://'.$_SERVER['SERVER_NAME']?>/images/profile.png" width="60" height="60" style="margin: 5px 10px 5px 0px;cursor:pointer;border-radius:50%;" onclick="signature._uploadImg(event);">

            <div style="border: 1px solid #dfdfdf;background:#EAEEF3;color:#333;font-size:13px;padding:10px;text-align:center;border-radius:5px;margin-top:5px;" class="edit-ele">
                {{intro}}
            </div>

            <div style="margin-top:10px;">
                <span style="display:inline-block;font-size:12px;color:#5696BC;">email:</span>
                <a style="display:inline-block;font-size:13px;color:#000;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
            </div>

             <div>
                <span style="display:inline-block;font-size:12px;color:#5696BC;">phone:</span>
                <span class="edit-ele phone" style="display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;">{{phone}}</span>
            </div> 

            <button class="btn btn-success btn-xs generate-signature clearfix" style="margin-top:10px;display:block;" onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>
</script>

