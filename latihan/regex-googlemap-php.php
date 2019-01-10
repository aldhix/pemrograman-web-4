<?php
$re = '/^(http|https)\:\/\/(www.)?(google)([a-z.]+)?\/maps\/place\/([a-z,.+]+)\/@(\-?[0-9]+\.[0-9]+),(\-?[0-9]+\.[0-9]+),([0-9]{1,2})z/i';
$str = 'https://www.google.co.id/maps/place/Pananjung,+Pangandaran,+Kabupaten+Ciamis,+Jawa+Barat/@-7.6804789,108.6404582,15z/data=!3m1!4b1!4m5!3m4!1s0x2e65984f644bad39:0x6655c1eb7e459155!8m2!3d-7.678316!4d108.6502218?hl=id';

preg_match($re, $str, $matches, PREG_OFFSET_CAPTURE, 0);

// Print the entire match result
var_dump($matches);

?>