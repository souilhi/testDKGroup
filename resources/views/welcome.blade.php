<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <style>
            .form{
               
                padding-top: 30px;
            }
            .form-group{
                margin-top: 10px;            }
        </style>

    </head>
    <body class="antialiased">
        <div class="container">
            <div class="col-md-4 offset-md-4">
            <div class="form">
            <form action="send_mail" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="sujet">Sujet</label>
                <input type="text" class="form-control" name="sujet" placeholder="Sujet" value="{{ old('sujet')}}"  require>
                <span style="color:red"> @error('sujet') {{$message}} @enderror </span>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{old('email')}}" placeholder="Enter email" require>
                <span style="color:red"> @error('email') {{$message}} @enderror </span>

            </div>
            
            <div class="form-group">
                <label for="Description">Description</label>
                <textarea class="form-control" name="description" rows="3" col="20">{{ old('description')}}</textarea>
                <span style="color:red"> @error('description') {{$message}} @enderror </span>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            </div>
            </div>
        </div>

    </body>
</html>
