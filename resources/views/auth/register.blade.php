@extends('layouts.app')
<?php
    use App\Country;
?>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('strings.register')}}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('strings.name')}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{__('strings.last_name')}}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('DNI') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{__('strings.email')}}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label onpaste="return false" for="password" class="col-md-4 col-form-label text-md-right">{{__('strings.password')}}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label onpaste="return false" for="password-confirm" class="col-md-4 col-form-label text-md-right">{{__('strings.confirm_password')}}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{__('strings.telephone_number')}}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idCountry" class="col-md-4 col-form-label text-md-right">{{__('strings.country')}}</label>

                            <div class="col-md-6">
                                <select id="idCountry" name="idCountry" class="form-control" value="{{ old('idCountry') }}" required autocomplete="idCountry" autofocus required>
                                    <?php
                                        $countries = Country::all();
                                    ?>
                                    @foreach ($countries as $country)
                                        <option>{{ $country->country}}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="iban" class="col-md-4 col-form-label text-md-right">{{ __('IBAN') }}</label>

                            <div class="col-md-6">
                                <input id="iban" type="text" class="form-control @error('iban') is-invalid @enderror" name="iban" value="{{ old('iban') }}" required autocomplete="iban" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="aboutYou" class="col-md-4 col-form-label text-md-right">{{__('strings.about_you')}}</label>

                            <div class="col-md-6">
                                <input id="aboutYou" type="text" class="form-control @error('aboutYou') is-invalid @enderror" name="aboutYou" value="{{ old('aboutYou') }}" required autocomplete="aboutYou" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{__('strings.register')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
