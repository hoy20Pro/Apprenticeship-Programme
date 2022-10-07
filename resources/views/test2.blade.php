
  <!-- Bootstrap 4 Default CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <!-- Additional CSS -->
  <link rel="stylesheet" href="css/main.css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<style>
      .box{
               min-height: 399px;
min-width: 800px;
background: #FFFFFF;
border: 1px solid #DADADA;
border-radius: 4px;

            }
.box .p1{
    grid-row:1;
    min-height:88px;
    padding:20px 10px 10px;
    display:grid;
    grid-template-columns: repeat(12,1fr);
    align-items: center;
    grid-gap:10px;
    font-family: 'Apercu Pro';
font-style: normal;


color: #535353;
}
.box .p2{
    grid-row-start:2;
    grid-row-end:3;
    background: #FBFBFB;
    min-height: 310px;
    padding:56px 117px 61px;    
    font-family: 'Apercu Pro';
    align-items: center;
font-style: normal;
font-weight: 300;
font-size: 26px;
line-height: 35px;

letter-spacing: -0.185714px;

color: #6A6A6A
   
/* max-width: 798px; */


}
.box .p2 p{
   min-height: 137px;
max-width: 561px;


}
.box img{
    max-width: 216px;
min-height: 117.93px;
}
.box .p1 p{
    grid-column-start: 2;
    grid-column-end:6;
    font-weight: 500;
font-size: 16px;
line-height: 24px;
/* identical to box height, or 150% */

letter-spacing: -0.145455px;
}
.box .p1 svg{
    grid-column-start: 11;
    grid-column-end:12;
}
.partOne{
                display: grid;
                grid-template-columns: repeat(12,1fr);
                
                grid-column: span 12;
            }

    .section{
                grid-column-start:4;
                grid-column-end:10;
            }

</style>


    <div class="partOne">

        <div class="row section">

         

            <div class="col-md-12">

                <div id="carouselExample" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active box">
                        <!-- <div class="box"> -->
                        <div class="p1">
              <img class="d-block w-10 rounded-circle " src="{{asset('images/Image.svg')}}" >
              <p>Irene Pereyra <br><small>Interaction Design Fellow ‘19</small> </p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>
        </div>
        <div class="p2">
        <p>This Fellowship was a turning point in my career. I wouldn’t be where I am today without the financial support and experienced offered through the program. 
            <br><br><small>Education   ·   B.A. Visual Design</small>
        </p>
        </div>
                  
                        </div>
                       

                        <!-- </div> -->
                        <!-- End of Carousel Item 1 -->

                        <div class="carousel-item box ">

                        <div class="p1">
              <img class="d-block w-10 rounded-circle " src="{{asset('images/Image.svg')}}" >
              <p>Irene Pereyra <br><small>Interaction Design Fellow ‘19</small> </p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>
        </div>
        <div class="p2">
        <p>This Fellowship was a turning point in my career. I wouldn’t be where I am today without the financial support and experienced offered through the program. 
            <br><br><small>Education   ·   B.A. Visual Design</small>
        </p>
        </div>

                        </div>
                        <!-- End of Carousel Item 2 -->

                        <div class="carousel-item box ">

<div class="p1">
<img class="d-block w-10 rounded-circle " src="{{asset('images/Image.svg')}}" >
<p>Irene Pereyra <br><small>Interaction Design Fellow ‘19</small> </p>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-linkedin" viewBox="0 0 16 16">
<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>
</div>
<div class="p2">
<p>This Fellowship was a turning point in my career. I wouldn’t be where I am today without the financial support and experienced offered through the program. 
<br><br><small>Education   ·   B.A. Visual Design</small>
</p>
</div>

</div>
                        <!-- End of Carousel Item 3 -->

                    </div>
                    <!-- End of Carousel Inner -->

                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">

                        <i class="fas fa-chevron-circle-left fa-2x"></i>

                    </a>
                    <!-- End of Carousel Control Prev -->

                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">

                        <i class="fas fa-chevron-circle-right fa-2x"></i>

                    </a>
                    <!-- End of Carousel Control Next -->

                </div>
                <!-- End of CarouselExample -->

            </div>
            <!-- End of Col-md-12 -->

        </div>
        <!-- End of Row -->

    </div>
    <!-- End of Container -->

    <!-- JQuery Plugin -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap JQuery Plugin -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>




