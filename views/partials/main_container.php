<?php

use Core\Util;

?>
<main class="col-span-6 w-full bg-transparent h-full">
    <div class="bg-white w-full  flex flex-col px-2 py-2.5 overflow-y-auto scroll-smooth h-full">
        <!-- form to upload a post -->
        <?php Util::require('views/partials/post_form.php') ?> 

        <?php Util::require('views/partials/post.php') ?>
        <?php Util::require('views/partials/post.php') ?>
        <?php Util::require('views/partials/post.php') ?>
        <?php Util::require('views/partials/post.php') ?>
        
    </div>
</main>