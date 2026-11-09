@props ([
    'title' => 'Laracasts'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .max-w-400 {
            max-width: 400px;
            margin: 0 auto;
        }

        .card {
            background-color: #a9c2f0;
            border: 1px solid #c36161;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

    </style>
</head>
<body class="bg-gray-800 text-white p-6 max-w-xl mx-auto">
     <nav>
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/contact">Contact</a>
    </nav>
    <main>
    {{$slot}}
    </main>

</body>
</html>
