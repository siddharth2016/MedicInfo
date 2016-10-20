<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name = $_POST['fname']." ".$_POST['lname'];
	$email = $_POST['email'];
	$sex = $_POST['sex'];
	$bloodgroup = $_POST['bldgroup'];
	$exp = $_POST['experience'];
	$rate = $_POST['rating'];
	$comment = $_POST['comments'];


	$txt = "Date: ".date("Y-m-d")."\r\n"."\r\n"."Name: ".$name."\r\n"."Email id: ".$email."\r\n"."Sex: ".$sex."\r\n"."Blood Group: ".$bloodgroup."\r\n"."Experience: ".$exp."\r\n"."Rate: ".$rate."\r\n"."Comments: ".$comment."\r\n"."\r\n"."\r\n";

	$file = fopen("feedbackfile.txt","a");
	$a = fwrite($file, $txt);
	if($a)
	{
		echo "<script>";
		echo "alert('Thanks For your FeedBack !');";
		echo "</script>";
	}
	fclose($file);
}

?>


<html>
<head>
<title>MedicInfo | FeedBack</title>
	<link rel="stylesheet" type="text/css" href="Header.css"/>
	<link rel="stylesheet" type="text/css" href="feedback.css"/>
	<meta charset="utf-8"/>

</head>
<body>
	<div class="border"></div>
	<div id="hints"></div>
	<div class="medictab">
		
			<h3>MedicInfo <p style="text-decoration:none;">Saving Lives | Protecting People | Sharing Knowledge</p></h3>
			
			<form action="SearchResults.php" method="GET" autocomplete="off">
				<input type="text" name="search" placeholder="Search MedicInfo..." size="30" onkeyup="showHints(this.value)"/>
				<input type="submit" value="Search" />
			</form>
	</div>

	
	<div class="navigation" id="navigation">
		<ul>
			<li><a href="index.html">Home</a></li>
			
			<li class="dropdown">
				<a href="quiz.html" class="dropbtn">Quizzes</a>
				<div class="dropctn">
					<a href="diseasequiz.html">Quiz on Diseases</a>
					<a href="medicinequiz.html">Quiz on Medicines</a>
				</div>
			</li>
			
			<li class="dropdown">
				<a href="disease.html" class="dropbtn">Diseases</a>
				<div class="dropctn">
					<a href="adeno.html">Adenovirus Infection</a>
					<a href="sleepsick.html">Sleeping Sickness</a>
					<a href="arthritis.html">Arthritis</a>
					<a href="disease.html">More...</a>
				</div>
			</li>
			

			<li class="dropdown">
				<a href="medicine.html" class="dropbtn">Medicines</a>
				<div class="dropctn">
					<a href="vitaminb12.html">Vitamin B12</a>
					<a href="metform.html">Metformin</a>
					<a href="analgesicss.html">Analgesics</a>
					<a href="medicine.html">More...</a>
				</div>
			</li>
			
			
			<li><a href="sympcheck.html">Symptom Checker</a></li>
			<li><a href="about.html">About Us</a></li>
		</ul>
	</div>
	<br/>
<br/><br/><br/>
	<p id="toppara">
		"We all need people who will give us feedback. That's how we improve."<br/>
		<span style="font-size: 18px; float: right;">---Bill Gates---</span>
	</p>

