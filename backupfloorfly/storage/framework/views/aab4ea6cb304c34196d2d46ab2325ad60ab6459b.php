<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo e($site_url); ?></loc>
    </url>
    <url>
        <loc><?php echo e($site_url); ?></loc>
        <changefreq>Daily</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc><?php echo e($site_url); ?>/properties</loc>
        <changefreq>Daily</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc><?php echo e($site_url); ?>/featured</loc>
        <changefreq>Daily</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc><?php echo e($site_url); ?>/sale</loc>
        <changefreq>Daily</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc><?php echo e($site_url); ?>/rent</loc>
        <changefreq>Daily</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc><?php echo e($site_url); ?>/agents</loc>
        <changefreq>Daily</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc><?php echo e($site_url); ?>/testimonials</loc>
        <changefreq>Daily</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc><?php echo e($site_url); ?>/about-us</loc>
        <changefreq>Daily</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc><?php echo e($site_url); ?>/contact-us</loc>
        <changefreq>Daily</changefreq>
        <priority>1</priority>
    </url>
    
    <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <url>
        <loc><?php echo e(url('properties/'.$property->property_slug.'/'.Crypt::encryptString($property->id))); ?></loc>
     </url>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
     
</urlset><?php /**PATH /home/crafyvzz/public_html/floorfly.com/resources/views/pages/sitemap.blade.php ENDPATH**/ ?>