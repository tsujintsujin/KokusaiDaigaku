let navtoggle;
let sideNav;
let navCol;
let contentM;
let navToggleText;

addEventListener("load", (event) => { });

onload = (event) => {
    navtoggle = document.getElementById('navToggle');
    sideNav = document.getElementById('sidebar');
    navCol = document.getElementById('navCol');
    contentM = document.getElementById('contentM');
    navToggleText = document.getElementById('navToggleText');

    navtoggle.addEventListener("click", (event) => {
       
      sidebar.classList.toggle("active");
        navCol.classList.toggle("col-2");
        contentM.classList.toggle("container-fluid");
        contentM.classList.toggle("container");
        navtoggle.classList.toggle("active");
        
        if (navToggleText.innerHTML === "‹") {
            navToggleText.innerHTML = "›";
          } else {
            navToggleText.innerHTML = "‹";
          }


    });

};






