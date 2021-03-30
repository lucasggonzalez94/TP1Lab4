<?php    
    function selectEmpresas()
    {
        $db = conectarDB();

        $query = 'SELECT * FROM empresa;';

        $resultado = mysqli_query($db, $query);

        return $resultado;
    }

    function selectEmpresaPorId($id)
    {
        $db = conectarDB();

        $query = "SELECT * FROM empresa WHERE id = ${id};";

        $resultado = mysqli_query($db, $query);

        return $resultado;
    }

    function insertEmpresa($denominacion, $telefono, $horario, $quienesSomos, $latitud, $longitud, $domicilio, $email)
    {
        $db = conectarDB();

        $query = "INSERT INTO empresa (denominacion, telefono, horario_de_atencion, quienes_somos, latitud, longitud, domicilio, email) VALUES ('${denominacion}', '${telefono}', '${horario}', '${quienesSomos}', ${latitud}, ${longitud}, '${domicilio}', '${email}');";

        mysqli_query($db, $query);
    }

    function deleteEmpresa($id)
    {
        $db = conectarDB();

        $query = "DELETE FROM empresa WHERE id = ${id};";

        mysqli_query($db, $query);
    }

    function updateEmpresa($id, $denominacion, $telefono, $horario, $quienesSomos, $latitud, $longitud, $domicilio, $email)
    {
        $db = conectarDB();

        $query = "UPDATE empresa SET denominacion = '${denominacion}', telefono = '${telefono}', horario_de_atencion = '${horario}', quienes_somos = '${quienesSomos}', latitud = ${latitud}, longitud = ${longitud}, domicilio = '${domicilio}', email = '${email}' WHERE id = ${id};";

        mysqli_query($db, $query);
    }