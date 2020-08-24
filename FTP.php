<?php
$files = glob('/home/tr1083170/public_html/code-editor/*php');
//foreach($files as $file) { echo "filename:".$file."<br />"; }

function select_file()
{
$files = glob('/home/tr1083170/public_html/code-editor/*php');
 foreach($files as $file)
            {
				$pattern = '/\/home\/tr1083170\/public_html\/code-editor\//i';
				$file=preg_replace($pattern, '', $file);
                echo" <option value=" . "'" .$file ."'". ">".$file. "</option>";
            }
}
?>

<!DOCTYPE html>
<html>
<title>FTP</title>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<div>
  <form method='post'>
	<label for="fname">File Name</label>
    <select id="selected_filename" name="selected_filename">
    <?php select_file(); ?>
	</select>
	<label for="fname">Code</label>
	<br>
    <textarea  name="code" rows="25" cols="120"> </textarea>
	
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>


<?php

if (isset($_REQUEST['submit']))
{
$myfile = fopen($_REQUEST['selected_filename'], "w") or die("Unable to open file!");
$txt = $_REQUEST['code'];
fwrite($myfile, $txt);
fclose($myfile);
 
}
  
?>
