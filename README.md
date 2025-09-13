# 🌐 Exauceaniti - Portfolio Personnel

**Exauceaniti** est un site portfolio personnel développé avec PHP, présentant mon profil, mes compétences, mes formations et mes projets. Il propose une interface moderne avec un système complet de thèmes clair/sombre.

## Fonctionnalités

- **Système de thèmes** – Basculer entre les modes clair et sombre
- **Design responsive** – Optimisé pour mobile, tablette et desktop
- **Performance** – Architecture modulaire avec PHP
- **Accessibilité** – Navigation au clavier et compatibilité lecteurs d'écran
- **Formulaire de contact** – Fonctionnel avec traitement PHP
- **Navigation dynamique** – Système de navigation modularisé

## Stack Technique

- **Backend** : PHP pour le rendu côté serveur et la modularisation
- **Frontend** : HTML5 sémantique, CSS3 moderne avec variables CSS
- **Interactivité** : JavaScript vanilla pour les interactions utilisateur
- **Versionning** : Git & GitHub pour le contrôle de version

## Structure du Projet

```plaintext
.
├── about.php
├── competences.php
├── contact.php
├── formations.php
├── images
│   ├── GestionContact.png
│   ├── ImageGestionTache.png
│   ├── ImagePortofolio.png
│   ├── Maseka-Food.png
│   └── photo.png
├── includes
│   ├── footer.php
│   ├── header.php
│   └── navigation.php
├── index.php
├── process-form.php
├── project.php
├── README.md
├── scripts
│   ├── contact.js
│   ├── main.js
│   ├── projects.js
│   └── theme.js
└── styles
    ├── about.css
    ├── cards.css
    ├── contact.css
    ├── dark-theme.css
    ├── footer.css
    ├── header.css
    ├── home.css
    ├── light-theme.css
    ├── main.css
    ├── projects.css
    ├── skills.css
    ├── theme-overrides.css
    ├── theme-variables.css
    └── timelines.css

```

## Installation et Utilisation

### Prérequis

- PHP 7.4 ou supérieur
- Un navigateur web moderne

### Lancer le projet en local

```bash
git clone https://github.com/ton-utilisateur/exauceaniti.git
cd exauceaniti
php -S localhost:8080
```

## Lancer le projet en local

Ouvrez votre navigateur et accédez à :

<http://localhost:8080>

### Modifier les couleurs des thèmes

Les variables CSS sont définies dans `styles/theme-variables.css` :

```css
:root {
  /* Thème sombre (par défaut) */
  --bg-primary: #0a192f;
  --text-primary: #e6f1ff;
  --accent-color: #64ffda;
  /* ... autres variables */
}

[data-theme="light"] {
  /* Thème clair */
  --bg-primary: #f8f9fa;
  --text-primary: #333333;
  --accent-color: #4a6cf7;
  /* ... autres variables */
}
```

## Formulaire de Contact

- Validation côté client avec JavaScript
- Traitement côté serveur avec PHP (`process-form.php`)
- Protection contre le spam

---

## Auteur

**Exauce Aniti**

- Email : [exauceaniti@gmail.com](https://exauceaniti@gmail.com)
- LinkedIn : [Exauce Aniti](https://linkedin.com/in/exauce-aniti)
- Site web : [https://exauceaniti.com](https://exauceaniti.com)