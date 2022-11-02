
@extends('Layout')
@section('Content')


<a href="#" class="btn btn-secondary"></button> + Add New Data</a>


<table class="table table-striped table-bordered">
    <tr>
        <th>Kode Profile</th>
        <th>Nama Profile</th>
        <th>Opsi</th>
    </tr>
    @foreach($profile as $Get)
    <tr>
        <td>{{ $Get->kd_profile }}</td> 
        <td>{{ $Get->nama_profile }}</td>
        <td>
            <a href="/controller/edit/{{ $Get->kd_profile}}" class="btn btn-dark"></button>Update</a>
            |
            <a href="/controller/hapus/{{ $Get->kd_profile }}"  class="btn btn-danger"></button>Delete</a>
        </td>
    </tr>
    @endforeach
</table>


    
@endsection