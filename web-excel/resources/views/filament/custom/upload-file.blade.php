@vite('resources/css/app.css')

<div>
    <x-filament::breadcrumbs :breadcrumbs="[
    '/admin/drinks' => 'Drinks',
    '' => 'List']
    " />

    <div class="flex justify-between mt-4">
        <h1 class="font-bold text-3xl">Drinks</h1>
        <div>
            {{ $data }}
        </div>
    </div>

    <div>
        <form wire:submit="save" class="w-full max-w-sm flex mt-2">
            <div class="mb-4">
                <label for="fileInput" class="block text-gray-500 text-sm font-bold mb-2">Pilih Berkas</label>
                <input type="file"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-500 leading-tight focus:outline-none focus:shadow-outline outline-2"
                    id="fileInput" wire:model="file">
            </div>
            <div class="flex items-center justify-between mt-3">
                <button
                    class="bg-[#f59e0b] hover:bg-[#fbbf24] text-white font-bold py-2 px-4 mx-4 text-justify rounded focus:outline-none focus:shadow-outline"
                    type="submit">Unggah</button>
            </div>
        </form>
    </div>
</div>
