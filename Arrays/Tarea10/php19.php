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
<? Ladillo() ?><p id="titulillo">PHP din�mico</p>
Lo que hemos visto hasta el momento, solo nos ha servido para escribir una serie de scripts PHP y ver los resultados de su ejecuci�n, pero a�n no hemos visto de qu�  forma se puede lograr que <B>interact�en</B> el <i>cliente</i> y el <i>servidor</i>.<BR><BR>
Veamos c�mo hacerlo.
<p id="titulillo">Env�o a trav�s del navegador</p>
La forma m�s simple de que un <B>cliente</B> pueda <i>enviar</i> valores a un servidor es incluir esos valores en la propia petici�n, insert�ndolos directamente en la barra de direcciones del navegador.<BR><BR>
<SPAN id="titulillo">Forma de env�o</SpAN><BR><BR>
Deber� insertarse �en la barra de direcciones del navegador� lo siguiente:<BR><BR>
<span id="cursiva1">pagina.php</span><span id="negrita1">?</span><span id="cursiva1">n1</span><span id="negrita1">=</span><span id="cursiva1">v1</span><span id="negrita1">&</span><span id="cursiva1">n2</span><span id="negrita1">=</span><span id="cursiva1">v2</span><BR><BR>
donde<BR><BR>
<span id="cursiva1">pagina.php</span> ser� la direcci�n  de la p�gina que contiene el script que ha de procesar los valores transferidos.<BR><BR>
<span id="negrita1">?</span> es un car�cter obligatorio que indica que detr�s de �l  van a ser insertados nombres de variables y sus valores.<BR><BR>
<span id="cursiva1">n1, n2, etc�tera</span> representan los <i>nombres</i> de las  variables.<BR><BR>
<span id="negrita1">=</span> es el separador de los nombres de las variables y sus valores respectivos.<BR><BR>
<span id="cursiva1">v1, v2,...</span> simbolizan el valor asignado a cada una de las variables.<BR><BR>
<span id="negrita1">&</span> es el s�mbolo que separa los distintos bloques <I>variable = valor</I>.
<BR><BR>
Los <B>nombres</B> de las variables <B>nunca llevan</B> el signo <B>$</B>.<BR><BR>
Los <B>valores</B> de las variables �sean n�meros o cadenas� <B>nunca se escriben entre comillas</b>.<BR><BR>
Se pueden incluir tantos <i>nombre = valor </i> como se desee. La �nica restricci�n es la longitud m�xima permitida por el m�todo <B>GET</B> (el utilizado en este caso) que se sit�a en torno a los 2.000 car�cteres.<BR><BR>
<p id="titulillo">Recepci�n de datos</p>
Cuando es recibida por el <I>servidor</I> la <B>petici�n</B> de un documento con extensi�n <B>.php</B> en la que tras el signo <B>?</B> se incluyen una o varias parejas <I>nombre = valor</I>, los nombres de las variables y sus valores respectivos se incluyen, de forma autom�tica, en  variables predefinidas del tipo:<BR><BR>
<span id="negrita1">$HTTP_GET_VARS['</span><span id="cursiva1">n1</span><span id="negrita1">']</span><BR><BR>
<span id="negrita1">$HTTP_GET_VARS['</span><span id="cursiva1">n2</span><span id="negrita1">']</span><BR><BR>
en las que <i>n1</i>, <i>n2</i>, ... coinciden <B>exactamente</B> con nombres asignados a cada una de las variables en esa transferencia.<BR><BR>
Cada una de esas variables contendr� como valor aquel que hubiera recibido a trav�s de la petici�n.<BR><BR>
Si la <I>versi�n</I> de <B>PHP</B> es <I>superior</I> a la <B>4.1.0</B>, esos mismos valores se incluir�n en  variables superglobales del tipo <B>$_GET</B> de modo que �en el supuesto de que la versi�n lo soporte� los valores de la petici�n <B>tambi�n</B> (esta opci�n no excluye la anterior) estar�an disponibles en: <BR><BR>
<span id="negrita1">$_GET['</span><span id="cursiva1">n1</span><span id="negrita1">']</span><BR><BR>
<span id="negrita1">$_GET['</span><span id="cursiva1">n2</span><span id="negrita1">']</span><BR><BR>
Seg�n el modo en que est� configurado el <B>php.ini</B> podr�a caber una <I>tercera</I> posibilidad de registro de esos valores.<BR><BR>
Si la directiva <I>register_globals</I> �en el fichero <B>php.ini</B>� est� configurada con la opci�n <b>ON</b>, los valores transferidos desde el navegador �adem�s de ser recogidos en las variables  anteriores� son asignados a otras variables del tipo: <span id="negrita1">$n1</span>, <span id="negrita1">$n2</span>, ... cuyos nombres son el resultado de anteponer el s�mbolo <B>$</B> a los nombres de las variables contenidas en la petici�n.<BR><BR>
La elecci�n a la hora de escribir los scripts de uno u otro tipo de variable debe hacerse teniendo en cuenta que:<BR><BR>
� Esta �ltima �sin duda la m�s c�moda� tiene el problema de que <I>s�lo es v�lida</I> cuando  <I>register_globals=on</I> y, adem�s, es la m�s <I>insegura</I> de todas.<BR><BR>
� La superglobal <B>$_GET</B> tiene una sintaxis m�s corta que su alternativa y, adem�s, a�ade como ventaja su condici�n de <B>superglobal</B>, que permite utilizarla en cualquier �mbito sin necesidad de declararla expresamente como <B>global</B>. Es la <I>opci�n del futuro</I>. Su �nico inconveniente es que puede no estar disponible en hostings que a�n mantienen versiones antiguas de PHP.<BR><BR>
<p id="titulillo">Env�o a trav�s de formularios</p>
La interacci�n <I>cliente�servidor</I> que acabamos de ver, resulta inc�moda en su uso y no demasiado est�tica.<BR><BR>
Hay una segunda opci�n �la de uso m�s frecuente� que es la utilizaci�n de formularios.<BR><BR> Los formularios no son ele- mentos propios de PHP �act�an del lado del <B>cliente</B>� y su estudio es m�s propio del �mbito de HTML que de PHP.<BR><BR>
En cualquier caso �por si te fuera necesario� aqu� a la derecha tienes un formulario, en el que se comenta la sintaxis de sus elementos m�s comunes.<BR><BR>
<p id="titulillo">Interpretaci�n de los datos recibidos a trav�s de formularios</p>
Igual que ocurr�a en el caso anterior, los datos enviados a trav�s de un formulario son recogidos en diferentes tipos de variables predefinidas, pero ahora se a�ade una nueva particularidad.<BR><BR>
Existe la posibilidad de dos m�todos (<B>method</B>) de env�o: '<B>GET</B>' y '<B>POST</B>'. En el caso anterior dec�amos que se utilizaba el m�todo <B>GET</B>, pero en el caso de los formularios son posibles ambos m�todos. Conviene tenerlo en cuenta.<BR><BR>
<span id="negrita1">M�todo GET</span><BR><BR>
No se diferencia en nada del descrito para el supuesto anterior. Utiliza las mismas variables predefinidas, las utiliza con id�ntica sintaxis y se comporta de igual forma en lo relativo a las opciones de  <B>register_globals</B>.<BR><BR>
Los nombres de las variables son en este caso, los incluidos como <B>name</B> en cada una de las etiquetas del formulario.<BR><BR>
Respecto a los valores de cada variable, �stos ser�an los recogidos del formulario. En los casos de campos tipo: <I>text</I>, <I>password</I> y <I>textarea</I> ser�an los valores introducidos por el usuario en cada uno de esos campos. 
<BR><BR>En el caso de los campos tipo <I>radio</I> �en el que varias opciones pueden tener el mismo nombre� recoger�a el valor indicado en la casilla marcada; mientras que si se trata de campos tipo <i>checkbox</i> se transferir�an �nicamente las variables �y los valores� que corresponden a las casillas marcadas.<BR><BR>
Si se tratara de un campo tipo <I>hidden</I> se transferir�a el valor contenido en su etiqueta y, por �ltimo, en el caso del <I>select</I> ser�a transferido como valor de la variable la parte del formulario contenida entre las etiquetas &lt;option>&lt;/option>  de la opci�n seleccionada.<BR><BR>
<span id="negrita1">M�todo POST</span><BR><BR>
En el caso de que el m�todo de env�o sea POST hay una diferencia a tener en cuenta en cuanto a las variables que recogen la informaci�n. Ahora ser�:<BR><BR>
<span id="negrita1">$HTTP_POST_VARS['</span><span id="cursiva1">n1</span><span id="negrita1">']</span><BR><BR> quien haga la funci�n atribuida en el m�todo anterior a:<BR><BR>
$HTTP_GET_VARS['<i>n1</i>']<BR><BR>
y ocurrir� algo similar con las superglobales, que pasar�an a ser del tipo:<BR><BR>
<span id="negrita1">$_POST['</span><span id="cursiva1">n1</span><span id="negrita1">']</span><BR><BR>
en sustituci�n del $_GET['<i>n1</i>'] usado en el caso del m�todo GET<BR><BR>
Si <B>register_globals</b> est� en <b>On</B> el comportamiento de las <I>variables directas</I> es id�ntico con ambos m�todos.
<p id="titulillo">Identificaci�n del m�todo de env�o</p>
PHP recoge en una variable el m�todo utilizado para enviar los datos desde un formulario. Se trata de la variable <b>REQUEST_METHOD</b>.<br><br>
Puede ser invocada como una <i>variable directa</i> (en caso de que <B>register globals</B> est� en <B>on</B>) o a trav�s de una de las <B>variables de servidor</B>.<BR><BR>
En el primer caso la variable se llamar�a:<BR><BR> <span id="negrita1">$REQUEST_METHOD</span><BR><BR>
y en el segundo: <br><br> <span id="negrita1">$HTTP_SERVER_VARS[REQUEST_METHOD]</span><br><br> Cuando  PHP permita el uso de variables <b>superglobales</b> se puede utilizar:<BR><BR>
<span id="negrita1">$_SERVER[REQUEST_METHOD]</span><BR><BR>
Una <B>advertencia</B> importante.<BR><BR> Observa que en este caso <B>no se incluyen comillas</B> dentro del corchete como ocurr�a con todos los nombres de variable anteriores. 
<p id="titulillo">Diferencias ente los m�todos GET y POST</p>
Las diferencias entre uno y otro m�todo son las siguientes:<BR><BR>
<span id="negrita1">M�todo GET</span><BR><BR>
Las particularidades de este m�todo son las siguientes:<BR><BR>

