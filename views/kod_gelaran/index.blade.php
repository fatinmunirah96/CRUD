{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Senarai Gelaran</div>
           <div class="card-body">
            <a class="btn btn-primary" href="{{ route('kod_gelaran.create') }}">Daftar</a>
           <table class="table">
               <thead>

                   <tr>
                       <th>Id</th>
                       <th>Kod Gelaran</th>
                       <th>Gelaran</th>
                       <th>Tarikh Cipta</th>
                       <th>Tarikh Kemaskini</th>
                       <th>Tindakan</th>
                   </tr>
                </thead>
                <tbody>
                    {{-- Looping Data --}}
                    @forelse ( $kod_gelaranArray as $kod_gelaran)
                    <tr>
                        <td>{{$kod_gelaran->id}}</td>
                        <td>{{$kod_gelaran->id_gelaran}}</td>
                        <td>{{$kod_gelaran->gelaran}}</td>
                        <td>{{$kod_gelaran->created_at}}</td>
                        <td>{{$kod_gelaran->updated_at}}</td>
                        <td>
                            <a href="{{route('kod_gelaran.edit', $kod_gelaran) }}">Kemaskini</a>

                            <form action="{{ route('kod_gelaran.destroy', $kod_gelaran)}}" method="POST"
                            onsubmit="return confirm('Adakah anda pasti untuk hapuskan data ini?');">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-link">Hapus</button>
                            </form>

                        </td>
                    </tr>
                    @empty

                   {{'Tiada Maklumat kod_gelaran'}}
                   @endforelse
                </tbody>
           </table>
        </div>
           <div class="card-footer"></div>
           @if(count($kod_gelaranArray)>0)
           {{-- Pagination button link --}}
           {{ $kod_gelaranArray->links() }}
           @endif
    </div>
       </div>
   </div>
@endsection
