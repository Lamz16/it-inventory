@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Barang</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include('includes.error-card')
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#formCreate"><i
                                    class="fa fa-plus"></i> Tambah</a>
                            @include('pages.item.create')
                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Code</th>
                                        <th>Nama</th>
                                        <th>Pcs</th>
                                        <th class="text-right">Price</th>
                                        <th class="text-right">Price Sell</th>
                                        <th>Stock</th>
                                        <th class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>
                                                <a href="{{ route('item.show', $item->id) }}">
                                                    #00{{ $item->id }}
                                                </a>
                                            </td>
                                            <td>{{ $item->code }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->pcs }}</td>
                                            <td class="rupiah-format text-right">{{ $item->price }}</td>
                                            <td class="rupiah-format text-right">{{ $item->price_sell }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('item.show', $item->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-eye"></i> History
                                                </a>

                                                <form id="formDelete{{ $item->id }}"
                                                    action="{{ route('user.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <a type="button" class="btn btn-danger"
                                                        onclick="handleDelete({{ $item->id }})">
                                                        <i class="fa fa-trash" title="Hapus Data User"></i>
                                                    </a>
                                                </form>

                                                <script>
                                                    function handleDelete(id) {
                                                        Swal.fire({
                                                            title: 'Apakah kamu yakin?',
                                                            text: "kamu akan menghapus data ini!",
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Ya, hapus!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                document.getElementById('formDelete' + id).submit();
                                                            }
                                                        })
                                                    }
                                                </script>
                                                <a type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#formUpdate{{ $item->id }}">
                                                    <i class="fa fa-edit" title="Ubah Data User"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        @include('pages.item.update')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
