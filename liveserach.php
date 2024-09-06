<?php

inculude("confing.php");
if(isset($_POST['input'])){
    $input=$_POST['input'];
    $query="SELECT * FROM veri WHERE anahtar LIKE'{$input}%'";

    $result=mysqli_query($con,$query);

    if(mysqli_num_rows($result)>0){

<table class="table table-border table-striped mt-4"> 

<thead>
    <tr>
          <th>id</th>
          <th>anahtar</th>
      
        
    </tr>

</thead>
<tbody>

  <?php
  
  while($row = mysqli_fetch_assoc($result)){

    $id= $row['id'];
    $anahtar= $row['anahtar'];
  }
  
  ?>
<tr>

  <td><?php echo $id;?></td>
  <td><?php echo $anahtar;?></td>

</tr>
</tbody>
</table>
<?php
    }else{
        echo "<h6 class='text-danger text-center mt-3'>Veriye ulaşılamadı</h6>";
    }
}



?>