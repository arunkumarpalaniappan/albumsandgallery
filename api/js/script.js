function getAlbumNames(successFunction)
{
   $.ajax({
               url: '../api/php/getAlbumNames.php',
               type: 'post',
           success:function(response) {
                   successFunction(response);
               }
     });
  }
  function addAlbumName(name,successFunction)
  {
    $.ajax({
                url: '../api/php/addAlbumName.php',
                data: 'name='+name,
                type: 'post',
            success:function(response) {
                     loginAction(response);
                }
      });
  }
  function uploadFile(data,successFunction)
  {
    $.ajax({
                url: '../api/php/uploadFile.php',
                data: data,
                type: 'post',
                success:function(response) {
                   successFunction(response);
                }
      });
  }
