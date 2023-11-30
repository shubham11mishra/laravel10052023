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

                        <textarea name="title" placeholder="New post title here..." class=" block border-0 max-w-full w-full mb-5  focus:border-transparent focus:ring-0 placeholder-gray-500 placeholder:text-5xl placeholder:font-extrabold  text-4xl  font-extrabold "></textarea>

                        <div x-data="pills()" class="relative">
                            <div role="combobox" class=" border-none p-0 flex items-center mb-5 mx-5  cursor-text">
                                <ul id="combo-selected" class="list-none flex flex-wrap w-full items-center">
                                    <template x-for="(pill,index) in pills" :key="index">
                                        <li class=" w-max">
                                            <div role="group" aria-label="abc" class="flex mr-1 w-max">
                                                <span>#</span><span x-text="pill.title"></span>
                                                <button type="button" @click.prevent="removePill(index)" aria-label="Remove abc" class="">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="crayons-icon">
                                                        <path d="m12 10.586 4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636l4.95 4.95z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </li>
                                    </template>
                                    <template x-if="pills.length < 4">
                                        <li class="self-center w-max mx-auto relative ml-auto flex-grow">
                                            <div class="mx-auto">
                                                <input x-model="tagSearch" @input.debounce.500ms="fetchTags" @keydown.enter.prevent="addNewTag" id="tag-input" autocomplete="off" type="text" placeholder="Add another..." class="border-0 block  w-full focus:ring-0">
                                                <ul class="absolute w-full mt-1 shadow-md ">
                                                    <template x-for="(tag_search_result,index) in tag_search_results" :key="tag_search_result.id">
                                                        <li class="bg-red-100 border-collapse border py-1 px-2  cursor-pointer" @click="addPillToeditor">
                                                            <h1 x-text="tag_search_result.title"></h1>
                                                        </li>

                                                    </template>

                                                </ul>
                                            </div>
                                        </li>
                                    </template>


                                </ul>
                                <!-- <div x-show="showTagBox" @click.outside.stop="showTagBox = false" class="block">
                                    asd
                                </div> -->
                            </div>
                        </div>
                        <textarea x-model="markdown" name="body" id="body-textarea" cols="30" rows="10" class="block  max-w-full w-full"></textarea>
                        <span x-text="markdown">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script type="text/javascript">
            document.addEventListener('alpine:init', () => {
                Alpine.store('data', {
                    markdown: Alpine.$persist({
                        content: '123',
                        pills: []
                    })
                })

            })
            let markdowneditor = () => {
                return {
                    tagSearch: null,
                    showTagBox: false,
                    tag_search_results: [],

                    get markdown() {
                        return Alpine.store('data').markdown.content;
                    },
                    set markdown(value) {
                        Alpine.store('data').markdown.content = value;
                    },
                    tags: Alpine.reactive({
                        count: 1
                    }),
                    fetchTags: async function() {
                        const result = await fetch('<?= route('tag.search') ?>', {
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
                        this.tag_search_results = result;
                    },
                    addNewTag: function(e) {
                        if (this.checkIfTagExist()) {
                            $dispatch('add-pill', {
                                title: this.tagSearch
                            })

                        } else {
                            this.addNewTag()
                        }
                    },
                    checkIfTagExist: function() {

                    },
                    addNewTag: function() {

                    },
                    addPillToeditor: function() {
                        this.$dispatch('add-pill', this.tag_search_result);
                        this.tag_search_results = [];
                        this.tagSearch = ''
                    }
                }
            }
            const pills = function() {
                return {
                    get pills() {
                        return Alpine.store('data').markdown.pills;
                    },
                    newPill: {},
                    addPill: function() {
                        Alpine.store('data').markdown.pills = [...Alpine.store('data').markdown.pills, this.newPill]
                    },

                    removePill: function(index) {
                        Alpine.store('data').markdown.pills.splice(index, 1);
                    }
                };
            };

            document.addEventListener('add-pill', (e) => {
                const pill = {
                    ...e.detail
                }
                const myPills = pills()
                myPills.newPill = pill
                myPills.addPill()
            })
        </script>
    </x-slot>
</x-app-layout>