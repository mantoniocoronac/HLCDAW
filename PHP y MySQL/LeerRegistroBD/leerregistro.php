<?php

//MYSQLI_NUM sirve para buscar el numero de fila

//MYSQLI_ASSOC te da una fila de un array asociativo

//MYSQLI_BOTH crea un array con los atributos de los 2


  echo "<pre>";
  # Conexión a la base de datos
  $conn = mysqli_connect( 'localhost', 'pruebas', 'pruebas', 'PRUEBAS');

  # Sentencia para leer los registros de la tabla users
  $sql = "Select id, name, email, created From users";

  # Ejecutamos la consulta a la base de datos PRUEBAS
  $result = mysqli_query( $conn, $sql);
  # Recogemos el primer registro de la tabla
  $rows = mysqli_fetch_array( $result, MYSQLI_BOTH);

  # Lo imprimimos por pantalla
  print_r ( $rows);

  # Recorremos el array de registros hasta el final
  do {
    $data[] = $rows;
  }while ( $rows = mysqli_fetch_array( $result, MYSQLI_BOTH));

  # Mostramos por pantalla el array donde hemos guardado los registros
  print_r ( $data);

  # Cerramos la conexión
  mysqli_close( $conn);
  ?>