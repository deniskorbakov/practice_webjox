<?php
/** 
 * не смог сделаь самостоятельно
 * 
 * 
 * 
*/

//Если форма не отправлена, отобразить форму  
if (!isset($_POST['submit'])){
$travel=array(
  "автомобиль",
  "самолет",
  "паром",
  "метро"
); 
?>
 
<p>Путешествовать можно по городу, стране или миру. Вот список некоторых распространенных видов транспорта:</p>
<ul>
 
<?php
foreach ($travel as $t){
  echo "<li>$t</li>\n"; 
}
?>
 
</ul>
<form method="post" action="">
<p>Добавьте свои любимые способы путешествия в список через запятую:</p>
<input type="text" name="added" size="80" />
<p>
 
<?php
//Отправляем текущий массив путешествий как данные скрытой формы
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
 
<input type="submit" name="submit" value="Вперёд" />
</form>
 
<?php
//Если форма отправлена, обрабатываем ввод
}else{
//Получить установленный массив путешествий
$travel=($_POST['travel']);
//Преобразование строки ввода пользователя в массив
$added=explode(',',$_POST['added']);
 
//Добавляем в установленный массив
array_splice($travel, count($travel), 0, $added);
//Это также можно было бы записать $travel=array_merge($travel, $added);
 
//Возвращаем новый список пользователю
echo "<p>Вот список ваших дополнений:</p>\n<ul>\n";
foreach($travel as $t){
  //Функции обрезки удаляют лишние пробелы, которые мог ввести пользователь
  echo "<li>".trim($t)."</li>\n";  
}
echo"</ul>";  
 
?>
<p>Добавить еще?</p>
<form method="post" action="">
<input type="text" name="added" size="80" />
<p>
<?php
//Отправляем текущий массив путешествий как данные скрытой формы
foreach ($travel as $t){
  echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
}
?>
<input type="submit" name="submit" value="Go" />
</form>
<?php
}
?>
