<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Person</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Street</th>
                <th>HomeNumber</th>
                <th>Zipcode</th>
                <th>City</th>
                <th>PhoneNumber</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($person as $persons)
                <tr>
                    <td>{{$persons->id}}</td>
                    <td>{{$persons->name}}</td>
                    <td>{{$persons->street}}</td>
                    <td>{{$persons->home_nr}}</td>
                    <td>{{$persons->zipcode}}</td>
                    <td>{{$persons->city}}</td>
                    <td>{{$persons->phone_nr}}</td>
                    <td>
                        <a href="{{route('person.edit', ['person' => $persons])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('person.destroy', ['person' => $persons])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
</body>
</html>