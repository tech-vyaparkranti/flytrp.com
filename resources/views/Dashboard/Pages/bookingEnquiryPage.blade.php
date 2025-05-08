@extends('layouts.dashboardLayout')
@section('title', 'Booking Enquiry')
@section('content')

    <x-dashboard-container container_header="Manage Booking Enquiry">
        <x-card>
            <x-card-header>Booking Enquiry Data</x-card-header>
            <x-card-body>
                <x-data-table></x-data-table>
            </x-card-body>
        </x-card>
    </x-dashboard-container>
@endsection

@section('script')
    <script type="text/javascript">
        let site_url = '{{ url('/') }}';
        var table = "";
        $(function() {

            table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('enquiryDataTable') }}",
                    type: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    }
                },
                "scrollX": true,
                "order": [
                    // [1, 'desc']
                    [0, 'desc']
                ],
                columns: [ 
                    {
                        data: 'id',
                        name: 'id',
                         title: "ID",
                        width: "5%"
                    },
                    {
                        data: 'name',
                        name: 'name',
                       title: "Name",
                        width: "15%"
                    },                     
                    {
                        data: 'phone',
                        name: 'phone',
                        title: "Phone Number",
                        width: "15%"
                    },
                    {
                        data: 'destination',
                        name: 'destination',
                        title: "Destination",
                        width: "20%"
                    }
                ]
            });

        });
         
         
    </script>
    @include('Dashboard.include.dataTablesScript')
@endsection
