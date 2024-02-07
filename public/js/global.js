let swiper = new Swiper(".mySwiper", {
    spaceBetween: 5,
    centeredSlides: true,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    loop: true,
});

// $(document).ready(function () {
//     // Bắt đầu với mục đầu tiên được chọn là Home
//     $(".nav__menu li:first").addClass("active");

//     // Xử lý sự kiện click
//     $(".nav__menu li").click(function () {
//         // Xóa class active từ tất cả các mục
//         $(".nav__menu li").removeClass("active");

//         // Thêm class active cho mục được click
//         $(this).addClass("active");
//     });
// });

// let count__cart = document.querySelector('.count__cart')

// const addToCart = (id, name, price, image) => {
//     $.ajax({
//         type: "POST",
//         url: "?act=handleAddToCart",
//         data: {
//             id,
//             name,
//             price,
//             image
//         },
//         success: function (res) {
//             // count__cart.textContent = res;
//             alert('Thêm giỏ hàng thành công !');
//         },
//         error: function (err) {
//             console.log(err);
//         }
//     })
// }

// const count__cart = document.querySelector('.count__cart');

// const addToCart = (id, name, price, image) => {
//     $.ajax({
//         type: "POST",
//         url: "?act=handleAddToCart",
//         data: {
//             id,
//             name,
//             price,
//             image
//         },
//         success: function (res) {
//             // Update the cart count dynamically
//             count__cart.innerHTML = res;
//             console.log(res);
//             alert('Thêm giỏ hàng thành công !');
//         },
//         error: function (err) {
//             console.log(err);
//         }
//     });
// };


