<footer>
    <div class="footer-container">
        <!--**comoany-box**-->
        <div class="footer-company-box">
            <!--logo-->
            <a href="#" class="logo"><span>We</span>Care</a>
            <!--details-->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quas neque repudiandae nihil.</p>
            <!--social-box-->
            <div class="footer-social">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <!--**link-box***-->
        <div class="footer-link-box">
            <strong>Main Link's</strong>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
            </ul>
        </div>
        <!--**link-box***-->
        <div class="footer-link-box">
            <strong>External Link's</strong>
            <ul>
                <li><a href="#">Our Product's</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Trem's and Condition's</a></li>
            </ul>
        </div>
        <!--**link-box***-->
        <div class="footer-link-box">
            <strong>External Link's</strong>
            <ul>
                <li><a href="#">Our Product's</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Trem's and Condition's</a></li>
            </ul>
        </div>
        

    </div>

    <!--**bottom**********************-->
    <div class="footer-bottom">
        <span class="footer-owner">Made By Swadhin Mojumder</span>
        <span class="copyright">&#169; Copyright 2023 -  Swadhin Mojumder</span>
    </div>
</footer>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
/*-services--*/
var swiper = new Swiper(".mySwiperservices", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      700: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });
/*--team--*/
var swiper = new Swiper(".mySwiperteam", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      560: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      950: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1250: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });
/*--testimonials--*/
  var swiper = new Swiper(".mySwipertesti", {
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>

</body>
</html>