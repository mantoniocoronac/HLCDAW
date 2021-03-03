<? include("general.inc")?>
<? Titulares(); ?>Utilizando formularios
<?
$anterior="php18.php"; 
$siguiente="php20.php"; 
Cabeza0();
echo $anterior;
Cabeza1();
echo $siguiente;
Cabeza2();
?>
<? Ladillo() ?><p id="titulillo">PHP dinámico</p>
Lo que hemos visto hasta el momento, solo nos ha servido para escribir una serie de scripts PHP y ver los resultados de su ejecución, pero aún no hemos visto de qué  forma se puede lograr que <B>interactúen</B> el <i>cliente</i> y el <i>servidor</i>.<BR><BR>
Veamos cómo hacerlo.
<p id="titulillo">Envío a través del navegador</p>
La forma más simple de que un <B>cliente</B> pueda <i>enviar</i> valores a un servidor es incluir esos valores en la propia petición, insertándolos directamente en la barra de direcciones del navegador.<BR><BR>
<SPAN id="titulillo">Forma de envío</SpAN><BR><BR>
Deberá insertarse –en la barra de direcciones del navegador– lo siguiente:<BR><BR>
<span id="cursiva1">pagina.php</span><span id="negrita1">?</span><span id="cursiva1">n1</span><span id="negrita1">=</span><span id="cursiva1">v1</span><span id="negrita1">&</span><span id="cursiva1">n2</span><span id="negrita1">=</span><span id="cursiva1">v2</span><BR><BR>
donde<BR><BR>
<span id="cursiva1">pagina.php</span> será la dirección  de la página que contiene el script que ha de procesar los valores transferidos.<BR><BR>
<span id="negrita1">?</span> es un carácter obligatorio que indica que detrás de él  van a ser insertados nombres de variables y sus valores.<BR><BR>
<span id="cursiva1">n1, n2, etcétera</span> representan los <i>nombres</i> de las  variables.<BR><BR>
<span id="negrita1">=</span> es el separador de los nombres de las variables y sus valores respectivos.<BR><BR>
<span id="cursiva1">v1, v2,...</span> simbolizan el valor asignado a cada una de las variables.<BR><BR>
<span id="negrita1">&</span> es el símbolo que separa los distintos bloques <I>variable = valor</I>.
<BR><BR>
Los <B>nombres</B> de las variables <B>nunca llevan</B> el signo <B>$</B>.<BR><BR>
Los <B>valores</B> de las variables –sean números o cadenas– <B>nunca se escriben entre comillas</b>.<BR><BR>
Se pueden incluir tantos <i>nombre = valor </i> como se desee. La única restricción es la longitud máxima permitida por el método <B>GET</B> (el utilizado en este caso) que se sitúa en torno a los 2.000 carácteres.<BR><BR>
<p id="titulillo">Recepción de datos</p>
Cuando es recibida por el <I>servidor</I> la <B>petición</B> de un documento con extensión <B>.php</B> en la que tras el signo <B>?</B> se incluyen una o varias parejas <I>nombre = valor</I>, los nombres de las variables y sus valores respectivos se incluyen, de forma automática, en  variables predefinidas del tipo:<BR><BR>
<span id="negrita1">$HTTP_GET_VARS['</span><span id="cursiva1">n1</span><span id="negrita1">']</span><BR><BR>
<span id="negrita1">$HTTP_GET_VARS['</span><span id="cursiva1">n2</span><span id="negrita1">']</span><BR><BR>
en las que <i>n1</i>, <i>n2</i>, ... coinciden <B>exactamente</B> con nombres asignados a cada una de las variables en esa transferencia.<BR><BR>
Cada una de esas variables contendrá como valor aquel que hubiera recibido a través de la petición.<BR><BR>
Si la <I>versión</I> de <B>PHP</B> es <I>superior</I> a la <B>4.1.0</B>, esos mismos valores se incluirán en  variables superglobales del tipo <B>$_GET</B> de modo que –en el supuesto de que la versión lo soporte– los valores de la petición <B>también</B> (esta opción no excluye la anterior) estarían disponibles en: <BR><BR>
<span id="negrita1">$_GET['</span><span id="cursiva1">n1</span><span id="negrita1">']</span><BR><BR>
<span id="negrita1">$_GET['</span><span id="cursiva1">n2</span><span id="negrita1">']</span><BR><BR>
Según el modo en que esté configurado el <B>php.ini</B> podría caber una <I>tercera</I> posibilidad de registro de esos valores.<BR><BR>
Si la directiva <I>register_globals</I> –en el fichero <B>php.ini</B>– está configurada con la opción <b>ON</b>, los valores transferidos desde el navegador –además de ser recogidos en las variables  anteriores– son asignados a otras variables del tipo: <span id="negrita1">$n1</span>, <span id="negrita1">$n2</span>, ... cuyos nombres son el resultado de anteponer el símbolo <B>$</B> a los nombres de las variables contenidas en la petición.<BR><BR>
La elección a la hora de escribir los scripts de uno u otro tipo de variable debe hacerse teniendo en cuenta que:<BR><BR>
– Esta última –sin duda la más cómoda– tiene el problema de que <I>sólo es válida</I> cuando  <I>register_globals=on</I> y, además, es la más <I>insegura</I> de todas.<BR><BR>
– La superglobal <B>$_GET</B> tiene una sintaxis más corta que su alternativa y, además, añade como ventaja su condición de <B>superglobal</B>, que permite utilizarla en cualquier ámbito sin necesidad de declararla expresamente como <B>global</B>. Es la <I>opción del futuro</I>. Su único inconveniente es que puede no estar disponible en hostings que aún mantienen versiones antiguas de PHP.<BR><BR>
<p id="titulillo">Envío a través de formularios</p>
La interacción <I>cliente–servidor</I> que acabamos de ver, resulta incómoda en su uso y no demasiado estética.<BR><BR>
Hay una segunda opción –la de uso más frecuente– que es la utilización de formularios.<BR><BR> Los formularios no son ele- mentos propios de PHP –actúan del lado del <B>cliente</B>– y su estudio es más propio del ámbito de HTML que de PHP.<BR><BR>
En cualquier caso –por si te fuera necesario– aquí a la derecha tienes un formulario, en el que se comenta la sintaxis de sus elementos más comunes.<BR><BR>
<p id="titulillo">Interpretación de los datos recibidos a través de formularios</p>
Igual que ocurría en el caso anterior, los datos enviados a través de un formulario son recogidos en diferentes tipos de variables predefinidas, pero ahora se añade una nueva particularidad.<BR><BR>
Existe la posibilidad de dos métodos (<B>method</B>) de envío: '<B>GET</B>' y '<B>POST</B>'. En el caso anterior decíamos que se utilizaba el método <B>GET</B>, pero en el caso de los formularios son posibles ambos métodos. Conviene tenerlo en cuenta.<BR><BR>
<span id="negrita1">Método GET</span><BR><BR>
No se diferencia en nada del descrito para el supuesto anterior. Utiliza las mismas variables predefinidas, las utiliza con idéntica sintaxis y se comporta de igual forma en lo relativo a las opciones de  <B>register_globals</B>.<BR><BR>
Los nombres de las variables son en este caso, los incluidos como <B>name</B> en cada una de las etiquetas del formulario.<BR><BR>
Respecto a los valores de cada variable, éstos serían los recogidos del formulario. En los casos de campos tipo: <I>text</I>, <I>password</I> y <I>textarea</I> serían los valores introducidos por el usuario en cada uno de esos campos. 
<BR><BR>En el caso de los campos tipo <I>radio</I> –en el que varias opciones pueden tener el mismo nombre– recogería el valor indicado en la casilla marcada; mientras que si se trata de campos tipo <i>checkbox</i> se transferirían únicamente las variables –y los valores– que corresponden a las casillas marcadas.<BR><BR>
Si se tratara de un campo tipo <I>hidden</I> se transferiría el valor contenido en su etiqueta y, por último, en el caso del <I>select</I> sería transferido como valor de la variable la parte del formulario contenida entre las etiquetas &lt;option>&lt;/option>  de la opción seleccionada.<BR><BR>
<span id="negrita1">Método POST</span><BR><BR>
En el caso de que el método de envío sea POST hay una diferencia a tener en cuenta en cuanto a las variables que recogen la información. Ahora será:<BR><BR>
<span id="negrita1">$HTTP_POST_VARS['</span><span id="cursiva1">n1</span><span id="negrita1">']</span><BR><BR> quien haga la función atribuida en el método anterior a:<BR><BR>
$HTTP_GET_VARS['<i>n1</i>']<BR><BR>
y ocurrirá algo similar con las superglobales, que pasarían a ser del tipo:<BR><BR>
<span id="negrita1">$_POST['</span><span id="cursiva1">n1</span><span id="negrita1">']</span><BR><BR>
en sustitución del $_GET['<i>n1</i>'] usado en el caso del método GET<BR><BR>
Si <B>register_globals</b> está en <b>On</B> el comportamiento de las <I>variables directas</I> es idéntico con ambos métodos.
<p id="titulillo">Identificación del método de envío</p>
PHP recoge en una variable el método utilizado para enviar los datos desde un formulario. Se trata de la variable <b>REQUEST_METHOD</b>.<br><br>
Puede ser invocada como una <i>variable directa</i> (en caso de que <B>register globals</B> esté en <B>on</B>) o a través de una de las <B>variables de servidor</B>.<BR><BR>
En el primer caso la variable se llamaría:<BR><BR> <span id="negrita1">$REQUEST_METHOD</span><BR><BR>
y en el segundo: <br><br> <span id="negrita1">$HTTP_SERVER_VARS[REQUEST_METHOD]</span><br><br> Cuando  PHP permita el uso de variables <b>superglobales</b> se puede utilizar:<BR><BR>
<span id="negrita1">$_SERVER[REQUEST_METHOD]</span><BR><BR>
Una <B>advertencia</B> importante.<BR><BR> Observa que en este caso <B>no se incluyen comillas</B> dentro del corchete como ocurría con todos los nombres de variable anteriores. 
<p id="titulillo">Diferencias ente los métodos GET y POST</p>
Las diferencias entre uno y otro método son las siguientes:<BR><BR>
<span id="negrita1">Método GET</span><BR><BR>
Las particularidades de este método son las siguientes:<BR><BR>

