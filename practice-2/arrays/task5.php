
<?php
$cities = array(
    "Япония" => "Токио",
    "Мексика" => "Мехико",
    "США" => "Нью-Йорк",
    "Индия" => "Мумбаи",
    "Корея" => "Сеул",
    "Китай" => "Шанхай",
    "Нигерия" => "Лагос",
    "Аргентина" => "Буэнос-Айрес",
    "Египет" => "Каир",
    "Англия" => "Лондон"
);
?>

<form method="post" action="">
    Выберите город:
    <select name="city">
        <?php
        foreach ($cities as $country => $city) {
            echo "<option value='$city'>$city, $country</option>";
        }
        ?>
    </select>
    <br><br>
    <button type="submit" name="submit">Отправить</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $selected_city = $_POST["city"];
    $selected_country = array_search($selected_city, $cities);
    echo "$selected_city находится в $selected_country.";
}