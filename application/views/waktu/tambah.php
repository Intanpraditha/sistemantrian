<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Tambah Waktu</h6>
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('waktu/simpan') ?>" id="form-waktu">
            <div id="waktu-container">
                <!-- Input waktu pertama -->
                <div class="waktu-item">
                    <label for="waktu1">Waktu 1</label>
                    <input class="form-control" type="text" name="waktu[]" id="waktu1" required> <br>
                </div>
            </div>

            <!-- Tombol tambah waktu -->
            
            <button class="btn btn-info" type="button" id="tambah-waktu">+</button>

            <button type="submit" class="m-0 font-weight-bold btn btn-success">Simpan</button>
        </form>
    </div>
</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Variabel untuk menghitung jumlah input waktu
        let waktuCounter = 1;

        // Menambah waktu saat tombol "Tambah Waktu" ditekan
        document.getElementById("tambah-waktu").addEventListener("click", function() {
            waktuCounter++;

            // Membuat elemen input waktu baru
            const waktuItem = document.createElement("div");
            waktuItem.className = "waktu-item";
            waktuItem.innerHTML = `
                <label for="waktu${waktuCounter}">Waktu ${waktuCounter}</label>
                <input class="form-control type="text" name="waktu[]" id="waktu${waktuCounter}" required> <br/>
            `;

            // Menambah elemen input waktu ke dalam container
            document.getElementById("waktu-container").appendChild(waktuItem);
        });
    });
</script>
