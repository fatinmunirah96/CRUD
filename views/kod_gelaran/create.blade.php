{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dalam layout --}}
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">Daftar gelaran</div>
            <div class="card-body">

                <form action="{{ route('kod_gelaran.store') }}" method="POST" novalidate>
                    @csrf


                    <div class="form-group">
                        <label for="id_gelaran">{{ __('Kod Gelaran') }}</label>
                        <input type="text" class="form-control @error('id_gelaran') is-invalid
                        @enderror" name="id_gelaran" id="id_gelaran" placeholder="Sila masukkan kod gelaran"
                            value="{{ old('id_gelaran') }}">

                            @error('id_gelaran')

                            <div class="invalid-feedback">{{ $message }} </div>

                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="gelaran">{{ __('Nama Gelaran') }}</label>
                        <input type="text" class="form-control @error('gelaran') is-invalid
                        @enderror" name="gelaran" id="gelaran" placeholder="Sila masukkan nama gelaran"
                            value="{{ old('gelaran') }}">

                            @error('gelaran')

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
