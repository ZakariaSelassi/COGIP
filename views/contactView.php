<?php

    require('html.php');
    require('contactContrelleur');
    
    $html->head();
    $html->meta();
    $html->title();


    while ($data = $req->fetch()) {
        echo '<tr>\n<td>Name</td>\n<td>Telephone</td>\n<td>E-mail</td>\n<td>Company</td>\n</tr>
        <tr>\n<td style= \"border: 0.1rem solid black\">" . $donnees["id"] . "</td>
        <td>.'$donnees["id"]'.>. $donnees["name"]."</td>
        <td>.'$donnees["difficulty"]'.</td>
        <td>.'$donnees["distance"]'.</td>
        <td>.'$donnees["duration"]'.</td>
        <td>'$donnees["height_difference"]'.</td>
        <td style= \"border: 0.1rem solid black\"><a href =\"http://localhost/html/hiking/delete.php?id=" . $donnees["id"] . "\">Supprimer</a></td>
        </tr>\n';
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>