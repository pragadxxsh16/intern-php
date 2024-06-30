<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/view.css">
    <title>Presented Blogs</title>
</head>
<body>


    @if(session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif

    @foreach($data as $key => $blog)
    
        <h3>{{ $blog->title }}</h3>
        <p>{{ $blog->textarea }}</p><br>

    @endforeach
    {{$data->links()}}
    
    
    <a href="{{route('BlogSite.home')}}"><button><b><-----  Back to Homepage</button></a>
</body>
</html>
