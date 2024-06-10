<?php
include "connection.php";
if (isset($_POST['submit'])) {

    $name = $_POST['userName'];
    $description = $_POST['Description'];
    $EGN = $_POST['EGN'];
    $GSM = $_POST['GSM'];
    $address = $_POST['Adress'];

    try {
        // Begin a transaction
        $connection->beginTransaction();

        // Insert new user into User table
        $sql = "INSERT INTO User (Name) VALUES (?)";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$name]);

        // Retrieve the ID of the last inserted user
        $userID = $connection->lastInsertId();

        // Insert details for the new user into User_Details table
        $sql = "INSERT INTO User_Details (UserID, EGN, GSM, Adress, Description) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$userID, $EGN, $GSM, $address, $description]);

        // Commit the transaction
        $connection->commit();

        // Redirect to a success page
        header("Location: insert_new_user.php");
        exit();

    } catch (Exception $e) {
        // Rollback the transaction if something failed
        $connection->rollBack();
        echo "<center style='color:red;'>Error: " . $e->getMessage() . "</center>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container custom-container">
        <div class="card">
            <div class="card-header">
                <h2>Insert New User</h2>
            </div>
            <div class="card-body">
                <!-- Insert New User Form -->
                <form method="POST">
                   <div class="form-group">
                        <label for="userName">Name</label>
                        <input name="userName" type="text" class="form-control" id="userName" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="userEGN">EGN</label>
                        <input name="EGN" type="text" class="form-control" id="userEGN" placeholder="Enter EGN">
                    </div>
                    <div class="form-group">
                        <label for="userGSM">GSM</label>
                        <input name="GSM" type="text" class="form-control" id="userGSM" placeholder="Enter GSM">
                    </div>
                    <div class="form-group">
                        <label for="userAdress">Adress</label>
                        <input name="Adress" type="text" class="form-control" id="userAdress" placeholder="Enter Adress">
                    </div>
                    <div class="form-group">
                        <label for="userDescription">Description</label>
                        <input name="Description" type="text" class="form-control" id="userDescription" placeholder="Enter Description">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <a href="insert_edit_user.html" class="btn btn-primary mt-3">Back</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
