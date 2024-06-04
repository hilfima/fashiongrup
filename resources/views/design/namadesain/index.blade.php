@extends('layouts.template')

@section('content')
    <div class="card">
        @include('flash-message')
        <div class="card-header">
            <h1 class="card-title" style="float: left; font-size: 20pt">Nama Design</h1>
            <a href="{{ route('create_namadesign') }}" class="btn btn-primary" style="text-decoration: none; float: right"><i class="ti ti-plus fw-bolder fs-2 text-light"> Tambah</i></a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="example1" style="font-size: smaller">
                <thead>
                <tr>
                    <th class="align-top">No</th>
                    <th class="align-top">Nama Design</th>
                    <th class="align-top" style="text-align: center">Ubah</th>
                    <th class="align-top" style="text-align: center">Hapus</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=0; ?>
                @if(!empty($nmdesign))
                    <?php $no ?>
                    @foreach($nmdesign as $data)
                        <?php $no++ ?>
                        <tr>
                            <td style="padding: 5px 5px !important;">{!! $no !!}</td>
                            <td style="padding: 5px 5px !important;">{!! $data->nmdesign !!}</td>
                            <td style="padding: 5px 5px !important; text-align: center">
                                <a href="{!! route('edit_namadesign',$data->nmdesign_id) !!}" title="ubah"><i class="ti ti-edit" style="font-size: 16pt"></i></a>
                            </td>
                            <td style="padding: 5px 5px !important; text-align: center">
                                <a href="{!! route('destroy_namadesign',$data->nmdesign_id) !!}" title="hapus" onclick="return confirm('Apakah Data akan dihapus?');"><i class="ti ti-x" style="font-size: 16pt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('script')
<script>
    $(function () {
        $("#example1").DataTable({
            "scrollX" : true,
            "scrollY" : true,
            "footer"  : true,
            "autoWidth"  : false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
@endpush