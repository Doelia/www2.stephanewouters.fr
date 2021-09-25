// Galerie photo
let images = document.querySelectorAll(".miniature img");
let main = document.getElementById('main-image');


document.body.addEventListener('mousemove', function(event) {
    document.getElementById('popup').style.left = event.clientX + 'px';
    document.getElementById('popup').style.top = (event.clientY + 15) + 'px';
});

for (let i = 0; i < images.length; i++) {
    images[i].addEventListener('click', function() {
        let src = images[i].getAttribute('src')
        main.setAttribute('src', src);
    })
    images[i].addEventListener('mouseenter', function() {
        let text = images[i].getAttribute('alt');
        document.getElementById("popup").innerHTML = text;
        document.getElementById("popup").style.display = 'block';
    })
    images[i].addEventListener('mouseout', function() {
        document.getElementById("popup").style.display = 'none';
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
