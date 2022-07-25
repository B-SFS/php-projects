

// // experience functions
var experienceId = 1;
function adding_experience(){
    experienceId++;
    $('#experience').append(`
    <div class="row my-2 " id = ${experienceId}>
    <div class="col-10 p-0">
    <input style="width:100%" type="text" name="experience[]" class="form-control" placeholder="Experience${experienceId}" >
    </div>
</div>
    `)
    
$('#experienceRow .removingExperience').show();

}

$("#experienceRow").append( `
<div class="col-1 p-0">
<button  class="btn btn-danger removingExperience"><i class="fa-solid fa-minus"></i></button>
</div>
`  
)
$('#experienceRow .removingExperience').hide();
// removing button
$(".removingExperience").click(function (e) {
    e.preventDefault();
    $(`#experience #${experienceId}`).remove();
    experienceId--;
    if(experienceId == 1){
        $("#experienceRow .removingExperience").hide();
     }
  })
// education functions
var educationId = 1;
function adding_education(){
    educationId++;
    $('#education').append(`
    <div class="row my-2 " id = ${educationId}>
    <div class="col-10 p-0">
    <input style="width:100%" type="text" name="education[]"  class="form-control" placeholder="Education${educationId}" >
    </div>
</div>
    `)
    $("#educationRow .removingEducation").show();
}
$("#educationRow").append(
    ` <div class="col-1 p-0">
    <button type="button" onclick="removing_education()"class="btn btn-danger removingEducation"><i class="fa-solid fa-minus"></i></button>
   </div>`
)
$("#educationRow .removingEducation").hide();

function removing_education(){
    $(`#education #${educationId}`).remove();
    educationId--;
    if(educationId == 1){
        $("#educationRow .removingEducation").hide();
     }
}
//  skills functions
 var skillId = 1;
 function adding_skills(){
    skillId++;
     $('#skills').append(`
     <div class="row my-2 " id = ${skillId}>
     <div class="col-10 p-0">
     <input style="width:100%" type="text" name="skill[]" class="form-control" placeholder="Skill${skillId}" >
     </div>
 </div>
     `)
     $("#skillsRow .removingSkill").show();
 }
 $("#skillsRow").append(
    ` <div class="col-1 p-0">
    <button type="button" onclick="removing_skill()"class="btn btn-danger removingSkill"><i class="fa-solid fa-minus"></i></button>
   </div>`
)
$("#skillsRow .removingSkill").hide();
function removing_skill(){
    $(`#skills #${skillId}`).remove();
    skillId--;
    if(skillId == 1){
        $("#skillsRow .removingSkill").hide();
     }
}
 //  interests functions
 var interestId = 1;
 function adding_iterest(){
    interestId++;
     $('#interests').append(`
     <div class="row my-2 " id = ${interestId}>
     <div class="col-10 p-0">
     <input style="width:100%" type="text" name="interests[]" class="form-control" placeholder="Interest${interestId}" >
     </div>
 </div>
     `)
     $(`#interestRow .removingInterest`).show();

 }
 function removing_interest(){
     $("#"+interestId).remove();
     interestId--;
     if(interestId == 1){
        $("#interestRow .removingInterest").hide();
     }
  }

  $("#interestRow").append(`
  <div class ="col-1">
  <button type="button" onclick="removing_interest()"class="btn btn-danger removingInterest m-0"><i class="fa-solid fa-minus"></i></button>
  </div>
  `);
  $(`#interestRow .removingInterest`).hide();
//  programming languages functions
var programmingId = 1;

function addingProgrammingLanguage(){
    programmingId++;
     $('#programmingLangauges').append(`
     <div class="row my-2 " id = ${programmingId}>
     <div class="col-10 p-0">
     <input style="width:100%" type="text" name="programmingLanguage[]" class="form-control" placeholder="Programming Language${programmingId}" >
     </div>
 </div>
     `)
     $("#programmingRow .removingProgrammingLanguage").show();
}

