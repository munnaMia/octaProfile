<?php

use Core\Util;

?>
<main class="col-span-6 w-full bg-transparent h-full">
    <div class="bg-white w-full  flex flex-col px-2 py-2.5 overflow-y-auto scroll-smooth h-full">
        <!-- form to upload a post -->
        <?php Util::loadView('partials/post_form.php') ?> 

        <?php Util::loadView('partials/post.php') ?>
        <?php Util::loadView('partials/post.php') ?>
        <?php Util::loadView('partials/post.php') ?>
        <?php Util::loadView('partials/post.php') ?>
        
    </div>
</main>