� Al ser enviado el formulario se <I>carga</I> en el navegador la direcci�n especificada como <b>action</b>, se le a�ade un <b>?</b> y a continuaci�n se incluyen los datos del formulario. Todos los datos de la petici�n <B>van a ser visibles</B> desde la <i>barra de direcciones del navegador</i>.<BR><BR>
� �nicamente son aceptados los caracteres ASCII.<BR><BR>
� Tiene una limitaci�n en el tama�o m�ximo de la cadena que contiene los datos a transferir. En IE esa limitaci�n es de 2.083 caracteres.
<BR><BR>
<span id="negrita1">M�todo POST</span><BR><BR>
No tiene las limitaciones indicadas para el caso de <b>GET</b> en lo relativo a <b>visibilidad</b> ni en cuanto a aceptaci�n de caracteres no ASCII.<BR><BR>Este m�todo de transferencia de datos es el m�s habitual cuando se utilizan formularios.<BR><BR>
<p id="titulillo">Tipos de contenidos de los formularios</p>
Respecto a los formularios, vamos a contemplar un �ltimo aspecto: la <I>forma de encriptar</I> de los datos en el momento de la transmisi�n (<B>ENCTYPE</B>).<BR><BR>
Puede especificarse dentro de la  etiqueta<b>&lt;form&gt;</b> utilizando la sintaxis: <B>enctype</B>='<I>valor</I>'.<BR><BR>
En el caso de que no se especifique, tomar� el valor <span id="negrita1">application / x-www-form-urlencoded</span>, sea <b>GET</b> o <b>POST</B> el m�todo que se utilice.<BR><BR>
El m�todo <b>POST</b> admite <span id="negrita1">multipart/form-data</span> como una opci�n alternativa a la anterior. Suele utilizarse cuando se trata de enviar grandes cantidades de datos, formularios en los que se adjuntan ficheros, datos <i>no ASCII</i> o contenidos <i>binarios</i>.<BR><BR>
Las diferencias b�sicas entre ambos modos de encriptaci�n son las siguientes:<BR><BR>
En el tipo <b>application/x-www-form-urlencoded</b> los nombres de control y los valores se transforman en <I>secuencias de escape</I>, es decir, convirtiendo cada byte en una cadena <B>%HH</B>, donde <B>HH</B> es la <I>notaci�n hexadecimal del valor del byte</I>. <BR><BR>
Adem�s, los <i>espacios</i> son convertidos en <b>signos +</b>, los <I>saltos de l�nea</I> se representan como <B>%0D%0A</B>, el <I>nombre y el valor se separan con el</I> signo <B>=</B> y los <I>diferentes bloques nombre/valor</I>, se separan con el car�cter <B>&</B>.<BR><BR>
En cuanto a la encriptaci�n tipo <b>multipart/form-data</b>, sigue las reglas de las transferencias MIME, que comentaremos m�s adelante cuando tratemos el tema del correo electr�nico.<BR><BR>
<p id="titulillo">La seguridad en los env�os de datos</p>
El tema de la seguridad es una preocupaci�n constante entre los usuarios de Internet.<BR><BR> Cuando utilizamos las t�cnicas que venimos comentando en esta p�gina �nos referimos siempre al caso de servidores remotos� corremos dos tipos de riesgo de seguridad que no estar�a de m�s tener en cuenta.<BR><BR>
El riesgo de que la informaci�n sea interceptada durante el proceso de transmisi�n desde el cliente hasta el servidor lo compartimos con todos los dem�s usuarios de la Red, pero hay otro �el <I>riesgo de da�os en los contenidos de nuestro espacio de servidor</I>� que es <b>exclusivamente</b> nuestro.<BR><BR>
La <I>transparencia</I> del m�todo GET es tal, que incluso muestra �en el momento del envio� todos los datos en la barra de direcciones del navegador. Eso permite que cualquier usuario pueda conocer a simple vista la ruta completa hasta el script, as� como los nombres y valores de las variables.<BR><BR>
Cuando se usa el m�todo POST los formularios son un poco m�s <i>discretos</i>, pero igual de transparentes. El <i>c�digo</i> de cualquier formulario estar� accesible s�lo con ir a la opci�n <i>Ver c�digo fuente</i> y all� estar�n de nuevo todos los datos: nombre del script, nombres de las variables, etc�tera, con lo que, cualquier usuario y desde cualquier sitio, puede acceder a ese script. <BR><BR>
No har�a falta ni usar <I>nuestro</I> formulario. Bastar�a guardar una copia del mismo en el ordenador del <i>visitante</i> y despu�s �haciendo liger�smos retoques� se podr�a acceder a nuestro script sin necesidad de utilizar el formulario alojado en nuestro servidor.<BR><BR>
Si pensamos que uno de nuestros scripts puede estar dise�ado con el fin de modificar algunos de los contenidos de nuestro espacio �<B>borrar</B> datos, por ejemplo� seguramente ser�a cuesti�n de empezar a preocuparnos, y mucho m�s si en nuestro servidor tenemos datos <I>importantes</I>.<BR><BR>
Existen formas de evitar, o al menos reducir, este tipo de riesgos. Restringir a usuarios autorizados el uso de algunos subdirectorios es una de ellas, almacenar datos importantes fuera del directorio root del servidor es otra y el uso de algunas de las variables predefinidas como elementos de protecci�n puede ser una tercera.<BR><BR>
Hacemos este comentario a <I>t�tulo meramente informativo</I>. Por el momento nos basta con manejar los formularios, pero queremos que tengas presente la existencia de ese tipo de riesgos. M�s adelante, ve- remos la manera de <I>tratar de evitarlos</I>.




