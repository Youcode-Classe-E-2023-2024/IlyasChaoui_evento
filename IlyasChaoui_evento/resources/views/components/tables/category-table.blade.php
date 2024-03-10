<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3" style="width: 605px;">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table
                        class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                        <thead class="align-bottom">
                        <tr>
                            <th
                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Category Name
                            </th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Created at
                            </th>
                        </tr>
                        </thead>
                        <tbody class="border-t">
                        @forelse ($data['category'] as $item)
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2">
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                {{ $item['name'] }}
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                        {{ $item->created_at->diffForHumans() }}
                                    </p>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    <form role="form text-left"
                                          action="{{ route('delete.category', ['id' => $item['id']]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <x-popup.popup-delete-category/>
                                    </form>
                                </td>
                                <td>
                                    <!-- update popup  -->
                                    <x-popup.popup-update-category :item="$item"/>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"
                                    class="p-2 text-center bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                    No category found
                                </td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
