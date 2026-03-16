<!-- right aside -->
<aside class="col-span-3 w-full bg-transparent pl-2">
    <div class="bg-white w-full h-full">
        <div class="flex flex-col w-full h-screen justify-between items-start">
            <div>
                <!-- addvertisment section -->
                <section class="px-2 py-3 ">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-bold text-xl">Promoted</h3>
                        <a href="#" class="text-xs text-gray-400 hover:underline">Options</a>
                    </div>

                    <div class="bg-linear-to-br from-indigo-600 to-purple-700 rounded-3xl p-5 text-white shadow-lg shadow-indigo-100 relative overflow-hidden group">
                        <!-- Decorative background circle -->
                        <div class="absolute -right-4 -top-4 w-24 h-24 bg-white/10 rounded-full transition-transform group-hover:scale-110"></div>

                        <span class="inline-block bg-white/20 backdrop-blur-md text-[10px] uppercase font-bold px-2 py-0.5 rounded-md mb-3">Featured Ad</span>
                        <h4 class="font-bold text-lg leading-tight mb-2">Upgrade to Octa+ Premium</h4>
                        <p class="text-sm text-indigo-100 mb-4">Unlock advanced analytics and verified badge for your profile.</p>
                        <a href="#" class="cursor-pointer">
                            <button class="w-full bg-white text-indigo-700 font-bold py-2 rounded-xl text-sm hover:bg-gray-100 transition-colors">
                                Learn More
                            </button>
                        </a>
                    </div>
                </section>


                <!-- person recommendation -->
                <section class="px-4 py-3 w-full">
                    <div class="flex items-center justify-between mb-4 w-full">
                        <h3 class="font-bold text-lg">Who to follow</h3>
                        <a href="#" class="text-xs text-blue-600 font-semibold hover:underline">Show more</a>
                    </div>

                    <div class="space-y-4">
                        <!-- User Suggestion 1 -->
                        <div class="flex items-center justify-between group">
                            <div class="flex items-center gap-3">
                                <div class="relative">
                                    <img src="https://i.pravatar.cc/150?u=a" class="w-11 h-11 rounded-full border border-gray-100 object-cover" alt="User">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>
                                </div>
                                <div class="min-w-0">
                                    <div class="flex items-center gap-1">
                                        <h4 class="font-bold text-sm truncate">Alex Rivera</h4>
                                    </div>
                                    <p class="text-xs text-gray-500 truncate">@arivera_design</p>
                                </div>
                            </div>
                            <button class="bg-black text-white text-xs font-bold px-4 py-2 rounded-full hover:bg-gray-800 transition-all">
                                Follow
                            </button>
                        </div>

                        <!-- User Suggestion 2 -->
                        <div class="flex items-center justify-between group">
                            <div class="flex items-center gap-3">
                                <img src="https://i.pravatar.cc/150?u=b" class="w-11 h-11 rounded-full border border-gray-100 object-cover" alt="User">
                                <div class="min-w-0">
                                    <h4 class="font-bold text-sm truncate">Sarah Chen</h4>
                                    <p class="text-xs text-gray-500 truncate">@schen_tech</p>
                                </div>
                            </div>
                            <button class="border border-gray-200 text-black text-xs font-bold px-4 py-2 rounded-full hover:bg-gray-50 transition-all">
                                Follow
                            </button>
                        </div>

                        <!-- User Suggestion 3 -->
                        <div class="flex items-center justify-between group">
                            <div class="flex items-center gap-3">
                                <img src="https://i.pravatar.cc/150?u=c" class="w-11 h-11 rounded-full border border-gray-100 object-cover" alt="User">
                                <div class="min-w-0">
                                    <h4 class="font-bold text-sm truncate">Jordan Smith</h4>
                                    <p class="text-xs text-gray-500 truncate">@jsmith_builds</p>
                                </div>
                            </div>
                            <button class="border border-gray-200 text-black text-xs font-bold px-4 py-2 rounded-full hover:bg-gray-50 transition-all">
                                Follow
                            </button>
                        </div>
                    </div>
                </section>
            </div>


            <!-- footer section -->
            <?php require "footer.php"; ?>
        </div>
    </div>
</aside>