<x-layout>

    <h2>Ninjas</h1>

    
    {{-- @if ($greeting == "Hi po")
        <p>Hi from inside the if statement</p>
    @endif --}}
   

    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <x-card href="/ninjas/{{ $ninja['id']}}" :highlight="$ninja['skill'] > 70">
                    <h3>{{ $ninja['name']}}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>