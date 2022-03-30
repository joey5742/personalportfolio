<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Tienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   <title>Review Input</title>
 </head>

<div id="container"
 <header>
 <h1>Thanks for your submission <?php echo $_POST['fName']; ?>!</h1>
	</header>

<!-- output from input form  -->

<body>
<div id="review">
<h2>Please confirm the information you provided</h2>
	<p>Your full name is <b><?php echo $_POST['fName'] . " " . $_POST['lName'];?></b>.</p>
	<p>We can contact you at <b><?php echo $_POST['email']; ?></b>.</p>
	<p>Or call you at <b><?php echo $_POST['phone']; ?></b>.</p>
	<p>Thank-you for your <?php echo $_POST['reference']; ?>.</p> 
	<p>Which was as follows:</p>
	<p class="comment"> <?php echo $_POST['comment']; ?></p> 
</div>
</body>
</div>