<?php

use Core\Util;

Util::loadView("partials/head.php"); ?>

<div class="w-full h-screen flex items-center justify-center col-span-full">
    <div class="max-w-md w-full text-center">

        <h1 class="text-9xl font-extrabold gradient-text mb-4 tracking-tighter bg-linear-to-r from-blue-500 to-fuchsia-600 bg-clip-text text-transparent"><?= $attributes['status'] ?></h1>

        <h2 class="text-2xl font-extrabold text-slate-900 mb-3">
            Something's went wrong.
        </h2>

        <p class="text-slate-500 mb-10 leading-relaxed">
            <?= $attributes['msg'] ?>
        </p>

        <!-- Action Button based on Octa+ Premium Style -->
        <div class="space-y-4">
            <a href="/" class="inline-block w-full py-4 px-8 text-white font-bold rounded-2xl bg-linear-to-r from-blue-500 to-fuchsia-600 ">
                Back to OctaProfile
            </a>

            <button onclick="window.history.back()" class="block w-full text-sm font-semibold text-slate-400 hover:text-slate-600 transition-colors">
                Go Back
            </button>
        </div>

        <!-- Footer Reference -->
        <div class="mt-20 pt-8 border-t border-slate-100">
            <p class="text-[11px] text-slate-400 uppercase tracking-widest font-semibold">
                &copy; 2026 OctaProfile, Inc.
            </p>
        </div>
    </div>
</div>

<?php Util::loadView("partials/foot.php"); ?>