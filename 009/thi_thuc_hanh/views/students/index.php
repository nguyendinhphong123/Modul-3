<a href="index.php?controller=student&action=create" > Thêm mới </a>
<table border="1">
    <thead>
        <tr>
        <th>id</th>
            <th>name</th>
            <th>class</th>
            <th>date</th>
            <th>gender</th>
            <th>information</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $items as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
            <td> <?php echo ++$key;?> </td>
                <td> <?php echo $row['name'];?> </td>
                <td><?php echo $row['class'];?></td>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['information'];?></td>
                <td>
                    <a href="index.php?controller=student&action=edit&id=<?= $row['id'] ;?>" >Edit</a> <br>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="index.php?controller=student&action=destroy&id=<?= $row['id'] ;?>" >Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>