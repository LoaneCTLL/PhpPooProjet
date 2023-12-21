Projet - Cotellon Loane en PHP POO

Pour commencer, je m'excuse infiniment d'avoir rendu mon devoir en retard, ce qui ne correspondait pas aux délais prévus. J'ai rencontré des imprévus qui m'ont contrainte à recommencer mon projet à seulement une heure de la date limite. 
J'ai utilisé les fiches de documentation que j'avais créées pour mon projet précédent afin de présenter le travail réalisé, même si celui-ci était défectueux.

# Documentation de Projet : Site de Vitrine d'Articles

## Mon projet d'origine

##### Dès le debut mes objectifs sont claires: 
Je voulais créer un site où serait répertoriés des articles qui me plaisaient sur internet. Le site était conçu comme une boutique, sauf que pour acheter, le client devait se rendre sur le vrai site marchand via un lien.

Les articles étaient disposés sur une page d'accueil. Lorsque le client cliquait sur un produit, il arrivait sur une page de description du produit que j'avais réalisée moi-même.

À partir de la page d'accueil, l'utilisateur pouvait choisir dans les onglets du header la catégorie où il souhaitait chercher des articles.

Sur la page de la catégorie sélectionnée, le client avait le choix pour chaque article (les articles étaient disposés en lignes). Il pouvait cliquer sur :
- une icône panier qui le redirigeait directement vers la page du marchand qui vendait réellement le produit.
- une icône cœur qui ajoutait le produit à ses favoris (il devait se connecter pour cela).

Dans la page de description d'un produit individuel, il y avait également une icône panier et une icône cœur pour les actions mentionnées précédemment.

Dans le header, il y avait aussi un onglet 'compte' qui, lorsque l'on cliquait dessus sans être connecté, redirigeait vers une page de connexion/inscription. Si en revanche l'utilisateur était connecté, l'onglet "Mon compte" le redirigeait vers la page où étaient sauvegardés les articles de sa wishlist.

Tout cela avait pour but de ne pas avoir de réel panier à gérer, ni de commandes ou de livraison.

La seule chose que je devais faire sur mon site était de pouvoir catégoriser les produits dans des catégories telles que maison (salon, salle de bain, chambre, jardin), vêtements homme, vêtements femme, produits de beauté, accessoires, et high-tech.

### Pour se faire j'ai:

###### Réaliser une structure précise pour mon dossier de projet où chaque dossier devait avoir leur role dans ce projet complexe:
(c'est le schema que j'avais élaborer pour ne pas me perdre dans mes fichiers)
```
- EcommerceWebsiteProject/
    - app/
        
        - Controller/
            - AccountController.php: Gère les actions associées aux comptes utilisateur.
            - CategoryController.php: S'occupe des opérations liées aux catégories de produits.
            - PageController.php: il va traiter les pages générales du site.
            - ProductController.php: Effectue les actions liées aux produits.
            - WishlistController.php: Supervise les fonctionnalités de la liste de souhaits des utilisateurs.
        - Model/
            - Product.php: Définit le modèle de base pour les produits.
            - ImportedProduct.php: Gère les produits importés.
            - WishlistItem.php: Définit la structure pour les éléments de la liste de souhaits.
        - View/
            - product/
                - index.php: Affiche la liste des produits.
                - details.php: Présente les détails d'un produit spécifique.
            - cart/
                - index.php: il affiche le contenu du panier d'achat.
            - order/
                - index.php: S'occupe des commandes et des paiements.
    - public/
        
        - index.php: Point d'entrée principal de l'application web.
    - config/
        
        - config.php: Contient les paramètres de configuration globaux de l'application.
        - configTest.php: Paramètres de configuration pour les tests.
        - routes.php: Fichier de routage pour définir les itinéraires de l'application.
        - auth/
            - login.php: Gère l'authentification des utilisateurs.
            - register.php: Traite l'inscription des utilisateurs.
    - templates/
        
        - header.php: Contient le code HTML de l'en-tête commun à toutes les pages.
        - footer.php: Comprend le code HTML du pied de page commun à toutes les pages.
```

##### J'avais également élaboré une structure de base de donnée pour mon site (oui je fait beaucoup de schéma)

**Table "Users" :**
- user_id : Clé primaire, identifiant unique de l'utilisateur.
- username : Nom d'utilisateur de l'utilisateur.
- email : Adresse e-mail de l'utilisateur.
- password : Mot de passe haché de l'utilisateur.

**Table "Products" :**
- product_id : Clé primaire, identifiant unique du produit.
- product_name : Nom du produit.
- description : Description du produit.
- link_to_origin : Lien vers la boutique en ligne d'origine du produit.
- price : Prix du produit au format décimal.
- other_info : Autres informations sur le produit.

