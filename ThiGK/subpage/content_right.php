
<?php 
include '/pdo.php';
$sql='select * from nhaxb';
$objStatement= $objPDO->prepare($sql);
$objStatement->execute();
$dataNxb = $objStatement->fetchAll(PDO::FETCH_OBJ);

$sql='select * from loai';
$objStatement= $objPDO->prepare($sql);
$objStatement->execute();
$dataLoai = $objStatement->fetchAll(PDO::FETCH_OBJ);

$kw = isset($_GET['kw'])?$_GET['kw']:'';
$sql="select * from sach where tensach like ? ";
$a =["%$kw%"];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy van
$n = $objStatement->rowCount();
echo "Co $n ket qua";
$data = $objStatement->fetchAll(PDO::FETCH_OBJ );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{width: 60px;}
    </style>
</head>
<body>
<table>
<h1>Tìm kiếm</h1>
<form>
<input type="text" name="kw" value="<?php echo $kw ?>"><input type="submit" value="Search">
</form>
<hr>
    <?php 
   // var_dump($data);
   echo '<table  border=1>';
    foreach($data as $r)
    {
        ?>
        <tr>
            <td><?php echo $r->masach ?></td>
            <td><?php echo $r->tensach ?></td>
            <td><?php echo $r->gia ?></td>
            <td><?php echo $r->gia ?></td>
			<td><?php echo $r->maloai ?></td>
			<td><?php echo $r->manxb ?></td>
        </tr>
        <?php 
    }
    ?>
</table>
</body>
</html>

