@extends('dashboard1')
@section('title')
    <title>transaksi</title>
@endsection
@section('content')
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h1>Daftar Siswa</h1>

                <a href="" class="btn btn-primary mt-3 mb-3">+</a>
                

                <table class="table table-secondary ">
                    <thead>
                        <tr>
                        <th>NO</th>
                        <th>NISN</th>
                        <th>NAMA</th>
                        <th>JURUSAN</th>
                        <th>TAHUN LULUS</th>
                      
                     
                        </tr>
                    </thead>
                    <tbody class="table-primary">
                        <tr>
                            <td>p</td>
                            <td>p</td>
                            <td>p</td>
                            <td>p</td>
                            <td>p</td>
                            {{-- <td> <a href="" class="btn btn-primary" >detail</a>
                            </td> --}}
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
   </div>
@endsection