**Table "Wishlist" :**
- wishlist_id : Clé primaire, identifiant unique de l'élément dans la liste de souhaits.
- user_id : Clé étrangère faisant référence à la table Users, identifiant de l'utilisateur.
- product_id : Clé étrangère faisant référence à la table Products, identifiant du produit.
- date_added : Date à laquelle le produit a été ajouté à la liste de souhaits.

**Table "Categories" :**
- category_id : Clé primaire, identifiant unique de la catégorie.
- category_name : Nom de la catégorie.

**Table "ProductCategories" :**
- product_id : Clé étrangère faisant référence à la table Products, identifiant du produit.
- category_id : Clé étrangère faisant référence à la table Categories, identifiant de la catégorie.

___

![[Capture d’écran 2023-12-21 à 04.02.02.png]]
### Après m'être connecté à la base de donnée j'ai:
**- Défini les Modèles de Données :** J'ai créé des classes de modèle pour représenter les données de mon application. Ces classes de modèle correspondaient généralement aux tables de ma base de données. Chaque classe de modèle a inclus des méthodes pour interagir avec la base de données, telles que l'insertion, la mise à jour et la récupération des données.

**- Créé les Contrôleurs :** J'ai mis en place les contrôleurs pour gérer les différentes actions de mon application. Par exemple, j'ai eu un contrôleur pour gérer l'affichage des produits, un autre pour gérer les utilisateurs, et ainsi de suite. Les contrôleurs ont servi à recevoir les demandes des utilisateurs, à traiter ces demandes et à renvoyer les réponses appropriées.

**- Implémenté les Vues :** J'ai créé les vues pour afficher les informations aux utilisateurs. Les vues étaient responsables de la présentation des données. Dans mon cas, les vues ont affiché les produits, les pages de détails des produits, le panier d'achat, etc.

**- Configuré les Routes :** J'ai défini les itinéraires (routes) de mon application. Les routes ont déterminé quelles actions des contrôleurs devaient être exécutées en fonction de l'URL demandée. Par exemple, l'URL "/products" a pu être associée à l'action qui a affiché la liste des produits.

**- Géré l'Authentification :** Si mon application a nécessité une authentification utilisateur, j'ai mis en place le système d'authentification. J'ai créé des pages de connexion et d'inscription, ainsi que des mécanismes pour vérifier les informations d'identification des utilisateurs et les autoriser à accéder aux fonctionnalités protégées.

**- Implémenté la Fonctionnalité de Liste de Souhaits :** Si mon projet a inclus une liste de souhaits, j'ai développé les fonctionnalités permettant aux utilisateurs d'ajouter des produits à leur liste, de la visualiser et de la gérer.

**- Créé une Interface Utilisatrice Conviviale :** J'ai assuré que mon site a disposé d'une interface utilisateur conviviale et réactive. J'ai optimisé la navigation, la mise en page et l'apparence générale du site pour offrir une expérience utilisateur agréable avec du CSS vanilla.

![[Page d'acceuil.png]]
![[Page onglet maison 1:2  copie.png]]
![[Page onglet maison 2:2  copie.png]]
![[Beige Minimalist Creative Agency Website Desktop Prototype copie.png]]
![[Page onglet mon compte (formulaire inscription connection).png]]
![[Page onglet mon compte dans le cas où le mot de passe ou l'ID n'est pas reconnu par la base de donnée copie.png]]
![[Page mon compte lorsque l'utilisateur est connecté copie.png]]

# Mais Probleme mes routes ne fonctionnaient plus après avoir implementé une methode Controller 

![[Capture d’écran 2023-12-21 à 04.32.41.png]]

![[Capture d’écran 2023-12-21 à 04.33.03.png]]
Je n'ai plus les erreurs exactes, mais en gros, peu importe ce que je faisais, soit j'étais redirigée vers une page blanche, soit je restais sur ma page d'accueil.

Voilà, voilà, c'est très frustrant tout ça.

Du coup, j'ai simplement réduit mon site à une table, une page et deux actions pour avoir le temps de rendre quelque chose de complet.

J'ai recyclé la table "product" de mon site. En cette période de Noël, où d'autres cherchent des produits sans besoin de les acheter que sur le site du Père Noël, c'est là que l'idée de la liste de Noël m'est venue, et j'ai réussi à l'implémenter. 
J'ai utilisé Bulma pour le css mais j'ai quasi fait tout mon css en vanilla quand meme, c'est une obsession.
On peut ajouter et retirer des items de la liste, et ça montre déjà ma compréhension du langage PHP orienté objet pour se connecter et gérer une base de données.

Bref, je croise les doigts pour avoir la moyenne malgré tout.
