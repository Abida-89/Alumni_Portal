<?php
    // Database connection (update with your real DB info)
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "alumni_list";

    $conn = new mysqli($host, $user, $pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get search input
    $search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

    if ($search != '') {
        // Run the query (Replace 'register' with your correct table name!)
        $sql = "SELECT * FROM register WHERE firstName LIKE '%$search%' 
                OR lastname LIKE '%$search%'
                OR company LIKE '%$search%'
                OR designation LIKE '%$search%'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            echo "<h2>Search Results for: <b>" . htmlspecialchars($search) . "</b></h2>";
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row['firstName']) . " " . htmlspecialchars($row['lastName']) . " - " . htmlspecialchars($row['designation']) . " at " . htmlspecialchars($row['companyName']) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No results found for <b>" . htmlspecialchars($search) . "</b>.";
        }
    } else {
        echo "Please enter something to search.";
    }

    // Close connection
    $conn->close();
?>