– Al ser enviado el formulario se <I>carga</I> en el navegador la dirección especificada como <b>action</b>, se le añade un <b>?</b> y a continuación se incluyen los datos del formulario. Todos los datos de la petición <B>van a ser visibles</B> desde la <i>barra de direcciones del navegador</i>.<BR><BR>
– Únicamente son aceptados los caracteres ASCII.<BR><BR>
– Tiene una limitación en el tamaño máximo de la cadena que contiene los datos a transferir. En IE esa limitación es de 2.083 caracteres.
<BR><BR>
<span id="negrita1">Método POST</span><BR><BR>
No tiene las limitaciones indicadas para el caso de <b>GET</b> en lo relativo a <b>visibilidad</b> ni en cuanto a aceptación de caracteres no ASCII.<BR><BR>Este método de transferencia de datos es el más habitual cuando se utilizan formularios.<BR><BR>
<p id="titulillo">Tipos de contenidos de los formularios</p>
Respecto a los formularios, vamos a contemplar un último aspecto: la <I>forma de encriptar</I> de los datos en el momento de la transmisión (<B>ENCTYPE</B>).<BR><BR>
Puede especificarse dentro de la  etiqueta<b>&lt;form&gt;</b> utilizando la sintaxis: <B>enctype</B>='<I>valor</I>'.<BR><BR>
En el caso de que no se especifique, tomará el valor <span id="negrita1">application / x-www-form-urlencoded</span>, sea <b>GET</b> o <b>POST</B> el método que se utilice.<BR><BR>
El método <b>POST</b> admite <span id="negrita1">multipart/form-data</span> como una opción alternativa a la anterior. Suele utilizarse cuando se trata de enviar grandes cantidades de datos, formularios en los que se adjuntan ficheros, datos <i>no ASCII</i> o contenidos <i>binarios</i>.<BR><BR>
Las diferencias básicas entre ambos modos de encriptación son las siguientes:<BR><BR>
En el tipo <b>application/x-www-form-urlencoded</b> los nombres de control y los valores se transforman en <I>secuencias de escape</I>, es decir, convirtiendo cada byte en una cadena <B>%HH</B>, donde <B>HH</B> es la <I>notación hexadecimal del valor del byte</I>. <BR><BR>
Además, los <i>espacios</i> son convertidos en <b>signos +</b>, los <I>saltos de línea</I> se representan como <B>%0D%0A</B>, el <I>nombre y el valor se separan con el</I> signo <B>=</B> y los <I>diferentes bloques nombre/valor</I>, se separan con el carácter <B>&</B>.<BR><BR>
En cuanto a la encriptación tipo <b>multipart/form-data</b>, sigue las reglas de las transferencias MIME, que comentaremos más adelante cuando tratemos el tema del correo electrónico.<BR><BR>
<p id="titulillo">La seguridad en los envíos de datos</p>
El tema de la seguridad es una preocupación constante entre los usuarios de Internet.<BR><BR> Cuando utilizamos las técnicas que venimos comentando en esta página –nos referimos siempre al caso de servidores remotos– corremos dos tipos de riesgo de seguridad que no estaría de más tener en cuenta.<BR><BR>
El riesgo de que la información sea interceptada durante el proceso de transmisión desde el cliente hasta el servidor lo compartimos con todos los demás usuarios de la Red, pero hay otro –el <I>riesgo de daños en los contenidos de nuestro espacio de servidor</I>– que es <b>exclusivamente</b> nuestro.<BR><BR>
La <I>transparencia</I> del método GET es tal, que incluso muestra –en el momento del envio– todos los datos en la barra de direcciones del navegador. Eso permite que cualquier usuario pueda conocer a simple vista la ruta completa hasta el script, así como los nombres y valores de las variables.<BR><BR>
Cuando se usa el método POST los formularios son un poco más <i>discretos</i>, pero igual de transparentes. El <i>código</i> de cualquier formulario estará accesible sólo con ir a la opción <i>Ver código fuente</i> y allí estarán de nuevo todos los datos: nombre del script, nombres de las variables, etcétera, con lo que, cualquier usuario y desde cualquier sitio, puede acceder a ese script. <BR><BR>
No haría falta ni usar <I>nuestro</I> formulario. Bastaría guardar una copia del mismo en el ordenador del <i>visitante</i> y después –haciendo ligerísmos retoques– se podría acceder a nuestro script sin necesidad de utilizar el formulario alojado en nuestro servidor.<BR><BR>
Si pensamos que uno de nuestros scripts puede estar diseñado con el fin de modificar algunos de los contenidos de nuestro espacio –<B>borrar</B> datos, por ejemplo– seguramente sería cuestión de empezar a preocuparnos, y mucho más si en nuestro servidor tenemos datos <I>importantes</I>.<BR><BR>
Existen formas de evitar, o al menos reducir, este tipo de riesgos. Restringir a usuarios autorizados el uso de algunos subdirectorios es una de ellas, almacenar datos importantes fuera del directorio root del servidor es otra y el uso de algunas de las variables predefinidas como elementos de protección puede ser una tercera.<BR><BR>
Hacemos este comentario a <I>título meramente informativo</I>. Por el momento nos basta con manejar los formularios, pero queremos que tengas presente la existencia de ese tipo de riesgos. Más adelante, ve- remos la manera de <I>tratar de evitarlos</I>.




