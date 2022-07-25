<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling Files</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container my-5 py-5 w-50 cvSearch" id="cvSearch">
    <form method="POST" action="./search.php" class="mb-5">
        <div class="row">
            <div class="col-12">
                <div class="form-group my-3">
                    <label for="emailSearch">Search For Your CV Via Email</label>
                    <input type="text" class="form-control" id="emailSearch" placeholder="Email" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
         <a href="./pages/personal_info.php"><button class="btn btn-success">OR Please Press Here To Create Your CV</button></a>
    </div>


    <!-- Personal Information -->
    <div class="container my-5 py-5 mainConainer">
        <button id="cvSearchLink">Search For Your CV</button>
        <form method="POST" action="./create_cv.php">
            <div id="personalInfo">
                <div class="form-group my-3">
                    <label for="cvOwner">CV Owner First Name</label>
                    <input type="text" class="form-control" id="cvOwner" placeholder="Owner Name" name="cvname">
                </div>
                <div class="form-group my-3">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Full Name" name="fullname">
                </div>
                <div class="form-group my-3">
                    <label for="emailAddress">Email address</label>
                    <input type="email" class="form-control" id="emailAddress" placeholder="Enter email" name="emailaddress">
                </div>
                <div class="form-group my-3">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="number" class="form-control" id="phoneNumber" placeholder="Enter Your Phone Number" name="phonenumber">
                </div>
                <div class="form-group my-3">
                    <label for="livingPlace">Living Place</label>
                    <input type="text" class="form-control" id="livingPlace" placeholder="Where Do You Live" name="livingplace">
                </div>
                <div class="form-group my-3">
                    <label for="userPicture">Please Add Your Picture (Online Link)</label>
                    <input type="text" class="form-control" id="userPicture" name="userpicture">
                </div>
                <button id="toObjective" class="btn btn-success">Next</button>
            </div>

            <!-- Objective -->
            <div class="form-group my-3 " id="objective">
                <label for="objective">
                    <h1>Objective</h1>
                </label>
                <textarea name="objective" cols="100%" rows="10"></textarea>
                <div class="d-flex justify-content-between my-5 ">
                    <button id="backToPersonalInfo" class="btn btn-warning">Back</button>
                    <button id="toEducation" class="btn btn-success">Next</button>
                </div>
            </div>
            <!-- education -->
            <div id="educationContainer">
                <div class="form-group my-3 w-100 " id="education">
                    <label for="education">
                        <h1>Education</h1>
                    </label>
                    <div class="row" id="educationRow">
                        <div class="col-10 p-0">
                            <input style="width:100%" type="text" name="education[]" class="form-control" placeholder="Education">
                        </div>
                        <div class="col-1 p-0">
                            <button type="button" onclick="adding_education()" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-5 ">
                    <button id="backToObjective" class="btn btn-warning">Back</button>
                    <button id="toExperience" class="btn btn-success">Next</button>
                </div>
            </div>
            <!-- experience -->
            <div id="experienceContainer">
                <div class="form-group my-3 w-100 " id="experience">
                    <label for="objective">
                        <h1>Experience</h1>
                    </label>
                    <div class="row" id="experienceRow">
                        <div class="col-10 p-0">
                            <input style="width:100%" type="text" name="experience[]" class="form-control" placeholder="Experience">
                        </div>
                        <div class="col-1 p-0">
                            <button type="button" onclick="adding_experience()" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-5">
                    <button id="backToEducation" class="btn btn-warning">Back</button>
                    <button id="toSkills" class="btn btn-success">Next</button>
                </div>
            </div>
            <!-- Skills -->
            <div id="skillsContainer">
                <div class="form-group my-3 w-100 " id="skills">
                    <label for="skills">
                        <h1>Skills</h1>
                    </label>
                    <div class="row" id="skillsRow">
                        <div class="col-10 p-0">
                            <input style="width:100%" type="text" name="skill[]" class="form-control" placeholder="Skill1">
                        </div>
                        <div class="col-1 p-0">
                            <button type="button" onclick="adding_skills()" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-5">
                    <button id="backToExperience" class="btn btn-warning">Back</button>
                    <button id="toProgrammingLanguges" class="btn btn-success">Next</button>
                </div>
            </div>
            <!-- programming languages -->

            <div id="programmingLanguagesContainer">
                <div class="form-group my-4 w-100 " id="programmingLangauges">
                    <label for="libraries">
                        <h1>programming Languages</h1>
                    </label>
                    <div class="row" id="programmingRow">
                        <div class="col-10 p-0">
                            <input style="width:100%" type="text" name="programmingLanguage[]" class="form-control" placeholder="programming Language1">
                        </div>
                        <div class="col-1 p-0">
                            <button type="button" onclick="addingProgrammingLanguage()" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-5">
                    <button id="backToSkills" class="btn btn-warning">Back</button>
                    <button id="toFrameworks" class="btn btn-success">Next</button>
                </div>
            </div>
            <!-- frameworks -->
            <div id="frameworksContainer">
                <div class="form-group my-4 w-100 " id="frameworks">
                    <label for="framework">
                        <h1>Frameworks</h1>
                    </label>
                    <div class="row" id="frameworkRow">
                        <div class="col-10 p-0">
                            <input style="width:100%" type="text" name="framework[]" class="form-control" placeholder="Framework1">
                        </div>
                        <div class="col-1 p-0">
                            <button type="button" onclick="addingFramework()" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-5">
                    <button id="backToProgrammingLanguages" class="btn btn-warning">Back</button>
                    <button id="toLibraries" class="btn btn-success">Next</button>
                </div>
            </div>
            <!-- libraries -->
            <div id="librariesContainer">
                <div class="form-group my-4 w-100 " id="libraries">
                    <label for="libraries">
                        <h1>Libraries</h1>
                    </label>
                    <div class="row" id="librariesRow">
                        <div class="col-10 p-0">
                            <input style="width:100%" type="text" name="library[]" class="form-control" placeholder="Library1">
                        </div>
                        <div class="col-1 p-0">
                            <button type="button" onclick="addingLibrary()" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-5">
                    <button id="backToFrameworks" class="btn btn-warning">Back</button>
                    <button id="toSpokenLanguages" class="btn btn-success">Next</button>
                </div>
            </div>
            <!-- Spoken languges -->
            <div id="spokenLangugesContainer">
                <div class="form-group my-4 w-100 " id="spokenLanguages">
                    <label for="spokenLanguages">
                        <h1>Spoken Languges</h1>
                    </label>
                    <div class="row" id="spokenLanguageRow">
                        <div class="col-10 p-0">
                            <input style="width:100%" type="text" name="language[]" class="form-control" placeholder="Spoken Langauge1">
                        </div>
                        <div class="col-1 p-0">
                            <button type="button" onclick="addingSpokenLangugae()" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-5">
                    <button id="backToLibraries" class="btn btn-warning">Back</button>
                    <button  id="toInterests" class="btn btn-success">Next</button>
                </div>
            </div>
            <!-- interest -->
        <div id="interestsContainer">
            <div class="form-group my-3 w-100" id="interests">
                <label for="interests">
                    <h1>Interests</h1>
                </label>
                <div class="row" id="interestRow">
                    <div class="col-10 p-0">
                        <input style="width:100%" type="text" name="interests[]" class="form-control" placeholder="interest1">
                    </div>
                    <div class="col-1 p-0">
                        <button type="button" onclick="adding_iterest()" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between my-5">
                    <button id="backToSpokenLanguages" class="btn btn-warning">Back</button>
                    <button id="toSocialLinks" class="btn btn-success">Next</button>
            </div>
         </div>
            <!-- social links -->
            <div id="socialLinks">
                <div class="form-group my-3">
                    <label for="gitHub">GitHub Account</label>
                    <input type="text" class="form-control" id="gitHub" placeholder="gitHub" name="github">
                </div>
                <div class="form-group my-3">
                    <label for="linkedIn">Linkedin Account</label>
                    <input type="text" class="form-control" id="linkedIn" aria-describedby="emailHelp" placeholder="Linkedin" name="linkedin">
                </div>
                <div class="form-group my-3">
                    <label for="faceBook">Facebook Account</label>
                    <input type="text" class="form-control" id="faceBook" placeholder="Facebook" name="facebook">
                </div>
                <div class="form-group my-3">
                    <label for="instgram">Instagram Account</label>
                    <input type="text" class="form-control" id="instgram" placeholder="Instgram" name="instagram">
                </div>
                <div class="d-flex justify-content-between my-5">
                    <button id="backToInterests" class="btn btn-warning">Back</button>
                    <button id="toCvColor" class="btn btn-success">Next</button>
                </div>
            </div>
            <!-- Cv Color -->
            <div class="form-group my-3 " id="cvColor">
                <label for="cvColor">CV Color</label>
                <input type="color" class="form-control" placeholder="CV Color" name="cvcolor">
                <div class="d-flex justify-content-between my-5">
                    <button id="backToSocialLinks" class="btn btn-warning">Back</button>
                    <button class="btn btn-primary">Create CV</button>
                </div>
            </div>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>