document.addEventListener("DOMContentLoaded", function () {
  // Selecting the login form container
  const loginForm = document.querySelector(".login-form-container");

  // Selecting the sign-up form container
  const signupForm = document.querySelector(".signin-form-container");

  // Selecting the close button in the sign-up form
  const closeSignupBtn = signupForm.querySelector("#close-login-btn");

  // Selecting the close button in the login form
  const closeLoginBtn = loginForm.querySelector("#close-login-btn");

  // Handling click event on the login button
  document.getElementById("login-btn").addEventListener("click", function () {
    // Hide the sign-up form
    signupForm.classList.remove("active");

    // Toggle the visibility of the login form
    loginForm.classList.toggle("active");
  });

  // Handling click event of the "Create one" link in the login form
  loginForm.addEventListener("click", function (event) {
    // Check if the clicked element is the "Create one" link
    if (event.target.matches('a[href="#signin-btn"]')) {
      // Prevent the default behavior of the link
      event.preventDefault();

      // Hide the login form
      loginForm.classList.remove("active");

      // Show the sign-up form
      signupForm.classList.add("active");
    }
  });

  // Handling click event on the close button in the login form
  closeLoginBtn.addEventListener("click", function () {
    // Hide the login form
    loginForm.classList.remove("active");
  });

  // Handling click event on the close button in the sign-up form
  closeSignupBtn.addEventListener("click", function () {
    // Hide the sign-up form
    signupForm.classList.remove("active");
  });
});

window.onscroll = () => {
  searchForm.classList.remove("active");
  if (window.scrollY > 80) {
    document.querySelector(".header .header-2").classList.add("active");
  } else {
    document.querySelector(".header .header-2").classList.remove("active");
  }
};
window.onload = () => {
  if (window.scrollY > 80) {
    document.querySelector(".header .header-2").classList.add("active");
  } else {
    document.querySelector(".header .header-2").classList.remove("active");
  }
  fadeOut();
};
function loader() {
  document.querySelector(".loader-container").classList.add("active");
}
function fadeOut() {
  setTimeout(loader, 4000);
}
var swiper = new Swiper(".books-slider", {
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    600: {
      slidesPerView: 2,
    },
    800: {
      slidesPerView: 3,
    },
  },
});
var swiper = new Swiper(".featured-slider", {
  spaceBetween: 15,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    400: {
      slidesPerView: 2,
    },
    650: {
      slidesPerView: 3,
    },
    1150: {
      slidesPerView: 4,
    },
    1400: {
      slidesPerView: 5,
    },
  },
});
var swiper = new Swiper(".arrivals-slider", {
  spaceBetween: 10,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    500: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
var swiper = new Swiper(".reviews-slider", {
  spaceBetween: 10,
  grabCursor: true,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    500: {
      slidesPerView: 2,
    },
    900: {
      slidesPerView: 3,
    },
    1400: {
      slidesPerView: 4,
    },
    1800: {
      slidesPerView: 5,
    },
  },
});



function submitForm(isbn) {
  document.getElementById("isbnInput").value = isbn;
  document.getElementById("isbnForm").submit();
}


// Function to handle search input


function handleSearchInput() {

  var searchTerm = document.getElementById('search-box').value; 

  var filterOption = document.getElementById('filter-dropdown').value;

  console.log(filterOption);

  var formAction = 'welcome.php?search=' + encodeURIComponent(searchTerm) + '&filter=' + filterOption;

  document.getElementById('search-form').action = formAction;
}

document.getElementById('filter-dropdown').addEventListener('change', function() {
  var filterValue = this.value;
  document.getElementById('filter-input').value = filterValue;
  handleSearchInput();
});


// Event listener for search input

document.getElementById('search-box').addEventListener('input', function() {
  handleSearchInput(); 
});

function sendFilterValue() {
  handleSearchInput();
}
document.getElementById('filter-dropdown').addEventListener('change', sendFilterValue);

sendFilterValue();


//alert

window.addEventListener('beforeunload', function (e) {
  // Remove the event listener to prevent the confirmation dialog
  window.removeEventListener('beforeunload', null);
});