@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {!! Form::open(['route' => 'reload.store']) !!}

                <div class="form-group">
                    {!! Form::label('account', 'Account') !!}
                    {!! Form::select('account', array($user->account => $user->account), $user->account, ["class" => "form-control"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('recharge', 'Recharge') !!}
                    {!! Form::text('recharge', null, ['class' => 'form-control']) !!}
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
                            <td>Recharge Information</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> VideoCon (Basic Plan)</td>
                            <td> Monthly 209 (IND)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
