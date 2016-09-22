<?php

$errors = [];

if (isset($_POST['submit'])) {

    // check name field
    if (empty($_POST['first_name'])) {
        $errors[] = 'Поле <b>"Имя"</b> не заполнено';
    } elseif (!filter_var($_POST['first_name'], FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/^[a-zа-я]+$/iu']])) {
        $errors[] = 'Поле <b>"Имя"</b> содержит недопустимые символы';
    }

    // check last name field

    if (empty($_POST['last_name'])) {
        $errors[] = 'Поле <b>"Фамилия"</b> не заполнено';
    } elseif (!filter_var($_POST['last_name'], FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/^[a-zа-я]+$/iu']])) {
        $errors[] = 'Поле <b>"Фамилия"</b> содержит недопустимые символы';
    }

    // check birth year field

    if (empty($_POST['birth_year'][0])) {
        $errors[] = 'Поле <b>"Год рождения"</b> не заполнено';
    }

    // check school name field

    if (empty($_POST['school'])) {
        $errors[] = 'Поле <b>"Название учебного заведения"</b> не заполнено';
    } elseif (!filter_var($_POST['school'], FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/^[a-zа-я0-9\s]+$/iu']])) {
        $errors[] = 'Поле <b>"Название учебного заведения"</b> содержит недопустимые символы';
    }

    // check code example field

    if (empty($_POST['code_example'])) {
        $errors[] = 'Поле <b>"Пример вашего кода"</b> не заполнено';
    } elseif (!filter_var($_POST['code_example'], FILTER_VALIDATE_URL)) {
        $errors[] = 'Поле <b>"Пример вашего кода"</b> заполнено неверно, укажит';
    }

    // check salary field

    if (empty($_POST['salary'][0])) {
        $errors[] = 'Поле <b>"Желаемая зарплата" - ОТ</b> не заполнено';
    }

    if (empty($_POST['salary'][1])) {
        $errors[] = 'Поле <b>"Желаемая зарплата" - ДО</b> не заполнено';
    }
}