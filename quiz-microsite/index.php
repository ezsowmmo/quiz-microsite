 <!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>টাইম ক্যালকুলেটর</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:url" content="bkash.com" />
  <meta property="og:title" content="১ বছরে বিদ্যুৎ বিল দিতে আপনার কত সময় লাগছে?" />
  <meta property="og:description" content="জানতে ট্যাপ করুন" />
  <meta property="og:image" content="assets/bg.png" />
 
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e16f21b6719b70012374cc5&product=inline-share-buttons&cms=sop' async='async'></script>
<!--google analytics-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-25038037-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-25038037-1');
        </script>
<!--google analytics ends-->
    
 <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1995624724093782'); 
        fbq('track', 'PageView');
        </script>
        <noscript>
        <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=1995624724093782&ev=PageView
        &noscript=1"/>
        </noscript>
<!-- End Facebook Pixel Code -->   
    
    
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/sowmmo_style.css">
  <link rel="stylesheet" href="assets/animate.css">
  <link rel="icon" type="image/x-icon" href="assets/fav.png">
  <script src="assets/bootstrap.min.js"></script>
  <meta name="theme-color" content="#e2136e">
  <style>
   @media screen and (min-width: 700px) {
       .container .jumbotron{
             padding-right: 1.3%;
    padding-left: 1.3%;
       }
    }
 </style>
    
</head>
<body style="background-color:#f7f7f7" onload="health_check()">   
<div class="container">
<div class="jumbotron" style="background-color: white;border-radius: 15px;padding-bottom: 2px; margin-top: 05%">
 
      
<div class="row" class="cent">
    <div class="col-sm-12 cent" style="text-align:;">
        <img src="assets/logo.png" style="text-align:;width: 110px;">
        <h3 style="color: #e2136e;">টাইম ক্যালকুলেটর</h3>
        <br>
    </div>
 
<form name="myForm">
            
        <div class="col-sm-12 cent">  
        <p style="font-size: 16px; text-align: left;display: none;" id="site_start">নিচের প্রশ্নের উত্তর দিয়ে জেনে নিন বিদ্যুৎ বিল পরিশোধ করতে আপনার কত সময় অপচয় হয় </p>
        
        <div id="div0" style="text-align: center;">
        <p>আপনি বিদ্যুৎ বিল কিভাবে দেন?</p>
   
<button type="button"   name="myRadios" value="dokan" class="btn-warning cent btn_act" onclick="show_bank_transport();"> ব্যাংকে গিয়ে</button><br>
<button type="button"   name="myRadios" value="dokan" class="btn-warning cent btn_act" onclick="show_dokan();"> দোকানে গিয়ে</button><br>
<button type="button"   name="myRadios" value="dokan" class="btn-warning cent btn_act" onclick="show_others();"> বিদ্যুৎ অফিসে গিয়ে</button><br>
           <img src="assets/gimage/Man%20Standing-01.svg" class = "img-responsive">
            <br>
        </div>
         
<!--       bank  Starts -->        
        <div id="div_bank_transport" style="display: none">
            
        <p>আপনি কিভাবে ব্যাংকে যান?</p>
<button type="button" name="myRadios" value="dokan" class="btn-warning cent btn_act"  onclick="show_bank_bus();"> বাসে</button><br>
<button type="button" name="myRadios" value="dokan" class="btn-warning cent btn_act"   onclick="show_bank_car();"> গাড়িতে/বাইকে</button><br>
<button type="button" name="myRadios" value="dokan" class="btn-warning cent btn_act"   onclick="show_bank_walk();"> হেঁটে</button><br><br>
        <div style="-webkit-animation: fadeIn 1s;">
            <img src="assets/gimage/kake pathabo-01.svg" class = "img-responsive">
                <br></div>
        </div>
        <div id="div_bank_bus" style="display: none">
            <p>ব্যাংকে যাওয়া আসা করতে কত সময় লাগে?</p>
        
<button type="button"   name="myRadios" value="10" class="btn-warning cent btn_act"  onclick="show_bank_line_10();"> ১০ মিনিট</button><br>
<button type="button"   name="myRadios" value="30" class="btn-warning cent btn_act"  onclick="show_bank_line_30();"> ৩০ মিনিট</button><br>
<button type="button"   name="myRadios" value="60" class="btn-warning cent btn_act"  onclick="show_bank_line_60();"> ৬০ মিনিট</button><br><br>
            <div style="-webkit-animation: fadeIn 1s;">
            <img src="assets/gimage/man-In-Bus-bank.svg" class = "img-responsive">
                <br></div>
        </div>
        <div id="div_bank_car" style="display: none">
            <p>ব্যাংকে যাওয়া আসা করতে কত সময় লাগে?</p>
 
