@extends('welcome')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br/>
            <h3 align="center">Daten eingeben</h3>
            <br/>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all as $error)
                            <li>
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">

                    <p> {{\Session::get('success')}}</p>
                </div>
            @endif
            <form method="post" action="{{url('user')}}">
                {{csrf_field()}}

                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username"/>
                </div>

                <div class="form-group">
                    <label>Ist Admin?
                        <select name="isAdmin">
                        <option value="true">Yes</option>
                        <option value="false">No</option>
                    </select>
                    </label>
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
                </div>


            </form>
        </div>
    </div>

@endsection