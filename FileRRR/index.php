<?php

//Designing user interface

?>

<?php 
  echo "<link rel='stylesheet' type='text/css' href='theStyles.css' />"; 
?> 

<h1>File (Up-Down)loader</h1>
<hr>
<img src="logo.jpg" width="150px" height="150px" id="ik">


<div class="main">
<form method="POST" enctype="multipart/form-data" action="upload.php">
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload" id="file1">

</form>
</div>

<?php

//Displaying all uploaded files

$files = scandir("uploads");
for ($a = 2; $a <count($files); $a++){


    ?>
  <p class="main1">
    <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
  </p>
    <?php
}
?>
 <p style="color: #fff; font-size: 1.5em">Click on the name of the file to Download</p>
<hr>
 <p style="color: #fff; font-size: 1.5em; text-align: center">Choose a File by clicking on chose file button</p>
 <p style="color: #fff; font-size: 1.5em; text-align: center">Upload the selected File by clicking the Upload button</p>
<?php