<button type="button"   name="myRadios" value="10" class="btn-warning cent btn_act"onclick="show_bank_line_10();"> ১০ মিনিট</button><br>
<button type="button"   name="myRadios" value="30" class="btn-warning cent btn_act"onclick="show_bank_line_30();"> ৩০ মিনিট</button><br>
<button type="button"   name="myRadios" value="60" class="btn-warning cent btn_act"onclick="show_bank_line_60();"> ৬০ মিনিট</button><br><br>
            <div style="-webkit-animation: fadeIn 1s;">
            <img src="assets/gimage/man-In-Car-bank-01.svg" class = "img-responsive">
                <br></div>
        </div>
        <div id="div_bank_walk" style="display: none">
             <p>ব্যাংকে যাওয়া আসা করতে কত সময় লাগে?</p>
<button type="button"   name="myRadios" value="10" class="btn-warning cent btn_act"  onclick="show_bank_line_10();"> ১০ মিনিট</button><br>
<button type="button"   name="myRadios" value="30" class="btn-warning cent btn_act"  onclick="show_bank_line_30();"> ৩০ মিনিট</button><br>
<button type="button"   name="myRadios" value="60" class="btn-warning cent btn_act"  onclick="show_bank_line_60();"> ৬০ মিনিট</button><br><br>
            <div style="-webkit-animation: fadeIn 1s;">
        <img src="assets/gimage/Man going on Bank-01.svg" class = "img-responsive">
                <br></div>
        </div>
        <div id="div_bank_line_10" style="display: none" onclick="show_resultz();">
        <p>লাইনে দাঁড়িয়ে বিল দিতে কত সময় লাগে?</p>
 
<button type="button"   name="rad1" value="20" class="btn-warning cent btn_act" > ১০ মিনিট</button><br> 
<button type="button"   name="rad1" value="40" class="btn-warning cent btn_act" > ৩০ মিনিট</button><br>
<button type="button"   name="rad1" value="70" class="btn-warning cent btn_act"  > ৬০ মিনিট</button><br><br>
            <div style="-webkit-animation: fadeIn 1s;">
            <img src="assets/gimage/Man%20line%20on%20Bank-01.svg" class = "img-responsive">
                <br></div>
  </div>
        <div id="div_bank_line_30" style="display: none" onclick="show_resultz();">
       <p>লাইনে দাঁড়িয়ে বিল দিতে কত সময় লাগে?</p>
 
<button type="button"   name="rad1" value="40" class="btn-warning cent btn_act"  > ১০ মিনিট</button><br>
<button type="button"   name="rad1" value="60" class="btn-warning cent btn_act"  > ৩০ মিনিট</button><br>        
<button type="button"   name="rad1" value="90" class="btn-warning cent btn_act"  > ৬০ মিনিট</button><br><br>
              <div style="-webkit-animation: fadeIn 1s;">
          <img src="assets/gimage/Man%20line%20on%20Bank-01.svg" class = "img-responsive">
                <br></div>
  </div>
        <div id="div_bank_line_60" style="display: none" onclick="show_resultz();">
        <p>লাইনে দাঁড়িয়ে বিল দিতে কত সময় লাগে?</p>
             
<button type="button"   name="rad1" value="70" class="btn-warning cent btn_act" > ১০ মিনিট</button><br>         
<button type="button"   name="rad1" value="90" class="btn-warning cent btn_act"  > ৩০ মিনিট</button><br>
<button type="button"   name="rad1" value="120" class="btn-warning cent btn_act" > ৬০ মিনিট</button><br><br>
              <div style="-webkit-animation: fadeIn 1s;">
            <img src="assets/gimage/Man%20line%20on%20Bank-01.svg" class = "img-responsive">
                <br></div>
        </div>
 <!--       bank  ends -->   
        
<!--       dokan  Starts --> 
        <div id="div_dokan" style="display: none">
        <p>দোকানে যাওয়া আসা করতে কত সময় লাগে?</p>
             
