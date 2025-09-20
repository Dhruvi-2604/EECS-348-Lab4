<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <!-- My own work. -->
    <!-- Internal CSS for styling the table. -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .input-form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Multiplication Table</h1>

        <!-- HTML form to get user input for the number. -->
        <!-- My own work. -->
        <div class="input-form">
            <form action="" method="get">
                <label for="number">Enter a number to generate the table:</label>
                <input type="number" id="number" name="number" min="1" required>
                <button type="submit">Generate</button>
            </form>
        </div>

        <?php
            // My own work.
            /**
             * @function generateTable
             * This PHP script generates a multiplication table based on the number from the URL query.
             */
            // Check if the 'number' parameter exists in the URL.
            if (isset($_GET['number'])) {
                // Sanitize the input to ensure it's an integer.
                $number = intval($_GET['number']);
                
                // Ensure the number is positive.
                if ($number > 0) {
                    echo "<h2>Table for $number</h2>";
                    echo "<table>";
                    echo "<thead><tr><th>X</th>";
                    // Loop to create the header row with column indexes.
                    for ($col = 1; $col <= $number; $col++) {
                        echo "<th>$col</th>";
                    }
                    echo "</tr></thead>";
                    echo "<tbody>";

                    // Nested loops to generate the table rows and data.
                    for ($row = 1; $row <= $number; $row++) {
                        echo "<tr>";
                        // First cell of the row is the row index.
                        echo "<td><strong>$row</strong></td>";
                        for ($col = 1; $col <= $number; $col++) {
                            // Calculate the product and display it.
                            echo "<td>" . ($row * $col) . "</td>";
                        }
                        echo "</tr>";
                    }

                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<p>Please enter a positive number.</p>";
                }
            } else {
                echo "<p>Please enter a number and click 'Generate' to see the multiplication table.</p>";
            }
        ?>
    </div>

</body>
</html>