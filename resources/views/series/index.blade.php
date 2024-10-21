<x-layout title="Séries">
    <a href="/series/criar">Adicionar</a>

    <ul>
     @foreach ($series as $linhasSeries)
    <li>{{ $linhasSeries->nome }}</li>
     @endforeach
    </ul>
</x-layout>