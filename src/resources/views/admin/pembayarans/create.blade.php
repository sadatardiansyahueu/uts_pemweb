@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.pembayaran.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pembayarans.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="idpembayaran">{{ trans('cruds.pembayaran.fields.idpembayaran') }}</label>
                <input class="form-control {{ $errors->has('idpembayaran') ? 'is-invalid' : '' }}" type="text" name="idpembayaran" id="idpembayaran" value="{{ old('idpembayaran', '') }}" required>
                @if($errors->has('idpembayaran'))
                    <div class="invalid-feedback">
                        {{ $errors->first('idpembayaran') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pembayaran.fields.namapembayaran_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="namapembayaran">{{ trans('cruds.pembayaran.fields.namapembayaran') }}</label>
                <input class="form-control {{ $errors->has('namapembayaran') ? 'is-invalid' : '' }}" type="text" name="namapembayaran" id="namapembayaran" value="{{ old('namapembayaran', '') }}" required>
                @if($errors->has('namapembayaran'))
                    <div class="invalid-feedback">
                        {{ $errors->first('namapembayaran') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pembayaran.fields.namapembayaran_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="author">{{ trans('cruds.bank.fields.author') }}</label>
                <input class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}" type="text" name="author" id="author" value="{{ old('author', '') }}" required>
                @if($errors->has('author'))
                    <div class="invalid-feedback">
                        {{ $errors->first('author') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bank.fields.author_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="author">{{ trans('cruds.bank.fields.author') }}</label>
                <input class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}" type="text" name="author" id="author" value="{{ old('author', '') }}" required>
                @if($errors->has('author'))
                    <div class="invalid-feedback">
                        {{ $errors->first('author') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.bank.fields.author_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="author">{{ trans('cruds.jumlahpembayaran.fields.author') }}</label>
                <input class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}" type="text" name="author" id="author" value="{{ old('author', '') }}" required>
                @if($errors->has('author'))
                    <div class="invalid-feedback">
                        {{ $errors->first('author') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jumlahpembayaran.fields.author_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="author">{{ trans('cruds.status.fields.author') }}</label>
                <input class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}" type="text" name="author" id="author" value="{{ old('author', '') }}" required>
                @if($errors->has('author'))
                    <div class="invalid-feedback">
                        {{ $errors->first('author') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.status.fields.author_helper') }}</span>
            </div>


            <div class="form-group">
                <label class="required" for="author">{{ trans('cruds.status.fields.author') }}</label>
                <input class="form-control {{ $errors->has('author') ? 'is-invalid' : '' }}" type="text" name="author" id="author" value="{{ old('author', '') }}" required>
                @if($errors->has('author'))
                    <div class="invalid-feedback">
                        {{ $errors->first('author') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.status.fields.author_helper') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection