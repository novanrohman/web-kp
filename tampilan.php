 <?php
  include("includes\header.php");
  include("includes\bar.php");
  //cara koneksi ke database
  require 'fungsi.php';

  //ambil data dari tabel lembar_kerja

  // $result = mysqli_query($conn, "SELECT * FROM lembar_kerja");

  // $tampil1 = query("SELECT * FROM lembar_kerja");

  $tampil1 = query("SELECT * FROM lembar_kerja");



  //ambil (fetch) data lembar_kerja dari object result
  //mysqli_fetch_row() mengembalikan array numerik | mysqli_fetch_assoc() mengembalikan array assosiatif | mysqli_fetch_array() ada row dan assoc| mysqli_fetch_object()

  // while ( $tampil = mysqli_fetch_assoc($result) ) {
  //     var_dump($tampil["anggota_kelompok_id"]);

  // }

  ?>


 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
           <div class="card">
             <div class="card-header">
               <h3 class="card-title">Data Surat Izin Kerja Praktik</h3>

               <div class="card-tools">
                 <div class="input-group input-group-sm" style="width: 150px;">
                   <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                   <div class="input-group-append">
                     <button type="submit" class="btn btn-default">
                       <i class="fas fa-search"></i>
                     </button>
                   </div>
                 </div>
               </div>
             </div>

             <!-- /.card-header -->
             <div class="card-body table-responsive p-0">
               <table class="table table-hover text-nowrap">
                 <!-- <table border="1" cellpadding="10" cellspacing="0"> -->

                 <tr>
                   <th>ID</th>
                   <th>User</th>
                   <th>Name</th>
                   <th>Date</th>
                   <th>File</th>
                   <th>Edit</th>
                 </tr>

                 <?php
                  $i = 1;
                  ?>



                 <?php foreach ($tampil1 as $row) : ?>
                   <tr>
                     <td><?= $i ?></td>

                     <td><?= $row['anggota_kelompok_id'] ?> </td>




                     <td><?= $row["tanggal"] ?> </td>
                     <td><?= $row["file"] ?> </td>
                     <td><button type="button" class="btn btn-outline-danger">
                         <a href="ubah.php?id=<?= $row["id"]; ?>"><span class="material-symbols-outlined">edit</span></a>

                       </button>

                       <button name="view" type="button" class="btn btn-outline-danger">
                         <a href="lihat.php?id=<?= $row["id"]; ?>"><span class="material-symbols-outlined">plagiarism</span></a>
                       </button>
                       <button type="button" class="btn btn-outline-danger">
                         <a href="hapus.php?id=<?= $row["id"]; ?>"><span class="material-symbols-outlined">delete</span></a>


                       </button>

                     </td>
                   </tr>
                   <?php $i++; ?>
                 <?php endforeach; ?>


               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
 </div>
 <?php

  include("includes\scripts.php");
  include("includes\bawah.php");

  ?>