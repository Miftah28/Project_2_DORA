@extends('dashboard.layout')

@section('content')
    <livewire:donordarah.datadonor>
@endsection

    @section('script')
        <script>
            window.addEventListener('close-modal', event => {
                $('#createdatadonorModal').modal('hide');
                $('#updatedatadonorModal').modal('hide');
                $('#deletedatadonorModal').modal('hide');
            })
        </script>
    @endsection
