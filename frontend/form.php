<div class="form-group mb-3">
    <label for="nim">NIM</label>
    <input type="text" class="form-control" id="nim" placeholder="NIM" name="nim">
</div>
<div class="form-group mb-3">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
</div>
<div class="form-group mb-3">
    <label for="hp">HP</label>
    <input type="text" class="form-control" id="hp" placeholder="HP" name="hp">
</div>
<div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
</div>
<div class="form-group mb-3">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <input type="text" class="form-control" id="jk" placeholder="L/P" name="jk">
    <input type="hidden" name="id" value=<?php echo $_GET['id'] ?>>
    <!-- <select class="form-control" id="jenis_kelamin">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select> -->
</div>
<div class="form-group mb-3">
    <label for="alamat">Alamat</label>
    <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
</div>