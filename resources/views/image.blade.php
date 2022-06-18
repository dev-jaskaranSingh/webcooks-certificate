<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <style>
        @font-face
        {
            font-family: 'Beautiful-People';
            src: url('{{ url('fonts/Beautiful-People-two-Personal-Use.ttf') }}');
        }
        @font-face
        {
            font-family: 'Poppins-Bold';
            src: url('{{ url('fonts/Poppins-Bold.otf') }}');
        }
        @font-face
        {
            font-family: 'MontserratAlternates-Medium';
            src: url('{{ url('fonts/MontserratAlternates-Medium.otf') }}');
        }
        .container {
            position: relative;
            text-align: center;
            color: white;
        }

        .name {
            font-family: 'Beautiful-People';
            letter-spacing: 3px;
            font-size: 62px;
            position: absolute;
            top: 360px;
            left: 44%;
            color:black;
        }
        .course
        {
            font-family: 'Poppins-Bold';
            font-size: 28px;
            position: absolute;
            top: 525px;
            left: 44.5%;
            color: black;
        }
        .completed
        {
            font-family: 'Montserrat', sans-serif;
            font-size: 23px;
            position: absolute;
            top: 594px;
            left: 64%;
            color: black;
        }
        .certificateid
        {
            font-family: 'Montserrat', sans-serif;
            font-size: 23px;
            position: absolute;
            top: 647px;
            left: 64%;
            color: black;
        }
        .qrcode
        {

            position: absolute;
            top: 740px;
            left: 88.5%;
        }
        .date
        {
            letter-spacing: 1.5px;
            font-family: 'Montserrat', sans-serif;
            font-size: 23px;
            position: absolute;
            top: 753px;
            left: 45%;
            color:black;
        }
    </style>
</head>
<body>
    @php
        $d1 = date_create($data->stu_course_completed_date);
        $d2 = date_create($data->stu_admitted_date);
        $interval = date_diff($d1, $d2);
    @endphp

<!--<h2 style="text-align: center;">{{$data['stu_name']}} Certificate Detail</h2>-->
<div class="container">
    <img src="{{url('/images/certificate.jpg')}}" alt="certificate" style="width: 1325px;height: 911px;">
    <div class="name"><b>{{$data['stu_name']}}</b></div>
    <div class="course"><b>{{$data['stu_course']}}</b></div>
    @php
        $date = date_create($data['stu_course_completed_date']);
    @endphp
    <div class="completed">{{ date_format($date,"d.m.Y") }} ( {{ $data['course_month'] }} Months Course )</div>
    <div class="certificateid">{{$data['certificate_id']}}</div>
    @php
        $date = date_create($data['certificate_generated_date']);
    @endphp
    <div class="date">{{ date_format($date,"d.m.Y") }} </div>
    <div class="qrcode"><img src="https://api.qrserver.com/v1/create-qr-code/?size=110x110&data=https://webcooks.in/verify/{{$data['certificate_id']}}"></div>
</div>
</body>
</html> 
