<?php

// путь до файла и его название
$file_name = "data.txt";
// открываем файл
$file = fopen($file_name, 'r');
$cvs = [];
// считываем все из файла
while (!feof($file)) {

    $cvs[] = fgets($file);

}
fclose($file);
array_pop($cvs);
foreach ($cvs as $cv_serialized) {

    $cv = unserialize($cv_serialized);
    echo 'Имя: ' . $cv['first_name'] . '<br>';
    echo 'Фамилия: ' . $cv['last_name'] . '<br>';
    echo 'Год рождения: ' . $cv['birth_year'] . '<br>';
    echo 'Название учебного заведения: ' . $cv['school'] . '<br>';
    echo 'Образование: ' . $cv['education_type'] . '<br>';

    if (!empty($cv['p_lang'])) {
        echo 'Языки программирования: ' . implode(', ', $cv['p_lang']) . '<br>';
    } else {
        echo 'Языки программирования: 0 <br>';
    }
    echo 'Ссылка на GitHub: ' . $cv['code_example'] . '<br>';
    echo 'Желаемая зарплата: от ' . $cv['salary'][0] . ' рублей и до ' . $cv['salary'][1] . ' рублей <br>';
    echo '<br><br><hr>';
}

?>

<a href="index.html">Home</a>
