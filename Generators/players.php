<?php 
    $count = filter_input(INPUT_GET, 'count');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator - Hráčů</title>
</head>
<body>
    <?php

        for ($i=0; $i < $count; $i++) { 
            $SQL = "INSERT INTO `players` (
            `id_guild`, 
            `nickname`, 
            `email`, 
            `password`, 
            `bithdate`, 
            `created_at`, 
            `newsletter`, 
            `GDPR`) VALUES
            (	
            1,	
            'Knefi',	
            'matej.kneifl@seznam.cz',	
            'kleslo123',	
            '2002-01-31',	
            '2020-01-14 12:07:49',	
            0,	
            1);";
        }

       
    
    ?>
</body>
</html>