<br/>
	
	<form name="regform" method="post" class="formcss" autocomplete="off">
		<fieldset>
			<legend style="letter-spacing: 1px; font-family: Helvetica; font-size: 20px; color: #C40000; font-weight: bold;">FeedBack For MedicInfo</legend>
			<span>(* Required)</span><br/><br/>
			<sup><span>*</span></sup>Name : <br/>
			<input type="text" name="fname" value="" placeholder="First Name / UserName" title="Enter your First name" />&nbsp
			<input type="text" name="lname" value="" placeholder="Last Name" title="Enter your Last name"><br>
			<span id="fnameerr"></span>&nbsp 
			<span id="lnameerr"></span><br/>

			<sup><span>*</span></sup>Email Address : <br/><input type="email" name="email" value="" placeholder="Enter your E-mail" title="Enter Valid E-Mail" /><br><span id="emailerr"></span><br/>
			
			<!--Date Of Birth  (optional) : <br/><br/><input type="date" name="dob"/><br><span id="doberr"></span><br/>-->

			<!--<sup><span>*</span></sup>Age : <br/>
			
			<input type="number" name="age" value="" min="12" required="required" placeholder="Enter Your Age" /><br/><span id="ageerr"></span><br/>-->

			<sup><span>*</span></sup>Sex :<br><label for="male" style="font-size: 16px;">Male</label><input type="radio" name="sex" id="male" value="male">
			<label for="female" style="font-size: 16px;">Female</label><input type="radio" name="sex" id="female" value="female">
			<br/><span id="sexerr"></span><br/>

			<sup><span>*</span></sup>Blood Group : <br/><input list="bloodgrp" name="bldgroup" placeholder="Your Blood Group" title="Enter your Blood Group" /><br><span id="bldgerr"></span><br/>

			<datalist id="bloodgrp">
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
			</datalist>
			
			<sup><span>*</span></sup>How's Your Experience with MedicInfo?<br/>
			<input type="radio" name="experience" id="poor" value="poor"/><label for="poor">Poor</label><br/>
			<input type="radio" name="experience" id="average" value="average"/><label for="average">Average</label><br/>
			<input type="radio" name="experience" id="good" checked="checked" value="good"/><label for="good">Good</label><br/>
			<input type="radio" name="experience" id="excellent" value="excellent"/><label for="excellent">Excellent</label><br/><br/>
			
			<sup><span>*</span></sup>Rate our Symptom Checker :<br/>
			<input type="number" name="rating" min="0" max="10" value="6" /><span style="font-size: 12px; color: black;">(Between 0(not satisfactory) to 10(Amazing))</span><br/><br/>

			Any extra Comments and FeedBack : <br/>
			<textarea rows="8" cols="30" name="comments" style="font-family: Helvetica; font-size: 14px;"></textarea>

			<br/><br/>
			<input type="submit" name="submit" value="Submit FeedBack" onclick="return validate(this.form)" />&nbsp
			<input type="reset" name="Reset" value="Clear All" onclick="return resetValues()" />

		</fieldset>
	</form>

	
	<script type="text/javascript">

	var refname = document.getElementById("fnameerr");
	var relname = document.getElementById("lnameerr");
	var reemail = document.getElementById("emailerr");
	//var redob = document.getElementById("doberr");
	var reage = document.getElementById("ageerr");
	var regen = document.getElementById("sexerr");
	var rebldg = document.getElementById("bldgerr");

	function validate(form) {
		// body...
		var text = "";
		if (form.fname.value=="" ) {
			text = "First name cannot be empty";
			refname.innerHTML = text;
			form.fname.value = "";
			return false;
		}
		if(form.fname.value.match(/[0-9]/)) {
			text = "First name cannot contain numbers";
			refname.innerHTML = text;
			form.fname.value = "";
			return false;
		}
		if(form.fname.value!="" && !form.fname.value.match(/[0-9]/)) {
			refname.innerHTML = "";
		}

		if (form.lname.value=="" ) {
			text = "Last name cannot be empty";
			relname.innerHTML = text;
			form.lname.value = "";
			return false;
		}
		if(form.lname.value.match(/[0-9]/)) {
			text = "Last name cannot contain numbers";
			relname.innerHTML = text;
			form.lname.value = "";
			return false;
		}
		if(form.lname.value!="" && !form.lname.value.match(/[0-9]/)) {
			relname.innerHTML = "";
		}

		if(form.email.value=="" || form.email.value.indexOf('@',0)==-1 || form.email.value.indexOf('.')==-1 || form.email.value.indexOf('.')==0) {
			text = "Enter valid E-mail";
			reemail.innerHTML = text;
			form.email.value = "";
			return false;
		}
		if(form.email.value!="" && form.email.value.indexOf('@',0)!=-1 && form.email.value.indexOf('.')!=-1 && form.email.value.indexOf('.')!=0) {
			reemail.innerHTML = "";
		}

		if(form.age.value=="" || form.age.value<12)
		{
			reage.innerHTML = "Enter Age within specific limits, greater than 12";
			return false;
		}
		if(form.age.value>12)
		{
			reage.innerHTML = "";
		}


		if (form.sex[0].checked==false && form.sex[1].checked==false) {
			text = "Please choose your Sex (Gender)";
			regen.innerHTML = text;
			return false;
		}
		if (form.sex[0].checked==true || form.sex[1].checked==true) {
			regen.innerHTML = "";
		}

		if (form.bldgroup.value=="") {
			text = "Blood Group cannot be empty";
			rebldg.innerHTML = text;
			form.bldgroup.value = "";
			return false;
		}
		if (!form.bldgroup.value.match(/^(A|B|O|AB)[+-]$/)) {
			text = "Enter Valid Blood Group";
			rebldg.innerHTML = text;
			form.bldgroup.value = "";
			return false;
		}
		if (form.bldgroup.value.match(/^(A|B|O|AB)[+-]$/)) {
			rebldg.innerHTML = "";
		}
		
		
		return true;

	}

	function resetValues()
	{
		refname.innerHTML = "";
		relname.innerHTML = "";
		reemail.innerHTML = "";
		regen.innerHTML = "";
		rebldg.innerHTML = "";
		reage.innerHTML = "";
		return true;
	}

	</script>


<br/><br/><br/><br/><br/><br/>
	<div id="footer">
		<p style="text-align: center; font-size: 11px;">Thank you for visiting</p>
		<p style="text-align: center;">MEDICINFO</p>
		<p style="font-size: 11px; text-align: center;"><abbr title="siddharth.chandra2015@vit.ac.in">Contact Us</abbr> | Visit Again | Stay Healthy | <a href="feedback.php" style="font-size: 11px;">FeedBack</a></p>
		<hr/>
		<p style="color: #DCFFFE; margin-left: 10px; font-size: 19px;">Maintained By: -
		<ul id="credits">
			<li>Kunal</li>
			<li>Kanishk</li>
			<li>Siddharth</li>
		</ul>
			<span id="footright1">Submitted To:-</span>
			<span id="footright2">Dr. G. Malathi</span>
		</p>
	</div>


	<!-- JAVASCRIPT FOR SEARCH SUGGESTIONS -->

	<script type="text/javascript">
		
		function showHints(str)
		{
			if(str.length == 0 || str == "")
			{
				document.getElementById("hints").innerHTML="";
				document.getElementById("hints").style.border="none";
				document.getElementById("navigation").style.marginTop = "14px";
				return;
			}
			else
			{
				var xmlhttp = new XMLHttpRequest();

				xmlhttp.onreadystatechange = function()
				{
					if(this.readyState == 4 && this.status == 200)
					{
						document.getElementById("hints").innerHTML = this.responseText;
						document.getElementById("hints").style.border = "1px solid blue";
						document.getElementById("navigation").style.marginTop = "36px";
					}
				};

				xmlhttp.open("GET", "SearchHints.php?q="+str, true);
				xmlhttp.send();
			}
		}

	</script>

</body>
</html>

