<?php
$list = array();
echo "START SCANNING FOR CALL CENTERS....\n(c) 2015 by albxn the great\n\n\n";
for($i=0;$i<22;$i++){
	$pos = (10*$i)+1;
	$xmlString = file_get_contents("http://tel.search.ch/api/?was=Call%20Center&pos=".$pos);
	$xml = new SimpleXMLElement($xmlString);
	foreach ($xml->entry as $k => $entry) {
		// multiple formats possible
		// 1. XXX - XXX - XX - XX
		// 2. XXXX - XXX - XXX (usually 0800.. or 0844.. numbers)
		// 3. +19 89 82 16 962 the fuck???? ok
		// 4. +800 8007 6776 

		preg_match("/([0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}|[0-9]{4} [0-9]{3} [0-9]{3}|\+[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{3}|\+[0-9]{3} [0-9]{4} [0-9]{4})/", $entry->content, $nr);
		array_push($list, $nr[0]);
		if($nr[0]==""){
			echo "FAILURE ON PAGE ".$i.":\n<<<\n";
			echo $entry->content;
			echo "\n>>>\n\n";
		}
	}
}
echo "\n\nEND SCANNING\n\n\n";
file_put_contents("list.txt", implode("\n",$list));
?>