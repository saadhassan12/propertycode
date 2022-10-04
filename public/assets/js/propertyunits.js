

            var table = $('#units_data').DataTable({
                processing: true,
                serverSide: true,

                url: "{{ route('propertyunits.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'main',
                        name: 'main'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'rent',
                        name: 'rent'
                    },
                    {
                        data: 'details',
                        name: 'details'
                    },
                  
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });


