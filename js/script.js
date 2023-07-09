$(document).ready(function () {

    
    $(".adsz").animate({
        'top': '50px'

    },3000)

    $('#adsexit').click(function() {
        $(".adsz").fadeOut(1000);
    })


    $('.overlay').hide();
    $('.login-page').hide();
    $('#link').click(function () {
        $('.overlay').fadeIn(1000);
        $('.login-page').fadeIn(1000);
    });


    $('.overlay-contact').hide();
    $('.contact-pop').hide();
    $('#contact').click(function() {
        $('.overlay-contact').fadeIn(1000);
        $('.contact-pop').fadeIn(1000);
    });
    $('#contactexit').click(function() {
        $('.overlay-contact').fadeOut(1000);
        $('.contact-pop').fadeOut(1000);
    })


    $(window).scroll(function (){
        if($(window).scrollTop() > 700 ){
            $('.top').fadeIn();
        }else{
            $('.top').fadeOut();
        }
    });

    $('.top').click(function() {
        $(window).scrollTop(0);
    });

    $('#popexit').click(function() {
        $('.overlay').fadeOut(1000);
        $('.login-page').fadeOut(1000);
    });

  

});





// JS
// OnLoad
window.onload = function(){ document.querySelector(".preloader").style.display = "none"; }



// Search Bar Main Page 
    let searchText = document.getElementById("searchText");
    var searchs = ["Jeremy", "Omar", "Niera", "Khaled", "Beside"];
    let userType = document.getElementById("usertype");

function searchArray() {
    if(searchs.includes(searchText.value))
    {
        userType.innerHTML = `Found <span style="color: red; font-weight: 700;">${searchText.value}</span>`;
        searchText.value = "";
        searchText.style.border = "none";

    }else if(searchText.value == "") 
    {
        userType.innerHTML = 'Type Something here...';
        searchText.value = "";
        searchText.style.border = "2px solid red";
    }
    else{

        searchText.value = "";
        searchText.style.border = "2px solid red";
        userType.innerHTML = 'Not found, Try again..';
    }
}


// Register Testinput



//      Login Page Pop Up

let overlay = document.getElementById("overlayid");
let loginPage = document.getElementById("loginid");
let signIn = document.getElementById("link");
let popexit = document.getElementById("popexit");
let btnlogin = document.getElementById("btnlogin");
let email = document.getElementById("loginemail");
let password = document.getElementById("loginpassword");





function exitLogin() {
    // overlay.style.display = "none";
    // loginPage.style.display = "none";
}
function login() {
    if(email.value && password.value === "") {
    }
    else if(emial.value.contains('@')) {
        overlay.style.display = "none";
        loginPage.style.display = "none";
    }
}

// >>> NEED TO BE EDITED!
// Responsive Navbar
 function showDropdown() {
    let navbar = document.getElementById("navbar-ul-js");
    let dropdown = document.getElementsByClassName("navbar-link");
    if(navbar.style.display === "flex")
    {
        navbar.style.display = "block";
        for(let i = 0; i < dropdown.length; i++){
            dropdown[i].style.display = "block";
         }
    }
    else {
        navbar.style.display = "flex";

    }

 }
//  Heros

//  Close Ads
let aDs = document.getElementById("adsid");
let closeAds = document.getElementById("closeadsid");
function closeads() {
    closeAds.style.display = "none";
    aDs.style.display = "none";
}






//     document.getElementById("myDropdown").classList.toggle("show");
//   }
  
//   // Close the dropdown if the user clicks outside of it
//   window.onclick = function(event) {
//     if (!event.target.matches(".dropbtn")) {
//       var dropdowns = document.getElementsByClassName("dropdown-content");
//       var i;
//       for (i = 0; i < dropdowns.length; i++) {
//         var openDropdown = dropdowns[i];
//         if (openDropdown.classList.contains("show")) {
//           openDropdown.classList.remove("show");
//         }
//       }
//     }
//   };