document.addEventListener('DOMContentLoaded', function () {
    let headerIcon = document.getElementById('header-icon');
    let searchInput = document.getElementById('search-input');

    headerIcon.addEventListener('click', function () {
        searchInput.classList.toggle("active-search");
    });
});





document.addEventListener("DOMContentLoaded", function () {
  const slidesData = Array.from(document.querySelectorAll(".swiper-slide")).map(
    (slide) => slide.querySelector("span")?.textContent || ""
  );

  const swiper = new Swiper(".mySwiper", {
    centeredSlides: true,
    loop: true,
    speed: 1000,
    slidesPerView: 1,
    allowTouchMove: false,
    waitForTransition: true,
    effect: "slide",
    autoplay: {
      delay: 5500,
      disableOnInteraction: false,
    },
  

    on: {
      init: function () {
        setTimeout(() => {
          document.querySelector(".custom-pagination")?.classList.add("active");
        }, 10);
      },
      slideChange: function () {
        document.querySelectorAll(".custom-pagination").forEach((item, index) => {
          item.classList.toggle("active", swiper.realIndex === index);
        });
      },
    },
  });


   const swiper2 = new Swiper(".mySwiperTours", {
    loop: true,
    speed: 800,
    slidesPerView: 4,
   slidesToScroll: 1,
    spaceBetween: 20,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  // Custom pagination click handler
  document.addEventListener("click", function (e) {
    if (e.target.closest(".custom-pagination")) {
      const slideIndex = parseInt(e.target.closest(".custom-pagination").dataset.index);
      swiper.slideToLoop(slideIndex);
    }
  });
});


