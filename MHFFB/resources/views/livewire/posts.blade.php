<div class="w-screen h-screen flex items-center justify-center ">
    <div class="max-w-lg mx-auto p-10 border border-gray-200 rounded-lg">
        <form wire:submit.prevent="submit">
            {{ $this->form }}

            <button type="submit" class="w-full bg-blue-500 text-white rounded-md mt-2 py-2.5">
                Submit
            </button>
        </form>
    </div>
</div>