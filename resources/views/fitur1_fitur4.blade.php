<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- @vite('resources/css/app.css') --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="w-[1440px] h-[1024px] relative bg-white">
        <div class="w-[157px] h-[1024px] left-0 top-0 absolute">
            <div
                class="w-[157px] h-[1024px] left-0 top-0 absolute bg-amber-600 rounded-tr-[30px] rounded-br-[30px] shadow">
            </div>
            <div class="w-[47px] h-[134px] left-[55px] top-[820px] absolute">
                <div class="w-[47px] h-[47px] left-0 top-[87px] absolute">
                    <div class="w-[47px] h-[47px] left-0 top-0 absolute bg-amber-500 rounded-[10px]"></div>
                </div>
                <div class="w-[47px] h-[47px] left-0 top-0 absolute">
                    <div class="w-[47px] h-[47px] left-0 top-0 absolute bg-amber-500 rounded-[10px]"></div>
                </div>
            </div>
            <div class="w-[77px] h-[0px] left-[40px] top-[780px] absolute border border-amber-500"></div>
            <div class="w-[47px] h-[221px] left-[55px] top-[412px] absolute">
                <div class="w-[47px] h-[47px] left-0 top-[174px] absolute">
                    <div class="w-[47px] h-[47px] left-0 top-0 absolute bg-amber-500 rounded-[10px]"></div>
                </div>
                <div class="w-[47px] h-[47px] left-0 top-[87px] absolute">
                    <div class="w-[47px] h-[47px] left-0 top-0 absolute bg-amber-500 rounded-[10px]"></div>
                </div>
                <div class="w-[47px] h-[47px] left-0 top-0 absolute">
                    <div class="w-[47px] h-[47px] left-0 top-0 absolute bg-amber-500 rounded-[10px]"></div>
                </div>
            </div>
            <div class="w-[77px] h-[133px] left-[40px] top-[170px] absolute">
                <img class="w-[69px] h-[69px] left-[4px] top-0 absolute rounded-[110px]"
                    src="https://via.placeholder.com/69x69" />
                <div
                    class="w-[77px] h-[35px] left-0 top-[64px] absolute text-center text-orange-100 text-[15px] font-semibold font-['Poppins']">
                    Firda</div>
                <div
                    class="w-[77px] h-[34px] left-0 top-[99px] absolute text-center text-orange-100 text-[10px] font-semibold font-['Poppins'] underline">
                    View Profile</div>
            </div>
            <div class="w-[77px] h-[0px] left-[40px] top-[145px] absolute border border-amber-500"></div>
            <img class="w-[110px] h-[55px] left-[24px] top-[45px] absolute rounded-[100px] border border-amber-600"
                src="https://via.placeholder.com/110x55" />
        </div>
        <div class="h-[75px] left-[273px] top-[100px] absolute">
            <div
                class="w-[274px] h-[75px] left-[1px] top-0 absolute text-zinc-800 text-4xl font-extrabold font-['Poppins']">
                Surat Masuk</div>
        </div>

        {{-- button --}}
        {{-- <div class="w-[92px] h-[50px] left-[274px] top-[633px] absolute">
            <div class="w-[92px] h-[50px] left-0 top-0 absolute bg-amber-600 rounded-lg border"></div>
            <div
                class="w-[52px] left-[20px] top-[13px] absolute text-center text-orange-100 text-base font-normal font-['Inter'] leading-normal">
                submit</div>
        </div> --}}

        {{-- //button diganti --}}
        <div class="w-[92px] h-[50px] left-[274px] top-[633px] absolute">
        <button type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-amber-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-amber-800">Submit</button>
        </div>

        {{-- //input file --}}
        {{-- <div class="w-[391px] h-[100px] left-[817px] top-[478px] absolute">
            <div class="w-[391px] h-[50px] left-0 top-[50px] absolute">
                <div class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200"></div>
                <div class="w-[350px] left-[20px] top-[13px] absolute text-zinc-500 text-base font-normal font-['Inter'] leading-normal">Input PDF Here...</div>
            </div>
            <div class="w-[350px] h-[50px] left-0 top-0 absolute text-slate-500 text-xl font-semibold font-['Poppins']">Input PDF</div>
        </div> --}}

        {{-- input file diganti --}}
        <div class="w-[391px] h-[100px] left-[817px] top-[478px] absolute">

            <label class="block mb-2 text-slate-500 text-xl font-semibold font-['Poppins'] for="file_input">Upload
                file</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
                800x400px).</p>

        </div>

            

        {{-- //drop down --}}
        {{-- <div class="w-[391px] h-[233px] left-[817px] top-[212px] absolute">
            <div class="w-[391px] h-[113px] left-0 top-[120px] absolute">
                <div class="w-[391px] h-[113px] left-0 top-0 absolute rounded-lg border border-zinc-200"></div>
                <div class="w-[330px] h-6 left-[20px] top-[75px] absolute">
                    <div class="w-[302px] h-6 left-[28px] top-0 absolute text-zinc-500 text-base font-normal font-['Inter'] leading-normal">Saham</div>
                    <div class="w-[18px] h-[18px] left-0 top-[3px] absolute rounded-[5px] border border-zinc-200"></div>
                </div>
                <div class="w-[330px] h-6 left-[20px] top-[44px] absolute">
                    <div class="w-[302px] h-6 left-[28px] top-0 absolute text-zinc-500 text-base font-normal font-['Inter'] leading-normal">Penggabungan (Merger)</div>
                    <div class="w-[18px] h-[18px] left-0 top-[3px] absolute rounded-[5px] border border-zinc-200"></div>
                </div>
                <div class="w-[330px] h-6 left-[20px] top-[13px] absolute">
                    <div class="w-[302px] left-[28px] top-0 absolute text-zinc-500 text-base font-normal font-['Inter'] leading-normal">Kerja Sama</div>
                    <div class="w-[18px] h-[18px] left-0 top-[3px] absolute rounded-[5px] border border-zinc-200"></div>
                </div>
            </div>
            <div class="w-[391px] h-[50px] left-0 top-[50px] absolute">
                <div class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200"></div>
                <div class="w-[350px] left-[20px] top-[13px] absolute text-zinc-500 text-base font-normal font-['Inter'] leading-normal">Enter Text Here...</div>
            </div>
            <div class="w-[350px] h-[50px] left-0 top-0 absolute text-slate-500 text-xl font-semibold font-['Poppins']">Perihal</div>
        </div> --}}

        {{-- drop down diganti --}}
        <div class="w-[391px] h-[233px] left-[817px] top-[212px] absolute">
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-amber-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800"
                type="button">Perihal <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownHover"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kerjasama</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Penggabungan</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Saham</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>


        {{-- Nomor surat --}}
        {{-- <div class="w-[391px] h-[100px] left-[274px] top-[478px] absolute">
            <div class="w-[391px] h-[50px] left-0 top-[50px] absolute">
                <div class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200"></div>
                <div
                    class="w-[350px] left-[20px] top-[13px] absolute text-zinc-500 text-base font-normal font-['Inter'] leading-normal">
                    Enter Text Here...</div>
            </div>
            <div class="w-[350px] h-[50px] left-0 top-0 absolute text-slate-500 text-xl font-semibold font-['Poppins']">
                Nomor Surat</div>
        </div> --}}

        {{-- //nomor surat diganti --}}
        <div class="w-[391px] h-[100px] left-[274px] top-[478px] absolute">
            <div class="mb-6">
                <label for="large-input" class="block mb-2 text-slate-500 text-xl font-semibold font-['Poppins']">Nomor Surat</label>
                <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>


        {{-- Judul surat --}}
        {{-- <div class="w-[391px] h-[100px] left-[274px] top-[345px] absolute">
            <div class="w-[391px] h-[50px] left-0 top-[50px] absolute">
                <div class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200"></div>
                <div
                    class="w-[350px] left-[20px] top-[13px] absolute text-zinc-500 text-base font-normal font-['Inter'] leading-normal">
                    Enter Text Here...</div>
            </div>
            <div class="w-[350px] h-[50px] left-0 top-0 absolute text-slate-500 text-xl font-semibold font-['Poppins']">
                Judul Surat</div>
        </div> --}}

        {{-- //judul surat diganti --}}
        <div class="w-[391px] h-[100px] left-[274px] top-[345px] absolute">
            <div class="mb-6">
                <label for="large-input" class="block mb-2 text-slate-500 text-xl font-semibold font-['Poppins']">Judul Surat</label>
                <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>



        {{-- //nama instansi --}}
        {{-- <div class="w-[391px] h-[100px] left-[274px] top-[212px] absolute">
            <div class="w-[391px] h-[50px] left-0 top-[50px] absolute">
                <div class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200"></div>
                <div
                    class="w-[350px] left-[20px] top-[13px] absolute text-zinc-500 text-base font-normal font-['Inter'] leading-normal">
                    Enter Text Here...</div>
            </div>
            <div class="w-[350px] h-[50px] left-0 top-0 absolute text-slate-500 text-xl font-semibold font-['Poppins']">
                Nama Instansi</div>
        </div> --}}

        {{-- nama instansi diganti  --}}
        <div class="w-[391px] h-[100px] left-[274px] top-[212px] absolute">
            <div class="mb-6">
                <label for="large-input" class="block mb-2 text-slate-500 text-xl font-semibold font-['Poppins']">Nama Instansi</label>
                <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>


    </div>

</body>

</html>
