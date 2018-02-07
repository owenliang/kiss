import "../../common/js/common.js"
import "./login.css"
import "./login.html"

import { reload, redirect} from "../../common/js/common";

$(document).ready(function() {
    $('#login-btn').on('click', function() {
        var username = $.trim($('#username').val())
        var password = $.trim($('#password').val())
        if (!username || !password) {
            alert('账号密码不能为空');
            return
        }

        $.ajax({
            url: '/admin/login',
            dataType: 'json',
            method: 'post',
            data: {
                username: username,
                password: password,
            },
            success: function() { },
            error: function() {  },
        });
    })
})