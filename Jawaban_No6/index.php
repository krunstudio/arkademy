<center>
<?php
include "koneksi.php";
$query = mysqli_query($connection, "SELECT * FROM nama JOIN work
ON nama.id = work.id JOIN category ON work.id_salary = category.id");
?>
<form action="" method="post">
    <table border="1" cellpadding="1" cellspacing="0">
        <tr bgcolor="#c27ba0">
            <th>Name</th>
            <th>Work</th>
            <th>Salary</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["name"];?></td>
            <td><?php echo $data["salary"];?></td>
        </tr>
        <?php } ?>

        

        <?php } ?>
    </table>
</form>
