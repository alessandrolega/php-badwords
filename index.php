<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
</head>
<body>
    <!--CREARE VARIABILE PARAGRAFO PHP-->
    <?php
        $paragrafo= 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa nam ab impedit molestias laboriosam ut incidunt quasi fuga sequi necessitatibus facilis voluptatem, similique qui est vitae, non dolorem ex nihil!';
    ?>
    <!--STAMPARE PARAGRAFO HTML-->
    <p>
        <?php echo $paragrafo ?>
    </p>
    <!--STAMPARE PARAGRAFO E LA SUA LUNGHEZZA-->
    <span>
        <?php echo strlen($paragrafo) ?> caratteri
    </span>
    <!--CENSURA-->
    <?php
    if( empty($_GET['censura']) ){
        echo 'non ci sono parole da censurare';
        
    } else {
        $paragrafoModificato = str_replace('amet', '***', $paragrafo);
        echo $paragrafoModificato;
    }
    ?>


</body>
</html>