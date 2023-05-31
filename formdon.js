const formdon = document.querySelector('form');

    // Validation du formulaire lorsqu'il est soumis
    formdon.addEventListener('submit', (event) => {
      event.preventDefault(); // Empêche le formulaire d'être envoyé
    
      // Récupération des données du formulaire
      const nomProduit = formdon.querySelector('[for="nom"] + input').value.trim();
      
      const quantite = formdon.querySelector('[for="quantité"] + input').value.trim();
      const description = formdon.querySelector('textarea').value.trim();
    
      // Validation des entrées de l'utilisateur
      if (nomProduit === '' || quantite === '' || description === '') {
        alert('Veuillez remplir tous les champs');
        return;
      }
    
      if (isNaN(quantite) || quantite <= 0) {
        alert('Veuillez saisir une quantité valide');
        return;
      }
      function validateForm() {
            var choix = document.getElementById("choix").value;

            if (choix === "") {
                alert("Veuillez choisir une option valide.");
                return false;
            }

            return true;
        }
      
    });
    
    