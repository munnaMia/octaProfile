<!-- left aside -->
<header class="col-span-3 w-full bg-transparent pr-2">
    <div class="bg-white w-full h-full">
        <div class="flex flex-col justify-between h-full">
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
                        <div class=" absolute left-0 inset-y-0 pl-3 flex justify-center items-center  text-gray-400 cursor-pointer">
                            <i class="fa-solid fa-magnifying-glass text-sm"></i>
                        </div>

                        <input
                            type="text"
                            name="search"
                            id="mainSearch"
                            placeholder="Search here..."
                            autocomplete="off"
                            class="w-full py-2 px-8 outline-none border border-gray-300 
                            placeholder:text-gray-400 rounded-full transition-all duration-300 bg-white focus:border-gray-200 focus:shadow-sm focus:placeholder:text-gray-500" />

                        <button
                            id="clearSearch"
                            class="absolute inset-y-0 right-0 text-gray-500 hover:text-red-500 pr-3 transition-colors duration-200 hidden">
                            <i class="fa-solid fa-circle-xmark text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- navbar container -->
                <div>
                    <ul>
                        <li><a href="#">
                                <div>
                                    <!-- here i will have to put a logo -->
                                </div>
                                <span>home</span>
                            </a></li>
                        <li><a href="#">
                                <div>

                                </div>
                                <span>profile</span>
                            </a></li>
                        <li><a href="#">
                                <div>

                                </div>
                                <span>massages</span>
                            </a></li>
                        <li><a href="#">
                                <div>

                                </div>
                                <span>notifications</span>
                            </a></li>
                        <li><a href="#">
                                <div>

                                </div>
                                <span>setting</span>
                            </a></li>
                        <li><a href="#">
                                <div>

                                </div>
                                <span>more</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- profile container -->
            <div class="">
                <div></div>
            </div>
        </div>
    </div>
</header>