
@extends('welcome')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="center">Comments</h3>
            <br>
            <div align="right">
                <a href="{{route('comment.create')}}" class="btn btn-primary">Add</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>UserID</th>
                    <th>Username</th>
                    <th>Text</th>
                </tr>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment['id']}}</td>
                        <td>{{$comment['user_id']}}</td>
                        <td>{{$comment['text']}}</td>
                        <td><a href="{{action('CommentController@edit', $comment['id'])}}"> Edit </a> </td>


                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection