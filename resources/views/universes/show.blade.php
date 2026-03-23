<DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <title>{{config('app.name', 'Laravel')}}</title>
    </head>
    <body>
        <h1>{{ $universe->universe }}</h1>
        <table> 
            <tbody>
                <tr>
                    <th><strong>Company</strong></th>
                    <td>{{ $universe->company }}</td>
                </tr>
                <tr>
                    <th><strong>Age</strong></th>
                    <td>{{ $universe->age }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="{{ route('universes.edit', $universe->id) }}">Edit Universe</a>
        <br>
        <form action="{{ route('universes.destroy', $universe->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Universe</button>
        </form>
        </ul>
    </body>
</html>