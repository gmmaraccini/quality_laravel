<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $( "#AdicionarNota" ).click(function(e) {
         e.preventDefault();
        var divNota = $("#notaDiv"); //Fields wrapper
              $(divNota).append('<div><input type="number" required style="width:100px" class="form-control" id="nota" name="nota[]"><div>'); //add input box

      });
    });

  </script>
  </head>
  <body>
    <center style="margin-top:10%">
     <b><h1>Bem-vindo ao projeto Quality</h1></b>
    <form action="./process">
  <div class="form-group" id="divValorSaque">
    <label >Digite o valor a ser sacado</label>
    <input type="number" required class="form-control" style="width:400px" id="valorSaque" name="valorSaque"  placeholder="Digite o valor a ser sacado">
  </div>
  <div class="form-group" id="notaDiv">
    <label for="exampleInputPassword1">Notas</label>
    <input type="number" required="" style="width:100px" class="form-control" id="nota" name="nota[]">
  </div>
  <button class="add_field_button" style="width:40px;font-size:40px;background-color: green" id="AdicionarNota">&#43;</button>
  <br>
  <br>
  
  <button type="submit" class="btn btn-primary">Sacar</button>
</form>
  </center>
  </body>
  </html>