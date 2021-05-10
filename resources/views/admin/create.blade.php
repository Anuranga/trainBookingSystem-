<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Add Schedule Train</h2>
    <div>
        <legend style="color: green; font-weight: bold;">
            <a href="/view" style="float: right; display: block;color: white; background-color: green; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 17px;"> View Train List</a>
        </legend>
    </div>
    <form action="/create" method="post">
        @csrf
        <div class="form-group">
            <label for="name">name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Train Name" name="name">
            <font style="color:red"> {{ $errors->has('name') ?  $errors->first('name') : '' }} </font>
        </div>
        <div class="form-group">
            <label for="start_station">Start Station:</label>
            <input type="text" class="form-control" id="start_station" placeholder="Enter Start Station" name="start_station">
            <font style="color:red"> {{ $errors->has('start_station') ?  $errors->first('start_station') : '' }} </font>
        </div>
        <div class="form-group">
            <label for="end_station">End Station:</label>
            <input type="text" class="form-control" id="end_station" placeholder="Enter End Station" name="end_station">
            <font style="color:red"> {{ $errors->has('end_station') ?  $errors->first('end_station') : '' }} </font>
        </div>
        <div class="form-group">
            <label for="seats">Number Of Seats:</label>
            <input type="text" class="form-control" id="seats" placeholder="Enter Seats" name="seats">
            <font style="color:red"> {{ $errors->has('seats') ?  $errors->first('seats') : '' }} </font>
        </div>
        <div class="form-group">
            <label for="departure_date_time">Departure Date Time:</label>
            <input type="datetime-local" class="form-control" id="departure_date_time" placeholder="Enter Departure Date Time" name="departure_date_time">
            <font style="color:red"> {{ $errors->has('departure_date_time') ?  $errors->first('departure_date_time') : '' }} </font>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>


    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif
</div>

</body>
</html>
