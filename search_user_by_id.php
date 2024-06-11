<?php
include "connection.php";

if (isset($_GET['userID'])) {
    $ID = $_GET['userID'];
    
    try {
        $sql = "SELECT User.ID, User.Name, User_Details.EGN, User_Details.GSM, User_Details.Address, User_Details.Description 
                FROM User 
                JOIN User_Details ON User.ID = User_Details.UserID 
                WHERE User.ID LIKE ?";
        $stmt = $connection->prepare($sql);
        $stmt->execute(['%' . $ID . '%']);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        echo "<center style='color:red;'>Error: " . $e->getMessage() . "</center>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User by ID</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container custom-container">
        <div class="card">
            <div class="card-header">
                <h2>Search User by ID</h2>
            </div>
            <div class="card-body">
                <form id="searchUserByIDForm" method="get" action="search_user_by_id.php">
                    <div class="form-group">
                        <label for="userID">User ID</label>
                        <input type="number" class="form-control" id="userID" name="userID" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="insert_edit_user.html" class="btn btn-secondary">Back</a>
                </form>
                <div id="userList" class="mt-3">
                    <?php if (isset($results) && count($results) > 0): ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>EGN</th>
                                    <th>GSM</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($results as $row): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['ID']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['EGN']); ?></td>
                                        <td><?php echo htmlspecialchars($row['GSM']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Address']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Description']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php else: ?>
                        <?php if (isset($name)): ?>
                            <p class="text-center">No users found with the ID "<?php echo htmlspecialchars($name); ?>"</p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>
</html>
