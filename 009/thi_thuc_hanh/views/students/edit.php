<form action="index.php?controller=student&action=update&id=<?= $items['id'];?>" method="post">
    name : <input type="text" name="name" value="<?= $items['name'];?>"> <br>
    class_id : <input type="text" name="class" value="<?= $items['class'];?>"> <br>
    date : <input type="date" name="date" value="<?= $items['date'];?>"> <br>
    gender : <input type="text" name="gender" value="<?= $items['gender'];?>"> <br>
    information : <input type="text" name="information" value="<?= $items['information'];?>"> <br>    
    <input type="submit" value="Them">
    <a href="index.php?controller=student&action=index">Quay lại</a>

</form>