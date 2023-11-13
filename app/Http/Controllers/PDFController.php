<?php



namespace App\Http\Controllers;

use App\Models\Pots;
use App\Models\User;
use Dompdf\Adapter\PDFLib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;



class PDFController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function generatePDF($id)
    {
        $post = Pots::find($id);
        //     $posts = Post::with([
        //         'details', 'user'
        //     ])->findOrFail($id);

        //     $posts = Post::loadview('user.cetak', compact('post'))->setPaper('a4');
        //     // return $pdf->download('laporan-pengaduan.pdf');
        //     return $pdf->download("{$post->full_name}.pdf");
    }
    public function generatecard($id)
    {

        // $post = Pots::find($id);
        // $post = Pots::with([
        //     'details', 'user'
        // ])->findOrFail($id);

        $post = Pots::findOrfail($id);
        return view('user.cetakcard', compact('post',));

        // $pdf = PDF::loadview('user.userdata.cetakcard', compact('post'))->setPaper('a4');
        // // return $pdf->download('laporan-pengaduan.pdf');
        // return $pdf->download("{$post->full_name}.pdf");
    }
    public function generatelaporan()
    {
        $title = 'cetak laporan';
        $i = '1';
        $posts = posts::all();
        return view('user.cetaklaporan', compact('posts', 'title', 'i'));
        // $pdf = PDF::loadview('user.userdata.cetakcard', compact('post'))->setPaper('a4');
        // // return $pdf->download('laporan-pengaduan.pdf');
        // return $pdf->download("{$post->full_name}.pdf");
    }

    public function card()
    {
        $title = 'detail';
        $user = Auth::user();
        $post = Pots::where('user_id', '=', $user->id)->first();

        if ($post) {
            //tampilkan dashboard jika sudah mendaftar
            return view('user.userdata.card', [
                'user' => $user,
                'post' => $post,
                'title' => $title
            ]);
        } else {
            //redirect ke form pendaftaran jika belum mendaftar
            return redirect('/post');
        }
        // $title = 'card';
        // return view('user.userdata.card', compact('title'));
    }
}
