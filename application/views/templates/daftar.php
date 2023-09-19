<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

    body {
    font-family: 'Open Sans', sans-serif;
    background: #f9faff;
    color: #3a3c47;
    line-height: 1.6;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0;
    padding: 0;
    }

    h1 {
    margin-top: 48px;
    }

    form {
    background: #fff;
    max-width: 360px;
    width: 100%;
    padding: 58px 44px;
    border: 1px solid #e1e2f0;
    border-radius: 4px;
    box-shadow: 0 0 5px 0 rgba(42, 45, 48, 0.12);
    transition: all 0.3s ease;
    }

    .row {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
    }

    .row label {
    font-size: 13px;
    color: #8086a9;
    }

    .row input, select {
    flex: 1;
    padding: 13px;
    border: 1px solid #d6d8e6;
    border-radius: 4px;
    font-size: 16px;
    transition: all 0.2s ease-out;
    }

    .row input:focus {
    outline: none;
    box-shadow: inset 2px 2px 5px 0 rgba(42, 45, 48, 0.12);
    }

    .row input::placeholder {
    color: #C8CDDF;
    }

    button {
    width: 100%;
    padding: 12px;
    font-size: 18px;
    background: #15C39A;
    color: #fff;
    border: none;
    border-radius: 100px;
    cursor: pointer;
    font-family: 'Open Sans', sans-serif;
    margin-top: 15px;
    transition: background 0.2s ease-out;
    }

    button:hover {
    background: #55D3AC;
    }

    @media(max-width: 458px) {
    
    body {
        margin: 0 18px;
    }
    
    form {
        background: #f9faff;
        border: none;
        box-shadow: none;
        padding: 20px 0;
    }

    }
</style>

<h1>Daftar ke praktek masFaisal</h1>

<form method="post" action="<?= base_url('pasien/simpan') ?>">

            <div class="row">            
            <label class="form-label" >No. Antrian</label>
            <input  class="form-control" type="text" name="no_antrian" required> <br>
            </div>

            <div class="row">
            <label class="form-label" >Nama Pasien</label>
            <input  class="form-control" type="text" name="nama_pasien" required> <br>
            </div>

            <div class="row">
            <label class="form-label" >NIK</label>
            <input  class="form-control" type="text" name="nik" required> <br>
            </div>

            <div class="row">
            <label class="form-label" >Jenis Kelamin</label>
            <input  class="form-control" type="text" name="jk" required> <br>
            </div>

            <div class="row">
            <label class="form-label" >No. Telepon</label>
            <input  class="form-control" type="text" name="no_telp" required> <br>
            </div>

            <div class="row">
            <label class="form-label" >Tanggal</label>
            <input  class="form-control" type="date" name="tgl" required> <br>
            </div>

            <div class="row">
                <label class="form-label" >Waktu</label>
                <select class="form-control"  name="Id_waktu" required> 
                    <?php foreach ($waktu as $w) : ?>
                        <option value="<?= $w->id_waktu ?>"><?= $w->waktu ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="row">
            <label class="form-label" >Status</label>
            <input  class="form-control" type="text" name="status" required> <br>
            </div>

            <button type="submit" class="m-0 font-weight-bold btn btn-success">Daftar</button>
        </form>