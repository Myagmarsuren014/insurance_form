<x-main-layout>
    <div class="mx-auto max-w-7xl px-4 my-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
            <div class="sm:col-span-3">
                <div class="pt-4 pb-6 px-6 bg-gray-50 rounded-md"> <!-- px-6 py-4 bg-white rounded-md -->
                    <div>
                        test form
                        <a href="{{ route('daatgal.next') }}" class="btn-primary">Next page</a>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-1 ">
                <div class="pt-4 pb-6 px-4 bg-gray-50 rounded-md">
                    sidebar
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
