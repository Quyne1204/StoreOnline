function setActive(index, subIndex = -1) {
    var lis = document.getElementsByClassName("btn-li");

    // Loại bỏ lớp "active" từ tất cả các phần tử
    for (var j = 0; j < lis.length; j++) {
        lis[j].classList.remove("active");
    }

    // Thêm lớp "active" cho phần tử được nhấp
    lis[index].classList.add("active");

    // Lưu trạng thái vào sessionStorage
    sessionStorage.setItem("activeIndex", index);
    sessionStorage.setItem("activeSubIndex", subIndex);
}

// Kiểm tra và khôi phục trạng thái khi trang được tải lại
window.onload = function () {
    var activeIndex = sessionStorage.getItem("activeIndex");
    var activeSubIndex = sessionStorage.getItem("activeSubIndex");

    if (activeIndex !== null) {
        setActive(parseInt(activeIndex), parseInt(activeSubIndex));
    }
};

//open menu left
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("menuLeft").style.width = "60%";
    document.getElementById("menuRight").style.width = "40%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0%";
    document.getElementById("menuLeft").style.width = "0%";
    document.getElementById("menuRight").style.width = "0%";
}

// Dropdown
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
const menulis = document.getElementById("dropdown1");
function dropdownMenu() {
    menulis.classList.toggle('d-none');
    menulis.classList.toggle('d-block');
}