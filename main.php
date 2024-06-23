<html>
    <head>
        <meta charset = "utf-8">
        <title></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,500;1,400&family=Montagu+Slab:wght@500&family=Praise&family=Shippori+Antique+B1&display=swap" rel="stylesheet">
        <style>
            *{
                margin: 0;
                padding: 0;
            }

            .centerlogo{
                width: 100px;
                margin-left: 47%;
            }
            .header{
                background-color: rgb(212, 212, 212);
                width: 100%;
                height: 50px;
                display: flex;
                align-items: center;
            }
            .loginicon{
                height: 40px; 
                margin-left: 5px;
            }      
            pre{
                display: inline-block; 
                font-family: 'Shippori Antique B1', sans-serif; 
            }
            .search{
                position: absolute;
                left: 50%;
                margin-left: -15%;
                width: 30%;
                height: 40px;
                margin-top: 20px;
                background-color: white;
                border: 4px solid rgb(81, 113, 255);
                border-radius: 0.7rem;
                display: flex;
                justify-content: center;
                align-items: center;
                
            }
            .searchbox{
                width: 90%;
                height: 90%;
                border: 0px solid white;
            }
            .searchbox:focus{
                outline: none;
            }
            .searchBtn{
                border: 0px solid white;
                background-color: white;
                font-size: 30px;
            }
            .searchBtn:hover{
                cursor: pointer;
            }



            .slideshow-container {
                max-width: 100%;
                max-height: 750px;
                position: relative;
                margin-top: 100px;
                background-color: black;
                
            }
            .slideshow-container .mySlides img {
                height: 750px;
            }

            .mySlides {
                display: none;
            }

            .prev, .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                margin-top: -22px;
                padding: 16px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }

            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            .prev:hover, .next:hover {
                background-color: rgba(0,0,0,0.8);
            }

            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
                background-color: #717171;
            }

            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
                from {opacity: .4}
                to {opacity: 1}
            }

            @keyframes fade {
                from {opacity: .4}
                to {opacity: 1}
            }
            @-webkit-keyframes slide-fwd-center {
                0% {
                -webkit-transform: translateZ(0);
                        transform: translateZ(0);
                }
                100% {
                -webkit-transform: translateZ(160px);
                        transform: translateZ(160px);
                }
            }
            @keyframes slide-fwd-center {
                0% {
                -webkit-transform: translateZ(0);
                        transform: translateZ(0);
                }
                100% {
                -webkit-transform: translateZ(160px);
                        transform: translateZ(160px);
                }
            }
        </style>
    </head>
    <body>
        <img class="centerlogo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5z0ZatDYHHtJXgSiIlTK51HS4y8mhqT9-VLatRfsgc-j24BJgCVmerXppoDj-e1RWehM&usqp=CAU">
        <div class="header">
            <img class="loginicon" src="http://bens1.img12.kr/2021_m_category_renewal/m_icon_join.png">
            <div class=header_user>&nbsp;<a href="./login.html"><pre>로그인 </pre></a>|<a href="./join.html"><pre> 회원가입</pre></a></div>
        </div>
        <form class="search" method="post" action = "./booksearch.php">
            <input class="searchbox" type="text" name="bookname">
            <input type="submit" class="searchBtn" value="🔍"></input>
        </form>
        <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img class="picture" src="./1.png" style="width:100%">
            </div>
    
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img class="picture" src="./2.png" style="width:100%">
            </div>
    
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img class="picture" src="./3.png" style="width:100%">
            </div>
    

          <a class="prev" onclick="moveSlides(-1)">&#10094;</a>
          <a class="next" onclick="moveSlides(1)">&#10095;</a>
        </div>
        <br/>
    
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(0)"></span>
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>

        </div>
        <script>
            var slideIndex = 0;
    
            window.onload=function(){
              showSlides(slideIndex);
    
              var sec = 4000;
              setInterval(function(){
                slideIndex++;
                showSlides(slideIndex);
    
              }, sec);
            }
    
            function moveSlides(n) {
              slideIndex = slideIndex + n
              showSlides(slideIndex);
            }
    
            function currentSlide(n) {
              slideIndex = n;
              showSlides(slideIndex);
            }
    
            function showSlides(n) {
    
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              var size = slides.length;
    
              if ((n+1) > size) {
                slideIndex = 0; n = 0;
              }else if (n < 0) {
                slideIndex = (size-1);
                n = (size-1);
              }
    
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
    
              slides[n].style.display = "block";
              dots[n].className += " active";
            }
        </script>
    </body>
</html>