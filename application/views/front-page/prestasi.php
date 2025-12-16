 <!-- Prestasi -->
 <section class="prestasi" id="prestasi">
   <h2 class="text-center">Prestasi Terbaru</h2>
   <hr class="garis-judul">
   <div class="container">
     <div class="row mx-auto">
       <?php foreach ($prestasi as $pres) : ?>
         <div class="col-md-4">
           <div class="card mb-3">
             <i class="fas fa-medal text-center emas"></i>
             <div class="card-body">
               <h5 class="card-title"><?= $pres['kejuaraan'] ?></h5>
               <ul class="list-group list-group-flush">
                 <li class="list-group-item">Juara : <?= $pres['juara']; ?></li>
                 <li class="list-group-item">Nama : <?= $pres['nama']; ?></li>
                 <li class="list-group-item">Tingkat : <?= $pres['tingkat']; ?></li>
               </ul>
               <a href="#" class="btn btn-sman4"><i class="fas fa-eye"></i> Lihat Prestasi</a>
             </div>
           </div>
         </div>
       <?php endforeach; ?>

     </div>
   </div>
 </section>
 <!-- end Prestasi -->