<? Centro() ?><span id="titulito">�Que valor tiene <i>register_globals</i> en tu <i>php.ini</i>?</span><BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Cuando habl�bamos de la configuraci�n de PHP, hac�amos alusi�n a la directiva register_globals y dec�amos que ten�a dos opciones de configuraci�n: ON y OFF. Dec�amos tambi�n que seg�n el valor que tuviera esa configuraci�n cambiar�a el modo de afrontar diversos <I>asuntos</I>.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Hab�amos optado por ponerla como: <B>register_globals=ON</B>, pero  no est� de m�s el comprobarlo.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Busquemos el fichero <b>php.ini</b> que estar� en el directorio Windows �salvo que el directorio en que tienes instalado Windows se llame de otra manera� abr�moslo y comprobemos que es cierto que <B>register_globals=ON</B>. Si no fuera as�, modificar�amos esa <I>directiva</I> y guardar�amos los cambios.<BR><BR>
<? CuidadoI(); ?>
Antes de hacer una modificaci�n en <b>php.ini</b> � en <b>httpd.conf</b> <B>desactiva el servidor</B> Apache.<BR>
Cuando hayas acabado con los cambios vuelve a <B>ponerlo en marcha</B> (de lo contrario te aparecer� el mensaje: <i>no se puede encontrar el servidor</i>)  y ya arrancar� atendiendo a la nueva configuraci�n. �No te olvides nunca de hacerlo as�! Te evitar�s un mont�n de sobresaltos.
<? CuidadoF(); ?>
<span id="titulito">Tabla de multiplicar</span>
<? PreI(); ?>
<span id="azul">&lt;?</span>
/* Escribamos una instrucci�n, que imprima en pantalla
   el valor de una variable ($a), una "x" que har� funciones de aspa 
   en la presentaci�n, otra variable ($b), el signo igual
   y $a*$b que es el producto de ambas variables
   El  simbolo de multiplicar es (*)      */
