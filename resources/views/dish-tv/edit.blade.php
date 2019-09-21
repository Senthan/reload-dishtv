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
                        <form method="POST" action="{{ route('dish-tv.store') }}">
                            {{ csrf_field() }}
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
                                    <td><input name="account" value="{{ $user->account }}"/></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><input name="phone" value="{{ $user->phone }}"/></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>Address Line 1</td>
                                    <td><input name="address_line1" value="{{ $user->address_line1 }}"/></td>
                                </tr>
                                <tr>
                                    <td>Address Line 2</td>
                                    <td><input name="address_line2" value="{{ $user->address_line2 }}"/></td>
                                </tr>
                                <tr>
                                    <td>Postal code</td>
                                    <td><input name="postal_code" value="{{ $user->postal_code }}"/></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td><input name="country" value="{{ $user->country }}"/></td>
                                </tr>
                                </tbody>
                            </table>

                        <table class="table table-responsible">
                            <thead>
                            <tr>
                                <td>DishTV Information</td>
                            </tr>
                            </thead>
                                <tbody>
                                <tr>
                                    <td>DishTV</td>
                                    <td>
                                        <select name="dish_tv_type_id">
                                            @foreach($DishTVTypes as $DishTVType)
                                                <option value="{{ $DishTVType->id }}">{{ $DishTVType->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Model</td>
                                    <td><input name="model" /></td>
                                </tr>
                                <tr>
                                    <td>Serial No</td>
                                    <td><input name="sr_no" /></td>
                                </tr>
                                <tr>
                                    <td>Card No</td>
                                    <td><input name="card_no" /></td>
                                </tr>
                                <tr>
                                    <td>Chip ID</td>
                                    <td><input name="card_no" /></td>
                                </tr>
                                <tr>
                                    <td>VSC No</td>
                                    <td><input name="card_no" /></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                        <a href="{{ route('home') }}" class="btn btn-default">Cancel</a>
                                    </td>
                                </tr>
                                </tfoot>
                        </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
