@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/table/datatable/dt-global_style.css')}}">
@endsection

@extends('layouts.admin')


@section('content')

<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div>
                <h3>Volunteer</h3>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <button class="btn btn-primary mb-2 btn-rounded " data-toggle="modal" data-target="#mailModal" style="float:right; margin-top:1rem; margin-right:1rem;">Mail</button>
                    <button class="btn btn-primary mb-2 btn-rounded " data-toggle="modal" data-target="#adminModal" style="float:right; margin-top:1rem; margin-right:0.5rem;">Admin</button>

                    <table id="zero-config" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Country[Residence]</th>
                                <th>Country[Origin]</th>
                                <th>Address</th>
                                <th class="no-content">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($volunteerRequest as $data)
                            <tr>
                                <td>{{$data->fullname}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->country_of_residence}}</td>
                                <td>{{$data->country_of_origin      }}</td>
                                <td>{{$data->address}}</td>
                                <td>
                                    <a href="{{route('admin_show_volunteer_profile',$data->id)}}">
                                    <button class="btn btn-primary" id="volunteerId" >View</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Country[Residence]</th>
                                <th>Country[Origin]</th>
                                <th>Address</th>
                                <th class="no-content">Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>
<!--  END CONTENT PART  -->
</div>
<!-- END MAIN CONTAINER -->

<!-- Modal -->
<div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Mail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">TO</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="to" placeholder="Email Address" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Subject</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="subject" placeholder=" Subject" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Mail</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Message" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Full Name</label>
                        <input type="file" class="form-control-file" id="exampleFormControlInput1" name="file" placeholder="" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="to" placeholder="First Name" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="subject" placeholder="Last Name" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Other Names" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Message" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Message" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Message" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Message" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Mail</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Message" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Mail</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Message" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Mail</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="Message" value="">
                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="{{asset('assets/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/plugins/table/datatable/datatables.js')}}"></script>
<script>
    $('#zero-config').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });
</script>

<script>
    function volunteerId(id){
        var id = document.getElementById('volunteerId').value = id;
        var currentUrl = window.location.href;
        var url = currentUrl.searchParams;
        
        var newUrl = url.set('id', '1');

        console.log(newUrl);

        
        
    }
</script>
@endsection