<span id="azul">print (<span id="rojo">$a</span>." x ".<span id="rojo">$b</span>." = ".<span id="rojo">$a*$b</span>);</span>
# A�adamos una bobadilla, para animar... ;-)
<span id="azul">print ("&lt;br> ��Ya eres mayorcit@.. Deber�as saberte la tabla");
?&gt;</span>
<? PreF(); ?>
<? Ejem1L() ?>
ejemplo13.php
<? Ejem1T()  ?>
ejemplo13.php
<? Ejem1C()  ?>
<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Ejecuta este ejemplo y observa lo que aparece. �S�lo <b> x =0</b>? �y la <i>otra l�nea</i>? <BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;El resultado es l�gico. No hemos asignado valores a las variables <B>$a</B> y <B>$b</B> y por eso no escribi� su valor. Sin embargo, a la hora de multiplicar -recuerda que una variable vac�a es interpretada como cero a la hora de hacer operaciones� la interpret� como cero y �con muy buen criterio� nos respondi� que cero por cero es cero.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Escribamos ahora en la barra de direcciones del navegador la siguiente direcci�n:
<a href="ejemplo13.php?a=21&b=456" target="_blank">http://localhost/cursoPHP/ejemplo13.php?a=21&b=456</a>, (tambi�n puedes pulsar en este enlace) y podremos comprobar que <B>21 x 456 = 9576 </B>.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Hagamos un nuevo <i>experimento</i>. Vayamos a <b>php.ini</b> y cambiemos la configuraci�n. Pongamos <b>register_globals= OFF</b>. �No te olvides de apagar el servidor antes de hacer estos cambios!<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Una vez hecho el cambio, pulsemos de nuevo en el enlace, y veremos que esta vez no ha recibido los valores de a y b y nos ha dado cero como resultado.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Lo intentaremos con este nuevo script manteniendo <B>register_globals=OFF</B>.
<? PreI(); ?>
<span id="azul">&lt;?</span>

