function openForm() {
  current = document.querySelector('.connexadmin#connexion')
  current.style.display = (current.style.display == "block") ? "none" : "block";
};

function setInscription() {
  // Inscription
  if (document.querySelector('#hiddeninput').value == '1') {
    document.querySelector('#admin-button button').textContent = 'Inscription';
    document.querySelector('#hiddeninput').value = '2';
    document.querySelector('#switchinscription').textContent = "J'ai déjà un compte.";
    document.querySelector('#connexionbutton').value = "S'inscrire";
    document.getElementById('txtverifmdp').style.display = 'block';
    document.getElementById('verifmdp').type = 'password';
  }
  // Connexion
  else {
    document.querySelector('#admin-button button').textContent = 'Connexion';
    document.querySelector('#hiddeninput').value = '1';
    document.querySelector('#switchinscription').textContent = "Je n'ai pas de compte.";
    document.querySelector('#connexionbutton').value = "Connexion";
    document.getElementById('txtverifmdp').style.display = 'none';
    document.getElementById('verifmdp').type = 'hidden';
  }
}

function hide_element(id) {
  document.getElementById(id).outerHTML = '';
}

function setFooter() {
    document.querySelector('footer').style.position = (document.querySelector('.musictop') != null) ? 'relative' : 'fixed';
}
