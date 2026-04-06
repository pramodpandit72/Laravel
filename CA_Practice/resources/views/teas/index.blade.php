<x-layout>
    <h1>Teas</h1>

    <ul>
        @foreach ($teas as $tea)
        <li>

            <a href="/teas/{$tea['id']}}">{{$tea['name']}}</a>
        </li>
        @endforeach
    </ul>
</x-layout>