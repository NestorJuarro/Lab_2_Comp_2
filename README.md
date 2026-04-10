# Laboratorio 2 – Sistema con Login en PHP

## Descripción
Este proyecto es una página web que permite iniciar sesión con un usuario guardado en la base de datos.  
Después de ingresar, el usuario puede registrar productos y verlos en una tabla.

---

## Funciones principales
- Login de usuario
- Registro de productos
- Mostrar productos en tabla
- Validación de datos
- Cerrar sesión

---

## Base de datos
Se usaron dos tablas:

### Usuarios
Guarda los datos para iniciar sesión:
- id
- nombre
- correo
- contraseña

### Productos
Guarda los productos registrados:
- id
- nombre
- descripción
- precio
- cantidad
- fecha

---

## Respuestas

### ¿Cómo funciona el login?
El usuario escribe su correo y contraseña.  
El sistema revisa en la base de datos si coinciden y si son correctos, permite entrar.

---

### ¿Por qué usar base de datos y no variables?
Porque las variables se borran cuando se cierra la página.  
La base de datos guarda la información de forma permanente.

---

### ¿Cuándo usar base de datos, sesiones o cookies?

- Base de datos: para guardar información importante (usuarios, productos)
- Sesiones: para saber quién está conectado
- Cookies: para recordar datos simples del usuario

---

### Descripción de las tablas

Usuarios:
- id: número único
- nombre: texto
- correo: texto
- contraseña: texto

Productos:
- id: número único
- nombre: texto
- descripción: texto
- precio: número con decimales
- cantidad: número entero
- fecha: fecha automática

---

## Cómo funciona el sistema
1. El usuario inicia sesión  
2. Entra al sistema  
3. Registra productos  
4. Los productos se guardan  
5. Se muestran en una tabla  
6. Puede cerrar sesión  