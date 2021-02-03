<style>
.cat-head
{
	font-family: 'Open Sans', sans-serif;
      font-style: normal;
      font-weight: 400;

}

  
ul.blog-sidebar-menu li:nth-child(odd) {
background: #ecc807;
}

ul.blog-sidebar-menu li:nth-child(even) {
background: #f7e898;
}
ul.blog-sidebar-menu li{

  transition: background-color 0.5s ease;
}

ul.blog-sidebar-menu li:hover{
    background: green;
    opacity: 0.8;
    
}

.list-group-item{
  text-align: center;
 
 
}
.list-group-item a{
  color:black;
}
.list-group-item a:hover{
  color:white;
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
    <!-- <div class="container mt-3">
   
  
    <a href="<?php echo e(route('blog-post')); ?>" class="btn btn-primary"> Write Your Blog <i class="fa fa-plus"></i></a>
    
   
   
   
 </div> -->
 
  <section class="main-container container">
<br><br>
<h1 style="text-align:center;font-family: Open Sans;">Floorfly Blog: Connecting Ideas and People</h1>
<br>
  	<aside class="col-sm-4">
   
      <!--<div class="sidebar-box sidebar-blog-cat">-->
    
		<h4 class="cat-head">All Categories</h4><br>
		<ul class="blog-sidebar-menu">
    
		    
		    <?php $__currentLoopData = $allcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!--class="list-group-item list-group-item-action" style="color:black;"-->
         <li class="list-group-item" >
		        <a href="<?php echo e(route('blog-category.single',['slug'=>$result->slug])); ?>" class=""><?php echo e($result->name); ?> <span  style="float:right; "><?php echo e($result->blogs->count()); ?></span>   </a>
            

		    </li>
        
       
          
           

       
  
		

		     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
        
		</ul>
    <a href="#" class="list-group-item" style="margin-top:10px; height:50px; background-color:#2f5a39;font-size:22px; color:white; "> Write Your Blog <i class="fa fa-plus"></i></a>
		<!--</div>-->
    </aside>
   
    <div class="col-sm-8">
    
      <!-- Properties -->
      <div class="content-box">
      <section class="property-listing boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
        <div class="inner-container clearfix">
          <?php if($blogs->count()>0): ?>
              <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="property-box col-xs-12 col-sm-6  wow fadeInUp">
<ul class="post-info-header list-inline">
                  
                  <li><p style="color: rgb(170, 170, 170);"> <?php echo e($result->created_at->format('j-F-Y')); ?></p></li>
                </ul>
            <div class="inner-box" style="margin: 0px 20px 10px 10px;">
	          <a href="<?php echo e(route('blog.single',['slug'=> $result->slug])); ?>" class="img-container">

	            <img src="<?php echo e($result->feature); ?>" alt="<?php echo e($result->title); ?>">

	         
	          </a>
	          <div class="bottom-sec">
	            <a href="<?php echo e(route('blog.single',['slug'=> $result->slug])); ?>" class="title" style="font-size:14px;"><?php echo e(Str::limit($result->title,100)); ?></a>
	          
	          <div class="desc" style="font-size:11px;">
	              <?php echo Str::limit($result->description,130); ?>

 <a href="<?php echo e(route('blog.single',['slug'=> $result->slug])); ?>" class="btn more-link" >Read More</a>
	            </div> 

	         
	          </div>
       

	         
	        </div>
          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
            <h2  style="text-align:center"> Opps ! No Post Found. </h2>
            <?php endif; ?>
        </div>
        <!-- Pagination -->
        <div class="blog-pagination">
            <?php echo e($blogs->links()); ?>

        </div>
        <!-- End of Pagination -->
      </section>
      </div>
      <!-- End of Properties -->
    </div>
  
  </section>

 
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\backupfloorfly\resources\views/blogs/blogs.blade.php ENDPATH**/ ?>