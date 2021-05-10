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
    <div class="container">
        <center><div class="col-md-4"></div>
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-left: 200px; margin-top: 100px">
                <legend style="color: green; font-weight: bold;">
                    <a href="/" style="float: right; display: block;color: white; background-color: green; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 17px;"> ADD Train</a>
                </legend>

                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr class="text-center">
                        <th class="text-center">Name</th>
                        <th class="text-center">Start Station</th>
                        <th class="text-center">End Station</th>
                        <th class="text-center">Seats</th>
                        <th class="text-center">Departure Date Time</th>
                        <th class="text-center">Actions</th>
                        <th class="text-center">Book</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($trains as $train)
                        <tr class="text-center">
                            <td class="text-center">{{ $train->name }}</td>
                            <td class="text-center">{{ $train->start_station }}</td>
                            <td class="text-center">{{ $train->end_station }}</td>
                            <td class="text-center">{{ $train->seats }}</td>
                            <td class="text-center">{{ $train->departure_date_time }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-outline-danger py-0">Edit</a>
                                <a href="" onclick="" class="btn btn-sm btn-outline-danger py-0">Delete</a>
                                <form id="delete-4" method="post" action="" style="display: none;">
                                    @csrf
                                </form>
                            </td>
                            <td class="text-center">
                                {{--<a href="" class="btn btn-sm btn-outline-danger py-0">Place Booking</a>--}}
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Place Booking</button>
                                <form id="delete-4" method="post" action="" style="display: none;">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @empty
                        <p> No Trains found!</p>
                    @endforelse
                    </tbody>
                </table>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Booking</h4>
                            </div>
                            <div class="modal-body">
                                <form action="/book" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nic">NIC:</label>
                                        <input type="text" class="form-control" id="nic" placeholder="Enter NIC" name="nic">
                                        <font style="color:red"> {{ $errors->has('name') ?  $errors->first('name') : '' }} </font>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone:</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
                                        <font style="color:red"> {{ $errors->has('phone') ?  $errors->first('Phone') : '' }} </font>
                                    </div>
                                    <div>
                                    <div class="form-group" class="col-md-4">
                                        <label for="start_station">Seats:</label>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="seats" value="1">Seat NO 1</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="seats" value="2">Seat NO 2</label>
                                        </div>
                                        <div class="checkbox disabled">
                                            <label><input type="checkbox" name="seats" value="3">Seat NO 3</label>
                                        </div>
                                        <div class="checkbox disabled">
                                            <label><input type="checkbox" name="seats" value="4">Seat NO 4</label>
                                        </div>
                                        <div class="checkbox disabled">
                                            <label><input type="checkbox" name="seats" value="5">Seat NO 5</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="seats" value="6">Seat NO 6</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="seats" value="7">Seat NO 7</label>
                                        </div>
                                        <div class="checkbox disabled">
                                            <label><input type="checkbox" name="seats" value="8">Seat NO 8</label>
                                        </div>
                                        <div class="checkbox disabled">
                                            <label><input type="checkbox" name="seats" value="9">Seat NO 9</label>
                                        </div>
                                        <div class="checkbox disabled">
                                            <label><input type="checkbox" name="seats" value="10">Seat NO 10</label>
                                        </div>
                                        <font style="color:red"> {{ $errors->has('start_station') ?  $errors->first('start_station') : '' }} </font>
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </center>
    </div>


