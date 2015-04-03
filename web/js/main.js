// signature controller javascript
var signature = (function($){
    /**
     * make content editable
     * @return {[type]} [description]
     */
    var _editTpl = function(event){
        var $obj = $(event.target),
            editEle = $obj.closest('.email-tpl-wrap').find('.edit-ele');

        var editAttr = editEle.attr('contenteditable');
        if(editAttr == "true"){
            editEle.attr('contenteditable', false);
        }else{
            editEle.attr('contenteditable', true);
        }
    }

    /**
     * generate signature html
     * @param  {[type]} event [description]
     * @return {[type]}       [description]
     */
    var _gen = function(event){
        var $obj = $(event.target),
            data = $obj.closest('.email-tpl-wrap').html();

        var $data = $(data);
        // remove button and fa
        $data.find('button, .fa').remove();

        // change email link
        $data.find('.email').attr('href',  'mailto:'+$data.find('.email').html());
        // change company link
        $data.find('.c-link').attr('href',  $data.find('.c-link').html());

        // get content
        data = $data.wrap('<div>').parent().html();
        // remove space
        data = data.replace(/(\n|\r|\s\s+)/gm,"");

        // initalize popup
        $.magnificPopup.open({
            items: {
                src:    '<div class="white-popup"> \
                            <h2>Copy html to your mail signature</h2> \
                            <textarea class="gen-sig-content">' +data+ '</textarea> \
                        </div>',
                type: 'inline'
            },
            closeBtnInside: true
        });
    }

    /**
     * upload custom profile image
     * @param  {[type]} event [description]
     * @return {[type]}       [description]
     */
    var _uploadImg = function(event){
        $('.uploading').removeClass();
        $('#v-t-w-file').trigger('click');
        $(event.target).addClass('uploading');
    }

    /**
     * profile image upload
     * @return {[type]} [description]
     */
    var _imgChange = function(event){
        var fileInput = document.getElementById('v-t-w-file');
        var file = fileInput.files[0];

        var formData= new FormData();
        formData.append("image", file);

        $.ajax({
            url: "/index.php?r=signature/upload", 
            type: "POST",
            data: formData,
            dataType : 'json',
            processData: false,
            contentType: false,
        }).done(function(res){
            if(res.public_id != ''){
                $('.uploading').attr('src', res.url);
            }
        });
    }

    return {
        _editTpl : _editTpl,
        _gen : _gen,
        _uploadImg : _uploadImg,
        _imgChange : _imgChange
    }
})(window.jQuery);

