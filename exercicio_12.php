<?php
/*
Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en
el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación
obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan
de conocimientos en las diferentes asignaturas del curso.
*/

if(!isset($_POST['respuesta1']) && !isset($_POST['respuesta2']) && !isset($_POST['respuesta3']))
    echo "<p>Tienes que contestar todas las preguntas del cuestionario</p>";

else{
    $puntos = $_POST['respuesta1'] + $_POST['respuesta2'] + $_POST['respuesta3'];
    echo "Calificación final: $puntos puntos.";
}


?>