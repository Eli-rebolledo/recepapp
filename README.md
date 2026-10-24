# RecepApp - Proyecto académico 

RecepApp es una aplicación web de recetas de cocina donde los usuarios pueden descubrir platos nuevos, publicar sus propias recetas, guardar sus favoritas y compartir opiniones con la comunidad.



---

## Descripción

La idea de RecepApp es ofrecer un lugar sencillo donde cualquier persona pueda encontrar recetas fáciles y deliciosas. Cualquier visitante puede explorar el catálogo y buscar recetas, y al crear una cuenta puede además publicar las suyas, marcar favoritas y comentar.

## Objetivo del proyecto

Aplicar los conocimientos de desarrollo web y bases de datos construyendo una aplicación completa, con registro de usuarios, manejo de sesiones, operaciones CRUD (crear, leer, actualizar y eliminar) y carga de imágenes.

## Funcionalidades

**Para todos los visitantes**
- Ver la página de inicio con buscador y categorías destacadas.
- Explorar el catálogo completo de recetas.
- Buscar recetas por nombre y filtrarlas por categoría.
- Ver el detalle de cada receta: descripción, ingredientes, instrucciones y comentarios.

**Para usuarios registrados**
- Crear una cuenta e iniciar o cerrar sesión.
- Publicar recetas con título, descripción, categoría, ingredientes, instrucciones e imagen.
- Editar y eliminar sus propias recetas.
- Guardar recetas en su lista de favoritos y quitarlas cuando quiera.
- Comentar en las recetas y eliminar sus propios comentarios.
- Consultar sus secciones personales: **Mis Recetas** y **Favoritos**.

## Tecnologías utilizadas

| Tecnología | Uso en el proyecto |
|------------|--------------------|
| **PHP 8.2** | Lógica del servidor, sesiones y manejo de formularios |
| **MySQL** | Almacenamiento de usuarios, recetas, favoritos y comentarios |
| **HTML5** | Estructura de las páginas |
| **CSS3** | Diseño y estilos de la interfaz |
| **Font Awesome** | Íconos de la interfaz |
| **Google Fonts (Poppins)** | Tipografía |
| **Apache y Docker** | Servidor y contenedor de la aplicación |
| **Render** | Plataforma de despliegue |

## Estructura del proyecto

```
recepapp/
├── backend/
│   ├── conexion.php         # Conexión a la base de datos
│   ├── session.php          # Manejo de la sesión del usuario
│   ├── helpers.php          # Funciones auxiliares (rutas e imágenes)
│   └── logout.php           # Cierre de sesión
├── frontend/
│   ├── index.php            # Página de inicio
│   ├── iniciar-sesion.php   # Login
│   ├── registrarse.php      # Registro de usuarios
│   ├── ver-mas-recetas.php  # Catálogo, búsqueda y filtros
│   ├── ver-receta.php       # Detalle de receta, favoritos y comentarios
│   ├── agregar-receta.php   # Publicar una receta
│   ├── editar-receta.php    # Editar una receta
│   ├── ver-recetas-propias.php
│   ├── ver-favoritos.php
│   ├── css/                 # Hoja de estilos
│   └── img/                 # Imágenes de recetas y categorías
├── Dockerfile               # Configuración del contenedor
└── render.yaml              # Configuración de despliegue en Render
```

## Base de datos

La aplicación utiliza cinco tablas relacionadas entre sí:

- **usuarios**: datos de cada usuario registrado (nombre, correo y contraseña cifrada).
- **categorias**: tipos de receta (sopas, postres, ensaladas, etc.).
- **recetas**: título, descripción, ingredientes, instrucciones, imagen, categoría y autor.
- **favoritos**: relación entre usuarios y las recetas que guardaron.
- **comentarios**: opiniones de los usuarios sobre cada receta.

## Seguridad

- Las contraseñas se almacenan cifradas con `password_hash` y se verifican con `password_verify`.
- Las consultas a la base de datos usan sentencias preparadas para evitar inyección SQL.
- Solo el autor de una receta o comentario puede editarlo o eliminarlo.
- Las imágenes subidas se validan por extensión (jpg, jpeg, png y gif) y se guardan con un nombre único.



## 📄 Licencia

Proyecto con fines educativos.