<button type="button"   name="myRadios" class="btn-warning cent btn_act" value="dokan"  onclick="show_dokan_line_10();"> ১০ মিনিট</button><br>          
<button type="button"   name="myRadios" value="dokan" class="btn-warning cent btn_act" onclick="show_dokan_line_30();"> ৩০ মিনিট</button><br>
<button type="button"   name="myRadios" value="dokan" class="btn-warning cent btn_act" onclick="show_dokan_line_60();"> ৬০ মিনিট</button><br><br>
            <div style="-webkit-animation: fadeIn 1s;">
            <img src="assets/gimage/Man%20Going%20Shop-01.svg" class = "img-responsive">
                <br></div>
        </div>
            
        <div id="div_dokan_line_10" style="display: none" onclick="show_resultz();">
        <p>দোকানের ভিড় এড়িয়ে বিল দিতে কত সময় লাগে?</p>
     
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="20" > ১০ মিনিট</button><br>        
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="40" > ৩০ মিনিট</button><br>        
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="70" > ৬০ মিনিট</button><br><br>
              <div style="-webkit-animation: fadeIn 1s;">
           <img src="assets/gimage/Man%20Going%20Shop%20line-01.svg" class = "img-responsive">
                <br></div>
        </div>
        <div id="div_dokan_line_30" style="display: none" onclick="show_resultz();">
        <p>দোকানের ভিড় এড়িয়ে বিল দিতে কত সময় লাগে?</p>
     
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="40" > ১০ মিনিট</button><br>  
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="60" > ৩০ মিনিট</button><br>   
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="90" > ৬০ মিনিট</button><br><br>
        <div style="-webkit-animation: fadeIn 1s;">
        <img src="assets/gimage/Man%20Going%20Shop%20line-01.svg" class = "img-responsive">
        <br></div>
        </div>
        <div id="div_dokan_line_60" style="display: none" onclick="show_resultz();">
        <p>দোকানের ভিড় এড়িয়ে বিল দিতে কত সময় লাগে?</p>
 
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="70" > ১০ মিনিট</button><br>  
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="90" > ৩০ মিনিট</button><br>   
<button type="button"  class="btn-warning cent btn_act"name="rad1" value="120" > ৬০ মিনিট</button><br><br>
        <div style="-webkit-animation: fadeIn 1s;">
             <img src="assets/gimage/Man%20Going%20Shop%20line-01.svg" class = "img-responsive">
            <br></div>
        </div>
<!--       dokan ends --> 
        
<!--       others  Starts --> 
        <div id="div_others" style="display: none">
        <p>বিদ্যুৎ অফিসে যাওয়া আসা করতে কত সময় লাগে?</p>
             
<button type="button"   name="myRadios" class="btn-warning cent btn_act" value="others"  onclick="show_others_line_10();"> ১০ মিনিট</button><br>          
<button type="button"   name="myRadios" value="others" class="btn-warning cent btn_act" onclick="show_others_line_30();"> ৩০ মিনিট</button><br>
<button type="button"   name="myRadios" value="others" class="btn-warning cent btn_act" onclick="show_others_line_60();"> ৬০ মিনিট</button><br><br>
        <div style="-webkit-animation: fadeIn 1s;">
             <img src="assets/gimage/Man%20going%20on%20Electric%20Office.svg" class = "img-responsive">
                <br></div>
        </div>
        <div id="div_others_line_10" style="display: none" onclick="show_resultz();">
        <p>লাইনে দাঁড়িয়ে বিল দিতে কত সময় লাগে?</p>
     
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="20" > ১০ মিনিট</button><br>        
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="40" > ৩০ মিনিট</button><br>        
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="70" > ৬০ মিনিট</button><br><br>
        <div style="-webkit-animation: fadeIn 1s;">
            <img src="assets/gimage/Man%20line%20on%20Bank-01.svg" class = "img-responsive">
                <br></div>
        </div>
        <div id="div_others_line_30" style="display: none" onclick="show_resultz();">
         <p>লাইনে দাঁড়িয়ে বিল দিতে কত সময় লাগে?</p>
     
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="40" > ১০ মিনিট</button><br>  
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="60" > ৩০ মিনিট</button><br>   
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="90" > ৬০ মিনিট</button><br><br>
            <div style="-webkit-animation: fadeIn 1s;">
             <img src="assets/gimage/Man%20line%20on%20Bank-01.svg" class = "img-responsive">
                <br></div>
            </div>
        <div id="div_others_line_60" style="display: none" onclick="show_resultz();">
        <p>লাইনে দাঁড়িয়ে বিল দিতে কত সময় লাগে?</p>
 
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="70" > ১০ মিনিট</button><br>  
<button type="button"  class="btn-warning cent btn_act" name="rad1" value="90" > ৩০ মিনিট</button><br>   
<button type="button"  class="btn-warning cent btn_act"name="rad1" value="120" > ৬০ মিনিট</button><br><br>
              <div style="-webkit-animation: fadeIn 1s;">
            <img src="assets/gimage/Man%20line%20on%20Bank-01.svg" class = "img-responsive">
                <br></div>
  </div>
