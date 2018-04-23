<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{asset("css/style.css")}}>
    <style>
    </style>
</head>
<body>
<div>
    <table class = "table">
        <tr>
            <th>Number</th>
            <th>Image</th>
            <th>Type</th>
            <th>Number of rooms</th>
            <th>Number of beds</th>
            <th>Price Per Night</th>
            <th>Reserve</th>
        </tr>

        @foreach($rooms as $room)
            {{csrf_field()}}
            <tr>
                <th>{{$room->number}}</th>
                <th>Image</th>
                <th>{{$room->type}}</th>
                <th>{{$room->rooms}}</th>
                <th>{{$room->beds}}</th>
                <th>{{$room->price_per_night}}</th>
                <th>
                    <a href="{{route('form',$room->id)}}">
                        <button class="btn-success">Choose</button>
                    </a>
                </th>
            </tr>

        @endforeach
    </table>
</div>
</body>
</html>