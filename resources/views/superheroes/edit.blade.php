<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <h1>Edit Superhero</h1>
        <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
            @csrf 
            @method('PATCH')
            <label>Superhero Name *</label>
            <input type="text" name="name" value="{{ $superhero->name }}">
            <br><br>

            <label >Real Name *</label>
            <input type="text" name="real_name" value="{{ $superhero->real_name }}">
            <br><br>

            <label >Gender *</label>
            <select name = "gender">
                <option value="male" @selected($superhero->gender === 'male')>Male</option>
                <option value="female" @selected($superhero->gender === 'female')>Female</option>
            </select>
            <br><br>

            <label >Universe Name *</label>
            <select name="universe_id">
                @foreach($universes as $universe)
                    <option value="{{ $universe->id }}" @selected($superhero->universe_id === $universe->id)>{{ $universe->universe }}</option>
                @endforeach
            </select>
            <br><br>

            <input type="submit" value="Edit Superhero">
        </form>
    </body>
</html>