<!--       others ends --> 
        
        
        
        
        <div id="resultz" style="display:none;">
            
            
            <h3>১ বছরে বিদ্যুৎ বিল দিতে আপনার সময় যায় <span id="time" style="color: #e21e6e;-webkit-animation: flash 1.2s;"></span> <span style="color: #e2136e"> মিনিট!</span></h3>
            <h3>বিকাশ অ্যাপ-এ বিদ্যুৎ বিল দিয়ে আপনার মূল্যবান সময় বাঁচান।</h3>
          
            <div style="-webkit-animation: fadeIn 1s;">
            <img src="assets/gimage/pathate%20koto%20Shomoy%20jacche-01.svg" class = "img-responsive">
            <br></div>
            <h4>বন্ধুদের সাথে শেয়ার করে জানিয়ে দিন এই সময় বেঁচে গেলে আপনি কি করতেন?
            </h4>
        </div>
        <div class="sharethis-inline-share-buttons"></div><br>
        <div id="play_again" style="display:none;">
            <center>
            <button class="btn btn-primary" style="background-color: #e2136e;border: 2px #e2136e;width: 30%;"><a href="" style="color: white">Play Again</a>
            </button></center>
        </div>
  <!--      <div id="fb-root"></div>-->
  <!--<script>(function(d, s, id) {-->
  <!--  var js, fjs = d.getElementsByTagName(s)[0];-->
  <!--  if (d.getElementById(id)) return;-->
  <!--  js = d.createElement(s); js.id = id;-->
  <!--  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";-->
  <!--  fjs.parentNode.insertBefore(js, fjs);-->
  <!--}(document, 'script', 'facebook-jssdk'));</script>-->

  <!--<div class="fb-share-button" -->
  <!--  data-href="https://www.your-domain.com/your-page.html" -->
  <!--  data-layout="button_count">-->
  <!--</div>-->

     


     
    
<a href="#" data-toggle="modal" data-target="#myModal"><h6 style="color:#e2136e">বিস্তারিত</h6></a>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: left;">বিস্তারিত</h4>
        </div>
        <div class="modal-body" style="text-align: left;">
          <p>&bull;প্রচলিত পদ্ধতিতে বিদ্যুৎ বিল দিতে গ্রাহকের যে সময় প্রয়োজন তা অনুমান করার জন্য এই কুইজটি তৈরি করা হয়েছে।</p>
          <p>&bull;এই ওয়েবসাইটে গ্রাহকের ব্যক্তিগত তথ্য নেওয়া হচ্ছেনা।</p>
          <p>&bull;এই কুইজটি গ্রাহকের দেয়া তথ্যের উপর ভিত্তি করে বিদ্যুৎ বিল দিতে প্রয়োজনীয় সময়ের একটি হিসাব দেবে। </p>
          <p>&bull;এই হিসাবটি বিকাশ সামাজিক মাধ্যমে প্রকাশ করার অধিকার রাখে।</p>
          <p>&bull;এই হিসাব থেকে পাওয়া ফলাফল বিকাশ সামাজিক যোগাযোগ মাধ্যমে দেখাতে পারে।</p>
            
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    </div>
 </form>
    
<!--
 <div class="col-sm-12 cent" id="resultz" style="display: none;">
        <h3>বিল দিতে আপনার <span id="time" style="color: #e2136e;"></span> মিনিট সময় ব্যয় হচ্ছে</h3>
      </div>

 
<div id="rsltbtn" style="display:none;">      
<button type="button" class="btn-warning cent btn_act" onclick="show_submit();">সাবমিট<span id="time"></span>
</button> 
      </div>-->
  
</div>
</div>
    </div>
    
    
  <script type='text/javascript'>


function show_bank_transport(){
  document.getElementById('div_bank_transport').style.display = 'block';
  document.getElementById('div0').style.display = 'none';
}
function show_bank_bus(){
  document.getElementById('div_bank_bus').style.display = 'block';
  document.getElementById('div_bank_transport').style.display = 'none';
}
function show_bank_car(){
  document.getElementById('div_bank_car').style.display = 'block';
  document.getElementById('div_bank_transport').style.display = 'none';
}
function show_bank_walk(){
  document.getElementById('div_bank_walk').style.display = 'block';
  document.getElementById('div_bank_transport').style.display = 'none';
}

