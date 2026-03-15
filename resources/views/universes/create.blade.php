<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <h1>Create Universe</h1>

        <form action="{{ route('universes.store') }}" method="POST">
            @csrf
            <label>Name *</label>
            <input type="text" name="name" >
            <br><br>

            <label >Company *</label>
            <select name = "company">
                <option value="DC">DC</option>
                <option value="Marvel">Marvel</option>
            </select>
            <br><br>

            <label >Age *</label>
            <input type="text" name="age" >
            <br><br>

            <input type="submit" value="Create Universe">
        </form>
    </body>
</html>