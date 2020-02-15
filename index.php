<?php  
    
    include_once('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 – Classic editor</title>
    <script type="text/javascript" src="ckeditor5/ckeditor.js"></script>
</head>
<body>
    <h1>Classic editor</h1>
    <!--<div id="editor">
        <p>This is some sample content.</p>
    </div>-->
    <form action="" method="POST">
        <textarea id=editor name="editor"></textarea> 
        <input type="submit" name="submit" value="Submit">
    </form>
    <!-- <script type="javascript" src="/simpleuploadadapter.js"></script> -->
    <script >
        import SimpleUploadAdapter from '@ckeditor/ckeditor5-upload/src/adapters/simpleuploadadapter';

        ClassicEditor
        .create( document.querySelector( '#editor' ), {
        plugins: [ SimpleUploadAdapter],
        simpleUpload: {
            // The URL that the images are uploaded to.
            uploadUrl: 'uploader.php',

            // Headers sent along with the XMLHttpRequest to the upload server.
            //headers: {
              //  'X-CSRF-TOKEN': 'CSFR-Token',
                //Authorization: 'Bearer <JSON Web Token>'
           // }
        }
    } )
    </script>
</body>