<!doctype html>
<html> 
<head> 
  <title> Mohammad Haidar Yusya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Petemoss&display=swap" rel="stylesheet">
</head>
<body>

  
{{-- navbar --}}
<nav class="bg-gradient-to-b from-red-800 to-black opacity-[90%] border-gray-200 py-2.5 dark:bg-gray-900 z-50">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
        <a href="#" class="flex items-center">
            <img src="../img/logo.png" class="h-6 mr-3 sm:h-9" alt="Landwind Logo">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>
        <div class="flex items-center lg:order-2">
            <div class="hidden mt-2 mr-4 sm:inline-block">
                <span></span>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button"
				class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
				aria-controls="mobile-menu-2" aria-expanded="true">
				<span class="sr-only">Open main menu</span>
				<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
						d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
						clip-rule="evenodd"></path>
				</svg>
				<svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
						d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
						clip-rule="evenodd"></path>
				</svg>
			</button>
        </div>
        <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="#home"
                        class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                <li>
                    <a href="#about"
                        class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About me</a>
                </li>
                <li>
                    <a href="#servic"
                        class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Servic</a>
                </li>
                <li>
                    <a href="#portopolio"
                        class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Portopolio</a>
                </li>
                <li>
                    <a href="#contact"
                        class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-red-600 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
{{-- navbar --}}


{{-- home--}}
<section id ="home">
    <div class="grid max-w-screen-x1 px-10 py-10 mx-auto lg:gap-8xl:gap-0 lg:py-16 lg:grid-cols-12 bg-gradient-to-b from-red-800 to-black opacity-[100%]">
        <div class=" font-home mr-auto place-self-center lg:col-span-7 pl-10">
            <h1 class="max-w-2xl mb-4 text-5xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-gray-300">Mohammad haidar</h1>
            <h1 class="max-w-2xl mb-4 text-5xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-gray-300">Yusya</h1>
        </div>
        <div class="hidden  lg:mt-0 lg:col-span-5 lg:flex pl-5 size-full">
            <img src="./img/jempolhome.jpg" alt="salahhhhh">
        </div> 
    </div>
</section>
{{-- home--}}

<!--about-->
<section id ="about">

  <div class="justify-around flex bg-gradient-to-b from-black to-red-800 opacity-[100%] items-center py-15">
    <div class="lg:w-1/2 ">
        <div class="image object-center text-center size-full">
            <img src="../img/kursi.jpg">
        </div>
    </div>
    <div class="w-1/3 ml-[-250px] justify-start">
        <div class="">
          <h1 class=" font-judul text-white text-5xl font-extrabold">About Me</h1>
          <p class="font-judul text-gray-400 font-normal"> Hai, saya Mohammad Haidar Yusya, seorang mahasiswa di Politeknik Harapan Bersama Kota Tegal. Saya juga seorang fotografer yang menekuni Dunia Fotografi sejak dibangku sekolah. Saya percaya bahwa fotografi adalah cara yang kuat untuk mengekspresikan diri dan menceritakan cerita. Saya senang terlibat dalam proyek-proyek fotografi dan berharap dapat terus berkembang di bidang ini.
          </p>
        </div>
    </div>
</div>
</section>
{{-- about me --}}

