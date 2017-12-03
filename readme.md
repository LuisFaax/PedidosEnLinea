## <p>Sistema de Pedidos Online</p>


**Descripción:**
Sistema web para gestión de pedidos en línea

**Tecnologías empleadas:**
* Laravel 5.5
* ORM Eloquent
* MySQL
* Bootstrap 3
* Material kit

**Contenidos del proyecto:**
* Registro de usuarios
* Acceso por perfiles
* Gestión de categorias
* Gestión de productos
* Gestión de imágenes
* Gestión de órdenes de pedidos
* Buscador predictivo de artículos
* Carrito de compras
* Reporte gráfico de estadísticos


**Instalación:**
* git clone https://github.com/LuisFaax/PedidosEnLinea.git
* Renombrar el archivo .env.example a .env y configurar la conexión a la base de datos MySQL
* Configurar en .env los datos para la gestión de envío de correos: MAIL_DRIVER=smtp MAIL_HOST=smtp.gmail.com MAIL_PORT=587 MAIL_USERNAME=tu email MAIL_PASSWORD=tu clave MAIL_ENCRYPTION=tls
* Composer update
* php artisan migrate:install
* php artisan migrate:refresh
* Finalmente registrar un usuario y setearlo como Admin para la administración
** Para enviar correos desde una cuenta gmail, es necesario activar: Allow less secure apps: YES
