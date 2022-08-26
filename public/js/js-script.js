$(function () {

   $('.btnInsertData').on('click', function () {
      $('#formLabel').html('Create New Articles')
      $('.modal-footer button[type=submit]').html('Submit')

      $('#title').val('');
      $('#category').val('');
      $('#text_body').val('');
   });


   $('.updateView').on('click', function () {
      $('#formLabel').html('Update New Articles')
      $('.modal-footer button[type=submit]').html('Save Changes')
      $('.modal-body form').attr('action', 'http://localhost/phpsubmission/public/article/editdata')


      const id = $(this).data('id');


      $.ajax({
         url: 'http://localhost/phpsubmission/public/article/getedit',
         data: { id: id },
         method: 'post',
         dataType: 'json',
         success: function (data) {
            $('#title').val(data.title),
               $('#category').val(data.category),
               $('#text_body').val(data.text_body),
               $('#id').val(data.id);
         }
      })
   });


});