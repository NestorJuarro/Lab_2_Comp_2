# Laboratorio 2 – PHP y MySQL

## Integrantes

* Nombre 1: Alondra Aminta Andrade Escobar
* Nombre 2: Nestor Enrique Juarro Quintanilla

---

## Descripción

Este proyecto consiste en una página web con login de usuarios.
Después de iniciar sesión, se pueden registrar productos y verlos en una tabla.
También se pueden eliminar registros.

---

## Tecnologías usadas

* PHP
* MySQL
* HTML / CSS
* Bootstrap

---

## Respuestas

### ¿Cómo funciona el login?

El usuario ingresa su correo y contraseña.
El sistema verifica los datos en la base de datos y si son correctos, permite el acceso.

---

### ¿Por qué usar base de datos?

Porque permite guardar la información de forma permanente, a diferencia de las variables que se pierden.

---

### ¿Cuándo usar BD, sesiones o cookies?

* Base de datos: información permanente
* Sesiones: mantener usuario activo
* Cookies: recordar datos simples

---

### Descripción de tablas

Usuarios:

* id: número único
* nombre: texto
* correo: texto
* contraseña: texto

Productos:

* id: número único
* nombre: texto
* descripción: texto
* precio: número decimal
* cantidad: número entero
* fecha: automática

---

## Funcionamiento

1. Login
2. Ingreso al sistema
3. Registro de productos
4. Visualización en tabla
5. Eliminación de productos
6. Cierre de sesión

---