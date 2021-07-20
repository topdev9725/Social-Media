@extends('layouts.admin')

@section('title', 'Welcome to MILLIONK')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
<link rel="stylesheet" href="{{ asset('assets/css/datatable/datatables.min.css') }}">

<style>
.custom-select1 {
    color: #2b2b2b!important;
    padding: 8px 5px!important;
    background: #e5e5e5;
}
.order-id {
    color: #2178F9;
}
.custom-card {
    background: unset!important;
    border-radius: 20px!important;
}
.registered-date {
    border-radius: 14px;
    padding-left: 12px;
    background: #e5e5e5;
    border: 1px solid #767676;
    height: 40px;
    padding-right: 35px;
    width: 165px;
}
.date-part {
    position: relative;
}
.date-part > img {
    position: absolute;
    right: 20px;
    top: 12px;
    width: 16px;
}
.datatable th {
    vertical-align: middle!important;
}
.datatable th:first-child {
    text-align: center;
}
td.details-control {
    background: url('/assets/images/icons/plus.png') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('/assets/images/icons/minus.png') no-repeat center center;
}
#example tr td:nth-child(5) {
    width: 200px;
}
#example tr td:nth-child(1) {
    text-align: center;
}
#example th {
    color: #FF335C;
}
.order-id-group .col-3,
.expand-content .fans:last-child {
    border-right: 0px!important;
}
.view-all {
    color: #2178F9;
}
#example_wrapper .row:nth-child(2) {
    overflow: auto;
    margin: 0;
}
.alert-success {
    color: #20d45e;
    background-color: #fcfcfc;
    border-color: #fcfcfc;
}
</style>
@endsection

@section('content')
<div class="top-header">
    <h4 class="text-white my-auto">Fans List</h4>
    <div class="custom-breadcrumb my-auto">
        <h4 class="text-white mb-0"><span style="font-weight: normal!important">Dashboard</span> > Fans List</h4>
    </div>
</div>
<div class="row m-auto">
    <div class="col-12 col-sm-12 col-md-12 d-flex mt-2 mb-3 p-0">
        <div class="add-new-idol">
            <!-- <button class="btn custom-btn add-fan"><img src="{{ asset('assets/images/icons/add-user.png') }}" class="mr-3">Add New Fans</button> -->
            <button class="btn custom-btn delete-fan"><i class='fas fa-trash-alt mr-3' style='font-size:16px'></i>Delete</button>
        </div>
        <div class="d-flex custom-select-group">
            <div class="date-part desktop">
                <input class="mr-2 registered-date from" type="text" name="from" value="From" id="from">
                <img src="{{ asset('assets/images/icons/calendar.png') }}">
            </div>
            <div class="date-part desktop">
                <input class="mr-2 registered-date to" type="text" name="to" value="To" id="to">
                <img src="{{ asset('assets/images/icons/calendar.png') }}">
            </div>
            <select class="custom-select1 mr-2 status desktop" name="status">
                <option value="">Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
    </div>
    @if(Session::get('success'))
    <div class="col-12 col-sm-12 col-md-12 p-0">
        <div class="alert alert-success">
            <strong>Success!</strong> {{ Session::get('success') }}
        </div>
    </div>
    @endif
    <div class="col-12 col-sm-12 col-md-12 custom-card">
        <div class="chart">
            <div class="datatable">
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="all-check" value="0">
                            </th>
                            <th></th>
                            <th>Fans Username</th>
                            <th>Fans Name</th>
                            <th>Email</th>
                            <th>Join Date</th>
                            <th>Orders</th>
                            <th>Credits</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>
                                <input type="checkbox" class="all-check" value="0">
                            </th>
                            <th></th>
                            <th>Fans Username</th>
                            <th>Fans Name</th>
                            <th>Email</th>
                            <th>Join Date</th>
                            <th>Orders</th>
                            <th>Credits</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Confirmation</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Are you really sure to remove?
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <form action="{{ route('admin-fans-delete') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="fans_list" id="idol-list" value="">
                <button type="submit" class="btn btn-success">OK</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
        </div>
        
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('assets/js/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatable.js') }}"></script>

