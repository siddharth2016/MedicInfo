<?php
$txt = "";
if($_SERVER['REQUEST_METHOD']=="GET")
{
	if(isset($_GET['search']))
	{
		$txt1 = $_GET['search'];
		$txt = validate($_GET['search']);
	}

	$txt = strtolower($txt);

	if(strcmp($txt, "anemia") == 0)
	{
		$id = 1;
	}
	else if(strcmp($txt, "diarrhea") == 0)
	{
		$id = 2;
	}
	else if(strcmp($txt, "lungcancer") == 0)
	{
		$id = 3;
	}
	else if(strcmp($txt, "coronaryarterydisease") == 0 || strcmp($txt, "cad") == 0)
	{
		$id = 4;
	}
	else if(strcmp($txt, "adenovirusinfection") == 0)
	{
		$id = 5;
	}
	else if(strcmp($txt, "arthritis") == 0)
	{
		$id = 6;
	}
	else if(strcmp($txt, "type2diabetes") == 0)
	{
		$id = 7;
	}
	else if(strcmp($txt, "sleepingsickness") == 0)
	{
		$id = 8;
	}
	else if(strcmp($txt, "stroke") == 0)
	{
		$id = 9;
	}
	else if(strcmp($txt, "chronicobstructivepulmonarydisease") == 0 || strcmp($txt, "copd")==0)
	{
		$id = 10;
	}
	else if(strcmp($txt, "fungaleyeinfection") == 0)
	{
		$id = 11;
	}
	else if(strcmp($txt, "birdflu") == 0)
	{
		$id = 12;
	}
	else if(strcmp($txt, "dengue") == 0)
	{
		$id = 13;
	}
	else if(strcmp($txt, "dvt") == 0 || strcmp($txt, "deepveinthrombosis")==0)
	{
		$id = 14;
	}
	else if(strcmp($txt, "lassafever") == 0)
	{
		$id = 15;
	}
	else if(strcmp($txt, "leadpoisoning") == 0)
	{
		$id = 16;
	}
	else if(strcmp($txt, "foodborneillness") == 0)
	{
		$id = 17;
	}
	else if(strcmp($txt, "typhoidfever") == 0)
	{
		$id = 18;
	}
	else if(strcmp($txt, "seasonalflu") == 0)
	{
		$id = 19;
	}
	else if(strcmp($txt, "tuberculosis") == 0)
	{
		$id = 20;
	}
	else
	{
		$res = "No Search Results Found for ".$txt1;
		$id=-1;
	}
}

function validate($x)
{
	$x = trim($x);
	$x = str_replace(' ', '', $x);
	$x = stripslashes($x);
	$x = htmlspecialchars($x);
	return $x;
}

$name=$desc=$symp=$cure="";

if($id>0 and $id<=20)
{
$conn = mysqli_connect('localhost','root', '15bce1286','medicinfo');
if(!$conn)
{
	die("Connection Error ".mysqli_error($conn));
}

$sql = "SELECT * FROM disease where Did=$id";

$result = mysqli_query($conn, $sql);

if(!$result)
{
	die("Connection error ".mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($result))
{
	$name = $row['Dname'];
	$desc = $row['Ddesc'];
	$symp = $row['Dsymp'];
	$cure = $row['Dcure'];
}

}

else
{
	$name=$desc=$symp=$cure=$res;
}
?>


<html>
<head>
	<title>MedicInfo | <?php echo strtoupper($txt);?></title>
	<link rel="stylesheet" type="text/css" href="aboutpage.css"/>
	<link rel="stylesheet" type="text/css" href="Header.css"/>
</head>
<body>
	<div class="border"></div>
	<div id="hints"></div>
	<div class="medictab">
		
			<h3>MedicInfo <p style="text-decoration:none;">Saving Lives | Protecting People | Sharing Knowledge</p></h3>
			
			<form action="SearchResults.php" method="GET">
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
<br/><br/><br/>
	<div style="position: relative; top: 55px; z-index: -1; min-width: 30%; width: 100%;">
	<p style="word-spacing: 4px;"><span style="font-family: Tahoma, Geneva, sans-serif; font-size: 22px;">About</span> <span style="letter-spacing: 2px; font-family: 'Droid Sans', Sans-Serif; font-size: 25px; text-decoration: underline;"><?php echo strtoupper($name);?></span></p>
	</div>
	<div style="position: relative; top: 30px; overflow: auto; z-index:-1;">
		<p align="justify" style="font-family: Tahoma, Geneva, sans-serif; font-size: 18px; border: 3px solid midnightblue; padding-top: 8px; padding-left: 10px; padding-right: 10px; border-radius: 4px; background-color: #E6F5FF; letter-spacing: 0.5px;">
			
			<span id="heading">
				Description
			</span><br/>
			<?php echo $desc;?>
			
			<br/><br/>
			<span id="heading">
				Symptoms
			</span>
			<br/>
				
				<?php echo $symp; ?>

			<br/><br/>
			<span id="heading">
				Cure
			</span>
			<br/>
				
				<?php echo $cure; ?>

			<br/><br/>
		</p>
	</div>
	<br/><br/>

	<div id="footer">
		<p style="text-align: center; font-size: 11px;">Thank you for visiting</p>
		<p style="text-align: center;">MEDICINFO</p>
		<p style="font-size: 11px; text-align: center;"><abbr title="siddharth.chandra2015@vit.ac.in">Contact Us</abbr> | Visit Again | Stay Healthy |<a href="feedback.php" style="font-size: 11px;">FeedBack</a></p>
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