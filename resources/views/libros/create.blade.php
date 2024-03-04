<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    
    <link rel="stylesheet" href="{{ asset('storage/css/styles.css') }}">
    
</head>
<body>

<!-- Encabezado con título, logo y barra de búsqueda -->
<div class="container text-center bg-encabezado mt-2 py-4">
    <div class="row align-items-center">
        <div class="col-md-1 text-start">
            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
            </svg>
        </div>
        <div class="col-md-7 text-md-start mt-2 mt-md-0">
            <h1 class="text-white">Biblioteca</h1>
        </div>
        <div class="col-md-4">
            <form action="{{ route('buscar') }}" method="GET" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar libros" name="query" aria-label="Buscar">
                <button class="btn btn-outline-light btn-buscar" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <!-- Barra lateral derecha -->
        <div class="col-md-3">
            <div class="p-3 bg-encabezado" style="height: 520px;">
                <!-- Contenido de la barra lateral -->
                <a href="{{ route('listado.index') }}" class="btn btn-info btn-lg mb-3" style="width: 100%;">Listar Libros</a>
                <a href="{{ route('administrar') }}" class="btn btn-info btn-lg mb-3" style="width: 100%;">Administrar Libro</a>
                <!-- Botón "Nuevo" -->
                <a href="{{ route('libros.create') }}" class="btn btn-primary btn-lg" style="width: 100%;">Nuevo</a>
            </div>
        </div>
        <!-- Contenedor de la lista de libros -->
        <div class="col-md-9">
            <h3 class="text-center">Añadir Libro</h3>
            <div class="p-3 bg-encabezado" style="max-height: 720px; overflow-y: auto;">
                <!-- Formulario para crear un nuevo libro  -->
                <form action="{{ route('libros.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_publicacion" class="form-label">Fecha de Publicación</label>
                        <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" required>
                    </div>
                    <div class="mb-3">
                        <label for="editorial" class="form-label">Editorial</label>
                        <input type="text" class="form-control" id="editorial" name="editorial" required>
                    </div>
                    <div class="mb-3">
                        <label for="portada" class="form-label">URL de Portada</label>
                        <input type="text" class="form-control" id="portada" name="portada" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear Libro</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container text-center bg-encabezado mt-2 py-4">
    <div class="row align-items-center">
        <div class="col-md-12 text-center">
            <footer class="footer mt-auto py-3  text-white text-center">
                <span class="text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-robot" viewBox="0 0 16 16">
                        <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135"/>
                        <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"/>
                    </svg>
                    <br>
                UBP | IS | Programacion Cliente-Servidor | Javier Johan Keme Correa | 3/3/2024            
            </span>
            </footer>
        </div>
    </div>
</div>

<!-- Enlace a Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
