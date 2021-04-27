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
            array_push($optionArray,"
            <tr>
                <td>".$data['Name']."</td>
                <td>".$data['telephone']."</td>
                <td>".$data['email']."</td>
                <td>".$data['name_company']."</td>
            </tr>");
        }
        return "
        <table class='$class'>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Telephone</td>
                    <td>E-mail</td>
                    <td>Company</td>
                </tr>
            </thead>
        </br>".implode("",$optionArray)."</tr>\n</table>";
    }

    public function displayTableContactAdmin($pull, $class){
        $optionArray= [];
        while ($data = $pull->fetch()){ 
            array_push($optionArray,"
                <tr>
                    <td>".$data['Name']."</td>
                    <td>".$data['telephone']."</td>
                    <td>".$data['email']."</td>
                    <td>".$data['name_company']."</td>
                    <td>
                        <a href =\"/home/contactDelete/".$data['id_people']."\">Supprimer</a>
                        <a href=\"/home/contactDetail/".$data['id_people']."\" name=\"details\" class=\"btn btn-warning\">Detail</a>
                    </td>
                </tr>");
        }
        return "
        <div class=\"p-5 m-auto w-50\">
        <p>Contact :</p>
        <table class='$class'>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Telephone</td>
                    <td>E-mail</td>
                    <td>Company</td>
                </tr>
            </thead>
        </br>".implode("",$optionArray)."</tr>\n</table>";
    }

    public function displayContactDetailPeople($pull){
       
        $data = $pull->fetch();
        return "
        <p>Contact : ".$data['Name']."</p>
        <p>Company : ".$data['name_company']."</p>
        <p>Email : ".$data['email']."</p>
        <p>Phone : ".$data['telephone']."</p>";
    }

    public function displayContactDetailInvoices($pull, $class){
        $optionArray= [];
        while ($data = $pull->fetch()){ 
            array_push($optionArray,"
            <tr>
                <td>".$data['num_invoices']."</td>
                <td>".$data['date_invoices']."</td>
            </tr>");
        }
        return "
        <table class='$class'>
            <thead>
                <tr>
                    <td>Invoice number</td>
                    <td>Date</td>
                </tr>
            </thead>
        </br>".implode("",$optionArray)."</tr>\n</table>";
    }


    public function displayInvoices($pull, $class){
        $optionArray= [];
        while ($data = $pull->fetch()){ 
            array_push($optionArray,"
            <tr>
                <td scope=\"row\">".htmlspecialchars($data['num_invoices'])."</td>
                <td>".$data['date_invoices']."</td>
                <td>".$data['name_company']."</td>
                <td>".$data['type']."</td>
            </tr>");
        }
        return "
        <table class=\"".$class."\">
            <thead>
                <tr>
                    <th scope=\"col\">Invoice Number</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Compagnies</th>
                    <th scope=\"col\">Type</th>
                </tr>
            </thead>
        </br><tbody>".implode("",$optionArray)."</tbody>\n</table>";
    }

    public function displayInvoicesAdmin($pull, $class){
        $optionArray= [];
        while ($data = $pull->fetch()){ 
            array_push($optionArray,"
            <tr>
                <td scope=\"row\">".htmlspecialchars($data['num_invoices'])."</td>
                <td scope=\"col\">".$data['date_invoices']."></td>
                <td scope=\"col\">".$data['name_company']."></td>
                <td scope=\"col\">".$data['type']."></td>
                <td>
                    <a href =\"/home/contactDelete/".$data['id_invoices']."\">Supprimer</a>
                    <a href=\"/home/contactDetail/".$data['id_invoices']."\" name=\"details\" class=\"btn btn-warning\">Detail</a>
                </td>
            </tr>");
        }
        return "
        <div class=\"p-5 m-auto w-50\">
        <p>Invoices :</p>
        <table class=\"".$class."\">
            <thead>
                    <tr>
                        <th>number</th>
                        <th scope=\"col\">Invoice Number</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Compagnies</th>
                        <th scope=\"col\">Type</th>
                    </tr>
            </thead>
        </br><tbody>".implode("",$optionArray)."</tbody>\n</table>";
    }


    public function displayCompanyAdmin($pull, $class){
        $optionArray= [];
        while ($data = $pull->fetch()){ 
            array_push($optionArray,"
            <tr>
                <td scope=\"row\">".htmlspecialchars($data['name_company'])."</td>
                <td>".$data['country_company']."</td>
                <td>".$data['vat_company']."</td>
                <td>".$data['type']."</td>
                <td>
                    <a href =\"/home/contactDelete/".$data['id_compagnies']."\">Supprimer</a>
                    <a href=\"/home/contactDetail/".$data['id_compangies']."\" name=\"details\" class=\"btn btn-warning\">Detail</a>
                </td>
        </tr>");
        }
        return "
        <div class=\"p-5 m-auto w-50\">
        <p>company :</p>
        <table class=\"".$class."\">
            <thead>
                <tr>
                    <th>number</th>
                    <th scope=\"col\">Invoice Number</th>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Compagnies</th>
                    <th scope=\"col\">Type</th>
                </tr>
            </thead>
        </br><tbody>".implode("",$optionArray)."</tbody>\n</table>";
    }

    public function displayCompany($pull, $class){
        $optionArray= [];
        while ($data = $pull->fetch()){ 
            array_push($optionArray,"
            <tr>
                <td scope=\"col\">".htmlspecialchars($data['name_company'])."</td>
                <td scope=\"col\">".$data['country_company']."</td>
                <td scope=\"col\">".$data['vat_company']."</td>
                <td scope=\"col\">".$data['type']."</td>
            </tr>");
        }
        return "
        <table class=\"".$class."\">
            <thead>
                <tr>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Country</th>
                    <th scope=\"col\">VAT</th>
                    <th scope=\"col\">Type</th>
                </tr>
            </thead>
        </br><tbody>".implode("",$optionArray)."</tbody>\n</table>";
    }


}