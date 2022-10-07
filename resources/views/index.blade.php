<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apprenticeship-program</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .container{
                width:100%;
                margin-right:auto;
                margin-left:auto;
                display:grid;
                grid-template-columns: repeat(12,1fr);
                
            }
            .nav{
                background-color:#685DC5;
                position: absolute;
                width: 100%;
                min-height: 75px;
                margin-bottom:55px;
                display:grid;
                grid-template-columns: inherit;

               
               
            }
            .header{
                grid-column-start: 2;
                grid-column-end: 5;
                color:#FFFFFF;
                align-self:center;
                /* font-size:20px; */
                }
            svg{
                align-self:center;
                grid-column:12;
                align:center;
            }
            .partOne{
                display: grid;
                grid-template-columns: repeat(12,1fr);
                margin-top: 130px;
                grid-column: span 12;
            }
            .section1{
                grid-column-start: 2;
    grid-column-end: 6;

    display:flex;
    flex-direction: column;
    max-width:440px;
            }
            .section1 h3{
                color:#685DC5;
    font-family: Apercu Pro;
font-size: 48px;
font-weight: 500;
line-height: 56px;
letter-spacing: -0.6000000238418579px;
/* text-align: left; */
min-height:96px;

            }
            .section1 p{
                font-family: 'Apercu Pro';
font-style: normal;
font-weight: 500;
font-size: 22px;
line-height: 32px;
letter-spacing: -0.33px;
color: #535353;
min-height:64px;
            }
            .section1 p .fullpara{
                font-family: 'Apercu Pro';
font-style: normal;
font-weight: 300;
font-size: 22px;
line-height: 32px;
/* or 145% */

letter-spacing: -0.33px;

color: #535353;


            }
            .section1 button{
                background: #685DC5;
border-radius: 29px;
min-height: 58px;
max-width: 166px;
color:#FFFFFF;

            }
            .section2{
                grid-column-start: 8;
    grid-column-end: 12;

    display:flex;
    flex-direction: column;
    max-width:440px;
            }
            .section2 .d1{
                display:flex;
    flex-direction: row; 
            }
        .section2 .d1 img{
            max-width: 80px;
    min-height: 80px;
    
    position: absolute;
    top: 181px;
        }  
        .section2 .d1 p{
            
            position: absolute;
min-height: 24px;
left: 65.89%;

top: 181px;

font-family: 'Apercu Pro';
font-style: normal;
font-weight: 300;
font-size: 18px;
line-height: 24px;


letter-spacing: -0.18px;

color: #000000;

mix-blend-mode: normal;
opacity: 0.5;

        }
        .section2 .d1 .power{
            position: absolute;
min-height: 24px;
left: 65.96%;

top: 197px;

font-family: 'Apercu Pro';
font-style: normal;
font-weight: 300;
font-size: 27px;
line-height: 24px;
/* identical to box height, or 89%

letter-spacing: -0.27px; */

color: #535353;
        }
        .section2 .d2{
            max-width:480px;
min-height:116px;
border: 1px solid #DADADA;
border-radius: 4px;
margin-top: 200px;
padding:18px 24px 0px;
font-family: 'Apercu Pro';
font-style: normal;
line-height: 24px;
        }
        .section2 .d2 .close{
          
min-height: 24px;
font-weight: 500;
font-size: 16px;
/* identical to box height, or 150% */

letter-spacing: -0.145455px;

color: #685DC5;

        }
        .section2 .d2 .date{
            
min-height: 24px;

font-weight: 300;
font-size: 27px;
line-height: 24px;
/* identical to box height, or 89% */

letter-spacing: -0.27px;

color: #535353;
        }
        .section2 .d3{
            max-width:480px;
min-height:200px;
border: 1px solid #DADADA;
border-radius: 4px;
margin-top: 30px;
padding:18px 24px;
font-family: 'Apercu Pro';
font-style: normal;
line-height: 24px;
display:grid;
grid-template-columns: repeat(2,1fr);
grid-template-rows: repeat(2,1fr);
        }
        .section2 .d3 b{
            color: #685DC5;
        }
        /* Section 2 style */
        .section1 .pic{
           max-width: 602.18px;
min-height: 402.18px;
border-radius: 360px;


       }
       .section2 h3{
        color:#685DC5;
    font-family: Apercu Pro;
font-size: 48px;
font-weight: 500;
line-height: 56px;
letter-spacing: -0.6000000238418579px;
/* text-align: left; */
max-width:479px;
min-height:112px;
margin-bottom: 40px;
       }
       .section2 .about{
        font-weight: 300;
font-size: 22px;
line-height: 32px;
/* or 145% */

letter-spacing: -0.33px;
max-width:479px;
min-height:112px;
color: #535353;
       }
       .section3{
        display:grid;
        grid-template-columns: repeat(12,1fr);
        grid-template-rows: repeat(2,1fr);
        grid-column: span 12;
        margin-top: 130px;
        row-gap: 72px;
       }
       .section3 .one{
        grid-column-start: 3;
    grid-column-end: 6;
    grid-row:span 2;
max-width:320px;
height:524px;
background: #FFFFFF;
border: 1px solid #DADADA;
border-radius: 4px;
padding:32px 44px;
       }
       .section3 b{
        color: #685DC5;
        font-family: 'Apercu Pro';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 24px;
/* identical to box height, or 150% */

letter-spacing: -0.145455px;

color: #685DC5;
       }
       .section3 .first{
        margin-bottom:150px;
       }
       .section3 .two{
        display:grid;
grid-template-columns: repeat(2,1fr);
grid-template-rows: repeat(2,1fr);
grid-gap:30px;
       }
       .section3 p{
        min-height: 49px;
max-width: 124.96598052978516px;
font-family: 'Apercu Pro';
font-style: normal;
font-weight: 500;
font-size: 16px;
line-height: 24px;
/* or 150% */

letter-spacing: -0.16px;

       }
       .section3 .first small{
    
font-size: 48px;
line-height: 24px;

letter-spacing: -0.436364px;

color: #535353;

       }
       .section3  .one hr{
        max-width: 265.75px;
min-height: 1px;


border: 1px solid #DADADA;
       }
       .section3 .cardTwo{
        grid-column-start: 6;
    grid-column-end: 9;
    grid-row:1;
max-width:320px;
height:274px;
background: #FFFFFF;
border: 1px solid #DADADA;
border-radius: 4px;
padding:32px 25px;
       }
       .section3 .cardThree{
        grid-column-start: 6;
    grid-column-end: 12;
    grid-row:2;
/* max-width:320px; */
/* min-height:274px; */
background: #FFFFFF;
border: 1px solid #DADADA;
border-radius: 4px;
padding:32px 25px;
height: 178px;
max-width: 680px;

border-radius: 4px;

       }
       .section3 .cardFour{
        grid-column-start: 9;
    grid-column-end: 12;
    grid-row:1;
max-width:320px;
height:274px;
background: #FFFFFF;
border: 1px solid #DADADA;
border-radius: 4px;
padding:32px 25px;
       }
       .section4{
        display: grid;
                grid-template-columns: repeat(12,1fr);
                margin-top: 130px;
                grid-column: span 12;
                align-self:center;
       }
       .section4 .part2{
        margin-top:68px;
        min-height: 58px;
max-width: 235px;

border-radius: 29px;

       }
       </style>
    </head>
    <body >
        <div class="container">
            <div class="nav">
              
                <h4 class="header">HARBOUR SPACE <small>/INTERACTION DESIGN</small></h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-sliders" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
