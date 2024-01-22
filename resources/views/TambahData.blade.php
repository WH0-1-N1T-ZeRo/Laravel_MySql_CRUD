@extends('layout.input_data')

@if (isset($back))
    @section('title', 'Edit')
    @section('Alget', '/Update/' . $data->id)
    @section('Nama',$data->Nama)
    @section('Nilai',$data->Nilai)
    @section('Kelas',$data->IdKelas)
@else
    @section('title')
        Input
    @endsection
    @section('Alget')
        /InsertData
    @endsection
@endif
