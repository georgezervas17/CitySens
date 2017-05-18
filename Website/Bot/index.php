<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CitySens</title>
        <link rel="icon" href="img/chat_logo.png">

        <meta name="description" content="Your Description Here">
        <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
        <meta name="author" content="ThemeForces.Com">

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

        <!-- Stylesheet
        ================================================== -->
        <link rel="stylesheet" type="text/css"  href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">

        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="./fbapp/fb.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="tf-home">
            <div class="overlay">
                <div id="sticky-anchor"></div>
                <nav id="tf-menu" class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="nav navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                            </button>

                            <a href="index.php"><img class=" hidden-xs navbar-brand" style="" src="img/chat_logo10.png" alt="" /></a>
                            <a href="index.php"><img class=" hidden-lg hidden-md  navbar-brand" style="zoom:60%;" src="img/chat_logo.png" alt="" /></a>
                        </div>
                        <div class="visible-xs" >
                            <button class="button2" style="vertical-align:middle; zoom:65%;" onclick="" data-toggle="collapse" data-target="#demo4,#demo5,#demo6,#demo7" style="vertical-align:middle"><span><img style="width: 30px; height: 30px; " src="img/tap.png" alt="" />     Πως Λειτουργεί </span></button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right" style="font-size:23px; font-weight:bold" >
                                <li style="padding-top: 6px; "><a href="#bot-mobile">Bot</a></li>   
                                <li style="padding-top: 6px; "><a href="#concept">ιδέα</a></li>       
                                <li style="padding-top: 6px; "><a href="#drop-bot">Δοκίμασέ το</a></li>       
                                <li class="hidden-xs"><button class="button1"  onclick="" data-toggle="collapse" data-target="#demo,#demo2,#demo3,#demo4" style=" background-color:#3C96A7;vertical-align:middle"><span>Πως Λειτουργεί </span></button></li>                                                   
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>


                <div id="tf-service">
                    <div class="hidden-xs container" style="">
                        <div class="row">
                            <div class=" hidden-xs col-md-4" >
                                <div id="demo" class="collapse" style=" color:black; ">
                                    <ul style="list-style-type:none; align-content:center;" >
                                        <img style="padding-left: 45px;" src="img/hello.png" alt="" />
                                        <h3 style="padding-left:20px;">1. Χαιρετισμός</h3> 
                                        <hr>
                                        <ul>
                                            <li style="font-size: 18px;">Στείλε ένα "Γεια".</li>
                                        </ul>
                                    </ul>
                                </div>    
                            </div>
                            <div class=" hidden-xs col-md-4" >
                                <div id="demo2" class="collapse" style=" color:black; ">
                                    <ul class="" style="list-style-type:none; align-content:center;" >
                                        <img style="padding-left: 45px;" src="img/buttons.png" alt="" />
                                        <h3 style="padding-left: 20px;">2.Διάλεξε Καρτέλα</h3>  
                                        <hr>
                                        <ul>
                                            <li style="font-size: 18px;">Χρησιμοποίησε τις καρτέλες για να επιλέξεις το θέμα σου.</li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class=" hidden-xs col-md-4"   >
                                <div id="demo3" class="collapse" style="color:black; ">
                                    <ul style="list-style-type:none; align-content:center;" >
                                        <img style="padding-left: 45px;" style="padding-left:25px;" src="img/doc1.png" alt="" />
                                        <h3 style="padding-left:20px;">3.Γράψε για το θέμα σου.</h3>   
                                        <hr>
                                        <ul>
                                            <li style="font-size: 18px;">Το bot θα σε καταλάβει το αίτημα σου.</li>
                                        </ul>
                                    </ul>
                                </div>    
                            </div>
                            <div class=" hidden-xs col-md-4"   >
                                <div id="demo4" class="collapse" style="color:black; ">
                                    <ul style="list-style-type:none; align-content:center;" >
                                        <img style="padding-left: 45px;" style="padding-left:25px;" src="img/icon.png" alt="" />
                                        <h3 style="padding-left:20px;">4.Κέρδισε</h3>   
                                        <hr>
                                        <ul>
                                            <li style="font-size: 18px;">Έλεγχξε το email σου,εκεί θα βρεις την επιβεβαίωση του αιτήματός σου και το δώρο που κέρδισες  .</li>
                                        </ul>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden-lg container " style="padding-left:50px;">
                    <div class="row">
                        <div class="hidden-lg col-xs-9" >
                            <div id="demo4" class="collapse" style=" color:black; width:250px; ">
                                <ul style="list-style-type:none; align-content:center;" >
                                    <img style="padding-left: 45px;" src="img/category.png" alt="" />
                                    <h3 style="padding-left:20px;">1. Επιλογή</h3> 
                                    <hr>
                                    <ul>
                                        <li>Διάλεξε κατηγορία προβλήματος.</li>
                                    </ul>
                                </ul>
                            </div>    
                        </div>


                        <div class="hidden-lg col-xs-9" >
                            <div id="demo5" class="collapse" style=" color:black; ">
                                <ul class="" style="list-style-type:none; align-content:center;" >
                                    <img style="padding-left: 45px;" src="img/doc1.png" alt="" />
                                    <h3 style="padding-left: 20px;">2. Ανέβασε</h3>  
                                    <hr>
                                    <ul>
                                        <li>Δώσε μια περιγραφή ή ανέβασε μια φωτογραφία.</li>
                                    </ul>
                                </ul>
                            </div>
                        </div>


                        <div class="hidden-lg col-xs-9"   >
                            <div id="demo6" class="collapse" style="color:black; ">
                                <ul style="list-style-type:none; align-content:center;" >
                                    <img style="padding-left: 45px;" style="padding-left:25px;" src="img/loc.png" alt="" />
                                    <h3 style="padding-left:20px;">3. Τοποθεσία</h3>   
                                    <hr>
                                    <ul>
                                        <li>Τόσο απλό και γρήγορο.</li>
                                    </ul>
                                </ul>
                            </div>    
                        </div>
                        <div class="hidden-lg col-xs-9"   >
                            <div id="demo7" class="collapse" style="color:black; ">
                                <ul style="list-style-type:none; align-content:center;" >
                                    <img style="padding-left: 45px;" style="padding-left:25px;" src="img/check.png" alt="" />
                                    <h3 style="padding-left:20px;">3. Τόσο Απλό</h3>   
                                    <hr>
                                    <ul>
                                        <li>Τόσο απλό και γρήγορο.</li>
                                    </ul>
                                </ul>
                            </div>    
                        </div>
                    </div>
                </div>


                <div class="container" style="" >
                    <div class="content" style="" >
                        <ul style="list-style-type:none; align-content:center;  " >
                            <li><img style="" src="img/mini_logo_best.png" alt="" /></li>
                            <a href="https://m.me/bethesensor" class="button button4" style="background-color:#3C96A7;">Μίλησε στο bot!</a>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div id="bot-mobile" style=" padding:5%; background-color: black;" >
            <br></br>
            <div class="container">
                <div class="col-md-2" style="">
                    <div id="parent">
                        <p style="font-size:22px; color:#3C96A7; cursor: pointer;">Δυνατότητες Θεμάτων</p>
                        <div id="hover-content">
                            <ul style="color:#3C96A7; font-size: 20px;" >
                                <br>
                                <li>Υποβολή θεμάτων που αφορούν την κοινωνία.</li>
                                <br>
                                <li>Ενημέρωση της Τοπικής Αυτοδ. σε πραγματικό χρόνο.</li>
                                <br>
                                <li>Ενημέρωση πολιτών για διάφορα γεγονότα.</li>
                            </ul>
                        </div>
                    </div>


                </div>

                <div class="col-md-3" style="">
                    <ul style="list-style-type:none;" >
                        <img style="width:300px; height:600px;" src="img/mockup.gif" alt=""/>
                    </ul>
                </div>
                <div class="col-md-3" style="">  
                    <ul style="list-style-type:none;" >
                        <img style="width:300px; height:600px;" src="img/mockup1.gif" alt=""/>
                    </ul>
                </div>

                <div class="col-md-2" style="zoom:100%; text-align: left;">                 
                    <div id="parent">
                        <p style="font-size:22px; color:#3C96A7; cursor: pointer;">Δυνατότητες Ελέγχου</p>
                        <div id="hover-content">
                            <ul style="color:#3C96A7; font-size: 20px;" >
                                <br>
                                <li>Υποβολή ελέγχων από πολίτες προς το κράτος.</li>
                                <br>
                                <li>Επιβράβευση με πόντους εξαργύρωσης.</li>
                            </ul>
                            </ul>
                        </div>
                    </div>
                    <p></p> 
                </div>
                <div class="col-md-1" style="">
                    <ul style="list-style-type:none;" >
                    </ul>
                </div>
            </div>
        </div>

        <div id="concept1" style="background-color: white; text-align: center;" >
            <div class="container"style="zoom:80%;">
                <br></br>
                <br></br>
                <div class="col-md-1" style="">
                </div>
                <div class="col-md-10" style="">
                    <ul style="list-style-type:none; align-content:center;" >
                        <h4 style="font-size:50px;">Το CitySens σε καταλαβαίνει...</h4>
                        <p style="color:black; font-size:25px;">Μέσω της NLP διαδικασίας το CitySens μπορεί να παράξει analytics για την τάση που επικρατεί στην εκάστοτε κοινότητα και αναλόγως να δείξει που πραγματικά βρίσκετε το σημαντικότερο πρόβλημα.<p>             
                    </ul>
                </div>
                <div class="col-md-1" style="text-align: left;">
                </div>
            </div>
        </div>

        <div id="concept" style="background-color: white; align-content: center;" >
            <div class="container"style="zoom:80%;">

                <div class="col-md-1" style="">
                </div>
                <div class="col-md-10" style="">

                    <img style="width:1000px; height:500px;" src="img/full.png" alt=""/>
                </div>
                <div class="col-md-1" style="text-align: left;">
                </div>
            </div>
            <br></br>
            <br></br>
        </div>


        <div id="drop-bot" style="padding:2%; background-color: #b8b894;" >
            <div class="container" style="" >
                <div class="content" style="" >
                    <ul style="list-style-type:none; align-content:center;  " >
                        <button class="button button4" style=" align-content: center;" onclick="" data-toggle="collapse" data-target="#page1,#page2,#page3"><span>Δοκίμασέ το τώρα!</span></button>
                    </ul>

                    <div id="page2" class="collapse"  style="color:black; ">
                        <div class="container" style="" >
                            <ul style="list-style-type:none; align-content:center;  " >
                                <div class="fb-page" 
                                     data-href="https://www.facebook.com/bethesensor/" 
                                     data-tabs="messages" 
                                     data-width="400" 
                                     data-height="300" 
                                     data-small-header="true">
                                    <div class="fb-xfbml-parse-ignore">
                                        <blockquote></blockquote>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '95100348886',
                    xfbml: true,
                    version: 'v2.6'
                });
            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <script>
            function myFunction() {
                var x = document.getElementById("mySelect").selectedIndex;
                alert(document.getElementsByTagName("option")[x].value);
            }
        </script>

        <script>
            /* When the user clicks on the button, 
             toggle between hiding and showing the dropdown content */
            function myFunction1() {
                document.getElementById("cities").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function (event) {
                if (!event.target.matches('.dropdm')) {

                    var dropdowns = document.getElementsByClassName("dropdowndm");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>




        <!--div id="tf-service">
        
        
        
        
        
        <button id="button2" class="button square1 " style="top:36%" onclick="setColor('button2')"><img src="img/table.png" alt=""   /></button>
        
            <button id="button3" class="button square1" style="top:66%" onclick="setColor('button3')"><img src="img/table.png" alt=""   /></button>
        
            <button  id="button4" class="button square1" style="left:25%" onclick="setColor('button4')"><img src="img/table.png" alt=""   /></button>
        
            <button id="button5" class="button square1" style=" left:25%;top:36%" onclick="setColor('button5')"><img src="img/table.png" alt=""   /></button>
        
            <button id="button6" class="button square1" style="left:25%;top:66%;" onclick="setColor('button6')"><img src="img/table.png" alt=""   /></button>
        
        
        
        
        
        
        
        
        
            <div class="container">
        
                <div class="col-md-4">
        
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-motorcycle"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Coffee Shops</h4>
                            <form class="form">
                                <li>  <a href="" style=" color:rgb(47, 147, 123)" >Central 25</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Lemon 56</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Rockwell</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Rodus</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Rebell</a> </li>
                            </form>
                        </div>
                    </div>
        
                </div>
        
                <div class="col-md-4">
        
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-gears"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Restaurant</h4>
                            <form class="form">
                                <li>  <a href="" style=" color:rgb(47, 147, 123)" >Anema</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Pepper</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Salt</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Tasty</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Fisherman</a> </li>
        
                            </form>
                        </div>
                    </div>
        
                </div>
        
                <div class="col-md-4 ">
        
                    <div class="media">
                        <div class="media-left media-middle">
                            <i class="fa fa-heartbeat"></i>
                        </div>
                        <div class="media-body">
                            <h4>Bars</h4>
                            <form class="form">
                                <li>  <a href="" style=" color:rgb(47, 147, 123)" >Rock</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Jazz</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Rock</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Rock</a> </li>
                                <li>  <a href="" style="color:rgb(47, 147, 123)">Rock</a> </li>
                            </form>
        
                        </div>
                    </div>
        
                </div>
        
            </div>
        </div>
        
        
        
        <div id="tf-about">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <h2>Application</h2>
                            <br></br>
                            <form class="form">
                                <li>  Εύκολη περιήγηση. </li>
        
                                <li> Άμεση απεικόνιση των διαθέσιμων ή όχι τραπεζιών.</li>
        
                                <li>  Αναζήτηση για όλα τα συμβεβλιμένα καταστήματα.</li>
        
                                <li>  Εύκολη κράτηση διαθέσιμων τραπεζιών. </li>
        
                            </form>
                            <br></br>
                            <a href="" class="btn btn-primary my-btn dark">Go to Apple Store</a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div-->



        <!--div id="tf-service" style="background-color:  #c2c2a3 " >
    
            <div class="container" style="padding-left:150px;">
                <br></br>
    
                <div class="col-md-3">
                    <div class="media">
                        <div class="media-body">
                            <ul style="list-style-type:none; align-content:center;" >
                                <h4 class="media-heading" style="color:black">Ανακάλυψε</h4>
                                <a href="" style="text-decoration:none; color:black;" ><p> App </p> </a>
                            </ul>
                        </div>
                    </div>
                    <p></p> 
                </div>
    
                <div class="col-md-3">
                    <div class="media">
                        <div class="media-body">
                            <ul style="list-style-type:none; align-content:center; " >
                                <h4 class="media-heading" style="color:black">Εφαμοργή</h4>
                                <a  href="ori_xrisis.html" style="text-decoration: none; color:black;  " >  <p>Όροι Χρήσης </p></a> 
                                <a  href="politiki_aporitou.html" style=" text-decoration: none;color:black; " ><p>Πολιτική Απορρήτου</p></a> 
                                <a href="euretirio_katastimatwn.php" style="text-decoration: none; color:black; "><p></p></a> 
                            </ul>
                        </div>
                    </div>
                    <p></p> 
                </div>
    
                <div class="col-md-3">
                    <div class="media">
                        <div class="media-body">
                            <ul style="list-style-type:none; align-content:center;" >
                                <h4 class="media-heading" style="color:black">Δημιουργοί</h4>
                                <a href="sxetika_me_emas.html" style=" text-decoration:none; color:black; font-size: 16px;" > <p>Σχετικά με εμάς</p></a>
                                <a href=" x.php" style="text-decoration: none; color:black; font-size: 16px;"> <p>Επικοινωνία</p></a>
                            </ul>
                        </div>
                    </div>
                    <p></p> 
                </div>
    
    
            </div>
        </div-->

        <nav id="tf-footer">
            <div class="container">
                <div align="center" >
                    <p style=" font-size: 15px;">2017. Designed and Coded with <img style="width: 15px; height: 15px; " src="img/h.png" alt="" /> by <a href="#" style=" text-decoration:none; color:red; font-size: 18px;"> ΙΤ Crowd Developement Team </a> </p>
                </div>

                <div align="center"> 
                    <ul class="social-media list-inline">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <button class="hidden-xs" onclick="topFunction()" id="myBtn" title="Top">Go Top</button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>






    <script>
        /* When the user clicks on the button, 
         toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("cities").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>