{{-- servic --}}
<section id="servic">
<div class="bg-gradient-to-b from-red-800 to-black opacity-[100%] sm:flex items-center ">
<main class="h-full w-full flex items-center justify-center">
	<div class="border max-w-screen-md bg-gray-200 mt-6 rounded-2xl p-4">
		<div class="flex items-center	justify-between">
			<div class="gap-3.5	flex items-center ">
				<img src="../img/pp.jpg" class="object-cover bg-yellow-500 rounded-full w-10 h-10" />
				<div class="flex flex-col">
					<b class="mb-2 capitalize font-bold">Yusya11_</b>
				</div>
			</div>
			<div class="bg-gray-200	rounded-full h-3.5 flex	items-center justify-center">
				<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="34px" fill="#92929D">
					<path d="M0 0h24v24H0V0z" fill="none" />
					<path
						d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
				</svg>
			</div>
		</div>
		<div class="whitespace-pre-wrap mt-7 text-bold ">Servic ?</div>
		<div class="mt-5 flex gap-2	 justify-center border-b pb-4 flex-wrap	">
			<img src="../img/foto.jpg" class="bg-red-500 rounded-2xl w-1/3 object-cover h-96 flex-auto" alt="photo">
			<img src="../img/video.jpg" class="bg-red-500 rounded-2xl w-1/3 object-cover h-96 flex-auto" alt="photo">
          </div>
			<div class=" h-16 border-b  flex items-center justify-around	">
				<div class="flex items-center	gap-3	">
					<svg width="20px" height="19px" viewBox="0 0 20 19" version="1.1" xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="?-Social-Media" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="Square_Timeline" transform="translate(-312.000000, -746.000000)">
								<g id="Post-1" transform="translate(280.000000, 227.000000)">
									<g id="Post-Action" transform="translate(0.000000, 495.000000)">
										<g transform="translate(30.000000, 21.000000)" id="Comment">
											<g>
												<g id="ic_comment-Component/icon/ic_comment">
													<g id="Comments">
														<polygon id="Path" points="0 0 24 0 24 25 0 25"></polygon>
														<g id="iconspace_Chat-3_25px"
															transform="translate(2.000000, 3.000000)" fill="#92929D">
															<path
																d="M10.5139395,15.2840977 L6.06545155,18.6848361 C5.05870104,19.4544672 3.61004168,18.735539 3.60795568,17.4701239 L3.60413773,15.1540669 C1.53288019,14.6559967 0,12.7858138 0,10.5640427 L0,4.72005508 C0,2.11409332 2.10603901,0 4.70588235,0 L15.2941176,0 C17.893961,0 20,2.11409332 20,4.72005508 L20,10.5640427 C20,13.1700044 17.893961,15.2840977 15.2941176,15.2840977 L10.5139395,15.2840977 Z M5.60638935,16.5183044 L9.56815664,13.4896497 C9.74255213,13.3563295 9.955971,13.2840977 10.1754888,13.2840977 L15.2941176,13.2840977 C16.7876789,13.2840977 18,12.0671403 18,10.5640427 L18,4.72005508 C18,3.21695746 16.7876789,2 15.2941176,2 L4.70588235,2 C3.21232108,2 2,3.21695746 2,4.72005508 L2,10.5640427 C2,12.0388485 3.1690612,13.2429664 4.6301335,13.28306 C5.17089106,13.297899 5.60180952,13.7400748 5.60270128,14.2810352 L5.60638935,16.5183044 Z"
																id="Path"></path>
														</g>
													</g>
												</g>
											</g>
										</g>
									</g>
								</g>
							</g>
						</g>
					</svg>
					<div class="text-sm	">11 Comments</div>
				</div>
				<div class="flex items-center	gap-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20"
						fill="currentColor">
						<path fill-rule="evenodd"
							d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
							clip-rule="evenodd" />
					</svg>
					<div class="text-sm">12 Likes</div>
				</div>
				<div class="flex items-center	gap-3">
					<svg width="22px" height="22px" viewBox="0 0 22 22" version="1.1" xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="?-Social-Media" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="Square_Timeline" transform="translate(-636.000000, -745.000000)">
								<g id="Post-1" transform="translate(280.000000, 227.000000)">
									<g id="Post-Action" transform="translate(0.000000, 495.000000)">
										<g transform="translate(30.000000, 21.000000)" id="Share">
											<g transform="translate(325.000000, 1.000000)">
												<g id="ic_Share-Component/icon/ic_Share">
													<g id="Share">
														<circle id="Oval" cx="12" cy="12" r="12"></circle>
														<g id="Group-24-Copy"
															transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) translate(1.000000, 1.000000)"
															fill="#92929D">
															<path
																d="M4,0 C6.209139,0 8,1.790861 8,4 C8,4.1291298 7.99388117,4.25683047 7.98191762,4.38282788 L15.371607,7.98470389 C16.0745405,7.37145444 16.9938914,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 C16.9572434,15 16.0076801,14.6009919 15.2956607,13.9473263 L7.98384745,17.6380767 C7.99453877,17.7572882 8,17.8780063 8,18 C8,20.209139 6.209139,22 4,22 C1.790861,22 0,20.209139 0,18 C0,15.790861 1.790861,14 4,14 C5.37147453,14 6.58173814,14.690226 7.30236849,15.7422555 L14.2017356,12.2577203 C14.0708451,11.8622268 14,11.4393868 14,11 C14,10.5276126 14.0818865,10.0743509 14.2322392,9.65363512 L7.29274641,6.27172794 C6.57099412,7.31588608 5.36538874,8 4,8 C1.790861,8 0,6.209139 0,4 C0,1.790861 1.790861,0 4,0 Z M4,16 C2.8954305,16 2,16.8954305 2,18 C2,19.1045695 2.8954305,20 4,20 C5.1045695,20 6,19.1045695 6,18 C6,16.8954305 5.1045695,16 4,16 Z M18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 Z M4,2 C2.8954305,2 2,2.8954305 2,4 C2,5.1045695 2.8954305,6 4,6 C5.1045695,6 6,5.1045695 6,4 C6,2.8954305 5.1045695,2 4,2 Z"
																id="Combined-Shape"></path>
														</g>
													</g>
												</g>
											</g>
										</g>
									</g>
								</g>
							</g>
						</g>
					</svg>
					<div class="text-sm">Share</div>
				</div>
				<div class="flex items-center	gap-3">
					<svg width="17px" height="22px" viewBox="0 0 17 22" version="1.1" xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="?-Social-Media" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="Square_Timeline" transform="translate(-787.000000, -745.000000)">
								<g id="Post-1" transform="translate(280.000000, 227.000000)">
									<g id="Post-Action" transform="translate(0.000000, 495.000000)">
										<g transform="translate(30.000000, 21.000000)" id="Saved">
											<g transform="translate(473.000000, 1.000000)">
												<g id="ic_Saved-Component/icon/ic_Saved">
													<g id="Saved">
														<circle id="Oval" cx="12" cy="12" r="12"></circle>
														<g id="Group-13-Copy" transform="translate(5.000000, 2.000000)"
															fill="#92929D">
															<path
																d="M2.85714286,-0.952380952 L12.1428571,-0.952380952 C14.246799,-0.952380952 15.952381,0.753200953 15.952381,2.85714286 L15.952381,18.2119141 C15.952381,19.263885 15.09959,20.116746 14.047619,20.116746 C13.6150601,20.116746 13.1953831,19.9694461 12.8576286,19.6992071 L7.5,15.4125421 L2.14237143,19.6992071 C1.32096217,20.3564207 0.122301512,20.2233138 -0.534912082,19.4019046 C-0.805151112,19.0641501 -0.952380952,18.644473 -0.952380952,18.2119141 L-0.952380952,2.85714286 C-0.952380952,0.753200953 0.753200953,-0.952380952 2.85714286,-0.952380952 Z M2.85714286,0.952380952 C1.80517191,0.952380952 0.952380952,1.80517191 0.952380952,2.85714286 L0.952380952,18.2119141 L6.31000952,13.9252491 C7.00569973,13.3686239 7.99430027,13.3686239 8.68999048,13.9252491 L14.047619,18.2119141 L14.047619,2.85714286 C14.047619,1.80517191 13.1948281,0.952380952 12.1428571,0.952380952 L2.85714286,0.952380952 Z"
																id="Rectangle-92"></path>
														</g>
													</g>
												</g>
											</g>
										</g>
									</g>
								</g>
							</g>
						</g>
					</svg>
					<div class="text-sm">Saved</div>
				</div>
			</div>
			<div class="flex items-center justify-between mt-4">
				<img src="../img/ppp.jpg"  class="bg-yellow-500 rounded-full w-10 h-10 object-cover border">
				<div class="flex items-center	justify-between	 bg-gray-50 h-11 w-11/12 border rounded-2xl	 overflow-hidden px-4 ">
					<input type="text" class="h-full w-full bg-gray-50 outline-none " placeholder="Write your comment..."name="comment">
				</div>
			</div>
	</div>
  </div>
