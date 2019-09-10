<?php
$fp = fopen('records.csv', 'a');
fwrite($fp, implode(",", array_values($_GET)));
fclose($fp);
?>