<? Centro() ?><span id="titulito">¿Que valor tiene <i>register_globals</i> en tu <i>php.ini</i>?</span><BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Cuando hablábamos de la configuración de PHP, hacíamos alusión a la directiva register_globals y decíamos que tenía dos opciones de configuración: ON y OFF. Decíamos también que según el valor que tuviera esa configuración cambiaría el modo de afrontar diversos <I>asuntos</I>.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Habíamos optado por ponerla como: <B>register_globals=ON</B>, pero  no está de más el comprobarlo.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Busquemos el fichero <b>php.ini</b> que estará en el directorio Windows –salvo que el directorio en que tienes instalado Windows se llame de otra manera– abrámoslo y comprobemos que es cierto que <B>register_globals=ON</B>. Si no fuera así, modificaríamos esa <I>directiva</I> y guardaríamos los cambios.<BR><BR>
<? CuidadoI(); ?>
Antes de hacer una modificación en <b>php.ini</b> ó en <b>httpd.conf</b> <B>desactiva el servidor</B> Apache.<BR>
Cuando hayas acabado con los cambios vuelve a <B>ponerlo en marcha</B> (de lo contrario te aparecerá el mensaje: <i>no se puede encontrar el servidor</i>)  y ya arrancará atendiendo a la nueva configuración. ¡No te olvides nunca de hacerlo así! Te evitarás un montón de sobresaltos.
<? CuidadoF(); ?>
<span id="titulito">Tabla de multiplicar</span>
<? PreI(); ?>
<span id="azul">&lt;?</span>
/* Escribamos una instrucción, que imprima en pantalla
   el valor de una variable ($a), una "x" que hará funciones de aspa 
   en la presentación, otra variable ($b), el signo igual
   y $a*$b que es el producto de ambas variables
   El  simbolo de multiplicar es (*)      */
