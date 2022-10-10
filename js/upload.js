//$(".progress").hide();

/*$(document).on('submit', '#uploadForm', function(event) {
    event.preventDefault();
    var theme = $('#theme').val();
    var msg_videos = $('#msg_videos').val();
    var rubrique = $('#rubrique').val();
    var date_video = $('#date_video').val();


    if (theme != '' && msg_videos != '' && rubrique != '' && date_video != '') {
        $(function() {
            $('#uploadForm').ajaxForm({
                beforeSend: function() {
                    $(".progress").show();
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    $('.progress-bar').width(percentComplete + '%');
                    $('.progress-bar').html('<div id="progress-status">' + percentComplete + ' %</div>');

                },
                success: function() {
                    //$(".progress").hide();
                },
                complete: function(response) {
                    $('#msg').html('<h5 class="alert alert-success text-center">Téléchargement terminé...</h5>');
                    $('#uploadForm')[0].reset();
                }
            });

        });
    }
    else
    {
        $('#msg').html('<h5 class="alert alert-danger text-center">Remplissez tous les champs</h5>');
    }




});*/






$(function() {
    $('#uploadForm').ajaxForm({
        beforeSend: function() {
            $(".progress").show();
        },
        uploadProgress: function(event, position, total, percentComplete) {
            $(".progress-bar").width(percentComplete + '%');
            $(".progress-bar").html('<div id="progress-status">' + percentComplete + ' %</div>');

        },
        success: function() {
            //$(".progress").hide();
        },
        complete: function(response) {
            $('#msg').html('<h5 class="alert alert-success text-center">Téléchargement terminé...</h5>');
            $('#uploadForm')[0].reset();
        }
    });
    $(".progress").hide();
});