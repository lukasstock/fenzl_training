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
            <form method="post" action="{{url('student')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control" placeholder="Vornamen eingeben"/>
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Nachnamen eingeben"/>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
                </div>


            </form>
        </div>
    </div>

@endsection