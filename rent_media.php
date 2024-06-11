<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Media</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container custom-container">
        <div class="card">
            <div class="card-header">
                <h2>Rent Media</h2>
            </div>
            <div class="card-body">
                <!-- Rent Media Form -->
                <form>
                    <div class="form-group">
                        <label for="rentMediaISBN">Media ISBN</label>
                        <input type="text" class="form-control" id="rentMediaISBN" placeholder="Enter media ISBN">
                    </div>
                    <div class="form-group">
                        <label for="rentUserID">User ID</label>
                        <input type="text" class="form-control" id="rentUserID" placeholder="Enter user ID">
                    </div>
                    <div class="form-group">
                        <label for="rentStartDate">Start Date</label>
                        <input type="date" class="form-control" id="rentStartDate">
                    </div>
                    <div class="form-group">
                        <label for="rentEndDate">End Date</label>
                        <input type="date" class="form-control" id="rentEndDate">
                    </div>
                    <button type="submit" class="btn btn-primary">Rent</button>
                </form>
            </div>
            <a href="rent.html" class="btn btn-primary mt-3">Back</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
