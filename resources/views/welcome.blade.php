<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
       <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear usuario
                   
                    </div>
                    <div class="card-body">
                    <form action="{{url('saveUser')}}" method="POST">
                            <!--genera un token que laravel verifica para ver la autenticidad de la info--> 
                           <div class="form-group">
                                <label for="">Name: </label>
                                <input type="text" class="form-control" name="name">
                           </div>
                            <div class="form-group">
                                <label for="">User: </label>
                                <input type="text" class="form-control" name="user">
                           </div>
                           <div class="form-group">
                                <label for="">E-mail: </label>
                                <input type="email" class="form-control" name="email">
                           <div class="form-group">
                                <label for="">Password: </label>
                                <input type="password" class="form-control" name="pass">
                             <div class="form-group">
                                <label for="">Confirm: </label>
                                <input type="password" class="form-control" name="confirm">
                           </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        <a href="{{url('index')}}" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
