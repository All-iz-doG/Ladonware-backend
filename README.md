# LADONWARE-BACKEND

Este Backend fue desarrollado utilizando Laravel 8

## REQUISITOS
### Habilitar Hyper-V usando PowerShell

1. Abrir una consola de PowerShell como administrador.

2. Ejecutar el siguiente comando:

```bash
Enable-WindowsOptionalFeature -Online -FeatureName Microsoft-Hyper-V -All
```

### Instalar Lando

1.descargar e instalar la ultima version de Lando adecuada para el sistema operativo correspondiente del siguiente enlace:
[Lando git](https://github.com/lando/lando/releases).

### Contar Con PHP y Composer 

1. En caso de no contar con Composer y artisan abajo se encuentra el enlace necesario:
- 1.1 [Composer](https://getcomposer.org/download/)


## Instalación

1. Una vez contemos con Lando abrimos el proyecto en nuestro IDE
2. Buscamos el .env.example y creamos un .env basandonos en la copia
3. Ejecutamos en Consola el siguiente comando:

```bash
php artisan key:generate
```

4. Ejecutamos en consola el siguiente comando:

```bash
lando start
```

5. Listo! el servidor deberia estar funcionando con normalidad.
