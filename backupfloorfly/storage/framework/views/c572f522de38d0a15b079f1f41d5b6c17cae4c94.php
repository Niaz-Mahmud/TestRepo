<style>
.cat-head
{
	font-family: 'Open Sans', sans-serif;
      font-style: normal;
      font-weight: 400;

}

</style>





<?php $__env->startSection('head_title', trans('words.blog_title').' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection("content"); ?>
    <!--Breadcrumb Section-->
    <section class="breadcrumb-box" data-parallax="scroll" >
        <div class="inner-container container">
          
        </div>
    </section>
    <!--Breadcrumb Section-->

  <section class="main-container container">
  	<aside class="col-sm-4">
      <div class="sidebar-box sidebar-blog-cat">
		<h4 class="cat-head">All Categories</h4><br>
    		<ul class="blog-sidebar-menu">
    		    <?php $all_cats= \App\Blogcategory::all(); ?>
    		    <?php $__currentLoopData = $all_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    		  <li class=" ">
		        <a href="<?php echo e(route('blog-category.single',['slug'=>$result->slug])); ?>" class="list-group-item list-group-item-action list-group-item-success" style="color:black;"><?php echo e($result->name); ?> <span  style="float:right; "><?php echo e($result->blogs->count()); ?></span>   </a>

		    </li>

    		     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    		</ul>
		</div>
    </aside>

    <div class="col-sm-8">
      <!-- Properties -->
      <div class="content-box">
      <section class="property-listing boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
        <div class="inner-container clearfix">
      		     
              <?php if($blog_category->blogs->count()>0): ?>
                <?php $__currentLoopData = $blog_category->blogs->where('status',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                 <div class="property-box col-xs-12 col-sm-6 wow fadeInUp">
<ul class="post-info-header list-inline">
                  
                  <li><p style="color: rgb(170, 170, 170);"> <?php echo e($result->created_at->format('j-F-Y')); ?></p></li>
                </ul>
                    <div class="inner-box" style="margin: 0px 20px 10px 10px;">
        	          <a href="<?php echo e(route('blog.single',['slug'=> $result->slug])); ?>" class="img-container">
        
        	            <img src="<?php echo e(asset($result->feature)); ?>" alt="<?php echo e($result->title); ?>">
        
        	         
        	          </a>
        	          <div class="bottom-sec">
        	            <a href="<?php echo e(route('blog.single',['slug'=> $result->slug])); ?>" class="title"><?php echo e(Str::limit($result->title,35)); ?></a>
        	          
        	       <!--     <div class="desc">
        	              <?php echo Str::limit($result->description,100); ?>

        	            </div>-->
        
        	         
        	          </div>
        	          <a href="<?php echo e(route('blog.single',['slug'=> $result->slug])); ?>" class="btn more-link"><?php echo e(trans('words.more_info')); ?></a>
        	        </div>
                  </div>
    
               
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                <h2 style="text-align:center"> Opps ! No Post Found. </h2>
                <?php endif; ?>
                
                
            </div>
        </section>
       
        </div>
    </div> 
  </section>

 
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/blogs/blog-category.blade.php ENDPATH**/ ?>