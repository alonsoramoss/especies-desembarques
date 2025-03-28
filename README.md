# Sistema de Gestión de Especies y Desembarques
Sistema de gestión de especies y desembarques desarrollado con PHP, javaScript y bootstrap, permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en una base de datos de especies y desembarques.

## Funcionalidades
- **Registrar:** Permite ingresar registros a la base de datos.
- **Actualizar:** Permite la modificación de los detalles.
- **Eliminar:** Permite eliminar registros de la base de datos.
- **Búsqueda:** Permite buscar especies o desembarques por sus características.

## Instalación y Configuración
#### 1. Clona el repositorio
    git clone https://github.com/alonsoramoss/crud-php.git

#### 2. Coloca las carpetas en el directorio del servidor
Mover las carpetas en el directorio `htdocs` dentro del directorio de instalación de XAMPP. Por defecto, esto suele ser `C:\xampp\htdocs`.

#### 3. Inicia Apache y MySQL en XAMPP
Abre el panel de control de XAMPP y activa los servicios de **Apache** y **MySQL**.

#### 4. Configura la base de datos
En MySQL crea una base de datos llamada `desem`.
- Ejecuta el siguiente script SQL para crear las tablas Especies y Desembarques:

```sql
CREATE TABLE Especies (
    idEspecie int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(20) NOT NULL,
    tipo varchar(40) NOT NULL
);

CREATE TABLE Desembarques (
    idDesembarque int PRIMARY KEY AUTO_INCREMENT,
    idEspecie int NOT NULL,
    fecha date NOT NULL,
    kg_dia decimal(10,2) NOT NULL,
    FOREIGN KEY (idEspecie) REFERENCES Especies(idEspecie)
);
```

#### 5. Configura los archivos de conexión a la base de datos
Asegúrate de que el archivo `conexion.php` esté configurado correctamente con tus credenciales de MySQL.

#### 6. Accede al sistema
Abre tu navegador y accede a las siguientes URLs:
- Gestión de Especies: http://localhost/crudesp
- Gestión de Desembarques: http://localhost/crudesem

