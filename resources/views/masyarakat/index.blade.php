@extends('dashboard.layout')

@section('content')
        <livewire:masyarakat.index>
@endsection

@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#createmasyarakatModal').modal('hide');
            $('#updatemasyarakatModal').modal('hide');
            $('#deletemasyarakatModal').modal('hide');
        })
    </script>
@endsection
