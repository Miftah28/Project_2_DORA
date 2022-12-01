@extends('dashboard.layout')

@section('content')
        <livewire:transaksi.index>
@endsection

@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#createtransaksiModal').modal('hide');
            $('#updatetransaksiModal').modal('hide');
            $('#deletetransaksiModal').modal('hide');
        })
    </script>
@endsection
