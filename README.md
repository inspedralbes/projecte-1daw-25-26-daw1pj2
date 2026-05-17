# GI3P - Gestió d'Incidències Informàtiques Institut Pedralbes

## Grup2 - 1r DAW 2025-26

### Integrantes
- Adrián Tomás
- Paulina Barrera

### Objectiu del Projecte
Sistema web per a la gestió d'incidències informàtiques de l'Institut Pedralbes, 
permetent que professors reportin problemes, tècnics els solucinin i administradors 
supervisen el procés.

### Estat del Projecte
**EN PRODUCCIÓ**

#### Funcionalitats Implementades
- Registre de incidències
- Llistats d'incidències
- Panel de tècnics
- Panel d'administrador
- Sistema de logs amb MongoDB
- Estadístiques d'accés
  
### Accés
- **URL Producció:** http://grup2.daw.inspedralbes.cat
- **Documentació PHPDoc:** http://grup2.daw.inspedralbes.cat/docs
- **Repositori GitHub:** [URL del repo]

### Tecnologies
- Backend: PHP 7.4+ (procedural)
- Frontend: HTML5, CSS3, Bootstrap 5, JavaScript
- BD Relacional: MySQL
- BD Document: MongoDB Atlas
- Servidor: Apache
### Estructura del Projecte
```
/
├── index.php           # Pàgina principal
├── login.php           # Autenticació
├── logs.php            # Estadístiques
├── conexio.php         # Connexió a BD
├── user/               # Panell professor
├── tecnic/             # Panell tècnic
├── admin/              # Panell administrador
├── css/                # Estils
├── js/                 # Scripts
└── img/                # Imatges
```

### Validació WCAG AA
- ✅ Formulari de crear incidència: AA
- ✅ Llistat d'incidències: AA

### Equip i Commits
- **Bitàcora:** [Link a Google Sheets]
- **TAIGA:** [Link a TAIGA]
