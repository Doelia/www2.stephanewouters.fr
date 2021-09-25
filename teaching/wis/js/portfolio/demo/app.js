// Galerie photo
let images = document.querySelectorAll(".miniature img");
let main = document.getElementById('main-image');

for (let i = 0; i < images.length; i++) {
    images[i].addEventListener('click', function() {
        main.setAttribute('src', images[i].getAttribute('src'));
    })
}

// Changement de page
function changerPage(page) {
    let pages = document.getElementsByClassName('page');
    for (let i = 0; i < pages.length; i++) {
        if (pages[i].id === page) {
            pages[i].style.display = 'block';
        } else {
            pages[i].style.display = 'none';
        }
    }
}

// Compteur de caractères
function compterCaratrere() {
    let nb = document.getElementById('message').value.length;
    document.getElementById('compteur_caracteres').innerHTML = nb;
}

function verifierFormulaire(e) {
    let nb = document.getElementById('message').value.length;
    if (nb > 200) {
        alert("Votre message est trop long");
        return false;
    }
}
