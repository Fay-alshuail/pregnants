<?php
include 'config.php';
if(isset($_POST["insert"])){
  $file = addslashes(file_get_contents($_FILES["image"]["tem_name"]));
  $query ="INSERT INTO reports(radialogy) VALUES ('$file')";
  if (mysql_query($query)) {
    echo "<script type='text/javascript'>alert('yes');</script>";
  }
}
?>
<html>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image" id="image"/>
<input type="submit" name="insert" id="insert" value="insert"/>
</form>
<table>
<?php
$query="SELECT * FROM reports ";
$result = mysql_query($query);
while($row = mysql_fetch_array($result)){
  echo'
<tr>
<td>
<img src="data:image/jpeg;base64,'.base64_encode($row['lab_result']).'"/>
</td>
</tr>
  ';
}
?>
</table>
</html>
<script>
$(document).ready(function(){
$('#insert').click(function(){
  var image_name =$('#image').val();
  if(image_name =='')
  {
    alert("please select image");
    return false ;
  }
  else {
    {
      var extension = $('#image').val().split('.').pop().tolowerCase();
      if(jquery.inArray(extension,['gif','png','jpg','jpeg'])==-1)
      {
        alert('invalid image file');
        $('#image').val('');
        return false;
      }
    }
  }
});

});
</script>
