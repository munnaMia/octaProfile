<!-- left aside -->

<?php
// navbar options

use Core\Util;

$navPaths = [
    [
        'name' => 'home',
        'href' => '/',
        'icon' => '<i class="fa-solid fa-house"></i>'
    ],
    [
        'name' => 'profile',
        'href' => '/profile',
        'icon' => '<i class="fa-solid fa-circle-user"></i>'
    ],
    [
        'name' => 'massages',
        'href' => '/massages',
        'icon' => '<i class="fa-solid fa-message"></i>'
    ],
    [
        'name' => 'notifications',
        'href' => '/notifications',
        'icon' => '<i class="fa-solid fa-bell"></i>'
    ],
    [
        'name' => 'setting',
        'href' => '/setting',
        'icon' => '<i class="fa-solid fa-sun"></i>'
    ],
    [
        'name' => 'more',
        'href' => '/more',
        'icon' => '<i class="fa-solid fa-circle-info"></i>'
    ],
];
?>

<header class="col-span-3 w-full bg-transparent pr-2">
    <div class="bg-white w-full h-full">
        <div class="flex flex-col justify-between h-screen">
            <div class="flex flex-col">
                <!-- logo and search container -->
                <div class="flex flex-col p-4">
                    <!-- website logo and title section-->
                    <div class="flex flex-row justify-start items-center">
                        <a href="/">
                            <img
                                src="https://ik.imagekit.io/2quzumnrw/octaprofile_logo.png"
                                alt="website_logo"
                                srcset="/assets/img/logos/octaprofile_logo.png"
                                class="size-11" />
                        </a>
                        <a href="/">
                            <span class="text-2xl font-bold">OctaProfile</span>
                        </a>
                    </div>

                    <!-- search bar container  -->
                    <div class="mt-2 relative max-w-full ">
                        <div class=" absolute left-0 inset-y-0 pl-3 flex justify-center items-center  text-gray-500 cursor-pointer">
                            <i class="fa-solid fa-magnifying-glass text-sm"></i>
                        </div>

                        <input
                            type="text"
                            name="search"
                            id="mainSearch"
                            placeholder="Search here..."
                            autocomplete="off"
                            class="w-full py-2 px-8 outline-none border border-gray-300 placeholder:text-gray-400 rounded-2xl transition-all duration-200 bg-white focus:border-gray-200 focus:shadow-sm focus:placeholder:text-gray-500" />

                        <button
                            id="clearSearch"
                            class="absolute inset-y-0 right-0 text-gray-500 hover:text-red-500 pr-3 transition-colors duration-200 hidden">
                            <i class="fa-solid fa-circle-xmark text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- navbar container -->
                <div class="p-4 w-full ">
                    <nav>
                        <ul class="flex flex-col w-full">
                            <?php foreach ($navPaths as $path) : ?>
                                <li class="w-full">
                                    <a href="<?= $path['href'] ?>" class="flex flex-row my-0.5 px-2 py-1.5 rounded-2xl justify-start items-center text-base transition-all duration-200 text-gray-700 <?= Util::isUri($path['href']) ? "font-medium text-white bg-black" : "font-light hover:bg-gray-200 hover:text-black" ?>">
                                        <div class="min-w-7">
                                            <?= $path['icon'] ?>
                                        </div>
                                        <span class="tracking-wider capitalize "><?= $path['name'] ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- profile container -->
            <div class="w-full px-3 py-4">
                <div class="flex items-center justify-between w-full max-w-md rounded-3xl border transition-all duration-200 border-slate-300 bg-white px-3 py-4 hover:shadow-sm">
                    <!-- profile image container  -->
                    <div class="flex flex-row items-center gap-2 min-w-0">
                        <div class="overflow-hidden rounded-2xl size-14 min-h-14 min-w-14">
                            <img class="min-h-14 min-w-14 rounded-2xl object-cover ring-2 ring-slate-100" src="https://ik.imagekit.io/2quzumnrw/default-image.jpg?updatedAt=1773385459693" alt="Profile_image">
                        </div>

                        <!-- profile information -->
                        <div class="max-w-28">
                            <h2 class="truncate text-lg font-bold text-slate-900">Md munna mia</h2>
                            <p class="truncate text-xs text-slate-400">@malta_men</p>
                        </div>

                        <!-- followers numbers  -->
                        <div class="ml-4 shrink-0 text-center">
                            <span class="text-xl font-extrabold bg-linear-to-r from-blue-500 to-fuchsia-600 bg-clip-text text-transparent">
                                12.6k
                            </span>
                            <p class="text-xs text-gray-400 tracking-wide font-extralight">
                                followers
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>