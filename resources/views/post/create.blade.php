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
                        <textarea  x-model="markdown"  name="body" id="body-textarea" cols="30" rows="10"
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
                    markdown : Alpine.$persist(0),

                }
            }
        </script>
    </x-slot>
</x-app-layout>
