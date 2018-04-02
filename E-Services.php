<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Computer Science Department</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- link of additonal css  -->
    
    <link rel="stylesheet" type="text/css" href="css/additionalcss/header_footer.css">
    <link rel="stylesheet" type="text/css" href="css/additionalcss/E-Services.css">
    <!--  end of addtional css -->
  </head>
  <body>
<header class="top-header container-fluid">
      <div class="row">
         <div class="container">
            <div class="row">
            <div class="col-xs-8 header-logo">
              <br>
              <a href="index.php"><img src="img/logo2.png" alt="" class="img-responsive logo"></a>
            </div>

            <div class="col-xs-4 top-search">
                <form class="">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                      <button class="btn btn-default" type="submit">
                        search
                      </button>
                  </div>
                </form>
            </div>
            </div>
         </div>
      </div>   
      <div class="row">                          
        <nav class="navbar navbar-default container-fluid">
          <div class="container">
            <div class="nav-bar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  
                  <ul class="nav navbar-nav navbar-left">

                      <li><a class="menu active" href="index.php"><i class="fa fa-home fa-lg"></i>&nbsp;Home</a></li>
                      <li  class="dropdown">
                        <a class="menu dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-graduation-cap"></i>&nbsp;Academic
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="Admission.php" >Admission</a></li>
                            <li><a href="Academic_Calender.php">Academic Calender</a></li>
                            <li><a href="Examination.php">Examination</a></li>
                            <li><a href="Faculties.php">Faculties</a></li>
                            <li><a href="Result.php">Result</a></li>
                            <li><a href="PG_Programme.php">PG Programme</a></li>
                            <li><a href="Research_Programme">Research Programme</a></li>
                            <li><a href="Students.php">Students</a></li>            
                        </ul>
                      </li>

                      <li  class="dropdown">
                        <a class="menu dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-flask"> </i>&nbsp;Research
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="Area_of_Research.php">Area of Research</a></li>
                            <li><a href="Research_lab.php">Research lab</a></li>
                            <li><a href="Research_Publication.php">Research Publication</a></li>
                            <li><a href="Sponser_Project.php">Sponser Project</a></li>
                        </ul>
                      </li>

                      <li  class="dropdown">
                        <a class="menu dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-laptop" aria-hidden="true"></i>&nbsp;Resources
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="E-Services.php">E-Services</a></li>
                            <li><a href="Library.php">Library</a></li>
                            <li><a href="Computer_Lab.php">Computer Lab</a></li>
                        </ul>
                      </li>

                      <li  class="dropdown">
                        <a class="menu dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;News & Events
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="Department_News.php">Department News</a></li>
                            <li><a href="Department_Seminar.php">Department Seminar</a></li>
                            <li><a href="Workshop.php">Workshop</a></li>
                            <li><a href="Image_Gallery.php">Image Gallery</a></li>
                                       
                        </ul>
                      </li>

                      <li  class="dropdown">
                        <a class="menu dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-building-o" aria-hidden="true"></i>&nbsp;About Us
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="Awards.php">Awards</a></li>
                            <li><a href="Aluminies.php">Aluminies</a></li>
                            <li><a href="Infrastructure.php">Infrastructure</a></li>
                                                                       
                        </ul>
                    </li>
                      <li><a class="menu" href="Contact_Us.php"><i class="fa fa-address-book" aria-hidden="true"></i>Contact Us</a></li>
                      <li  class="dropdown">
                        <a class="menu dropdown-toggle border-rght"  data-toggle="dropdown" href="#"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Login
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="Admin.php">Hod</a></li>
                            <li><a href="Faculty.php">Faculty</a></li>
                            <li><a href="Student.php">Student</a></li>
                        </ul>
                  </li>
                  </ul>
                </div><!-- /navbar-collapse -->
            </div>
          </div><!-- / .container -->
        </nav>
      </div>
  </header><!-- end of header area -->

<!-- ======================= Body content of the examination page ==================== -->

