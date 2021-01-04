<!-- Switch case -->

<?php
$check = 'cá';
if ($check == 'kẹo'){
    echo 'Ăn kẹo';
}
else if ($check == 'bánh'){
    echo 'Ăn bánh <br/><br/>';
}
else if ($check == 'kem'){
    echo 'Ăn kem <br/><br/>';
}
else if ($check == 'thịt'){
    echo 'Ăn thịt <br/><br/>';
}
else if ($check == 'chay'){
    echo 'Ăn chay <br/><br/>';
}
else {
    echo 'Không đói <br/><br/>';   
}
?>

<!-- Lồng switch -->
<?php
$number = 13;
$midle = null;
switch ($number)
{
    case 13 : // nếu $number = 12
        $midle = $number % 2; // lấy số dư
        switch ($midle)
        {
            case 0 : // nếu số dư = 0
                echo 'Số chẵn <br/><br/>';
                break;
            default :
                echo 'Số lẽ <br/><br/>';
                break;
        }
        break;
    default: // nếu không phải 12 thì không làm gì
        break;
}
?>

<!-- If else -->

<?php
$nam = 2014;
$so_du = $nam % 2;
if ($so_du == 0) {
    $so_du = false;
} else {
    $so_du = true;
}

// So sánh == và ===

// ==
if ($so_du == 0){
    echo 'Năm ' . $nam . ' Là Năm Chẵn <br/><br/>';
}
else{
    echo 'Năm ' . $nam . ' Là Năm Lẻ <br/><br/>';
}
// ===
if ($so_du === 0){
    echo 'Năm ' . $nam . ' Là Năm Chẵn <br/><br/>';
}
else{
    echo 'Năm ' . $nam . ' Là Năm Lẻ <br/><br/>';
}
?>