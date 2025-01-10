<x-main-layout>
    <div class="mx-auto max-w-7xl px-4 my-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
            <div class="sm:col-span-3">
                <div class="pt-4 pb-6 px-6 bg-gray-50 rounded-md">
                    <div class="bg-gray-50 py-8 flex justify-center items-center">
                        <div class="max-w-lg rounded-lg shadow-lg p-6 ">
                            <div class="border-b pb-4">
                                <h3 class="text-lg font-semibold text-gray-700"> Өмгөөлөгчийн хариуцлагын даатгал
                                </h3>
                                <p class="text-sm text-gray-500"> Өмгөөлөгчийн хариуцлагын даатгал
                                    / 1 жил</p>
                            </div>


                            <div>
                                <img src="https://miro.medium.com/v2/resize:fit:1400/format:webp/1*A9YcoX1YxBUsTg7p-P6GBQ.png"
                                    alt="Example QR Code">
                            </div>

                            <div class="mt-4">
                                <p class="text-gray-600">
                                    <span class="font-semibold text-gray-800">Үнэ:</span> 160,00₮
                                </p>
                                <p class="text-gray-600">
                                    <span class="font-semibold text-gray-800">Эхлэх огноо:</span> 2025-01-08
                                </p>
                                <p class="text-gray-600">
                                    <span class="font-semibold text-gray-800">Дуусах огноо:</span> 2026-01-08
                                </p>
                            </div>
                            <div class="mt-6 flex flex-col items-center space-y-4">
                                <button class="btn-primary py-2 px-4 text-sm w-1/2 mx-auto">
                                    <a href="{{ route('daatgal.verified') }}">төлбөр баталгаажуулах</a>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-1">
                <div class="pt-4 pb-6 px-4 bg-gray-50 rounded-md">
                    sidebar
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
