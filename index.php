<?php
session_start();
if(isset($GET['url'])){
    $actual = $GET['url'];
}else{
    $actual = 'inicio';
}
?>
<!DOCTYPE html>
<?php
    $urlBase='http:127.0.0.1/enstehuacan/';
    //$urlBase='http:enstehuacan.com/';
?>
<html>
<head>
    <title><?php echo ucfirst($actual)." |Escuela Normal Superior de Tehuacan"; ?></title>
    <?php require_once "google_seo.php"; ?>
</head>
<body>
    <?php
    include "header.php";

    if (file_exists($actual.".php")) {
        include $actual.".php";
    }
    else {
        include "inicio.php";
    }
    include "footer.php";
    ?>
</body>
</html>