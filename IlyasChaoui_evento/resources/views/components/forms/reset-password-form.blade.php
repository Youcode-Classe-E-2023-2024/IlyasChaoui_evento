<!-- ====== Banner Section Start -->
<div class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] dark:bg-dark">
    <div
        class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-stroke/0 via-stroke dark:via-dark-3 to-stroke/0">
    </div>
    <div class="container">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4">
                <div class="text-center">
                    <h1 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                        Forget password Page</h1>
                    <p class="mb-5 text-base text-body-color dark:text-dark-6">
                        There are many variations of passages of Lorem Ipsum available.
                    </p>

                    <ul class="flex items-center justify-center gap-[10px]">
                        <li>
                            <a href="index.html"
                               class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-white">
                                Evento
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                               class="flex items-center gap-[10px] text-base font-medium text-body-color">
                                <span class="text-body-color dark:text-dark-6"> / </span>
                                Forget Password
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Banner Section End -->

<!-- ====== Forms Section Start -->
<section class="bg-[#F4F7FF] py-14 lg:py-20 dark:bg-dark">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div
                    class="wow fadeInUp relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white dark:bg-dark-2 py-14 px-8 text-center sm:px-12 md:px-[60px]"
                    data-wow-delay=".15s">
                    <div class="mb-10 text-center">
                        <a href="javascript:void(0)" class="mx-auto inline-block max-w-[160px]">
                            <img src={{ asset('assets-home/images/logo/homeLogo.png') }} alt="logo" class="w-full dark:hidden"/>
                            <img src={{ asset('assets-home/images/logo/darkLogo.png') }} alt="logo" class="hidden w-full dark:block"/>
                        </a>
                    </div>
                    <form method="post" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="mb-[22px]">
                            <input type="email" placeholder="Email" name="email" value="{{ request()->get('email') }}" readonly
                                   class="w-full px-5 py-3 mb-4 text-base transition bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none"/>
                            @error('email')
                            <div
                                class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                role="alert">
                                <button type="button" class="close font__size-18" data-dismiss="alert">
                                    <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                <strong class="font__weight-semibold">Oh snap!</strong> {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-[22px]">
                            <input type="password" name="password" placeholder="Password"
                                   class="w-full px-5 mb-4 rounded-[10px] py-3 text-base transition bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none"/>
                            @error('password')
                            <div
                                class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                role="alert">
                                <button type="button" class="close font__size-18" data-dismiss="alert">
                                    <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                <strong class="font__weight-semibold">Oh snap!</strong> {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-[22px]">
                            <input type="password" name="password_confirmation" placeholder="Confirm password"
                                   class="w-full px-5 mb-4 rounded-[10px] py-3 text-base transition bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none"/>
                            @error('password')
                            <div
                                class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                role="alert">
                                <button type="button" class="close font__size-18" data-dismiss="alert">
                                    <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                <strong class="font__weight-semibold">Oh snap!</strong> {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit"
                                class="w-full mb-9 px-5 py-3 text-base text-white transition duration-300 ease-in-out border rounded-md cursor-pointer border-primary bg-primary hover:bg-blue-dark">
                            Reset Password
                        </button>
                    </form>

                    <p class="text-base text-body-secondary">
                        Already have an account?
                        <a href="/login" class="text-primary hover:underline">
                            Sign In
                        </a>
                    </p>

                    <div>
              <span class="absolute top-1 right-1">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="1.39737" cy="38.6026" r="1.39737" transform="rotate(-90 1.39737 38.6026)"
                          fill="#3056D3"/>
                  <circle cx="1.39737" cy="1.99122" r="1.39737" transform="rotate(-90 1.39737 1.99122)"
                          fill="#3056D3"/>
                  <circle cx="13.6943" cy="38.6026" r="1.39737" transform="rotate(-90 13.6943 38.6026)"
                          fill="#3056D3"/>
                  <circle cx="13.6943" cy="1.99122" r="1.39737" transform="rotate(-90 13.6943 1.99122)"
                          fill="#3056D3"/>
                  <circle cx="25.9911" cy="38.6026" r="1.39737" transform="rotate(-90 25.9911 38.6026)"
                          fill="#3056D3"/>
                  <circle cx="25.9911" cy="1.99122" r="1.39737" transform="rotate(-90 25.9911 1.99122)"
                          fill="#3056D3"/>
                  <circle cx="38.288" cy="38.6026" r="1.39737" transform="rotate(-90 38.288 38.6026)" fill="#3056D3"/>
                  <circle cx="38.288" cy="1.99122" r="1.39737" transform="rotate(-90 38.288 1.99122)" fill="#3056D3"/>
                  <circle cx="1.39737" cy="26.3057" r="1.39737" transform="rotate(-90 1.39737 26.3057)"
                          fill="#3056D3"/>
                  <circle cx="13.6943" cy="26.3057" r="1.39737" transform="rotate(-90 13.6943 26.3057)"
                          fill="#3056D3"/>
                  <circle cx="25.9911" cy="26.3057" r="1.39737" transform="rotate(-90 25.9911 26.3057)"
                          fill="#3056D3"/>
                  <circle cx="38.288" cy="26.3057" r="1.39737" transform="rotate(-90 38.288 26.3057)" fill="#3056D3"/>
                  <circle cx="1.39737" cy="14.0086" r="1.39737" transform="rotate(-90 1.39737 14.0086)"
                          fill="#3056D3"/>
                  <circle cx="13.6943" cy="14.0086" r="1.39737" transform="rotate(-90 13.6943 14.0086)"
                          fill="#3056D3"/>
                  <circle cx="25.9911" cy="14.0086" r="1.39737" transform="rotate(-90 25.9911 14.0086)"
                          fill="#3056D3"/>
                  <circle cx="38.288" cy="14.0086" r="1.39737" transform="rotate(-90 38.288 14.0086)" fill="#3056D3"/>
                </svg>
              </span>
                        <span class="absolute left-1 bottom-1">
                <svg width="29" height="40" viewBox="0 0 29 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2.288" cy="25.9912" r="1.39737" transform="rotate(-90 2.288 25.9912)" fill="#3056D3"/>
                  <circle cx="14.5849" cy="25.9911" r="1.39737" transform="rotate(-90 14.5849 25.9911)"
                          fill="#3056D3"/>
                  <circle cx="26.7216" cy="25.9911" r="1.39737" transform="rotate(-90 26.7216 25.9911)"
                          fill="#3056D3"/>
                  <circle cx="2.288" cy="13.6944" r="1.39737" transform="rotate(-90 2.288 13.6944)" fill="#3056D3"/>
                  <circle cx="14.5849" cy="13.6943" r="1.39737" transform="rotate(-90 14.5849 13.6943)"
                          fill="#3056D3"/>
                  <circle cx="26.7216" cy="13.6943" r="1.39737" transform="rotate(-90 26.7216 13.6943)"
                          fill="#3056D3"/>
                  <circle cx="2.288" cy="38.0087" r="1.39737" transform="rotate(-90 2.288 38.0087)" fill="#3056D3"/>
                  <circle cx="2.288" cy="1.39739" r="1.39737" transform="rotate(-90 2.288 1.39739)" fill="#3056D3"/>
                  <circle cx="14.5849" cy="38.0089" r="1.39737" transform="rotate(-90 14.5849 38.0089)"
                          fill="#3056D3"/>
                  <circle cx="26.7216" cy="38.0089" r="1.39737" transform="rotate(-90 26.7216 38.0089)"
                          fill="#3056D3"/>
                  <circle cx="14.5849" cy="1.39761" r="1.39737" transform="rotate(-90 14.5849 1.39761)"
                          fill="#3056D3"/>
                  <circle cx="26.7216" cy="1.39761" r="1.39737" transform="rotate(-90 26.7216 1.39761)"
                          fill="#3056D3"/>
                </svg>
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Forms Section End -->
