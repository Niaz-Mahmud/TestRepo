
<!-- Modal -->
<div class="modal fade" id="contactAgentModel<?php echo e($property->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
         <button type="button" class="close agentContModelclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
       <div class="information-box property-agent-container text-center" id="ContactBox">
        <h3><?php echo e(trans('words.contact_agent')); ?></h3>
        <div class="box-content clearfix">

          <div class=" contact-form-container" id="agentscontact_sec">
            
            <?php echo Form::open(array('url'=>'agentscontact','method'=>'POST', 'name'=>'registration', 'id'=>'agent_contact_form')); ?>


            <input type="hidden" name="property_id" value="<?php echo e($property->id); ?>">
            <input type="hidden" name="enquiry_property" value="<?php echo e($property->property_name); ?>">
            <input type="hidden" name="lead_source" value="Website">
            <input type="hidden" name="property_location[]" value="<?php echo e($property->location); ?>">


            <div class="contact-form">
              <div class="field-box">
                <input type="text" placeholder="<?php echo e(trans('words.name')); ?> *" id="name" name="name">
                <?php if($errors->has('name')): ?>
                  <span style="color:#fb0303">
                      <?php echo e($errors->first('name')); ?>

                  </span>
                <?php endif; ?>
              </div>
              <div class="field-box">
                <input type="email" placeholder="<?php echo e(trans('words.email')); ?> *" id="email" name="email">
                <?php if($errors->has('email')): ?>
                  <span style="color:#fb0303">
                      <?php echo e($errors->first('email')); ?>

                  </span>
                <?php endif; ?>
              </div>
              <div class="field-box">
                <input type="text" placeholder="<?php echo e(trans('words.phone')); ?>" id="phone" name="phone">
              </div>
              <textarea id="message" name="message" placeholder="<?php echo e(trans('words.message')); ?> *">I would like to inquire about Property ID <?php echo e($property->product_code); ?> . Please contact me at your earliest convenience. </textarea>
              <?php if($errors->has('message')): ?>
                  <span style="color:#fb0303">
                      <?php echo e($errors->first('message')); ?>

                  </span>
                  <br><br>
                <?php endif; ?>
                <div class="button-group row no-gutters">
                <div class="col-4"><div class="btn-call-now-full"> <a href="tel:+8801819767676" type="button" class="btn btn-lg submit"><i class="fa fa-phone"></i> CALL</a></div></div>
                <div class="col-8"> <button type="submit" class="btn btn-lg submit" name="submit"><?php echo e('SEND EMAIL'); ?></button></div>
              </div>
            </div>
            <?php echo Form::close(); ?>


          </div>
        </div>
        </div> <!--/.contact-agent-->
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/_particles/enquiry_widget.blade.php ENDPATH**/ ?>