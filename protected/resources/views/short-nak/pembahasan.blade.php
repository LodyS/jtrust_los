<!DOCTYPE html>
@extends('tema.app')
@section('content')

<div class="card border-white" style="width: 100rem;">
    <div class="card-body">
       
        <div class="card border-white">
			<div class="card-body">
                <h5 style="text-align:center"> PEMBAHASAN - {{ strtoupper(\App\Models\InformasiPokokBprPelapor::namaBpr($sandi_bpr)->nama_bpr) }}</h5>
                <div style="height:30px"></div>
        
                @include('flash-message')
                @include('short-nak')
            </div> 
        </div>

        <div style="height:10px"></div>
        
        <div class="card border-white">
			<div class="card-body">
                <form action="{{ url('update-short-nak') }}" method="POST" enctype="multipart/form-data">@csrf
                    <input type="hidden" name="loan_applicant_id" value="{{ $id }}">

                    <div class="form-group">
                        <textarea class="form-control {{ (Auth::user()->jabatan_user->kode == 'account_officer' && $app->status_level_proses == 1) ? 'content' : 'read' }}" name="pembahasan"  rows="6">{{ $data->pembahasan ?? '' }}</textarea>
                    </div>

                    @if (Auth::user()->jabatan_user->kode== 'account_officer')
                        <button type="submit" class="btn btn-primary">Save</button>
                    @endif
                </form>
            </div> 
        </div>
    </div>
</div>
@endsection


