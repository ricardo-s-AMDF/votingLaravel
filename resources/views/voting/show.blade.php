<x-structure>
    <center>
        <div class="card" style="width: 30rem; margin-top: 200px;">
          <h3 class="card-header">Relação de Votos</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Candidato</th>
                    <th scope="col">Quantidade de Votos</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($voting AS $votingLines)
                  <tr>
                    <td>{{$votingLines->number}}</td>
                    <td>{{$votingLines->name}}</td>
                    <td>{{$votingLines->soma}}</td>
                  </tr>
                  @endforeach

                </tbody>
            </table>
        </div>
    </center>
</x-structure>
