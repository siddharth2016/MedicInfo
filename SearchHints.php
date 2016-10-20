<?php

$q = $_GET["q"];
$searchContent = array("Anemia","Adenovirus Infection","Arthritis", "CAD", "COPD", "Diarrhea", "Lung Cancer", "Sleeping Sickness", "Stroke", "Type 2 Diabetes", "Tuberculosis", "Typhoid Fever", "Seasonal Flu", "Dengue", "Deep Vein Thrombosis", "Lassa Fever", "Lead Poisoning", "Foodborne Illness", "Fungal Eye Infection", "Bird Flu");

$len = strlen($q);
$q = strtolower($q);
$hint = "";
foreach ($searchContent as $value) 
{
	if(stristr($q, substr($value,0,$len)))
	{
		$hint .= $value."<br/>";
	}
}
if($hint == "")
{
	$hint = "No Suggestions!";
}
echo $hint;
?>