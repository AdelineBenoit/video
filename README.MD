# Retour sur le projet video-club

- Attention aux balises images : elles sont auto-fermantes, il faut donc bien pensé à les fermer.

- Les paramètres de connection à la base de données (bdd), sont à mettre dans un fichier séparé.

- Dans les balises images, il faut toujours mettre un paramètre alt, il sert à mettre un texte au cas où l'image ne s'affiche pas, ce paramètre est également très important pour le référencement (SEO)

- Attention à bien nettoyer le code: commentaires inutiles, lignes vides en trop etc .

- Pour la partie "nous contacter", si n'a pas le temps ou ne sais pas faire un formulaire de contact, tu peux simplement faire un mailto, cela ouvrira le client mail (si il existe). exemple =>  "<a href='mailto:" . $to . "?body=" . $body . "'>";
