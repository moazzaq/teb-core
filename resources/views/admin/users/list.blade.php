@extends('layouts.admin')
@section('content')
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
{{--                <div class="d-flex align-items-center position-relative my-1">--}}
{{--                    {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}--}}
{{--                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" id="mySearchInput"/>--}}
{{--                </div>--}}
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Add user-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!}
                        Add User
                    </button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Modal-->
{{--                <livewire:user.add-user-modal />--}}
                @include('admin.users.modal')
                <!--end::Modal-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <div class="table-responsive">
                {{ $dataTable->table() }}
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
@endsection

@push('js')
{{--    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}--}}
    {{ $dataTable->scripts() }}
    <script>
        // document.getElementById('mySearchInput').addEventListener('keyup', function () {
        //     window.LaravelDataTables['users-table'].search(this.value).draw();
        // });
        // document.addEventListener('livewire:load', function () {
        //     Livewire.on('success', function () {
        //         console.log('success event triggered');
        //         $('#kt_modal_add_user').modal('hide');
        //         // $('body').removeClass('modal-open');
        //         // $('.modal-backdrop').remove();
        //         window.LaravelDataTables['users-table'].ajax.reload();
        //     });
        // });

        // window.addEventListener('closeModal', event => {
        //     $("#kt_modal_add_user").modal('hide');
        // })
    </script>

<script>
    $(document).ready(function() {
        var userModal = $('#kt_modal_add_user');

        $('#kt_modal_add_user_form').submit(function (e){
            e.preventDefault();

            var formData = new FormData(this);
            $.ajax({
               url: "{{route('admin.users.store')}}",
                method: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);

                   // $('#kt_modal_add_user').modal('hide');
                    userModal.modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    window.LaravelDataTables['users-table'].ajax.reload();
                },
                error: function(xhr, status, error) {

                    console.error(xhr.responseText);
                }
            });
        })
        // Reinitialize the modal when it's hidden
        // userModal.on('hidden.bs.modal', function (e) {
        //     $(this).removeData('bs.modal');
        // });
    });
</script>
@endpush
