
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Diri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Diri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">

          <!-- /.card-header -->
          <form action="<?= BASEURL; ?>/dashboard/updateMahasiswa" enctype="multipart/form-data" method="post">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                    <label for="exampleInputPassword1">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" value="<?= is_array($data['nama']) ? $data['nama']['nama'] : $data['nama']; ?>"
 id="exampleInputPassword1" disabled>
                  </div>

                <!-- /.form-group -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Dosen Pembimbing</label>
                    <input type="text" name="NIM" class="form-control" value="<?= is_array($data['dosen_pembimbing_akademik']) ? $data['dosen_pembimbing_akademik']['dosen_pembimbing_akademik'] : $data['dosen_pembimbing_akademik']; ?>" id="exampleInputPassword1" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Lahir</label>
                    <input type="text"  name="tempat_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tempat Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Tempat Tanggal Lahir">
                  </div>
                  <div>
                  <label>Pekerjaan</label>
                  <select name="pekerjaan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option value="t">Tidak Bekerja</option>
                    <option value="b">Bekerja</option>
                  </select><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Pekerjaan</label>
                    <input type="text" name="alamat_pekerjaan" class="form-control" id="exampleInputPassword1" placeholder="Tempat Tanggal Lahir">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
                    <label for="exampleInputPassword1">Angkatan</label>
                    <input type="text" name="NIM" class="form-control" value="<?= is_array($data['angkatan']) ? $data['angkatan']['angkatan'] : $data['angkatan']; ?>" id="exampleInputPassword1" disabled>
                  </div>
                <!-- /.form-group -->
                <div class="form-group">
    <label for="exampleInputPassword1">NIM</label>
    <input type="text" name="NIM" class="form-control" value="<?= is_array($data['nim']) ? $data['nim']['nim'] : $data['nim']; ?>" id="exampleInputPassword1" disabled>
</div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Telpon</label>
                    <input type="text" name="nomor_telpon" class="form-control" id="exampleInputPassword1" placeholder="Tempat Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Kerja</label>
                    <input type="text" name="tempat_kerja" class="form-control" id="exampleInputPassword1" placeholder="Tempat Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">nomor_telpon Kerja</label>
                    <input type="text" name="telp_tempat_kerja" class="form-control" id="exampleInputPassword1" placeholder="Tempat Tanggal Lahir">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Kewarganegaraan</label>
                  <select name="kewarganegaraan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected" disabled>Pilih Kewarganegaraan</option>
                    <option value="id">ID-Indonesia</option>
                    <option value="wna">WNA</option>
                  </select>
                </div>
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected" disabled>Pilih Jenis Kelamin</option>
                    <option value="p">Perempuan</option>
                    <option value="l">Laki-Laki</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>

<h5>Data Ayah</h5>
<div class="row">
              <div class="col-md-6">
              <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="nama_ayah" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                  </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Pendidikan Ayah</label>
                    <input type="text" name="pendidikan_ayah" class="form-control" id="exampleInputPassword1" placeholder="Pendidikan Ayah">
                  </div>

                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
                    <label for="exampleInputPassword1">Umur</label>
                    <input type="text" name="umur_ayah" class="form-control" id="exampleInputPassword1" placeholder="Umur">
                  </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Pekerjaan</label>
                    <input type="text" name="pekerjaan_ayah" class="form-control" id="exampleInputPassword1" placeholder="Pekerjaan">
                  </div>
                  
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <h5>Data Ibu</h5>
<div class="row">
              <div class="col-md-6">
              <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" name="nama_ibu" class="form-control" id="exampleInputPassword1"  placeholder="Nama">
                  </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Pendidikan Ibu</label>
                    <input type="text" name="pendidikan_ibu" class="form-control" id="exampleInputPassword1" placeholder="Pendidikan Ibu">
                  </div>

                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
                    <label for="exampleInputPassword1">Umur</label>
                    <input type="text" name="umur_ibu" class="form-control" id="exampleInputPassword1" placeholder="Umur">
                  </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Pekerjaan</label>
                    <input type="text" name="pekerjaan_ibu" class="form-control" id="exampleInputPassword1" placeholder="Pekerjaan">
                  </div>
                  
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Orang Tua</label>
                    <input type="text" name="alamat_orang_tua" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto Mahasiswa</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
          </div>
          </form>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->

        <!-- /.card -->

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->