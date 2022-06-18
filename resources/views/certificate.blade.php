<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <style>
       td
       {
          text-align:center;
       }
       body {
           height: 100%;
           font-family: "open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
           background-color: #ffffff !important;
           font-size: 13px;
           color: #676a6c;
           overflow-x: hidden;
       }
   </style>
</head>
<body class="mb-4">
<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEBCOOKS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Create Certificate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.certificate.list') }}">Certificate List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<div class="container p-4 shadow-sm">
    @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @endif

    @if(session()->has('error_message'))
        <div class="alert alert-danger">
            {{ session()->get('error_message') }}
        </div>
    @endif
    <div class="my-3">
        <h2>Student List For Certificates</h2>
    </div>
    <table id="example" class="table table-sm table-striped" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of Admission</th>
            <th>Date of Completion</th>
            <th>Certificate ID</th>
            <th>Course Duration</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($student as $students)
            <tr>
                <td>{{$students->student_id}}</td>
                <td>{{$students->stu_name}}</td>
                <td>{{$students->stu_admitted_date}}</td>
                <td>{{$students->stu_course_completed_date}}</td>
                <td>{{$students->certificate_id}}</td>
                <td>{{$students->course_month}} Months</td>
                <td>
                    <a class='btn btn-info btn-sm' target="_blank" href="{{ route('admin.certificate.print',[$students->student_id]) }}">Print</a>
                    <a class="btn btn-sm btn-success" target="_blank" href="{{ route('admin.certificate.view',[$students->student_id]) }}" >View</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('admin.edit.certificate',[$students->student_id]) }}" >Edit</a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete ?')" href="{{ route('admin.delete.certificate',[$students->student_id]) }}" >Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of Admission</th>
            <th>Date of Completion</th>
            <th>Certificate ID</th>
            <th>Course Duration</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>
</div>

</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js" ></script>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                { extend: 'copy', className: 'btn btn-sm btn-success' },
                { extend: 'csv', className: 'btn btn-sm btn-success' },
                { extend: 'excel', className: 'btn btn-sm btn-success' },
                { extend: 'pdf', className: 'btn btn-sm btn-success' },
            ]
        })
    })
</script>
</html>
