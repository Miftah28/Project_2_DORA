<?php

namespace App\Http\Livewire\Transaksi;

use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Transaksi;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $nama, $nik, $notelp, $tanggal, $sk, $jumlah, $keterangan, $status, $transaksi_id;
    // public $transaksis;
    public $search = '';

    protected $paginationTheme = 'bootstrap';

    protected function rules()
    {
        return [
            'nama' => 'required',
            'nik' => 'required',
            'notelp' => 'required',
            'tanggal' => 'required',
            'sk' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
            'status' => 'required'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function savetransaksi()
    {
        // $sk = $request->sk;
        // $filename = time() . '.' . $sk->getClientOriginalExtension();
        // $request->sk->move('assets', $filename);
        $validatedData = $this->validate();
        $sk = $this->sk->store('img','public');
        // Transaksi::create($validatedData,[
        //     'nama' => $validatedData['nama'],
        //     'nik' => $validatedData['nik'],
        //     'notelp' => $validatedData['notelp'],
        //     'tanggal' => $validatedData['tanggal'],
        //     'sk' => $validatedData[$sk],
        //     'jumlah' => $validatedData['jumlah'],
        //     'keterangan' => $validatedData['keterangan'],
        //     'status' => $validatedData['status'],
        // ]);
        Transaksi::create([
            'nama' => $this->nama,
            'nik' => $this->nik,
            'notelp' => $this->notelp,
            'tanggal' => $this->tanggal,
            'sk' => $sk,
            'jumlah' => $this->jumlah,
            'keterangan' => $this->keterangan,
            'status' => $this->status,
        ]);
        Session()->flash('message', 'Transaksi added successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function updatetransaksi()
    {
        $validatedData = $this->validate();
        $sk = $this->sk->store('public/assets/img');
        Transaksi::where('id', $this->transaksi_id)->update([
            'nama' => $validatedData['nama'],
            'nik' => $validatedData['nik'],
            'notelp' => $validatedData['notelp'],
            'tanggal' => $validatedData['tanggal'],
            'sk' => $sk,
            'jumlah' => $validatedData['jumlah'],
            'keterangan' => $validatedData['keterangan'],
            'status' => $validatedData['status'],
        ]);
        Session()->flash('message', 'Stok darah updated successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function edittransaksi(int $transaksi_id)
    {
        $transaksi = Transaksi::find($transaksi_id);
        if ($transaksi) {
            $this->transaksi_id = $transaksi->id;
            $this->nama = $transaksi->nama;
            $this->nik = $transaksi->nik;
            $this->notelp = $transaksi->notelp;
            $this->tanggal = $transaksi->tanggal;
            $this->sk = $transaksi->sk;
            $this->jumlah = $transaksi->jumlah;
            $this->keterangan = $transaksi->keterangan;
            $this->status = $transaksi->status;
        }else {
            return redirect()->to('/transaksi');
        }
    }

    public function deletetransaksi(int $transaksi_id)
    {
        $this->transaksi_id = $transaksi_id;
    }

    public function destroytransaksi()
    {
        Transaksi::find($this->transaksi_id)->delete();
        Session()->flash('message', 'transaksi deleted successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closemodal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nama = '';
        $this->nik = '';
        $this->notelp = '';
        $this->tanggal = '';
        $this->sk = '';
        $this->jumlah = '';
        $this->keterangan = '';
        $this->status = '';
    }

    public function render()
    {
        $transaksis = Transaksi::where('nama', 'like', '%'.$this->search.'%')->orderBy('id', 'ASC')->paginate(4);
        return view('livewire.transaksi.index', ['transaksis' => $transaksis]);
    }
}
