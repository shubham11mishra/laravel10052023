<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 space-y-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("api") }}
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button id="userdetailbtn">a</button>
                    <span id="userdetail"></span>
                </div>
            </div>
        </div>
    </div>
    <script>
        const userdetailbtn = document.getElementById('userdetailbtn');
        const userdetail = document.getElementById('userdetail');
        userdetailbtn.addEventListener('click', () => {
            axios.get('{{ route('api.user.detail') }}')
                .then(response => {
                    userdetail.innerHTML = JSON.stringify(response.data);
                })
                .catch(error => {
                    console.log(error);
                })
        })
    </script>
</x-app-layout>