import "../css/common.css"

// 刷新页面
export function reload() {
    location.reload()
}

// 重定向
export function redirect(url, params) {
    var querystring = ''
    if (params) {
        var arr = []
        for (var key in params) {
            var value = params[key]
            arr.push(encodeURIComponent(key) + "=" + encodeURIComponent(value))
        }
        querystring = '?' + arr.join('&')
    }
    location.href = url + querystring
}