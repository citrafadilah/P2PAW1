<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $pemasukan = Pemasukan::sum('jumlah');
        $pengeluaran = Pengeluaran::sum('jumlah');
        return view('dashboard', compact('pemasukan', 'pengeluaran'));
    }
}
