<?php 

function Loadurl($uri = ''){
    return 'http://localhost/PHPTraining/'.$uri;
}
 
function redirect($url){
    header("Location:{$url}");
    exit();
}
 
function UploadvalueForget($key){
    return isset($_GET[$key]) ? trim($_GET[$key]) : false;
}
 
function UploadvalueForpost($key){
    return isset($_POST[$key]) ? trim($_POST[$key]) : false;
}
 
function Checksubmit($key){
    return (isset($_POST['username']) && $_POST['username'] == $key);
}
 
function Checkerror($error, $key){
    echo '<span style="color: red">'.(empty($error[$key]) ? "" : $error[$key]). '</span>';
}

 
function db_user_get_by_username($username){
    $username = addslashes($username);
    $sql = "SELECT * FROM Alllogin where username = '{$username}'";
    return db_get_row($sql);
}

function db_insert($table, $data = array())
{
    $fields = '';
    $values = '';
     
    foreach ($data as $field => $value){
        $fields .= $field .',';
        $values .= "'".addslashes($value)."',";
    }
     
    $fields = trim($fields, ',');
    $values = trim($values, ',');
     
    $sql = "INSERT INTO {$table}($fields) VALUES ({$values})";
     
    return db_execute($sql);
}
?>