<script>
function format ( d ) {
    let completed_orders = '';
    if(d.completed_orders.length) {
        for (let i = 0; i < d.completed_orders.length; i++) {
            completed_orders += '<div class="col-3 col-md-3 col-sm-3 mb-2">' +
                                    '<p class="mb-0 text-main-color">#' + d.completed_orders[i].order_id + '</p>' +
                                '</div>';
        }
    }

    let pending_orders = '';
    if(d.pending_orders.length) {
        for (let i = 0; i < d.pending_orders.length; i++) {
            pending_orders += '<div class="col-3 col-md-3 col-sm-3 mb-2">' +
                                    '<p class="mb-0 text-main-color">#' + d.pending_orders[i].order_id + '</p>' +
                                '</div>';
        }
    }

    let refuned_orders = '';
    if(d.refuned_orders.length) {
        for (let i = 0; i < d.refuned_orders.length; i++) {
            refuned_orders += '<div class="col-3 col-md-3 col-sm-3 mb-2">' +
                                    '<p class="mb-0 text-main-color">#' + d.refuned_orders[i].order_id + '</p>' +
                                '</div>';
        }
    }

    // `d` is the original data object for the row
    return '<table cellpadding="9" class="w-100" cellspacing="0" border="0" style="padding-left:50px;">' +
        '<tr class="expand">' +
            '<td colspan="9">' +
                '<div class="row m-0 expand-content">' +
                    '<div class="col-4 col-sm-4 col-md-4 fans">' +
                        '<h4 class="mb-0">Pending Orders</h4>' +
                        '<div class="divider"></div>' +
                        '<div class="fans-content mb-2">' +
                            '<div class="row m-0 w-100 mb-2 order-id-group">' +
                                pending_orders +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-4 col-sm-4 col-md-4 fans">' +
                        '<h4 class="mb-0">Completed Orders</h4>' +
                        '<div class="divider"></div>' +
                        '<div class="fans-content mb-2">' +
                            '<div class="row m-0 w-100 mb-2 order-id-group">' +
                                completed_orders +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-4 col-sm-4 col-md-4 fans">' +
                        '<h4 class="mb-0">Refuned Orders</h4>' +
                        '<div class="divider"></div>' +
                        '<div class="fans-content mb-2">' +
                            '<div class="row m-0 w-100 mb-2 order-id-group">' +
                                refuned_orders +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</td>' +
        '</tr>' +
    '</table>';
}

$(document).ready(function() {
    $('#from').datepicker({
        format: 'yyyy-mm-dd'
    });
    $('#to').datepicker({
        format: 'yyyy-mm-dd'
    });
    $('.add-fan').click(function() {
        location.href = "{{ route('admin-add-fan') }}"
    })

    var table = $('#example').DataTable({
        'ajax': "{{ route('admin-fans-list') }}",
        'columns': [
            { 
                'data': 'checkbox',
                'orderable':  false
            },
            {
                'className':      'details-control',
                'orderable':      false,
                'data':           null,
                'defaultContent': ''
            },
            { 'data': 'fans_user_name' },
            { 'data': 'fans_full_name' },
            { 'data': 'email' },
            { 
                'data': 'join_date',
                'type': 'date' 
            },
            { 'data': 'order_count' },
            { 'data': 'credits' },
            { 'data': 'save' },
        ],
        'order': [[5, 'desc']]
    } );

    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function(){
        var tr = $(this).closest('tr');
        var row = table.row( tr );
        // console.log(row.data())

        if(row.child.isShown()){
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child(format(row.data())).show();
            tr.addClass('shown');
        }
    });

    $(".from, .to, .status").on('change', function() {
        let filterlink = '';

        $(".from, .to, .status").each(function() {
            var value = $(this).val();
            if (filterlink == '') {
                if($(this).val() == "Registered Date") {
                    value = '';
                }
                filterlink += "{{ route('admin-filter-fans') }}" + '?'+ $(this).attr('name') + '=' + value;
            } else {
                if($(this).val() == "From" || $(this).val() == "To") {
                    value = '';
                }
                filterlink += '&' + $(this).attr('name') + '=' + value;
            }
        })
        
        console.log(encodeURI(filterlink))

        table.destroy();
        table = $('#example').DataTable({
            'ajax': encodeURI(filterlink),
            'columns': [
                { 
                    'data': 'checkbox',
                    'orderable':  false
                },
                {
                    'className':      'details-control',
                    'orderable':      false,
                    'data':           null,
                    'defaultContent': ''
                },
                { 'data': 'fans_user_name' },
                { 'data': 'fans_full_name' },
                { 'data': 'email' },
                { 
                    'data': 'join_date',
                    'type': 'date' 
                },
                { 'data': 'order_count' },
                { 'data': 'credits' },
                { 'data': 'save' },
            ],
            'order': [[5, 'desc']]
        } );
    })

    $(document).on('click', '.all-check', function() {
        if($(this).is(":checked")) {
            $('input[type=checkbox]').each(function() {
                $(this).prop('checked', true);
            })
        } else {
            $('input[type=checkbox]').each(function() {
                $(this).prop('checked', false);
            })
        }
    });

    $('.delete-fan').on('click', function() {
        var fans_list = [];
        $("input[name='checkbox']:checked").each(function(){
            fans_list.push(Number($(this).val()));
        });
        console.log(fans_list);
        if(fans_list.length) {
            $('#idol-list').val(fans_list);
            $("#myModal").modal();
        } else {
            toastr.error('You should select at least 1 fan!');
        }
    });

    let user_id;
    $(document).on('click', '.credits', function() {
        user_id = $(this).data('id');
        var credit = $(this).find('span').text();
        $(this).html('<input type="number" class="credit_input" value="' + credit + '">');
        $(this).find('input').focus();
        $(this).removeClass('credits');
    });

    $(document).on('change', '.credit_input', function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{ route('admin-credit-update') }}",
            type: "POST",
            data: {
                user_id: user_id,
                credit: $(this).val(),
            },
            success: function(data) {
                if(data['success']) {
                    toastr.success('Successfully updated!');
                } else {
                    toastr.error('Server error!');
                }
            },
            error: function() {
                toastr.error('Server error!');
            }
        })
    })

    $(document).on('blur', '.credit_input', function() {
        $("div[data-id=" + user_id + "]").addClass('credits');
        $("div[data-id=" + user_id + "]").html("$ <span class='text-main-color'>" + $(this).val() + "</span>");
    });
});
</script>
@endsection