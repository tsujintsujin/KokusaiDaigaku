let navtoggle;
let navtoggle2;
let navtoggle3;
let navtoggle4;
let navtoggle5;
let sideNav;
let navCol;
let contentM;
let navToggleText;
let checkAllButton;
let uncheckAllButton;
let checkboxes;


addEventListener("load", (event) => { });

onload = (event) => {
  navtoggle = document.getElementById('navToggle');
  navtoggle2 = document.getElementById('navToggle2');
  navtoggle3 = document.getElementById('navToggle3');
  navtoggle4 = document.getElementById('navToggle4');
  navtoggle5 = document.getElementById('navToggle5');
  sideNav = document.getElementById('sidebar');
  navCol = document.getElementById('navCol');
  contentM = document.getElementById('contentM');
  navToggleText = document.getElementById('navToggleText');
  checkAllButton = document.getElementById('selectAllStudentsList');
  uncheckAllButton = document.getElementById('removeAllStudentsList');
  checkboxes = document.querySelectorAll(".studentCheckBox");


  navtoggle.addEventListener("click", (event) => {

    sidebar.classList.toggle("active");
    navCol.classList.toggle("col-2");
    contentM.classList.toggle("container-fluid");
    contentM.classList.toggle("container");
    navtoggle.classList.toggle("active");
    navtoggle2.classList.toggle("active");
    navtoggle3.classList.toggle("active");
    navtoggle4.classList.toggle("active");
    navtoggle5.classList.toggle("active");
    if (navToggleText.innerHTML === "‹") {
      navToggleText.innerHTML = "›";
     
     
     
    } else {
     
     
     
      navToggleText.innerHTML = "‹";

    }
  });


  checkAllButton.addEventListener("click", function () {
    checkboxes.forEach(checkbox => {
      if (!checkbox.checked) {
        checkbox.click();
      }
    });
  });

  uncheckAllButton.addEventListener("click", function () {
    checkboxes.forEach(checkbox => {
      if (checkbox.checked) {
        checkbox.click();
      }
    });
  });
};








