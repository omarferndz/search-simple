<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>
                        Busqueda de usuarios
                        {{ Form::open(['route' => 'users', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">
                                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'Bio']) }}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        {{ Form::close() }}
                    </h1>
                </div>
            </div>            
        </div>
    </div>    
</body>
</html>