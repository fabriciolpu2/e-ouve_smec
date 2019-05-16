@extends('layouts.publico')

@section('content')
teste
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
                                    <th>No</th>
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
<div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Other Sample form</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">Person Info</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input type="text" id="firstName" class="form-control" placeholder="John doe">
                                        <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                        <small class="form-control-feedback"> This field has error. </small> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-success">
                                        <label class="control-label">Gender</label>
                                        <select class="form-control custom-select">
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                        </select>
                                        <small class="form-control-feedback"> Select your gender </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Date of Birth</label>
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 5</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Membership</label>
                                        <div class="m-b-10">
                                            <label class="custom-control custom-radio">
                                                <input id="radio5" name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-label">Free</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio6" name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-label">Paid</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <h3 class="box-title m-t-40">Address</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label>Street</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Post Code</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control custom-select">
                                            <option>--Select your Country--</option>
                                            <option>India</option>
                                            <option>Sri Lanka</option>
                                            <option>USA</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-inverse">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Other Sample Horizontal form</h4>
                </div>
                <div class="card-body">
                    <form action="#" class="form-horizontal">
                        <div class="form-body">
                            <h3 class="box-title">Person Info</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">First Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="John doe">
                                            <small class="form-control-feedback"> This is inline help </small> </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label class="control-label text-right col-md-3">Last Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control-danger" placeholder="12n">
                                            <small class="form-control-feedback"> This field has error. </small> </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Gender</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                            <small class="form-control-feedback"> Select your gender. </small> </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Date of Birth</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Category</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="Category 1">Category 1</option>
                                                <option value="Category 2">Category 2</option>
                                                <option value="Category 3">Category 5</option>
                                                <option value="Category 4">Category 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Membership</label>
                                        <div class="col-md-9">
                                            <div class="m-b-10">
                                                <label class="custom-control custom-radio">
                                                    <input id="radio3" name="radio" type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">Free</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                    <span class="custom-control-label">Paid</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <h3 class="box-title">Address</h3>
                            <hr class="m-t-0 m-b-40">
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Address 1</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Address 2</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">City</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">State</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Post Code</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Country</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select">
                                                <option>Country 1</option>
                                                <option>Country 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        <hr>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-inverse">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->        

@endsection
