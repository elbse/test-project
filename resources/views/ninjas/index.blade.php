
<html>
<head>
    <title>Ninjas Network | Home</title>
</head>
<body>
    <h2>Ninjas</h1>

    
    {{-- @if ($greeting == "Hi po")
        <p>Hi from inside the if statement</p>
    @endif --}}
   

    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <p>{{ $ninja['name']}}</p>
                <a href="/ninjas/{{ $ninja['id']}}">View Derails</a>
            </li>
        @endforeach
    </ul>
</body>
</html>