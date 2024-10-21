<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </form>

</x-layout>