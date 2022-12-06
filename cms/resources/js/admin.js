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
require('../../public/js/tinymce/themes/silver/theme.js');
require('../../public/js/tinymce/icons/default/icons.js');
//Import Plugins
require('../../public/js/tinymce/plugins/autolink/plugin.js');
require('../../public/js/tinymce/plugins/link/plugin.js');
require('../../public/js/tinymce/plugins/image/plugin.js');
require('../../public/js/tinymce/plugins/preview/plugin.js');
require('../../public/js/tinymce/plugins/anchor/plugin.js');
require('../../public/js/tinymce/plugins/insertdatetime/plugin.js');
require('../../public/js/tinymce/plugins/media/plugin.js');
require('../../public/js/tinymce/plugins/paste/plugin.js');
require('../../public/js/tinymce/plugins/imagetools/plugin.js');
//Import Skin things
require('../../public/js/tinymce/skins/ui/oxide/content.min.css');
require('../../public/js/tinymce/skins/ui/oxide/skin.css');
require('../../public/js/tinymce/skins/ui/oxide/content.css');


$(function () {
    $(".datepicker").flatpickr();
    $(".notification").not(".is-permanent").delay(3000).fadeOut(350);
    $("textarea#tiny").tinymce({
        height: 500,
        plugins: [
            "autolink link image preview anchor",
            "insertdatetime media paste imagetools",
        ],
        toolbar:
            "undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image media",
        relative_urls: false,
        remove_script_host: false,
        file_picker_callback : elFinderBrowser,
    });

    function elFinderBrowser (callback, value, meta) {
        tinymce.activeEditor.windowManager.openUrl({
            title: 'Gerenciador de Arquivos',
            url: '/elfinder/tinymce5',
            /**
             * On message will be triggered by the child window
             * 
             * @param dialogApi
             * @param details
             * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
             */
            onMessage: function (dialogApi, details) {
                if (details.mceAction === 'fileSelected') {
                    const file = details.data.file;
                    
                    // Make file info
                    const info = file.name;
                    
                    // Provide file and text for the link dialog
                    if (meta.filetype === 'file') {
                        callback(file.url, {text: info, title: info});
                    }
                    
                    // Provide image and alt text for the image dialog
                    if (meta.filetype === 'image') {
                        callback(file.url, {alt: info});
                    }
                    
                    // Provide alternative source and posted for the media dialog
                    if (meta.filetype === 'media') {
                        callback(file.url);
                    }
                    
                    dialogApi.close();
                }
            }
        });
    }
});
