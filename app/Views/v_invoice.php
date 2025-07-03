<h1>Invoice Pembelian</h1>

<table border="1" width="100%" cellpadding="5">
    <tr>
        <th>Nama</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Subtotal</th>
    </tr>

    <?php
        $grandTotal = 0;
        $no = 1;
        foreach ($items as $index => $produk) :
            $jumlah   = (int) $produk['qty'];
            $hargaRaw = is_array($produk['price']) ? 0 : $produk['price'];
            $harga    = (float) preg_replace('/[^\d.]/', '', $hargaRaw);
            $subtotal = $harga * $jumlah;
            $grandTotal += $subtotal;
    ?>
        <tr>
            <td><?= esc($produk['name']) ?></td>
            <td align="center"><?= $jumlah ?></td>
            <td align="right"><?= "Rp " . number_format($harga, 0, ",", ".") ?></td>
            <td align="right"><?= "Rp " . number_format($subtotal, 0, ",", ".") ?></td>
        </tr>
    <?php endforeach; ?>

    <tr class="total-row">
        <td colspan="3" class="right">Total</td>
        <td class="right"><?= 'Rp ' . number_format($grandTotal, 0, ',', '.'); ?></td>
    </tr>
</table>
Downloaded on <?= date("Y-m-d H:i:s") ?>