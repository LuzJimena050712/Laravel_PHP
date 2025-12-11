# Proyecto Laravel - Sistema de Vistas Conectadas

**Autor:** Luz Jimena Arce Gabriel  
**Curso:** Desarrollo Web con PHP  
**Fecha:** Diciembre 2025

## 📋 Descripción del Proyecto

Este proyecto es una aplicación web desarrollada con Laravel que demuestra la creación y conexión de múltiples vistas mediante un sistema de rutas. El proyecto incluye 3 vistas principales que están interconectadas, permitiendo la navegación fluida entre ellas.

## 🚀 Características

- **3 Vistas Principales:** Cada vista tiene su propósito específico y está correctamente enrutada
- **Sistema de Navegación:** Las vistas están conectadas entre sí mediante enlaces
- **Rutas Configuradas:** Sistema de rutas de Laravel implementado correctamente
- **Interfaz Responsive:** Diseño adaptable a diferentes dispositivos

## 🛠️ Tecnologías Utilizadas

- PHP 8.x
- Laravel 10.x
- Blade (Motor de plantillas)
- HTML5 & CSS3
- Artisan CLI

## 📁 Estructura del Proyecto

```
proyecto-laravel/
│
├── app/
│   └── Http/
│       └── Controllers/
│
├── resources/
│   └── views/
│       ├── alumnos/
│       │   └── index.blade.php
│       ├── vista2.blade.php
│       └── vista3.blade.php
│
├── routes/
│   └── web.php
│
└── README.md
```

## 🔧 Instalación y Configuración

### Prerrequisitos

- PHP >= 8.0
- Composer
- Laravel instalado globalmente

### Pasos para ejecutar el proyecto

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/Luzjimena050712/Laravel_PHP.git
   cd Laravel_PHP
   ```

2. **Instalar dependencias:**
   ```bash
   composer install
   ```

3. **Configurar el archivo .env:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Iniciar el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```

5. **Acceder a la aplicación:**
   Abre tu navegador y visita: `http://127.0.0.1:8000`

## 🔗 Rutas Disponibles

| Ruta | Vista | Descripción |
|------|-------|-------------|
| `/alumnos` | index.blade.php | Vista principal del listado de alumnos |
| `/vista2` | vista2.blade.php | Segunda vista del sistema |
| `/vista3` | vista3.blade.php | Tercera vista del sistema |

## 💡 Funcionalidad

El proyecto demuestra:
- ✅ Creación de rutas en Laravel
- ✅ Conexión entre vistas mediante enlaces
- ✅ Uso de Blade como motor de plantillas
- ✅ Navegación funcional entre páginas
- ✅ Servidor de desarrollo configurado correctamente
- ✅ Implementación de controladores
- ✅ Sistema de vistas organizado

## 📝 Notas del Desarrollo

Este proyecto fue desarrollado como parte de la segunda práctica de PHP, enfocándose en:
- La correcta implementación del sistema de rutas de Laravel
- La creación de vistas dinámicas con Blade
- La interconexión efectiva entre diferentes páginas
- El uso de comandos Artisan para el desarrollo
- La organización del código siguiendo las mejores prácticas de Laravel

## 🤝 Contribuciones

Este es un proyecto académico, pero sugerencias y comentarios son bienvenidos.

## 📄 Licencia

Este proyecto es de uso académico.

---

**Repositorio:** https://github.com/Luzjimena050712/Laravel_PHP  
**Contacto:** Luz Jimena Arce Gabriel
