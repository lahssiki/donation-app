@extends('home')
@section('content')

@php
    $totalDonations = DB::table('usersdons')->sum('done');
@endphp
      <h1 class="text-center">Donation</h1>
      <div>
        @if (session()->has('success'))
        <div class="alert alert-success col-md-3 m-2 " role="alert">
            {{session('success')}}
        </div>
            
        @endif
    </div>
<div>
    <h2 class="text-center">Total Donations: {{ $totalDonations }} DH</h2>
</div>
<div>
    <table  class="table table-hover" >
        <tr>
            <th>ID</th>
            <th>full Name</th>
            <th>Donation</th>
            
            @foreach ($data as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->done}} DH</td>
            </tr>
        @endforeach
            
        </tr>
    </table>
</div>
<div class="text-center">
    <a href="{{ route('donate')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRmoj9NacfeZpOvNuHjUDntC40mNDgU_sTmA&usqp=CAU" height="90" alt="Donate"></a>
    </div>
@endsection
</body>
</html>