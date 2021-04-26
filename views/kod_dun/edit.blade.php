{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Daftar Dun</div>
           <div class="card-body">

            <form action="{{route('kod_dun.update', $kod_dun)}}" method="POST" novalidate>
                @csrf
                @method('Put')
                    <div class="form-group">
                      <label for="id_dun">Kod dun</label>
                      <input type="text" class="form-control @error('id_dun') is-invalid
                      @enderror" id="id_dun" name="id_dun" value="{{ old('id_dun', $kod_dun->id_dun ?? null ) }}">

                      @error('id_dun')

                      <div class="invalid-feedback">{{ $message }} </div>

                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="dun">Nama dun</label>
                        <input type="text" class="form-control @error('dun') is-invalid
                        @enderror" name="dun" id="dun" placeholder="Sila masukkan nama dun"
                            value="{{ old('dun', $kod_dun->dun ?? null ) }}">

                            @error('dun')

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
