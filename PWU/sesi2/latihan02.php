<?php
//area Script Php

$pg = 1;
if(isset($_GET["pg"])){
$pg = $_GET["pg"];
}
switch($pg){
    case 1:
        $konten="<h1>Page 1</h1>";
        $judulpage = "Page 01";
        break;
        case 2:
            $konten="<h1>Page 2</h1>";
            $judulpage = "Page 02";
            break;
            case 3:
                $konten="<h1>Page 3</h1>";
                $judulpage = "Page 03";
                break;
                default:
                $konten="<h1>Page 1</h3>";
                $judulpage = "Page 01";
                break;
            }
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <ul>
        <li><a href="?pg=1">Page 1 </a></li>
        <li><a href="?pg=2">Page 2 </a></li>
        <li><a href="?pg=3">Page 3 </a></li>
    </ul>
    <?=$konten;?>
</body>
</html>