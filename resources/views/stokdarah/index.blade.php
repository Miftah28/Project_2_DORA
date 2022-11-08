@extends('dashboard.layout')

@section('content')
        <livewire:stokdarah.index>
@endsection

@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#createstokdarahModal').modal('hide');
            $('#updatestokdarahModal').modal('hide');
            $('#deletestokdarahModal').modal('hide');
        })
    </script>
@endsection
