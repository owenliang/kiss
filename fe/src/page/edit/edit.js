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

import { reload, redirect} from "../../common/js/common";

$(document).ready(function() {
    // 离开页面提示
    var unload_funcs = (function () {
        var changed = false

        $(window).bind('beforeunload', function () {
            if (changed) {
                return '您可能有数据没有保存';
            }
        });

        return {
            notify_changed: function () {
                changed = true;
            },
            clear_changed: function () {
                changed = false;
            }
        }
    })();

    // 富文本编辑器
    tinymce.init({
        selector: '#tinymce-container',
        skin_url: '/tinymce/skin',
        height: 500,
        // menubar: false,
        plugins: ['image', 'textcolor', 'lists', 'link', 'table'],
        toolbar: 'insert | undo redo |  formatselect | bold italic forecolor  backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        images_upload_url: '/edit/upload',
        init_instance_callback: function (editor) {
            editor.on('Change', function (e) {
                unload_funcs.notify_changed()
            })
        }
    });

    // 标题编辑
    $('#article-title').on('change', function() {
        unload_funcs.notify_changed()
    })

    // 保存按钮
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
            url: '/edit/save-article',
            dataType: 'json',
            method: 'post',
            data: {
                article_id: article_id,
                article_title: article_title,
                article_content: article_content,
            },
            success: function(response) {
                unload_funcs.clear_changed()
                redirect('/edit', {id: response.data.id});
            },
            error: function() {
                alert('网络异常');
            },
        });
    })

    // 发布 按钮
    $('#pub-btn').on('click', function() {
        var article_id = $('#article-id').val()
        article_id = article_id ? article_id : 0
        var article_title = $.trim($('#article-title').val())
        var article_content = tinymce.activeEditor.getContent()
        if (!article_title) {
            alert('标题为空');
            return;
        }

        // 保存并发布文章
        $.ajax({
            url: '/edit/pub-article',
            dataType: 'json',
            method: 'post',
            data: {
                article_id: article_id,
                article_title: article_title,
                article_content: article_content,
            },
            success: function(response) {
                unload_funcs.clear_changed()
                redirect('/edit', {id: response.data.id});
            },
            error: function() {
                alert('网络异常');
            },
        });
    })

    // 撤回文章
    $('#unpub-btn').on('click', function() {
        var article_id = $('#article-id').val()
        // 撤回文章
        $.ajax({
            url: '/edit/unpub-article',
            dataType: 'json',
            method: 'post',
            data: {
                article_id: article_id,
            },
            success: function() {
                unload_funcs.clear_changed()
                redirect('/edit', {id: article_id})
            },
            error: function() {},
        });
    })
})
