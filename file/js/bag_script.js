// Mendapatkan semua checkbox item
var checkboxes = document.querySelectorAll('.item input[type="checkbox"]');

// Mendengarkan perubahan status checkbox
checkboxes.forEach(function (checkbox) {
  checkbox.addEventListener("change", function () {
    updateTotalPrice();
    var productId = checkbox.value; // Mendapatkan ID produk
    var isChecked = checkbox.checked; // Mendapatkan status checkbox (checked atau tidak)

    // Mengirim permintaan Ajax ke server untuk memperbarui status produk di keranjang
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../module/handle/update_cart_status.php", true); // Sesuaikan dengan nama file dan path-nya
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Respons dari server jika diperlukan
        console.log(xhr.responseText); // Tampilkan respons dari server (untuk tujuan debug)
      }
    };
    xhr.send("product_id=" + productId + "&checked=" + (isChecked ? 1 : 0)); // Mengirim data ke server
  });
});

// Fungsi untuk mengupdate total harga
// Definisikan checkboxes di luar fungsi agar dapat diakses di fungsi lain
var checkboxes = document.querySelectorAll('.item input[type="checkbox"]');

// Fungsi untuk memilih semua produk dalam keranjang
var selectAllBtn = document.getElementById("select-all-btn");
selectAllBtn.addEventListener("click", function () {
  var anyUnchecked = false; // Menyimpan status apakah ada checkbox yang belum dicentang

  checkboxes.forEach(function (checkbox) {
    // Memilih semua checkbox jika tombol Select All belum diklik sebelumnya
    if (!checkbox.checked) {
      anyUnchecked = true; // Set anyUnchecked ke true jika ada checkbox yang belum dicentang
    }
    // Menetapkan status centang untuk setiap checkbox berdasarkan nilai anyUnchecked
    checkbox.checked = anyUnchecked;
  });

  // Memanggil fungsi updateTotalPrice setelah memperbarui status checkbox
  updateTotalPrice();
});

// Fungsi untuk memperbarui total harga
function updateTotalPrice() {
  var totalPrice = 0;
  var grossAmount = 0; // Variabel untuk menyimpan gross_amount

  checkboxes.forEach(function (checkbox) {
    if (checkbox.checked) {
      var itemPrice = parseFloat(checkbox.dataset.productPrice); // Mendapatkan harga produk dari data attribute
      var itemQuantity = parseInt(checkbox.dataset.productQuantity); // Mendapatkan jumlah produk dari data attribute
      totalPrice += itemPrice * itemQuantity; // Mengalikan harga dengan jumlah produk
      grossAmount += itemPrice * itemQuantity; // Menambahkan total harga
    }
  });

  var formattedTotalPrice = totalPrice.toLocaleString("id-ID", {
    style: "currency",
    currency: "IDR",
  });
  document.getElementById("total-price").textContent = formattedTotalPrice;

  // Set nilai gross_amount ke input tersembunyi
  document.getElementById("gross-amount").value = grossAmount;

  // Perbarui status tombol checkout
  updateCheckoutButtonStatus();
}

/// Fungsi untuk memperbarui status tombol checkout
function updateCheckoutButtonStatus() {
  // Temukan tombol checkout
  var checkoutButton = document.getElementById("checkout-btn");

  // Temukan semua checkbox
  var checkboxes = document.querySelectorAll('.item input[type="checkbox"]');

  // Inisialisasi variabel untuk menyimpan status centang
  var anyChecked = false;

  // Periksa apakah ada checkbox yang dicentang
  checkboxes.forEach(function (checkbox) {
    if (checkbox.checked) {
      anyChecked = true;
      // Keluar dari loop jika ada checkbox yang dicentang
      return;
    }
  });

  // Jika tidak ada checkbox yang dicentang, nonaktifkan tombol checkout, jika tidak, aktifkan kembali
  checkoutButton.disabled = !anyChecked;
}

// Panggil fungsi updateCheckoutButtonStatus() setiap kali total harga diperbarui
// Misalnya, setelah pengguna menambah atau menghapus item dari keranjang
updateCheckoutButtonStatus();

// Panggil fungsi updateTotalPrice saat halaman dimuat
document.addEventListener("DOMContentLoaded", function () {
  updateTotalPrice();
});

// JavaScript untuk menangani checkout

document.querySelector(".edit-all-btn").addEventListener("click", function () {
  document.querySelectorAll(".edit-form").forEach(function (form) {
    form.classList.remove("hidden");
  });

  document.querySelector(".edit-all-btn").classList.add("hidden");
  document.querySelector(".submit-all-btn").classList.remove("hidden");
});

document
  .querySelector(".submit-all-btn")
  .addEventListener("click", function () {
    document.querySelectorAll(".edit-form").forEach(function (form) {
      form.submit();
    });
  });
