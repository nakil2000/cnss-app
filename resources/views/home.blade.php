<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<style>


    .container {
        margin-top: 50px;
    }
    h3 {
        text-align: center;
    }
</style>
<body>

    <h3 style="text-align: center; margin-top: 50px;">Calcul en ligne des cotisations Cnss</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container">
        <form action="/" method="POST">
            @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="Entrez votre salaire" name="salaire" value="{{ old('salaire') }}">

                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cliquer ici</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

    <table class="table table-bordered" style="background-color: lightblue;">
        <thead>
          <tr>
            <th scope="col">Cotisations CNSS</th>
            <th scope="col">Parts patronales</th>
            <th scope="col">Parts salariales</th>
            <th scope="col">Total cotisations PP+PS</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Prestations sociales :</th>
            <td> <input type="text" class="form-control" placeholder="" name="number1"  value="{{ $number1 }}">
            </td>
            <td><input type="text" class="form-control" placeholder="" name="number11" value="{{ $number11 }}" ></td>
            <td><input type="text" class="form-control" placeholder="" name="number12" value="{{ $number12 }}"></td>
          </tr>
          <tr>
            <th scope="row">Allocations familiales :</th>
            <td> <input type="text" class="form-control" placeholder="" name="number2" value="{{ $number2 }}">
            </td>
            <td><input type="text" class="form-control" placeholder="" name="number21" value="{{ $number21 }}"></td>
            <td><input type="text" class="form-control" placeholder="" name="number22" value="{{ $number22 }}"></td>
          </tr>
          <tr>
            <th scope="row">Taxes de formation prof :</th>
            <td> <input type="text" class="form-control" placeholder="" name="number3" value="{{ $number3 }}">
            </td>
            <td><input type="text" class="form-control" placeholder="" name="number31" value="{{ $number31 }}"></td>
            <td><input type="text" class="form-control" placeholder="" name="number32" value="{{ $number32 }}"></td>
          </tr>
          <tr>
            <th scope="row">Mutuelle--AMO :</th>
            <td> <input type="text" class="form-control" placeholder="" name="number4" value="{{ $number4 }}">
            </td>
            <td><input type="text" class="form-control" placeholder="" name="number41" value="{{ $number41 }}"></td>
            <td><input type="text" class="form-control" placeholder="" name="number42" value="{{ $number42 }}"></td>
          </tr>

          <tr>
            <th scope="row">FIDUCIAIRE TIBCOMPT 2017 :</th>

          </tr>
          <tr>
            <th scope="row">Total général :</th>
            <td> <input type="text" class="form-control" placeholder="" name="totale1" value="{{ $totale1 }}">
            </td>
            <td><input type="text" class="form-control" placeholder="" name="totale2" value="{{ $totale2 }}"></td>
            <td><input type="text" class="form-control" placeholder="" name="totale3" value="{{ $totale3 }}"></td>
          </tr>
        </tbody>
      </table>
    </div>



</body>
</html>
