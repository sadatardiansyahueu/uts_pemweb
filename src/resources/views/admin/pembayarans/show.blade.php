@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pembayaran.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pembayarans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pembayaran.fields.id') }}
                        </th>
                        <td>
                            {{ $pembayaran->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pembayaran.fields.namapembayaran') }}
                        </th>
                        <td>
                            {{ $pembayaran->namapembayaran }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pembayaran.fields.bank') }}
                        </th>
                        <td>
                            {{ $pembayaran->author }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pembayaran.fields.jumlahpembayaran') }}
                        </th>
                        <td>
                            {{ $pembayaran->author }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pembayaran.fields.status') }}
                        </th>
                        <td>
                            {{ $pembayaran->author }}
                        </td>
                    </tr>


                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pembayarans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection