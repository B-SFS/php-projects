<?php
$json_content= json_decode(file_get_contents('./cv\'s.json'));
$cv_name= $_POST['cvname'];
$full_name= $_POST['fullname'];
$emailaddress= $_POST['emailaddress'];
$phone_number= $_POST['phonenumber'];
$living_place= $_POST['livingplace'];
$user_picture= $_POST['userpicture'];
$objective= $_POST['objective'];
$education= $_POST['education'];
$experience= $_POST['experience'];
$skill= $_POST['skill'];
$programming_langauges= $_POST['programmingLanguage'];
$framework= $_POST['framework'];
$library= $_POST['library'];
$language= $_POST['language'];
$interest= $_POST['interests'];
$github= $_POST['github'];
$linkedin= $_POST['linkedin'];
$facebook= $_POST['facebook'];
$instagram= $_POST['instagram'];
$cv_color= $_POST['cvcolor'];

$final_education = '';
foreach ($education as $key => $edu){
    $final_education .= "<li>$edu</li>";
}
$final_experience = '';
foreach ($experience as $key => $exp){
    $final_experience .= "<li>$exp</li>";
}
$final_skill = '';
foreach ($skill as $key => $skill){
    $final_skill .= "<li>$skill</li>";
}
$final_programmingLanguage = '';
foreach ($programming_langauges as $key => $pLangauge){
    $final_programmingLanguage .= "<li>$pLangauge</li>";
}
$final_framework = '';
foreach ($framework as $key => $fram){
    $final_framework .= "<li>$fram</li>";
}
$final_library = '';
foreach ($library as $key => $lib){
    $final_library .= "<li>$lib</li>";
}
$final_language = '';
foreach ($language as $key => $lang){
    $final_language .= "<li>$lang</li>";
}
$final_interest = '';
foreach ($interest as $key => $interest){
    $final_interest .= "<li>$interest</li>";
}
$json_content [] = [
    "cv_name" => $cv_name,
    "full_name" => $full_name,
    "email_address" =>$emailaddress,
    "phone_number" =>$phone_number,
    "living_place" =>$living_place,
    "user_picture" =>$user_picture,
    "objective" =>$objective,
    "education" =>$education,
    "experience" =>$experience,
    "skill" =>$skill,
    "programming_langauges" =>$programming_langauges,
    "framework" =>$framework,
    "library" =>$library,
    "langauge" =>$language,
    "interest" =>$interest,
    "github" =>$github,
    "linkedin" =>$linkedin,
    "facebook" =>$facebook,
    "instagram" =>$instagram,
    "cv_color" =>$cv_color,
];
file_put_contents('./cv\'s.json',json_encode($json_content));


$html_template = <<<html_template

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$cv_name></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<style>
    .header{
        background-color: $cv_color;
    }
    *{
    text-decoration: none;
    /* list-style:none ; */
    scroll-behavior: smooth;
}
body{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


.contact{
    font-family: 'Roboto', sans-serif;
}
.container{
    padding: 0px;
}
nav{
    width: 100%;

}
.content{
    padding: 0px;
    position: relative;
    width: 100%;
    height: 100%;
    border:2px solid grey;
    position: relative;
}
.info{
background-color:$cv_color;
padding: 0;
}
.section-header{
    background-color: #3f4754;
    width: 100%;
}
section{
    width: 100%;
    height: 100%;
    /* background-color: red; */
}
.dicussion{
    text-transform: uppercase;
    color: white;
    font-family: 'Roboto', sans-serif;
}
.email-phone{
    text-decoration: underline;
}
.section-header h6{
    color: white;
    font-size: 130%;
    padding: 2%;

}
.section-header-disucssion li{
    padding-top:0%;
    padding-bottom: 3%;
    font-size: 130%;
    font-weight: 500;
    color: white;
    font-family: 'Roboto', sans-serif;
}
.row{
    margin-top: 3rem;
}
.main-info{
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
    font-weight: 600;
    border-bottom:1px solid black;
    width: 200px;
}
.main-info h2{
    font-size: 170%;
}
.main-info p{
font-size: 110%;
font-family: 'Roboto', sans-serif;
font-weight: 600;
width: 100%;
}
.date{
    font-size: 40%;
}

.main-info-skills{
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
    font-weight: 600;
    border-bottom:1px solid black
}
.main-info-skills h2{
 font-size: 170%;
}
.footer{
    width: 100%;
    background-color:$cv_color ;
    margin-top: 0.5rem;
    padding:0.5rem 0 0.2rem 0;
}
.footer ul{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0px;
}
.footer li a{
color: rgb(78, 74, 74);
font-size: 150%;
margin-left: 2rem;
}
li{
    font-size: 130%;
}
.pContainer{
    width: 100px;
}
.pContainer p{
    width: 100px;
}
.lastRowInterest{
    text-decoration: none;
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
    font-weight: 600;
}
@media print{
#printCV{
    display: none;
}
}
</style>
<body>
<div class="container">
    <a><button type="button" onclick="window.print()" id="printCV" class="btn btn-success">Print CV</button></a>
    <a href="../index.php"><button type="button" id="printCV" class="btn btn-success">Create Another CV</button></a>
