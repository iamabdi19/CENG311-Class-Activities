<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Calculator</title>
</head>
<body>
    <?php
        
        //// Arrays holding conversion rates between USD, CAD, and EUR
        $usd_to_other = array("cad" => 1.35, "eur" => 0.92);
        $cad_to_other = array("usd" => 0.74, "eur" => 0.68);
        $eur_to_other = array("cad" => 1.47, "usd" => 1.09);
        $converted = '';

        // Check if 'convert' button was clicked and the required $_GET parameters are set
        if (isset($_GET['convert']) && isset($_GET['from']) && isset($_GET['cur1']) && isset($_GET['cur2'])) {
            $from_amount = $_GET['from'];
            $cur1 = $_GET['cur1'];
            $cur2 = $_GET['cur2'];
            
            // Check for different currency conversions and calculate accordingly
            if ($cur1 == "usd") {
                if ($cur2 == "cad") {
                    $converted = $from_amount * $usd_to_other["cad"];
                } elseif ($cur2 == "eur") {
                    $converted = $from_amount * $usd_to_other["eur"];
                } else {
                    $converted = $from_amount;
                }
            } elseif ($cur1 == "cad") {
                if ($cur2 == "usd") {
                    $converted = $from_amount * $cad_to_other["usd"];
                } elseif ($cur2 == "eur") {
                    $converted = $from_amount * $cad_to_other["eur"];
                } else {
                    $converted = $from_amount;
                }
            } elseif ($cur1 == "eur") {
                if ($cur2 == "usd") {
                    $converted = $from_amount * $eur_to_other["usd"];
                } elseif ($cur2 == "cad") {
                    $converted = $from_amount * $eur_to_other["cad"];
                } else {
                    $converted = $from_amount;
                }
            }
        }
    ?>

    <!-- Form for currency conversion input -->
    <form action="activity4.php" method="GET">
        <label for="from" style="width: 35px; display: inline-block;">From: </label>
        <input type="text" name="from" value="<?php echo isset($_GET['from']) ? $_GET['from'] : ''; ?>">

        <label for="cur1">Currency:</label>
        <select name="cur1">
            <!-- Dynamically sets the selected currency based on user input -->
            <option value="usd" <?php echo (isset($_GET['cur1']) && $_GET['cur1'] == 'usd') ? 'selected' : ''; ?>>US Dollar</option>
            <option value="cad" <?php echo (isset($_GET['cur1']) && $_GET['cur1'] == 'cad') ? 'selected' : ''; ?>>Canadian Dollar</option>
            <option value="eur" <?php echo (isset($_GET['cur1']) && $_GET['cur1'] == 'eur') ? 'selected' : ''; ?>>Euro</option>
        </select><br>

        <label for="to" style="width: 35px; display: inline-block;">To:</label>
        <!-- Displays the converted currency amount -->
        <input type="text" name="to" value="<?php echo $converted; ?>" />

        <label for="cur2">Currency: </label>
        <select name="cur2">
            <!-- Dynamically sets the selected target currency based on user input -->
            <option value="usd" <?php echo (isset($_GET['cur2']) && $_GET['cur2'] == 'usd') ? 'selected' : ''; ?>>US Dollar</option>
            <option value="cad" <?php echo (isset($_GET['cur2']) && $_GET['cur2'] == 'cad') ? 'selected' : ''; ?>>Canadian Dollar</option>
            <option value="eur" <?php echo (isset($_GET['cur2']) && $_GET['cur2'] == 'eur') ? 'selected' : ''; ?>>Euro</option>
        </select><br><br>

        <label style="width: 340px; display: inline-block;"></label>
		<!-- Submit button for the form -->
        <input type="submit" name="convert" value="Convert">
    </form>
</body>
</html>
