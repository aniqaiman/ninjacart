@extends('layout.master')
@section('style')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection
@section('content')

<section class="content-header">
  <h1>
    SUPPLIER
    <small>Control panel</small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="{{route('welcome')}}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Supplier</li>
  </ol>
</section>

<div class="modal modal-info fade" id="add-supplier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Supplier</h4>

      </div>
      <div class="modal-body">
        <!-- Custom Tabs (Pulled to the right) -->
        <form action="#" method="POST" id="frm-supplier-create" enctype ="multipart/form-data">
          {!! csrf_field() !!}
          <div class="row">

            <div class="form-group">
              <label for="owner_name" class="col-sm-3 control-label">Owner Name: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="owner_name" id="owner_name" multiple="true">
              </div>
            </div>

            <div class="form-group">
              <label for="company_name" class="col-sm-3 control-label">Company Name: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="company_name" id="company_name" multiple="true">
              </div>
            </div>

            <div class="form-group">
              <label for="registration_number" class="col-sm-3 control-label">Company Registration Number: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="registration_number" id="registration_number" multiple="true">
              </div>
            </div>

            <div class="form-group">
              <label for="ic_number" class="col-sm-3 control-label">IC Number: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="ic_number" id="ic_number" multiple="true">
              </div>
            </div>

            <div class="form-group">
              <label for="farm_address" class="col-sm-3 control-label">Farm Address: </label>
              <div class="col-sm-9">
              <textarea class="form-control" name="farm_address" id="farm_address" ></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="handphone_number" class="col-sm-3 control-label">Handphone Number: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="handphone_number" id="handphone_number" multiple="true">
              </div>
            </div>

            <div class="form-group">
              <label for="email_address" class="col-sm-3 control-label">Email Address: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="email_address" id="email_address" multiple="true">
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="col-sm-3 control-label">Password: </label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="password" id="password" multiple="true">
              </div>
            </div>

          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<section class="content">
  <div class="col-md-12">
    <!-- Custom Tabs (Pulled to the right) -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs ">
        <li class="active"><a href="#tab_1" data-toggle="tab">Active</a></li>
        <li class="pull-right"> 
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-supplier">Add Supplier</button></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <div class="box">

              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-controls">

                </div>
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped" id="supplier-table">
                   <thead>

                      <tr class="info bg-blue">
                      
                        <th><input type="checkbox"></th>
                        <th class="mailbox-star"><center><a href="#">Seller ID</a></center></th>
                        <th class="mailbox-star"><center><a href="#">Owner Name</a></center></th>
                        <th class="mailbox-star"><center><a href="#">Company Name</a></center></th>
                        <th class="mailbox-star"><center><a href="#">Registration Number</a></center></th>
                        <th class="mailbox-star"><center><a href="#">IC Number</a></center></th>
                        <th class="mailbox-star"><center><a href="#">Farm Address</a></center></th>
                        <th class="mailbox-star"><center><a href="#">Handphone Number</a></center></th>
                        <th class="mailbox-star"><center><a href="#">Email Address</a></center></th>
                        <th class="mailbox-star"><center><a href="#">Password</a></center></th>
                        <th class="mailbox-subject"><center><a href="#">Operation</a></center></th>
                         
                      </tr>
                       </thead>
                       
                       <tbody>
                      @foreach($sellers as $seller) 
                      <tr class="info">
                        <td><input type="checkbox"></td>
                        <td class="mailbox-star"><center><a href="#">{{$seller->seller_id}}</a></center></td>
                        <td class="mailbox-name"><center><a href="#">{{$seller->owner_name}}</a></center></td>
                        <td class="mailbox-date"><center><a href="#">{{$seller->company_name}}</a></center></td>
                        <td class="mailbox-date"><center><a href="#">{{$seller->registration_number}}</a></center></td>
                        <td class="mailbox-date"><center><a href="#">{{$seller->ic_number}}</a></center></td>
                        <td class="mailbox-date"><center><a href="#">{{$seller->farm_address}}</a></center></td>
                        <td class="mailbox-date"><center><a href="#">{{$seller->handphone_number}}</a></center></td>
                        <td class="mailbox-date"><center><a href="#">{{$seller->email_address}}</a></center></td>
                        <td class="mailbox-date"><center><a href="#">{{$seller->password}}</a></center></td>
                        <td class="mailbox-subject"><center><div class="btn-group">
                            <a class="button btn btn-success btn-sm" href="#"><i class="fa fa-edit"></i> Edit</a>
                            {{ Form::open(array('url' => 'seller/' . $seller->seller_id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', array('class' => 'button btn btn-warning btn-sm')) }}
                            {{ Form::close() }}
                            </center>
                        </td>
                      </tr>
                      @endforeach

                      
                    </tbody>

                  </table>
                  <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.tab-pane -->

        </div>
        <!-- /.tab-content -->
      </div>
      <!-- nav-tabs-custom -->
    </div>
    <!-- Main content -->
  </section>
  @endsection

  @section('script')
  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

  <script>
$(document).ready(function()
{
    $('#supplier-table').DataTable();
    CKEDITOR.replace('farm_address');

    $('#frm-supplier-create').on('submit',function(e)
    {
      e.preventDefault();
      console.log('pressed');
      var data = $(this).serialize();

      console.log(data);
      var formData = new FormData($(this)[0]);
   formData.append('farm_address', CKEDITOR.instances.farm_address.getData());
   // console.log(CKEDITOR.instances.description.getData());
      $.ajax(
      {
        url:"{{route('createSupplier')}}", 
        type: "POST",
        data: formData,
        async: false,
        success: function(response)
        {
          console.log(response);
          $("[data-dismiss = modal]").trigger({type: "click"});
        },  
        cache: false,
        contentType: false,
        processData: false
      });
    });
});

  </script>
  @endsection 