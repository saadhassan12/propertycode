// $(function() {

    var table = $('#landlords_data').DataTable({

        processing: true,
        serverSide: true,
        url: "{{ route('landlord.index') }}",
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'full_name',
                name: 'full_name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'number',
                name: 'number'
            },
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });

// });
