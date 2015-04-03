<script id="mail-sig-tpl" type="text/x-handlebars-template">
    <form id="m-s-t-upload-form" method="post" enctype="multipart/form-data" style="display:none;">
        <input type="file" id="v-t-w-file" onchange="signature._imgChange(event);">
    </form>

    <div class="col-md-4 email-tpl-wrap">
        <div class="e-t-w-container clearfix">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);"></i>

            <img src="<?='http://'.$_SERVER['SERVER_NAME']?>/images/profile.png" width="48" height="48" style="float: left;margin: 3px 10px 3px 0px;cursor:pointer;" onclick="signature._uploadImg(event);" >

            <div style="float:left;">
                <div style="font-size:13px;font-weight: bold;">
                    <span class="edit-ele name" style="margin-right:3px;">{{first-last-name}}</span> /
                    <span class="edit-ele position" style="margin-left:3px;">{{job-position}}</span>
                </div>

                <a class="edit-ele email" href="mailto:{{email}}" style="display:block;font-size:12px;">{{email}}</a>

                <div class="edit-ele c-name" style="font-size:13px;margin-top:5px;">{{company-name}}</div>
                <a class="edit-ele c-link" href="{{company-site}}" target="_blank" style="display:block;font-size:12px;">{{company-site}}</a>
                <button class="btn btn-success btn-xs generate-signature" style="margin-top:10px;" onclick="signature._gen(event);">Generate your signature</button>
            </div>
        </div>
    </div>

    <div class="col-md-4 email-tpl-wrap">
        <div class="e-t-w-container clearfix">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);"></i>

            <img src="<?='http://'.$_SERVER['SERVER_NAME']?>/images/profile.png" width="48" height="48" style="float: left;margin: 3px 10px 3px 0px;" onclick="signature._uploadImg(event);">

            <div style="float:left;">
                <div style="font-size:13px;font-weight: bold;">
                    <span class="edit-ele name" style="margin-right:3px;">{{first-last-name}}</span> /
                    <span class="edit-ele position" style="margin-left:3px;">{{job-position}}</span>
                </div>

                <a class="edit-ele email" href="mailto:{{email}}" style="display:block;font-size:12px;">{{email}}</a>

                <div class="edit-ele c-name" style="font-size:13px;margin-top:5px;">{{company-name}}</div>
                <a class="edit-ele c-link" href="{{company-site}}" target="_blank" style="display:block;font-size:12px;">{{company-site}}</a>
                <button class="btn btn-success btn-xs generate-signature" style="margin-top:10px;" onclick="signature._gen(event);">Generate your signature</button>
            </div>
        </div>
    </div>
</script>

