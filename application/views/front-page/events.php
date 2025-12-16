 <!-- Event -->
 <section class="events" id="events">
   <h2 class="text-center">
     Events
   </h2>
   <hr class="garis-judul">
   <div class="container">
     <ul class="list-unstyled">
       <?php foreach ($events as $ev) : ?>
         <li class="media mb-4 media-events">
           <div class="row">
             <div class="col-md-4">
               <img src="<?= base_url() ?>assets/images/slideshow/01.jpg" class="mr-3 img-thumbnail float-left" alt="...">
             </div>
             <div class="col-md-8">
               <div class="media-body">
                 <h5 class="mt-0 mb-1"><?= $ev['nama_events']; ?></h5>
                 <p><?= $ev['keterangan']; ?></p>
                 <h6>Tanggal Posting : <?= $ev['created_at'] ?></h6>
                 <br><br>
                 <a href="http://" class="btn btn-sman4"><i class="fas fa-sign-in-alt"></i> Lihat dan Daftar</a>
               </div>

             </div>
           </div>

         </li>

         <hr>
       <?php endforeach; ?>

     </ul>
   </div>
 </section>