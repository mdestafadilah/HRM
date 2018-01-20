@extends('layouts.master')

@section('title', 'Report-Customer Payment Status')
@section('extraStyle')
  <link type="text/css" rel="stylesheet" href="{{url('/')}}/assets/css/libs/select2/select2.css" />
  <link type="text/css" rel="stylesheet" href="{{url('/')}}/assets/css/libs/bootstrap-datepicker/datepicker3.css" />
  <style>
    hr {
      margin-top: 0px !important;
      margin-bottom: 0px !important;
      border-top: 2px solid #000 !important;
    }
    @media print {
      .report_footer{
        position: fixed;
        bottom: 0;
        width: 100%;
      }
      .reportTitle{
        background: #7c8383;
      }
    }

  </style>
@endsection
@section('content')
  <section>
    <div class="section-header no-print">
      <ol class="breadcrumb">
        <li class="active">Customer Payment Status</li>
      </ol>
    </div><!--end .section-header -->
    <div class="section-body">
      <section>
        <div class="section-body">
          {{--<div class="row no-print">--}}
          {{--<div class="col-lg-12">--}}
          {{--<form class="form form-validate floating-label"--}}
          {{--novalidate="novalidate"--}}
          {{--action="{{URL::route('report.dues')}}"--}}
          {{--method="GET"--}}
          {{--enctype="multipart/form-data">--}}

          {{--<div class="card">--}}
          {{--<div class="card-head style-primary">--}}
          {{--<header>Filters</header>--}}
          {{--</div>--}}
          {{--<div class="card-body">--}}
          {{--<div class="row">--}}
          {{--<div class="col-lg-3">--}}
          {{--<div class="form-group">--}}
          {{--{!! Form::select('project', $projects, $project, ['id' => 'projects_id', 'class' => 'form-control select2-list', 'required' => 'required']) !!}--}}
          {{--<label for="">Project</label>--}}
          {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-lg-3">--}}
          {{--<div class="form-group">--}}
          {{--{!! Form::select('customer', $customers, $customer, ['id' => 'customers_id', 'class' => 'form-control select2-list', 'required' => 'required']) !!}--}}
          {{--<label for="">Customer</label>--}}
          {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-lg-2">--}}
          {{--<div class="form-group">--}}
          {{--<input type="text" class="form-control datepicker" value="{{$fromDate}}" name="fromDate" required>--}}
          {{--<label for="entryDate">From date</label>--}}
          {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-lg-4">--}}
          {{--<div class="form-group">--}}
          {{--<input type="text" class="form-control datepicker" value="{{$monthYear->format('m-Y')}}" name="monthYear" required>--}}
          {{--<label for="montyYear">Month</label>--}}
          {{--</div>--}}
          {{--</div>--}}
          {{--<div class="col-lg-2">--}}
          {{--<div class="form-group">--}}
          {{--<button type="submit" class="btn btn-primary ink-reaction"><i class="md md-filter-list"></i> get</button>--}}
          {{--</div>--}}
          {{--</div>--}}
          {{--</div>--}}

          {{--</div><!--end .card-body -->--}}
          {{--</div><!--end .card -->--}}
          {{--</form>--}}

          {{--</div>--}}
          {{--</div>--}}
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-printable style-default-light">
                <div class="card-head no-print">
                  <div class="tools">
                    <div class="btn-group">
                      <a class="btn btn-floating-action btn-primary" href="javascript:void(0);" onclick="javascript:window.print();"><i class="md md-print"></i></a>
                    </div>
                  </div>
                </div><!--end .card-head -->
                <div class="card-body style-default-bright top-zero">
                  <div class="row">
                    <h3 class="text-center"><strong>AAKASH DEVELOPMENTS LTD</strong></h3>
                    <h6 class="text-center">House #36,Road #13/D, Banani, Dhaka-1213</h6>
                    <h6 class="text-center">
                      <span>Phone : +8802-9820330-05</span>
                      <span style="margin-left: 10px;">Fax :</span>
                      <span style="margin-left: 10px;">E-mail : info@aakashgroup-bd.com</span>
                      <span style="margin-left: 10px;">Web : www.aakashgroup-bd.com</span>
                    </h6>
                  </div><!--end .row -->
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="well reportTitle" style="padding: 0;">
                        <div class="clearfix">
                          <div class="text-center text-bold text-default-dark">  Customer Payment Status</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div style="height: 500px;"></div>
                    </div><!--end .col -->
                  </div>
                  <div class="row report_footer">
                    <div class="col-md-12">
                      <hr>
                      <h6 class="text-left">
                        <span>Printing Date : {{date('d/m/Y')}}</span>
                        <span style="margin-left: 30px;">Printing Time : {{date('h:i A')}}</span>
                        <span style="margin-left: 30px;">Print By : Mr. Entry Operator</span>
                        <span style="margin-left: 10px; float: right;">Page 1 of 1</span>
                      </h6>
                    </div><!--end .col -->
                  </div>
                  <!--end .row -->
                </div><!--end .card-body -->
              </div><!--end .card -->
            </div><!--end .col -->
          </div><!--end .row -->
        </div>
      </section>
    </div>

  </section>
@endsection

@section('extraScript')
  <script src="{{url('/')}}/assets/js/libs/select2/select2.min.js"></script>
  <script src="{{url('/')}}/assets/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>

  <script type="text/javascript">
      $( document ).ready(function() {
          $('.datepicker').datepicker({
              format: 'mm-yyyy',
              viewMode: "months",
              minViewMode: "months",
              autoclose: true,
              todayHighlight : true

          });
          $('#menubarToggler').trigger('click');
          $('select').select2();

      });
  </script>
@endsection
