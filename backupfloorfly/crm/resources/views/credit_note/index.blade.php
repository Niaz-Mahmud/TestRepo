    @extends('layouts.main')
@section('title', __('form.credit_notes'))
@section('content')
<style>
   .hide-content{
   display: none;
   }
</style>
<div id="credit_note" v-cloak>
   <!-- Modal -->
   <div class="modal fade" id="sendEmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">{{ sprintf(__('form.send___to_email'), __('form.credit_note')) }}</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form method="post" action="{{ route( 'credit_note_send_to_email') }}">
                  {{ csrf_field()  }}
                  <input type="hidden" name="credit_note_id" id="credit_note_id" value="">
                  <input type="hidden" name="customer_id" id="customer_id" value="">
                  <div class="form-group">
                     <label for="project_id">@lang('form.email')</label>
                     <?php echo form_dropdown('customer_contact_id', [], "", "class='form-control form-control-sm email'"); ?>
                     <div class="invalid-feedback d-block"></div>
                  </div>
                  <div class="form-group">
                     <label>@lang('form.cc')</label>
                     <input type="email" class="form-control form-control-sm" name="email_cc" placeholder="Enter email">
                  </div>
                  <div class="custom-control custom-checkbox">
                     <input checked type="checkbox" class="custom-control-input" name="add_attachment" value="1" id="customCheck1">
                     <label class="custom-control-label" for="customCheck1">@lang('form.attach_credit_note_as_pdf')</label>
                  </div>
                  <hr>
                  <div class="form-group">
                     <label>@lang('form.preview_template')</label> 
                     <textarea class="form-control" id="email_template" name="email_template"><?php echo nl2br($data['email_template']); ?></textarea>
                  </div>
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary" v-on:click.prevent="send_to_email()">@lang('form.send')</button>
            </div>
         </div>
      </div>
   </div>
   <!-- End of Modal -->
   <div class="white-background">
      <div class="row">
         <div class="col-md-6">
            <h5>@lang('form.credit_notes')</h5>
         </div>
         <div class="col-md-6">
            <div class="float-md-right">
               @if(check_perm('credit_notes_create')) 
               <a class="btn btn-primary btn-sm" href="{{ route('add_credit_note_page') }}" role="button">@lang('form.new_credit_note')</a>                            
               @endif
               @if(check_perm(['credit_notes_view', 'credit_notes_view_own']))
               <a v-if="layout.left_pane =='col-md-12'" v-on:click.prevent="toggleWindow('col-md-5')" class="btn btn-secondary btn-sm" href="#"><i class="fas fa-angle-double-left"></i></a>
               <a v-if="layout.left_pane =='col-md-5'" v-on:click.prevent="toggleWindow('col-md-12')" class="btn btn-secondary btn-sm" href="#"><i class="fas fa-angle-double-right"></i></a>
               @endif
            </div>
         </div>
      </div>
     
   </div>
   <br>
   @if(check_perm('credit_notes_view') || check_perm('credit_notes_view_own'))      
   <div class="row">
      <div  v-bind:class="layout.left_pane">
         <div class="main-content">
            <table class="table table-credit_notes dataTable no-footer dtr-inline collapsed" width="100%" id="data">
               <thead>
                  <tr>
                     <th>@lang("form.credit_note_#")</th>
                     <th>@lang("form.date")</th>
                     <th>@lang("form.customer")</th>
                     <th>@lang("form.status")</th>
                     <th>@lang("form.reference")</th>
                     <th class="text-right">@lang("form.amount")</th>
                     <th class="text-right">@lang("form.remaining_amount")</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
      <div  v-bind:class="layout.right_pane">
         <div class="main-content">
            <ul class="nav nav-tabs">
               <li class="nav-item">
                  <a class="nav-link" v-bind:class="{'active':(currentView === 'credit_note-details' )}" href="#" @click.prevent="currentView='credit_note-details'">@lang('form.credit_note')</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" v-bind:class="{'active':(currentView === 'invoices' )}" href="#" @click.prevent="currentView='invoices'">@lang('form.invoices')</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tooltip" data-placement="top" title="{{ __('form.toggle_full_view') }}" href="#" v-on:click.prevent="toggleExpand()"><i class="fas fa-expand"></i></a>
               </li>
            </ul>
            <br>
            <div class="row">
               <div class="col-md-2">
                  <button type="button" class="btn btn-sm btn-outline-primary">@{{ item_status.name }}</button>
               </div>
               <div class="col-md-10">
                  <div class="float-md-right">
                     @if(check_perm('credit_notes_edit'))
                     <a v-bind:href="'{{ route('edit_credit_note_page') }}/'+ id" data-toggle="tooltip" data-placement="top" title="{{ __('form.edit') }}" class="btn btn-sm btn-outline-info"><i class="far fa-edit"></i></a>
                     @endif
                     <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-file-pdf"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                           <a target="_blank" v-bind:href="records.download_url" class="dropdown-item">@lang('form.download')</a>
                        </div>
                     </div>
                     <!-- 
                        <a href="#" v-on:click.prevent="open_send_to_email_modal(id)" data-toggle="tooltip" data-placement="top" title="{{ __('form.send_to_email') }}" class="btn btn-sm btn-outline-info"><i class="fas fa-envelope"></i></a>
                        -->
                     <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('form.more')
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                         
                           <span v-if="!records.hide_status_dropdown">
                           @if(isset($data['item_statuses']) && (count($data['item_statuses']) > 0))
                           @foreach($data['item_statuses'] as $item_status)
                           <a v-if="item_status.id != {{ $item_status['id'] }}" v-on:click.prevent="changeStatus({{ $item_status['id'] }})" class="dropdown-item" data-item-id="{{ $item_status['id'] }}" href="#">@lang('form.mark_as') {{ $item_status['name'] }}</a>
                           @endforeach
                           @endif
                           </span>
                           @if(check_perm('credit_notes_delete'))
                           <a v-bind:href="'{{ route('delete_credit_note') }}/'+ id" style="color: red;" class="dropdown-item delete_item">@lang('form.delete_credit_note')</a>
                           @endif
                        </div>
                     </div>
                     <a v-if="records.hide_status_dropdown" v-bind:href="records.link_to_converted_component" class="btn btn-primary btn-sm">@{{ records.link_text }}</a>
                  </div>
               </div>
            </div>
            <hr>
            <component :is="currentView" @item_records="itemRecords" v-bind:id="id" transition="fade" transition-mode="out-in"></component>
         </div>
      </div>
   </div>
   @endif
