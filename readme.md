# capetrel WP RGPD

Fork du module [WP tarteaucitron.sj Self Hosted](https://fr.wordpress.org/plugins/wp-tarteaucitron-js-self-hosted/#developers)
Changement de l'arborescence et ajout de npm pour permettre la mise à jour de tarteaucitronjs, ajouts de services dans le tableau des services et un peu de refactor.

## Mise à jours

### manuellement
Télécharger la dernière version [githubd de tarteaucitron](https://github.com/AmauriC/tarteaucitron.js) et copier le contenu du dossier tarteaucitron.js-master dans le dossier assets/js/tarteaucitron du module.

### avec node
Mettre à jours les paquets et lancer le build :
```shell
npm update & npm run build
```

### services
La mise à jours de tarteaucitron ajoute de nouveau services, pour les faire apparaitre dans le backoffices il faut les ajouter dans le tableau ``` $services``` du fichier src/Admin/TacAdmin.php en recupérant le "code" sur le site de [tarteaucitron](https://tarteaucitron.io/fr/install/) et en copiant le code d'un autre service.
