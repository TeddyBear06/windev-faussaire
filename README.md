# Le faussaire

![Le logo du Faussaire](https://github.com/TeddyBear06/windev-faussaire/blob/13f872da95837883f7390f5f823586891eeaba7e/Documents/le_faussaire_logo.png)

> Ce composant n'est pas un produit officiel Windev.

Le Faussaire est un composant Windev utile pour générer des données (noms, prénoms, IBAN, etc...) pour remplir vos applications pendant les phases de développement et de test. Vous pouvez également l'utiliser pour faire des tests de resistance au stress de vos applications.

Le composant est largement inspiré du package [fzaninotto/Faker](https://github.com/fzaninotto/Faker).

## Comment l'utiliser ?

1. Téléchargez la dernière version du composant (Faussaire.zip) dans la [page de Releases de ce projet](https://github.com/TeddyBear06/windev-faussaire/releases)
2. Ajoutez le composant à votre projet Windev [documentation officielle](https://doc.pcsoft.fr/?2014006)
3. Vous instanciez un Faussaire et voilà !

Exemple :

```
clFaussaire est CFaussaire

POUR nIndex = 1 À 10000
	TABLE_Clients.AjouteLigne(clFaussaire.Prénom(CFaussaire::GENRE_FÉMININ), clFaussaire.NomDeFamille())
FIN
```

La capture ci-dessous vous présente quelques utilisations possibles :

![Utilisations possibles du Faussaire](https://github.com/TeddyBear06/windev-faussaire/blob/7f437ffe5bd1f7678ffdf8d03c91d5906134592d/Documents/Screenshot_70.png)
![Utilisations possibles du Faussaire](https://github.com/TeddyBear06/windev-faussaire/blob/7f437ffe5bd1f7678ffdf8d03c91d5906134592d/Documents/Screenshot_71.png)

## Pourquoi le "Faussaire" ?

Je voulais rester dans l'esprit Windev en ce qui concerne la francisation et donner une identité forte à ce projet.

## Compatibilité

Le composant est généré avec Windev Express 26 (je n'ai pas de licence Windev... À bon entendeur :-)). 

Si vous utilisez une version commerciale de Windev, vous devrez récupérer le code de ce composant et le générer à nouveau avec votre Windev commercial.

## Logo

Merci à [OpenClipart-Vectors](https://pixabay.com/vectors/comedy-funny-glasses-mask-carnival-156776/)
