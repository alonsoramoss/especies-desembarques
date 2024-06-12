# Sistema de Gestión de Especies y Desembarques
Sistema de gestión de especies y desembarques desarrollado en PHP y JavaScript, permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en una base de datos de especies y desembarques.

## Funcionalidades
- **Registrar:** Permite ingresar registros a la base de datos.
- **Actualizar:** Facilita la modificación de los detalles.
- **Eliminar:** Permite eliminar registros de la base de datos.
- **Búsqueda:** Permite buscar especies o desembarques por sus características.

### Pasos para utilizar el sistema
1. **Clonar el repositorio**

2. **Colocar las carpetas en el directorio del servidor**
    - Mover las carpetas en el directorio *htdocs* dentro del directorio de instalación de XAMPP. Por defecto, esto suele ser *C:\xampp\htdocs*.

3. **En el XAMPP Control Panel iniciar Apache y MySQL**

4. **Configurar la Base de Datos**
    - En MySQL crear una base de datos llamada `desem`.
    - Ejecutar el siguiente script SQL para crear las tablas (especies y desembarques):

  ```sql
CREATE TABLE Especies (
    idEspecie int PRIMARY KEY,
    nombre varchar(20) NOT NULL,
    tipo varchar(40) NOT NULL
);

CREATE TABLE Desembarques (
    idDesembarque int PRIMARY KEY,
    idEspecie int NOT NULL,
    fecha date NOT NULL,
    kg_dia decimal(10,2) NOT NULL,
    FOREIGN KEY (idEspecie) REFERENCES Especies(idEspecie),
);
  ```
5. **Acceder al archivo PHP desde un navegador web**
    - Abre un navegador web y escribe la siguiente URL para acceder a tu archivo PHP:
*http://localhost/miarchivo.php*


6. **Ejecutar el sistema (agrega, actualiza o elimina)**


