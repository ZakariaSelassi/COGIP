<?php

    require('html.php');
    require('contactContrelleur');
    
    $html->head();
    $html->meta();
    $html->title();


    while ($data = $req->fetch()) {
        echo "<tr>\n<td>Name</td>\n<td>Telephone</td>\n<td>E-mail</td>\n<td>Company</td>\n</tr>
        <tr>
        <td>'$donnees['id']'</td>
        <td>'$donnees['id']'>'$donnees['name']'</td>
        <td>'$donnees['difficulty']'</td>
        <td>'$donnees['distance']'</td>
        <td>'$donnees['duration']'</td>
        <td>'$donnees['height_difference']'</td>
        <td><a href ='$donnees['id']'\">Supprimer</a></td>
        </tr>";
    }

    ?>