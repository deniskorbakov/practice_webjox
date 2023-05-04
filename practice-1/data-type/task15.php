
<?php
$source_code = file('https://wm-school.ru/');
  
foreach ($source_code as $line_number => $last_line) {
    echo nl2br(htmlspecialchars($last_line) . "\n");
}
  
?>