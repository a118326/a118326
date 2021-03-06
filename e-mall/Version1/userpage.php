<?php  
	require_once 'php/header.php';
       	require_once 'php/setup.php';

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Mall</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			<a class="navbar-brand" href="#">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    
                    <li>
                        <a href="#buy"><img src="img/cart.png" width="28" height="28"></a>
                        
                    </li>
                    
                    
                    
                   <li>
                        <a href="php/logout.php">Sign Out</a> </li>
                    
                    <?php
                    $result = queryMysql("SELECT * FROM buyers WHERE user='$user'");
                    if($result->num_rows !=0)
                    {
                        while($rows = $result->fetch_assoc())
                        {
                            $fname = $rows['firstname'];
                            echo"<li>
                            <a href='php/userprofile.php'>Hello,$fname</a>";
                        }
                    }
                    else{
                        echo"no result";
                    }
                    
                    ?>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer" align = "center">
            <h1>Welcome To E-Mall</h1>
            
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12" align = "center">
                <h3>FEATURED ITEMS</h3> <br>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/cardborad.png" alt="">
                    <div class="caption">
                        <h3>Google Cardborad</h3>
                        <p>D-scope Pro Google Cardboard Kit with Straps 3D Virtual Reality Compatible with Android and 45mm Lenses HD Visual Experience.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/htcvive.png" alt="">
                    <div class="caption">
                        <h3>HTC Vive VR Set</h3>
                        <p>HTC Vive allows physical movements in virtual space with adjustable headset and wirelss controllers for number of games.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/psvr.png" alt="">
                    <div class="caption">
                        <h3>Playstation VR</h3>
                             <p>Playstation VR uses 5.7” OLED 1080p display, 3D Audio Technology and comes with many componets, Just Plug and Play.</p>

                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
            

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/oculus.png" alt="">
                    <div class="caption">
                        <h3>Oculus VR</h3>
                        <p>Customizable, comfortable, and adaptable, Oculus Rift has advanced display technology and low-latency constellation tracking system.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        
        
        <!-- /.row 1 -->
        
        
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/Acer_Chromebook.png" alt="">
                    <div class="caption">
                        <h3>Acer Chromebook</h3>
                        <p>Acer Chromebook CB3-131-C3SZ 11.6-Inch Laptop (Intel Celeron N2840 Dual-Core Processor,2 GB RAM,16 GB Solid State Drive).</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/Asus_F555LA_AB31.png" alt="">
                    <div class="caption">
                        <h3>Asus F555LA</h3>
                        <p>Asus F555LA-AB31 15.6-Inch Laptop (2.1 GHz Core i3-5010U Processor,4 GB RAM,500 GB Hard Drive, Windows 10).</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/HP_Pavilion_15.6_Inch.png" alt="">
                    <div class="caption">
                        <h3>HP Pavilion</h3>
                        <p>HP Pavilion 15.6 Inch Laptop (Intel Core i5-6200U up to 2.8GHz, 8GB RAM, 1TB HDD, DVD, Wifi, Windows 10 Home).</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/Apple_MacBook_Pro.png" alt="">
                    <div class="caption">
                        <h3>Apple MacBook Pro</h3>
                        <p>Apple MacBook Pro MNQF2LL/A 13-inch Laptop with Touch Bar (2.9GHz dual-core Intel Core i5, 512GB Retina Display).</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
       
        
        
        <!-- /.row 2-->

      
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/Vivo.png" alt="">
                    <div class="caption">
                        <h3>Vivo X6 Plus</h3>
                        <p>VIVO X6 Plus Unlocked Smartphone Android 5.1 Dual 4G MT6752 Octa Core 4GB 64GB 5.7 inch 1920x1080 pixels Dual SIM.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/Huawei.png" alt="">
                    <div class="caption">
                        <h3>Huawei P8</h3>
                        <p>Huawei P8 Lite US Version 5 Android 4G LTE Smartphone Octa Core 1.5GHz, Dual SIM, Gorilla Glass, 13MP Camera.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/iPhone7.png" alt="">
                    <div class="caption">
                        <h3>iPhone 7</h3>
                        <p>Apple iPhone 7 Plus Unlocked Phone 32 GB with 12-megapixel iSight camera with 1080p HD video - US Version (Black)</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/boom.png" alt="">
                    <div class="caption">
                        <h3>Sumsung S7</h3>
                        <p>Samsung Galaxy S7 Factory Unlocked Phone 32 GB - Internationally sourced (EU/LATAM) version G930F- Platinum Gold.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        
       <!-- /.row 3 -->

        

        <hr>

        
        <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About E-Mall</h2>
                <p>Text   NEED TO CHANGE ALL CLASSES AND VARIABLES ALSO NEW CONNECTIONS <a href="http://fau.edu" target="_blank">Florida Atlantic University.</a></p>
            </div>
        </div>
    </section>
        
        
        <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Us</h2>
                <p>Some Info here</p>
            </div>
        </div>
    </section>
        
        
        
        
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<!-- gggg-->
</body>

</html>
