<?php

namespace App\Http\Livewire\Donordarah;

use App\Models\Datadonor as Modelsdatadonor;
use Livewire\Component;
use Livewire\WithPagination;

class Datadonor extends Component
{
    use WithPagination;

    public $nama, $umur, $goldar ,$tensi , $bb, $kt, $datadonor_id;
    
    public $search = '';

    protected $paginationTheme = 'bootstrap';

    protected function rules()
    {
        return [
            'nama' => 'required',
            'umur' => 'required|integer|min:17|max:60',
            'goldar' => '',
            'tensi' => '',
            'bb' => '',
            'kt' => ''
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function savedatadonor()
    {
        $validatedData = $this->validate();

        Modelsdatadonor::create($validatedData,[
            'nama' => $validatedData['nama'],
            'umur' => $validatedData['umur'],
            'goldar' => $validatedData['goldar'],
            'tensi' => $validatedData['tensi'],
            'bb' => $validatedData['bb'],
            'kt' => $validatedData['kt']
        ]);
        Session()->flash('message', 'data donor added successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function update()
    {
        $validatedData = $this->validate();

        Modelsdatadonor::where('id', $this->datadonor_id)->update([
            'nama' => $validatedData['nama'],
            'umur' => $validatedData['umur'],
            'goldar' => $validatedData['goldar'],
            'tensi' => $validatedData['tensi'],
            'bb' => $validatedData['bb'],
            'kt' => $validatedData['kt']
        ]);
        Session()->flash('message', 'data donor updated successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function editdatadonor(int $datadonor_id)
    {
        $datadonor = Modelsdatadonor::find($datadonor_id);
        if ($datadonor) {
            $this->datadonor_id = $datadonor->id;
            $this->nama = $datadonor->nama;
            $this->umur = $datadonor->umur;
            $this->goldar = $datadonor->goldar;
            $this->tensi = $datadonor->tensi;
            $this->bb = $datadonor->bb;
            $this->kt = $datadonor->kt;
        }else {
            return redirect()->to('/datadonor');
        }
    }

    public function deletedatadonor(int $datadonor_id)
    {
        $this->datadonor_id = $datadonor_id;
    }

    public function destroydatadonor()
    {
        Modelsdatadonor::find($this->datadonor_id)->delete();
        Session()->flash('message', 'data donor deleted successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closemodal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nama = '';
        $this->umur = '';
        $this->goldar = '';
        $this->tensi = '';
        $this->bb = '';
        $this->kt = '';
    }

    public function render()
    {
        $datadonors = Modelsdatadonor::where('nama', 'like', '%'.$this->search.'%')->orderBy('id', 'ASC')->paginate(10);
        return view('livewire.donordarah.datadonor', ['datadonors' => $datadonors]);
    }
}