</main>
</section>
{{-- servic --}}


{{-- portopolio --}}
<section id="portopolio">
<div class="bg-gradient-to-b from-black to-red-800 opacity-[100%] flex flex-wrap py-10">
    <div class="w-full sm:w-8/12 mb-10">
      <div class="container mx-auto h-full sm:p-10">
        <nav class="flex px-4 justify-between items-center">
        </nav>
        <header class="container px-4 lg:flex mt-10 items-center h-full lg:mt-0">
          <div class="w-full">
            <h1 class="text-gray-300 font-judul text-8xl lg:text-8xl font-bold">PORTOPOLIO</h1>
          </div>
        </header>
      </div>
    </div>
    <img src="../img/potoPto.png" alt="Leafs" class="size-max h-48 object-cover sm:h-screen sm:w-4/12">
  </div>
</section>
{{-- portopolio --}}


{{-- foto --}}
<section id="#fotografer">
<div class="bg-gradient-to-b from-red-800 to-black opacity-[100%] relative overflow-hidden bg-whitez py-2 ">
    <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
      <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
        <div class="sm:max-w-lg">
          <h3 class=" text-4xl font-judul tracking-tight text-gray-400 sm:text-6xl">Hasil</h3>
          <h1 class="text-4xl font-judul font-bold tracking-tight text-gray-300 sm:text-6xl">Fotografi</h1>
        </div>
        <div>
          <div class="mt-10">

            <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
              <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                <div class="flex items-center space-x-6 lg:space-x-8">
                  <div class=" grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class=" h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                      <img src="../img/1.jpg" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44  overflow-hidden rounded-lg">
                      <img src="../img/2.jpg" alt="" class=" h-full w-full object-cover object-center" class="">
                    </div>
                  </div>
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="../img/7.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="../img/4.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="../img/6.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                  </div>
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="../img/5.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="../img/3.png" alt="" class="h-full w-full object-cover object-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <a href="https://drive.google.com/drive/folders/1BOQO_DXrnxBtOLbvijW1gWiwUxN-e6YK?usp=sharing" class="inline-block rounded-md border border-transparent bg-slate-600 py-3 px-8 text-center font-medium text-white hover:bg-slate-800">Full Album</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- foto --}}

  
{{-- vidio --}}
<section id="#videografer">
<div class="bg-gradient-to-b from-black to-red-800 opacity-[100%] relative overflow-hidden py-5">
    <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
      <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
        <div class="sm:max-w-lg">
          <h3 class="font text-4xl font-judul tracking-tight text-gray-400 sm:text-6xl">Hasil</h3>
          <h1 class="font text-4xl font-bold font-judul tracking-tight text-gray-300 sm:text-6xl">Videografi</h1>
        </div>
        <div>
          <div class="mt-10">
            <!-- Decorative image grid -->
            <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
              <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                {{-- 1 --}}
                <div class="flex items-center space-x-6 lg:space-x-8">
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                      <img src="../img/video.jpg" class="h-full w-full object-cover object-center">
                    </div>
                    {{-- 1 --}}

                    {{-- 2 --}}
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <div class="flex p-4 space-x-4 sm:px-8">
        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gray-300"></div>
        <div class="flex-1 py-2 space-y-4">
            <div class="w-full h-3 rounded bg-gray-300"></div>
            <div class="w-5/6 h-3 rounded bg-gray-300"></div>
        </div>
    </div>
    <div class="p-4 space-y-4 sm:px-8">
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-3/4 h-4 rounded bg-gray-300"></div>
    </div>
                    </div>
                  </div>
                  {{-- 2 --}}

                  {{-- 3 --}}
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                   <div class="flex p-4 space-x-4 sm:px-8">
        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gray-300"></div>
        <div class="flex-1 py-2 space-y-4">
            <div class="w-full h-3 rounded bg-gray-300"></div>
            <div class="w-5/6 h-3 rounded bg-gray-300"></div>
        </div>
    </div>
    <div class="p-4 space-y-4 sm:px-8">
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-3/4 h-4 rounded bg-gray-300"></div>
    </div>
                    {{-- 3 --}}

                    {{-- 4 --}}
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="../img/vitsalma.jpeg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    {{-- 4 --}}

                    {{-- 5 --}}
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <div class="flex p-4 space-x-4 sm:px-8">
        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gray-300"></div>
        <div class="flex-1 py-2 space-y-4">
            <div class="w-full h-3 rounded bg-gray-300"></div>
            <div class="w-5/6 h-3 rounded bg-gray-300"></div>
        </div>
    </div>
    <div class="p-4 space-y-4 sm:px-8">
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-3/4 h-4 rounded bg-gray-300"></div>
    </div>
                    </div>
                  </div>
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    {{-- 5 --}}

                    {{-- 6 --}}
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                     <img src="../img/kebidanan.png" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    {{-- 6 --}}

                    {{-- 7 --}}
                    <div class="h-64 w-44 overflow-hidden rounded-lg"><div class="flex p-4 space-x-4 sm:px-8">
        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gray-300"></div>
        <div class="flex-1 py-2 space-y-4">
            <div class="w-full h-3 rounded bg-gray-300"></div>
            <div class="w-5/6 h-3 rounded bg-gray-300"></div>
        </div>
    </div>
    <div class="p-4 space-y-4 sm:px-8">
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-3/4 h-4 rounded bg-gray-300"></div>
    </div>
                    </div>
                    {{-- 7 --}}
                  </div>
                </div>
              </div>
            </div>

            <a href="https://drive.google.com/drive/folders/1BOQO_DXrnxBtOLbvijW1gWiwUxN-e6YK?usp=sharing" class="inline-block rounded-md border border-transparent bg-slate-600 py-3 px-8 text-center font-medium text-white hover:bg-slate-800">Full Album</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- video --}}


