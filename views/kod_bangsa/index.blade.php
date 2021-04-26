{{-- Merujuk kepada layout --}}
@extends('layouts.app')

{{-- Merujuk kepada yield content dlm layout --}}
@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">Senarai Bangsa</div>
           <div class="card-body">
            <a class="btn btn-primary" href="{{ route('kod_bangsa.create') }}">Daftar</a>
           <table class="table">
               <thead>

                   <tr>
                       <th>Id</th>
                       <th>Kod bangsa</th>
                       <th>bangsa</th>
                       <th>Tarikh Cipta</th>
                       <th>Tarikh Kemaskini</th>
                       <th>Tindakan</th>
                   </tr>
                </thead>
                <tbody>
                    {{-- Looping Data --}}
                    @forelse ( $kod_bangsaArray as $kod_bangsa)
                    <tr>
                        <td>{{$kod_bangsa->id}}</td>
                        <td>{{$kod_bangsa->id_bangsa}}</td>
                        <td>{{$kod_bangsa->bangsa}}</td>
                        <td>{{$kod_bangsa->created_at}}</td>
                        <td>{{$kod_bangsa->updated_at}}</td>
                        <td>
                            <a href="{{route('kod_bangsa.edit', $kod_bangsa) }}">Kemaskini</a>

                            <form action="{{ route('kod_bangsa.destroy', $kod_bangsa)}}" method="POST"
                            onsubmit="return confirm('Adakah anda pasti untuk hapuskan data ini?');">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-link">Hapus</button>
                            </form>

                        </td>
                    </tr>
                    @empty

                   {{'Tiada Maklumat bangsa'}}
                   @endforelse
                </tbody>
           </table>
        </div>
           <div class="card-footer"></div>
           @if(count($kod_bangsaArray)>0)
           {{-- Pagination button link --}}
           {{ $kod_bangsaArray->links() }}
           @endif
    </div>
       </div>
   </div>
@endsection
