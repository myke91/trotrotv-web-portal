@extends('layouts.master')
@section('content')
    @include('reports.editReport')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><i class="fa fa-file-text-o"></i>TrotroTv</h2>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/">Home</a></li>
                <li><i class="icon_document_alt"></i>Reports</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <div class="panel panel-default">
                    <div class="panel-heading">Report Information</div>
                    <div class="panel-body" id="add-class-info">
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        // alert("Hello! I am an alert box!!");
        showReportInfo()
        function showReportInfo()
        {
            var data = $('#add-class-info').serialize();
            console.log(data);
            $.get("{{route('showReportInfo')}}", data, function (data) {
                $('#add-class-info').empty().append(data);
            });
        }
        $(document).on('click', '.report-edit', function (e) {
            $('#report-show').modal('show');
            var report_id = $(this).val();
            $.get("{{route('editReport')}}", {report_id:report_id}, function (data) {
                console.log(data)

                $('#report_id_edit').val(data.report_id);
                $('#vehicle_id').val(data.vehicle_id);
                $('#question_id').val(data.question_id);
                $('#answer').val(data.answer);
                $('#uploaded').val(data.uploaded);
                $('#timestamp').val(data.timestamp);
            });
        });
        $('.btn-update-report').on('click', function (e) {
            e.preventDefault();
            var data = $('#frm-update-report').serialize();
            $.post("{{route('updateReport')}}", data, function (data) {
                shoReportInfo(data.vehicle_id);
                $('#report-show').modal('hide');
                swal('Trotro TV',
                    'Report updated successfully',
                    'success');

            }).fail(function (data) {
                console.log(data);
                var responseJSON = data.responseJSON;
                var response = '';
                for (var key in responseJSON) {
                    if (responseJSON.hasOwnProperty(key)) {
                        response += "\n" + responseJSON[key] + "\n";
                    }
                }
                swal('Trotro TV',
                    response,
                    'error');
            });
        })
        $(document).on('click', '.del-report', function (e) {
            var report_id = $(this).val();
            $.post("{{route('deleteReport')}}", {report_id: report_id}, function (data) {
                showReportInfo(data.vehicle_id);
                swal('Trotro TV',
                    'Selected Report deleted successfully',
                    'success');

            }).fail(function (data) {
                console.log(data);
                var responseJSON = data.responseJSON;
                var response = '';
                for (var key in responseJSON) {
                    if (responseJSON.hasOwnProperty(key)) {
                        response += "\n" + responseJSON[key] + "\n";
                    }
                }
                swal('Trotro TV',
                    response,
                    'error');
            })
        })
    </script>
@endsection