/* Modifiquemos la instrucci�n anterior
   y utilicemos las variables predefinidas
   $HTTP_GET_VARS['a'], $HTTP_GET_VARS['b']
   en vez de $a y $b que utilizabamos en el ejemplo anterior */
   
# Pongamos un comentario de advertencia. Recuerda que &lt;br> 
# sirve para insertar un salto de l�nea en la salida
<span id="azul">print ("Este resultado es el que utiliza &#36;HTTP_GET_VAR&lt;br>");

print (<span id="rojo">$HTTP_GET_VARS['a']</span>." x ".<span id="rojo">$HTTP_GET_VARS['b']</span>." = ".
                                 <span id="rojo">$HTTP_GET_VARS['a']*$HTTP_GET_VARS['b']</span>);</span>

/* Ahora trataremos de comprobar que tambi�n podemos 
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
&nbsp;&nbsp;&nbsp;&nbsp;Escribamos ahora en la barra de direcciones del navegador la siguiente direcci�n:
<a href="ejemplo14.php?a=21&b=456" target="_blank">http://localhost/cursoPHP/ejemplo14.php?a=21&b=456</a>, (o pulsemos directamente en este enlace) y podremos comprobar que <B>21 x 456</b> <I>a�n es igual</I> <b>9576</B>. <BR><BR>
<? CuidadoI(); ?>
Aqu� m�s que nunca conviene reiterar, una vez m�s, los errores de sintaxis m�s frecuentes:
<ul  type=square>
<li>Los nombres de variables son distintos si se cambian may�sculas y min�sculas. Pon mucho cuidado en escribirlos correctamente.
<li>Los nombres de las variables predefinidas, tales como $HTTP_GET_VARS, $_GET, etc�tera van en may�sculas.
<li>No olvides poner punto y coma al final de cada l�nea de instrucciones.
<li>Presta atenci�n a la apertura/cierre de comillas y mucha m�s atenci�n a�n si se trata de comillas anidadas. En este caso procura usar (") para las exteriores y (') para las interiores.
</ul>
<? CuidadoF(); ?>

<? CuidadoI(); ?>
En modo local puedes establecer las configuraciones de <B>php.ini</B> a tu antojo y, adem�s, est�s utilizando una versi�n �4.3.7� de PHP que permite <B>superglobales</B>. Esta versi�n �junto con la posibilidad de modificar php.ini� te permite utilizar cualquiera de las opciones de transferencia de variables.<BR> Pero, si pretendes publicar tus p�ginas utilizando un <B>hosting</B> ajeno debes cerciorarte de cual es su versi�n de PHP �no todos tienen instaladas versiones superiores a 4.1.0� y conocer la configuraci�n de sus php.ini.<BR>
Ten en cuenta que all� no vas a poder modificar las configuraciones y de no tener en cuenta estos aspectos, puedes verte obligad@ a <B>modificar</B> tu c�digo fuente para adecuarlo a la configuraci�n de tu <I>hosting</I>.
<? CuidadoF(); ?>
<span id="titulito">Un formulario</span>
<span id="azul"><? PreI() ?>
&lt;HTML>
&lt;HEAD>
&lt;/HEAD>
&lt;BODY></span>
&lt;!-- Un formulario debe empezar siempre con una etiqueta de este tipo 
      <b>&lt;form ...></b> en la que ser� obligatorio indicar con esta sintaxis
	 <B>action='nombre.extension'</B>
	 nombre.extension debe contener el nombre (o la ruta completa
	 en el caso de que estuviera en un directorio o hosting distinto
	 del que alberga el documento que contiene el formulario desde
	 el que se realiza la petici�n)

	 Es opcional incluir <B>method</B> que puede tener dos valores
	 <B>method='GET'</B> � <B>method='POST'</B>, por defecto (cuando no se indica)
	 el envio se realizar� usando <B>method='GET'</B>
      
	 Tambi�n es opcional -a los efectos de PHP- incluir <B>name</B>.
	 Ese valor es �til cuando se incluyen scripts del lado del cliente
	 del tipo JavaScript  //--&gt;

<span id="azul">&lt;form name='mi_formulario' action='<span id="rojo">formu1.php</span>' method='<span id="rojo">post</span>'></span>
&lt;!-- Pueden incluirse textos dentro del formulario --&gt;
<span id="azul">Escribe tu nombre:</span>

&lt;!-- Uno de los tipos de campos posibles es el tipo <B>texto</B>
     su sintaxis (hablamos de HTML) requiere la etiqueta
	 <B>&lt;input type='text'&gt;</B> que indica el contenido del texto
	 esa etiqueta debe incluir obligatoriamente un <B>name='nombre'</B>
	 el nombre a usar ser�n caracteres alfab�ticos, sin tildes
	 ni e�es y sin espacios. Salvo excepciones que comentaremos
	 <B>no puede usarse</B> el mismo nombre para dos campos distintos
	 el <B>value=''</B> puede no contener nada entre las comillas
	 tal como ocurre aqu� o contener el texto que por defecto queremos
	 que aparezca en ese campo al cargar el formulario.
	 el <B>size=xx</B> es opcional. Su utilidad es la de ajustar el
	 tama�o de la <i>ventana</i> al n�mero de caracteres que se indiquen //--&gt;

<span id="azul">&lt;input type='text' name='<span id="magenta">nombre</span>' value='' size=15>&lt;br>
Escribe tu clave:</span>

&lt;!--  <B>&lt;input type='password'&gt;</B> solo se diferencia del anterior
       en que en el momento de rellenarlo se sustituyen los carecteres
	   visualizados (no el contenido) por asteriscos //--&gt;

<span id="azul">&lt;input type='password' name='<span id="magenta">clave</span>' value=''>&lt;br>
Elige tu color de coche favorito:&lt;br></span>

&lt;!--  Los <B>&lt;input type='radio'&gt;</B> permite optar entre varios
         valores posibles. Habr� que repetirlos tantas veces como
	opciones queramos habilitar.
	Todos los input �correspondientes a la misma opci�n�
	deben tener el mismo nombre (<B>name</B>)
	<B>value='loquesea'</B> deber� tener un valor
	distinto en cada uno de ellos. Ese valor (loquesea)
	ser� transferido a trav�s del formulario
	Si queremos que una opci�n aparezca marcada (por defecto)
	al cargar el formulario, deberemos incluir en su etiqueta
	la palabra <B>checked</B>
	los contenidos de <B>value</B> no se visualizan en el navegador
	por lo que conviene incluir una descripci�n de los 
	valores despu�s de cerrar la etiqueta de cada input   
	Al enviar el formulario solo se transmite el <B>value</B>
	correspondiente a la opci�n seleccionada   //--&gt;

<span id="azul">&lt;input type='radio' name='<span id="magenta">color</span>' value='Rojo'>Rojo&lt;/br>
&lt;input type='radio' <span id="rojo"><B>checked</B></span> name='<span id="magenta">color</span>' value='Verde'>Verde&lt;/br>
&lt;input type='radio' name='<span id="magenta">color</span>' value='Azul'>Azul&lt;/br>
Elige los extras:&lt;br></span>

&lt;!--  Cada uno de los <B>&lt;input type='checkbox'&gt;</B>
     requiere un <B>nombre</B> distinto (name) y un valor (value)
	 permite optar entre varios
     Esos valor (loquesea)
	ser�m transferido a trav�s del formulario
	cuando la casilla de verificaci�n est� marcada 
	Si queremos que una casilla aparezca marcada (por defecto)
	al cargar el formulario, deberemos incluir en su etiqueta
	la palabra <B>checked</B>
	los contenidos de <B>value</B> tampoco aqu�
	se visualizan en el navegador
	por lo que conviene incluir una descripci�n de los 
	valores despu�s de cerrar la etiqueta de cada input   
	Al enviar el formulario solo se transmite los <B>value</B>
	correspondiente a la opcion marcadas   //--&gt;

<span id="azul">&lt;input type='checkbox' name="<span id="magenta">acondicionado</span>" value="Aire">
                                               Aire acondicionado&lt;br>
&lt;input type='checkbox' <span id="rojo"><B>checked</B></span> name="<span id="magenta">tapiceria</span>" value="Tapicieria">
                                              Tapiceria en piel&lt;br>
&lt;input type='checkbox' name="<span id="magenta">llantas</span>" value="aluminio">
                                              Llantas de aluminio&lt;br>
�Cual es el precio m�ximo&lt;br>
que estar�as dispuesto a pagar?</span>

&lt;!--  La etiqueta <B>&lt;input type='select'&gt;</B>
     requiere un <B>nombre</B> 
     y requiere tambi�n una etiqueta de cierre
	 <B>&lt;/select></B>
	 Entre ambas -apertura y cierre-
	 deben incluirse las diferentes opciones
	 entre las de etiquetas
	 <b>&lt;option>valor&lt;option></b> 
	Al enviar el formulario se transmite lo
	contenido despu�s de opci�n </B>
	en la opci�n seleccionada 
    si dentro de una etiqueta option 
	escribimos <b>selected</b> ser� esa
	la que aparezca por defecto al cargarse el formulario//--&gt;

<span id="azul">&lt;select name="<span id="magenta">precio</span>">
&lt;Option>Menos de 6.000 euros&lt;/option>
&lt;Option>6.001 - 8.000 euros&lt;/option>
&lt;Option <span id="rojo"><B>selected</B></span> >8.001 - 10.000 euros&lt;/option>
&lt;Option>10.001 - 12.000 euros&lt;/option>
&lt;Option>12.001 - 14.000 euros&lt;/option>
&lt;Option>M�s de 14.000 euros&lt;/option>
&lt;/select><br></span>
&lt;!-- Las �reas de texto deben tener una etiqueta de apertura
      <B>&lt;textarea name='checkbox'&gt;</B>
	  seguida de una etiqueta de cierre <B>&lt;/textarea&gt;</B>
	  Dentro de la etiqueta de apertura puede incluirse
	  rows=xx (indicar� el n�mero de filas)
	  cols=yy (indicar� el ancho expresado en n�mero de caracteres)
	  y opcionalmente un value='lo que sea...'
	  que puede contener el texto que -por defecto-
	  pretendemos que aparezca en ese espacio
	  en el momento de cargar rl formulario   //--&gt;

<span id="azul">&lt;br> Escribe aqu� cualquier otro comentario:&lt;br>
&lt;textarea rows=5 cols=50 name='<span id="magenta">texto</span>'>&lt;/textarea>&lt;br></span>

&lt;!-- El <B>&lt;input type='hidden'&gt;</B>
	   permite insertar en un formulario una valor <I>oculto</I>
	   que no requiere ser cumplimentado por el usuario
	   y que no aparece visible en el documento
	   requiere un <B>name</B> y un <B>value</B> //-->

<span id="azul">&lt;input type="hidden" name='<span id="magenta">oculto</span>' value='Esto ir�a oculto'>&lt;br></span>

&lt;!-- El <B>&lt;input type='submit'&gt;</B>
	   es el encargado de ejecutar la action
	   incluida en la etiqueta de apertura del formulario
	   que en este caso ser�a la llamada
	   a la p�gina que se indica en la action
	   El texto que incluyamos en value='enviar...' 
	   ser� el que se visualice en el propio bot�n de envio    //--&gt;

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
&nbsp;&nbsp;&nbsp;&nbsp;No incluiremos la opci�n <i>Ver ejemplo</i> hasta que hayamos elaborado los documentos <B>formuxx.php</B> incluidos en la <B>action</B> de este formulario.<BR><BR>
<span id="titulito">Scripts para recoger los datos del formulario anterior</span><BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Insertaremos ahora los diferentes tipos scripts utilizables, especificando las condiciones de utilizaci�n de cada uno de ellos.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Los hemos llamado <B>formu1.php</B>, <B>formu2.php</B>, etc�tera.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Debajo del c�digo fuente de cada uno de ellos, hemos incluido dos enlaces. En el primero de ellos se utiliza el formulario que vemos aqu� arriba modificando �nicamente el valor de <B>action</B> para adecuarlo al nombre de cada script.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;En el segundo de los enlaces utilizaremos un formulario en el que, adem�s de la modificaciones anteriores, se utilice <B>GET</B> como m�todo.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;De esta forma, tendr�s la oportunidad de comprobar el funcionamiento o no funcionamiento anunciado en cada uno de los supuestos.<BR><BR>
&nbsp;&nbsp;&nbsp;&nbsp;Ser�a buena idea que <i>experimentaras</i> con ellos tanto bajo register_globals=ON como cuando est� en modo OFF.<BR><BR>

&nbsp;&nbsp;&nbsp;&nbsp;Este primero funcionar� tanto cuando el m�todo sea POST como cuando sea GET.<BR> Requiere que el <B>php.ini</B> contenga la opci�n <B>register_globals=ON</B>  

<? PreI() ?>
&lt;?
echo "El method que ha usado fu�: ",$REQUEST_METHOD,"&lt;br>";
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
�Con action = POST�
<? Ejem1L2() ?>
ejemplo15a_1.php
<? Ejem1T2() ?>
�Con action = GET�
<? Ejem1C() ?>

<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;Este otro <B>requiere</B> que el m�todo especificado en el formulario de env�o sea <B>POST</B>.<BR> &nbsp;&nbsp;&nbsp;&nbsp;El valor de register_globals no afectar�a a su funcionalidad.

<? PreI() ?>
&lt;?
echo "El method usado fu�: ",<span id="magenta">$HTTP_SERVER_VARS[REQUEST_METHOD]</SPAN>,"&lt;br>";
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
�Con action = POST�
<? Ejem1L2() ?>
ejemplo15a_2.php
<? Ejem1T2() ?>
�Con action = GET�
<? Ejem1C() ?>
<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;Para utilizar eficazmente este script <B>es necesario</B> que el m�todo especificado en el formulario de env�o sea <B>GET</B>.<BR>&nbsp;&nbsp;&nbsp;&nbsp; El valor de register_globals no afectar�a a su funcionalidad.
<? PreI() ?>
&lt;?
echo "El method  usado fu�: ",<span id="magenta">$HTTP_SERVER_VARS[REQUEST_METHOD]</SPAN>,"&lt;br>";
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
�Con action = POST�
<? Ejem1L2() ?>
ejemplo15a_3.php
<? Ejem1T2() ?>
�Con action = GET�
<? Ejem1C() ?>
<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;Este otro <B>requiere</B> que el m�todo especificado en el formulario de env�o sea <B>POST</B> y que la versi�n de PHP soporte variables <B>superglobales</B>.<BR> &nbsp;&nbsp;&nbsp;&nbsp;El valor de register_globals no afectar�a a su funcionalidad.
<? PreI() ?>
&lt;?
echo "El method  usado fu�: ",<span id="magenta">$_SERVER[REQUEST_METHOD]</SPAN>,"&lt;br>";
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
�Con action = POST�
<? Ejem1L2() ?>
ejemplo15a_4.php
<? Ejem1T2() ?>
�Con action = GET�
<? Ejem1C() ?>
<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;En este supuesto ser�a necesario que el m�todo especificado en el formulario de env�o sea <B>GET</B> y que la versi�n de PHP instalada en el servidor que lo aloja soporte variables <B>superglobales</B>.<BR> &nbsp;&nbsp;&nbsp;&nbsp;El valor de register_globals no afectar�a a su funcionalidad.
<? PreI() ?>
&lt;?
echo "El method que ha usado fu�: ",<span id="magenta">$_SERVER[REQUEST_METHOD]</SPAN>,"&lt;br>";
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
�Con action = POST�
<? Ejem1L2() ?>
ejemplo15a_5.php
<? Ejem1T2() ?>
�Con action = GET�
<? Ejem1C() ?>
<? ActivI() ?>
8
<? ActivT() ; ?>
Crea dos documentos llamados respectivamente <B>formulario1.php</B> y <B>visor1.php</B>. En el primero de ellos incluye un formulario que permita recoger datos personales y acad�micos de tus alumnos, utilizando todos los tipos de campos de formulario que conozcas.
Los datos insertados en ese formulario deber�n ser visualizados despu�s de su env�o �con cualquier configuraci�n de register_globals y con cualquier versi�n PHP� a trav�s del documento visor1.php. Utiliza los recursos est�ticos �fondos, colores, tipograf�a, etc�tera� que estimes oportunos para una correcta presentaci�n
<? ActivF(); ?><BR>
<? ActivI() ?>
9
<? ActivT() ; ?>
Con criterios similares en cuanto a est�tica y funcionalidad a los del ejercicio anterior, te proponemos que crees dos nuevos documentos con nombres <B>formulario2.php</B> y <B>visor2.php</B>. En este caso el formulario deber� poder recoger el nombre y apellidos de un alumno hipot�tico al que debemos formularle dos preguntas. La primera de ellas con cuatro posibles respuestas entre las que deba elegir como v�lida una de ellas. La segunda, tambi�n con cuatro respuestas, deber� permitir marcar las respuestas correctas que pueden ser: todas, ninguna, o algunas de ellas.<BR>
El alumno deber�a poder insertar sus datos personales en el formulario y elegir las respuestas a las preguntas formuladas. Al pulsar en el <i>bot�n</i> de env�o, los datos del alumno y las respuestas elegidas deben visualizarse a trav�s del documento <B>visor2.php</B>.
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
