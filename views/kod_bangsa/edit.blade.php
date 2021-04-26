{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Daftar Bangsa</div>
           <div class="card-body">

            <form action="{{route('kod_bangsa.update', $kod_bangsa)}}" method="POST" novalidate>
                @csrf
                @method('Put')
                    <div class="form-group">
                      <label for="id_bangsa">Kod Bangsa</label>
                      <input type="text" class="form-control @error('id_bangsa') is-invalid
                      @enderror" id="id_bangsa" name="id_bangsa" value="{{ old('id_bangsa', $kod_bangsa->id_bangsa ?? null ) }}">

                      @error('id_bangsa')

                      <div class="invalid-feedback">{{ $message }} </div>

                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="bangsa">Nama Bangsa</label>
                        <input type="text" class="form-control @error('bangsa') is-invalid
                        @enderror" name="bangsa" id="bangsa" placeholder="Sila masukkan nama bangsa"
                            value="{{ old('bangsa', $kod_bangsa->bangsa ?? null ) }}">

                            @error('bangsa')

                            <div class="invalid-feedback">{{ $message }} </div>

                            @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Kemaskini</button>
            </form>
        </div>
           <div class="card-footer"></div>
       </div>
   </div>
@endsection
