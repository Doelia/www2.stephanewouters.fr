//  Exercice 1 : Dynamiser le menu
function changerPage(page) {

    console.log(page);

    if (page === 'accueil') {
        document.getElementById('accueil').style.display = 'block';
        document.getElementById('photos').style.display = 'none';
        document.getElementById('contact').style.display = 'none';
    }
    if (page === 'photos') {
        document.getElementById('accueil').style.display = 'none';
        document.getElementById('photos').style.display = 'block';
        document.getElementById('contact').style.display = 'none';
    }
    if (page === 'contact') {
        document.getElementById('accueil').style.display = 'none';
        document.getElementById('photos').style.display = 'none';
        document.getElementById('contact').style.display = 'block';
    }
}

// Exercice 2 : Compteur de caractère

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

// Exercice 3 : Galerie photo :

let images = document.querySelectorAll(".miniature img");
let main = document.getElementById('main-image');

for (let i = 0; i < images.length; i++) {
    images[i].addEventListener('click', function() {
        let src = images[i].getAttribute('src')
        main.setAttribute('src', src);
    })
}


// Exercice 4 : Tooltip

document.body.addEventListener('mousemove', function(event) {
    document.getElementById('popup').style.left = event.clientX + 'px';
    document.getElementById('popup').style.top = (event.clientY + 15) + 'px';
});

for (let i = 0; i < images.length; i++) {
    images[i].addEventListener('mouseenter', function() {
        let text = images[i].getAttribute('alt');
        document.getElementById("popup").innerHTML = text;
        document.getElementById("popup").style.display = 'block';
    })
    images[i].addEventListener('mouseout', function() {
        document.getElementById("popup").style.display = 'none';
    })
}

