
    // Event listener untuk masuk ke area kelas inbox
document.querySelector('.inbox').addEventListener('mouseenter', function() {
  startTextAnimation(); // Memulai animasi saat masuk ke area kelas inbox
});

// Fungsi untuk memulai animasi teks
function startTextAnimation() {
  var text = document.getElementById('text');
  var newDom = '';
  var animationDelay = 6;

  if (text) { // Memastikan elemen dengan ID 'text' ada
    for(let i = 0; i < text.innerText.length; i++) {
        newDom += '<span class="char">' + (text.innerText[i] == ' ' ? '&nbsp;' : text.innerText[i])+ '</span>';
    }

    text.innerHTML = newDom;
    var length = text.children.length;

    for(let i = 0; i < length; i++) {
        text.children[i].style['animation-delay'] = animationDelay * i + 'ms';
    }
  }
}
