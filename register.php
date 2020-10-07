<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="styles/register.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

    <div class="super_container">
        <?php
        include("includes/header.php")
        ?>
        <div class="page_section">

            <div class="container register1">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images/mentor.png" alt=""/>
                        <h1></h1>
                        <p></p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h1 class="register-heading">Get Quote now</h1>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <form action="schoolregister.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="School Name *" value="" required />
                                        </div>
                                        
                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" required />
                                        </div>
                                        
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="What do you want to know about" value=""></textarea>
                                        </div>
                                        <input type="submit" class="btnRegister"  name="school" value="Submit" />
                                    </div>
                                        </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h1  class="register-heading">Get Quote Now</h1>
                                <form action="studentregister.php" method="POST" id="stuform">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="School Name *" value="" required />
                                        </div>

                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="nil">What Standard are you in</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="College">College</option>
                                            </select>
                                        </div>
                                        
                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="studentemail" placeholder="Your Email *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" required />
                                        </div>
                                        
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="nil">What are you interested in learning</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Python and Data Sciences">Python and Data Sciences</option>
                                                <option value="JAVA">JAVA</option>
                                                <option value="Android">Android</option>
                                            </select>

                                            <input type="submit" class="btnRegister" name="student" value="Submit"/>
                                        </div>
                                      
                                        
                                    </div>
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
       <?php
       include("includes/footer.php")
       ?>


  

    

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
\
</body>
</html>