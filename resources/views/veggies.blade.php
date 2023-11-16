<!DOCTYPE html>
<html>
<head>
    <title>Library Management System</title>
</head>
<body>

<h1>Welcome to the Library</h1>

<form action="search.php" method="get">
    <label for="title">Search by Title: </label>
    <input type="text" id="title" name="title">
    <input type="submit" value="Search">
</form>

<h2>Book List</h2>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
    </tr>
    <tr>
        <td>Book 1</td>
        <td>Author 1</td>
        <td>ISBN 12345</td>
    </tr>
    <tr>
        <td>Book 2</td>
        <td>Author 2</td>
        <td>ISBN 67890</td>
    </tr>
</table>

<form action="add.php" method="post">
    <h2>Add a Book</h2>
    <label for="title">Title: </label>
    <input type="text" id="title" name="title">
    <br>
    <label for="author">Author: </label>
    <input type="text" id="author" name="author">
    <br>
    <label for="isbn">ISBN: </label>
    <input type="text" id="isbn" name="isbn">
    <br>
    <input type="submit" value="Add Book">
</form>
<h1>Baigan</h1>
<h1>Aaloo</h1>
<h1>Bhindi</h1>
<h1>Gobhi</h1>
</body>
</html>

