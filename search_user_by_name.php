<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User by Name</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container custom-container">
        <div class="card">
            <div class="card-header">
                <h2>Search User by Name</h2>
            </div>
            <div class="card-body">
                <form id="searchUserByNameForm" method="get" action="search_user_by_name.php">
                    <div class="form-group">
                        <label for="userName">User Name</label>
                        <input type="text" class="form-control" id="userName" name="userName" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="insert_edit_user.html" class="btn btn-secondary">Back</a>
                </form>
                <div id="userList">
                    <!-- Search results will be displayed here -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
