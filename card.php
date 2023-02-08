<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/card.css">
    
    <title>Service Provider Details</title>
</head>
<body>
  <section>

    <div class="swiper mySwiper container">
      <div class="swiper-wrapper content">

        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img3.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Sangeeth Murgugan</span>
              <span class="profession">Pet Boarding</span>
            </div>

            <div class="button">
              <button onclick="location.href='updateprofile.php';" class="aboutMe">Update</button>
              <button class="hireMe">Delete</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img2.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Kanaka Herath</span>
              <span class="profession">Pet Groomer</span>
            </div>


            <div class="button">
              <button class="aboutMe">Update</button>
              <button class="hireMe">Delete</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img4.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Dunika Samindi</span>
              <span class="profession">Pet Boarding</span>
            </div>

            <div class="button">
              <button class="aboutMe">Update</button>
              <button class="hireMe">Delete</button>
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="images/img5.jpg" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Lushani Hoghut</span>
              <span class="profession">Pet Groomer</span>
            </div>

            <div class="button">
              <button class="aboutMe">Update</button>
              <button class="hireMe">Delete</button>
            </div>
          </div>
        </div>
        
        

      </div>
    </div>

    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
  </section>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>