function removingProgrammingLanguage(){
    $(`#programmingLangauges #${programmingId}`).remove();
    programmingId--;
    if(programmingId == 1){
        $("#programmingRow .removingProgrammingLanguage").hide();
     }
}

$("#programmingRow").append(
    ` <div class="col-1 p-0">
    <button type="button" onclick="removingProgrammingLanguage()"class="btn btn-danger removingProgrammingLanguage"><i class="fa-solid fa-minus"></i></button>
   </div>`
)
$("#programmingRow .removingProgrammingLanguage").hide();
// adding frameworks
var frameWorkId = 1;
function addingFramework(){
    frameWorkId++;
     $('#frameworkRow').append(`
     <div class="row my-2 " id = ${frameWorkId}>
     <div class="col-10 p-0">
     <input style="width:100%" type="text" name="framework[]" class="form-control" placeholder="Framework${frameWorkId}" >
     </div>
 </div>
     `)
     $("#frameworkRow .removingFramework").show();
}

function removingFramework(){
    $(`#frameworkRow #${frameWorkId}`).remove();
    frameWorkId--;
    if(frameWorkId == 1){
        $("#frameworkRow .removingFramework").hide();
     }
}

$("#frameworkRow").append(
    ` <div class="col-1 p-0">
    <button type="button" onclick="removingFramework()"class="btn btn-danger removingFramework"><i class="fa-solid fa-minus"></i></button>
   </div>`
)
$("#frameworkRow .removingFramework").hide();
// adding libraries
var librariesId = 1;
function addingLibrary(){
    librariesId++;
     $('#librariesRow').append(`
     <div class="row my-2 " id = ${librariesId}>
     <div class="col-10 p-0">
     <input style="width:100%" type="text" name="library[]" class="form-control" placeholder="Library${librariesId}" >
     </div>
 </div>
     `)
     $("#librariesRow .removingLibrary").show();
}

function removingLibrary(){
    $(`#libraries #${librariesId}`).remove();
    librariesId--;
    if(librariesId == 1){
        $("#librariesRow .removingLibrary").hide();
     }
}

$("#librariesRow").append(
    ` <div class="col-1 p-0">
    <button type="button" onclick="removingLibrary()"class="btn btn-danger removingLibrary"><i class="fa-solid fa-minus"></i></button>
   </div>`
)
$("#librariesRow .removingLibrary").hide();
// adding spoken languages
var spokenLanguageId = 1;
function addingSpokenLangugae(){
    spokenLanguageId++;
     $('#spokenLanguageRow').append(`
     <div class="row my-2 " id = ${spokenLanguageId}>
     <div class="col-10 p-0">
     <input style="width:100%" type="text" name="language[]" class="form-control" placeholder="Language${spokenLanguageId}" >
     </div>
 </div>
     `)
     $("#spokenLanguageRow .removingSpokenLanguage").show();
}

function removingSpokenLanguage(){
    $(`#spokenLanguages #${spokenLanguageId}`).remove();
    spokenLanguageId--;
    if(spokenLanguageId == 1){
        $("#spokenLanguageRow .removingSpokenLanguage").hide();
     }
}

$("#spokenLanguageRow").append(
    ` <div class="col-1 p-0">
    <button type="button" onclick="removingSpokenLanguage()"class="btn btn-danger removingSpokenLanguage"><i class="fa-solid fa-minus"></i></button>
   </div>`
)
$("#spokenLanguageRow .removingSpokenLanguage").hide();

