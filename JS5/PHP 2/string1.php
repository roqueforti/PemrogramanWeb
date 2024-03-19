<?php
$loremIpsum = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit atque laboriosam delectus ab molestiae autem nam vitae praesentium voluptates aliquam incidunt amet commodi quod, voluptas nobis quibusdam. Ipsam, eligendi hic.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "<p>";
echo "<p>" . strtolower($loremIpsum) . "<p>";

?>