<?php

use function Livewire\Volt\{state};
use App\Liveiwre\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div class="navbar bg-[#161B22] rounded-lg py-4 px-4">
    <div class="flex-1">
      <a class=" text-xl">
        <div class="flex flex-row space-x-4">
            <img src="{{ asset('assets/logo/bentolioLogo.png') }}" />
            <p class="pt-5 text-white font-bold text-[32px]">BentoLio</p>
        </div>
      </a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1 text-white">
        <div class="space-x-5">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-ghost  bg-[#B8564D]">
                    Logout
                </button>
            </form>

        </div>
      </ul>
    </div>
  </div>
