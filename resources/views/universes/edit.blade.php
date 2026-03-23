<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <h1>Edit Universe</h1>

        <form action="{{ route('universes.update', $universe->id) }}" method="POST">
            @csrf 
            @method('PATCH')
            <label>Universe Name *</label>
            <input type="text" name="universe" value="{{ $universe->universe }}">
            <br><br>

            <label >Company *</label>
            <select name = "company">
                <option value="DC" @selected($universe->company === 'DC')>DC</option value>
                <option value="Marvel" @selected($universe->company === 'Marvel')>Marvel</option>
            </select>
            <br><br>

            <label >Age *</label>
            <input type="text" name="age" value="{{ $universe->age }}">
            <br><br>

            <input type="submit" value="Edit Universe">
        </form>
    </body>
</html>