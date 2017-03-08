<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Books</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

    <h1> All Books</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author First</th>
            <th>Author Last</th>
            <th>Publisher Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title  }}</td>
                <td>{{ $book->author->first_name }}</td>
                <td>{{ $book->author->last_name }}</td>
                <td>{{ $book->publisher->name }}</td>
            </tr>

        </tbody>
        @endforeach
    </table>
</div>




</body>
</html>