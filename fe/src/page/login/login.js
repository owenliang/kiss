import "../../common/js/common.js"
import "./login.css"
import "./login.html"

import { redirect} from "../../common/js/common";

$(document).ready(function() {
    $('#login-btn').on('click', function() {
        var username = $.trim($('#username').val())
        var password = $.trim($('#password').val())
        if (!username || !password) {
            alert('账号密码不能为空');
            return
        }

        function login_fail(msg) {
            alert(msg);
        }

        $.ajax({
            url: '/admin/login',
            dataType: 'json',
            method: 'post',
            data: {
                username: username,
                password: password,
            },
            success: function(response) {
                if (response.errno != 0) {
                    login_fail(response.msg)
                } else {
                    redirect('/list');
                }
            },
            error: function() {
                login_fail('网络异常')
            },
        });
    })
})