</svg>
            </div>
            <div class="partOne">
            <div class="section1">
                <h3>Interaction Design Apprenticeship</h3>
                <p>A fully funded work-study program to launch your tech career </p>
                <p class="fullpara">Harbour.Space has partnered with SCG to empower driven talent and eliminate the barriers to accessing exceptional education and career opportunities through a Masters Fellowship. </p>
                <p><b>Position: </b>Marketing Performance</p>
                <button type="button">Apply Now</button>
            </div>
            <div class="section2">
                <div class="d1">
                    <img src="{{asset('images/Logo.svg')}}"/>
                    <p>Powered By:</p>
                    <p class="power">Zeptolab</p>
                </div>
                <div class="d2">
                <p  class="close">Application closes in</p>
                  
                   <p class="date">6 Day  :  22 Hrs  :  56 Min  :  13 Seg </p> 
                </div>
               
                <div class="d3">
                   <p><b>Location</b><br> Bangkok</p>
                   <p><b>Duration</b> <br> 1 Year Full-Time</p>
                   <p><b>Start date</b> <br>30 June 2020</p>
                   <p><b>End date</b> <br> 3 Aug 2020</p>
                </div>
            </div>
        </div>
     <!----------------------------End Part1------------------------------------->
        <!----------------------------Part2------------------------------------->
        <div class="partOne">
            <div class="section1">
                <!-- <img class="pic" src="{{asset('images/edit2 1.svg')}}"/> -->
           
            </div>
            <div class="section2">
            <h3>About the apprenticeship</h3>
            <!-- <br> -->
            <p class="about">
            Our scholarships are designed to give talented and driven young people from any background access to top-class education, experience and network. We offer a fully-funded master’s degree alongside an apprenticeship and a guaranteed job upon graduation.  
            </p>
            </div>
        </div>
        
        <!----------------------------End Part2------------------------------------->
         <!----------------------------Part3------------------------------------->
         <!-- <div class="partOne"> -->
           <div class="section3">
                <div class="one">
                    <div class="first"><p><b>Scholarship value</b><br><br><small>€31,300</small></p></div>
                    <hr>
                    <div class="two">
                    <p><b>Tuition covered</b> <br> €20,900</p>
                    <p><b>Remaining</b> <br>€2,000</p>
                    <p><b>Living stipend</b><br>€8,400 (€700/month)</p>
                    </div>

                </div>
                <div class="cardTwo">
                <div class="first"><p><b>Study commitment</b><br><br>3 hours / day</p></div>
                
                </div>
                <hr>
                
                <div class="cardThree">
                <div class="first"><p><b>Study commitment</b><br><br>3 hours / day</p></div>

                </div>
                <div class="cardFour">
                <div class="first"><p><b>Study commitment</b><br><br>3 hours / day</p></div>

                </div>
           </div>
        <!-- </div> -->
         <!----------------------------End Part3------------------------------------->
         <div class="section4">
            <div class="section1">
                <h3>Frequently asked questions</h3>
            </div>
            <div class="part2 section2">
                <small>Fillter by:<select name="fillter" id="f">
  <option value="pc">Program Condition</option>
  <option value="all">ALL</option>
  <option value="ad">Adimision</option>
  <option value="hs">Harbour space</option>
</select></small>
            </div>
         </div>
        </div>

    </body>
</html>
