<?php 
    // check file
    if (!empty($_GET['file'])) {
        $filename = basename($_GET['file']);
        $pathname = 'upload/' . $filename;

        if (!empty($filename) && file_exists($pathname)) {
            // define headers
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$filename");
            header("Content-Type: application/zip");
            header("Content-Transfer-Emcoding: binary");

            readfile($pathname);
            exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Download</title>
</head>
<body>
    <img src="upload/tshit.png" alt="" width="100">
    <a href="index.php?file=tshit.png">download</a>
</body>
</html>