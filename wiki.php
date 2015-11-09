
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Wiki</title>
</head>
<body>
    <?php
    
if(file_exists('wiki.txt')){
    $content = file_get_contents('wiki.txt');
    
} else{
 $content = '(no content)';   
}
if(isset($_GET['content'])){
 $content = $_GET['content'];
    file_put_contents('wiki.txt',$content);
}
$safe_content = htmlentities('<h1>'$content'</h1>');
echo $safe_content;

?>
<form action="wiki.php">
    <textarea name="content" rows="8" cols="80">
    </textarea>
    <input type="submit" value="save">
</form>
</body>
</html>