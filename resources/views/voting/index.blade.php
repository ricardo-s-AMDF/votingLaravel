<x-structure> 
    <center>
      <div class="card" style="width: 27rem; margin-top: 120px;">
        <div class="card-body">
          <h1>Eleições 2024</h1>
          <h5>Vote abaixo, preenchendo o campo com 2 dígitos, pelo número de seu candidato:</h5>
          <form action="/voting/save" method="post">
            @csrf
            <input type="number" class="form-control" name="number" id="myInput" oninput="electionsNumber()">
            <br>
            <input type="text" id="demo" name="name" readonly>
            <br>
            <br>
            <input type="button" class="btn btn-light" value="Branco">
            <button type="button" class="btn btn-warning" onclick="electionsDelete()">Corrige</button>
            <button type="submit" class="btn btn-success">Confirmar</button>
          </form>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">10 - Echo Alves PHP da Silva</li>
          <li class="list-group-item">11 - Java Lee</li>
          <li class="list-group-item">12 - Jhon Python</li>
          <li class="list-group-item">13 - Ruby Claudia</li>
          <li class="list-group-item">14 - Java Ex-Script</li>
          <li class="list-group-item">15 - Rubens Delphi Júnior</li>
          <li class="list-group-item"><a href="/voting/show">Resultado das Eleições</a></li>

        </ul>
      </div>
    </center>
   
    <script>
        function electionsNumber() {
          var text = document.getElementById("myInput").value;
          if(text == 10)
            {
                document.getElementById("demo").value = "Echo Alves PHP da Silva";
            }
          else if(text == 11)
            {
                document.getElementById("demo").value = "Java Lee";
            }
          else if(text == 12)
            {
                document.getElementById("demo").value = "Jhon Python";
            }
          else if(text == 13)
            {
                document.getElementById("demo").value = "Ruby Claudia";
            }
          else if(text == 14)
            {
                document.getElementById("demo").value = "Java Ex-Script";
            }
          else if(text == 15)
            {
                document.getElementById("demo").value = "Rubens Delphi Júnior";
            }
          else if(text >= 0 && text < 10)
            {
                document.getElementById("demo").value = " ";
            }
          else
            {
                document.getElementById("demo").value = "Número Inválido!";
            }
            
        }

        function electionsDelete() {

          document.getElementById("demo").innerHTML = " ";
          document.getElementById("myInput").value = " ";

        }
        </script>
</x-structure>