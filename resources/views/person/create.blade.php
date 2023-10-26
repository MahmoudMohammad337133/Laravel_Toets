<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create a product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form action="{{route('person.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="street">Street:</label>
            <input type="text" id="street" name="street" required><br>

            <label for="home_nr">Home Number:</label>
            <input type="text" id="home_nr" name="home_nr" required><br>

            <label for="zipcode">ZIP Code:</label>
            <input type="text" id="zipcode" name="zipcode" required><br>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" required><br>

            <label for="phone_nr">Phone Number:</label>
            <input type="tel" id="phone_nr" name="phone_nr" required><br>

            <input type="submit" value="Create">
        </div>
    </form>
</body>

</html>