document.addEventListener("DOMContentLoaded", function () {
  const summaryElement = document.getElementById("summary-text");
  const summaryText = summaryElement.textContent.trim(); // Get the summary text from the HTML

  // Remove the summary text from the HTML to prepare for animation
  summaryElement.textContent = "";

  let currentIndex = 0;
  let interval;

  // Function to generate letters one by one
  function generateLetters() {
    if (currentIndex < summaryText.length) {
      summaryElement.textContent += summaryText[currentIndex];
      currentIndex++;
    } else {
      // Animation complete, stop further generation
      clearInterval(interval);
    }
  }

  interval = setInterval(generateLetters, 50);
});

// Data to cart

document.addEventListener("DOMContentLoaded", function () {
  var addToCartForm = document.getElementById("addToCartForm");
  addToCartForm.addEventListener("submit", function (event) {
    event.preventDefault();

    var cartList = document.querySelector(".cartWrap");

    cartList.innerHTML = `
              <li class="items even">
                <div class="infoWrap">
                    <div class="cartSection">
                        <img src="Images/${bookDetails.image}" alt="Image not found" class="itemImg" />
                        <h3 class="card-title">Title: ${bookDetails.title}</h3>
                        <h3 class="card-title">Author: ${bookDetails.author}</h3>
                        <h3 class="card-title">Publisher: ${bookDetails.publisher}</h3>
                        <h3 class="card-title">Published Date: ${bookDetails.date}</h3>
                    </div>
                    <div style="font-size: 14px;">Price: ${bookDetails.price}</div>
                    <div class="cartSection removeWrap">
                        <a href="#" class="remove" style="font-size:14px;">x</a>
                    </div>
                </div>

              
                <!-- Buy Button -->

              </li>
            `;

    var addToCartButton = document.querySelector(".buy");
    addToCartButton.style.display = "inline-block";
  });
});


