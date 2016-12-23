<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<head>
    <?php
        include($_SESSION["dir"]. "/view/header.php");
        include($_SESSION["dir"]. "/model/dao-search.php");
        include($_SESSION["dir"]. "/functions-aux.php");
    ?>
</head>

<body data-spy="scroll">

<!-- ******HEADER****** -->
<header id="header" class="header">
    <div class="container">
        <h1 class="logo pull-left">
            <a class="scrollto" href="index.php?p=leishdb.php">
                <span class="logo-title">leishDB</span>
            </a>
        </h1><!--//logo-->
        <nav id="main-nav" class="main-nav navbar-right" role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
            </div><!--//navbar-header-->
            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="index.php?p=leishdb.php">Back page</a></li>
                    <!--<li class="nav-item"><a class="scrollto" href="#license">Works</a></li>-->
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div>
</header><!--//header-->

<section id="about" class="about section">
    <div class="container">
    		<div class="well well-lg">
    			<iframe src="http://regadb.bahia.fiocruz.br:4567/" style="width: 100%; height: 500px" ></iframe>
    		</div>
    </div><!--//container-->
</section><!--//about-->

<?php
include("footer.php");
?>

</body>
</html> 
