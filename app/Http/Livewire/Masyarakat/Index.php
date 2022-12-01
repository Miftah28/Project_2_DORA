<?php

namespace App\Http\Livewire\Masyarakat;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Index extends Component
{

    use WithPagination;

    public $name, $nik, $notelp, $alamat, $email, $password, $role, $masyarakat_id;
    // public $stokdarahs;
    public $search = '';

    protected $paginationTheme = 'bootstrap';

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'nik' => '',
            'notelp' => '',
            'alamat' => '',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'role' => 'required|integer|min:0'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function savemasyarakat()
    {
        $validatedData = $this->validate();

        User::create($validatedData,[
            'name' => $validatedData['name'],
            'nik' => $validatedData['nik'],
            'notelp' => $validatedData['notelp'],
            'alamat' => $validatedData['alamat'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);
        Session()->flash('message', 'Masyarakat added successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    
    public function updatemasyarakat()
    {
        $validatedData = $this->validate();

        User::where('id', $this->masyarakat_id)->update([
            'name' => $validatedData['name'],
            'nik' => $validatedData['nik'],
            'notelp' => $validatedData['notelp'],
            'alamat' => $validatedData['alamat'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);
        Session()->flash('message', 'Masyarkat updated successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function editmasyarakat(int $masyarakat_id)
    {
        $masyarakat = User::find($masyarakat_id);
        if ($masyarakat) {
            $this->masyarakat_id = $masyarakat->id;
            $this->name = $masyarakat->name;
            $this->nik = $masyarakat->nik;
            $this->notelp = $masyarakat->notelp;
            $this->alamat = $masyarakat->alamat;
            $this->email = $masyarakat->email;
            $this->password = $masyarakat->password;
            $this->role = $masyarakat->role;
        }else {
            return redirect()->to('/masyarakat');
        }
    }

    public function deletemasyarakat(int $masyarakat_id)
    {
        $this->masyarakat_id = $masyarakat_id;
    }

    public function destroymasyarakat()
    {
        User::find($this->masyarakat_id)->delete();
        Session()->flash('message', 'Masyarkat deleted successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closemodal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->nik = '';
        $this->notelp = '';
        $this->alamat = '';
        $this->email = '';
        $this->password = '';
        $this->role = '';
    }

    public function render()
    {
        $masyarakats = User::where('name', 'like', '%'.$this->search.'%')->orderBy('id', 'ASC')->paginate(10);
        return view('livewire.masyarakat.index', ['masyarakats' => $masyarakats]);
    }
}
