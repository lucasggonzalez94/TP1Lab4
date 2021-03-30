<?php
    function selectNoticias()
    {
        $db = conectarDB();

        $query = 'SELECT * FROM noticia;';

        $resultado = mysqli_query($db, $query);

        return $resultado;
    }

    function selectNoticiasPorIdEmpresa($idEmpresa)
    {
        $db = conectarDB();

        $query = "SELECT * FROM noticia WHERE id_empresa = ${idEmpresa} ORDER BY fecha_publicacion DESC LIMIT 5;";

        $resultado = mysqli_query($db, $query);

        return $resultado;
    }

    function selectNoticiaPorId($id)
    {
        $db = conectarDB();

        $query = "SELECT * FROM noticia WHERE id = ${id};";

        $resultado = mysqli_query($db, $query);

        return $resultado;
    }

    function buscarNoticias($idEmpresa, $palabraBuscada)
    {
        $db = conectarDB();

        $query = "SELECT * FROM noticia WHERE id_empresa = ${idEmpresa} AND titulo_de_la_noticia LIKE '%${palabraBuscada}%' OR resumen_de_la_noticia LIKE '%${palabraBuscada}%' ORDER BY fecha_publicacion DESC;";

        $resultado = mysqli_query($db, $query);

        return $resultado;
    }

    function insertNoticia($titulo, $resumen, $imagen, $contenido, $publicada, $fecha, $idEmpresa)
    {
        $db = conectarDB();

        $query = "INSERT INTO noticia (titulo_de_la_noticia, resumen_de_la_noticia, imagen_noticia, contenido_html, publicada, fecha_publicacion, id_empresa) VALUES ('${titulo}', '${resumen}', '${imagen}', '${contenido}', '${publicada}', '${fecha}', ${idEmpresa});";

        mysqli_query($db, $query);
    }

    function deleteNoticia($id)
    {
        $db = conectarDB();

        $query = "DELETE FROM noticia WHERE id = ${id};";

        mysqli_query($db, $query);
    }

    function updateNoticia($id, $titulo, $resumen, $imagen, $contenido, $publicada, $fecha, $idEmpresa)
    {
        $db = conectarDB();

        $query = "UPDATE noticia SET titulo_de_la_noticia = '${titulo}', resumen_de_la_noticia = '${resumen}', imagen_noticia = '${imagen}', contenido_html = '${contenido}', publicada = '${publicada}', fecha_publicacion = '${fecha}', id_empresa = ${idEmpresa} WHERE id = ${id};";

        mysqli_query($db, $query);
    }