
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
if(file_exists('name.txt')){
 $name = file_get_contents('name.txt');   
}
else{
 $name = 'no name';   
}
if(isset($_POST['content'])){
 $content = $_POST['content'];
    file_put_contents('wiki.txt',$content);
}
if(isset($_POST['name'])){
    
 $name = $_POST['name'];
    file_put_contents('name.txt',$name);
    
}
$safe_content = htmlentities($content);
echo "<h2>" . $safe_content . "</h2>" . "<br/>";
$the_name = htmlentities($name);
echo "Last edit by: " . $the_name;
?>
<div class="edit">
<form action="wiki.php" method="post">
    Post <br/>
    <textarea name="content" rows="8" cols="80">
    </textarea><br/>
    Name <br/>
    <textarea name="name"  rows="1" cols="40">
    </textarea>
    <input type="submit" value="save">
</form>
    </div>
</body>
</html>