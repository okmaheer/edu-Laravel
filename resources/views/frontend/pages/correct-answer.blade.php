@extends('layouts.frontend-app')
@section('css')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .job-item {
            background-color: #fff;
        }

        .job-tab .nav-tabs {
            margin-bottom: 60px;
            border-bottom: 0;
        }

        .job-tab .nav-tabs>li {
            float: none;
            display: inline;
        }

        .job-tab .nav-tabs li {
            margin-right: 15px;
        }

        .job-tab .nav-tabs li:last-child {
            margin-right: 0;
        }

        .job-tab .nav-tabs {
            position: relative;
            z-index: 1;
            display: inline-block;
        }

        .job-tab .nav-tabs:after {
            position: absolute;
            content: "";
            top: 50%;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #fff;
            z-index: -1;
        }



        .job-tab .nav-tabs>li a {
            display: inline-block;
            background-color: #fff;
            border: none;
            border-radius: 30px;
            font-size: 14px;
            color: #000;
            padding: 5px 30px;
        }

        .job-tab .nav-tabs>li>a.active,
        .job-tab .nav-tabs>li a.active>:focus,
        .job-tab .nav-tabs>li>a.active:hover,
        .job-tab .nav-tabs>li>a:hover {
            border: none;
            background-color: #008def;
            color: #fff;
        }

        .job-item {
            border-radius: 3px;
            position: relative;
            margin-bottom: 30px;
            z-index: 1;
        }

        .job-item .btn.btn-primary {
            text-transform: capitalize;
        }

        .job-item .job-info {
            font-size: 14px;
            color: #000;
            overflow: hidden;
            padding: 40px 25px 20px;
        }

        .job-info .company-logo {
            margin-bottom: 30px;
        }

        .job-info .tr-title {
            margin-bottom: 15px;
        }

        .job-info .tr-title span {
            font-size: 14px;
            display: block;
        }

        .job-info .tr-title a {
            color: #000;
        }

        .job-info .tr-title a:hover {
            color: #008def;
        }

        .job-info ul {
            margin-bottom: 30px;
        }

        .job-meta li,
        .job-meta li a {
            color: #646464;
        }

        .job-meta li a:hover {
            color: #008def;
        }

        .job-meta li {
            font-size: 12px;
            margin-bottom: 10px;
        }

        .job-meta li span i {
            color: #000;
        }

        .job-meta li i {
            margin-right: 15px;
        }

        .job-item .time {
            position: relative;
        }

        .job-item .time:after {
            position: absolute;
            content: "";
            bottom: 35px;
            left: -50px;
            width: 150%;
            height: 1px;
            background-color: #f5f4f5;
            z-index: -1;
        }

        .job-item:hover .time,
        .job-item:hover .time:after {
            opacity: 0;
        }

        .job-item .time span {
            font-size: 12px;
            color: #bebebe;
            line-height: 25px;
        }

        .job-item .btn.btn-primary,
        .role .btn.btn-primary,
        .job-item .time a span {
            padding: 5px 10px;
            border-radius: 4px;
            line-height: 10px;
            font-size: 12px;
        }

        .job-item .time a span {
            color: #fff;
            background-color: #f1592a;
            border-color: #f1592a;
        }

        .job-item .time a span.part-time {
            background-color: #00aeef;
            border-color: #00aeef;
        }

        .job-item .time a span.freelance {
            background-color: #92278f;
            border-color: #92278f;
        }

        .job-item .item-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 5px;
            background-color: #008def;
            color: #fff;
            opacity: 0;
            -webkit-transition: all 800ms;
            -moz-transition: all 800ms;
            -ms-transition: all 800ms;
            -o-transition: all 800ms;
            transition: all 800ms;
        }

        .job-item:hover .item-overlay {
            opacity: 1;
        }

        .item-overlay .job-info {
            padding: 45px 25px 40px;
            overflow: hidden;
        }

        .item-overlay .btn.btn-primary {
            background-color: #007bd4;
            border-color: #007bd4;
            margin-bottom: 10px;
        }

        .item-overlay .job-info,
        .item-overlay .job-info ul li,
        .item-overlay .job-info ul li i,
        .item-overlay .job-info .tr-title a {
            color: #fff;
        }

        .job-social {
            margin-top: 35px;
        }

        .job-social li {
            float: left;
        }

        .job-social li+li {
            margin-left: 15px;
        }

        .job-social li a i {
            margin-right: 0;
            font-size: 14px;
        }

        .job-social li a {
            width: 35px;
            height: 35px;
            text-align: center;
            display: block;
            background-color: #007bd4;
            line-height: 35px;
            border-radius: 100%;
            border: 1px solid #007bd4;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .job-social li:last-child a {
            background-color: #fff;
        }

        .job-social li:last-child a i {
            color: #008def;
        }

        .job-social li a:before {
            position: absolute;
            content: "";
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            border-radius: 100%;
            background-color: #008def;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }

        .job-social li a:hover:before {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            padding: 5px;
        }

        .job-social li a:hover {
            border-color: #fff;
        }

        .job-social li a:hover i {
            color: #fff;
        }

        .tr-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
@endsection
@section('content')
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="job-tab text-center">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <li role="presentation" class="active">
                        <a class="active show" href="#paragraph-1" aria-controls="paragraph-1" role="tab" data-toggle="tab"
                            aria-selected="true">Paragraph One</a>
                    </li>
                    <li role="presentation"><a href="#paragraph-2" aria-controls="paragraph-2" role="tab"
                            data-toggle="tab" class aria-selected="false">Paragraph Two</a></li>
                    <li role="presentation"><a href="#paragraph-3" aria-controls="paragraph-3" role="tab"
                            data-toggle="tab" class aria-selected="false">Paragraph Three</a></li>
                            @if(array_key_exists("4",$data))
                            <li role="presentation"><a href="#paragraph-4" aria-controls="paragraph-4" role="tab"
                                data-toggle="tab" class aria-selected="false">Paragraph Four</a></li>
                                <li role="presentation"><a href="#paragraph-5" aria-controls="paragraph-5" role="tab"
                                    data-toggle="tab" class aria-selected="false">Paragraph Five</a></li>
                                    @endif
                </ul>
                <div class="tab-content text-left">

                    @php
                        $itera = 1;
                    @endphp
                    @foreach ($data as $key => $group)
                        <div role="tabpanel" class="tab-pane fade {{$key == 1 ? 'active show' : ' '}}" id="paragraph-{{$key}}">
                            <div class="row">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Correct</th>
                                            <th>Your Answer</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($group['questionGroups'] as $group)
                                            @foreach ($group['questions'] as $question)
                                                @if ($question->category == 3)
                                                    <tr>
                                                        <td>{{ $itera }}</td>
                                                        <td>{!! App\Helper\Helper::correctAnswer($question->id) !!}</td>
                                                        <td>{!! App\Helper\Helper::userAnswer($userTest, $question->id) !!}</td>


                                                        @php
                                                            $itera++;
                                                        @endphp
                                                @endif



                                                <tr>
                                                    <td>{{ $itera }}</td>
                                                    <td>{!! App\Helper\Helper::correctAnswer($question->id) !!}</td>
                                                    <td>@if(App\Helper\Helper::checkCorrectOrNot($userTest, $question->id))
                                                        <i class="bi bi-check" style="color:rgb(91, 255, 91)" ></i>
                                                        @else 
                                                        <i class="bi bi-x" style="color:red"></i>
                                                        @endif
                                                        {!! App\Helper\Helper::userAnswer($userTest, $question->id) !!}</td>
                                                </tr>



                                                @php
                                                    $itera++;
                                                @endphp
                                            @endforeach
                                        @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endforeach

                </div>
            </div>
        </div>
        {{-- <div class="container"> --}}

        {{-- <div class="card-body pt-9 pb-9">
                <h1 class="text-dark fw-bolder mt-1 mb-10 fs-3">Correct Answer</h1>
                <div class="row">

                    @php
                        $itera = 1;
                    @endphp
                    @foreach ($data as $key => $group)
                        <div class="col-md-4">
                         
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Correct</th>
                                                <th>Your Answer</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($group['questionGroups'] as $group)
                                                @foreach ($group['questions'] as $question)
                                                    @if ($question->category == 3)
                                                        <tr>
                                                            <td>{{ $itera }}</td>
                                                            <td>{!! App\Helper\Helper::correctAnswer($question->id) !!}</td>
                                                            <td>{!! App\Helper\Helper::userAnswer($userTest, $question->id) !!}</td>


                                                            @php
                                                                $itera++;
                                                            @endphp
                                                    @endif



                                                    <tr>
                                                        <td>{{ $itera }}</td>
                                                        <td>{!! App\Helper\Helper::correctAnswer($question->id) !!}</td>
                                                        <td>{!! App\Helper\Helper::userAnswer($userTest, $question->id) !!}</td>
                                                    </tr>



                                                    @php
                                                        $itera++;
                                                    @endphp
                                                @endforeach
                                            @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                               
                            </div>
                    @endforeach


                </div>


            </div> --}}

        {{-- </div> --}}
    </div>
    <!-- Service End -->
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
