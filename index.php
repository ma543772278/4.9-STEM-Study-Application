<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>First Page</title>
    </head>
    <body>
        <h1>Hello World!</h1>
		<p><a href="second.php">Second page </a> <br /> - Went to second page</p>
		<form action="second.php">
		<button type="submit" formaction = "second.php">Second page</button>
		</form>
		<?php 
			echo "hello world"; 
		?>
    </body>
</html>
