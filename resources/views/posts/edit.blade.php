<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<div style="width: 900px;" class="container max-w-full mx-auto pt-4">


    <form method = "POST" action="/posts/{{$post -> id}}">
        @method('PUT')
        @csrf

        <div class = 'mb-4'>
            <label for="title" class="shadow ">Title:</label>
            <input id="title" name="title" value="{{$post -> title}}">
        </div>

        <div>
            <label for="content"></label>
            <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        </div>

        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Update</button>
        <a href="/posts/index" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Cancle </a>
        <form action="/posts/{{$post->id}}">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Delete</button>

        </form>

    </form>

</div>

</body>
</html>
