{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dalam layout --}}
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">Daftar Agensibil</div>
            <div class="card-body">

                <form action="{{ route('kod_agensibil.store') }}" method="POST" novalidate>
                    @csrf


                    <div class="form-group">
                        <label for="id_agensibil">{{ __('Kod Agensibil') }}</label>
                        <input type="text" class="form-control @error('id_agensibil') is-invalid
                        @enderror" name="id_agensibil" id="id_agensibil" placeholder="Sila masukkan kod agensibil"
                            value="{{ old('id_agensibil') }}">

                            @error('id_agensibil')

                            <div class="invalid-feedback">{{ $message }} </div>

                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="agensibil">{{ __('Nama agensibil') }}</label>
                        <input type="text" class="form-control @error('agensibil') is-invalid
                        @enderror" name="agensibil" id="agensibil" placeholder="Sila masukkan nama agensibil"
                            value="{{ old('agensibil') }}">

                            @error('agensibil')

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
