document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".form-control");

    // Tambahkan efek fokus dan blur pada input
    inputs.forEach(function (input) {
        input.addEventListener("focus", function () {
            input.style.backgroundColor = "#f0f8ff"; // Warna biru muda
        });

        input.addEventListener("blur", function () {
            input.style.backgroundColor = "#fff"; // Kembali ke warna putih
        });
    });

    // Validasi sederhana pada form
    const form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        let valid = true;

        // Periksa setiap input
        inputs.forEach(function (input) {
            if (input.value.trim() === "") {
                input.style.borderColor = "red"; // Highlight input yang kosong
                valid = false;
            } else {
                input.style.borderColor = ""; // Reset border jika sudah diisi
            }
        });

        if (!valid) {
            event.preventDefault(); // Cegah pengiriman form jika tidak valid
            alert("Harap isi semua kolom!");
        }
    });
});
