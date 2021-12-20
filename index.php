<?php

if(isset($_POST['submit'])){
    
$servername = "localhost";
$username = "carstore";
$password ="";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bookingform", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


$full_name=$_POST['full_name'];
    $phone_number=$_POST['phone_number'];
    $emaile=$_POST['emaile'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $name_on_card=$_POST['name_on_card'];
    $credit_card_numbre=$_POST['credit_card_numbre'];
    $CVV=$_POST['CVV'];
    $product_id=$_POST['product_id'];
    $content=$_POST['content'];

// customer table
    $pdoQuery="INSERT INTO `customer`(`full_name`, `phone_numbre`, `emaile`, `address`, `city`) 
    VALUES (:full_name,:phone_number,:emaile,:address,:city)";
    $pdoResult=$conn->prepare($pdoQuery);
    $pdoExec=$pdoResult->execute(array(":full_name"=>$full_name,":phone_number"=>$phone_number,":emaile"=>$emaile,":address"=>$address,":city"=>$city));
    
//payment table
$pdoQuery="INSERT INTO `payment`( `name_on_card`, `credit_card_numbre`, `CVV`)
    VALUES (:name_on_card,:credit_card_numbre,:CVV)";
    $pdoResult=$conn->prepare($pdoQuery);
    $pdoExec2=$pdoResult->execute(array(":name_on_card"=>$name_on_card,":credit_card_numbre"=>$credit_card_numbre,":CVV"=>$CVV));
    
//message table 

$pdoQuery="INSERT INTO `message`(`content`) 
    VALUES (:content)";
    $pdoResult=$conn->prepare($pdoQuery);
    $pdoExec3=$pdoResult->execute(array(":content"=>$content));

    //order details table
    $pdoQuery="INSERT INTO `orders_detail`(`product_id`)
    VALUES (:product_id)";
    $pdoResult=$conn->prepare($pdoQuery);
    $pdoExec3=$pdoResult->execute(array(":product_id"=>$product_id));


    //check if the car id exist 

}







    /*
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bookingform", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}




// validation

$status="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $full_name=$_POST['full_name'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $cardname=$_POST['cardname'];
    $cardnum=$_POST['cardnumber'];
    $cvv=$_POST['cvv'];
    $product=$_POST['product'];
    if(empty($name)||empty($phone)||empty($email)||empty($address)||
    empty($city)||empty($cardname)||empty($cardnum)||empty($cvv)){
        $status ="All fields are compulsory";
    }
    else{
        $sql ="INSERT INTO customer (full_name , phone_number ,email,address, city) VALUES(:fill_name,:phone_number,:email,:address,:city)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute(['full_name'=>$full_name,'phone_number'=>$phone_number,'email'=>$email,'address'=>$address,'city'=>$city]);
    $status="booked successfully";
    $full_name="";
    $phone_number="";
    $email="";
    $address="";
    $city="";
    }

    
}
*/


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite cars</title>
    <!--=============== Google fonts ============= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <!--  BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="favicon.png" rel="icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <!--============== Font Awesome=========== -->

    <link rel="stylesheet" href="all.min.css">

    <!--=============== Google fonts ============= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- ==============Main Template CSS file ============ -->

    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <!--==========================
    Header
============================-->
    <header id="header" class="header">
        <div class="container-fluid">

            <nav class="nav" id="nav">
                <div class="logo" id="logo" class="pull-left">
                    <h1><a href="" class="scrollto" title="Car Database API">Elite
                            cars</a>
                    </h1>

                </div>
                <ul class="nav-menu">
                    <li class="#home"><a href="#intro">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Features</a></li>
                    <li><a href="#portfolio">Gallery</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#booking_form">booking form</a></li>
                </ul>
            </nav>
        </div>
        <section class="home" id="home">
            <div class="CSSgal">

                <!-- Don't wrap targets in parent -->
                <s id="s1"></s>
                <s id="s2"></s>
                <s id="s3"></s>
                <s id="s4"></s>

                <div class="slider">
                    <div style="background:url('6.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <h2 class="home-title">find cars special for you</h2>
                        <p class="home-p">with thousands of cars <br>we just have the right one for you</p>

                    </div>
                    <div style="background:url('7.jpg');background-size: cover;background-repeat: no-repeat;">
                        <h2 class="home-title">we are professional</h2>
                        <p class="home-p">We take pride in our work. We continually enhance our knowledge through
                            training.</p>

                    </div>
                    <div style="background:url('8.jpg');background-size: cover;">
                        <h2 class="home-title">Control Your Car-Buying Experience</h2>
                        <p class="home-p">At elite cars, you're in charge of the process from start to finish.
                            Here's
                            how.</p>

                    </div>

                </div>

                <div class="prevNext">
                    <div><a href="#s3"></a><a href="#s2"></a></div>
                    <div><a href="#s1"></a><a href="#s3"></a></div>
                    <div><a href="#s2"></a><a href="#s3"></a></div>
                    <div><a href="#s3"></a><a href="#s1"></a></div>
                </div>

                <div class="bullets">
                    <a href="#s1">1</a>
                    <a href="#s2">2</a>
                    <a href="#s3">3</a>

                </div>

            </div>
        </section>
    </header>

    <!-- =================================== Start of sectin featured ============================= -->
    <section class="feat" data-aos="fade-up">
        <div class="feat_container">
            <div class="feat_row">
                <div class="feat_box">
                    <div class="feat_icon"> <i class="fas fa-chart-pie"></i> </div>
                    <div class="feat_titel">Price</div>
                    <div class="feat_info">Low Price start at $4.99 - Get More Value, Pay Less.</div>
                </div>
                <div class="feat_box">
                    <div class="feat_icon"> <i class="fas fa-cogs"></i> </div>
                    <div class="feat_titel">Update</div>
                    <div class="feat_info">Monthly Update - 100% Accurate Data.</div>
                </div>
                <div class="feat_box">
                    <div class="feat_icon"> <i class="fab fa-gg"></i> </div>
                    <div class="feat_titel">Options</div>
                    <div class="feat_info">Several Database Options - Buy Only What You Want.</div>
                </div>
            </div>
        </div>
    </section>


    <!-- =================================== End of sectin featured ============================= -->

    <section class="about" id="about">
        <div class="about-container">
            <div class="about-head">
                <h2>About Us</h2>
                <p> Car buying with confidence is what we're all about,
                    and we're here to make the car buying experience as simple and as easy as possible.

                </p>

            </div>
            <div class="about-row">
                <div class="about-col">
                    <div class="img">
                        <img src="about-mission.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="fas fa-tachometer-alt"></i></div>
                    </div>
                    <div class="col-container">
                        <h2 class="title"><a href="#">About Our Cars
                            </a></h2>
                        <p>
                            every car we sell is thoroughly
                            inspected by a fully trained Technician and comes
                            with a three month guarantee, with the option to
                            extend this for a further two years. We also guarantee that the cars
                            we sell are the lowest priced in the market. </p>
                    </div>
                </div>
                <div class="about-col">
                    <div class="img">
                        <img src="about-plan.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="fas fa-list"></i></div>
                    </div>
                    <div class="col-container">
                        <h2 class="title"><a href="#">Our Mission </a></h2>
                        <p>
                            We do this not just by providing a good car buying and aftercare service, but the
                            absolute
                            best experience out there. Our fans and friends love us because of our people and our
                            carstorestyle, which is our unique way of doing things. </p>
                    </div>
                </div>
                <div class="about-col">
                    <div class="img">
                        <img src="about-vision.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="far fa-eye"></i></div>
                    </div>
                    <div class="col-container">
                        <h2 class="title"><a href="#">Our Vision</a></h2>
                        <p>
                            We sell cars but we're doing things differently at Car Store. We understand our
                            customers'
                            wants and needs and our vision is to transform the car buying experience. – and we're
                            just
                            getting started!<br>
                            <br>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =================================== Start of sectin service ============================= -->

    <section class="service" data-aos="fade-up">
        <div class="serv_container">

            <div class="serv_title">
                <h3>FEATURES</h3>
                <p> We have made a commitment to deliver the best for you every time, doing whatever it takes to
                    ensure
                    the success of your
                    website, whilst ensuring you stay within budget and on schedule.</p>
                <p>Rows: Car Makes, Models, Generations, Trims, Body Types, Engine Volumes, Engine Powers, Engine
                    Types,
                    Transmission
                    Types, Drive Types, Gearbox Types, Car Productions: Start and End.</p>
            </div>



            <div class="serv_row">
                <div class="serv_box " data-aos="fade-up">
                    <div class="serv_box_icon"><i class="fas fa-money-check-alt"></i></div>
                    <div class="serv_box_titel">Buy 100% Online</div>
                    <div class="serv_box_info">We accept the return of any vehicle purchased from us at no cost to you
                    </div>
                </div>
                <div class="serv_box" data-aos="fade-up">
                    <div class="serv_box_icon"><i class="fa fa-tasks" aria-hidden="true"></i></div>
                    <div class="serv_box_titel">Delivery / Curbside Pickup</div>
                    <div class="serv_box_info">Get a vehicle and practice Social Distancing at the same time
                    </div>
                </div>
                <div class="serv_box" data-aos="fade-up">
                    <div class="serv_box_icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                    <div class="serv_box_titel">Warranties</div>
                    <div class="serv_box_info">We cover your engine for as long as you own your car</div>
                </div>
                <div class="serv_box" data-aos="fade-up">
                    <div class="serv_box_icon"><i class="fa fa-th" aria-hidden="true"></i></div>
                    <div class="serv_box_titel">Trade In</div>
                    <div class="serv_box_info">We approach trade-ins and car-buying the CarShop way — with honesty, integrity and complete transparency
                    </div>
                </div>
                <div class="serv_box" data-aos="fade-up">
                    <div class="serv_box_icon"><i class="fa fa-server" aria-hidden="true"></i></div>
                    <div class="serv_box_titel">Generations</div>
                    <div class="serv_box_info">Options: Get All Trims, Get All Trims for Make, Get All Trims for
                        Model
                    </div>
                </div>
                <div class="serv_box" data-aos="fade-up">
                    <div class="serv_box_icon"><i class="fa fa-archive" aria-hidden="true"></i></div>
                    <div class="serv_box_titel">Our Values</div>
                    <div class="serv_box_info">We believe in maximizing satisfaction, not profits.
                    </div>
                </div>

            </div>
        </div>

    </section>



    <!-- =================================== End of sectin service ============================= -->








    <!-- =================================== Start  of Call Section ============================= -->


    <section class="call" data-aos="fade-up">

        <div class="call_container">

            <h3>Call To Action</h3>
            <p>Ready to start experimenting? - Share for an API key now.</p>
            <a href="">Call To Action</a>
        </div>



    </section>
    <!-- =================================== End of Call Section ============================= -->







    <!-- =================================== Start of skills Section ============================= -->
    <section class="skill" data-aos="fade-up">
        <div class="skill_container">
            <div class="skill_title">
                <h3>Our Skills</h3>
                <p>Car Database Api develops, manufactures and markets car database systems in close cooperation
                    with
                    the customers. Based
                    on our over 10 years of experience we can advise our customers of the best solution.</p>
            </div>
        </div>
    </section>
    <!-- =================================== End of skills Section ============================= -->

    <!-- =================================== Strat of facts  Section ============================= -->
    <section class="fact" data-aos="fade-up">
        <div class="fact_container">
            <div class="fact_title">
                <h3>Stats</h3>
                <p>See statistics for the car make model database.</p>
            </div>
            <div class="fact_counter">
                <div class="fact_box">
                    <span class="fact_count" data_target="200">0 </span>
                    <p>Makes</p>
                </div>
                <div class="fact_box">
                    <span class="fact_count " data_target="2523"> 0</span>
                    <p>Models</p>
                </div>
                <div class="fact_box">
                    <span class="fact_count" data_target="5267"> 0</span>
                    <p>Generations</p>
                </div>
                <div class="fact_box">
                    <span class="fact_count" data_target="51186"> 0</span>
                    <p>Trims</p>
                </div>
            </div>
            <div class="fact_img">
                <img src="./facts-img.jpg" alt="">
            </div>
        </div>

    </section>
    <!-- =================================== End of facts  Section ============================= -->

    <!-- =================================== Strat of Portfolio Section ============================= -->


    <section class=" prtfo" data-aos="fade-up">
        <div class="prtf_container">
            <div class="prtf_title">
                <h3>OUR GALLERY</h3>
                <p>Choose What You Want.</p>
            </div>
            <div class="prtf_row">
                <input type="radio" name="Photo" id="check1" checked>
                <label for="check1"> All</label>

                <input type="radio" name="Photo" id="check2">
                <label for="check2"> API</label>

                <input type="radio" name="Photo" id="check3">
                <label for="check3"> Data</label>

                <input type="radio" name="Photo" id="check4">
                <label for="check4"> Demo</label>

            </div>
            <div class="prtf_row_car">



                <div class="prtf_car api " data-aos="fade-right">
                    <figure>
                        <a href="./portfolio/car2.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car2.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            BMW X3 30I XLINE NAV
                        </h4>


                        <h5>TYPE : Sport Utility </h5>
                        <h5>MILES : 53,926 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Alpine White </h5>
                        <h5>INTERIOR : Brown</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: 5UXTR9C56KLD94668 </h5>
                        <h5>STOCK : C32202 </h5>
                        <h5>COST : $37,946 </h5>
                        <h5>ID : 1 </h5>


                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>
                </div>

                <div class="prtf_car api" data-aos="fade-up">
                    <figure>
                        <a href="./portfolio/car3.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car3.jpg" alt="">
                        </a>

                        <div class="prtf_sale"> Sale!!</div> 
                    </figure>
                    <div class="port_box_info">
                        <h4>
                            BMW 5-Series AWD SPORT
                        </h4>
                        <h5>TYPE : Sedan </h5>
                        <h5>MILES : 17,609</h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Black Sapphire </h5>
                        <h5>INTERIOR : Charcoal</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: WBAJA7C55KWW22012</h5>
                        <h5>STOCK : G01534M </h5>
                        <h5>COST : $44,996 </h5>
                        <h5>ID : 2 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>


                <div class="prtf_car api" data-aos="fade-left">
                    <figure>
                        <a href="./portfolio/car4.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car4.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            BMW X3 30I XLINE NAV
                        </h4>
                        <h5>TYPE : Sport Utility </h5>
                        <h5>MILES : 26,027 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Glacier Silver </h5>
                        <h5>INTERIOR : Charcoal</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: 5UXTR9C54KLE20040 </h5>
                        <h5>STOCK : A80549P </h5>
                        <h5>COST : $40,996 </h5>
                        <h5>ID : 3 </h5>


                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>

                <div class="prtf_car data" data-aos="fade-right">
                    <figure>
                        <a href="./portfolio/car1.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car1.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            BMW 4 Series AWD M SPORT

                        </h4>
                        <h5>TYPE : Convertible</h5>
                        <h5>MILES : 35,796 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Alpine White </h5>
                        <h5>INTERIOR : Charcoal</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: WBA4Z3C5XKEF31387 </h5>
                        <h5>STOCK : G00995M </h5>
                        <h5>COST : $37,946 </h5>
                        <h5>ID : 4 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>
                <div class="prtf_car data" data-aos="fade-up">
                    <figure>
                        <a href="./portfolio/car5.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car5.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Jeep Gladiator RUBICON
                        </h4>
                        <h5>TYPE : Pickup Truck </h5>
                        <h5>MILES : 4,699 </h5>
                        <h5>DRIVE : AWD / 4WD</h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Bright White </h5>
                        <h5>INTERIOR : Charcoal</h5>
                        <h5>ENGINE : 6 Cylinders 3.6L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: 1C6JJTBG9LL165844 </h5>
                        <h5>STOCK : A80505M </h5>
                        <h5>COST : $53,296 </h5>
                        <h5>ID : 5 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>
                <div class="prtf_car data" data-aos="fade-left">
                    <figure>
                        <a href="./portfolio/car6.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car6.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Jeep Grand Cherokee 4WD
                        </h4>
                        <h5>TYPE : Sport Utility </h5>
                        <h5>MILES : 109,916 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Alpine White </h5>
                        <h5>INTERIOR : Black</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: 1C4RJFBG3FC208141 </h5>
                        <h5>STOCK : A81172M </h5>
                        <h5>COST : $19,947 </h5>
                        <h5>ID : 6 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>
                <div class="prtf_car data" data-aos="fade-right">
                    <figure>
                        <a href="./portfolio/car7.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car7.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Jeep Wrangler BLACK BEAR
                        </h4>
                        <h5>TYPE : Convertible </h5>
                        <h5>MILES : 85,270 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Manual</h5>
                        <h5>EXTERIOR : Hydro Blue </h5>
                        <h5>INTERIOR : Charcoal</h5>
                        <h5>ENGINE : 6 Cylinders 3.6L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: 1C4HJWDG6GL156272 </h5>
                        <h5>STOCK : A80566 </h5>
                        <h5>COST : $29,546 </h5>
                        <h5>ID : 7 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>
                <div class="prtf_car demo" data-aos="fade-up">
                    <figure>
                        <a href="./portfolio/car8.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car8.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Dodge RALLYE REDLINE

                        </h4>
                        <h5>TYPE : Coupe </h5>
                        <h5>MILES : 20,349 </h5>
                        <h5>DRIVE : 2WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Granite Crystal </h5>
                        <h5>INTERIOR : Brown</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: 2C3CDYAG9EH115229 </h5>
                        <h5>STOCK : B61496 </h5>
                        <h5>COST : $26,347 </h5>
                        <h5>ID : 8 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>
                <div class="prtf_car demo" data-aos="fade-left">
                    <figure>
                        <a href="./portfolio/car9.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car9.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Dodge SCAT WIDEBODY
                        </h4>
                        <h5>TYPE : Sport Utility </h5>
                        <h5>MILES : 4,313 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : White Knuckle </h5>
                        <h5>INTERIOR : Brown</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN : 2C3CDZFJ6LH164766 </h5>
                        <h5>STOCK : A80427M </h5>
                        <h5>COST : $54,296 </h5>
                        <h5>ID : 9 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>











                <div class="prtf_car demo" data-aos="fade-right">
                    <figure>
                        <a href="./portfolio/car10.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car10.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Dodge Ram WAGON CREW
                        </h4>
                        <h5>TYPE : Pickup Truck </h5>
                        <h5>MILES : 61,855 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Blue Streak </h5>
                        <h5>INTERIOR : Charcoal</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN : 3C6TR5EJ5JG155939 </h5>
                        <h5>STOCK : F06392M </h5>
                        <h5>COST : $51,546 </h5>
                        <h5>ID : 10 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>
                <div class="prtf_car demo" data-aos="fade-up">
                    <figure>
                        <a href="./portfolio/car15.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car15.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Jeep Wrangler RUBICON
                        </h4>
                        <h5>TYPE : Convertible </h5>
                        <h5>MILES : 35,744 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Billet Silver </h5>
                        <h5>INTERIOR : Black</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 18 City / 23 Hwy</h5>
                        <h5>VIN: 1C4HJXCN9JW290169 </h5>
                        <h5>STOCK : F05601M </h5>
                        <h5>COST : $41,996 </h5>
                        <h5>ID : 11 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>
                <div class="prtf_car demo" data-aos="fade-left">
                    <figure>
                        <a href="./portfolio/car14.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car14.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Mercedes E-Class AWD AMG
                        </h4>
                        <h5>TYPE : Sedan </h5>
                        <h5>MILES : 29,620 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Obsidian Black </h5>
                        <h5>INTERIOR : Black</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: WDDZF6EB6JA483482 </h5>
                        <h5>STOCK : F05337M </h5>
                        <h5>COST : $57,596 </h5>
                        <h5>ID : 12 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>
                <div class="prtf_car demo" data-aos="fade-right">
                    <figure>
                        <a href="./portfolio/car13.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car13.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Mercedes GLC GLC 4WD
                        </h4>
                        <h5>TYPE : Sport Utility </h5>
                        <h5>MILES : 31,661 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Polar White </h5>
                        <h5>INTERIOR : Tan</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: WDC0G4KB7KV133954 </h5>
                        <h5>STOCK : B61173 </h5>
                        <h5>COST : $38,996 </h5>
                        <h5>ID : 13 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>
                <div class="prtf_car demo" data-aos="fade-up">
                    <figure>
                        <a href="./portfolio/car12.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car12.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Tesla Model 3 LONG RANGE

                        </h4>
                        <h5>TYPE : Sedan </h5>
                        <h5>MILES : 34,870 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Red Multi Coat </h5>
                        <h5>INTERIOR : Charcoal</h5>
                        <h5>ENGINE : 0 Cylinders </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: 5YJ3E1EA3JF118178 </h5>
                        <h5>STOCK : F05724M </h5>
                        <h5>COST : $45,596 </h5>
                        <h5>ID : 14 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>
                <div class="prtf_car demo" data-aos="fade-left">
                    <figure>
                        <a href="./portfolio/car11.jpg" class="fancybox" data-fancybox="gallery1">

                            <img src="./portfolio/car11.jpg" alt="">
                        </a>

                    </figure>
                    <div class="port_box_info">
                        <h4>
                            Jeep Renegade LATITUDE

                        </h4>
                        <h5>TYPE : Sport Utility </h5>
                        <h5>MILES : 72,090 </h5>
                        <h5>DRIVE : AWD / 4WD </h5>
                        <h5>TRANSMISSION : Automatic</h5>
                        <h5>EXTERIOR : Alpine White </h5>
                        <h5>INTERIOR : Black</h5>
                        <h5>ENGINE : 4 Cylinders 2.0L </h5>
                        <h5>MPG : 22 City / 29 Hwy</h5>
                        <h5>VIN: ZACCJABB1JPH38819 </h5>
                        <h5>STOCK : G01550 </h5>
                        <h5>COST : $18,946 </h5>
                        <h5>ID : 15 </h5>

                    </div>
                    <a href="#booking_form" class="buy_btn">BUY IT</a>

                </div>

            </div>
        </div>

    </section>


    <!-- =================================== End of Portfolio Section ============================= -->

    <!--START OF TESTIMONIALS SECTION-->
    <section class="testimonials" id="testimonials">
        <div class="test-title">
            <h1>testimonials</h1>
        </div>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width slides/quotes -->
            <div class="mySlides">
                <q>The service is good. Everything so far has been fixed correctly the first time. The staff is very
                    friendly and professional.</q>
                <p class="author">- John weliam</p>
            </div>

            <div class="mySlides">
                <q>Friendly, professional and a joy to be a customer! Fun experience while driving off with the
                    perfect
                    car for me! The detail job was impeccable. I got an 8 year old car with low mileage that was
                    "brand
                    new"! Thanks Keith, Terry et al!</q>
                <p class="author">- micheal scotte</p>
            </div>

            <div class="mySlides">
                <q>My experience with elite cars was very positive, no high pressure tactics. I am very pleased with
                    the
                    2019 Escape that I purchased and with all of my interaction with the sales & finance staff at
                    Gillis. I would encourage others to compare their prices and the Warranty Forever program.</q>
                <p class="author">- Thomas jack</p>
            </div>

            <!-- Next/prev buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <!-- Dots/bullets/indicators -->
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </section>
    <!--END OF TESTIMONIALS SECTION-->

    <!-- Start of contact us section
    ============================================= -->
    <section id="booking_form" class="contact">
        <div class="contact-title">
            <h1>Booking details</h1>
            <p>send us your information to complete the booking process</p>
        </div>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="index.php" method="post">
                        <div class="row">

                            <div class="col-50">
                                <h3>customer details</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="full_name" required
                                    placeholder="enter your full name">
                                <label for="fname"><i class="fas fa-phone"></i> phone number</label>
                                <input type="text" id="fname" name="phone_number" required
                                    placeholder="enter your phone number">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="emaile" required placeholder="enter your email">
                                <label for="adr"><i class="far fa-address-card"></i> Address</label>
                                <input type="text" id="adr" name="address" required placeholder="542 W. 15th Street">
                                <label for="city"><i class="fas fa-university"></i> City</label>
                                <input type="text" id="city" name="city" required placeholder="enter your city">
                                <div class="row">
                                    <div class="col-50">
                                        <label>your message</label>
                                        <textarea class="textarea" name="content"
                                            placeholder="write your notes or feedback"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fab fa-cc-visa" style="color:navy;"></i>
                                    <i class="fab fa-cc-amex" style="color:blue;"></i>
                                    <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fab fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" required name="name_on_card" placeholder="your card name">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" required name="credit_card_numbre"
                                    placeholder="your card number">
                                <label for="cvv">CVV</label>

                                <input type="text" id="cvv" name="CVV" required placeholder="cvv card">
                                <h3>product details</h3>
                                <input type="text" name="product_id" id="product-id" required
                                    placeholder="type the car's id">
                            </div>

                        </div>
                </div>

            </div>
            <input type="submit" name="submit" value="submit" class="btn">

        </div>
        </div>

        </div>
        </div>

        </div>



    </section>






    <!-- end of contact us section
    ============================================= -->
    <!-- Start of footer section
    ============================================= -->

    <footer class="footer">

        <div class="row">
            <div class="col left logof">


                <h1><a href="https://cardatabaseapi.com">Elite <br>cars</a></h1>

                <p>We make it easy for customers to buy <br>
                    and finance their car in the comfort of their home
                    relaxed and welcoming stores we offer a no haggle,<br> no hassle customer service experience.
                </p>
            </div>
            <div class="col">
                <h2 class="f1">Links</h2>
                <ul>
                    <li><a href="#home"> <i class="fas fa-chevron-right icon"></i> Home</a></li>
                    <li><a href="#about"><i class="fas fa-chevron-right icon"></i> About us</a></li>
                    <li><a href="#Testimonials"> <i class="fas fa-chevron-right icon"></i> Testimonials</a></li>
                    <li><a href="#portfolio"> <i class="fas fa-chevron-right icon"></i> Gallery</a></li>
                    <li><a href="#services"> <i class="fas fa-chevron-right icon"></i> Services</a></li>
                    <li><a href="#contact"> <i class="fas fa-chevron-right icon"></i> Contact</a></li>

                </ul>
            </div>
            <div class="col c1">
                <h3>Information</h3>
                <p>Our customers can search for, find, buy and even finance their next used car online, from the
                    comfort
                    of their own home. What’s more,<br> hundreds of our cars can be delivered to a store near you.
                </p>
            </div>
            <div class="col right">
                <h1>Newsletter</h1>
                <p>Subscribe to our newsletter and stay updated on the latest developments and special offers! With
                    contributions from our in-house experts, our newsletters contain insightful news pieces, and
                    keep
                    you informed of all our upcoming activities so you never miss out.</p>
                <form action="#">
                    <input name="email" type="email" placeholder="Enter your email address">
                    <button type="submit" value="Submit"> <i class="fas fa-paper-plane"></i></button>
                </form>
                <div class="social-icons">
                    <a href="#"><i class="fb-bg fab fa-facebook-f "></i></a>
                    <a href="#"><i class="bh-bg fab fa-behance"></i></a>
                    <a href="#"><i class="tw-bg fab fa-twitter"></i></a>
                    <a href="#"><i class="dr-bg fab fa-dribbble"></i></a>
                </div>
            </div>
        </div>

        <!--======== preloader section==========-->
        <div class="up">
            <a href="#header" class="scroll" style="display: inline;">
                <i class="fas fa-arrow-up"></i></a>
        </div>
    </footer>
    <!--================START OF COPYRIGHT SECTION================-->
    <div class="copyRight-sec">
        2021 © All rights reserved by <a href="#">Team 21</a>
    </div>
    <!--================ END OF COPYRIGHT SECTION================-->
    <!--============================end of footer section===========-->
    <!--JS -->
    <!--===================== Start Java Script file library============================ -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1500,
        offset: 200
    });
    </script>
    <script src="/assets/Js/parallax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
    <script src="all.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
</body>

</html>