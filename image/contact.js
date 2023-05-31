const form = document.querySelector('form');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  const nom = document.getElementById('nom');
  const email = document.getElementById('email');
  const message = document.getElementById('message');

  if (nom.value.trim() === '') {
    alert('Veuillez entrer votre nom.');
    nom.focus();
    return false;
  }

  if (email.value.trim() === '') {
    alert('Veuillez entrer votre adresse email.');
    email.focus();
    return false;
  }

  if (message.value.trim() === '') {
    alert('Veuillez entrer votre message.');
    message.focus();
    return false;
  }

  this.submit();
});
