<div fixed-plugin>
    <a fixed-plugin-button
       class="fixed px-4 py-2 text-xl bg-white shadow-lg cursor-pointer bottom-8 right-8 z-990 rounded-circle text-slate-700">
        <i class="py-2 pointer-events-none fa fa-cog"> </i>
    </a>
    <!-- -right-90 in loc de 0-->
    <div fixed-plugin>
        <a fixed-plugin-button
           class="fixed px-4 py-2 text-xl bg-white shadow-lg cursor-pointer bottom-8 right-8 z-990 rounded-circle text-slate-700">
            <i class="py-2 pointer-events-none fa fa-cog"> </i>
        </a>
        <!-- -right-90 in loc de 0-->
        <div fixed-plugin-card
             class="z-sticky backdrop-blur-2xl backdrop-saturate-200 dark:bg-slate-850/80 shadow-3xl w-90 ease -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white/80 bg-clip-border px-2.5 duration-200">
            <div class="px-6 pt-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                <div class="float-left">
                    <h5 class="mt-4 mb-0 dark:text-white">All Users</h5>
                    <p class="dark:text-white dark:opacity-80">Only admin can change the roles.</p>
                </div>
                <div class="float-right mt-6">
                    <button fixed-plugin-close-button
                            class="inline-block p-0 mb-4 text-sm font-bold leading-normal text-center uppercase align-middle transition-all ease-in bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:-translate-y-px tracking-tight-rem bg-150 bg-x-25 active:opacity-85 dark:text-white text-slate-700">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr
                class="h-px mx-0 mysign-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent"/>
            <div class="flex-auto p-6 pt-0 overflow-auto sm:pt-4">
                <div class="flex hidden my-4">
                    <h6 class="mb-0 dark:text-white">Navbar Fixed</h6>
                    <div class="block pl-0 ml-auto min-h-6">
                        <input navbarFixed
                               class="rounded-10 duration-250 ease-in-out after:rounded-circle after:shadow-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                               type="checkbox"/>
                    </div>
                </div>
                <div class="flex hidden">
                    <button transparent-style-btn
                            class="inline-block w-full px-4 py-2.5 mb-2 font-bold leading-normal text-center text-white capitalize align-middle transition-all bg-blue-500 border border-transparent border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-500 to-violet-500 hover:border-blue-500"
                            data-class="bg-transparent" active-style>White
                    </button>
                    <button white-style-btn
                            class="inline-block w-full px-4 py-2.5 mb-2 ml-2 font-bold leading-normal text-center text-blue-500 capitalize align-middle transition-all bg-transparent border border-blue-500 border-solid rounded-lg cursor-pointer text-sm xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 hover:-translate-y-px dark:cursor-not-allowed dark:opacity-65 dark:pointer-events-none dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white dark:border-0 hover:shadow-xs active:opacity-85 ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-none hover:border-blue-500"
                            data-class="bg-white">Dark
                    </button>
                </div>
                <div class="w-full max-w-xs mx-auto">

                    <form class="max-w-sm mx-auto flex flex-col" action="{{ route('change.role') }}" method="post">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        @foreach($data['user'] as $user)
                            <div class="flex w-full justify-between flex-row">
                                <div class="flex px-2 py-1">
                                    <div>
                                        <img src="{{ $user->picture }}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user2" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">{{ $user->name }}</h6>
                                    </div>
                                </div>
                                <select data-user-id="{{ $user['id'] }}"
                                        class="roleSelect block py-2.5 px-0 w-20 text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                    <div class="flex">
                                        <option value="{{getRole($user["id"])}}" selected hidden>{{getRole($user["id"])}}</option>
                                        @foreach($data['roles'] as $role)
                                            <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                                        @endforeach
                                    </div>
                                </select>
                            </div>
                        @endforeach
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        console.log('test1')
        window.Components = {
            customSelect(options) {
                return {
                    init() {
                        this.$refs.listbox.focus()
                        this.optionCount = this.$refs.listbox.children.length
                        this.$watch('selected', value => {
                            if (!this.open) return

                            if (this.selected === null) {
                                this.activeDescendant = ''
                                return
                            }

                            this.activeDescendant = this.$refs.listbox.children[this.selected - 1].id
                        })
                    },
                    activeDescendant: null,
                    optionCount: null,
                    open: false,
                    selected: null,
                    value: 1,
                    choose(option) {
                        this.value = option
                        this.open = false
                    },
                    onButtonClick() {
                        if (this.open) return
                        this.selected = this.value
                        this.open = true
                        this.$nextTick(() => {
                            this.$refs.listbox.focus()
                            this.$refs.listbox.children[this.selected - 1].scrollIntoView({block: 'nearest'})
                        })
                    },
                    onOptionSelect() {
                        if (this.selected !== null) {
                            this.value = this.selected
                        }
                        this.open = false
                        this.$refs.button.focus()
                    },
                    onEscape() {
                        this.open = false
                        this.$refs.button.focus()
                    },
                    onArrowUp() {
                        this.selected = this.selected - 1 < 1 ? this.optionCount : this.selected - 1
                        this.$refs.listbox.children[this.selected - 1].scrollIntoView({block: 'nearest'})
                    },
                    onArrowDown() {
                        this.selected = this.selected + 1 > this.optionCount ? 1 : this.selected + 1
                        this.$refs.listbox.children[this.selected - 1].scrollIntoView({block: 'nearest'})
                    },
                    ...options,
                }
            },
        }
        console.log('test')

        const roleSelect = document.querySelectorAll(".roleSelect");

        roleSelect.forEach((elm) => {
            elm.addEventListener("change", function () {
                roleId = this.value
                userId = this.getAttribute('data-user-id')
                changeRole(roleId, userId);
            })
        })

        function changeRole(id, userId) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "post",
                url: "/dashboard/update",
                data: {id, userId},
                success: (data) => {
                    console.log(data)
                }
            })
        }

    </script>

</div>
