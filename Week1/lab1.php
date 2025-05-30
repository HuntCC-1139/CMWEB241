<!DOCTYPE html>
<html lang="en">
<head>

<!-- text area for people to enter 1-90 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Calculator</title>
	
</head>
<body>
    
    <h1>Temperature Calculator</h1>
    
    <form method="post" action="">
	
<!-- Validates the input that its between 1-90 -->
<label for="chirps">
<p>Please enter a number of chirps between 1 and 90:</p></label>
        <input type="number" name="chirps" id="chirps" min="1" max="90" required>


        <button type="submit">Calculate Temperature</button>
    </form>
    <p id="result">
        <?php
		
//Adds 40 to the number put in the calculate box		
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $chirps = $_POST["chirps"];
          
            if ($chirps >= 1 && $chirps <= 90) {
                $temperature = $chirps + 40;
				
//Displays the temperature 
                echo "The temperature is $temperature degrees Fahrenheit.";
            } else {
                echo "Please enter a valid number between 1 and 90.";
            }
        }
        ?>
    </p>
	
	<h2> <a href="../index.html"> CMWEB241 Homepage </a></h2>

<h2> <a href="../../index.html">Student Homepage </a></h2>
	
	
</body>
</html>