</div>
    <section class="content container">
        <header>
            <div>
                <nav class="navbar navbar-expand-lg navbar-light header">
                    <a class="navbar-brand text-light" href="#">$cv_name</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto  active ">
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="#experience">Experience <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="#education">Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="#skills">Skills</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="#interest">Interests</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <!-- aside -->
            <section>
                <div class="container">
                    <div class="row m-0">
                        <div
                            class="info col-lg-3 col-md-4 col-sm-6 ">
                            <div>
                                <img src="$user_picture"
                                    class="col-lg-12  img" alt="">
                                <p
                                    class="text-uppercase text-light col-lg-12   align-items-center pt-2 text-center font-weight-bold">
                                    $full_name</p>
                                <div class="container-fluid">
                                    <div>
                                        <!-- contact info -->
                                        <section class="contact">
                                            <div
                                                class="col-lg-12 text-capitalize  section-header text-light p-1 text-center font-weight-bold">
                                                contact
                                            </div>
                                            <div class="col-lg-12 text-capitalize text-light email-phone mt-4 mb-2">
                                                <i class="fa-solid fa-at"></i>
                                               <a class="text-light " href="mailto: silwadi35@gmail.com">$emailaddress</a>
                                            </div>
                                            <div class="col-lg-12 text-light email-phone mb-2">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <a class="text-light" href="tel:+962788773537" >$phone_number</a>
                                            </div>
                                            <div class="col-lg-12 text-light ">
                                                <i class="fa-solid fa-location-dot"></i>
                                                $living_place
                                            </div>
                                        </section>
                                        <!-- languages -->
                                        <section class=" text-center  text-capitalize mt-4">
                                            <div class="col-lg-12  section-header text-center ">
                                                <h6>Programming Languages</h6>
                                            </div>
                                            <div class="section-header-disucssion mt-3">
                                            <ul class="list-unstyled">
                                            $final_programmingLanguage
                                            </ul>
                                            </div>
                                        </section>
                                        <!-- libraries -->
                                        <section class=" text-center text-capitalize">
                                            <div class="col-lg-12 text-capitalize   section-header text-center ">
                                                <h6>Libraries</h6>
                                            </div>
                                            <div class="section-header-disucssion mt-3">
                                                <ul class="list-unstyled">
                                                $final_library
                                                </ul>
                                            </div>
                                        </section>
                                        <!-- frameworks -->
                                        <section class=" text-center text-capitalize">
                                            <div class="col-lg-12 text-capitalize   section-header text-center ">
                                                <h6>frameworks</h6>
                                            </div>
                                            <div class="section-header-disucssion mt-3">
                                                <ul class="list-unstyled">
                                                $final_framework
                                                </ul>
                                            </div>
                                        </section>
                                        <!-- spoken languages -->
                                        <section class=" text-center">
                                            <div class="col-lg-12 text-capitalize   section-header text-center">
                                                <h6 class="text-light">spoken languages</h6>
                                            </div>
                                            <div class="section-header-disucssion text-capitalize d-flex flex-column justify-content-center align-content-center mt-3">
                                                <ul class="list-unstyled">
                                                $final_language
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- main content -->
                        <div class="col">
                          <div class="row container ml-1">
                              <!-- objectives -->
                              <div class="col-12 main-info text-center mb-3">
                                  <h2  class="text-uppercase text-secondary  ">objective</h2>
                                  <p class="text-capitalize">$objective</p>  
                              </div>
                              <!-- experience -->
                              <div id="experience" class="col-12 text-sm-center  main-info text-center text-capitalize">
                                  <h2 class="text-capitalize text-secondary ">Experience</h2>
                                  <div>
                                     <ul class="text-capitalize">
                                        $final_experience
                                     </ul>
                                  </div>
                              </div>
                          </div>
                         
                          <!-- education -->
                          <div  class="row text-center ml-1">
                              <div  id="education" class="col-12 main-info mb-3 ">
                                <div>
                                     <h2 class="text-secondary text-uppercase">education </h2>
                                <ul class="text-capitalize" >
                                
                                    $final_education
                                </ul>
                                   
                                </div>
                              </div>
                              <div id="skills" class="col-12 main-info-skills ">
                                  <div class="text-center">
                                    <h2 class="text-secondary">skills</h2>
                                    <ul class="text-capitalize">
                                        $final_skill
                                    </ul>
                                  </div>
                              </div>
                          </div>
                          <!-- interest -->
                          <div class="row lastRowInterest" id="interest">
                              <div class="col-12 text-center">
                                  <div>
                                    <h2  style="color:grey">interest</h2>
                                    <ul class="text-capitalize text-center ">
                                        $final_interest
                                    </ul>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
         <footer>
                <section class="footer">
                    <ul>
                        <li><a href="$github" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                        <li><a href="$linkedin" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="$facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="$instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </section>

        </footer> 

    </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>

</body>

</html>
html_template;


file_put_contents('./CV/'.$cv_name.".html" ,$html_template);
header("Location: ./CV/".$cv_name.".html");