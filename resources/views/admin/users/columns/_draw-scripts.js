// Initialize KTMenu
KTMenu.init();

// Add click event listener to delete buttons
document.querySelectorAll('[data-kt-action="delete_row"]').forEach(function (element) {
    element.addEventListener('click', function () {
        Swal.fire({
            text: 'Are you sure you want to remove?',
            icon: 'warning',
            buttonsStyling: false,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-secondary',
            }
        }).then((result) => {
            if (result.isConfirmed) {
            //   Livewire.emit('delete_user', this.getAttribute('data-kt-user-id'));
                const recordId = this.getAttribute('data-kt-user-id');
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                $.ajax({
                    type: 'DELETE',
                    url: `/admin/users/${recordId}`,
                    data: {
                      _token : csrfToken
                    },
                    success: function () {
                        LaravelDataTables['users-table'].ajax.reload();
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            }
        });
    });
});

// Add click event listener to update buttons
// document.querySelectorAll('[data-kt-action="update_row"]').forEach(function (element) {
//     element.addEventListener('click', function () {
//         Livewire.emit('update_user', this.getAttribute('data-kt-user-id'));
//     });
// });

// Listen for 'success' event emitted by Livewire
// Livewire.on('success', (message) => {
//     // Reload the users-table datatable
//     LaravelDataTables['users-table'].ajax.reload();
// });