<span id="azul">print (<span id="rojo">$a</span>." x ".<span id="rojo">$b</span>." = ".<span id="rojo">$a*$b</span>);</span>
# Añadamos una bobadilla, para animar... ;-)
<span id="azul">print ("&lt;br> ¡¡Ya eres mayorcit@.. Deberías saberte la tabla");
?&gt;</span>
<? PreF(); ?>
<? Ejem1L() ?>
ejemplo13.php
<? Ejem1T()  ?>
ejemplo13.php
<? Ejem1C()  ?>
<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Ejecuta este ejemplo y observa lo que aparece. ¿Sólo <b> x =0</b>? ¿y la <i>otra línea</i>? <BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;El resultado es lógico. No hemos asignado valores a las variables <B>$a</B> y <B>$b</B> y por eso no escribió su valor. Sin embargo, a la hora de multiplicar -recuerda que una variable vacía es interpretada como cero a la hora de hacer operaciones– la interpretó como cero y –con muy buen criterio– nos respondió que cero por cero es cero.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Escribamos ahora en la barra de direcciones del navegador la siguiente dirección:
<a href="ejemplo13.php?a=21&b=456" target="_blank">http://localhost/cursoPHP/ejemplo13.php?a=21&b=456</a>, (también puedes pulsar en este enlace) y podremos comprobar que <B>21 x 456 = 9576 </B>.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Hagamos un nuevo <i>experimento</i>. Vayamos a <b>php.ini</b> y cambiemos la configuración. Pongamos <b>register_globals= OFF</b>. ¡No te olvides de apagar el servidor antes de hacer estos cambios!<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Una vez hecho el cambio, pulsemos de nuevo en el enlace, y veremos que esta vez no ha recibido los valores de a y b y nos ha dado cero como resultado.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Lo intentaremos con este nuevo script manteniendo <B>register_globals=OFF</B>.
<? PreI(); ?>
<span id="azul">&lt;?</span>

/* Modifiquemos la instrucción anterior
   y utilicemos las variables predefinidas
   $HTTP_GET_VARS['a'], $HTTP_GET_VARS['b']
   en vez de $a y $b que utilizabamos en el ejemplo anterior */
   
# Pongamos un comentario de advertencia. Recuerda que &lt;br> 
# sirve para insertar un salto de línea en la salida
<span id="azul">print ("Este resultado es el que utiliza &#36;HTTP_GET_VAR&lt;br>");

print (<span id="rojo">$HTTP_GET_VARS['a']</span>." x ".<span id="rojo">$HTTP_GET_VARS['b']</span>." = ".
                                 <span id="rojo">$HTTP_GET_VARS['a']*$HTTP_GET_VARS['b']</span>);</span>

