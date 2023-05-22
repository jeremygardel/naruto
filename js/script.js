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