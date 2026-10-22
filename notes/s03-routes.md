# Session 03 - Routes, contrôleurs et layout

## Défi

URL produite par route('about') : http://localhost:8000/a-propos

URL produite par route('posts.show', 'routes-et-controleurs') : http://localhost:8000/posts/routes-et-controleurs

URL produite par route('posts.archive', 2025) : http://localhost:8000/posts/archive/2025

Pourquoi /posts/archive/abc et /posts/article-inconnu répondent toutes deux 404, et quelle ligne de code en est responsable dans chaque cas ?
    /posts/archive/abc : la ligne ->whereNumber('year') dans web.php refuse abc car ce n’est pas un nombre. Aucune route ne correspond, donc 404

    /posts/article-inconnu : la route correspond, mais le slug n’existe pas dans le tableau. La ligne abort(404) dans la méthode show de PostController.php renvoie le 404

Que se passe-t-il si une vue appelle route('posts.show') sans paramètre ?
    laravel affiche un erreur car le paramètre {slug} est obligatoire et il manque