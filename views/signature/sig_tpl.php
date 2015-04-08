<script id="mail-sig-tpl" type="text/x-handlebars-template">
    <form id="m-s-t-upload-form" method="post" enctype="multipart/form-data" style="display:none;">
        <input type="file" id="v-t-w-file" onchange="signature._imgChange(event);">
    </form>

    <div class="col-md-4 email-tpl-wrap">
        <div class="e-t-w-container clearfix" style="position:relative;padding:20px;box-shadow: 0 1px 2px #ccc;max-width:300px;">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);"></i>

            <img src="/images/profile.png" width="60" height="60" style="float: left;margin: 3px 20px 3px 0px;cursor:pointer;border-radius:50%;" onclick="signature._uploadImg(event);" >

            <div style="float:left;">
                <div class="edit-ele name" style="font-size:14px;font-weight: bold;color:#E26A6A;">
                    {{first-last-name}}
                </div>

                <div class="edit-ele position" style="font-size:13px;margin-top:5px;color:#67809F;">
                    {{job-position}}
                </div>

                <div style="margin-top:5px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">email:</span>
                    <a style="margin-left:3px;display:inline-block;font-size:13px;color:#67809F;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
                </div>

                <div style="margin-top:5px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">website:</span>
                    <a class="edit-ele c-link" href="{{website}}" target="_blank" style="margin-left:3px;display:inline-block;font-size:13px;color:#67809F;padding-right:10px;">{{website}}</a>
                </div>

                 <div>
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">phone:</span>
                    <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#67809F;">{{phone}}</span>
                </div>  

                <button class="btn btn-success btn-xs generate-signature clearfix" style="margin-top:10px;" onclick="signature._gen(event);">Generate your signature</button>
            </div>
        </div>
    </div>

    <div class="col-md-4 email-tpl-wrap">
        <div class="e-t-w-container" style="position:relative;padding:20px;box-shadow: 0 1px 2px #ccc;border-radius:5px;max-width:300px;">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);"></i>

            <div style="padding-left:0px;border-left:5px solid #3EAADD;">
                <img src="/images/profile.png" width="60" height="60" style="margin: 10px 10px 10px 20px;cursor:pointer;border-radius:50%;" onclick="signature._uploadImg(event);" >

                <div class="edit-ele name" style="margin-left:20px;font-size:14px;font-weight: bold;color:#E26A6A;">
                    {{first-last-name}}
                </div>

                <div class="edit-ele position" style="margin-left:20px;font-size:13px;margin-top:5px;color:#67809F;">
                    {{job-position}}
                </div>

                <div style="margin-top:5px;margin-left:20px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">email:</span>
                    <a style="display:inline-block;font-size:13px;color:#67809F;padding-right:10px;margin-left:3px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
                </div>

                <div style="margin-left:20px;margin-top:5px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">website:</span>
                    <a class="edit-ele c-link" href="{{website}}" target="_blank" style="margin-left:3px;display:inline-block;font-size:13px;color:#67809F;padding-right:10px;">{{website}}</a>
                </div>

                 <div style="margin-left:20px;margin-bottom:10px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">phone:</span>
                    <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#67809F;">{{phone}}</span>
                </div>  
            </div>

            <button class="btn btn-success btn-xs generate-signature clearfix" style="margin-top:10px;" onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>

    <div class="col-md-4 email-tpl-wrap">
        <div class="e-t-w-container clearfix" style="border-radius:5px 5px 0 0;position:relative;padding:20px 0 0;box-shadow: 0 1px 2px #ccc;max-width:300px;">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);"></i>

            <div class="edit-ele name" style="color:#E26A6A;font-size:14px;font-weight: bold;margin-left:20px;">
                {{first-last-name}}
            </div>

            <div class="edit-ele position" style="color:#67809F;font-size:13px;margin-top:5px;margin-left:20px;">
                {{job-position}}
            </div>

            <img src="/images/profile.png" width="60" height="60" style="margin: 20px 10px 20px 20px;border-radius:50%;cursor:pointer;" onclick="signature._uploadImg(event);">

            <div style="background-color:#3EAADD;padding:10px 20px 25px 10px;">
                <div>
                    <span style="display:inline-block;font-size:12px;color:#E4F1FE;">email:</span>
                    <a style="color:#ECF0F1;margin-left:3px;display:inline-block;font-size:13px;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
                </div>
              
                <div style="margin-top:5px;">
                    <span style="display:inline-block;font-size:12px;color:#E4F1FE;">website:</span>
                    <a class="edit-ele c-link" href="{{website}}" target="_blank" style="color:#ECF0F1;margin-left:3px;display:inline-block;font-size:13px;padding-right:10px;">{{website}}</a>
                </div>

                 <div>
                    <span style="display:inline-block;font-size:12px;color:#E4F1FE;">phone:</span>
                    <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#ECF0F1;">{{phone}}</span>
                </div>      
            </div>      

            <button class="btn btn-success btn-xs generate-signature clearfix" style="margin: 20px 0 10px 20px;" onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>
</script>

