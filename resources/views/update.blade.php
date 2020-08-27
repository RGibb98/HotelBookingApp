@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Booking') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bookings.update') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="date_of_booking" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Booking') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_booking" type="text" class="form-control @error('date_of_booking') is-invalid @enderror" date_of_booking="date_of_booking" value="{{ old('date_of_booking') }}" required autocomplete="dateOfBooking" autofocus>

                                @error('date_of_booking')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_of_people" class="col-md-4 col-form-label text-md-right">{{ __('Number Of People') }}</label>

                            <div class="col-md-6">
                                <input id="no_of_people" type="no_of_people" class="form-control @error('no_of_people') is-invalid @enderror" name="no_of_people" value="{{ old('no_of_people') }}" required autocomplete="no_of_people">

                                @error('no_of_people')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_of_nights" class="col-md-4 col-form-label text-md-right">{{ __('Number Of Nights') }}</label>

                            <div class="col-md-6">
                                <input id="no_of_nights" type="no_of_nights" class="form-control @error('no_of_nights') is-invalid @enderror" name="no_of_nights" required autocomplete="no_of_nights">

                                @error('no_of_nights')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
