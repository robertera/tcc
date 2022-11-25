window.$ = window.jQuery = require('jquery');

const tinymce = require('tinymce/tinymce')

require('datatables.net');
require('datatables.net-buttons');
require('datatables-bulma');
require('../../vendor/yajra/laravel-datatables-buttons/src/resources/assets/buttons.server-side.js');

$(function() {
  $(".datepicker").flatpickr();
  $('.notification').not('.is-permanent').delay(3000).fadeOut(350);
  $('#editor').tinymce({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ]
  });
  $('.file-input').on('change', function () {
    $(this).parent().find('.file-name').removeClass('is-hidden').text(this.value.replace(/.*[\/\\]/, ''));
  });
  feather.replace();
});
