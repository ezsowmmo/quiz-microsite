 <script type='text/javascript'>

function show_bank_transport(){
  document.getElementById('div_bank_transport').style.display = 'block';
  document.getElementById('div0').style.display = 'none';

    
}
function show_bank(){
  document.getElementById('div_bank').style.display = 'block';
  document.getElementById('div_bank_transport').style.display = 'none';
}


function show_bank_line_10(){
    document.getElementById('div_bank_line_10').style.display = 'block';
    document.getElementById('div_bank').style.display = 'none';
    calc1();
}
function show_bank_line_30(){
    document.getElementById('div_bank_line_30').style.display = 'block';
    document.getElementById('div_bank').style.display = 'none';
    calc1();
}
function show_bank_line_60(){
    document.getElementById('div_bank_line_60').style.display = 'block';
    document.getElementById('div_bank').style.display = 'none';
    calc1();
}

function show_resultz(){
    document.getElementById('resultz').style.display = 'block';
    document.getElementById('site_start').style.display = 'none';
    document.getElementById('div_bank_line_10').style.display = 'none';
     document.getElementById('div_bank_line_30').style.display = 'none';
     document.getElementById('div_bank_line_60').style.display = 'none';
    
     document.getElementById('div_dokan_line_10').style.display = 'none';
     document.getElementById('div_dokan_line_30').style.display = 'none';
     document.getElementById('div_dokan_line_60').style.display = 'none';
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

function calc2(){
  var cur_user_time = document.getElementById("time").textContent;
  document.getElementById("timez").innerHTML = cur_user_time+" __"+Math.random();  
}
    </script>






 

 