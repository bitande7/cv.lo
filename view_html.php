<?php

$dir = 'data';

$files = array_diff( scandir( $dir), array('..', '.'));

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV</title>
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



<div class="row">

    <div class="col-md-4 col-md-offset-4">

        <?php

            foreach ($files as $file ) {

                echo '<h1><a href="data/'.$file.'">'.$file.'</a></h1>';
            }

        ?>

    </div>

</div>


</body>
</html>




