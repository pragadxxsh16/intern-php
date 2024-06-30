<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/create.css">
    <title> Blog Creation</title>
</head>
    <body>
        <h1>
             Start Writing your Blog
        </h1>
        <h2>
            "Convey everything through your Own Blog"
        </h2>
        <form action="{{route('BlogSite.store')}}" method="post" >
        @csrf
        <h4>Title</h4>
        <input type="text" id="title" name="Title" placeholder="Enter your Title" required><br>
        <h4>Content</h4>
        <textarea name="Textarea" id="content" rows="25" cols="90" placeholder="Start Writing here..." required></textarea><br>
        <input id='submit' type="submit" name="submit" value="Submit">
        </form>
    </body>
    
</html>