<!DOCTYPE html>
<?php session_start(); 
    
?>
 <html> 
 	<head> 
 		<title>Adibat | Home</title> 
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
 		<!-- Bootstrap --> 
		<link href="scripts/css/bootstrap.css" rel="stylesheet">
        <link href="scripts/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">
        <link href="scripts/metisMenu/src/metisMenu.css" rel="stylesheet">
		<link href="scripts/css/style.css" rel="stylesheet">

 	</head>
 	<body id="Home"> 
        <section class="container-fluid" >
             <div class="row" style="background-color:#404344; margin-bottom:20px;">
                <div class="col-lg-4 col-md-offset-7">
                    <?php include('head.php');?>
                </div>
              </div>   
        </section>
 		<section class="container">
 			<div class="row">
                <div class="col-lg-1">
                    
                </div>
                <div class="col-lg-9">
                    <div class="row" style="margin-bottom:10px;">
                        <?php include('banner.php'); ?>
                    </div>
                    <div class="row">
                        <?php include('cartage_heading.php'); ?>
                    </div> 
                   
                    <div class="row" id="cartcont">
                        <?php// include('cartage.php'); ?>
                    </div> 

                </div>
                <div class="col-lg-2"></div>
				
			</div><!--content-->
 		</section><!--container-->
        <section class="container-fluid" >
             <div class="row" style="background-color:#404344;">
                    <?php include('footer.php'); ?>
              </div>   
        </section>
 		<script src="scripts/js/jquery-1.9.1.min.js"></script>
 		<script src="scripts/js/bootstrap.js"></script>
        <script src="scripts/metisMenu/src/metisMenu.js"></script>
        <script src="scripts/js/myjs.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#cartcont').load('cartage.php');
            });
        </script>

 	</body
 ></html>