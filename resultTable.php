<?php
    $connect = new PDO("mysql:host=localhost;dbname=goloshubov_lab2", 'root','root');
    function PrintTable($connect) {
        $query = "SELECT * FROM countries";
        $msg = $connect->prepare($query);
        $msg->execute();
        printf('  
            <table style="margin: 10px 0;"  class="table table-bordered"> 
                <tr>
                    <th scope="col">Страна</th>
                    <th scope="col">Валюта</th>
                    <th scope="col">Климат</th>
                    <th scope="col">Виза</th>
                </tr>');
        while($row = $msg->fetch(PDO::FETCH_ASSOC))  {
            printf('
            <tr>
                <td>' . $row['country'] . '</td>
                <td>' . $row['currency'] . '</td>
                <td>' . $row['climate'] . '</td>
                <td>' . $row['visa'] . '</td>
            </tr> ');
        }
        printf('</table>');
    };

   PrintTable($connect);