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
<div style="width: 900px;" class="container max-w-full mx-auto-pt-4">
    <form method = "POST" action="/posts">

        @csrf

        <div class = 'mb-4'>
            <label for="title">Title:</label>
            <input id="title" name="title">
        </div>

        <div>
            <label for="content"></label>
            <textarea name="content" id="content" cols="30" rows="10">Content</textarea>
        </div>

        <button>Update</button>

    </form>

</div>

</body>
</html>
