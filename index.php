<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $paragrafo= 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa nam ab impedit molestias laboriosam ut incidunt quasi fuga sequi necessitatibus facilis voluptatem, similique qui est vitae, non dolorem ex nihil!';
    ?>

    <p>
        <?php echo $paragrafo ?>
    </p>

    <span>
        <?php echo strlen($paragrafo) ?> caratteri
    </span>


</body>
</html>