/* Ahora trataremos de comprobar que también podemos 
    utilizar la superglobal $_GET como $_GET['a'] y $_GET['b']
	con iguales resultados que las anteriores */


# Un comentario para identificar el origen del resultado 

<span id="azul">print("&lt;br>El resultado siguiente ha sido generado usando &#36;_GET &lt;br>");

print (<span id="rojo">$_GET['a']</span>." x ".<span id="rojo">$_GET['b']</span>." = ".<span id="rojo">$_GET['a']*$_GET['b']</span>);

?></span>
<? PreF(); ?>

<? Ejem1L() ?>
ejemplo14.php
<? Ejem1T()  ?>
ejemplo14.php
<? Ejem1C()  ?>
<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Escribamos ahora en la barra de direcciones del navegador la siguiente dirección:
<a href="ejemplo14.php?a=21&b=456" target="_blank">http://localhost/cursoPHP/ejemplo14.php?a=21&b=456</a>, (o pulsemos directamente en este enlace) y podremos comprobar que <B>21 x 456</b> <I>aún es igual</I> <b>9576</B>. <BR><BR>
<? CuidadoI(); ?>
Aquí más que nunca conviene reiterar, una vez más, los errores de sintaxis más frecuentes:
<ul  type=square>
<li>Los nombres de variables son distintos si se cambian mayúsculas y minúsculas. Pon mucho cuidado en escribirlos correctamente.
<li>Los nombres de las variables predefinidas, tales como $HTTP_GET_VARS, $_GET, etcétera van en mayúsculas.
<li>No olvides poner punto y coma al final de cada línea de instrucciones.
<li>Presta atención a la apertura/cierre de comillas y mucha más atención aún si se trata de comillas anidadas. En este caso procura usar (") para las exteriores y (') para las interiores.
</ul>
<? CuidadoF(); ?>

<? CuidadoI(); ?>
En modo local puedes establecer las configuraciones de <B>php.ini</B> a tu antojo y, además, estás utilizando una versión –4.3.7– de PHP que permite <B>superglobales</B>. Esta versión –junto con la posibilidad de modificar php.ini– te permite utilizar cualquiera de las opciones de transferencia de variables.<BR> Pero, si pretendes publicar tus páginas utilizando un <B>hosting</B> ajeno debes cerciorarte de cual es su versión de PHP –no todos tienen instaladas versiones superiores a 4.1.0– y conocer la configuración de sus php.ini.<BR>
Ten en cuenta que allí no vas a poder modificar las configuraciones y de no tener en cuenta estos aspectos, puedes verte obligad@ a <B>modificar</B> tu código fuente para adecuarlo a la configuración de tu <I>hosting</I>.
<? CuidadoF(); ?>
<span id="titulito">Un formulario</span>
<span id="azul"><? PreI() ?>
&lt;HTML>
&lt;HEAD>
&lt;/HEAD>
&lt;BODY></span>
&lt;!-- Un formulario debe empezar siempre con una etiqueta de este tipo 
      <b>&lt;form ...></b> en la que será obligatorio indicar con esta sintaxis
	 <B>action='nombre.extension'</B>
	 nombre.extension debe contener el nombre (o la ruta completa
	 en el caso de que estuviera en un directorio o hosting distinto
	 del que alberga el documento que contiene el formulario desde
	 el que se realiza la petición)

	 Es opcional incluir <B>method</B> que puede tener dos valores
	 <B>method='GET'</B> ó <B>method='POST'</B>, por defecto (cuando no se indica)
	 el envio se realizará usando <B>method='GET'</B>
      
	 También es opcional -a los efectos de PHP- incluir <B>name</B>.
	 Ese valor es útil cuando se incluyen scripts del lado del cliente
	 del tipo JavaScript  //--&gt;

<span id="azul">&lt;form name='mi_formulario' action='<span id="rojo">formu1.php</span>' method='<span id="rojo">post</span>'></span>
&lt;!-- Pueden incluirse textos dentro del formulario --&gt;
<span id="azul">Escribe tu nombre:</span>

&lt;!-- Uno de los tipos de campos posibles es el tipo <B>texto</B>
     su sintaxis (hablamos de HTML) requiere la etiqueta
	 <B>&lt;input type='text'&gt;</B> que indica el contenido del texto
	 esa etiqueta debe incluir obligatoriamente un <B>name='nombre'</B>
	 el nombre a usar serán caracteres alfabéticos, sin tildes
	 ni eñes y sin espacios. Salvo excepciones que comentaremos
	 <B>no puede usarse</B> el mismo nombre para dos campos distintos
	 el <B>value=''</B> puede no contener nada entre las comillas
	 tal como ocurre aquí o contener el texto que por defecto queremos
	 que aparezca en ese campo al cargar el formulario.
	 el <B>size=xx</B> es opcional. Su utilidad es la de ajustar el
	 tamaño de la <i>ventana</i> al número de caracteres que se indiquen //--&gt;

<span id="azul">&lt;input type='text' name='<span id="magenta">nombre</span>' value='' size=15>&lt;br>
Escribe tu clave:</span>

&lt;!--  <B>&lt;input type='password'&gt;</B> solo se diferencia del anterior
       en que en el momento de rellenarlo se sustituyen los carecteres
	   visualizados (no el contenido) por asteriscos //--&gt;

<span id="azul">&lt;input type='password' name='<span id="magenta">clave</span>' value=''>&lt;br>
Elige tu color de coche favorito:&lt;br></span>

&lt;!--  Los <B>&lt;input type='radio'&gt;</B> permite optar entre varios
         valores posibles. Habrá que repetirlos tantas veces como
	opciones queramos habilitar.
	Todos los input –correspondientes a la misma opción–
	deben tener el mismo nombre (<B>name</B>)
	<B>value='loquesea'</B> deberá tener un valor
	distinto en cada uno de ellos. Ese valor (loquesea)
	será transferido a través del formulario
	Si queremos que una opción aparezca marcada (por defecto)
	al cargar el formulario, deberemos incluir en su etiqueta
	la palabra <B>checked</B>
	los contenidos de <B>value</B> no se visualizan en el navegador
	por lo que conviene incluir una descripción de los 
	valores después de cerrar la etiqueta de cada input   
	Al enviar el formulario solo se transmite el <B>value</B>
	correspondiente a la opción seleccionada   //--&gt;

<span id="azul">&lt;input type='radio' name='<span id="magenta">color</span>' value='Rojo'>Rojo&lt;/br>
&lt;input type='radio' <span id="rojo"><B>checked</B></span> name='<span id="magenta">color</span>' value='Verde'>Verde&lt;/br>
&lt;input type='radio' name='<span id="magenta">color</span>' value='Azul'>Azul&lt;/br>
Elige los extras:&lt;br></span>

&lt;!--  Cada uno de los <B>&lt;input type='checkbox'&gt;</B>
     requiere un <B>nombre</B> distinto (name) y un valor (value)
	 permite optar entre varios
     Esos valor (loquesea)
	serám transferido a través del formulario
	cuando la casilla de verificación esté marcada 
	Si queremos que una casilla aparezca marcada (por defecto)
	al cargar el formulario, deberemos incluir en su etiqueta
	la palabra <B>checked</B>
	los contenidos de <B>value</B> tampoco aquí
	se visualizan en el navegador
	por lo que conviene incluir una descripción de los 
	valores después de cerrar la etiqueta de cada input   
	Al enviar el formulario solo se transmite los <B>value</B>
	correspondiente a la opcion marcadas   //--&gt;

<span id="azul">&lt;input type='checkbox' name="<span id="magenta">acondicionado</span>" value="Aire">
                                               Aire acondicionado&lt;br>
&lt;input type='checkbox' <span id="rojo"><B>checked</B></span> name="<span id="magenta">tapiceria</span>" value="Tapicieria">
                                              Tapiceria en piel&lt;br>
&lt;input type='checkbox' name="<span id="magenta">llantas</span>" value="aluminio">
                                              Llantas de aluminio&lt;br>
¿Cual es el precio máximo&lt;br>
que estarías dispuesto a pagar?</span>

&lt;!--  La etiqueta <B>&lt;input type='select'&gt;</B>
     requiere un <B>nombre</B> 
     y requiere también una etiqueta de cierre
	 <B>&lt;/select></B>
	 Entre ambas -apertura y cierre-
	 deben incluirse las diferentes opciones
	 entre las de etiquetas
	 <b>&lt;option>valor&lt;option></b> 
	Al enviar el formulario se transmite lo
	contenido después de opción </B>
	en la opción seleccionada 
    si dentro de una etiqueta option 
	escribimos <b>selected</b> será esa
	la que aparezca por defecto al cargarse el formulario//--&gt;

<span id="azul">&lt;select name="<span id="magenta">precio</span>">
&lt;Option>Menos de 6.000 euros&lt;/option>
&lt;Option>6.001 - 8.000 euros&lt;/option>
&lt;Option <span id="rojo"><B>selected</B></span> >8.001 - 10.000 euros&lt;/option>
&lt;Option>10.001 - 12.000 euros&lt;/option>
&lt;Option>12.001 - 14.000 euros&lt;/option>
&lt;Option>Más de 14.000 euros&lt;/option>
&lt;/select><br></span>
&lt;!-- Las áreas de texto deben tener una etiqueta de apertura
      <B>&lt;textarea name='checkbox'&gt;</B>
	  seguida de una etiqueta de cierre <B>&lt;/textarea&gt;</B>
	  Dentro de la etiqueta de apertura puede incluirse
	  rows=xx (indicará el número de filas)
	  cols=yy (indicará el ancho expresado en número de caracteres)
	  y opcionalmente un value='lo que sea...'
	  que puede contener el texto que -por defecto-
	  pretendemos que aparezca en ese espacio
	  en el momento de cargar rl formulario   //--&gt;

<span id="azul">&lt;br> Escribe aquí cualquier otro comentario:&lt;br>
&lt;textarea rows=5 cols=50 name='<span id="magenta">texto</span>'>&lt;/textarea>&lt;br></span>

&lt;!-- El <B>&lt;input type='hidden'&gt;</B>
	   permite insertar en un formulario una valor <I>oculto</I>
	   que no requiere ser cumplimentado por el usuario
	   y que no aparece visible en el documento
	   requiere un <B>name</B> y un <B>value</B> //-->

<span id="azul">&lt;input type="hidden" name='<span id="magenta">oculto</span>' value='Esto iría oculto'>&lt;br></span>

&lt;!-- El <B>&lt;input type='submit'&gt;</B>
	   es el encargado de ejecutar la action
	   incluida en la etiqueta de apertura del formulario
	   que en este caso sería la llamada
	   a la página que se indica en la action
	   El texto que incluyamos en value='enviar...' 
	   será el que se visualice en el propio botón de envio    //--&gt;

<span id="azul">&lt;input type="submit" value="enviar"></span>
&lt;!-- El <B>&lt;input type='reset'&gt;</B>
	   permite borrar todos los contenidos
	   del formulario y reestablecer los valores
	   por defecto de cada campo //--&gt;

<span id="azul">&lt;input type="reset" value="borrar"></span>
&lt;!-- La etiqueta <B>&lt;/form&gt;</B>
	   es la etiqueta de cierre del formulario   //--&gt;
<span id="azul">&lt;/FORM></span>
&lt;/BODY>
&lt;/HTML><? PreF() ?><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;No incluiremos la opción <i>Ver ejemplo</i> hasta que hayamos elaborado los documentos <B>formuxx.php</B> incluidos en la <B>action</B> de este formulario.<BR><BR>
<span id="titulito">Scripts para recoger los datos del formulario anterior</span><BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Insertaremos ahora los diferentes tipos scripts utilizables, especificando las condiciones de utilización de cada uno de ellos.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Los hemos llamado <B>formu1.php</B>, <B>formu2.php</B>, etcétera.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Debajo del código fuente de cada uno de ellos, hemos incluido dos enlaces. En el primero de ellos se utiliza el formulario que vemos aquí arriba modificando únicamente el valor de <B>action</B> para adecuarlo al nombre de cada script.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;En el segundo de los enlaces utilizaremos un formulario en el que, además de la modificaciones anteriores, se utilice <B>GET</B> como método.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;De esta forma, tendrás la oportunidad de comprobar el funcionamiento o no funcionamiento anunciado en cada uno de los supuestos.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Sería buena idea que <i>experimentaras</i> con ellos tanto bajo register_globals=ON como cuando esté en modo OFF.<BR><BR>

&nbsp;&nbsp;&nbsp;&nbsp;Este primero funcionará tanto cuando el método sea POST como cuando sea GET.<BR> Requiere que el <B>php.ini</B> contenga la opción <B>register_globals=ON</B>  

<? PreI() ?>
&lt;?
echo "El method que ha usado fué: ",$REQUEST_METHOD,"&lt;br>";
echo <span id="magenta">$nombre</span>,"&lt;br>";
echo <span id="magenta">$clave</span>,"&lt;br>";
echo <span id="magenta">$color</span>,"&lt;br>";
echo <span id="magenta">$acondicionado</span>,"&lt;br>";
echo <span id="magenta">$tapiceria</span>,"&lt;br>";
echo <span id="magenta">$llantas</span>,"&lt;br>";
echo <span id="magenta">$precio</span>,"&lt;br>";
echo <span id="magenta">$texto</span>,"&lt;br>";
echo <span id="magenta">$oculto</span>,"&lt;br>";
?>
<? PreF(); ?>
<? Ejem1L() ?>
ejemplo15_1.php
<? Ejem1T() ?>
«Con action = POST»
<? Ejem1L2() ?>
ejemplo15a_1.php
<? Ejem1T2() ?>
«Con action = GET»
<? Ejem1C() ?>

<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;Este otro <B>requiere</B> que el método especificado en el formulario de envío sea <B>POST</B>.<BR> &nbsp;&nbsp;&nbsp;&nbsp;El valor de register_globals no afectaría a su funcionalidad.

<? PreI() ?>
&lt;?
echo "El method usado fué: ",<span id="magenta">$HTTP_SERVER_VARS[REQUEST_METHOD]</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_POST_VARS['nombre']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_POST_VARS['clave']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_POST_VARS['color']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_POST_VARS['acondicionado']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_POST_VARS['tapiceria']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_POST_VARS['llantas']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_POST_VARS['precio']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_POST_VARS['texto']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_POST_VARS['oculto']</SPAN>,"&lt;br>";
?>
<? PreF() ?>
<? Ejem1L() ?>
ejemplo15_2.php
<? Ejem1T() ?>
«Con action = POST»
<? Ejem1L2() ?>
ejemplo15a_2.php
<? Ejem1T2() ?>
«Con action = GET»
<? Ejem1C() ?>
<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;Para utilizar eficazmente este script <B>es necesario</B> que el método especificado en el formulario de envío sea <B>GET</B>.<BR>&nbsp;&nbsp;&nbsp;&nbsp; El valor de register_globals no afectaría a su funcionalidad.
<? PreI() ?>
&lt;?
echo "El method  usado fué: ",<span id="magenta">$HTTP_SERVER_VARS[REQUEST_METHOD]</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_GET_VARS['nombre']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_GET_VARS['clave']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_GET_VARS['color']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_GET_VARS['acondicionado']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_GET_VARS['tapiceria']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_GET_VARS['llantas']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_GET_VARS['precio']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_GET_VARS['texto']</SPAN>,"&lt;br>";
echo  <span id="magenta">$HTTP_GET_VARS['oculto']</SPAN>,"&lt;br>";
?>
<? PreF() ?>
<? Ejem1L() ?>
ejemplo15_3.php
<? Ejem1T() ?>
«Con action = POST»
<? Ejem1L2() ?>
ejemplo15a_3.php
<? Ejem1T2() ?>
«Con action = GET»
<? Ejem1C() ?>
<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;Este otro <B>requiere</B> que el método especificado en el formulario de envío sea <B>POST</B> y que la versión de PHP soporte variables <B>superglobales</B>.<BR> &nbsp;&nbsp;&nbsp;&nbsp;El valor de register_globals no afectaría a su funcionalidad.
<? PreI() ?>
&lt;?
echo "El method  usado fué: ",<span id="magenta">$_SERVER[REQUEST_METHOD]</SPAN>,"&lt;br>";
echo  <span id="magenta">$_POST['nombre']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_POST['clave']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_POST['color']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_POST['acondicionado']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_POST['tapiceria']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_POST['llantas']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_POST['precio']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_POST['texto']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_POST['oculto']</SPAN>,"&lt;br>";
?>
<? PreF() ?>
<? Ejem1L() ?>
ejemplo15_4.php
<? Ejem1T() ?>
«Con action = POST»
<? Ejem1L2() ?>
ejemplo15a_4.php
<? Ejem1T2() ?>
«Con action = GET»
<? Ejem1C() ?>
<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;En este supuesto sería necesario que el método especificado en el formulario de envío sea <B>GET</B> y que la versión de PHP instalada en el servidor que lo aloja soporte variables <B>superglobales</B>.<BR> &nbsp;&nbsp;&nbsp;&nbsp;El valor de register_globals no afectaría a su funcionalidad.
<? PreI() ?>
&lt;?
echo "El method que ha usado fué: ",<span id="magenta">$_SERVER[REQUEST_METHOD]</SPAN>,"&lt;br>";
echo  <span id="magenta">$_GET['nombre']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_GET['clave']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_GET['color']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_GET['acondicionado']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_GET['tapiceria']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_GET['llantas']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_GET['precio']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_GET['texto']</SPAN>,"&lt;br>";
echo  <span id="magenta">$_GET['oculto']</SPAN>,"&lt;br>";
?>
<? PreF() ?>
<? Ejem1L() ?>
ejemplo15_5.php
<? Ejem1T() ?>
«Con action = POST»
<? Ejem1L2() ?>
ejemplo15a_5.php
<? Ejem1T2() ?>
«Con action = GET»
<? Ejem1C() ?>
<? ActivI() ?>
8
<? ActivT() ; ?>
Crea dos documentos llamados respectivamente <B>formulario1.php</B> y <B>visor1.php</B>. En el primero de ellos incluye un formulario que permita recoger datos personales y académicos de tus alumnos, utilizando todos los tipos de campos de formulario que conozcas.
Los datos insertados en ese formulario deberán ser visualizados después de su envío –con cualquier configuración de register_globals y con cualquier versión PHP– a través del documento visor1.php. Utiliza los recursos estéticos –fondos, colores, tipografía, etcétera– que estimes oportunos para una correcta presentación
<? ActivF(); ?><BR>
<? ActivI() ?>
9
<? ActivT() ; ?>
Con criterios similares en cuanto a estética y funcionalidad a los del ejercicio anterior, te proponemos que crees dos nuevos documentos con nombres <B>formulario2.php</B> y <B>visor2.php</B>. En este caso el formulario deberá poder recoger el nombre y apellidos de un alumno hipotético al que debemos formularle dos preguntas. La primera de ellas con cuatro posibles respuestas entre las que deba elegir como válida una de ellas. La segunda, también con cuatro respuestas, deberá permitir marcar las respuestas correctas que pueden ser: todas, ninguna, o algunas de ellas.<BR>
El alumno debería poder insertar sus datos personales en el formulario y elegir las respuestas a las preguntas formuladas. Al pulsar en el <i>botón</i> de envío, los datos del alumno y las respuestas elegidas deben visualizarse a través del documento <B>visor2.php</B>.
<? ActivF(); ?><BR>
<? Anterior1() ?>
<? echo $anterior; ?>
<? Anterior2() ?>
<? echo $anterior; ?>
<? Siguiente1() ?>
<? echo $siguiente; ?>
<? Siguiente2() ?>
<? echo $siguiente; ?>
<? Pie() ?>
