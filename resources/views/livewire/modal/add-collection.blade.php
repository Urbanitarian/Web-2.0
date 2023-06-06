<div>
    <div class="px-6 py-6 bg-white rounded">
        <div class="text-xl text-[#667080] font-bold">
            Create new collection
        </div>
        <div class="mt-6">
            <form action="" wire:submit.prevent='addCollection'>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" wire:model="name" class="form-control" id="" required>

                </div>
                <div class="form-group mt-3">
                    <label for="">Description</label>
                    <input type="text" wire:model="description" class="form-control" id="">

                </div>
                <div class="mt-8 flex gap-2 justify-end items-center">

                    <button type="button" wire:click="$emit('closeModal')"
                        class="flex items-center justify-center gap-2 px-6 py-2 font-normal text-center text-[#667080] bg-[#EEF1F4] rounded shadow-lg lex hover:bg-gray-200">Cancel</button>
                    <button type="submit"
                        class="flex items-center justify-center gap-2 px-6 py-2 font-normal text-center text-white bg-gray-800 rounded shadow-lg lex hover:bg-black">Create</button>

                </div>
            </form>

        </div>

    </div>
</div>
