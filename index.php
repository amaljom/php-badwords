<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>
    <h1>bad words</h1>
    <?php 
        $text='ciao questo è il testo che ho scritto';
    ?>
    <h2>questa è la frase da modificare: <?php echo $text; ?> Questa è la sua lunghezza: <?php echo strlen($text); ?> </h2>

    <h2> La parola da censurare è la seguente: <?php echo $_GET ['word']; $word=$_GET ['word']; ?></h2>
    <?php 
        $newText= str_replace($word, '***', $text);
    ?>
    <h2> la nuova frase è:<?php echo $newText; ?> Questa è la sua lunghezza: <?php echo strlen($newText); ?> </h2>

   
</body>
</html>