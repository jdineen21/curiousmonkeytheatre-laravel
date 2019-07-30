@extends('layout')

@section('content')
    <section class="content">
        <div class="container">
            <div class="w3-content" style="max-width:800px">
                <img class="mySlides" src="assets/banner/Leaving-Image_banner1-e1484492752569.jpg" style="width:100%">
                <img class="mySlides" src="assets/banner/Leaving-Image_banner1.jpg" style="width:100%">
                <img class="mySlides" src="assets/banner/mamela-banner-2.jpg" style="width:100%">
                <img class="mySlides" src="assets/banner/PREGGERS-banner-21.jpg" style="width:100%">
                <img class="mySlides" src="img_snow_wide.jpg" style="width:100%">
                <img class="mySlides" src="img_mountains_wide.jpg" style="width:100%">
                <img class="mySlides" src="img_mountains_wide.jpg" style="width:100%">
            </div>
            
            <div class="w3-center">
                <div class="w3-section">
                    <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
                    <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
                </div>
                <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
                <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
                <button class="w3-button demo" onclick="currentDiv(3)">3</button>
                <button class="w3-button demo" onclick="currentDiv(4)">4</button> 
                <button class="w3-button demo" onclick="currentDiv(5)">5</button> 
                <button class="w3-button demo" onclick="currentDiv(6)">6</button>
                <button class="w3-button demo" onclick="currentDiv(7)">7</button> 
            </div>
            
            <script>
            var slideIndex = 1;
            showDivs(slideIndex);
            
            function plusDivs(n) {
            showDivs(slideIndex += n);
            }
            
            function currentDiv(n) {
            showDivs(slideIndex = n);
            }
            
            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");
            }
            x[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " w3-red";
            }
            </script>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="port_display">
                <div class="port_entry">
                    <h4>Arriving</h4>
                    <p>‘Arriving’ will explore the stories of young refugees/migrants living in the UK</p>
                </div>
                <div class="port_entry">
                    <h4>BAIT - From The Ashes</h4>
                    <p>Curious Monkey are working with people from Ashington on ‘From The Ashes’.</p>
                </div>
                <div class="port_entry">
                    <h4>THROUPE Theatre Group</h4>
                    <p>Find out how to get involved in our new group for young people in care and care leavers</p>
                </div>
                <div class="port_entry">
                    <h4>Two Newcastles</h4>
                    <p>A new international coproduction between Newcastle UK and Newcastle SA</p>
                </div>
                <div class="port_entry">
                    <h4>This World Here/Nomhlaba Le</h4>
                    <p>International collaboration between UK + South African artists, This World Here...Nomhlaba Le</p>
                </div>
                <div class="port_entry">
                    <h4>Leaving</h4>
                    <p>Leaving by Paddy Campbell, in association with Northern Stage.</p>
                </div>
            </div>
        </div>
    </section>
@endsection