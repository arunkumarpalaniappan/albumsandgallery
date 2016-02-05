<?php
  if(isset($_GET['album']))
  {
    $album = $_GET['album'];
  }
  else {
    $album="";
  }
 ?>
<!DOCTYPE HTML>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.fileupload.css">
</head>
<body>
<div class="container">
    <input id='album' type="text" value="<?php echo $album;?>" placeholder="Album Name" hidden>
    <input id='name' type="text" hidden ></br>
    <input id='title' type="text" placeholder="Title" ></br></br>
    <textarea id='desc'></textarea></br></br>
    <span class="btn btn-success fileinput-button" id='uploaddiv'>
        <i class="glyphicon glyphicon-file"></i>
        <span id='butn'>Select files...</span>
        <input id="fileupload" type="file" name="files[]" >
    </span>
    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    <div id='file'></div></br>
    <input type="button" id='submitbt' class="btn btn-success fileinput-button" onclick="addPhoto()" value="Submit" disabled>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/vendor/jquery.ui.widget.js"></script>
<script src="js/jquery.iframe-transport.js"></script>
<script src="js/jquery.fileupload.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function onPhotoUploaded(response)
{
  alert(response);
}
function addPhoto()
{
  var album = $('#album').val();
  var title = $('#title').val();
  var desc = $('#desc').val();
  var name = $('#name').val();
  $.ajax({
              url: '../../api/php/addPhoto.php',
              data: 'album='+album+'&title='+title+'&description='+desc+'&filename='+name,
              type: 'post',
              success:function(response) {
                   onPhotoUploaded(response);
              }
    });
}
$(function () {
        var url = 'server/php/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
    //            $('<p/>').text(file.name).appendTo('#files');
          $('#name').val(file.name);
          $('#butn').html('Change File...');
          $('#file').html(file.name);
          $('#submitbt').prop('disabled', false);
            });
        },
        progressall: function (e, data) {
           var progress = parseInt(data.loaded / data.total * 100, 10);
           $('#progress .progress-bar').css(
               'width',
               progress + '%'
           );
       }
    })
  });
</script>
</body>
</html>
