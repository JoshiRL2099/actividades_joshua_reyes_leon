<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <h1>Create Superhero</h1>

        <form action="{{ route('superheroes.store') }}" method="POST">
            @csrf
            <label>Name *</label>
            <input type="text" name="name" required>
            <br><br>

            <label>Real Name *</label>
            <input type="text" name="real_name" required>
            <br><br>

            <label>Gender *</label>
            <select name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <br><br>

            <label>Universe *</label>
            <select name="universe_id" required>
                @foreach($universes as $universe)
                    <option value="{{ $universe->id }}">{{ $universe->universe }}</option>
                @endforeach
            </select>
            <br><br>

            <input type="submit" value="Create Superhero">
        </form>
    </body>
</html>