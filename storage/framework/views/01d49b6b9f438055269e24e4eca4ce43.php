<div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title center">
                    <span><em></em></span>
                    <h2>Explore Kadava</h2>
                    <p>
                        Kadava is a product research platform that helps
                        dropshippers, marketers and ecommerce guys spy
                        on ads in the space
                        (Facebook, InstaGram,Tiktok Twitter, reddit, Pinterest, youtube/google)

                    </p>
                </div>
                <div class="row">

                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="strip">
                        <figure>
                                <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
                                <?php if($ad->video_url): ?>
                                <div class="ad-video">
                                    <a href="<?php echo e($ad->video_url); ?>">Watch Video</a>
                                </div>
                                <?php endif; ?>
                                <a href="<?php echo e($ad->page_url); ?>" class="strip_info">
                                    <div class="item_title">
                                        <h3><?php echo e($ad->title); ?></h3>
                                        <p class="card-text"><?php echo e($ad->content); ?></p>
                                    </div>
                                </a>
                        </figure>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Appointment"><i class="icon_calendar"></i> <?php echo e($ad->fetched_at); ?></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Available Chat"><i class="icon_like"></i> <?php echo e($ad->likes_count); ?></a></li>
                            <li>
                                <div class="score"><span>Shared<em><?php echo e($ad->shared_count); ?></em></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				<!-- /strip grid -->

                </div>
                <!-- /row -->
                <p class="text-center add_top_30"><a href="<?php echo e(route('ad_search')); ?>" class="btn_1 medium">Start Searching</a></p>
            </div>
            <!-- /container -->
        </div>
<?php /**PATH C:\laragon\www\Kadava-New\resources\views/frontend/layouts/explore.blade.php ENDPATH**/ ?>