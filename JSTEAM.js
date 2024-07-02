
const members = document.getElementsByClassName("Member");
for (let i = 0; i < members.length; i++) {
  let name = members[i].getElementsByClassName("name")[0];
  let role = members[i].getElementsByClassName("role")[0];
  role.onmouseover = function() {
    let details = document.createElement("div");
    details.className = "details";
    if (this.innerHTML == "Home page and content") {
      details.innerHTML = "Responsible for the front facing layout of the webpage and creates content";
    } 
     if (this.innerHTML == "Content1") {
      details.innerHTML = "creates the content of the page  ";
    } 
    if (this.innerHTML == "Content2") {
        details.innerHTML = "creates the content ";
      } 
     if (this.innerHTML == "About and Content") {
      details.innerHTML = "describes the purpose of the page and the team members and creates content";
    } 
    this.innerHTML += details.outerHTML;
  };
}


window.onload = function() {

  
  var members = document.getElementsByClassName('Member');
  for (var i = 0; i < members.length; i++) {
     
      members[i].setAttribute('name', members[i].getElementsByClassName('name')[0].textContent);
      members[i].setAttribute('role', members[i].getElementsByClassName('role')[0].textContent);

      
      members[i].onclick = function() {
          
          var name = this.getAttribute('name');
          var role = this.getAttribute('role');

          
          alert("developer's name : " + name +"   ,    " +"Role in the website: " + role);
      };
  }
};
$(document).ready(function() {
  
  $(".Member").hover(
    function() {
      $(this).find(".role").fadeIn();
    },
    function() {
      $(this).find(".role").fadeOut();
    }
  );

});
$(document).ready(function() {
  $('.box').click(function() {
    var content = $(this).find('.area');
    content.slideToggle();
  });
});









