<x-main-layout>
    <div class="mx-auto max-w-7xl px-4 my-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
            <div class="sm:col-span-3">
                {{-- Registration section --}}
                <div class="pt-4 pb-6 px-6 bg-gray-50 rounded-md"> 
                    <div>
                        <div class="flex w-1/2 h-auto mx-auto my-8 items-center justify-center">
                            <img src="/migDaatgal.png" alt="migDaatgalLogo">
                        </div>
                        <div class="text-center my-4">
                            <!-- Title -->
                            <p class="text-2xl font-bold">
                                Өмгөөлөгчийн хариуцлагын даатгал
                            </p>
                            <!-- Description -->
                            <p class="text-gray-700 text-sm">
                                хамгийн шилдэг сонголт.
                            </p>
                        </div>
                         
                        <form class="max-w-xl mx-auto">
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="last_name"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Овог</label>
                                </div>
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Утасны
                                        дугаар</label>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="first_name"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Нэр</label>
                                </div>
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="id_number"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Регистрийн
                                        дугаар</label>
                                </div>
                            </div>

                            <!-- This input now spans the full width of two columns -->
                            <div class="relative z-0 w-full mb-5 group col-span-2">
                                <input type="text" name="license_number"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Мэргэжлийн
                                    үнэмлэхний дугаар</label>
                            </div>
                        </form>


                        {{-- Багцуудынх сонголт --}}
                        <h3 class="mb-5 text-2xl font-medium text-gray-900 text-center">Багц сонгох</h3>
                        <ul class="grid w-full gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                            <li class="shadow-lg">
                                <input type="radio" id="hosting-small" name="hosting" value="hosting-small"
                                    class="hidden peer" required />
                                <label for="hosting-small"
                                    class="radio-label">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">10,000,000 ₮</div>
                                        <div class="w-full">Хураамж 50,000 ₮</div>
                                    </div>
                                    <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M2 8l4 4L14 2" />
                                    </svg>
                                </label>
                            </li>
                            <li class="shadow-lg">
                                <input type="radio" id="hosting-big" name="hosting" value="hosting-big"
                                    class="hidden peer">
                                <label for="hosting-big"
                                    class="radio-label">
                                <div class="block">
                                        <div class="w-full text-lg font-semibold">20,000,000 ₮</div>
                                        <div class="w-full">Хураамж 90,000 ₮</div>
                                    </div>
                                    <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M2 8l4 4L14 2" />
                                    </svg>
                                </label>
                            </li>
                            <li class="shadow-lg">
                                <input type="radio" id="hosting-large" name="hosting" value="hosting-large"
                                    class="hidden peer">
                                <label for="hosting-large"
                                    class="radio-label">
                                <div class="block">
                                        <div class="w-full text-lg font-semibold">40,000,000 ₮</div>
                                        <div class="w-full">Хураамж 160,000 ₮</div>
                                    </div>
                                    <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M2 8l4 4L14 2" />
                                    </svg>
                                </label>
                            </li>
                        </ul>

                        {{-- Popup modal --}}
                        <div class="flex justify-center items-center my-8">
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="btn-primary flex justify-center" type="button">
                                Дэлгэрэнгүй гэрээтэй танилцах
                            </button>
                        </div>

                        {{-- Баталгаажуулалт --}}
                        <div class="flex items-center justify-center my-8">
                            <input id="checked-checkbox" type="checkbox" value=""
                                class="w-4 h-4 bg-white border-2 border-gray-300 rounded focus:outline-none checked:bg-green-500 checked:border-green-500">
                            <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">Гэрээтэй
                                уншиж танилцсан</label>
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="btn-primary">Төлөх</button>
                        </div>
                        
                    </div>
                </div>
            </div>

            {{-- Popup Modal --}}
            <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full backdrop-blur-sm">
                <div class="relative p-4 w-full max-w-4xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative rounded-lg bg-white">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-black">Гэрээний нөхцөл</h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <div class="space-y-4 p-4">
                                <ul>
                                    <li>НЭГ. НИЙТЛЭГ ҮНДЭСЛЭЛ</li>
                                    <ul>
                                        <li>1.1 Энэхүү даатгалын гэрээгээр (цаашид “Гэрээ” гэх) нэг талаас даатгуулагч нь мэргэжлийн үйл ажиллагааны явцад болгоомжгүйгээр алдаа гаргасны улмаас үйлчлүүлэгчдэд учирсан хохирлыг хариуцан арилгах үүрэг, хариуцлага хүлээх явдлаас даатгуулж, даатгалын хураамж төлөх, нөгөө талаас даатгагч нь даатгалын тохиолдол үүссэн үед гарсан хохирлыг Гэрээнд заасан нөхцөлийн дагуу нөхөн төлөхтэй холбоотой харилцааг зохицуулна.</li>
                                        <li>1.2 Даатгагч, Даатгуулагч нар (цаашид хамтад нь “Талууд” гэх) Гэрээг хэрэгжүүлэхдээ Монгол улсын үндсэн хууль, Иргэний хууль, Даатгалын тухай хууль болон холбогдох бусад хууль тогтоомжийг дагаж мөрдөнө.</li>
                                    </ul>
                                    <li>ХОЁР. НЭР ТОМЪЁОНЫ ТАЙЛБАР</li>
                                    <ul>
                                        <li>2.1 Талууд гэрээнд заасан нэр томьёог дараах утгаар ойлгоно. Үүнд:</li>
                                        <ul>
                                        <li>2.1.1 “Даатгагч” - Даатгалын тухай хуулийн дагуу даатгалын үйл ажиллагаа эрхлэх тусгай зөвшөөрөл авсан “МИГ даатгал” ХХК-ийг;</li>
                                        <li>2.1.2 “Даатгуулагч” - өөрийн ашиг сонирхлын төлөө даатгалын зүйлээ даатгуулж, даатгагчтай гэрээ байгуулсан өмгөөлөгчийн мэргэжлийн үйл ажиллагаа эрхлэх тусгай зөвшөөрөл бүхий иргэнийг;</li>
                                        <li>2.1.3 “Өмгөөлөгч” - Хуульч сонгон шалгаруулах тухай хуульд заасан сонгон шалгаруулалтад тэнцэж, гэрчилгээ авсан этгээд, ял шийтгэлгүй, тогтоосон журмын дагуу мэргэшлийн шалгаруулалтад орж, өмгөөллийн үйл ажиллагаа эрхлэх тусгай зөвшөөрөл авсан иргэнийг;</li>
                                        <li>2.1.4 “Мэргэжлийн үйл ажиллагаа” - даатгуулагчийн, тусгай мэргэжил, арга зүй, туршлага, дадлага шаардсан, эрх бүхий байгууллагаас олгосон тусгай зөвшөөрлийн үндсэн дээр гүйцэтгэж буй даатгалын гэрээнд заасан үйл ажиллагааг;</li>
                                        <li>2.1.5 “Даатгалын зүйл” - Даатгуулагчийн мэргэжлийн үйл ажиллагааны улмаас үүссэн хуулийн хариуцлага;</li>
                                        <li>2.1.6 “Даатгалын эрсдэл” - даатгалын зүйлд хохирол учруулж болох гэрээнд заасан нөхцөлийг;</li>
                                        <li>2.1.7 “Даатгалын тохиолдол” - даатгалын эрсдэлийн улмаас даатгалын зүйлд хохирол учрах, тохиролцсон болзол бүрдэхийг;</li>
                                        <li>2.1.8 “Хамрагдахгүй нөхцөл” - Даатгагч нь даатгуулагчид нөхөн төлбөр олгохгүй нөхцөлүүдийг;</li>
                                        <li>2.1.9 “Даатгалын хураамж” - Даатгуулагч даатгалын зүйлээ даатгуулсны төлөө Даатгагчид төлөх төлбөрийг;</li>
                                        <li>2.1.10 “Нөхөн төлбөр” - даатгалын тохиолдол үүссэн нөхцөлд даатгуулагчид олгох мөнгөн хөрөнгийг;</li>
                                        <li>2.1.11 “Даатгалын үнэлгээ” - даатгалын зүйлийн талууд харилцан тохиролцож тогтоосон мөнгөн илэрхийллийн хэмжээг;</li>
                                        <li>2.1.12 “Өөрийн хүлээх хариуцлага” - гэрээний дагуу даатгалын тохиолдол үүссэн нөхцөлд даатгалын зүйлд учирсан хохирлоос даатгуулагчийн хариуцах хэсгийг;</li>
                                        <li>2.1.13 “Үйлчлүүлэгч” - даатгалын гэрээнд оролцоогүй боловч гэрээний дагуу даатгалын тохиолдол үүссэн нөхцөлд эрх ашиг нь хөндөгдөж болзошгүй этгээд буюу даатгуулагчийн үйлчлүүлэгчийг;</li>
                                        <li>2.1.14 “Хүндэтгэн үзэх шалтгаан” - давагдашгүй хүчин зүйлс, хүнд нөхцөл байдал зэрэг талуудын хүсэл зоригоос үл хамааран гэрээний эрх, үүргийг хэрэгжүүлэх боломжгүй нөхцөл байдал үүссэнийг;</li>
                                        <li>2.1.15 “Шүүхээр шийдвэрлүүлэхтэй холбогдон гарах зардал” - даатгалын тохиолдлын улмаас учирсан хохирлыг төлүүлэх нэхэмжлэлийн дагуу үүссэн хэргийг хянан шийдвэрлэхтэй холбогдон гарсан, шүүхээр нөхөн төлүүлэхээр тогтоосон зардлыг;</li>
                                        <li>2.1.16 “Эрх бүхий байгууллага” - даатгалын зүйлд хохирол учирсан нөхцөлд хуулийн дагуу тухайн тохиолдлыг шалгах, шийдвэрлэх байгууллага, алба тушаалтныг;</li>
                                        </ul>
                                    </ul>
                                    <li>ГУРАВ. ДААТГАЛЫН ЗҮЙЛ</li>
                                    <ul>
                                        <li>3.1 Даатгалын зүйл нь даатгуулагч мэргэжлийн ажил үүргээ гүйцэтгэх явцдаа мэргэжлийн үйл ажиллагааны улмаас үйлчлүүлэгчийн эд хөрөнгө, амь нас, эрүүл мэндэд хохирол учруулсан тохиолдолд хуулийн дагуу хүлээх хариуцлага байна.</li>
                                    </ul>
                                    <li>ДӨРӨВ. ДААТГАЛЫН ЭРСДЭЛ</li>
                                    <ul>
                                        <li>4.1 Даатгуулагчийн ажил мэргэжлийн алдаа, мэргэжлийн ур чадвар дутагдсанаас болон санамсар болгоомжгүйн улмаас өмгөөллийн үйл ажиллагаанд алдаа гаргах.</li>
                                        <li>4.2 Даатгуулагч үйлчлүүлэгчийнхээ гаргасан хүсэлтийг хуульд заасан журмын дагуу хангаж ажиллаагүйгээс учирсан хохирол, зардал.</li>
                                        <li>4.3 Даатгуулагч үйлчлүүлэгчдээ эрх зүйн буруу зөвлөгөө өгснөөс үүдэн гарсан хохирол, зардал.</li>
                                    </ul>
                                    <li>ТАВ. ДААТГАЛЫН ҮНЭЛГЭЭ, ДААТГАЛЫН ХУРААМЖ</li>
                                    <ul>
                                        <li>5.1 Даатгалын үнэлгээг талууд харилцан тохиролцож даатгалын мэдээлэл хэсэгт тусгав.</li>
                                        <li>5.2 Даатгалын хураамжийн дүнг даатгалын үнэлгээнээс хамаарч бодон даатгалын мэдээлэл хэсэгт тусгав.</li>
                                        <li>5.3 Даатгалын нөхөн төлбөр олгосон хэмжээгээр даатгалын зүйлийн үнэлгээ буурах бөгөөд даатгуулагч зохих хураамжийг нөхөн төлснөөр даатгалын үнэлгээг сэргээж болно.</li>
                                    </ul>
                                    <li>ЗУРГАА. ДААТГАЛЫН ГЭРЭЭНИЙ ХУГАЦАА</li>
                                    <ul>
                                        <li>6.1 Даатгалын хүчинтэй хугацаа нь даатгалын мэдээлэл хэсэгт заасан даатгалын эхлэх болон дуусах огноогоор тодорхойлогдоно.</li>
                                        <li>6.2 Талуудын эрх бүхий этгээд гарын үсэг зурж, даатгалын хураамж төлөгдсөн тохиолдолд гэрээ хүчин төгөлдөр үйлчилнэ.</li>
                                        <li>6.3 Даатгалын гэрээг сонгон шалгаруулалтаар шинэчлэн байгуулахгүй бол өмнөх гэрээний хугацаа дууссан өдөр Даатгалын гэрээ хүчинтэй биш болно.</li>
                                    </ul>
                                    <li>ДОЛОО. ДААТГАЛЫН ТОХИОЛДОЛ</li>
                                    <ul>
                                    <li>7.1 Даатгалын тохиолдол нь даатгалын эрсдэл үүссэн тохиолдолд даатгалын хураамж төлөгдсөн, гэрээний хүчинтэй хугацаанд даатгалын зүйлд хохирол учрах явдал юм.</li>
                                    <li>7.2 Даатгалын тохиолдол үүссэн тохиолдолд даатгуулагч тухайн хохиролтой холбогдох бүх баримт материалыг даатгагчид хурдан хугацаанд ирүүлэх үүрэгтэй байна.</li>
                                    </ul>
                                    <li>НАЙМ. ХАМГИЙН ОЛОН УТГА</li>
                                    <ul>
                                    <li>8.1 Энэхүү гэрээний бүх нэр томьёог талууд харилцан ойлгох ба Гэрээнд заагдсан аливаа тодорхойлолт болон зүйлүүд нь энэ гэрээний нөхцөлд оршин тогтнох болно.</li>
                                    <li>8.2 Хэрэв гэрээнд заагдсан нэр томьёог утгагүйгээр гүйцэтгэх боломжгүй гэж үзвэл талууд өөрөөр тохиролцож болно.</li>
                                    </ul>
                                    <li>ЕРӨНДӨГ. ХАРИЛЦААНЫ БАЙГУУЛЛАГА</li>
                                    <ul>
                                    <li>9.1 Гэрээний нөхцөл, хэрэгжилтийг хянах үүрэгтэй талууд харилцаагаа биечлэн, шууд холбоо барьж, үүрэг хариуцлагыг биелүүлэх шаардлагатай байна.</li>
                                    <li>9.2 Гэрээний үүрэг хариуцлагыг биелүүлэхэд аливаа шүүхийн шийдвэр, тайлбар, хүсэлт шаардлага гарсан тохиолдолд талууд зохих арга хэмжээг авч хэрэгжүүлнэ.</li>
                                    </ul>
                                    <li>АРВАН. САНАМЖ</li>
                                    <ul>
                                    <li>10.1 Гэрээний нөхцөлийг өөрчлөх шаардлагатай бол талууд үүнийг зөвшилцөх ба зөвшилцсөнөөр шинэчлэгдсэн гэрээ хүчинтэй байна.</li>
                                    <li>10.2 Гэрээний талууд гэрээний хэрэгжилттэй холбоотой аливаа маргааныг зохицуулахад хамтран ажиллах үүрэгтэй байна.</li>
                                    </ul>
                                    <li>АРВАН НЭГ. ГЭРЭЭНИЙ ТАЛУУДЫН ХАРИЛЦАА</li>
                                    <ul>
                                    <li>11.1 Энэхүү гэрээг байгуулахтай холбоотой бүх үйлдэл, харилцаа нь хоёр талын харилцан ойлголцол, ёс зүй, хууль ёсны хэм хэмжээнд үндэслэгдэнэ.</li>
                                    <li>11.2 Гэрээг хэрэгжүүлэх явцад үүссэн аливаа асуудлыг талууд анхааралтай, шударгаар шийдвэрлэх үүрэгтэй.</li>
                                    </ul>
                                </ul>
                                {{-- accord --}}
                                <div>
                                    <button class="accord-btn" aria-expanded="false" data-accordion-target="#card1">
                                        <p class="mr-2">Гэрээг харах</p>
                                        <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                                        </svg>
                                    </button>
                                    <div id="card1" class="hidden bg-white p-4 shadow-md rounded-lg">
                                        <img src="/insurance_img1.png" alt="Example Image" class="w-full rounded-lg">
                                        <img src="/insurance_img2.png" alt="Example Image" class="w-full rounded-lg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="default-modal" type="button" class="btn-primary">Хаах</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-1 ">
                <div class="pt-4 pb-6 px-4 bg-gray-50 rounded-md ">
                    sidebar
                </div>
            </div>
        </div>
    </div>
</x-main-layout>

<script>
    // Toggle modal visibility when button with data-modal-toggle is clicked
    document.querySelectorAll('[data-modal-toggle]').forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-target');
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex');
        });
    });

    // Close modal when button with data-modal-hide is clicked
    document.querySelectorAll('[data-modal-hide]').forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.fixed');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    });

    // Close modal when clicking outside the modal content (on the backdrop)
    document.addEventListener('click', (event) => {
        // Check if the click was on the backdrop (outside the modal content)
        if (event.target.classList.contains('fixed') && !event.target.closest('.modal-content')) {
            const modal = event.target;
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });

    // Accordion functionality
    document.addEventListener("DOMContentLoaded", () => {
        const accordionButtons = document.querySelectorAll('[data-accordion-target]');
        
        accordionButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const targetId = button.getAttribute("data-accordion-target");
                const targetElement = document.querySelector(targetId);
                
                const isExpanded = button.getAttribute("aria-expanded") === "true";
                
                // Toggle visibility
                button.setAttribute("aria-expanded", !isExpanded);
                targetElement.classList.toggle("hidden");
            });
        });
    });
</script>
