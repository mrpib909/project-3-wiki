
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Wiki</title>
</head>
<body>
   <h1>Hello World what is on your mind today</h1>
    <?php
    
if(file_exists('wiki.txt')){
    $content = file_get_contents('wiki.txt');
    
} else{
 $content = '(no content)';   
}
if(isset($_GET['content'])){
 $content = $_GET['content'];
    file_put_contents('wiki.txt',$content);
    $lastedit = echo "Last Edit on" . date("Y/m/d")
}
$safe_content = htmlentities($content);
echo $safe_content;
echo $lastedit;

?>
<div class="edit">
<form action="wiki.php">
    <textarea name="content" rows="8" cols="80">
    </textarea>
    <input type="submit" value="save">
</form>
    </div>
</body>
</html>