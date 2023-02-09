<form action="index.php?controller=student&action=store" method="post">
    name : <input type="text" name="name" id=""> <br>
    class : <input type="text" name="class" id=""> <br>
    date : <input type="date" name="date" id=""> <br>
    gender : <select id="select" name="gender">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select><br>
    information : <input type="text" name="information" id=""> <br>
    <input type="submit" value="Them" >
    <a href="index.php?controller=student&action=index">Quay lại</a>

</form>