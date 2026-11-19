# Session 08 - Défi

La route posts.tag utilise {tag:slug} : oui
La page d'un tag n'affiche ni brouillon ni article d'un autre tag : oui
Les tags des cartes sont des liens : oui
L'accueil n'affiche que les tags qui ont au moins un article publié : oui
Les trois nouveaux tests passent et php artisan test est vert : oui

Pourquoi filtrer les tags vides après get() plutôt que d'afficher (0) ?
Cela évite d'afficher des tags sans article publié sur l'accueil.

Combien de requêtes ajoute la liste des tags populaires, et pourquoi pas une par tag ?
WithCount ajoute une sous-requête au sein d'une seule requête de chargement des tags. Il n'y a donc pas une requête par tag.
