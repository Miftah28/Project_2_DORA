@extends('dashboard.layout')

@section('content')
    <livewire:donordarah.kegiatan>
@endsection

    @section('script')
        <script>
            window.addEventListener('close-modal', event => {
                $('#createkegiatanModal').modal('hide');
                $('#updatekegiatanModal').modal('hide');
                $('#deletekegiatanModal').modal('hide');
            })
        </script>
    @endsection
