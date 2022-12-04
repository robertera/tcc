window.$ = window.jQuery = require("jquery");

const flatpickr = require("flatpickr");
const feather = require("feather-icons");

require("datatables.net");
require("datatables.net-buttons");
require("datatables-bulma");
require("../../vendor/yajra/laravel-datatables-buttons/src/resources/assets/buttons.server-side.js");
//Import Tinymce and Jquery
require("../../public/js/tinymce/tinymce.min.js");
require("../../public/js/tinymce/jquery.tinymce.js");
//Import Visual Things
require("../../public/js/tinymce/themes/silver/theme.js");
require("../../public/js/tinymce/icons/default/icons.js");
//Import Plugins
require("../../public/js/tinymce/plugins/autolink/plugin.js");
require("../../public/js/tinymce/plugins/link/plugin.js");
require("../../public/js/tinymce/plugins/image/plugin.js");
require("../../public/js/tinymce/plugins/preview/plugin.js");
require("../../public/js/tinymce/plugins/anchor/plugin.js");
require("../../public/js/tinymce/plugins/insertdatetime/plugin.js");
require("../../public/js/tinymce/plugins/media/plugin.js");
require("../../public/js/tinymce/plugins/paste/plugin.js");
require("../../public/js/tinymce/plugins/imagetools/plugin.js");
//Import Skin things
require("../../public/js/tinymce/skins/ui/oxide/content.min.css");
require("../../public/js/tinymce/skins/ui/oxide/skin.css");
require("../../public/js/tinymce/skins/ui/oxide/content.css");

$(function () {
    $(".datepicker").flatpickr();
    $(".notification").not(".is-permanent").delay(3000).fadeOut(350);
    var editor_config = {
        path_absolute: "/",
        selector: "textarea#tiny",
        height: 500,
        plugins: [
            "autolink link image preview anchor",
            "insertdatetime media paste imagetools",
        ],
        toolbar:
            "undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image media",
        file_picker_callback: function (callback, value, meta) {
            var x =
                window.innerWidth ||
                document.documentElement.clientWidth ||
                document.getElementsByTagName("body")[0].clientWidth;
            var y =
                window.innerHeight ||
                document.documentElement.clientHeight ||
                document.getElementsByTagName("body")[0].clientHeight;

            var cmsURL =
                editor_config.path_absolute +
                "laravel-filemanager?editor=" +
                meta.fieldname;
            if (meta.filetype == "image") {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.openUrl({
                url: cmsURL,
                title: "Filemanager",
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no",
                onMessage: (api, message) => {
                    callback(message.content);
                },
            });
        },
    };
    tinymce.init(editor_config);
});
