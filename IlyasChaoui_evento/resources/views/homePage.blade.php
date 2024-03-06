@extends('Layouts.homeLayout')

@section('title')
    Home
@endsection

@section('content')
    <!-- ====== Hero Section Start -->
    <div
        id="home"
        class="relative h-full overflow-x-auto fixed pt-[120px] md:pt-[130px] lg:pt-[160px]"
    >
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <img src="./assets/images/header/sky.png" class="fixed z-0 h-full w-full" alt="" style="z-index: -1; top: 0; left: 0">
                <img src="./assets/images/header/bushes.png" alt="" style="position: fixed;top: -29%; left: 0%;z-index: -1">
                <div class="parallax__layer water">
                    <img src="./assets/images/header/water.png" alt="" style="position: fixed;top: -31%; left: 0%;z-index: -1">
                </div>
                <div class="parallax__layer people1">
                    <img src="./assets/images/header/people1.png" alt="" style="position: fixed;top: -31%; left: 0%;z-index: -1">
                </div>
                <div class="parallax__layer people2">
                    <img src="./assets/images/header/people2.png" alt="" style="position: fixed;top: -31%; left: 0%;z-index: -1">
                </div>
                <div class="parallax__layer people3">
                    <img src="./assets/images/header/people3.png" alt="" style="position: fixed;top: -31%; left: 0%;z-index: -1">
                </div>
                <div class="parallax__layer hero-text">
                    <div class="year-container">
                        <h1>C</h1>
                        <h1>O</h1>
                        <h1>M</h1>
                        <h1>I</h1>
                        <h1>N</h1>
                        <h1>G</h1>
                    </div>
                </div>
                <div class="parallax__layer hero-text">
                    <div class="soon-container">
                        <h1>S</h1>
                        <h1>O</h1>
                        <h1>O</h1>
                        <h1>N</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->

    <!-- ====== Blog Section Start -->

    <section class="bg-white pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary">
                Our Blogs
              </span>
                        <h2
                            class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"
                        >
                            Our Recent News
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="wow fadeInUp group mb-10" data-wow-delay=".1s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img
                                    src="./assets/images/blog/blog-01.jpg"
                                    alt="image"
                                    class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                                />
                            </a>
                        </div>
                        <div>
                <span
                    class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                >
                  Dec 22, 2023
                </span>
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                                >
                                    Meet AutoManage, the best AI management tools
                                </a>
                            </h3>
                            <p
                                class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                            >
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="wow fadeInUp group mb-10" data-wow-delay=".15s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img
                                    src="./assets/images/blog/blog-02.jpg"
                                    alt="image"
                                    class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                                />
                            </a>
                        </div>
                        <div>
                <span
                    class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                >
                  Mar 15, 2023
                </span>
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                                >
                                    How to earn more money as a wellness coach
                                </a>
                            </h3>
                            <p
                                class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                            >
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="wow fadeInUp group mb-10" data-wow-delay=".2s">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img
                                    src="./assets/images/blog/blog-03.jpg"
                                    alt="image"
                                    class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                                />
                            </a>
                        </div>
                        <div>
                <span
                    class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                >
                  Jan 05, 2023
                </span>
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                                >
                                    The no-fuss guide to upselling and cross selling
                                </a>
                            </h3>
                            <p
                                class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                            >
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->



    <!-- ====== FAQ Section Start -->
    <section
        class="relative z-20 overflow-hidden bg-white pb-8 pt-20 dark:bg-dark lg:pb-[50px] lg:pt-[120px]"
    >
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[520px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary">
                FAQ
              </span>
                        <h2
                            class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]"
                        >
                            Any Questions? Look Here
                        </h2>
                        <p
                            class="mx-auto max-w-[485px] text-base text-body-color dark:text-dark-6"
                        >
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
                        >
                            <svg
                                width="32"
                                height="32"
                                viewBox="0 0 34 34"
                                class="fill-current"
                            >
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                                />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                                />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                                />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                            >
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
                        >
                            <svg
                                width="32"
                                height="32"
                                viewBox="0 0 34 34"
                                class="fill-current"
                            >
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                                />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                                />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                                />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                            >
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
                        >
                            <svg
                                width="32"
                                height="32"
                                viewBox="0 0 34 34"
                                class="fill-current"
                            >
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                                />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                                />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                                />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                            >
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
                        >
                            <svg
                                width="32"
                                height="32"
                                viewBox="0 0 34 34"
                                class="fill-current"
                            >
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                                />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                                />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                                />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                            >
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color dark:text-dark-6">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <span class="absolute left-4 top-4 -z-[1]">
          <svg
              width="48"
              height="134"
              viewBox="0 0 48 134"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
          >
            <circle
                cx="45.6673"
                cy="132"
                r="1.66667"
                transform="rotate(180 45.6673 132)"
                fill="#13C296"
            />
            <circle
                cx="45.6673"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 45.6673 117.333)"
                fill="#13C296"
            />
            <circle
                cx="45.6673"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 45.6673 102.667)"
                fill="#13C296"
            />
            <circle
                cx="45.6673"
                cy="88.0001"
                r="1.66667"
                transform="rotate(180 45.6673 88.0001)"
                fill="#13C296"
            />
            <circle
                cx="45.6673"
                cy="73.3335"
                r="1.66667"
                transform="rotate(180 45.6673 73.3335)"
                fill="#13C296"
            />
            <circle
                cx="45.6673"
                cy="45.0001"
                r="1.66667"
                transform="rotate(180 45.6673 45.0001)"
                fill="#13C296"
            />
            <circle
                cx="45.6673"
                cy="16.0001"
                r="1.66667"
                transform="rotate(180 45.6673 16.0001)"
                fill="#13C296"
            />
            <circle
                cx="45.6673"
                cy="59.0001"
                r="1.66667"
                transform="rotate(180 45.6673 59.0001)"
                fill="#13C296"
            />
            <circle
                cx="45.6673"
                cy="30.6668"
                r="1.66667"
                transform="rotate(180 45.6673 30.6668)"
                fill="#13C296"
            />
            <circle
                cx="45.6673"
                cy="1.66683"
                r="1.66667"
                transform="rotate(180 45.6673 1.66683)"
                fill="#13C296"
            />
            <circle
                cx="31.0013"
                cy="132"
                r="1.66667"
                transform="rotate(180 31.0013 132)"
                fill="#13C296"
            />
            <circle
                cx="31.0013"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 31.0013 117.333)"
                fill="#13C296"
            />
            <circle
                cx="31.0013"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 31.0013 102.667)"
                fill="#13C296"
            />
            <circle
                cx="31.0013"
                cy="88.0001"
                r="1.66667"
                transform="rotate(180 31.0013 88.0001)"
                fill="#13C296"
            />
            <circle
                cx="31.0013"
                cy="73.3335"
                r="1.66667"
                transform="rotate(180 31.0013 73.3335)"
                fill="#13C296"
            />
            <circle
                cx="31.0013"
                cy="45.0001"
                r="1.66667"
                transform="rotate(180 31.0013 45.0001)"
                fill="#13C296"
            />
            <circle
                cx="31.0013"
                cy="16.0001"
                r="1.66667"
                transform="rotate(180 31.0013 16.0001)"
                fill="#13C296"
            />
            <circle
                cx="31.0013"
                cy="59.0001"
                r="1.66667"
                transform="rotate(180 31.0013 59.0001)"
                fill="#13C296"
            />
            <circle
                cx="31.0013"
                cy="30.6668"
                r="1.66667"
                transform="rotate(180 31.0013 30.6668)"
                fill="#13C296"
            />
            <circle
                cx="31.0013"
                cy="1.66683"
                r="1.66667"
                transform="rotate(180 31.0013 1.66683)"
                fill="#13C296"
            />
            <circle
                cx="16.3333"
                cy="132"
                r="1.66667"
                transform="rotate(180 16.3333 132)"
                fill="#13C296"
            />
            <circle
                cx="16.3333"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 16.3333 117.333)"
                fill="#13C296"
            />
            <circle
                cx="16.3333"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 16.3333 102.667)"
                fill="#13C296"
            />
            <circle
                cx="16.3333"
                cy="88.0001"
                r="1.66667"
                transform="rotate(180 16.3333 88.0001)"
                fill="#13C296"
            />
            <circle
                cx="16.3333"
                cy="73.3335"
                r="1.66667"
                transform="rotate(180 16.3333 73.3335)"
                fill="#13C296"
            />
            <circle
                cx="16.3333"
                cy="45.0001"
                r="1.66667"
                transform="rotate(180 16.3333 45.0001)"
                fill="#13C296"
            />
            <circle
                cx="16.3333"
                cy="16.0001"
                r="1.66667"
                transform="rotate(180 16.3333 16.0001)"
                fill="#13C296"
            />
            <circle
                cx="16.3333"
                cy="59.0001"
                r="1.66667"
                transform="rotate(180 16.3333 59.0001)"
                fill="#13C296"
            />
            <circle
                cx="16.3333"
                cy="30.6668"
                r="1.66667"
                transform="rotate(180 16.3333 30.6668)"
                fill="#13C296"
            />
            <circle
                cx="16.3333"
                cy="1.66683"
                r="1.66667"
                transform="rotate(180 16.3333 1.66683)"
                fill="#13C296"
            />
            <circle
                cx="1.66732"
                cy="132"
                r="1.66667"
                transform="rotate(180 1.66732 132)"
                fill="#13C296"
            />
            <circle
                cx="1.66732"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 1.66732 117.333)"
                fill="#13C296"
            />
            <circle
                cx="1.66732"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 1.66732 102.667)"
                fill="#13C296"
            />
            <circle
                cx="1.66732"
                cy="88.0001"
                r="1.66667"
                transform="rotate(180 1.66732 88.0001)"
                fill="#13C296"
            />
            <circle
                cx="1.66732"
                cy="73.3335"
                r="1.66667"
                transform="rotate(180 1.66732 73.3335)"
                fill="#13C296"
            />
            <circle
                cx="1.66732"
                cy="45.0001"
                r="1.66667"
                transform="rotate(180 1.66732 45.0001)"
                fill="#13C296"
            />
            <circle
                cx="1.66732"
                cy="16.0001"
                r="1.66667"
                transform="rotate(180 1.66732 16.0001)"
                fill="#13C296"
            />
            <circle
                cx="1.66732"
                cy="59.0001"
                r="1.66667"
                transform="rotate(180 1.66732 59.0001)"
                fill="#13C296"
            />
            <circle
                cx="1.66732"
                cy="30.6668"
                r="1.66667"
                transform="rotate(180 1.66732 30.6668)"
                fill="#13C296"
            />
            <circle
                cx="1.66732"
                cy="1.66683"
                r="1.66667"
                transform="rotate(180 1.66732 1.66683)"
                fill="#13C296"
            />
          </svg>
        </span>
            <span class="absolute bottom-4 right-4 -z-[1]">
          <svg
              width="48"
              height="134"
              viewBox="0 0 48 134"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
          >
            <circle
                cx="45.6673"
                cy="132"
                r="1.66667"
                transform="rotate(180 45.6673 132)"
                fill="#3758F9"
            />
            <circle
                cx="45.6673"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 45.6673 117.333)"
                fill="#3758F9"
            />
            <circle
                cx="45.6673"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 45.6673 102.667)"
                fill="#3758F9"
            />
            <circle
                cx="45.6673"
                cy="88.0001"
                r="1.66667"
                transform="rotate(180 45.6673 88.0001)"
                fill="#3758F9"
            />
            <circle
                cx="45.6673"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 45.6673 73.3333)"
                fill="#3758F9"
            />
            <circle
                cx="45.6673"
                cy="45.0001"
                r="1.66667"
                transform="rotate(180 45.6673 45.0001)"
                fill="#3758F9"
            />
            <circle
                cx="45.6673"
                cy="16.0001"
                r="1.66667"
                transform="rotate(180 45.6673 16.0001)"
                fill="#3758F9"
            />
            <circle
                cx="45.6673"
                cy="59.0001"
                r="1.66667"
                transform="rotate(180 45.6673 59.0001)"
                fill="#3758F9"
            />
            <circle
                cx="45.6673"
                cy="30.6668"
                r="1.66667"
                transform="rotate(180 45.6673 30.6668)"
                fill="#3758F9"
            />
            <circle
                cx="45.6673"
                cy="1.66683"
                r="1.66667"
                transform="rotate(180 45.6673 1.66683)"
                fill="#3758F9"
            />
            <circle
                cx="31.0006"
                cy="132"
                r="1.66667"
                transform="rotate(180 31.0006 132)"
                fill="#3758F9"
            />
            <circle
                cx="31.0006"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 31.0006 117.333)"
                fill="#3758F9"
            />
            <circle
                cx="31.0006"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 31.0006 102.667)"
                fill="#3758F9"
            />
            <circle
                cx="31.0006"
                cy="88.0001"
                r="1.66667"
                transform="rotate(180 31.0006 88.0001)"
                fill="#3758F9"
            />
            <circle
                cx="31.0008"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 31.0008 73.3333)"
                fill="#3758F9"
            />
            <circle
                cx="31.0008"
                cy="45.0001"
                r="1.66667"
                transform="rotate(180 31.0008 45.0001)"
                fill="#3758F9"
            />
            <circle
                cx="31.0008"
                cy="16.0001"
                r="1.66667"
                transform="rotate(180 31.0008 16.0001)"
                fill="#3758F9"
            />
            <circle
                cx="31.0008"
                cy="59.0001"
                r="1.66667"
                transform="rotate(180 31.0008 59.0001)"
                fill="#3758F9"
            />
            <circle
                cx="31.0008"
                cy="30.6668"
                r="1.66667"
                transform="rotate(180 31.0008 30.6668)"
                fill="#3758F9"
            />
            <circle
                cx="31.0008"
                cy="1.66683"
                r="1.66667"
                transform="rotate(180 31.0008 1.66683)"
                fill="#3758F9"
            />
            <circle
                cx="16.3341"
                cy="132"
                r="1.66667"
                transform="rotate(180 16.3341 132)"
                fill="#3758F9"
            />
            <circle
                cx="16.3341"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 16.3341 117.333)"
                fill="#3758F9"
            />
            <circle
                cx="16.3341"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 16.3341 102.667)"
                fill="#3758F9"
            />
            <circle
                cx="16.3341"
                cy="88.0001"
                r="1.66667"
                transform="rotate(180 16.3341 88.0001)"
                fill="#3758F9"
            />
            <circle
                cx="16.3338"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 16.3338 73.3333)"
                fill="#3758F9"
            />
            <circle
                cx="16.3338"
                cy="45.0001"
                r="1.66667"
                transform="rotate(180 16.3338 45.0001)"
                fill="#3758F9"
            />
            <circle
                cx="16.3338"
                cy="16.0001"
                r="1.66667"
                transform="rotate(180 16.3338 16.0001)"
                fill="#3758F9"
            />
            <circle
                cx="16.3338"
                cy="59.0001"
                r="1.66667"
                transform="rotate(180 16.3338 59.0001)"
                fill="#3758F9"
            />
            <circle
                cx="16.3338"
                cy="30.6668"
                r="1.66667"
                transform="rotate(180 16.3338 30.6668)"
                fill="#3758F9"
            />
            <circle
                cx="16.3338"
                cy="1.66683"
                r="1.66667"
                transform="rotate(180 16.3338 1.66683)"
                fill="#3758F9"
            />
            <circle
                cx="1.66732"
                cy="132"
                r="1.66667"
                transform="rotate(180 1.66732 132)"
                fill="#3758F9"
            />
            <circle
                cx="1.66732"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 1.66732 117.333)"
                fill="#3758F9"
            />
            <circle
                cx="1.66732"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 1.66732 102.667)"
                fill="#3758F9"
            />
            <circle
                cx="1.66732"
                cy="88.0001"
                r="1.66667"
                transform="rotate(180 1.66732 88.0001)"
                fill="#3758F9"
            />
            <circle
                cx="1.66732"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 1.66732 73.3333)"
                fill="#3758F9"
            />
            <circle
                cx="1.66732"
                cy="45.0001"
                r="1.66667"
                transform="rotate(180 1.66732 45.0001)"
                fill="#3758F9"
            />
            <circle
                cx="1.66732"
                cy="16.0001"
                r="1.66667"
                transform="rotate(180 1.66732 16.0001)"
                fill="#3758F9"
            />
            <circle
                cx="1.66732"
                cy="59.0001"
                r="1.66667"
                transform="rotate(180 1.66732 59.0001)"
                fill="#3758F9"
            />
            <circle
                cx="1.66732"
                cy="30.6668"
                r="1.66667"
                transform="rotate(180 1.66732 30.6668)"
                fill="#3758F9"
            />
            <circle
                cx="1.66732"
                cy="1.66683"
                r="1.66667"
                transform="rotate(180 1.66732 1.66683)"
                fill="#3758F9"
            />
          </svg>
        </span>
        </div>
    </section>
    <!-- ====== FAQ Section End -->
    <!-- ====== Contact Start ====== -->
    <section id="contact" class="relative py-20 md:py-[120px]">
        <div
            class="absolute left-0 top-0 -z-[1] h-full w-full dark:bg-dark"
        ></div>
        <div
            class="absolute left-0 top-0 -z-[1] h-1/2 w-full bg-[#E9F9FF] dark:bg-dark-700 lg:h-[45%] xl:h-1/2"
        ></div>
        <div class="container px-4">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
                    <div class="ud-contact-content-wrapper">
                        <div class="ud-contact-title mb-12 lg:mb-[150px]">
                <span
                    class="mb-6 block text-base font-medium text-dark dark:text-white"
                >
                  CONTACT US
                </span>
                            <h2
                                class="max-w-[260px] text-[35px] font-semibold leading-[1.14] text-dark dark:text-white"
                            >
                                Let's talk about your problem.
                            </h2>
                        </div>
                        <div class="mb-12 flex flex-wrap justify-between lg:mb-0">
                            <div class="mb-8 flex w-[330px] max-w-full">
                                <div class="mr-6 text-[32px] text-primary">
                                    <svg
                                        width="29"
                                        height="35"
                                        viewBox="0 0 29 35"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z"
                                        />
                                        <path
                                            d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z"
                                        />
                                    </svg>
                                </div>
                                <div>
                                    <h5
                                        class="mb-[18px] text-lg font-semibold text-dark dark:text-white"
                                    >
                                        Our Location
                                    </h5>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        401 Broadway, 24th Floor, Orchard Cloud View, London
                                    </p>
                                </div>
                            </div>
                            <div class="mb-8 flex w-[330px] max-w-full">
                                <div class="mr-6 text-[32px] text-primary">
                                    <svg
                                        width="34"
                                        height="25"
                                        viewBox="0 0 34 25"
                                        class="fill-current"
                                    >
                                        <path
                                            d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z"
                                        />
                                    </svg>
                                </div>
                                <div>
                                    <h5
                                        class="mb-[18px] text-lg font-semibold text-dark dark:text-white"
                                    >
                                        How Can We Help?
                                    </h5>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        info@yourdomain.com
                                    </p>
                                    <p class="mt-1 text-base text-body-color dark:text-dark-6">
                                        contact@yourdomain.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
                    <div
                        class="wow fadeInUp rounded-lg bg-white px-8 py-10 shadow-testimonial dark:bg-dark-2 dark:shadow-none sm:px-10 sm:py-12 md:p-[60px] lg:p-10 lg:px-10 lg:py-12 2xl:p-[60px]"
                        data-wow-delay=".2s
              "
                    >
                        <h3
                            class="mb-8 text-2xl font-semibold text-dark dark:text-white md:text-[28px] md:leading-[1.42]"
                        >
                            Send us a Message
                        </h3>
                        <form>
                            <div class="mb-[22px]">
                                <label
                                    for="fullName"
                                    class="mb-4 block text-sm text-body-color dark:text-dark-6"
                                >Full Name*</label
                                >
                                <input
                                    type="text"
                                    name="fullName"
                                    placeholder="Adam Gelius"
                                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                                />
                            </div>
                            <div class="mb-[22px]">
                                <label
                                    for="email"
                                    class="mb-4 block text-sm text-body-color dark:text-dark-6"
                                >Email*</label
                                >
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="example@yourmail.com"
                                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                                />
                            </div>
                            <div class="mb-[22px]">
                                <label
                                    for="phone"
                                    class="mb-4 block text-sm text-body-color dark:text-dark-6"
                                >Phone*</label
                                >
                                <input
                                    type="text"
                                    name="phone"
                                    placeholder="+885 1254 5211 552"
                                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                                />
                            </div>
                            <div class="mb-[30px]">
                                <label
                                    for="message"
                                    class="mb-4 block text-sm text-body-color dark:text-dark-6"
                                >Message*</label
                                >
                                <textarea
                                    name="message"
                                    rows="1"
                                    placeholder="type your message here"
                                    class="w-full resize-none border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                                ></textarea>
                            </div>
                            <div class="mb-0">
                                <button
                                    type="submit"
                                    class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-3 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-blue-dark"
                                >
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== Brands Section Start -->
    <section class="pb-20 dark:bg-dark">
        <div class="container px-4">
            <div
                class="-mx-4 flex flex-wrap items-center justify-center gap-8 xl:gap-11"
            >
                <a href="https://graygrids.com/">
                    <img
                        src="./assets/images/brands/graygrids.svg"
                        alt="graygrids"
                        class="dark:hidden"
                    />
                    <img
                        src="./assets/images/brands/graygrids-white.svg"
                        alt="graygrids"
                        class="hidden dark:block"
                    />
                </a>
                <a href="https://lineicons.com/">
                    <img
                        src="./assets/images/brands/lineicons.svg"
                        alt="lineicons"
                        class="dark:hidden"
                    />
                    <img
                        src="./assets/images/brands/lineicons-white.svg"
                        alt="graygrids"
                        class="hidden dark:block"
                    />
                </a>
                <a href="https://uideck.com/">
                    <img
                        src="./assets/images/brands/uideck.svg"
                        alt="uideck"
                        class="dark:hidden"
                    />
                    <img
                        src="./assets/images/brands/uideck-white.svg"
                        alt="graygrids"
                        class="hidden dark:block"
                    />
                </a>
                <a href="https://ayroui.com/">
                    <img
                        src="./assets/images/brands/ayroui.svg"
                        alt="ayroui"
                        class="dark:hidden"
                    />
                    <img
                        src="./assets/images/brands/ayroui-white.svg"
                        alt="graygrids"
                        class="hidden dark:block"
                    />
                </a>
                <a href="https://tailgrids.com/">
                    <img
                        src="./assets/images/brands/tailgrids.svg"
                        alt="tailgrids"
                        class="dark:hidden"
                    />
                    <img
                        src="./assets/images/brands/tailgrids-white.svg"
                        alt="graygrids"
                        class="hidden dark:block"
                    />
                </a>
            </div>
        </div>
    </section>
    <!-- ====== Brands Section End -->
@endsection
