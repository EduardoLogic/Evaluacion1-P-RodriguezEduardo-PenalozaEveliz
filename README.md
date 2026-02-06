# REPÚBLICA BOLIVARIANA DE VENEZUELA
# UPT DEL ESTADO ARAGUA "FEDERICO BRITO FIGUEROA"
# INFORMÁTICA - PROGRAMACIÓN II

**Integrantes:**
* Eduardo Rodriguez 27712316
* Evelys Peñaloza 18165953

**Enunciado Asignado:**
* **Enunciado 3: Concesionario de Vehículos** (Gestión de la entidad Vehículo con Placa, Modelo, Precio de Venta y Estado).

---

#### Instrucciones para ejecutar el proyecto

Para levantar este proyecto en un entorno local, siga estos pasos:

1. **Clonar el repositorio:**
   ```bash
   git clone [https://github.com/TU_USUARIO/NOMBRE_DEL_REPO.git](https://github.com/TU_USUARIO/NOMBRE_DEL_REPO.git)


2. **Instalar dependencias de Composer: Entra a la carpeta del proyecto y corre este comando para instalar Laravel y sus librerías:**


composer install


3. **Configurar el archivo .env: Copia el archivo de ejemplo para crear tu archivo de configuración:**

cp .env.example .env


4. **Generar la clave de la aplicación: Esto es necesario para que Laravel arranque:**

php artisan key:generate


5. **Crear la base de datos (SQLite): Crea el archivo vacío donde se guardará todo:**

touch database/database.sqlite
(Revisa que en tu archivo .env la línea de DB_CONNECTION diga sqlite).


6. **Correr las migraciones y el seeder: Esto crea la tabla de vehículos y mete los 3 registros de prueba que puse para que la tabla no aparezca vacía:**

php artisan migrate:fresh --seed


7. **Lanzar el servidor:**

php artisan serve


Ahora abre el navegador y pon esta dirección: http://127.0.0.1:8000/vehiculos