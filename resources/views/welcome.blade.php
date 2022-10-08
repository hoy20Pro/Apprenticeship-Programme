<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .owl-carousel .item {
    height: 10rem;
   
                   /* min-height: 399px; */
/* min-width: 800px; */
    background: #009688;
    display: flex;
    justify-content: center;
    align-items: center; font-size:70px; color:#fff;
}
/* .active,.owl-item .cloned 
 { width : 800px !important; } */

.box{
               min-height: 399px;
width: 800px;
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
    </head>
    <body class="antialiased">
      <div class="partOne">
        <div class="section">
        <div class="owlslider owl-carousel owl-theme " >
    <div target="1" class="box">
 

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
    <div target="2" class="box">
 

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
     <div target="3" class="box">
 

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
     
</div>
        </div>
      </div>

<script>
    $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    autoplay:true,
    
    nav:true,
    responsive:{
        0:{
            items:1.5
        },
        
        1000:{
            items:3.5
        }
    }
});
</script>
    </body>
</html>