</div>

<template id="credit_note-template" >
   <div>
      <br>
      <span v-html="rec"></span>
   </div>
</template>

<template id="invoices_template" >
  @include('credit_note.partials.vue_js_template_invoices_applied')
</template>




@endsection

@section('onPageJs')

    <script>

        $(function () {

            var skipAjax = false, // flag to use fake AJAX
                skipAjaxDrawValue = 0; // draw sent to server needs to match draw returned by server

            dataTable = $('#data').DataTable({

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

                pageResize: true,
                responsive: true,
                processing: true,
                serverSide: true,
                // iDisplayLength: 5,
                pageLength: {{ data_table_page_length() }},
                ordering: false,
                "columnDefs": [
                    { className: "text-right", "targets": [5,6] },
                    // { className: "text-center", "targets": [5] }
                    { responsivePriority: 1},
                    { responsivePriority: 2},
                    { responsivePriority: 3}


                ],
                "ajax": {
                    "url": '{!! route("datatables_credit_note") !!}',
                    "type": "POST",
                    'headers': {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: function(data) { //this function allows interaction with data to be passed to server
                        if (skipAjax) { //if fake AJAX flag is set
                            skipAjaxDrawValue = data.draw; //get draw value to be sent to server
                        }
                        data.status_id                 = $("select[name=status_id]").val();
                        return data; //pass on data to be sent to server
                    },
                    beforeSend: function(jqXHR, settings) { //this function allows to interact with AJAX object just before data is sent to server
                        if (skipAjax) { //if fake AJAX flag is set
                            var lastResponse = dataTable.ajax.json(); //get last server response
                            lastResponse.draw = skipAjaxDrawValue; //change draw value to match draw value of current request

                            this.success(lastResponse); //call success function of current AJAX object (while passing fake data) which is used by DataTable on successful response from server

                            skipAjax = false; //reset the flag

                            return false; //cancel current AJAX request
                        }
                    }
                }
            }).
            on('mouseover', 'tr', function() {
                jQuery(this).find('div.row-options').show();
            }).
            on('mouseout', 'tr', function() {
                jQuery(this).find('div.row-options').hide();
            });

            $('#datatableFitler select').change(function(){

                dataTable.draw();
            });


            dataTable.on( "click", ".showInformation", function(e) {
                e.preventDefault();

                var id = $(this).data('id');
                updateQueryStringParam('id', id);
                vm.showInformation(dataTable, id);
            });
        });




        
        var credit_noteDetails = Vue.component('credit_note-details', {
            template: '#credit_note-template',
            props: ['id'],
            watch : {
                id : function (newVal, oldVal) {
                    this.getCreditNote();
                }
            },
            data: function() {
                return {
                    rec : ""
                }
            },
            created: function mounted() {
                this.getCreditNote();
            },
            methods : {
                getCreditNote : function getCreditNote() {
                    $scope = this;

                    $.get( "{{ route('get_credit_note_details_ajax') }}/", { id: this.id } )
                        .done(function( response ) {

                            if(response.status == 1)
                            {
                                $scope.rec = response.html ;
                                $scope.$emit('item_records', { record : response.records, status : response.item_status } );
                            }
                            else
                            {
                                $scope.rec = "";
                            }


                        }).fail(function() {
                        $scope.rec = "";
                    });

                }


            }
        });


        var invoices = Vue.component('invoices', {
            template: '#invoices_template',
            props: ['id'],
           
            data: function() {
                return {
                    rec : ""
                }
            },
            created: function mounted() {
                this.getInvoices();
            },
            methods : {
                getInvoices : function getInvoices() {
                    $scope = this;
                    $.post( "{{ route('credit_note_get_invoices') }}", { id: this.id ,  "_token": "{{ csrf_token() }}" })
                            .done(function( response ) {
                               $scope.rec = response;
                    });
                }


            }
        });


        var vm = new Vue({

            el: '#credit_note',
            components: {
                credit_noteDetails : credit_noteDetails
            },
            data: {
                id : "",
                item_status :{
                    id : "",
                    name : ""
                },
                url_to_customer_view : "",
                records : "",
                layout : {
                    left_pane : 'col-md-12',
                    right_pane : 'hide-content'
                },
                currentView: ''
            },

            // Fetches data when the component is created.
            created: function created() {

            },
            mounted: function mounted() {

            },
            computed: {

            },
            methods: {
                open_send_to_email_modal : function($credit_note_id){

                    $("#credit_note_id").val($credit_note_id); 

                    $("#customer_id").val(this.records.customer_id);
                    
                    $('#sendEmailModal').modal('show');
                   

                    tinymce.init({
                    selector: '#email_template',
                    branding: false,
                    height: 500,
                  });
                   
                },
                send_to_email : function(){
                    $('#sendEmailModal').find('form').submit();
                },
                changeStatus : function (statusId) {
                    $scope = this;
                    if(statusId)
                    {
                        $.post( "{{ route('ajax_change_credit_note_status') }}", { id: $scope.id, status_id: statusId,  "_token": "{{ csrf_token() }}" })
                            .done(function( data ) {

                                if(data.status == 1)
                                {
                                    $scope.itemStatus(data.item_status)
                                }

                            });
                    }

                },
                itemStatus: function (value) {

                    this.item_status = {
                        id : value.id,
                            name : value.name
                    }
                },
                itemRecords : function ($rec) {
                    if($rec.status)
                    {
                        this.itemStatus($rec.status);
                    }
                    this.records = $rec.record;
                   

                },
                toggleExpand : function toggleExpand() {

                    $scope = this;

                    if($scope.layout.left_pane == 'col-md-5')
                    {
                        $scope.layout = {
                            left_pane : 'hide-content',
                            right_pane : 'col-md-12'
                        };

                    }
                    else
                    {
                        $scope.layout = {
                            left_pane : 'col-md-5',
                            right_pane : 'col-md-7'
                        };

                    }
                    //dataTable.recalculate();

                },
                toggleWindow : function toggleWindow($val) {
                    $scope = this;

                    if($val == 'col-md-5')
                    {
                        $scope.layout = {
                            left_pane : 'col-md-5',
                            right_pane : 'col-md-7'
                        };

                    }
                    else
                    {
                        $scope.layout = {
                            left_pane : 'col-md-12',
                            right_pane : 'hide-content'
                        };

                    }
                    skipAjax = false;
                    dataTable.draw('page');
                },
                showInformation : function showInformation(dataTable, Id) {

                    $scope = this;

                    $scope.id = Id;


                    $scope.layout = {
                            left_pane : 'col-md-5',
                            right_pane : 'col-md-7'
                    };

                    $scope.currentView = 'credit_note-details';
                    //dataTable.recalculate();
                    skipAjax = false;
                    dataTable.draw('page');



                }






            }

        });






        $(function() {


            function onPageLoad()
            {

                var $url_parameters = get_url_parameters();

                if($url_parameters.hasOwnProperty('id'))
                {
                    id = $url_parameters['id'];
                    vm.showInformation(dataTable, id);
                }
            }
            onPageLoad();


        });



        $('#sendEmailModal').on('shown.bs.modal', function () {
            load_email_address();
        });


        function load_email_address()
        {
            
            var customer_id = $("#customer_id").val();

            if(customer_id)
            {

                var url = '{{ route("get_contact_emails_by_customer_id", ":id") }}';
                url = url.replace(':id', customer_id);

                $.post(url, { customer_id: customer_id, "_token": "{{ csrf_token() }}" })
                .done(function( response ) {

                    if(response.status == 1)
                    {
                        records = response.data;

                        var email = $( ".email" );
                        
                        email.select2( {
                            theme: "bootstrap",
                            minimumResultsForSearch: -1,
                            placeholder: function(){
                                $(this).data('placeholder');
                            },
                            maximumSelectionSize: 6,
                            data: records,
                            escapeMarkup: function(markup) {
                                return markup;
                              },
                            templateResult: function(data) {
                                return data.email + '<small class="form-text text-muted">' + data.name + '</small>';
                              },

                             templateSelection: function(data) {
                                return data.email ;
                              }
                        } );
                        email.css('width', '100%');
                            
                          
                    }

                });

                
            }
        }


    </script>
@endsection