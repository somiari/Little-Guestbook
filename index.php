<?php

include 'connection.php';
include 'validateForm.php';
include 'functions.php';

$retrieve = "SELECT * FROM basic
            ORDER BY Date DESC";
$retrieveResult = mysqli_query($conn, $retrieve);

if (isset($_POST['submit'])) {
	if ($_POST['name']) {
		$name = validateForm($_POST['name']);
	}

	if ($_POST['message']) {
		$message = validateForm($_POST['message']);
	}

	$insert = "INSERT INTO basic (Name, Message) VALUES ('".mysqli_real_escape_string($conn, $name)."','".mysqli_real_escape_string($conn, $message)."')";
	$insertResult = mysqli_query($conn, $insert);

	if (!$insertResult) {
		echo "Error: " . $insert . "<br>" . mysqli_error($conn);
	} else {
		echo "<p class='alert'>New record inserted!</p>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600|PT+Sans:400,600|Open+Sans" rel="stylesheet"> -->
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">

        <div class="con con-1">
            <h1>Guestbook</h1>
            <div class="wrapper wrapper-one">

                <section class="box message-box">

                    <h2>Drop us a note</h2>


                    <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " >


                        <div class="main-area">
                            <input id="name" type="text" placeholder="Your name" name="name" maxlength="25" required>

                            <textarea id="message" placeholder="Your message"  name="message" maxlength="500" required></textarea><span id="count">500</span>

                        </div>

                        <button id="submit" type="submit" name="submit">Send</button>
                    </form>

                </section>
            </div>
        </div>

        <div class="con con-2">
            <div class="wrapper wrapper-two">
                <section class="box entry-box">

                    <h2>Recent Entries</h2>

                    <div class="entry-holder main-area">

                        <?php while ($row = mysqli_fetch_assoc($retrieveResult)): ?>
                            <div class="message">
                                <div class="name-and-date">
                                    <h4><?php echo $row['Name'] ?></h4>
                                    <p><?php echo ago(strtotime($row['Date'])) ?></p>
                                    <!-- <p><?php echo date("h:ia - D., d M. 'y", strtotime($row['Date'])) ?></p> -->
                                </div>
                                <p><?php echo $row['Message'] ?></p>
                            </div>
                        <?php endwhile;?>

                    </div>

                </section>
            </div>

            <footer><span class="brand-logo"></span>&copy; 2017 &#8226; iBrand Africa </footer>
        </div>

    </div>

</body>

<script type="text/javascript">

    $(document).ready(function() {

        $("#submit").click(function(){
            var name = $("#name").val();
            var message = $("#message").val();

            $.Ajax({
                url: "index.php",
                type: "POST",
                async: false,
                data: {
                    "done": 1,
                    "name": name,
                    "message": message
                },
                success: function(data){

                }
            })
        });

    });

</script>
</html>
