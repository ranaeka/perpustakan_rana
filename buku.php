    
      <div class="row">
        
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Data Buku</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahRiwayat" >Tambah Data Buku</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Detail Data Buku</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No </th>
                          <th>Kode Buku</th>
                          <th>Judul Buku</th>
                          <th>Tahun Terbit</th>
                          <th>Penulis</th>
                          <th>Penerbit</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            $sql=mysqli_query($koneksi,"SELECT * FROM tb_buku");
                            $i=0;
                            while ($data=mysqli_fetch_assoc($sql)) {
                              $i++;
                              ?>
                                <tr>
                                  <td><?php echo $i;?></td>
                                  <td><?php echo $data['kd_buku']; ?></td>
                                  <td><?php echo $data['judul_buku']; ?></td>
                                  <td><?php echo $data['thn_buku']; ?></td>
                                  <td><?php echo $data['penulis']; ?></td>
                                  <td><?php echo $data['penerbit']; ?></td>
                                    <td>
                                   <a href="dashboard.php?page=riwayatPendidikan&aksi=edit&id=<?= $data['id_pendidikan']; ?>" class="btn btn-cirlce btn-mn btn-primary fa-edit fa"><span data-placement='top' data-toggle='tooltip' title='Edit data'></span></a>
                                   <a href="dashboard.php?page=riwayatPendidikan&aksi=hapus&id=<?= $data['id_pendidikan']; ?>" class="btn btn-cirlce btn-mn btn-danger fa-trash fa" ><span data-placement='top' data-toggle='tooltip' title='Hapus data'></span> </a>  
                                  </td>

                                </tr>
                              <?php
                            }

                           ?>
                      </tbody>
                        </table>
                    
                    </div>
                   
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>