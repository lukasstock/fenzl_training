@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <h3 align="center">Kommentar schreiben</h3>
            <br/>
            <form method="post" action="{{url('student')}}">
                {{csrf_field()}}
               <label> Zu welchem User soll der Kommentar verfasst werden?
                <select name="user_id">

                    @foreach($users as $user)

                        <option value="{{$user['id']}}">{{$user['username']}}</option>

                    @endforeach

                </select>
               </label>
                <div class="form-group">
                    <input type="text" name="text" class="form-control" placeholder="Kommentieren"/>
                </div>
                <td><a href="{{action('CommentController@store')}}"> Edit </a> </td>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
                </div>


            </form>
        </div>
    </div>

@endsection