@extends('admin.template.app')
@section('title', 'Produk')

@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{url('admin/produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-bdoy">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                            @foreach($list_produk as $produk)
   				            <tr>
   					        <td>{{$loop->iteration}}</td>
   					        <td>
                                
   						        <a href="{{url('admin/produk',$produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
   						        <a href="{{url('admin/produk',$produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                   @include('admin.utils.delete', ['url' =>url('admin/produk', $produk->id)])
   					        </td>
   					        <td>{{ucwords($produk->nama)}}</td>
   					        <td>{{number_format($produk->harga)}}</td>
   					        <td>{{$produk->stok}}</td>
   				            </tr>
   				            @endforeach
                           </tbody>
   				
                        </table>
                    </div>
                </div>           
            </div>
        </div>
    </div>

@endsection