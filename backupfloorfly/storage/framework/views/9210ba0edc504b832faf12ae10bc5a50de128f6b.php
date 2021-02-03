<style>
.cat-head
{
font-family: 'Open Sans', sans-serif;
  font-style: normal;
      font-weight: 400;

}

</style>


<?php $__env->startSection('head_title', stripslashes($blog->title) .' | '.getcong('site_name') ); ?>
<?php $__env->startSection('head_description', substr(strip_tags($blog->description),0,200)); ?>
<?php $__env->startSection('head_image', asset($blog->feature)); ?>
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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
		<h4 class="cat-head">All Categories</h4><br>
		<ul class="blog-sidebar-menu">
		    
		    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		   <li class=" ">
		        <a href="<?php echo e(route('blog-category.single',['slug'=>$result->slug])); ?>" class="list-group-item list-group-item-action list-group-item-success" style="color:black;"><?php echo e($result->name); ?> <span  style="float:right; "><?php echo e($result->blogs->count()); ?></span>   </a>

		    </li>
		     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</ul>
		</div>
    </aside>
    <div class="col-sm-8">
        <div class="content-box">
  		 <div class="single-blog-posts-body">
            <div class="blog-thumbs">
				<br>
             <img src="<?php echo e(asset($blog->feature)); ?>" alt="<?php echo e($blog->title); ?>" class="img-thumbnail">    
            </div>
			<br>
            <div class="blog-contents">
				<h1 class="blog-title" style="text-align:left;"><?php echo e($blog->title); ?></h1>
               <!-- <ul class="post-info-header list-inline">
                  
                  <li>Posted on:  <b><?php echo e($blog->created_at->format('d-m-y')); ?></b></li>
                </ul>-->
				
				<br>
				<div class="author-box">
					<div class="row">
						<div class="col-md-3">
						<div class="author-img text-center">
								 <img src="<?php echo e(URL::asset('site_assets/img/kazi-manzur.jpg')); ?>" class="rounded-circle" alt="author image" style=" height: 120px; ">
							</div>
						</div>
<br>
						<div class="col-md-9">
							<div class="author-info" style="margin-top:50px;">
								<small><em>Written by,</em></small>

								<p><strong>Kazi Manzur Ahmed,</strong><br><small>CEO, Floorfly Realtor Ltd.</small></p>

			
							
							</div>
						</div>
					</div>
					
				</div>
                <span class="blog-description">
                    <?php echo $blog->description; ?>

                </span>
            </div>
           
            <div class="related-post mt-3">
                <div class="heading">
                    <h4 class="heading-title">Related Jobs</h4>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $related->where('status',1)->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <div class="card relatedpost">
                         <a href="<?php echo e(route('blog.single',['slug'=> $row->slug])); ?>">        
                          <img src="<?php echo e(asset($row->feature)); ?>" class="card-img-top img-thumbnail" alt="<?php echo e($row->title); ?>">
                          <div class="card-body">
                            <h4 class="card-title" style="color: #000;font-weight: bold;"><?php echo e($row->title); ?></h4>
                          </div>
                          </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

             </div> <!-- related-post-->
             
              
        </div>
   
    </div>
    </div>
  
  </section>

 
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/blogs/single-blog.blade.php ENDPATH**/ ?>