<?php
    $src=get_option_value('banner');
    if(isset($src) && $src['url']!=null ){
        $banner=$src['url'];
    }else{
        $banner=get_template_directory_uri().'/assets/images/header_banner.png';
    }
?>
<div class="container-full hero-section" style="background-image: url( '<?php echo $banner; ?>' );">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-2 text-light"><?php echo single_post_title();?></h1>
                
            </div>
        </div>
    </div>
</div>