function show_bank_line_10(){
    document.getElementById('div_bank_line_10').style.display = 'block';
    document.getElementById('div_bank_bus').style.display = 'none';
     document.getElementById('div_bank_car').style.display = 'none';
     document.getElementById('div_bank_walk').style.display = 'none';
    calc1();
}
function show_bank_line_30(){
    document.getElementById('div_bank_line_30').style.display = 'block';
       document.getElementById('div_bank_bus').style.display = 'none';
     document.getElementById('div_bank_car').style.display = 'none';
     document.getElementById('div_bank_walk').style.display = 'none';
    calc1();
}
function show_bank_line_60(){
    document.getElementById('div_bank_line_60').style.display = 'block';
       document.getElementById('div_bank_bus').style.display = 'none';
     document.getElementById('div_bank_car').style.display = 'none';
     document.getElementById('div_bank_walk').style.display = 'none';
    calc1();
}


function show_resultz(){
    document.getElementById('resultz').style.display = 'block';
    document.getElementById('play_again').style.display = 'block';
 
    document.getElementById('site_start').style.display = 'none';
    document.getElementById('div_bank_line_10').style.display = 'none';
     document.getElementById('div_bank_line_30').style.display = 'none';
     document.getElementById('div_bank_line_60').style.display = 'none';
    
     document.getElementById('div_dokan_line_10').style.display = 'none';
     document.getElementById('div_dokan_line_30').style.display = 'none';
     document.getElementById('div_dokan_line_60').style.display = 'none';
    
     document.getElementById('div_others_line_10').style.display = 'none';
     document.getElementById('div_others_line_30').style.display = 'none';
     document.getElementById('div_others_line_60').style.display = 'none';
    
     calc2();
 }

function show_dokan(){
   document.getElementById('div0').style.display = 'none';
    document.getElementById('div_dokan').style.display = 'block';
}
function show_dokan_line_10(){
    document.getElementById('div_dokan_line_10').style.display = 'block';
    document.getElementById('div_dokan').style.display = 'none';
    calc1();
}
function show_dokan_line_30(){
    document.getElementById('div_dokan_line_30').style.display = 'block';
    document.getElementById('div_dokan').style.display = 'none';
    calc1();
}
function show_dokan_line_60(){
    document.getElementById('div_dokan_line_60').style.display = 'block';
    document.getElementById('div_dokan').style.display = 'none';
    calc1();
}


function show_others(){
  document.getElementById('div_others').style.display = 'block';
  document.getElementById('div0').style.display = 'none';
}
function show_others_line_10(){
    document.getElementById('div_others_line_10').style.display = 'block';
    document.getElementById('div_others').style.display = 'none';
    calc1();
}
function show_others_line_30(){
    document.getElementById('div_others_line_30').style.display = 'block';
    document.getElementById('div_others').style.display = 'none';
    calc1();
}
function show_others_line_60(){
    document.getElementById('div_others_line_60').style.display = 'block';
    document.getElementById('div_others').style.display = 'none';
    calc1();
}

function calc1(){
        
var amountField = document.getElementById('time');
    
var rad = document.myForm.rad1;
for(var i = 0; i < rad.length; i++) {
    rad[i].onclick = function() {
        console.log(this.value);
       amountField.textContent = this.value * 12;
        
    };
}
}
function health_check(){

    <?php
    
     $fileName= 'data'.date("m-d").'.json';
     
     if (file_exists($fileName)) {
     echo "docFoundFile"."\n";
     $readFile = $fileName;
     $readjsondata = file_get_contents($readFile);
     if ($readjsondata=='null' or $readjsondata=="")
     {
     echo "docFound null or empty";
     $myObj=[];
     $jsondata = json_encode($myObj, JSON_PRETTY_PRINT);
     file_put_contents($readFile, $jsondata);
    }
     else
      echo "docFoundData";
      
     } 
     
     else {
    echo "docFoundNoFile"."\n";
    }
     
     ?>
     
}

function calc2(){
    
   
var cur_user_time = document.getElementById("time").textContent;
var today = new Date();
var date = today.getDate()+'-'+(today.getMonth()+1);
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
var cur_uid= dateTime;

  $.ajax({
   url: "index.php",
   method: "POST",
   dataType: "json",
   data: {cur_user_time:cur_user_time, cur_uid:cur_uid },
 });

  <?php
  
   $fileName= 'data'.date("m-d").'.json';
   $myFile = $fileName;
   $arr_data = array(); // create empty array
 
 
 if (!empty($_POST['cur_user_time'])) {
   
      
	   //Get form data
	   $formdata = array(
	       'uid'=> $_POST['cur_uid'],
	      'time'=> $_POST['cur_user_time'],
	   );

	   //Get data from existing json file
	   $jsondata = file_get_contents($myFile);

	   // converts json data into array
	   $arr_data = json_decode($jsondata, true);

	   // Push user data to array
	   array_push($arr_data,$formdata);

       //Convert updated array to JSON
	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   file_put_contents($myFile, $jsondata);
}
   
 
?>

}
    </script>
</body>
</html>
