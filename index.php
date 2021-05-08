
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input type="text" name="index" placeholder="Nhap vao chi so">
    <input type="submit" value="Kiem tra">

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $check = $_POST['index'];
    $printArr = $_POST['print'];
}
//echo implode(" ",initArray());
function initArray($ele = 100) {
    $arr = [];
    for ($i = 0; $i < $ele; $i++) {
        array_push($arr, mt_rand(1,100));
    }
    return $arr;
}
$arr = initArray();
function checkIndex($index, $arr) {
    if ($index < 0 || $index >= 100) {
        throw new Exception("Index does not exits ");
    }
    return $arr[$index];
}

try {
    $message = checkIndex($check, $arr);
} catch (Exception $e) {
    echo "Index does not exits!";
}
?>
<p><?="Phan tu tai vi tri {$check} la {$message}"; ?></p>
</body>
</html>