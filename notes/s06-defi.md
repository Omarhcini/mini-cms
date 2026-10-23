# Session 06 - Défi : publier et dépublier

La route posts.publication apparaît dans route:list avec le verbe PATCH : oui
Le bouton affiche « Publier » sur un brouillon et « Dépublier » sur un article publié : oui
published_at est rempli à la publication et vidé à la dépublication : oui
Le nouveau test passe et php artisan test est vert : oui

Pourquoi PATCH et pas PUT ni GET pour ce bouton ?
    Un GET sert juste à consulter une page, pas à modifier quelque chose. Si on l’utilisait pour publier, un robot ou le navigateur pourrait le déclencher tout seul, sans que personne ne clique.

    PUT, lui, sert à remplacer tout l’article. Là, on change seulement une petite chose (publié ou pas), donc PATCH est le bon choix.