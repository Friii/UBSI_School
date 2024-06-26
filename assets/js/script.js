
const menuIcon = document.getElementById('menu-icon');
const menuList= document.getElementById('menu-list');

menuIcon.addEventListener('click', () => {
    menuList.classList.toggle('hidden');
});

window.addEventListener("scroll", muncul);

function muncul() {
  let elements = document.querySelectorAll(".elemen");

  for (let i = 0; i < elements.length; i++) {
    let tinggiLayar = window.innerHeight;

    let jarakAtasElemen = elements[i].getBoundingClientRect().top;

    let ukuranScroll = 300;

    if (jarakAtasElemen < tinggiLayar - ukuranScroll) {
      elements[i].classList.add("muncul");
    } else {
      elements[i].classList.remove("muncul");
    }
  }
}

window.addEventListener("scroll", muncull);
function muncull() {
  let elements = document.querySelectorAll(".penjelasan");

  for (let i = 0; i < elements.length; i++) {
    let tinggiLayar = window.innerHeight;

    let jarakAtasElemen = elements[i].getBoundingClientRect().top;

    let ukuranScroll = 300;

    if (jarakAtasElemen < tinggiLayar - ukuranScroll) {
      elements[i].classList.add("muncul2");
    } else {
      elements[i].classList.remove("muncul2");
    }
  }
}