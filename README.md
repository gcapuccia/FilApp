# FilApp

<p align="center">
  <img src="https://raw.githubusercontent.com/gcapuccia/FilApp/main/Logo.png" alt="FilApp Logo" width="200">
</p>

## Descripción

**FilApp** es una aplicación diseñada para organizar filas en los locales.

## Instalación DE LA API

### Paso 1: Descargar e Instalar XAMPP
1. **Descargar XAMPP**:
   - Ve a la página oficial de XAMPP.
   - Descarga la versión de XAMPP adecuada para tu sistema operativo (Windows, macOS, Linux).

2. **Instalar XAMPP**:
   - Ejecuta el instalador descargado.
   - Sigue las instrucciones del asistente de instalación.
   - Selecciona los componentes que deseas instalar (por defecto, Apache y MySQL están seleccionados).
   - Completa la instalación.

### Paso 2: Iniciar Apache y MySQL
1. **Abrir el Panel de Control de XAMPP**:
   - Ejecuta el `XAMPP Control Panel` desde el menú de inicio o el directorio de instalación.

2. **Iniciar Apache y MySQL**:
   - En el panel de control, haz clic en el botón "Start" junto a "Apache".
   - Haz clic en el botón "Start" junto a "MySQL".
   - Asegúrate de que ambos servicios estén en funcionamiento (deberían aparecer resaltados en verde).

### Paso 3: Volcar la Carpeta "php" en `htdocs`
1. **Ubicar el Directorio `htdocs`**:
   - Navega al directorio de instalación de XAMPP (por ejemplo, `C:\xampp` en Windows).
   - Abre la carpeta `htdocs` y crea una nueva llamada 'FilApp'.

2. **Copiar la Carpeta "php"**:
   - Copia tu carpeta llamada "php" y pégala dentro del directorio `htdocs/FilApp`.

### Paso 4: Cargar el Archivo `.sql`
1. **Abrir phpMyAdmin**:
   - Abre tu navegador web y ve a `http://localhost/phpmyadmin`.

2. **Crear una Nueva Base de Datos**:
   - En phpMyAdmin, haz clic en "Bases de datos".
   - Ingresa un nombre para tu nueva base de datos y haz clic en "Crear".

3. **Importar el Archivo `.sql`**:
   - Selecciona la base de datos que acabas de crear.
   - Haz clic en la pestaña "Importar".
   - Haz clic en "Seleccionar archivo" y elige tu archivo `.sql`.
   - Haz clic en "Continuar" para importar el archivo.

## Uso

Para acceder a la aplicación, abre tu navegador web y ve a por ejemplo `http://localhost/FilApp/php/api/empleados.php`.

## MODELOS
`//api/empleados.php`:

export interface Empleados {
  id: number
  Nombre: string
  Apellido: string
  Usuario: string
  pass: string
  idCargo: number
  idVendedor: number
  Mail: string
  Domicilio: string
  Localidad: string
  UltimoLogin: string
  UserCreador: any
}

`//api/cargos.php`:

export interface Cargos {
  idCargo: number
  Tipo: string
}

`//api/resenas.php`:

export interface Resenas {
  idCargo: number
  nombre: string
  clasificacion: number
  obs: string
}


`//api/motivos.php`: 

export interface Motivos {
  id: number
  titulo: string
  descripccion: string
}


