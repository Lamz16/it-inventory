@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1 class="mb-2">
                        Purchase Order #00{{ $purchaseOrder->id }}
                    </h1>

                    <table>
                        <tr>
                            <td>Status</td>
                            <td class="px-2">:</td>
                            <td>@include('includes.badge', ['status' => $purchaseOrder->status])</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td class="px-2">:</td>
                            <td>{{ $purchaseOrder->date }}</td>
                        </tr>
                        <tr>
                            <td>Supplier</td>
                            <td class="px-2">:</td>
                            <td>{{ $purchaseOrder->supplier }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
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
                                    class="fa fa-plus"></i>
                                Add Item
                            </a>
                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Stock</th>
                                        <th>Pcs</th>
                                        <th>Price</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>
                                                {{ $i }}
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td>{{ $item->pcs }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
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
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection