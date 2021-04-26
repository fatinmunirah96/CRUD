{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Senarai Gelaran</div>
           <div class="card-body">
            <a class="btn btn-primary" href="{{ route('kod_parliament.create') }}">Daftar</a>
           <table class="table">
               <thead>

                   <tr>
                       <th>Id</th>
                       <th>Kod parliament</th>
                       <th>parliament</th>
                       <th>Tarikh Cipta</th>
                       <th>Tarikh Kemaskini</th>
                       <th>Tindakan</th>
                   </tr>
                </thead>
                <tbody>
                    {{-- Looping Data --}}
                    @forelse ( $kod_parliamentArray as $kod_parliament)
                    <tr>
                        <td>{{$kod_parliament->id}}</td>
                        <td>{{$kod_parliament->id_parliament}}</td>
                        <td>{{$kod_parliament->parliament}}</td>
                        <td>{{$kod_parliament->created_at}}</td>
                        <td>{{$kod_parliament->updated_at}}</td>
                        <td>
                            <a href="{{route('kod_parliament.edit', $kod_parliament) }}">Kemaskini</a>

                            <form action="{{ route('kod_parliament.destroy', $kod_parliament)}}" method="POST"
                            onsubmit="return confirm('Adakah anda pasti untuk hapuskan data ini?');">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-link">Hapus</button>
                            </form>

                        </td>
                    </tr>
                    @empty

                   {{'Tiada Maklumat parliament'}}
                   @endforelse
                </tbody>
           </table>
        </div>
           <div class="card-footer"></div>
           @if(count($kod_parliamentArray)>0)
           {{-- Pagination button link --}}
           {{ $kod_parliamentArray->links() }}
           @endif
    </div>
       </div>
   </div>
@endsection
