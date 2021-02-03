<?php if($paginator->lastPage() > 1): ?>
 
      <div class="pagination-box">
			<ul class="list-inline">
			    <li class="<?php echo e(($paginator->currentPage() == 1) ? ' disabled' : ''); ?>">
			        <a href="<?php echo e($paginator->url(1)); ?>"><i class="fa fa-angle-double-left"></i></a>
			    </li>
			    <?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
			        <li class="<?php echo e(($paginator->currentPage() == $i) ? ' active' : ''); ?>">
			            <a href="<?php echo e($paginator->url($i)); ?>"><?php echo e($i); ?></a>
			        </li>
			    <?php endfor; ?>
			    <li class="<?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>">
			        <a href="<?php echo e($paginator->url($paginator->currentPage()+1)); ?>" ><i class="fa fa-angle-double-right"></i></a>
			    </li>
			</ul>
	</div>
 
<?php endif; ?>

 <?php /**PATH /home/u975246985/domains/floorfly.com/public_html/resources/views/_particles/pagination.blade.php ENDPATH**/ ?>