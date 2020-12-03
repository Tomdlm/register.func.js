<?php

     $pages= scandir('pages/');

     if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){
         $page = $_GET['page'];
     }else{
    $page='Accueil';
     }
     $pages_functions = scandir('function/');
if (in_array($page.'.func.php',$pages_functions)){
    include 'functions/'.$page.'.func.php';
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
<?php
include 'body/topbar.php';
?>

   <div class="container">
       <?php include 'pages/'.$pages.'.php';
       ?>
</div>
<script src"js/jquery.js"></script>
<script src="js/>?php echo $page?>.func.js"> </script>

</body>
</html>
