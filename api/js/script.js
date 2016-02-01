function getAlbumNames(successFunction)
{
   $.ajax({
               url: 'http://localhost/Freelancer/AlbumandGalary/api/php/getAlbumNames.php',
               type: 'post',
           success:function(response) {
                   successFunction(response);
               }
     });
  }
  function addAlbumName(name,successFunction)
  {
    $.ajax({
                url: 'http://localhost/Freelancer/AlbumandGalary/api/php/addAlbumName.php',
                data: 'name='+name,
                type: 'post',
            success:function(response) {
                     loginAction(response);
                }
      });
  }
