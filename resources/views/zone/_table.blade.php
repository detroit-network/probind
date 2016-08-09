{{-- Styles --}}
@push('styles')
{!! HTML::style('vendor/AdminLTE/plugins/datatables/dataTables.bootstrap.css') !!}
@endpush

<table id="zones-table" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th class="col-md-4">{{ trans('zone/table.domain') }}</th>
        <th class="col-md-1">{{ trans('zone/table.type') }}</th>
        <th class="col-md-4">{{ trans('zone/table.master') }}</th>
        <th class="col-md-1">{{ trans('zone/table.updated') }}</th>
        <th class="col-md-2">{{ trans('general.actions') }}</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th class="col-md-4">{{ trans('zone/table.domain') }}</th>
        <th class="col-md-1">{{ trans('zone/table.type') }}</th>
        <th class="col-md-4">{{ trans('zone/table.master') }}</th>
        <th class="col-md-1">{{ trans('zone/table.updated') }}</th>
        <th class="col-md-2">{{ trans('general.actions') }}</th>
    </tr>
    </tfoot>
</table>

{{-- Scripts --}}
@push('scripts')
{!! HTML::script('vendor/AdminLTE/plugins/datatables/jquery.dataTables.min.js') !!}
{!! HTML::script('vendor/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js') !!}

<script>
    $(function () {
        $('#zones-table').DataTable({
            "ajax": "{{ route('zones.data') }}",
            "columns": [
                {data: "domain"},
                {data: "type"},
                {data: "master"},
                {data: "updated", "orderable": false, "searchable": false},
                {data: "actions", "orderable": false, "searchable": false}
            ],
            "aLengthMenu": [
                [5, 10, 15, 20, -1],
                [5, 10, 15, 20, "{{ trans('general.all') }}"]
            ],
            // set the initial value
            "iDisplayLength": 10
        });
    });
</script>
@endpush