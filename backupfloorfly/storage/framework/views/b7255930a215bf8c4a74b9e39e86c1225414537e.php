<div class="sidebar-box" id="contact-agent">
            <div class="widget-heading bg-yellow text-center">
                <h3><?php echo e(trans('words.contact_agents')); ?></h3>
            </div>

            <div class="box-content">
                <?php $agents=\app\User::where('usertype','Agents')->where('status','1')->orderBy('id', 'desc')->take(2)->get(); ?>

                <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="agent-box">
                    <div class="agent-top">
                        <div class="agent-image">
                          <?php if($agent->profile_image): ?>
                            <img src="<?php echo e(URL::asset($agent->profile_image)); ?>" alt="<?php echo e($agent->name); ?>">
                          <?php else: ?>
                          <img src="<?php echo e(URL::asset('site_assets/img/avatar.png')); ?>" alt="<?php echo e($agent->name); ?>">
                          <?php endif; ?>  
                          
                        </div>
                        
                        <div class="agent-contacts">
                            <ul class="list-inline agent-contact-list">
                                <li class="agent-phone"><a href="tel:+8801819767676"><i class="fa fa-phone"></i></a></li>
                                <li class="agent-whatsapp"><a href="https://wa.me/01819767676"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="agent-info">
                        <h2 class="agent-name"><?php echo e($agent->name); ?><h2>
                        <div class="ratting-box">
                          <ul class="list-inline"> 
                            <li class="ratting-count"><span>4.7</span></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                        </div>

                        <div class="agent-experience">
                          <p>Experience : <b>3 yrs</b></p>
                          <p>Sold : <b>5</b></p>
                          <p>Deals in Hand : <b>5</b></p>

                        </div>
                    </div>
                </div> <!--agent-box-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="view-agents pull-right"><a href="<?php echo e(URL::to('agents/')); ?>">Contact More >></a></div>
            </div>  
          </div> <!--sidebar-box--> <?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/_particles/agent_widget.blade.php ENDPATH**/ ?>