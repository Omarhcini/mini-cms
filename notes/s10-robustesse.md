# Session 10 - Robustesse

TagAdminTest contient 5 tests verts : oui
/posts/categorie/inconnue affiche Catégorie introuvable avec le statut 404 : oui
php artisan test est vert : oui

1. Pourquoi le message de messages() l'emporte-t-il sur celui de lang/fr/validation.php ?
Le message de messages() vise une règle précise d'un champ précis, donc Laravel le consulte avant le message général du fichier de langue.

2. Pourquoi phpunit.xml fixe-t-il APP_LOCALE ?
Les tests comparent des textes français et doivent produire le même résultat sur tous les postes et tous les clones.

3. Pourquoi CategoryController n'a-t-il besoin d'aucun try/catch ?
La Form Request valide avant le contrôleur, le middleware bloque les écritures en lecture seule et le gestionnaire d'exceptions transforme les modèles manquants en pages 404.
