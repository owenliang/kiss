import "../../common/js/common.js"
import "./edit.css"
import "./edit.html"

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
        height: 400,
        // menubar: false,
        plugins: ['image', 'textcolor', 'lists', 'link', 'table'],
        toolbar: 'insert | undo redo |  formatselect | bold italic forecolor  backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        images_upload_url: '/edit/upload'
    });
})