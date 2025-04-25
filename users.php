 table<?php

require  "../system/class.php";

$u=getUsers('users');
 ?>
 <br>
<table class="table table-responsive mt-20">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
        <th scope="col">Address</th>

    </tr>
  </thead>
  <tbody>
    <?php 
foreach($u as $user){

    ?>
    <tr>
      <th scope="row">
        <?php echo $user['id'];?>
      </th>
      <td>
        <?php echo $user['name'];?>
      </td>
      <td>
        <?php echo $user['email'];?>
      </td>
      <td>
        <?php echo $user['phone'];?>
      </td>
      <td>
        <?php echo $user['address'];?>
      </td>
     
    </tr>
   <?php 

}
   ?>
  </tbody>
</table>