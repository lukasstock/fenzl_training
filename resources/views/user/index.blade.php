
@extends('welcome')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="center">Student Data</h3>
            <br>
            @if($message = \Illuminate\Support\Facades\Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <div align="right">
                <a href="{{route('user.create')}}" class="btn btn-primary">Add</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                </tr>
                @foreach($users as $row)
                    <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['username']}}</td>
                    </tr>
                @endforeach

            </table>
            <form method="get" action="{{action('UserController@drop')}}">
                @method('GET')
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Drop table comments"/>
                </div>
            </form>
        </div>
    </div>
@endsection