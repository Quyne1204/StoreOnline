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
function handleProductList(prevBtnId, nextBtnId, productContainerId) {
  const prevBtn = document.getElementById(prevBtnId);
  const nextBtn = document.getElementById(nextBtnId);
  const productContainer = document.getElementById(productContainerId);
  const products = productContainer.getElementsByClassName('product');

  let currentIndex = 0;

  function getProductsPerPage() {
    if (window.innerWidth <= 767) {
      return 2; // Số lượng sản phẩm hiển thị trên điện thoại
    } else if (window.innerWidth <= 1024) {
      return 3; // Số lượng sản phẩm hiển thị trên máy tính bảng
    } else {
      return 4; // Số lượng sản phẩm hiển thị trên máy tính
    }
  }

  function showCurrentProducts() {
    const productsPerPage = getProductsPerPage();
    for (let i = 0; i < products.length; i++) {
      if (i >= currentIndex && i < currentIndex + productsPerPage) {
        products[i].style.display = 'block';
      } else {
        products[i].style.display = 'none';
      }
    }
  }

  nextBtn.addEventListener('click', function() {
    currentIndex += getProductsPerPage();
    if (currentIndex + getProductsPerPage() > products.length) {
      currentIndex = 0;
    }
    showCurrentProducts();
  });

  prevBtn.addEventListener('click', function() {
    currentIndex -= getProductsPerPage();
    if (currentIndex < 0) {
      currentIndex = Math.floor((products.length - 1) / getProductsPerPage()) * getProductsPerPage();
    }
    showCurrentProducts();
  });

  window.addEventListener('resize', function() {
    showCurrentProducts();
  });

  showCurrentProducts();
}

// Xử lý danh sách sản phẩm 1
handleProductList('prev-btn-1', 'next-btn-1', 'product-container-1');

// Xử lý danh sách sản phẩm 2
handleProductList('prev-btn-2', 'next-btn-2', 'product-container-2');