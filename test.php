<?php
if(isset($_POST['name'])){
    //echo $_POST['name'];\
    //var_dump($_POST);
    $dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    $sth = $dbh->query("SELECT * FROM test");
    $result = $sth->fetchAll();
    print_r($result);
}
