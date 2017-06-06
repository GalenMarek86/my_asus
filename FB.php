<?php
$arrFile = file("d:\\phpless\\file.txt");
$fizz = $arrFile[0];
$buzz = $arrFile[1];
$quantity = $arrFile[2];

function bfstar ($fizz, $buzz, $quantity){
	
}
function numTest ($fizz, $buzz, $quantity){
	if (($fizz > 0) && ($buzz > 0) && ($quantity > 0)){
		
		for ($cikl = 1; $cikl <= $quantity; $cikl++){
			if (($cikl % $fizz == 0) && ($cikl % $buzz == 0)){
				echo ($cikl == $quantity) ? "FB." : "FB ";
			}elseif ($cikl % $buzz == 0){
				echo ($cikl == $quantity) ? "B." : "B ";
			}elseif ($cikl % $fizz == 0){
				echo ($cikl == $quantity) ? "F." : "F ";
			}else{
				echo ($cikl == $quantity) ? "$cikl." : "$cikl ";
			}
		}
	//grgrgrheaheaheah
	}else	echo "error";
}
echo numTest($fizz, $buzz, $quantity);
?>
