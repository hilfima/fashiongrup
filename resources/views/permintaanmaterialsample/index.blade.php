@extends('layouts.template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title" style="float: left; font-size: 20pt">List Permintaan Material Sample</h1>
            <a href="{{ route('permintaanmaterialsample.store') }}" class="btn btn-primary" style="text-decoration: none; float: right"><i class="ti ti-plus fw-bolder fs-2 text-light"> Tambah</i></a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="example" style="font-size: smaller">
                <thead>
                    <tr>
                        <th class="align-top">No.</th>
                        <th class="align-top">No. BPM</th>
                        <th class="align-top">Tanggal</th>
                        <th class="align-top">Kode Sample</th>
                        <th class="align-top">Nama Design</th>
                        <th class="align-top">Status</th>
                        <th class="align-top">Lihat</th>
                        <th class="align-top">Ubah</th>
                        <th class="align-top">Ubah Status</th>
                        <th class="align-top">Print</th>
                        <th class="align-top">Copy Faktur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1.PMS.07.23.1000001</td>
                        <td>2023-07-17</td>
                        <td>1.SAM.09.20.1000001</td>
                        <td>Dress Dewasa</td>
                        <td>Complete</td>
                        <td class="text-center">
                            <a href="#" title="ubah"><i class="ti ti-search" style="font-size: 16pt"></i></a>
                        </td>
                        <td class="text-center">
                            <a href="#" title="ubah status"><i class="ti ti-edit" style="font-size: 16pt"></i></a>
                        </td>
                        <td class="text-center">
                            <a href="#" title="print"><i class="ti ti-x" style="font-size: 16pt"></i></a>
                        </td>
                        <td class="text-center">
                            <a href="#" title="copy faktur"><i class="ti ti-printer" style="font-size: 16pt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('script')
    <script>
        $(function () {
            $("#example").DataTable({
                "scrollX" : true,
                "scrollY" : true,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush