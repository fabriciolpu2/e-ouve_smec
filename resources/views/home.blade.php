@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Contact Emplyee list</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Age</th>
                                <th>Joining date</th>
                                <th>Salery</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="javascript:void(0)"><img src="../material/assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Genelia Deshmukh</a>
                                </td>
                                <td>genelia@gmail.com</td>
                                <td>+123 456 789</td>
                                <td><span class="label label-danger">Designer</span> </td>
                                <td>23</td>
                                <td>12-10-2014</td>
                                <td>$1200</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="javascript:void(0)"><img src="../material/assets/images/users/5.jpg" alt="user" width="40" class="img-circle" /> Arijit Singh</a>
                                </td>
                                <td>arijit@gmail.com</td>
                                <td>+234 456 789</td>
                                <td><span class="label label-info">Developer</span> </td>
                                <td>26</td>
                                <td>10-09-2014</td>
                                <td>$1800</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                </td>
                            </tr>                                
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
                                </td>
                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Add New Contact</h4> </div>
                                            <div class="modal-body">
                                                <from class="form-horizontal form-material">
                                                    <div class="form-group">
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Type name"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Email"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Phone"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Designation"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Age"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Salary"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                <input type="file" class="upload"> </div>
                                                        </div>
                                                    </div>
                                                </from>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <td colspan="7">
                                    <div class="text-right">
                                        <ul class="pagination"> </ul>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
</div>
<!-- Row -->
@endsection
