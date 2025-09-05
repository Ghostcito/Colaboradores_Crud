# Sistema CRUD de Colaboradores

Sistema simple de gestión de colaboradores implementado con PHP puro, MySQL y Bootstrap.

## Requisitos

- PHP 7.4 o superior
- MySQL 5.7 o superior
- XAMPP (o servidor Apache)

## Instalación

1. Clonar el repositorio en la carpeta htdocs de XAMPP:

```bash
cd c:\xampp\htdocs
git clone https://github.com/tuusuario/colaboradores_crud.git
```

2. Importar la base de datos:

```sql
CREATE DATABASE capacitacion;
USE capacitacion;

CREATE TABLE colaboradores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    cargo VARCHAR(50) NOT NULL,
    puesto VARCHAR(50) NOT NULL,
    edad INT,
    fecha_ingreso DATE
);
```

## Estructura del Proyecto

```
colaboradores_crud/
├── config/
│   └── Config_Database.php
├── controller/
│   └── ColaboradorController.php
├── model/
│   └── Colaborador.php
├── service/
│   └── ColaboradorService.php
├── static/
│   └── index.js
└── index.php
```

## Características

- ✅ Listado de colaboradores
- ✅ Creación de nuevos colaboradores
- ✅ Edición de colaboradores existentes
- ✅ Eliminación de colaboradores
- ✅ Validación de datos
- ✅ Mensajes de confirmación con SweetAlert2
- ✅ Diseño responsive con Bootstrap

## Tecnologías Utilizadas

- PHP (sin frameworks)
- MySQL
- Bootstrap 5
- SweetAlert2
- JavaScript

## Uso

1. Acceder a través del navegador:

```
http://localhost/colaboradores_crud/
```

2. El sistema permite:
   - Ver lista de colaboradores
   - Agregar nuevos colaboradores
   - Editar colaboradores existentes
   - Eliminar colaboradores
