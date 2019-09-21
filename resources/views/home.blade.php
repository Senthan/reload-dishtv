@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dish TV Information</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <table class="table table-responsible">
                            <thead>
                            <tr>
                                <td>DishTV Information</td>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($distvs))
                                @foreach($distvs as $distv)
                                    <tr>
                                        <td>DishTV</td>
                                        <td>{{ $distv->distTVType->name ?? "" }}</td>
                                    </tr>
                                    <tr>
                                        <td>Model</td>
                                        <td>{{ $distv->model }}</td>
                                    </tr>
                                    <tr>
                                        <td>Serial No</td>
                                        <td>{{ $distv->sr_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>Card No</td>
                                        <td>{{ $distv->card_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>Chip ID</td>
                                        <td>{{ $distv->chip_id }}</td>
                                    </tr>
                                    <tr>
                                        <td>VSC No</td>
                                        <td>{{ $distv->vsc_no }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    <table class="table table-responsible">
                        <thead>
                            <tr>
                                <td>Personal Information</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Account No</td>
                                <td>{{ $user->account }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $user->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Address Line 1</td>
                                <td>{{ $user->address_line1 }}</td>
                            </tr>
                            <tr>
                                <td>Address Line 2</td>
                                <td>{{ $user->address_line2 }}</td>
                            </tr>
                            <tr>
                                <td>Postal code</td>
                                <td>{{ $user->postal_code }}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{ $user->country }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
