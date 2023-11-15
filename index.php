<?php
	$barcodes=array("0123456789012","00123457","00123452","6939436845500","6973946260644");
	echo "<style type='text/css'>td{";
	echo "vertical-align: middle;";
	echo "text-align: center;}</style>";

	echo "<table border=1 cellspacing=0px style=border-collapse:collapse>";
	for($i=0;$i<5;$i++){
		$url="barcodeEAN/EAN.php?barNumber=".$barcodes[$i]."&magHeight=1&magWidth=1&dpi=600&showNumber=1";
		echo "<tr><td>".($i+1)."</td>";
		echo "<td>"."<img id='barcode$i' width='200' height='120' src=$url /></td></tr>";
	}
	echo "</table>";
