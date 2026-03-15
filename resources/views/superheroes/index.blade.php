<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <h1>Superheroes</h1>
        <a href="{{ route('superheroes.create') }}">Create New Superhero</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Real Name</th>
                    <th>Gender</th>
                    <th>Universe</th>
                </tr>
            </thead>
            <tbody>
                @foreach($superheroes as $superhero)
                    <tr>
                        <td>{{ $superhero->id }}</td>
                        <td>{{ $superhero->name }}</td>
                        <td>{{ $superhero->real_name }}</td>
                        <td>{{ $superhero->gender }}</td>
                        <td>{{ $superhero->universe->universe }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>