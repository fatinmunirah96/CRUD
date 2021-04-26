{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Daftar kod_parliament</div>
           <div class="card-body">

            <form action="{{route('kod_parliament.update', $kod_parliament)}}" method="POST" novalidate>
                @csrf
                @method('Put')
                    <div class="form-group">
                      <label for="id_parliament">Kod parliament</label>
                      <input type="text" class="form-control @error('id_parliament') is-invalid
                      @enderror" id="id_parliament" name="id_parliament" value="{{ old('id_parliament', $kod_parliament->id_parliament ?? null ) }}">

                      @error('id_parliament')

                      <div class="invalid-feedback">{{ $message }} </div>

                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="parliament">Nama parliament</label>
                        <input type="text" class="form-control @error('parliament') is-invalid
                        @enderror" name="parliament" id="parliament" placeholder="Sila masukkan nama parliament"
                            value="{{ old('parliament', $kod_parliament->parliament ?? null ) }}">

                            @error('parliament')

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