{{-- contact --}}
<section class="section-padding bg-cover bg-center bg-fixed" style="background-image: url('../img/pawe.jpg')">
  <div class="container py-8">
      <div class="grid grid-cols-8">
        <div class= " w-96">
          <h1 class="ml-10 font-judul text-6xl lg:text-8xl font-bold text-gray-300 size-96">CONTACT</h1>
        </div>
        {{-- icon --}}
        <div class="ml-80 mt-72">
<div class="mr-10 grid grid-cols-4 md:grid-cols-4 gap-7 ml-96 w-[300px] place-items-end">
  <a href="https://api.whatsapp.com/send?phone=085702481426">
    <img class="hover:opacity-75" src="../img/wa.png">
  </a>
   <a href="https://www.instagram.com/yusya11_?igsh=ODd5OTBpamcwMW4w">
    <img class="hover:opacity-75" src="../img/ig.png">
  </a>
   <a href="https://drive.google.com/drive/folders/1BOQO_DXrnxBtOLbvijW1gWiwUxN-e6YK?usp=sharing">
    <img class="hover:opacity-75" src="../img/gmail.png">
  </a>
   <a href="https://www.bing.com/maps?&cp=-6.888339~109.669969&lvl=16&pi=0&osid=ce2eb2be-f40f-4abc-8193-06d79863f70d&imgid=443959b4-b02f-43b7-8dd1-41affd74c36a&v=2&sV=2&form=S00027">
    <img class="hover:opacity-75" src="../img/lokasi.png">
  </a>
</div>
        </div>

      </div>
  </div>
</section>

{{-- contact --}}

{{-- footer --}}
<section id="contact">
<footer class="bg-black shadow">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="https://flowbite.com/" class="hover:underline">Mohammad Haidar Yusya</a>
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-300 sm:mt-0">
        <li>
            <a href="#home" class="hover:underline me-4 md:me-6 hover:text-red-400 ">Home</a>
        </li>
        <li>
            <a href="#about" class="hover:underline me-4 md:me-6 hover:text-red-400 ">About Me</a>
        </li>
        <li>
            <a href="#servic" class="hover:underline me-4 md:me-6 hover:text-red-400 ">Servic</a>
        </li>
        <li>
            <a href="#portopolio" class="hover:underline me-4 md:me-6 hover:text-red-400 ">Portopolio</a>
        </li>
        <li>
            <a href="#contact" class="hover:underline hover:text-red-400 ">Contact</a>
        </li>
    </ul>
    </div>
</footer>
</section>
{{-- footer anad --}}

</div>
</body>
</html>
