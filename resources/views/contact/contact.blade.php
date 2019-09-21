@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {!! Form::open(['route' => 'contact.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Your Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'E-mail Address') !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Phone Number') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
                </div>
                <div class="row">
                    {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
                    <a href="{{ route('home') }}" class="btn btn-default">Cancel</a>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-4">
                <table class="table table-responsible">
                    <thead>
                    <tr>
                        <td>Please feel free to contact me.</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> Phone:- </td>
                    </tr>
                    <tr>
                        <td> Email:- </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
