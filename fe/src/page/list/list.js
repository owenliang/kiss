import "../../common/js/common.js"
import "./list.css"
import "./list.html"
import "../../common/css/be_common.css"

import { reload, redirect} from "../../common/js/common";

$(document).ready(function() {
    // 编辑按钮
    $('.edit-btn').on('click', function() {
        var article_id = $(this).parents('tr').children('.article-id').text()
        redirect('/edit', {id: article_id})
    })

    // 删除按钮
    $('.del-btn').on('click', function() {
        var article_id = $(this).parents('tr').children('.article-id').text()
        var article_title = $(this).parents('tr').children('.article-title').text()
        if (confirm('确认删除：' + article_title))  {
            $.ajax({
                url: '/list/delete-article',
                dataType: 'json',
                method: 'post',
                data: {
                    article_id: article_id,
                },
                success: function() {
                    reload()
                },
                error: function() {
                    alert('网络异常')
                },
            });
        }
    })
})