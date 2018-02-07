import "../../common/js/common.js"
import "./edit.css"
import "./edit.html"

import "../../common/css/be_common.css"

import tinymce from "tinymce/tinymce.min.js"
import "tinymce/themes/modern/index.js"
import "tinymce/plugins/image"
import "tinymce/plugins/autolink"
import "tinymce/plugins/textcolor"
import "tinymce/plugins/lists"
import "tinymce/plugins/link"
import "tinymce/plugins/table"

$(document).ready(function() {
    tinymce.init({
        selector: '#tinymce-container',
        skin_url: '/tinymce/skin',
        height: 500,
        // menubar: false,
        plugins: ['image', 'textcolor', 'lists', 'link', 'table'],
        toolbar: 'insert | undo redo |  formatselect | bold italic forecolor  backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        images_upload_url: '/edit/upload'
    });

    $('#save-article').on('click', function() {
        var article_id = $('#article-id').val()
        article_id = article_id ? article_id : 0
        var article_title = $.trim($('#article-title').val())
        var article_content = tinymce.activeEditor.getContent()
        if (!article_title) {
            alert('标题为空');
            return;
        }
        // 提交保存博客
        $.ajax({
            url: '/save_article',
            dataType: 'json',
            method: 'post',
            data: {
                article_id: article_id,
                article_title: article_title,
                article_content: article_content,
            },
            success: function() {},
            error: function() {},
        });
    })
})
