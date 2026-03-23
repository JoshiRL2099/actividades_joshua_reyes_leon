<DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <title>{{config('app.name', 'Laravel')}}</title>
    </head>
    <body>
        <h1>{{ $superheroes->name }}</h1>
        <table> 
            <tbody>
                <tr>
                    <th><strong>id</strong></th>
                    <td>{{ $superheroes->id }}</td>
                </tr>
                <tr>
                    <th><strong>Real Name</strong></th>
                    <td>{{ $superheroes->real_name }}</td>
                </tr>
                <tr>
                    <th><strong>Gender</strong></th>
                    <td>{{ $superheroes->gender }}</td>
                </tr>
                <tr>
                    <th><strong>Universe</strong></th>
                    <td>{{ $superheroes->universe->universe }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="{{ route('superheroes.edit', $superheroes->id) }}">Edit Superhero</a>
        <br><br>
        <form action="{{ route('superheroes.destroy', $superheroes->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Superhero</button>
        </form>
        </ul>
    </body>
</html>