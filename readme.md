# Scolaris API SDK

Este proyecto es una librería SDK para interactuar con la API de Scolaris. Contiene pruebas unitarias y validación de cobertura de código.

## Requisitos

- **PHP 8.2 o superior**
- **Composer**

## Instalación

### Usando el repositorio como fuente dentro de otro proyecto

Para incluir este proyecto en otro proyecto utilizando Composer, sigue los siguientes pasos:

1. **Agregar el repositorio al archivo `composer.json` de tu proyecto:**

   En tu proyecto principal, abre el archivo `composer.json` y agrega la configuración del repositorio de este SDK:

   ```json
   {
     "repositories": [
       {
         "type": "vcs",
         "url": "https://github.com/citruslab-tech/scolaris-php-sdk"
       }
     ],
     "require": {
       "sofnetcl/admin-api-sdk": "dev-main"
     }
   }
   ```

## Testing

### Solo testing

```
composer test
```

### Testing con docker-compose

```
docker compose up
```
