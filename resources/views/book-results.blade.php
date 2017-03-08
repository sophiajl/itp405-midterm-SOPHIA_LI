<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<br>

<table class="table">
    <tr>
        <th>Headline</th>
        <th>Body</th>
        <th>Rating</th>
        <th>Title</th>
        <th>Author First Name</th>
        <th>Author Last Name</th>
        <th>Publisher Name</th>


    </tr>
    @foreach($reviews as $review)
        @foreach($titles as $title)
            @foreach($authors as $author)
                @foreach($publishers as $publisher)

        <tr>
            <td>{{ $review->headline }}</td>
            <td>{{ $review->body }}</td>
            <td>{{ $review->rating}}</td>
            <td>{{ $title->title}}</td>
            <td>{{ $author->first_name}}</td>
            <td>{{ $author->last_name}}</td>
            <td>{{ $publisher->publisher_name}}</td>

            {{--<td>{{ $publisher->publisher_name}}</td>--}}

        </tr>
    @endforeach
    @endforeach

        @endforeach
    @endforeach

</table>


</body>
</html>