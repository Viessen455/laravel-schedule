
<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="container mt-5">
        <table id ="scheduleTable" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Type</th>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Created By</th>
                </tr>
            </thead>
            <tbody class="">


            </tbody>
        </table>
    </div>
</x-layout>

<script>
    $(document).ready(function() {
        $('#scheduleTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("schedules") }}',
            pageLength: 10,
            lengthChange: false,
            columns: [
                { data: 'id' },
                { data: 'type' },
                { data: 'mt_date' },
                { data: 'status' },
                { data: 'description' },
                { data: 'created_by' }
            ]
        });
    });
</script>
