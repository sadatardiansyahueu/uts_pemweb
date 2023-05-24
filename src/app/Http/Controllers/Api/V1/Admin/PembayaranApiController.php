<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePembayaranRequest;
use App\Http\Requests\UpdatePembayaranRequest;
use App\Http\Resources\Admin\PembayaranResource;
use App\Models\Pembayaran;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PembayaranApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('permbayaran_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PembayaranResource(Pembayaran::all());
    }

    public function store(StorePembayaranRequest $request)
    {
        $pembayaran = Pembayaran::create($request->all());

        return (new PembayaranResource($pembayaran))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Pembayaran $pembayaran)
    {
        abort_if(Gate::denies('pembayaran_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PembayaranResource($pembayaran);
    }

    public function update(UpdatePembayaranRequest $request, Pembayaran $pembayaran)
    {
        $pembayaran->update($request->all());

        return (new PembayaranResource($pembayaran))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Pembayaran $pembayaran)
    {
        abort_if(Gate::denies('pembayaran_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pembayaran->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
