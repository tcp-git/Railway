<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway PHP App</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .user { padding: 10px; border: 1px solid #ddd; margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Railway PHP Application</h1>
    
    <?php
    include 'db.php';
    
    echo "<h2>Database Connection Status:</h2>";
    if ($conn) {
        echo "<p style='color: green;'>✅ Connected to database successfully!</p>";
        
        $result = mysqli_query($conn, "SELECT * FROM users");
        
        if ($result && mysqli_num_rows($result) > 0) {
            echo "<h2>Users:</h2>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='user'>";
                echo "<strong>Name:</strong> " . htmlspecialchars($row['name']) . "<br>";
                if (isset($row['email'])) {
                    echo "<strong>Email:</strong> " . htmlspecialchars($row['email']);
                }
                echo "</div>";
            }
        } else {
            echo "<p>No users found or table doesn't exist yet.</p>";
            echo "<p>Please run the setup.sql file in your database.</p>";
        }
    } else {
        echo "<p style='color: red;'>❌ Database connection failed!</p>";
    }
    ?>
    
    <hr>
    <p><small>Deployed on Railway</small></p>
</body>
</html>