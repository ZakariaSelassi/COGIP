<?php

class Html {


    public function head($href, $rel){
        return '';
    }

    public function link($href, $rel){
        return "<link href='$href' rel='$rel'>";
    }

    public function baliseMeta($name, $content){
        return "<meta name='$name' content='$content' />";
    }

    public function img($src, $alt=null ){
        return "<img src='$src' alt='$alt'>";
    }

    public function ahref($href){
        return "<a href='$href'>";
    }

    public function javascript($src){
        return "<script src='$src'></script>";
    }

    public function displayTableContact($pull, $class){
        $optionArray= [];
        while ($data = $pull->fetch()){ 
            array_push($optionArray,"<tr>
            <td>".$data['Name']."</td>
            <td>".$data['telephone']."</td>
            <td>".$data['email']."</td>
            <td>".$data['name_company']."</td>
            <td><a href =".$data['id_people']."\">Supprimer</a></td>
        </tr>");
        }
        return "
        <table class='$class'>
        <tr>
            <td>Name</td>
            <td>Telephone</td>
            <td>E-mail</td>
            <td>Company</td>
        </tr>
        </br>".implode("",$optionArray)."</tr>\n</table>";
    }

    public function displayTableContactDetailPeople($pull, $class){
        $optionArray= [];
        while ($data = $pull->fetch()){ 
            array_push($optionArray,"<tr>
            <td>".$data['Name']."</td>
            <td>".$data['telephone']."</td>
            <td>".$data['email']."</td>
            <td>".$data['name_company']."</td>
            <td><a href =".$data['id_people']."\">Supprimer</a></td>
        </tr>");
        }
        return "
        <table class='$class'>
        <tr>
            <td>Name</td>
            <td>Telephone</td>
            <td>E-mail</td>
            <td>Company</td>
        </tr>
        </br>".implode("",$optionArray)."</tr>\n</table>";
    }


}