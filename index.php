<!DOCTYPE html>
<html>
<head>
    <style>
        /* Define the three colors for the rows */
        .color1 {
            background-color: #ffcccc;
        }
        .color2 {
            background-color: #ccffcc;
        }
        .color3 {
            background-color: #ccccff;
        }
    </style>
</head>
<body>
    <?php
        // Start the timer
        $start = microtime(true);
        
        // Your code for generating the table goes here
        // ...
    ?>

    <table>
        <tr class="color1">
            <td><?php echo "Hello World"; ?></td>
        </tr>
        <tr class="color2">
            <td><?php echo "Hello World"; ?></td>
        </tr>
        <tr class="color3">
            <td><?php echo "Hello World"; ?></td>
        </tr>
        <tr class="color1">
            <td><?php echo "Hello World"; ?></td>
        </tr>
        <tr class="color2">
            <td><?php echo "Hello World"; ?></td>
        </tr>
        <tr class="color3">
            <td><?php echo "Hello World"; ?></td>
        </tr>
    </table>

    <?php
        // End the timer and calculate the page load time
        $end = microtime(true);
        $loadTime = $end - $start;
        
        // Display the page load time
        echo "Page loaded in " . number_format($loadTime, 4) . " seconds.";
    ?>
</body>
</html>
