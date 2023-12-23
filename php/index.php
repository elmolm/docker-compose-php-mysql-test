<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Data Display</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Test Data Display</h2>

    <?php
    $host = 'db';
    $username = 'devuser';
    $password = 'devpass';
    $database = 'test_db';

    try {
        // Create a PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retrieve data from the tab_test table
        $stmt = $pdo->query("SELECT * FROM tab_test");

        if ($stmt->rowCount() > 0) {
            echo '<table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Timestamp</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>';
            // Output data of each row
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>
                        <td>' . $row['id'] . '</td>
                        <td>' . $row['timestamp'] . '</td>
                        <td>' . $row['message'] . '</td>
                      </tr>';
            }
            echo '</tbody></table>';
        } else {
            echo '<p class="text-muted">0 results</p>';
        }
    } catch (PDOException $e) {
        echo '<p class="text-danger">Connection failed: ' . $e->getMessage() . '</p>';
    }

    // Close the connection
    $pdo = null;
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</body>
</html>
