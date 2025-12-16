<div class="bg-detail-berita">
    <div class="container">
        <div class="detail-berita">
            <div class="detail-berita-judul">
                <h2><?= $detailberita['judul']; ?></h2>
                <hr>
            </div>
            <div class="detail-berita-body">
                <img src="<?= base_url() . 'assets/images/berita/' . $detailberita['foto']; ?>" alt="" class="img-thumbnail float-left m-3">
                <h6>Kategori : <?= $detailberita['nama_kategori']; ?></h6>
                <p><?= $detailberita['isi']; ?></p>
                <h6>Dihat : <?= $detailberita['jumlah_lihat']; ?> Orang</h6>
                <h6>Tanggal Posting : <?= $detailberita['created_at']; ?></h6>
                <h6>Penulis : <?= $detailberita['penulis']; ?></h6>
                <a href="<?= base_url() . 'index.php/website/kategori/' . $detailberita['id_kategori']; ?>" class="btn btn-sman4"><i class="fas fa-search-plus"></i> Kembali ke Kategori </a>
            </div>
            <div class="clearfix"></div>


        </div>


    </div>
</div>