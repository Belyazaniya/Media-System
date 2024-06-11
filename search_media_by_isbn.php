<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Media by ISBN</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container custom-container">
        <div class="card">
            <div class="card-header">
                <h2>Search Media by ISBN</h2>
            </div>
            <div class="card-body">
                <!-- Search Media by ISBN Form -->
                <form>
                    <div class="form-group">
                        <label for="searchMediaISBN">ISBN</label>
                        <input type="text" class="form-control" id="searchMediaISBN" placeholder="Enter ISBN">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <a href="insert_edit_media.html" class="btn btn-primary mt-3">Back</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
