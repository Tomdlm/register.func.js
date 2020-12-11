<?php

$pages= scandir('pages/');

if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){
    $page = $_GET['page'];
}else{
    $page='Accueil';
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <meta charset="utf-8">
    <title>Reflex_IT</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body>

<?php include "body/topbar.php"; ?>

    <?php
    include "pages/".$page.".php";
    ?>

<?php
include "body/Footer.php";
?>

<?php include 'pages/'.$pages.'.php'; ?>

<script src"js/jquery.js"></script>

<?php $pages_js = scandir('js/');
if(in_array($page.'.func.js',$pages_js)){ ?>
<script src="js/<?php echo $page?>.func.js"> </script>
<?php
}
?>

</body>
</html>
