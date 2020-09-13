

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Página Web de Satt-Link en el Marco del reto IPv6" />
    <meta name="author" content="Ing. Leonardo Maldonado" />
    <title>Página Web de Satt-Link en el Marco del reto IPv6</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top" >
    <div>

    <?php  

/* redireccionar si el cliente no cuenta con ipv6 */
                                        $ip =  $_SERVER['REMOTE_ADDR'];
                                            if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
                                                //echo $_SERVER['REMOTE_ADDR'];
                                              }
                                              else {
                                                //echo "ip no valido";
                                                header("no_ipv6.php");
                                                die();
                                              }

                                              
                                             // echo (int) defined ('AF_INET6');
                                        ?>



    </div>
   
    <section class="" style="" id="team">
        <div class="container" style="background: rgba(0, 0, 0, 0.5); height:auto;">
            <!--  <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div> -->
            <div class="row  ">
                <div class="col-lg-4">
                    <div class="text-center">
                        <img class="img-fluid d-block mx-auto" src="logos/sattlink.png" style="height: 150px; background-size: contain;" alt="" />
                        <!--  <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="">
                        <img class="img-fluid d-block mx-auto" src="./logos/lacnic.svg" class="img-fluid d-block" height="150px" width="280px" style="background-size: contain; background-position: center;margin-left: auto;
                            margin-right: auto;" alt="" />
                        <!--   <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="">
                        <img class="img-fluid d-block mx-auto" heigth="50px" width="200px" src="./logos/wispmx-logo.png" style=" background-position: center; margin-left: auto; margin-top: 20px;
                            margin-right: auto; " alt="" />



                    </div>
                    

                </div>
                <br>
                <div class="col-lg-12">
                    <p class="text-white text-center">Página Web Satt-Link en el Marco del reto IPv6</p>

                </div>
            </div>
            <div class="row  ">

                <!-- script de php -->
                <?php

                $command = "nslookup web.satt-link.net  ";
                $result = shell_exec($command);
              /*   echo $result; */
                
                $oparray = preg_split('/\s+/', trim($result));
                /* echo '<br>'; */
              /*   var_dump($oparray[13]); */
               /*  echo '<br>';
                echo $oparray[13]; */
                ?>
                <div class="col-lg-12 ">

                    <div class="text-white ">
                        <div class="table-responsive">
                            <table class="table table-sm text-white " style="  margin: auto;width: 40% !important; ">
                               
                                <tbody>
                                    <tr>
                                        <td style="width: 20%;">Ipv6 del servidor</td>
                                        <td><?php
                                              echo $oparray[13]; ?></td>
                                        
                                    </tr>
                                   
                                    <tr>
                                        <td >Tu IPv6</td>
                                        <td><?php  
                                        $ip =  $_SERVER['REMOTE_ADDR'];
                                            if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
                                                echo $_SERVER['REMOTE_ADDR'];
                                              }
                                              else {
                                                echo "tu ip no es version 6";
                                              }
                                        ?></td>
                                        
                                        
                                    </tr>
                                   <!--  -->
                                    <tr>
                                        <th >Tu IPv6</th>
                                        <td style="text-align: left;"><div style="text-align: left;" id="ipv6"> </div></td>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td >HostName</td>
                                        <td><p id="hostname"> </p></td>
                                        
                                    </tr>
                                    <tr>
                                        <td >ISP</td>
                                        <td><p id="isp"> </p></td>
                                        
                                    </tr>
                                    <tr>
                                        <td >Ciudad</td>
                                        <td><p id="ciudad"> </p></td>
                                        
                                    </tr>
                                   

                                </tbody>
                            </table>
                        </div>
                       

                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div> -->
        </div>
    </section>

    <script type="text/javascript">
    var if_ip;
        function get_ip(obj) {
            document.getElementById('ipId').innerHTML = obj.ip;
            if_ip =obj.ip;
        }


        function get_ipv6(obj) {
            if(if_ip=== obj.ip){
                document.getElementById('ipv6').innerHTML= "?";    
            }
            document.getElementById('ipv6').innerHTML = obj.ip;
        }
    </script>
    <script type="text/javascript" src="https://api.ipify.org/?format=jsonp&callback=get_ip"></script>
    <script type="text/javascript" src="https://api6.ipify.org/?format=jsonp&callback=get_ipv6"></script>
</body>

<!-- Clients-->
<!--   <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Contact-->
<!--   <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section> -->
<!-- Footer-->
<!--  <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer> -->
<!-- Portfolio Modals-->


<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<!--   <script src="js/scripts.js"></script> -->

<!--   <script>
          $.getJSON('getip.php', function(data){
     console.log('Your ip is: ' +  data.ip);
});
      </script> -->

<script>
    $.get("https://ipinfo.io", function(response) {
        $("#ip").html("IP: " + response.ip);
        $("#address").html("Ubicaci&#243;n: " + response.city + ", " + response.region);
        $("#details").html(JSON.stringify(response, null, 4));
        $("#hostname").html(response.hostname);
        $("#isp").html(response.org);
        $("#ciudad").html(response.city);
    }, "jsonp");
$(document).ready(function(){
    function random(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    var spec = {
        backgrounds: [
           '1.jpg',
           '2.jpg',
           '3.jpg',
           '4.jpg',
           '5.jpg',
         
        ]
    };
    var i = random(0, spec.backgrounds.length - 1);
    var b = spec.backgrounds[i];
    /* 
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover; */
    $('body').css('background-image', 'url("img/' + b + '")');
    $('body').css('background-size','cover');
    $('body').css('background-position','center');
    $('body').css('background-repeat','no-repeat');

});
    
</script>
</body>

</html>