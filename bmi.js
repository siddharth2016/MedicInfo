// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    document.getElementById("age1").value = "";
    document.getElementById("hei1").value = "";
    document.getElementById("wei1").value = "";
    document.getElementById("gen1").checked = false;
    document.getElementById("gen2").checked = false;
    document.getElementById("p1").innerHTML = "";
    document.getElementById("p2").innerHTML = "";
    document.getElementById("p3").innerHTML = "";
    document.getElementById("p4").innerHTML = "";
    document.getElementById("output").innerHTML = "";
    document.getElementById("comment").innerHTML = "";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function evalute()
{
  
  var m=document.getElementById("gen1");
  var f=document.getElementById("gen2");
  if (m.checked == false && f.checked == false)
  {
  document.getElementById("p2").innerHTML="Plz.. select gender";
  return false;
  }

  var h=document.getElementById("hei1").value;
  var w=document.getElementById("wei1").value;   
  h=h/100;
  var bmi=(w*1)/(h*h);
  bmi=parseInt(bmi);
  var output = bmi.toPrecision(4);
  document.getElementById("output").innerText=(bmi);

  if (output < 18.5){
		document.getElementById("comment").style='color:#21618C;';
    document.getElementById("comment").innerText = "This means you are Underweight";
  }

  else if (output >= 18.5 && output <= 25){
    document.getElementById("comment").style='color:#52BE80;';
		document.getElementById("comment").innerText = "This means you are Normal";
  }

  else if (output >= 25 && output <= 30) {
		document.getElementById("comment").style='color:#E59866;';
    document.getElementById("comment").innerText = "This means you are Obese";
  }

  else if (output > 30){
		document.getElementById("comment").style='color:#D35400;';
    document.getElementById("comment").innerText = "This means you are Overweight"; 
  }

  return true;
}

function age_validate(){
   var a=document.getElementById("age1");
   if (a.value==""){
   document.getElementById("p1").innerText="Plz.. fill age";
   }   
}

//function gen_validate(){}

function height_validate(){
   var h=document.getElementById("hei1").value;
   if (h==""){
   document.getElementById("p3").innerText="Plz.. fill height";
   }   
}
function weight_validate(){
   var w=document.getElementById("wei1").value;
   if (w==""){
   document.getElementById("p4").innerText="Plz.. fill weight";
   }   
}
function validate_age(){
   document.getElementById('p1').innerHTML="";
   //document.getElementById('age1').style='none';
}
function validate_height(){
   document.getElementById('p3').innerHTML="";
   //document.getElementById('hei1').style='none';
}
function validate_weight(){
   document.getElementById('p4').innerHTML="";
   //document.getElementById('wei1').style='none';
}
