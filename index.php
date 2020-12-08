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

        <?php include 'Body/topbar.php';?>
        <?php include 'Body/fond.php';?>
        <?php include 'Body/Footer.php'; ?>

   <div class="container">
       <div class="search-box">
           <input type="text" class="search" placeholder="Rechercher" style="...">
            <button type="submit" class="search-btn">
                <i class="fa fa-search"></i>
            </button>
       </div>
   </div>
       <?php include 'pages/'.$pages.'.php'; ?>
<script src"js/jquery.js"></script>
<?php $pages_js = scandir('js/');
    if(in_array($page.'.func.js',$pages_js)){
        ?>
<script src="js/<?php echo $page?>.func.js"> </script>
<?php
}
?>

</body>
</html>
