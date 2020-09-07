<form action="<?php print $PHP_SELF?>" enctype="multipart/form-data" method="post">
   Last Name:<br /> <input type="text" name="name" value="" /><br />
   Class Notes:<br /> <input type="file" name="classnotes" value="" /><br />
   <p><input type="submit" name="submit" value="Submit Notes" /></p>
</form>

<?php
   define ("FILEREPOSITORY","./");

   if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {

      if ($_FILES['classnotes']['type'] != "application/pdf") {
         echo "<p>Class notes must be uploaded in PDF format.</p>";
      } else {
         $name = $_POST['name'];
         $result = move_uploaded_file($_FILES['classnotes']['tmp_name'], FILEREPOSITORY."/$name.pdf");
         if ($result == 1) echo "<p>File successfully uploaded.</p>";
         else echo "<p>There was a problem uploading the file.</p>";
      } #endIF
   } #endIF
?>
