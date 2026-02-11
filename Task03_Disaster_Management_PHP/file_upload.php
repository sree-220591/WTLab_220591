<?php
session_start();

if(isset($_POST['upload'])){
    $fileName = $_FILES['user_file']['name'];
    $fileTmp  = $_FILES['user_file']['tmp_name'];
    $fileSize = $_FILES['user_file']['size'];
    $fileErr  = $_FILES['user_file']['error'];

    $allowedExt = ['pdf','doc','docx','jpg','jpeg','png'];

    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if($fileErr !== 0){
        die("Error uploading file");
    }

    if(!in_array($fileExt, $allowedExt)){
        die("File type not allowed");
    }

    if($fileSize > 5 * 1024 * 1024){
        die("File size exceeds limit");
    }
        $allowedExt = ['pdf','doc','docx','jpg','jpeg','png'];

    
    $newFileName = uniqid("FILE_", true) . "." . $fileExt;
    $uploadPath = "uploads/" . $newFileName;

    if(move_uploaded_file($fileTmp, $uploadPath)){
        echo "File uploaded successfully";
    } else {
        die("Error moving uploaded file");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploads | HAnds iN neeD</title>
    <style>
        .file_upload_container{
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #0098beff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="file-upload-container">
        <h2> User Document Portal</h2>
        <p> Upload and manage your files here </p>
        
    </div>
    <div>
        <form action='file_upload.php' method='POST' enctype='multipart/form-data'>
            <input type='file' name='user_file' required>
            <button type='submit' name='upload'>Upload</button>
        </form>

    </div>

</body>
</html>