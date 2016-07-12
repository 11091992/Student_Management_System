 <?php
  if(isset($_POST['button'])){
  $name= "product_name.jpg";
  move_uploaded_file($_FILES["fileField"]["tmp_name"],"student_images/$name");
  header("location: tryupload.php");
  }
  ?>
  <html>
  <body>
  <form action="tryupload.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
  <table>
  <tr>
    <td align="right">Product Image</td>
    <td><label>
      <input type="file" name="fileField" id="fileField" />
    </label></td>
  </tr>      
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="button" id="button"/>
    </label></td>
  </tr></table>
  </form>
  </body>
  </html>