# ToroGoSV - App de Comida a Domicilio

ToroGoSV es una plataforma de comida a domicilio en fase MVP (Producto Mínimo Viable) enfocada en Chalatenango, El Salvador. Conecta restaurantes locales con clientes, ofreciendo entregas rápidas y seguimiento en tiempo real. Este repositorio contiene el código de la landing page y el sistema de registro de leads (clientes, repartidores y negocios).

Sitio web: https://torogoapp.com

## Características principales

- Landing page atractiva y responsive diseñada con Tailwind CSS.
- Formulario de registro inteligente para:
  - Clientes interesados en la app.
  - Repartidores que quieran unirse.
  - Negocios que deseen estar en la plataforma.
- Campos dinámicos que se muestran según el tipo de usuario (ej. nombre del negocio para empresas, tipo de vehículo para repartidores).
- Protección contra bots con Google reCAPTCHA v2.
- Validaciones robustas en el backend con mensajes de error personalizados.
- Páginas legales: Política de Privacidad y Términos y Condiciones.
- SEO optimizado: metaetiquetas, Open Graph y favicons personalizados.
- Listo para producción con configuración de entorno y base de datos.

## Tecnologías utilizadas

- Laravel 12.x
- PHP 8.2
- Tailwind CSS 3.x
- FontAwesome 6.7.2
- MySQL 8.0+
- Google reCAPTCHA v2
- Git

## Requisitos previos

- PHP >= 8.2
- Composer
- MySQL / MariaDB
- Node.js y NPM (opcional, para compilar assets)
- Extensiones de PHP: pdo_mysql, mbstring, openssl, tokenizer, xml, ctype, json, fileinfo

## Instalación en entorno local

1. Clonar el repositorio:
   git clone https://github.com/ballsfox14/torogoapp_page.git
   cd torogoapp_page

2. Instalar dependencias de PHP:
   composer install

3. Configurar el archivo de entorno:
   cp .env.example .env
   Edita el archivo .env con los datos de tu base de datos local:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_bd_local
   DB_USERNAME=root
   DB_PASSWORD=

4. Generar clave de la aplicación:
   php artisan key:generate

5. Ejecutar migraciones:
   php artisan migrate

6. (Opcional) Instalar dependencias de Node y compilar assets:
   npm install
   npm run dev

7. Iniciar el servidor local:
   php artisan serve
   Luego visita http://localhost:8000

## Configuración adicional

### Google reCAPTCHA
- Obtén tus claves en https://www.google.com/recaptcha/admin (selecciona reCAPTCHA v2 -> "No soy un robot").
- Agrégalas a tu archivo .env:
  NOCAPTCHA_SITEKEY=tu_site_key
  NOCAPTCHA_SECRET=tu_secret_key

### Favicons e imágenes
- Los archivos de iconos deben colocarse en la carpeta public/.
- La imagen para Open Graph (compartir.jpg) debe ir en public/images/.

## Despliegue en producción

1. Configurar el servidor con PHP 8.2+, MySQL y Composer.
2. Subir el código (puedes usar Git, FTP, etc.).
3. Crear el archivo .env en el servidor con las credenciales de producción.
4. Instalar dependencias sin desarrollo:
   composer install --optimize-autoloader --no-dev
5. Ejecutar migraciones:
   php artisan migrate --force
6. Optimizar Laravel:
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
7. Configurar el servidor web (Apache/Nginx) para que apunte a la carpeta public/.

## Contribuciones

Las contribuciones son bienvenidas. Para contribuir:
- Haz un fork del repositorio.
- Crea una rama para tu función (git checkout -b feature/nueva-funcion).
- Realiza tus cambios y haz commit (git commit -m 'Agrega nueva función').
- Sube los cambios (git push origin feature/nueva-funcion).
- Abre un Pull Request.

## Licencia

Este proyecto está bajo la licencia MIT.

## Contacto

- Email: contacto@torogoapp.com
- Teléfono: +503 7043-2564
- LinkedIn: https://www.linkedin.com/company/yerba-digital/

Desarrollado con cariño en Chalatenango, El Salvador.