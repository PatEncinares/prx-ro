 <div class="card-corner">
    <h2 class="panel-title">Login</h2>
            <form wire:submit.prevent="login" class="space-y-3">
                    <input type="text" wire:model.defer="username" placeholder="Username"
                        class="w-full p-2 bg-[#D4B46A] text-[#2B1B07] font-semibold border border-[#D1A13A] focus:ring-2 focus:ring-[#D1A13A]">
                    <input type="password" wire:model.defer="password" placeholder="Password"
                        class="w-full p-2 bg-[#D4B46A] text-[#2B1B07] font-semibold border border-[#D1A13A] focus:ring-2 focus:ring-[#D1A13A]">
                    <button type="submit" class="w-full btn-corner">LOGIN</button>

                    @error('login')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
            </form>
</div>