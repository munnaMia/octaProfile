<section class="bg-white rounded-3xl border border-slate-200 p-5 shadow-sm">
    <!-- user post form -->
    <form action="" method="post">
        <div class="flex gap-4">
            <img
                src="https://ik.imagekit.io/2quzumnrw/default-image.jpg?updatedAt=1773385459693"
                class="w-12 h-12 rounded-full object-cover bg-slate-100 shrink-0"
                alt="User profile img">
            <div class="flex-1 flex flex-col gap-4">
                <textarea
                    required
                    id="post"
                    name="post"
                    placeholder="What's happening?"
                    class="w-full bg-slate-50 border-none rounded-2xl p-4 focus:ring-2 focus:ring-blue-100 text-lg resize-none min-h-30 outline-none transition-all placeholder:text-slate-400"></textarea>

                <div class="flex items-center justify-between pt-2 border-t border-slate-50">
                    <div class="flex gap-1">
                        <button class="p-2 text-slate-500 hover:bg-slate-100 rounded-xl transition-colors flex items-center gap-2 group">
                            <i class="fa-regular fa-image w-5 h-5 text-blue-500 group-hover:scale-110 transition-transform"></i>
                            <span class="text-sm font-semibold">img</span>
                        </button>
                    </div>
                    <button type="submit" class="px-8 py-2.5 bg-blue-600 text-white rounded-xl font-bold hover:bg-blue-700 shadow-lg shadow-blue-100 transition-all active:scale-95">
                        Post
                    </button>
                </div>
            </div>
        </div>
    </form>
</section>