<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ProductModel; 
use Dompdf\Dompdf;

class TransaksiController extends BaseController
{
    protected $cart;
    protected $product; 

    function __construct()
    {
        helper('number');
        helper('form');
        $this->cart = \Config\Services::cart();

        $this->product = new ProductModel();
    }

    public function index()
    {
        $data['items'] = $this->cart->contents();
        $data['total'] = $this->cart->total();
        return view('v_keranjang', $data);
    }

    public function cart_add()
    {
        $this->cart->insert(array(
            'id'        => $this->request->getPost('id'),
            'qty'       => 1,
            'price'     => (float) str_replace(['.', ','], '', $this->request->getPost('harga')),
            'name'      => $this->request->getPost('nama'),
            'options'   => array('foto' => $this->request->getPost('foto'))
        ));
        session()->setflashdata('success', 'Produk berhasil ditambahkan ke keranjang. (<a href="' . base_url() . 'keranjang">Lihat</a>)');
        return redirect()->to(base_url('/'));
    }

    public function cart_clear()
    {
        $this->cart->destroy();
        session()->setflashdata('success', 'Keranjang Berhasil Dikosongkan');
        return redirect()->to(base_url('keranjang'));
    }

    public function cart_edit()
    {
        $i = 1;
        foreach ($this->cart->contents() as $value) {
            $this->cart->update(array(
                'rowid' => $value['rowid'],
                'qty'   => $this->request->getPost('qty' . $i++)
            ));
        }

        session()->setflashdata('success', 'Keranjang Berhasil Diedit');
        return redirect()->to(base_url('keranjang'));
    }

    public function cart_delete($rowid)
    {
        $this->cart->remove($rowid);
        session()->setflashdata('success', 'Keranjang Berhasil Dihapus');
        return redirect()->to(base_url('keranjang'));
    }

public function download()
{
        // ambil data keranjang
    $items = $this->cart->contents();

		//pass data to file view
    $html = view('v_invoice', [
        'items' => $items,
        'total' => $this->cart->total(),
    ]);

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();

    // load HTML content (file view)
    $dompdf->loadHtml($html);

    // (optional) setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // render html as PDF
    $dompdf->render();

    // output the generated pdf
    $dompdf->stream('invoice-' . date('YmdHis'), ['Attachment' => true]);
}

}
  