$("#id").hide();
//////////////////////////////////////////////////////////////////////////////////////////////////
// cv Search
$("#cvSearchLink").click(function(e){
    e.preventDefault();
    $("#personalInfo").hide();
    $("#cvSearchLink").hide();
    $("#cvSearch").fadeIn(700);
})
// To Objective
$("#toObjective").click(function(e){
    e.preventDefault();
    $("#personalInfo").hide();
    $("#cvSearchLink").hide();
    $("#objective").fadeIn(700);
})
// back To Personal info
$("#backToPersonalInfo").click(function(e){
    e.preventDefault();
    $("#objective").hide();
    $("#personalInfo").fadeIn(700);
    $("#cvSearchLink").fadeIn(700);
})
// To Education
$("#toEducation").click(function(e){
    e.preventDefault();
    $("#objective").hide()
    $("#educationContainer").fadeIn(700)
})
// back To Objective
$("#backToObjective").click(function(e){
    e.preventDefault();
    $("#educationContainer").hide();
    $("#objective").fadeIn(700);
})
// To Experience
$("#toExperience").click(function(e){
    e.preventDefault();
    $("#educationContainer").hide()
    $("#experienceContainer").fadeIn(700)
})
// back To educationContainer
$("#backToEducation").click(function(e){
    e.preventDefault();
    $("#experienceContainer").hide();
    $("#educationContainer").fadeIn(700);
})
// To Skills
$("#toSkills").click(function(e){
    e.preventDefault();
    $("#experienceContainer").hide()
    $("#skillsContainer").fadeIn(700)
})
// back To experienceContainer
$("#backToExperience").click(function(e){
    e.preventDefault();
    $("#skillsContainer").hide()
    $("#experienceContainer").fadeIn(700)
})
// To Programming Languages
$("#toProgrammingLanguges").click(function(e){
    e.preventDefault();
    $("#skillsContainer").hide()
    $("#programmingLanguagesContainer").fadeIn(700)
})
// back To skillsContainer
$("#backToSkills").click(function(e){
    e.preventDefault();
    $("#programmingLanguagesContainer").hide()
    $("#skillsContainer").fadeIn(700)
})
// To frameworksContainer
$("#toFrameworks").click(function(e){
    e.preventDefault();
    $("#programmingLanguagesContainer").hide()
    $("#frameworksContainer").fadeIn(700)
})
// back To Programming Languages
$("#backToProgrammingLanguages").click(function(e){
    e.preventDefault();
    $("#frameworksContainer").hide()
    $("#programmingLanguagesContainer").fadeIn(700)
})
// To Libraries
$("#toLibraries").click(function(e){
    e.preventDefault();
    $("#frameworksContainer").hide()
    $("#librariesContainer").fadeIn(700)
})
// back To frameworksContainer
$("#backToFrameworks").click(function(e){
    e.preventDefault();
    $("#librariesContainer").hide()
    $("#frameworksContainer").fadeIn(700)
})
// To Spoken Languages
$("#toSpokenLanguages").click(function(e){
    e.preventDefault();
    $("#librariesContainer").hide()
    $("#spokenLangugesContainer").fadeIn(700)
})
// back To frameworksContainer
$("#backToLibraries").click(function(e){
    e.preventDefault();
    $("#spokenLangugesContainer").hide()
    $("#frameworksContainer").fadeIn(700)
})
// To Interestes
$("#toInterests").click(function(e){
    e.preventDefault();
    $("#spokenLangugesContainer").hide()
    $("#interestsContainer").fadeIn(700)
})
// back To spokenLangugesContainer
$("#backToSpokenLanguages").click(function(e){
    e.preventDefault();
    $("#interestsContainer").hide()
    $("#spokenLangugesContainer").fadeIn(700)
})
// To SocialLinks
$("#toSocialLinks").click(function(e){
    e.preventDefault();
    $("#interestsContainer").hide()
    $("#socialLinks").fadeIn(700)
})
// back To Interestes
$("#backToInterests").click(function(e){
    e.preventDefault();
    $("#socialLinks").hide()
    $("#interestsContainer").fadeIn(700)
})
// To Cv Color
$("#toCvColor").click(function(e){
    e.preventDefault();
    $("#socialLinks").hide()
    $("#cvColor").fadeIn(700)
})
// back To SocialLinks
$("#backToSocialLinks").click(function(e){
    e.preventDefault();
    $("#cvColor").hide()
    $("#socialLinks").fadeIn(700)
})