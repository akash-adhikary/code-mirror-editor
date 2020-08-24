
<?php
$cur_dir = getcwd();
$files = glob($cur_dir.'/*php');
foreach($files as $file) { echo "filename:".$file."<br />"; }
?>

<!DOCTYPE html>
<html>
<head>
  <title>FTP2</title>
  <link rel="stylesheet" href="codemirror-lib/docs.css">
  <link rel="stylesheet" href="codemirror-lib/codemirror.css">
  <link rel="stylesheet" href="codemirror-lib/mystylesheet.css">
  <script src="codemirror-lib/codemirror.js"></script>
  <script src="codemirror-lib/matchbrackets.js"></script>
  <script src="codemirror-lib/htmlmixed.js"></script>
  <script src="codemirror-lib/xml.js"></script>
  <script src="codemirror-lib/javascript.js"></script>
  <script src="codemirror-lib/css.js"></script>
  <script src="codemirror-lib/clike.js"></script>
  <script src="codemirror-lib/php.js"></script>
</head>

<body>
  <div id=container1>
    <form method='post'>
      <label for="fname">File Name</label>
      <div id="fname"><input type='text' name='filename'></div>
    <label for="fname">Code</label>
    <br>
      <textarea  name="code" id="code" rows="25" cols="120"> </textarea>
      <input type="submit" name="submit" value="submit">
    </form>
  </div>


  <script>
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
      lineNumbers: true,
      matchBrackets: true,
      mode: "application/x-httpd-php",
      indentUnit: 4,
      indentWithTabs: true
    });
  </script>

</body>
</html>


<?php
//rows="25" cols="80"
if (isset($_REQUEST['submit']))
{
// $txt = $_REQUEST['code'];
// print_r($txt);
// $myfile = fopen($_REQUEST['filename'], 't') or die("Unable to open file!");
// $txt = $_REQUEST['code'];
// print_r($txt);
// fwrite($myfile, $txt);
// fclose($myfile);


$myfile = fopen("/var/www/html/htdocs/Acer/FTP/newfile.php", "t") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
}
  
?>

