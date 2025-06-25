var timeout; // variabel untuk menahan timeout

window.addEventListener("scroll", function () {
  var navbar = document.getElementById("navbar");
  if (window.scrollY > 0) {
    navbar.classList.add("scrolled");
    // Hapus kelas "scrolled" setelah 300ms saat scrolling berhenti
    clearTimeout(timeout); // Hapus timeout sebelumnya (jika ada)
    timeout = setTimeout(function () {
      navbar.classList.remove("scrolled");
    }, 1000);
  } else {
    navbar.classList.remove("scrolled");
  }
});

let next = document.querySelector(".next");
let prev = document.querySelector(".prev");

next.addEventListener("click", function () {
  let items = document.querySelectorAll(".item");
  document.querySelector(".slide").appendChild(items[0]);
});

prev.addEventListener("click", function () {
  let items = document.querySelectorAll(".item");
  document.querySelector(".slide").prepend(items[items.length - 1]); // here the length of items = 6
});

const swiftUpElements = document.querySelectorAll('.swift-up-text');

// Fungsi untuk menambahkan efek "swift-up" pada teks
function addSwiftUpEffect() {
  swiftUpElements.forEach(elem => {
    // Memisahkan setiap kata dalam elemen teks
    const words = elem.textContent.split(' ');
    elem.innerHTML = '';

    // Membungkus setiap kata dalam elemen span
    words.forEach((el, index) => {
      words[index] = `<span><i>${words[index]}</i></span>`;
    });

    // Menyisipkan kembali kata-kata yang sudah dibungkus ke dalam elemen teks
    elem.innerHTML = words.join(' ');

    // Mengatur delay animasi untuk setiap kata
    const children = document.querySelectorAll('span > i');
    children.forEach((node, index) => {
      node.style.animationDelay = `${index * .2}s`;
    });
  });
}

// Memanggil fungsi addSwiftUpEffect() saat halaman dimuat
window.addEventListener('DOMContentLoaded', () => {
  // Mendefinisikan konfigurasi IntersectionObserver
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5 // Threshold 0.5 artinya akan mengirim callback saat setengah dari elemen terlihat
  };

  // Membuat instance IntersectionObserver
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      // Jika elemen .definition masuk ke viewport
      if (entry.target.classList.contains('definition')) {
        if (entry.isIntersecting) {
          // Memanggil fungsi addSwiftUpEffect() untuk menambahkan efek swift-up
          addSwiftUpEffect();
        } else {
          // Jika elemen keluar dari viewport, menghapus kelas swift-up dari anak-anaknya
          const children = entry.target.querySelectorAll('.swift-up-text span > i');
          children.forEach(child => {
            child.classList.remove('swift-up');
          });
        }
      }
    });
  }, options);

  // Memantau setiap elemen dengan kelas .definition
  document.querySelectorAll('.definition').forEach(item => {
    observer.observe(item);
  });
});

window.addEventListener('scroll', function() {
  const scrollPos = window.scrollY;
  const section = document.querySelector('.our-location');
  
  // Menambahkan atau menghapus kelas tergantung dari arah scroll
  if (scrollPos > this.lastScroll) {
    section.classList.remove('scroll-up');
    section.classList.add('scroll-down');
  } else {
    section.classList.remove('scroll-down');
    section.classList.add('scroll-up');
  }
  
  this.lastScroll = scrollPos;
});


  
  
