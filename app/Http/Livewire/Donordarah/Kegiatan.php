<?php

namespace App\Http\Livewire\Donordarah;

use App\Models\Kegiatan as ModelsKegiatan;
use Livewire\Component;
use Livewire\WithPagination;

class Kegiatan extends Component
{
    use WithPagination;

    public $tempat, $target, $tglkegiatan, $kegiatan_id;
    
    public $search = '';

    protected $paginationTheme = 'bootstrap';

    protected function rules()
    {
        return [
            'tempat' => 'required',
            'target' => 'required|integer|min:0',
            'tglkegiatan' => 'required'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function savekegiatan()
    {
        $validatedData = $this->validate();

        ModelsKegiatan::create($validatedData);
        Session()->flash('message', 'kegiatan added successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function updatekegiatan()
    {
        $validatedData = $this->validate();

        ModelsKegiatan::where('id', $this->kegiatan_id)->update([
            'tempat' => $validatedData['tempat'],
            'target' => $validatedData['target'],
            'tglkegiatan' => $validatedData['tglkegiatan']
        ]);
        Session()->flash('message', 'kegiatan updated successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function editkegiatan(int $kegiatan_id)
    {
        $kegiatan = ModelsKegiatan::find($kegiatan_id);
        if ($kegiatan) {
            $this->kegiatan_id = $kegiatan->id;
            $this->tempat = $kegiatan->tempat;
            $this->target = $kegiatan->target;
            $this->tglkegiatan = $kegiatan->tglkegiatan;
        }else {
            return redirect()->to('/kegiatan');
        }
    }

    public function deletekegiatan(int $kegiatan_id)
    {
        $this->kegiatan_id = $kegiatan_id;
    }

    public function destroykegiatan()
    {
        ModelsKegiatan::find($this->kegiatan_id)->delete();
        Session()->flash('message', 'kegiatan deleted successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closemodal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->tempat = '';
        $this->target = '';
        $this->tglkegiatan = '';
    }

    public function render()
    {
        $kegiatans = ModelsKegiatan::where('tglkegiatan', 'like', '%'.$this->search.'%')->orderBy('id', 'ASC')->paginate(4);
        return view('livewire.donordarah.kegiatan', ['kegiatans' => $kegiatans]);
    }
}
