var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) { myIndex = 1 }
  x[myIndex - 1].style.display = "block";
  setTimeout(carousel, 2000);
}

//////slide items
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');
const productContainer = document.getElementById('product-container');
const products = productContainer.getElementsByClassName('product');

let currentIndex = 0;

function showCurrentProducts() {
  for (let i = 0; i < products.length; i++) {
    if (i >= currentIndex && i < currentIndex + 6) {
      products[i].style.display = 'block';
    } else {
      products[i].style.display = 'none';
    }
  }
}

nextBtn.addEventListener('click', function() {
  currentIndex++;
  if (currentIndex + 6 > products.length) {
    currentIndex = 0;
  }
  showCurrentProducts();
});

prevBtn.addEventListener('click', function() {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = products.length - 6;
  }
  showCurrentProducts();
});

showCurrentProducts();