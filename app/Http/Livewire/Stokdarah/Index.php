<?php

namespace App\Http\Livewire\Stokdarah;

use Livewire\WithPagination;
use App\Models\Stokdarah;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;

    public $goldar, $wb, $prc, $t, $ffp, $tglupdatestok, $stokdarah_id;
    // public $stokdarahs;
    public $search = '';

    protected $paginationTheme = 'bootstrap';

    protected function rules()
    {
        return [
            'goldar' => 'required',
            'wb' => 'required|integer|min:0',
            'prc' => 'required|integer|min:0',
            't' => 'required|integer|min:0',
            'ffp' => 'required|integer|min:0',
            'tglupdatestok' => 'required'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function savestokdarah()
    {
        $validatedData = $this->validate();

        Stokdarah::create($validatedData);
        Session()->flash('message', 'Stok darah added successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function updatestokdarah()
    {
        $validatedData = $this->validate();

        Stokdarah::where('id', $this->stokdarah_id)->update([
            'goldar' => $validatedData['goldar'],
            'wb' => $validatedData['wb'],
            'prc' => $validatedData['prc'],
            't' => $validatedData['t'],
            'ffp' => $validatedData['ffp'],
            'tglupdatestok' => $validatedData['tglupdatestok']
        ]);
        Session()->flash('message', 'Stok darah updated successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function editstokdarah(int $stokdarah_id)
    {
        $stokdarah = Stokdarah::find($stokdarah_id);
        if ($stokdarah) {
            $this->stokdarah_id = $stokdarah->id;
            $this->goldar = $stokdarah->goldar;
            $this->wb = $stokdarah->wb;
            $this->prc = $stokdarah->prc;
            $this->t = $stokdarah->t;
            $this->ffp = $stokdarah->ffp;
            $this->tglupdatestok = $stokdarah->tglupdatestok;
        }else {
            return redirect()->to('/stokdarah');
        }
    }

    public function deletestokdarah(int $stokdarah_id)
    {
        $this->stokdarah_id = $stokdarah_id;
    }

    public function destroystokdarah()
    {
        Stokdarah::find($this->stokdarah_id)->delete();
        Session()->flash('message', 'Stok darah deleted successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closemodal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->goldar = '';
        $this->wb = '';
        $this->prc = '';
        $this->t = '';
        $this->ffp = '';
        $this->tglupdatestok = '';
    }

    public function render()
    {
        $stokdarahs = Stokdarah::where('goldar', 'like', '%'.$this->search.'%')->orderBy('id', 'ASC')->paginate(4);
        return view('livewire.stokdarah.index', ['stokdarahs' => $stokdarahs]);
    }
}
