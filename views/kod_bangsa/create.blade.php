{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dalam layout --}}
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">Daftar Bangsa</div>
            <div class="card-body">

                <form action="{{ route('kod_bangsa.store') }}" method="POST" novalidate>
                    @csrf


                    <div class="form-group">
                        <label for="id_bangsa">{{ __('Kod Bangsa') }}</label>
                        <input type="text" class="form-control @error('id_bangsa') is-invalid
                        @enderror" name="id_bangsa" id="id_bangsa" placeholder="Sila masukkan kod bangsa"
                            value="{{ old('id_bangsa') }}">

                            @error('id_bangsa')

                            <div class="invalid-feedback">{{ $message }} </div>

                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="bangsa">{{ __('Nama Bangsa') }}</label>
                        <input type="text" class="form-control @error('bangsa') is-invalid
                        @enderror" name="bangsa" id="bangsa" placeholder="Sila masukkan nama bangsa"
                            value="{{ old('bangsa') }}">

                            @error('bangsa')

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
