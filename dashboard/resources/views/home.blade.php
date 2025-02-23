

<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class= "row">
        <div class ="card" style="width: 400px; padding: 10px; margin-right: 10px;">
            <div class="card-header">
                <h5 class="card-title text-center" style="margin-top: 10px; margin-botton-10px">Overdue Schedule</h5>
            </div>

            <div class="card-body">
                <h4 class="card-text text-center" id=counter></h4>
            </div>
        </div>

        <div class ="card" style="width: 400px; padding: 10px;">
            <div class="card-header">
                <h5 class="card-title text-center" style="margin-top: 10px; margin-botton-10px">Total Schedule</h5>
            </div>

            <div class="card-body">
                <h4 class="card-text text-center" id=counter2></h4>
            </div>
        </div>
    </div>
</x-layout>

<script>

    $.ajax({
        url: '{{ route("countSchedules") }}',
        type: 'GET',
        success: function(response) {
            $('#counter').text(response.overdue_count);
            $('#counter2').text(response.all_schedule);
        }
    });
</script>
