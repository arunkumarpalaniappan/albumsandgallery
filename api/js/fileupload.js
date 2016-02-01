function myUpload(obj)
{
  $('#imageupload').ajaxSubmit({
        type: "POST",
      url: '../php/fileupload.php',
        data: $('#imageupload').serialize(),
        cache: false,
        success: function (response) {
            alert(response);
        }

    });
  /*var x = document.getElementById(obj.file.id);
    var filename = "";
    var filesize = "";
    var filealbum = document.getElementById(obj.album.id);
    var filecategory = document.getElementById(obj.category.id);
    if ('files' in x) {
        if (x.files.length == 0) {
            alert("Select one or more files.");
        } else {
            for (var i = 0; i < x.files.length; i++) {
                var file = x.files[i];
                if ('name' in file) {
                    filename = file.name ;
                }
                if ('size' in file) {
                    filesize = file.size ;
                }
            }
        }
    }
    else {
        if (x.value == "") {
          alert( "Select one or more files.");
        } else {
            alert("The files property is not supported by your browser!");
            alert("The path of the selected file: " + x.value);
        }
    }
    alert(filename);
    alert(filesize);*/
}
