<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    
                    echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total, 0,',','.');
                 ?>
            </div><br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form action="<?php echo base_url() ?>dashboard/proses_pesanan" method="post">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap Anda">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon Anda">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select name="" id="" class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">POST Indonesia</option>
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select name="" id="" class="form-control">
                        <option value="">BCA - XXXXXXX</option>
                        <option value="">BNI - XXXXXXX</option>
                        <option value="">BRI - XXXXXXX</option>
                        <option value="">MANDIRI - XXXXXXX</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            
            </form>

            <?php 
                }else{
                    echo"<h4>Keranjang belanja anda masih kosong!!!";
                }
            ?>
        </div>
        
        <div class="col-md-2"></div>
    </div>
</div>