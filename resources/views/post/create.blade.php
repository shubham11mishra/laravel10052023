<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form x-data="markdowneditor()" action="" method="post" class="">
                        @csrf

                        <textarea name="title" placeholder="New post title here..."
                            class=" block border-0 max-w-full w-full mb-5  focus:border-transparent focus:ring-0 placeholder-gray-500 placeholder:text-5xl placeholder:font-extrabold  text-4xl  font-extrabold "></textarea>
                        {{-- <div x-data="pills()">
                            <!-- Display Pills -->
                            <div class="flex flex-wrap">
                                <template x-for="(pill, index) in pills" :key="index">
                                    <div class="bg-blue-500 text-white rounded-full px-4 py-2 m-2">
                                        <span x-text="pill"></span>
                                        <!-- Add a close button to remove the pill -->
                                        <button @click="removePill(index)" class="ml-2 focus:outline-none">×</button>
                                    </div>
                                </template>
                            </div>

                            <!-- Add New Pill -->
                            <div class="mt-4">
                                <input x-model="newPill" @keydown.enter="addPill" type="text"
                                    placeholder="Add a new item" class="p-2 border rounded-md">
                                <button @click.prevent="addPill"
                                    class="px-4 py-2 bg-blue-500 text-white rounded-md ml-2">Add</button>
                            </div>
                        </div> --}}
                        <div x-data="pills()" class="relative">
                            <div role="combobox" class=" border-none p-0 flex items-center mb-5 mx-5  cursor-text">
                                <ul id="combo-selected" class="list-none flex flex-wrap w-full items-center">
                                    <template x-for="(pill,index) in pills" :key="pill.id">
                                        <li class=" w-max">
                                            <div role="group" aria-label="abc" class="flex mr-1 w-max">
                                                <span>#</span><span x-text="pill.tagName"></span>
                                                <button type="button" @click.prevent="removePill(index)"
                                                    aria-label="Remove abc" class="">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg" class="crayons-icon">
                                                        <path
                                                            d="m12 10.586 4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636l4.95 4.95z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </li>
                                    </template>


                                    <li class="self-center w-max">
                                        <input x-model="tagSearch" @input.debounce.500ms="fetchTags"
                                            @click.prevent="showTagBox = true" id="tag-input" autocomplete="off" type="text"
                                            placeholder="Add another..." class="border-0 block  w-max focus:ring-0">
                                    </li>

                                </ul>
                                <div x-show="showTagBox" @click.outside.stop="showTagBox = false" class="block">
                                    asd
                                </div>
                            </div>
                        </div>
                        <textarea x-model="markdown" name="body" id="body-textarea" cols="30" rows="10"
                            class="block  max-w-full w-full"></textarea>
                        <span x-text="markdown">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script type="text/javascript">
            let markdowneditor = () => {
                return {
                    markdown: Alpine.$persist(0),
                    tagSearch: null,
                    showTagBox : false,
                    init: function() {
                        // this.$watch('tagSearch', value => this.fetchTags(value))
                    },
                    fetchTags: async function() {
                        const a = await fetch('{{ route('tag.search') }}', {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({
                                tagSearch: this.tagSearch
                            })
                        }).then(data => data.json())
                        console.log(a);
                    }
                }
            }
            let pills = () => ({
                pills: [{
                    tagName: '1',
                    id: '1'
                }, {
                    tagName: '2',
                    id: '2'
                }, {
                    tagName: '3',
                    id: '3'
                }, {
                    tagName: '4',
                    id: '4'
                }, ],
                newPill: '',

                addPill() {
                    if (this.newPill.trim() !== '') {
                        this.pills.push(this.newPill.trim());
                        this.newPill = '';
                    }
                },

                removePill(index) {
                    this.pills.splice(index, 1);
                }
            })
        </script>
    </x-slot>
</x-app-layout>
