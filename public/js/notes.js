$(function() {
    $('.notes-list').on('click', '.note-delete', function(){
        console.log('delete: '+$(this).data('id'));
        
        
        var content = '<div class="alert alert-danger"><button class="btn btn-xs btn-success"><span class="glyphicon glyphicon-ok"></span></button>';
        content += '<button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span></button></div>';
        $(this).parents('.actions').append(content);
        
        
    });
});