

@extends('Layout')
@section('Content')

<a href="#" class="btn btn-secondary"></button> + Add New Data</a>


<table class="table table-striped table-bordered">
    <tr>
        <th>Kode Kontak</th>
        <th>Nama Kontak</th>
        <th>Opsi</th>
    </tr>
    @foreach($kontak as $Get)
    <tr>
        <td>{{ $Get->kd_kontak }}</td>
        <td>{{ $Get->nama_kontak }}</td>
        <td>
        <a href="/controller/edit/{{ $Get->kd_kontak}}" class="btn btn-dark"></button>Update</a>
            |
            <a href="/controller/hapus/{{ $Get->kd_kontak }}"  class="btn btn-danger"></button>Delete</a>
        </td>
    </tr>
    @endforeach
</table>



    
@endsection