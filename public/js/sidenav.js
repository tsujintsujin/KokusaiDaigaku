let navToggle;
let navToggle2;
let navToggle3;
let navToggle4;
let navToggle5;
let sideNav;
let navCol;
let contentM;
let navToggleText;
let checkAllButton;
let uncheckAllButton;
let checkboxes;


addEventListener("load", (event) => { });

onload = (event) => {

  navToggle = document.getElementById('navToggle');

  if (document.getElementById('navToggle2')) {
    navToggle2 = document.getElementById('navToggle2');
  }
  if (document.getElementById('navToggle3')) {
    navToggle3 = document.getElementById('navToggle3');
  }
  if (document.getElementById('navToggle4')) {
    navToggle4 = document.getElementById('navToggle4');
  }
  if (document.getElementById('navToggle5')) {
    navToggle5 = document.getElementById('navToggle5');
  }


  sideNav = document.getElementById('sidebar');
  navCol = document.getElementById('navCol');
  contentM = document.getElementById('contentM');
  navToggleText = document.getElementById('navToggleText');
  checkAllButton = document.getElementById('selectAllStudentsList');
  uncheckAllButton = document.getElementById('removeAllStudentsList');
  checkboxes = document.querySelectorAll(".studentCheckBox");


  navToggle.addEventListener("click", (event) => {

    sidebar.classList.toggle("active");
    navCol.classList.toggle("col-2");
    contentM.classList.toggle("container-fluid");
    contentM.classList.toggle("container");
    if (navToggle2) {
      navToggle2.classList.toggle("active");
    }
    if (navToggle3) {
      navToggle3.classList.toggle("active");
    }
    if (navToggle4) {
      navToggle4.classList.toggle("active");
    }
    if (navToggle5) {
      navToggle5.classList.toggle("active");
    }
    navToggle.classList.toggle("active");

    if (navToggleText.innerHTML === "‹") {
      navToggleText.innerHTML = "›";



    } else {



      navToggleText.innerHTML = "‹";

    }
  });

  if (checkAllButton) {
    checkAllButton.addEventListener("click", function () {
      checkboxes.forEach(checkbox => {
        if (!checkbox.checked) {
          checkbox.click();
        }
      });
    });
  }
  if (uncheckAllButton) {
    uncheckAllButton.addEventListener("click", function () {
      checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
          checkbox.click();
        }
      });
    });
  };
}







