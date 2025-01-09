<x-main-layout>
    <style>
        .texts li {
            display: none;
            opacity: 0;
            transition: opacity 1s;
        }

        .texts li.active {
            display: block;
            opacity: 1;
        }
    </style>

    <div class="mx-auto max-w-7xl px-4 my-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
            <div class="sm:col-span-3">
                <div class="pt-4 pb-6 px-6 bg-gray-50 rounded-md">
                    <div class="bg-gray-50 py-8">
                        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- First Box -->
                            <div class="bg-white rounded-lg shadow-lg p-6">
                                <div class="border-b pb-4">
                                    <h3 class="text-lg font-semibold text-gray-700">Өмгөөлөгчийн хариуцлагын даатгал</h3>
                                    <p class="text-sm text-gray-500">Өмгөөлөгчийн хариуцлагын даатгал / 1 жил</p>
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
                                <div class="mt-6 flex flex-col items-start space-y-4">
                                    <!-- Payment Methods -->
                                    <button class="btn-primary py-2 px-4 text-sm w-1/2">
                                        <a href="{{ route('daatgal.qpay') }}">QPay ээр төлөх</a>
                                    </button>
                                    <button class="btn-primary py-2 px-4 text-sm w-1/2">
                                        <a href="{{ route('daatgal.qpay') }}">SocialPay ээр төлөх</a>
                                    </button>
                                    <button class="btn-primary py-2 px-4 text-sm w-1/2">
                                        <a href="{{ route('daatgal.qpay') }}">Storeray хувааж төлөх</a>
                                    </button>
                                </div>
                            </div>

                            <!-- Second Box -->
                            <div class="bg-white rounded-lg shadow-lg p-6">
                                <div class="border-b pb-4">
                                    <div>
                                        <img class="mt-5 w-40 h-10 mx-auto" src="/migDaatgal.png" alt="Logo">
                                    </div>
                                </div>

                                <div class="slider-text mt-5 text-lg">
                                    <h5>ДААТГУУЛАХ АМАРХАН БОЛЛОО</h5>
                                    <div class="flex flex-no-wrap gap-8 justify-center">
                                        <h1 class="display-4 font-semibold mt-6 text-2xl">ЧУХАЛ БҮХНЭЭ</h1>
                                        <div class="signature mt-8 text-xl" aria-live="polite">
                                            <span class="word1" style="display: inline-block;"></span>
                                            <ul class="texts">
                                                <li data-out-effect="fadeOut" data-out-shuffle="true">Даатгуул</li>
                                                <li data-in-effect="fadeIn">Хайрла</li>
                                                <li data-in-effect="fadeIn">Хамгаал</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-1">
                <div class="pt-4 pb-6 px-4 bg-gray-50 rounded-md">
                    Sidebar
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const texts = document.querySelectorAll(".texts li");
            let currentIndex = 0;

            function showNextText() {
                texts[currentIndex].classList.remove("active");
                currentIndex = (currentIndex + 1) % texts.length;
                texts[currentIndex].classList.add("active");
            }

            if (texts.length > 0) {
                texts[currentIndex].classList.add("active");
                setInterval(showNextText, 2000);

            }
        });
    </script>
</x-main-layout>