<!-- for the title of the page -->
<div class="container">
  <div class="title-heading">
               <center><lb>E-RESOURCES</lb></center>
               
  </div>
  <div class="row">
      <div class="e_resources_body">
        <section class="elearn">
    <div class="container">
      
        <div class="row">
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/c.png" alt="c" id="eservice-pic">
                      <div class="caption">
                        <h3>C-Tutorial</h3>
                        
                        <p><a href="eservices/cprogramming_tutorial.pdf" class="btn btn-primary" role="button">View</a> <a href="eservices/cprogramming_tutorial.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end col-->
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/c++.jpg" alt="c++" id="eservice-pic">
                      <div class="caption">
                        <h3>C++ -Tutorial</h3>
                        
                        <p><a href="eservices/cpp_tutorial.pdf" class="btn btn-primary" role="button">View</a> <a href="eservices/cpp_tutorial.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end cols-->
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/java.png" alt="java" id="eservice-pic">
                      <div class="caption">
                        <h3>Java -Tutorial</h3>
                        
                        <p><a href="eservices/java_tutorial.pdf" class="btn btn-primary" role="button">View</a> <a href="eservices/java_tutorial.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end cols-->

        </div> 
    </div>
    </section>
    <section class="elearn">
    <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/php.png" alt="php" id="eservice-pic">
                      <div class="caption">
                        <h3>PHP-Tutorial</h3>
                        
                        <p><a href="eservices/php.pdf" class="btn btn-primary" role="button">View</a> <a href="eservices/php.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end col-->
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/javascript.png" alt="js" id="eservice-pic">
                      <div class="caption">
                        <h3>Javascript -Tutorial</h3>
                        
                        <p><a href="eservices/javascript_tutorial.pdf" class="btn btn-primary" role="button">View</a> <a href="eservices/javascript_tutorial.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end cols-->
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/html.png" alt="html" id="eservice-pic">
                      <div class="caption">
                        <h3>HTML -Tutorial</h3>
                        
                        <p><a href="eservices/html5_tutorial.pdf" class="btn btn-primary" role="button">View</a> <a href="eservices/html5_tutorial.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end cols-->

        </div> 
    </div>
    </section>

    <section class="elearn">
    <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/css.jpg" alt="css" id="eservice-pic">
                      <div class="caption">
                        <h3>CSS-Tutorial</h3>
                        
                        <p><a href="eservices/css_tutorial.pdf" class="btn btn-primary" role="button">View</a> <a href="eservices/css_tutorial.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end col-->
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/softengine.png" alt="se" id="eservice-pic">
                      <div class="caption">
                        <h3>Software Engineering -Tutorial</h3>
                        
                        <p><a href="eservices/software_engineering.pdf" class="btn btn-primary" role="button">View</a> <a href="eservices/software_engineering.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end cols-->
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/networking.jpg" alt="networking" id="eservice-pic">
                      <div class="caption">
                        <h3>Networking -Tutorial</h3>
                        
                        <p><a href="eservices/networking.pdf" class="btn btn-primary" role="button">View</a> <a href="eservices/networking.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end cols-->

        </div> 
    </div>
    </section>

    <section class="elearn">
    <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/datastruct.png" alt="ds" id="eservice-pic">
                      <div class="caption">
                        <h3>Data Structure-Tutorial</h3>
                        
                        <p><a href="esrvices/data_structures_algorithms_tutorial.pdf" class="btn btn-primary" role="button">View</a> <a href="esrvices/data_structures_algorithms_tutorial.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end col-->
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/auto.png" alt="c++" id="eservice-pic">
                      <div class="caption">
                        <h3>Automata Theory -Tutorial</h3>
                        
                        <p><a href="eservices/auomata.pdf" class="btn btn-primary" role="button">View</a> <a href="esrvices/auomata.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end cols-->
          <div class="col-sm-6 col-md-4 text-center">
              <div class="thumbnail">
                  <img src="img/dbms.jpg" alt="dbms" id="eservice-pic">
                      <div class="caption">
                        <h3>DBMS -Tutorial</h3>
                        
                        <p><a href="eservices/dbms_tutorial.pdf" class="btn btn-primary" role="button">View</a> <a href="esrvices/dbms_tutorial.pdf" class="btn btn-default" role="button">Download</a></p>
                      </div>
              </div>
          </div><!--end cols-->

        </div> 
    </div>
    </section>

      </div>
  </div>
</div>

<!-- end of the title -->







<!-- ============================= end of the Body content============================= -->


<!--=====================Footer section==============================-->
<div class="container-fluid footer-section">
  
    <div class="container footer-area" id="footer-area">
    <p>Quick Links</p>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-lg-3 first-footer">
            
            <hr>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Admission.php">Admission</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Aluminies.php">Aluminies</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="PG_Programme.php">Courses</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Awards.php">Award</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Department_News.php">News & Events</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Department_Seminar.php">Seminar</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Students.php">Student</a>
           
        </div>
        <div class="col-md-3 col-sm-6 col-lg-3 Second-footer">
            <hr>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Area_of_Research.php">Area of Research</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Research_Publication.php">Research Publication</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="http://lib.pondiuni.edu.in/">Library</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="E-Services.php">E-Services</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Computer_Lab.php">Computer Lab</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="http://www.pondiuni.edu.in/">Pondicherry University</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="http://sms.bicpu.edu.in/">SAMS</a>
         </div> 
         <div class="col-md-3 col-sm-6 col-lg-3 third-footer">
            <hr>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Academic_Calender.php">Academic Calender</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Examination.php">Examination</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Result.php">Result</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Department_News.php">Recent News</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Image_Gallery.php">Gallary</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Workshop.php">Workshop</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Developer.php">Developer</a>
         </div>   
    </div>

      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>