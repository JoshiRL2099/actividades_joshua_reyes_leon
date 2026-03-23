<DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <title>{{config('app.name', 'Laravel')}}</title>
    </head>
    <body>
        <h1>All Universes</h1>
        <a href="{{ route('universes.create') }}">Create Universe</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach($universes as $universe)
                    <tr>
                        <td>{{ $universe->id }}</td>
                        <td>{{ $universe->universe }}</td>
                        <td>{{ $universe->company }}</td>
                        <td>{{ $universe->age }}</td>
                        <td>
                            <a href="{{ route('universes.show', $universe->id) }}">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </ul>
    </body>
</html>