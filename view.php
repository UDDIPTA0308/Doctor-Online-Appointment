<?php include 'database.php';?>

<table border ="1px" cellpadding="10px" cellspacing="10px">
    <tr>
        <th>p_id</th>
        <th>p_name</th>
        <th>p_age</th>
        <th>p_gender</th>
        <th>p_mobile</th>
        <th>p_email</th>
        <th>p_password</th>
        <th colspan="2">Actions</th>
</tr>

<?php
$query="SELECT * FROM patient";
$data=mysqli_query($con,$query);
$result=mysqli_num_rows($data);
if($result){
    while($row=mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $row['p_id'];?></td>
    <td><?php echo $row['p_name'];?></td>
    <td><?php echo $row['p_age'];?></td>
    <td><?php echo $row['p_gender'];?></td>
    <td><?php echo $row['p_mobile'];?></td>
    <td><?php echo $row['p_email'];?></td>
    <td><?php echo $row['p_password'];?></td>
    <td><a href="update.php?id=<?php echo $row['p_id'];?>">Edit </a></td>




 </tr>
 <?php
    }
}

?>

</table>