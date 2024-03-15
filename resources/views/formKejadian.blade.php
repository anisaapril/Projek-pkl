@extends('adminlte::page')

@section('content')
<div class="container">
   <div class="row">
      <div class="col">
         <div class="card">
            <div class="card-header">{{ __('Form Kejadian Bencana') }}</div>

            <div class="card-body">

               <form>
                  <div class="col-md-6 form-group">
                     <label for="kategori" class="form-label">Kategori Bencana</label>
                     <input type="text" class="form-control" id="kategori" name="kategori"
                        placeholder="Masukkan kategori bencana" required>
                     <div class="invalid-feedback">
                        Kategori bencana harus diisi.
                     </div>
                  </div>
                  <div class="col-md-6">
                     <label for="jenis" class="form-label">Jenis Bencana</label>
                     <input type="text" class="form-control" id="jenis" placeholder="Masukkan jenis bencana">
                  </div>
                  <div class="col-md-6">
                     <label for="jenis_bencana" class="form-label">Kode</label>
                     <input type="text" class="form-control" id="jenis_bencana" placeholder="Masukkan kode bencana">
                  </div>
                  <div class="col-md-6">
                     <label for="tanggal" class="form-label">Tanggal</label>
                     <input type="date" class="form-control" id="tanggal">
                  </div>
                  <div class="col-md-6">
                     <label for="jam" class="form-label">Waktu Kejadian</label>
                     <input type="time" class="form-control" id="jam">
                  </div>
                  <div class="col-md-6">
                     <label for="number" class="form-label">Jml KK/JIWA</label>
                     <input type="number" class="form-control" id="number" placeholder="Masukkan jumlah korban jiwa">
                  </div>
                  <div class="col-md-6">
                     <label for="nama" class="form-label">Nama Korban</label>
                     <input type="text" class="form-control" id="nama" placeholder="Masukkan jenis bencana">
                  </div>
                  <div class="col-md-6">
                     <label for="alamat" class="form-label">Kabupaten</label>
                     <input type="text" class="form-control" id="alamat" placeholder="Masukkan Kabupaten">
                  </div>
                  <div class="col-md-6">
                     <label for="alamat" class="form-label">Kepanewon</label>
                     <input type="text" class="form-control" id="alamat" placeholder="Masukkan kapanewon">
                  </div>
                  <div class="col-md-6">
                     <label for="alamat" class="form-label">Kalurahan</label>
                     <input type="text" class="form-control" id="alamat" placeholder="Masukkan kalurahan">
                  </div>
                  <div class="col-md-6">
                     <label for="alamat" class="form-label">Padukuhan</label>
                     <input type="text" class="form-control" id="alamat" placeholder="Masukkan padukuhan">
                  </div>
                  <div class="col-md-2">
                     <label for="rt" class="form-label">RT:</label>
                     <input type="text" class="form-control" id="rt" placeholder="Masukkan RT wilayah">
                  </div>
                  <div class="col-md-2">
                     <label for="rw" class="form-label">RW:</label>
                     <input type="text" class="form-control" id="rw" placeholder="Masukkan RW wilayah">
                  </div>
                  <div class="col-md-12">
                     <label for="kerentanan" class="form-label">Kerentanan</label>
                     <div class="row g-3">
                        <div class="col-md-2">
                           <label for="kerentanan" class="form-label">Balita</label>
                           <input type="number" class="form-control" id="kerentanan"
                              placeholder="Masukkan jumlah balita yang terkena kerentanan">
                        </div>
                        <div class="col-md-2">
                           <label for="kerentanan" class="form-label">Anak</label>
                           <input type="number" class="form-control" id="kerentanan"
                              placeholder="Masukkan jumlah anak yang terkena kerentanan">
                        </div>
                        <div class="col-md-2">
                           <label for="kerentanan" class="form-label">Dewasa</label>
                           <input type="number" class="form-control" id="kerentanan"
                              placeholder="Masukkan jumlah dewasa yang terkena kerentanan">
                        </div>
                        <div class="col-md-2">
                           <label for="kerentanan" class="form-label">Bumil</label>
                           <input type="number" class="form-control" id="kerentanan"
                              placeholder="Masukkan jumlah bumil yang terkena kerentanan">
                        </div>
                        <div class="col-md-2">
                           <label for="kerentanan" class="form-label">Lansia</label>
                           <input type="number" class="form-control" id="kerentanan"
                              placeholder="Masukkan jumlah lansia yang terkena kerentanan">
                        </div>
                        <div class="col-md-2">
                           <label for="kerentanan" class="form-label">Disabilitas</label>
                           <input type="number" class="form-control" id="kerentanan"
                              placeholder="Masukkan jumlah disabilitas yang terkena kerentanan">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <label for="kerugian" class="form-label">Kerugian</label>
                     <textarea class="form-control" id="kerugian" rows="3" placeholder="Masukkan kerugian"></textarea>
                  </div>
                  <div class="col-md-12">
                     <label for="keterangan" class="form-label">Keterangan</label>
                     <textarea class="form-control" id="keterangan" rows="3"
                        placeholder="Masukkan keterangan"></textarea>
                  </div>
                  <div class="col-md-12">
                     <label for="dampak" class="form-label">Dampak Bencana</label>
                     <div class="row g-3">
                        <div class="col-md-2">
                           <label for="dampak" class="form-label">Meninggal</label>
                           <input type="number" class="form-control" id="dampak"
                              placeholder="Masukkan jumlah">
                        </div>
                        <div class="col-md-2">
                           <label for="dampak" class="form-label">Hilang</label>
                           <input type="number" class="form-control" id="dampak"
                              placeholder="Masukkan jumlah">
                        </div>
                        <div class="col-md-2">
                           <label for="dampak" class="form-label">Luka Ringan</label>
                           <input type="number" class="form-control" id="dampak"
                              placeholder="Masukkan jumlah">
                        </div>
                        <div class="col-md-2">
                           <label for="dampak" class="form-label">Luka Sedang</label>
                           <input type="number" class="form-control" id="dampak"
                              placeholder="Masukkan jumlah">
                        </div>
                        <div class="col-md-2">
                           <label for="dampak" class="form-label">Luka berat</label>
                           <input type="number" class="form-control" id="dampak"
                              placeholder="Masukkan jumlah">
                        </div>
                        <div class="col-md-2">
                           <label for="dampak" class="form-label">Mengungsi</label>
                           <input type="number" class="form-control" id="dampak"
                              placeholder="Masukkan jumlah">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <label for="rusak" class="form-label">Dampak Kerusakan</label>
                     <div class="row g-3">
                        <div class="col-md-2">
                           <label for="rusak" class="form-label">Rumah</label>
                           <input type="number" class="form-control" id="rusak"
                              placeholder="Masukkan jumlah  rumah rusak">
                        </div>
                        <div class="col-md-2">
                           <label for="rusak" class="form-label">Dapur</label>
                           <input type="number" class="form-control" id="rusak"
                              placeholder="Masukkan jumlah  dapur rusak">
                        </div>
                        <div class="col-md-2">
                           <label for="rusak" class="form-label">Pendidikan</label>
                           <input type="number" class="form-control" id="rusak"
                              placeholder="Masukkan jumlah  pendidikan yang rusak">
                        </div>
                        <div class="col-md-2">
                           <label for="rusak" class="form-label">Peribadatan</label>
                           <input type="number" class="form-control" id="rusak"
                              placeholder="Masukkan jumlah  peribadatan yang rusak">
                        </div>
                        <div class="col-md-2">
                           <label for="rusak" class="form-label">Fasum</label>
                           <input type="number" class="form-control" id="rusak" placeholder="Masukkan jumlah fasum">
                        </div>
                        <div class="col-md-2">
                           <label for="rusak" class="form-label">Perkantoran</label>
                           <input type="number" class="form-control" id="rusak"
                              placeholder="Masukkan jumlah  perkantoran yang rusak">
                        </div>
                        <div class="col-md-2">
                           <label for="rusak" class="form-label">Jembatan</label>
                           <input type="number" class="form-control" id="rusak"
                              placeholder="Masukkan jumlah  jembatan yang rusak">
                        </div>
                        <div class="col-md-2">
                           <label for="rusak" class="form-label">Pabrik</label>
                           <input type="number" class="form-control" id="rusak"
                              placeholder="Masukkan jumlah pabrik yang rusak">
                        </div>
                        <div class="col-md-2">
                           <label for="rusak" class="form-label">Kios</label>
                           <input type="number" class="form-control" id="rusak"
                              placeholder="Masukkan jumlah kios yang rusak">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <label for="sumber" class="form-label">Sumber</label>
                     <textarea class="form-control" id="sumber" rows="3" placeholder="Masukkan "></textarea>
                  </div>

                  <div class="col-md-12">
                     <button type="submit" class="btn btn-primary">Simpan</button>
                     <button id="export-btn" type="button" class="btn btn-secondary">Laporan</button>
                  </div>
               </form>

            </div>
         </div>
      </div>
   </div>
</div>
@endsection