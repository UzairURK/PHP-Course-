<!DOCTYPE html>
<html>
<head>
    <title>PHP Array with User Input Size</title>
</head>
<body>
    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the size of the array from the user input
        $size = $_POST["size"]; 

        // Initialize an empty array
        $myArray = array();

        // Store values in the array using a loop
        for ($i = 0; $i < $size; $i++) {
			echo "<label for='ele$i'>Enter element " . ($i + 1) . ": </label>";
            echo "<input type='text' name='ele$i' required>";
            echo "<br>";
            $value = $_POST["ele$i"];
            $myArray[] = $value;
        }

        // Display the array contents
        echo "Array Contents: ";
        print_r($myArray);
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="size">Enter the size of the array: </label>
        <input type="number" name="size" min="1" required>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $size = $_POST["size"]; 
            for ($i = 0; $i < $size; $i++) {
                echo "<label for='ele$i'>Enter element " . ($i + 1) . ": </label>";
                echo "<input type='text' name='ele$i' required>";
                echo "<br>";
            }
        }
        ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
