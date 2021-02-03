  <!-- Top Footer-->
  <section id="top-footer">
      <div class="inner-container container">
   

             <div class="col-md-8 col-md-offset-2">

                 <div class="request-form">

                    <div class="request-form-heading">
                      <h2 style="text-center"><?php echo e(trans('words.request_title')); ?></h2> 
                    </div>  

                    <?php if(Session::has('error_flash_message')): ?>
                          <div class="alert alert-danger">                  
                              <?php echo e(Session::get('error_flash_message')); ?>

                          </div>
                        <?php endif; ?>
                        <?php if(Session::has('flash_message_client')): ?>
                          <div class="alert alert-success">                 
                              <?php echo e(Session::get('flash_message_client')); ?>

                          </div>
                        <?php endif; ?>

                    <?php echo Form::open(array('url' => array('request_submit'),'name'=>'search_form','id'=>'request-form','role'=>'form')); ?>   
                    <meta name="_token" content="<?php echo csrf_token(); ?>"/>
                      <!-- <input type="text" name="requirement" hidden> -->
                      
                       <div class="row">
                        <div class="col-xs-6">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" name="name"  placeholder="<?php echo e(trans('words.name')); ?>" required>
                          </div>
                        </div>  

                        <div class="col-xs-6">
                          <div class="form-group agr-fields">
                            <input type="email" class="form-control" name="email"  placeholder="<?php echo e(trans('words.email')); ?>" required>
                          </div>
                        </div>  
                      </div>

                      <div class="row">
                       <div class="col-xs-6">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" name="contact" placeholder="<?php echo e(trans('words.contact')); ?>" required>
                          </div>
                        </div> 


                        <div class="col-xs-6">
                          <div class="form-group agr-fields">
                            <input type="text" class="form-control" name="size"  placeholder="<?php echo e(trans('words.size')); ?>" required>
                          </div>
                        </div>  
                      </div>  

                      <div class="row">
                             <div class="col-xs-12">
                                <div class="form-group agr-fields">
                                    <input type="text" class="form-control" name="location"  placeholder="<?php echo e(trans('words.location')); ?>" required>
                                </div>
                            </div>  

                      </div> 

                      <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group agr-fields">
                                  <select class="form-control" name="requirement">
                                    <option value="">Property Status</option>
                                    <option value="Ready to Live">Ready to Live</option>
                                    <option value="Hand Over in 12m">Hand Over in 12m</option>
                                    <option value="Hand Over in 18m">Hand Over in 18m</option>
                                    <option value="Hand Over in 24m">Hand Over in 24m</option>
                                    <option value="Hand Over in 36m">Hand Over in 36m</option>
                                  </select>    
                                </div>
                            </div>  

                            <div class="col-xs-6">
                                <div class="form-group inquires-btn">
                                    <button class="btn btn-primary form-control"><?php echo e(trans('words.submit')); ?></button>
                                </div>
                            </div>
                      </div> 

                      <?php echo Form::close(); ?> 

                  </div>
        
        </div>

       
      </div>
    </section>
    <!--End of Top Footer --><?php /**PATH D:\xmapp\htdocs\floorfly5\resources\views/_particles/inquires.blade.php ENDPATH**/ ?>