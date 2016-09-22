<?php


$html_path = 'data/' . $_POST['first_name'] . '_' . $_POST['last_name'] . '_' . time() . '.html';

$path = 'data.txt';

if (empty($errors) && $_POST['submit']) {

    $cv = serialize($_POST) . "\r\n";;
    file_put_contents($path, $cv, FILE_APPEND);

    //save into html file

    $html = '
            <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Document</title>
        </head>
        <body>

        <p><strong>Имя: </strong> $1 </p>
        <p><strong>Фамилия: </strong> $2 </p>
        <p><strong>Год рождения: </strong> $3 </p>

        <p><strong>Языки программирования: </strong> $4 </p>

        <p><strong>Название учебного заведения: </strong> $5 </p>
        <p><strong>Образование </strong> $6 </p>
        <p><strong>Пример вашего кода, ссылка на github: </strong> <a href="$7">GitHub</a> </p>
        <p><strong>Желаемая зарплата: </strong> от $8 рублей до $9 рублей </p>

        </body>
        </html>
    ';

    // prepare html code - replace $0-9 to $_POST values

    if (isset($_POST['p_lang'])) {
        $p_lang = implode(', ', $_POST['p_lang']);
    } else {
        $p_lang = 0;
    }

    $pattern = ['~\$1~', '~\$2~', '~\$3~', '~\$4~', '~\$5~', '~\$6~', '~\$7~', '~\$8~', '~\$9~'];
    $replacement = [
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['birth_year'],
        $p_lang,
        $_POST['school'],
        $_POST['education_type'],
        $_POST['code_example'],
        $_POST['salary'][0],
        $_POST['salary'][1]

    ];

    $html = preg_replace($pattern, $replacement, $html);

    // create html file

    file_put_contents($html_path, $html);

    header("Location: /");
}

?>









