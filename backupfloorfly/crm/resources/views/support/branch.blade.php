@extends('setup.index')
@section('title', __('Branch'))
@section('setting_page')
<div class="main-content">
   @if($flash = session('error_message'))
   <div class="alert alert-primary" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      {{ $flash }}
   </div>
   @endif
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
   New Branch
   </button>
   <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalCenterTitle">Branch</h5>
               <a class="close" data-dismiss="modal">
               <span aria-hidden="true">&times;</span>
               </a>
            </div>
            <div class="modal-body">
               <form id="myModalForm" action="" method="POST">
                  <input type="hidden" name="id" value="">
                  <div class="form-group">
                     <label>@lang('form.name') <span class="required">*</span></label>
                     <input type="text" class="form-control form-control-sm" name="name">
                     <div class="invalid-feedback d-block name"></div>
                  </div>
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('form.close')</button>
               <button type="button" class="btn btn-primary" id="submitForm">@lang('form.submit')</button>
            </div>
         </div>
      </div>
   </div>
   <hr>
   <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="data">
      <thead>
         <tr>
            <th>@lang("form.name")</th>
            <th>@lang("form.options")</th>
         </tr>
      </thead>
   </table>
</div>
@endsection

@section('onPageJs')
    <script>
        $(function() {


          $('#test_imap_connection').click(function(e){
            e.preventDefault();

            $(this).text("{{ __('form.please_wait') }}").prop("disabled", true);
            var postData = $('#myModalForm').serializeArray();
            postData.push({ "name": "_token", "value" : "{{ csrf_token() }}" });

            var $scope = this;
            $.post( "{{ route('check_imap_connection') }}" , postData ).done(function( response ) {

                  $($scope).text("{{ __('form.test_connection') }}").prop("disabled", false);
                  alert(response.msg);

            });

          });

            var dataTable = $('#data').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        init: function(api, node, config) {
                            $(node).removeClass('btn-secondary')
                        },
                        className: "btn-light btn-sm",
                        extend: 'collection',
                        text: 'Export',
                        buttons: [
                            'copy',
                            'excel',
                            'csv',
                            'pdf',
                            'print'
                        ]
                    }
                ],

                "language": {
                    "lengthMenu": '_MENU_ ',
                    "search": '',
                    "searchPlaceholder": "{{ __('form.search') }}"
                    // "paginate": {
                    //     "previous": '<i class="fa fa-angle-left"></i>',
                    //     "next": '<i class="fa fa-angle-right"></i>'
                    // }
                }

                ,
                responsive: true,
                processing: true,
                serverSide: true,
                //iDisplayLength: 5
                pageLength: {{ data_table_page_length() }},
                ordering: false,
                // "columnDefs": [
                //     { className: "text-right", "targets": [2,4] },
                //     { className: "text-center", "targets": [5] }
                //
                //
                // ],
                "ajax": {
                    "url": '{!! route("datatables_branch") !!}',
                    "type": "POST",
                    'headers': {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }

                }
            }).
            on('mouseover', 'tr', function() {
                jQuery(this).find('div.row-options').show();
            }).
            on('mouseout', 'tr', function() {
                jQuery(this).find('div.row-options').hide();
            });




            $('#myModal').on('shown.bs.modal', function () {

                var id = $('input[name=id]').val();

                if(!id)
                {
                    $('#imap_encryption_').prop( "checked", true );  
                }
                

            });

            $('#myModal').on('hidden.bs.modal', function (e) {

                make_form_inputs_empty();
            });


            $( "#myModal input[type=text], textarea" ).focus(function() {

                $(this).next('.invalid-feedback').html("");
            });

             
            $('#submitForm').click(function (e) {
                e.preventDefault();
                $('.invalid-feedback').html("");
                var id = $('input[name=id]').val();

                var url = (id) ? "{{ route('patch_branch') }}" : "{{ route('post_branch') }}";

                var postData = $('#myModalForm').serializeArray();
                postData.push({ "name": "_token", "value" : "{{ csrf_token() }}" });



                $.post( url , postData )
                    .done(function( response ) {
                        if(response.status == 2)
                        {

                            $.each(response.errors, function( index, value ) {

                                $('.' + index).html(value.join());
                            });


                        }
                        else
                        {
                            dataTable.draw();

                            make_form_inputs_empty();

                            $('#myModal').modal('hide');
                        }
                    });



            });






        });

        $(document).on('click','.edit_item',function(e){
            //  $(this) = your current element that clicked.
            // additional code
            e.preventDefault();
            var id = $(this).data('id');

            $.post( "{{ route("get_information_branch") }}", { "_token": "{{ csrf_token() }}", id : id})
                .done(function( response ) {
                    if(response.status == 1)
                    {

                        var obj = response.data;
                        $('input[name=id]').val(obj.id);
                        $('input[name=name]').val(obj.name);                        
                         
                        
                        $('#myModal').modal('show');


                    }
                    else
                    {

                    }
                });


        });



        function make_form_inputs_empty()
        {
            $('.invalid-feedback').html("");
            $("#myModal").find("input[type=text], textarea, input[type=hidden], input[type=email]").val("");
            $('input[type=checkbox]').prop( "checked", false );
        }
    </script>
@endsection