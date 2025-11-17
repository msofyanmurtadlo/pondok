<?php

namespace App\Livewire;

use App\Models\Akademik;
use Livewire\Component;
use Livewire\WithPagination;

class AkademikIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $akademiks = Akademik::latest()->paginate(6);

        return view('livewire.akademik-index', [
            'akademiks' => $akademiks
        ])->layout('layouts.app', [
            'title' => 'Akademik',
            'description' => 'Halaman akademik untuk informasi terbaru seputar kegiatan akademik di pondok pesantren kami.',
        ]);
    }
}
