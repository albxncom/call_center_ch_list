# call_center_ch_list
Ein Skript, der eine Liste von Call Center Nummern aus search.ch zusammenstellt.

#Gebrauch
Einfach per Terminal das `grab.php` Skript laufen lassen. 
`php -f grab.php`
Nun die Daten aus der `list.txt` nehmen und in eine vCard einfügen mit `TEL;type=CELL;type=VOICE;type=pref:XXXXX` vor jeder Nummer.
Siehe dazu die `Call Center.vcf` Datei.
Nun kann man diese Datei in die Kontaktliste einfügen und wenn dann einer aus dem Call Center anruft, sieht man es sofort. Wenn man will, kann man die ganze Liste auch blockieren. Auf dem iPhone unter der Telefon App den Kontakt öffnen, ganz nach unten scrollen und den Blockier-Button betätigen. Einige Sekunden warten bis der Prozess abgeschlossen ist (sind ca. 200 Nummern, die blockiert werden).
