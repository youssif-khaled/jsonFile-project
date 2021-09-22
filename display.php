<?php
session_start();
$strJsonFileContents = file_get_contents("folder.json"); 
 $details = json_decode($strJsonFileContents,true);
$_SESSION['name'] = $details['name'];
$_SESSION['desc'] = $details['description'];
$_SESSION['cBy'] = $details['created_by'];
$_SESSION['cAt'] = $details['created_at'];

print_r($_SESSION);
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/index_style.css" rel="stylesheet">

</head>

<body>
    <form method="POST" action="logout.php">
<button type="submit" name="logout">Logout</button>
<div class="content" id="post">
<ul>
<li><?php echo $_SESSION['name'];  ?></li>
<li><?php echo $_SESSION['desc'];  ?></li>
<li><?php echo $_SESSION['cBy'];   ?></li>
<li><?php echo $_SESSION['cAt'];  ?></li>

</ul>

</div>

</form>
</body>
</html>

