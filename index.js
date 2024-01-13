let r1 = document.getElementById('r1');
let r2 = document.getElementById('r2');
let r3 = document.getElementById('r3');
let r4 = document.getElementById('r4');
let image = document.getElementById('perso');

function updateImage() {
    if (r1.checked) {
        image.src = "img/humain.png";
    } else if (r2.checked) {
        image.src = "img/elfe.png";
    } else if (r3.checked) {
        image.src = "img/ogre.png";
    } else if (r4.checked) {
        image.src = "img/nain.png";
    }
}

r1.addEventListener("change", updateImage);
r2.addEventListener("change", updateImage);
r3.addEventListener("change", updateImage);
r4.addEventListener("change", updateImage);

updateImage();