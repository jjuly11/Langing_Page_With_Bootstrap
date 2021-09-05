function about_tab(){
  var skills=document.getElementById("skills");
  var projects=document.getElementById("projects");
  var about=document.getElementById("about");

  var img=document.getElementById("abt_img");
  
  img.src="images/portImg.jpg";

  console.log("About Tab Has been clicked");
  skills.style.display="none";
  projects.style.display="none";
  about.style.display="block";

  document.getElementById("skills_control").classList.remove("active");
  document.getElementById("projects_control").classList.remove("active");
  document.getElementById("about_control").classList.add("active");
  return null;
}

function skills_tab(){
  var skills=document.getElementById("skills");
  var projects=document.getElementById("projects");
  var about=document.getElementById("about");

  var img=document.getElementById("abt_img");
  
  img.src="images/skill_img.jpg";
  console.log("Skills Tab Has been clicked");
  skills.style.display="block";
  projects.style.display="none";
  about.style.display="none";

  document.getElementById("about_control").classList.remove("active");
  document.getElementById("projects_control").classList.remove("active");
  document.getElementById("skills_control").classList.add("active");
}

function projects_tab(){
  var skills=document.getElementById("skills");
  var projects=document.getElementById("projects");
  var about=document.getElementById("about");

  var img=document.getElementById("abt_img");
  
  img.src="images/project_img.jpg";

  console.log("Projects Tab Has been clicked");
  skills.style.display="none";
  projects.style.display="block";
  about.style.display="none";

  document.getElementById("about_control").classList.remove("active");
  document.getElementById("skills_control").classList.remove("active");
  document.getElementById("projects_control").classList.add("active");
}
