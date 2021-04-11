<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('asset/images/')?>1.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>c_pengunjung">Home</a></span> <span class="mr-2"><a href="<?php echo base_url(); ?>c_pengunjung">Wisata Alam</a></span> <span>Detail Wisata</span></p>
       <h1 class="mb-0 bread">Detail Wisata</h1>
     </div>
   </div>
 </div>
</div>
<div class="container mt-5 mb-5">
  <?php foreach ($get_detailwisata as $key => $value): ?>            
    <form action="<?php echo site_url('c_pengunjung/input_cart/'); ?><?php echo $value->id_wisata ?>" method="post" enctype="multipart/form-data">
      <div class="row">
       <div class="col-lg-6 mb-5 ftco-animate">
        <a href="<?= base_url('images/')?><?php echo $value->foto; ?>" class="image-popup"><img src="<?= base_url('images/')?><?php echo $value->foto; ?>" class="img-fluid" alt="Colorlib Template"></a>
      </div>
      <input type="hidden" name="id_tiket" value="<?php echo $value->id_tiket; ?>">
      <input type="hidden" name="id_wisata" value="<?php echo $value->id_wisata; ?>">

      <div class="col-lg-6 product-details pl-md-5 ftco-animate">
        <h3><?php echo strtoupper($value->nama_wisata); ?></h3>
        <p>Lokasi : <b><?php echo $value->lokasi; ?></b></p>
        <div class="rating d-flex">
          <p class="text-left mr-4">
            Jam Operasional : <br>
            <b><?php echo $value->jam; ?></b>
          </p>
        </div>
        <p class="price"><span><?php if ($value->jumlah != 0 ){ ?>
          Rp.<?php echo $value->harga; ?>
        <?php }else { ?>
        Tiket tidak Tersedia</p>
        <?php }?></span></p>
        <p><?php echo $value->desc; ?></p>
        <div class="row mt-4">
          <div class="w-100"></div>
          <div class="input-group col-md-6 d-flex mb-3">
            <span class="input-group-btn mr-2">
              <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
               <i class="ion-ios-remove"></i>
             </button>
           </span>
           <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
           <span class="input-group-btn ml-2">
            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
             <i class="ion-ios-add"></i>
           </button>
         </span>
       </div>
       <div class="w-100"></div>
       <div class="col-md-12">
        <p style="color: #000;">
          <?php if ($value->jumlah != 0 ){ ?>
            <b><?php echo $value->jumlah; ?></b> Tiket Tersedia
          <?php }else { ?>
          Tiket tidak Tersedia</p>
        <?php }?>
      </div>
    </div>
    <?php if ($value->jumlah != 0 ){ ?>
      <span class="btn btn-black py-3 px-5">
        <button  type="submit" class="btn btn-outline-primary">Tambahkan ke Keranjang</button>
      </span>
    <?php }else { ?>
      <span class="btn btn-dark">Tiket tidak tersedia</span>
    <?php }?>
  </div>
<?php endforeach ?>
</div>
</form>
</div>

<div class="container">
  <div class="row justify-content-center mb-3 pb-3">
    <div class="col-md-12">
    <div class="pt-5 mt-5">
      <h3 class="mb-5">Ulasan Wisata</h3>
      <ul class="comment-list">
        <?php foreach ($ulasan as $key => $value): ?>
          <li class="comment">
            <div class="vcard bio">
                <a href="<?= base_url('images/')?><?php echo $value->foto; ?>" class="image-popup"><img src="<?= base_url('images/')?><?php echo $value->foto; ?>" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="comment-body">
              <h3><?php echo strtoupper($value->nama); ?></h3>
              <div class="meta"><?php echo $value->tanggal; ?></div>
              <p><?php echo $value->ulasan; ?></p>
            </div>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
    </div>
  </div>          
</div>