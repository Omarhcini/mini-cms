# Session 05 - Défi : articles récents sur l'accueil

latestPosts contient au plus 3 articles : oui
Seuls les articles publiés sont transmis à la vue : oui
home.blade.php utilise x-post-card et @forelse : oui
Le nouveau test passe et php artisan test est vert : oui

Pourquoi get() et pas paginate(3) sur la page d'accueil ?
    Parce que la page d’accueil affiche seulement les 3 derniers articles, sans pages suivantes. get() suffit pour les récupérer. paginate(3) sert à découper une longue liste en plusieurs pages, ce qui est inutile ici.