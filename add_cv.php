<?php

include 'validate.php';

include 'save.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<div class="row">

    <div class="col-md-6 col-md-offset-3">

        <?php

        if (!empty($errors)) {
            echo '<p class="bg-danger">';

            foreach ($errors as $error) {
                echo $error . '<br>';
            }

            echo '</p>';
        }

        ?>


        <h1>Add new CV</h1>

        <form action="" method="post">
            <div class="form-group">
                <label>Имя</label>
                <input type="text" class="form-control" name="first_name" placeholder="Имя">
            </div>

            <div class="form-group">
                <label>Фамилия</label>
                <input type="text" class="form-control" name="last_name" placeholder="Фамилия">
            </div>

            <div class="form-group">
                <label>Год рождения</label>
                <input type="number" class="form-control" name="birth_year" min="1910" max="2016" step="1">
            </div>

            <div class="form-group">
                <label>Какие языки программирования знаете</label><br>
                <label class="checkbox-inline">
                    <input type="checkbox" value="PHP" name="p_lang[0]"> PHP
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="Python" name="p_lang[1]"> Python
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="Ruby" name="p_lang[2]"> Ruby
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="C++" name="p_lang[3]"> C++
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="Java" name="p_lang[4]"> Java
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="JavaScript" name="p_lang[5]"> JavaScript
                </label>
            </div>

            <div class="form-group">
                <label for="school">Название учебного заведения</label>
                <input type="text" class="form-control" name="school" placeholder="Название учебного заведения">
            </div>

            <div class="form-group">
                <label>Образование</label>
                <select class="form-control" name="education_type">
                    <option value="Среднее">Среднее</option>
                    <option value="Средне-специальное">Средне-специальное</option>
                    <option value="Высшее">Высшее</option>
                </select>
            </div>


            <div class="form-group">
                <label>Пример вашего кода (ссылка на github)</label>
                <input type="text" class="form-control" name="code_example" placeholder="ссылка на github">
            </div>


            <div class="row">
                <label class="col-sm-2 control-label">Желаемая зарплата в рублях (от и до)</label>

                <div class="col-xs-3">
                    <input type="number" class="form-control" name="salary[0]" placeholder="min">
                </div>

                <div class="col-xs-3">
                    <input type="number" class="form-control" name="salary[1]" placeholder="max">
                </div>
                <br>

            </div>
            <br>

            <button type="submit" name="submit" value="submit" class="btn btn-default">Отправить</button>
        </form>


    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>