{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dalam layout --}}
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">Daftar parliament</div>
            <div class="card-body">

                <form action="{{ route('kod_parliament.store') }}" method="POST" novalidate>
                    @csrf


                    <div class="form-group">
                        <label for="id_parliament">{{ __('Kod parlimen') }}</label>
                        <input type="text" class="form-control @error('id_parliament') is-invalid
                        @enderror" name="id_parliament" id="id_parliament" placeholder="Sila masukkan kod parlimen"
                            value="{{ old('id_parliament') }}">

                            @error('id_parliament')

                            <div class="invalid-feedback">{{ $message }} </div>

                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="parliament">{{ __('Nama parlimen') }}</label>
                        <input type="text" class="form-control @error('parliament') is-invalid
                        @enderror" name="parliament" id="parliament" placeholder="Sila masukkan nama parlimen"
                            value="{{ old('parliament') }}">

                            @error('parliament')

                            <div class="invalid-feedback">{{ $message }} </div>

                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>

                </form>

            </div>
            <div class="card-footer"></div>
        </div>
    </div>

@endsection
