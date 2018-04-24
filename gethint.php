<?php
$a[] = "Ayam";
$a[] = "Ikan";
$a[] = "Bebek";
$a[] = "Kucing";
$a[] = "Tikus";
$a[] = "Burung";

$q = $_REQUEST["q"];

$hint = "";

if($q !== ""){
	$q = strtolower($q);
	$len = strlen ($q);
	foreach ($a as $name){
		if(stristr($q, substr($name, 0, $len))) {
			if($hint === ""){
				$hint = $name;
			}else{
				$hint .= ",$name";
			}
		}
	}
}

echo $hint === ""? "No Suggestion" :$hint;

?>