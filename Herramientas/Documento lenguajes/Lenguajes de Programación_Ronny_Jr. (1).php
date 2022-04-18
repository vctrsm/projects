<?php 
session_name("loginUsuario"); session_start();
if($_SESSION['autentificado'] != 'SI'){
  session_destroy();
  header('Location: http://localhost:809/Proyectos/Formulario%20de%20inicio%20de%20sesion.php');
}
?>
<!DOCTYPE html>

<html>
 <head>
  <title>Mi Primera Web con CSS</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="Estilos.css">
</head>

<body>
  <div class="Marco">
  <div class="agrupar">
    <div class="header">
      <h1 name="inicio">Lenguajes de Programación</h1><a name="inicio"></a>
  </div>
    <div class="Nav">
  <a href="#inicio">Inicio</a> 
  <a href="#introduccion">Introducción</a>
  <a href="#menu">Menú</a>
  <a href="#mas">Más Informacíon</a>
  <a href="#fin">Fin</a>
  </div>
  <div class="contenido">
    <a id="image"><img src="Design.jpg" title="Lenguajes de programación"></a>
  
    <div class="SeccionI">
    <a name="introduccion"></a>
    <p><h3 id="Subtitulo">¿Qué son los Lenguajes de Programación?</h3></p>
    
    <p>Es un lenguaje formal que, mediante una serie de instrucciones, le permite a un programador escribir un conjunto de órdenes, acciones consecutivas, datos y algoritmos para, de esa forma, crear programas que controlen el comportamiento físico y lógico de una máquina.
    Mediante este lenguaje se comunican el programador y la máquina, permitiendo especificar, de forma precisa, aspectos como:</p>
    
    
     <p>Cuáles datos debe operar un software específico
     Cómo deben ser almacenados o transmitidos esos datos
     Las acciones que debe tomar el software dependiendo de las circunstancias variables</p>
    </div>
    <a name="menu"></a>
    <p><h3 id="Subtitulo">Lenguajes de Programacion mas usados para la creación de Paginas Web</h3></p>
   
      
    
 
    
  <div class="Menu">
    <a href="#javascript">Javascript</a>
    <a href="#python">Python</a>
    <a href="#php">PHP</a>
    <a href="#ruby">Ruby</a>
    <a href="#c">C#</a>
    <a href="#cc">C++</a>
    <a href="#java">Java</a>
    <a href="#perl">Perl</a>
  </div>
  
  <div class="Seccion1">
  <h3 id="Subtitulo"><a name="javascript" title="Más información" 
    style="color: white; text-decoration: none; background-color: none;" 
    href="https://developer.mozilla.org/es/docs/Learn/Getting_started_with_the_web/JavaScript_basics#:~:text=JavaScript%20es%20el%20lenguaje%20de,animaci%C3%B3n%2C%20y%20mucho%20m%C3%A1s)." 
    target="blank" style="color: white;">Javascript</a></h3><a name="javascript" title="Más información" 
    style="text-decoration: none;" href="https://developer.mozilla.org/es/docs/Learn/Getting_started_with_the_web/JavaScript_basics#:~:text=JavaScript%20es%20el%20lenguaje%20de,animaci%C3%B3n%2C%20y%20mucho%20m%C3%A1s)." 
    target="blank"><div class="javascript"></div></a>
  
  <p>El lenguaje de scripts dinámico orientado a objetos no guarda relación con Java a pesar de su nombre, aunque ambos comparten el hecho de estar escritos en C. Netscape desarrolló JavaScript por primera vez en 1995 con el nombre de LiveScript y el objetivo de extender HTML y CSS para que los programadores pudieran evaluar las interacciones de los usuarios y presentar el contenido de forma dinámica. Actualmente, JavaScript no se utiliza exclusivamente en navegadores web, sino también en microcontroladores y en servidores. El nombre JavaScript se eligió en base a la popularidad de Java, lenguaje al que se quería complementar. Fue todo un éxito: actualmente, las páginas web más conocidas utilizan, casi sin excepción, JavaScript como lenguaje de programación del lado del cliente. Además, existen muchos marcos y bibliotecas para JavaScript.</blockquote</p>
  
  <p>Este lenguaje de programación web presenta una escritura dinámica y no tiene clases. Por ello, los programadores pueden elegir entre programación orientada a objetos, de procedimiento o funcional, lo que aporta versatilidad a este lenguaje de programación. Esto se evidencia especialmente en los navegadores web: podrás, entre otras cosas, manipular dinámicamente el contenido de una página web, validar un formulario antes de enviarlo al servidor, activar cuadros de diálogo e integrar los scripts de carga y descarga. Además, JavaScript se ha convertido en una herramienta indispensable para el marketing online, porque muchos anuncios se han programado con este lenguaje. Al tener capacidad de lectura y escritura de cookies, este lenguaje permite implementar modernas estrategias de marketing como el targeting. En resumen: JavaScript ha ayudado a dar forma a internet, tal y como la conocemos hoy en día, siendo una parte integral de nuestra actual experiencia web.</p>
  </div>
  
  <div class="Seccion2">
  <a name="python" title="Más información" style="text-decoration: none;" href="https://www.becas-santander.com/es/blog/python-que-es.html#:~:text=Python%20es%20un%20lenguaje%20de,otros%20lenguajes%20como%20Java%20o%20.&text=Adem%C3%A1s%2C%20se%20trata%20de%20un,permite%20desarrollar%20software%20sin%20l%C3%ADmites." target="blank">
  <p><h3 id="Subtitulo">Python</h3><div class="python"></div></a></p>
  
  
  <p>Python es un lenguaje de <em class="negrita">programación web</em> de alto nivel basado en un código compacto, pero con una sintaxis fácil de entender. Python es también fácil de escribir porque, por ejemplo, los bloques no están separados con caracteres especiales, sino mediante sangrías. Y esta es precisamente la razón por la que este lenguaje es sencillo de aprender y de utilizar. Según cuáles sean tus necesidades, podrás utilizarlo para implementar una programación orientada a objetos, a aspectos o funcional. Además, Python es dinámico y se utiliza frecuentemente como lenguaje de scripting. El proyecto Python está impulsado por una comunidad activa que lo mantiene actualizado y conforme a los estándares de la industria a través de la fundación sin ánimo de lucro Python Software Foundation. Este lenguaje está disponible de forma gratuita y puede utilizarse en la mayoría de los sistemas operativos más conocidos.</p>
  
  <p>Muchos de los servicios web más conocidos, como YouTube y otros proyectos del grupo Google, dependen parcialmente de Python. La industria de los videojuegos también ha descubierto y utiliza este lenguaje de programación. Lo mismo ocurre con los proyectos científicos, ámbito en el que Python goza de gran popularidad, principalmente, porque permite integrar fácilmente la mayoría de las bases de datos científicas y es eficiente en la resolución de tareas de recopilación de datos empíricos. Por estas razones, Python se considera un lenguaje de programación importante en estos campos, especialmente entre los principiantes. Para sus críticos, la velocidad de ejecución es relativamente baja y sus métodos tienen una definición un tanto engorrosa.</p>
  </div>
  
  <div class="Seccion3">
  <a name="php" title="Más información" href="https://rockcontent.com/es/blog/php/#:~:text=PHP%20es%20un%20lenguaje%20de%20programaci%C3%B3n%20destinado%20a%20desarrollar%20aplicaciones,que%20es%20de%20c%C3%B3digo%20abierto." style="text-decoration: none;" target="blank">
  <p><h3 id="Subtitulo">PHP</h3><div class="php"></div></a></p>
  
  
  <p>El preprocesador de <em>hipertexto,</em> más conocido por sus siglas PHP, es un lenguaje de scripting escrito en Perl y C. Se utiliza, principalmente, en la programación de páginas webyaplicaciones web dinámicas. PHP es considerado como un lenguaje de programación web apto para inexpertos y es compatible con HTML. Por estas razones, suele ser uno de los primeros lenguajes que aprenden los futuros programadores. A pesar de que hay quienes consideran que PHP es un lenguaje desactualizado, muchos propietarios de páginas web siguen dependiendo de él hoy en día. Entre las principales ventajas que ofrece, se incluye el hecho de que es un lenguaje con soporte de base de datos y una integración eficiente con el protocolo de internet. PHP ha publicado varias actualizaciones desde sus inicios y actualmente se encuentra en la versión 7. Se trata de un lenguaje con licencia de código abierto y disponible de forma gratuita.</p>
  </div>
  
  <div class="Seccion4">
  <a name="ruby" title="Más información" href="https://www.ruby-lang.org/es/" style="text-decoration: none;" target="blank">
  <p><h3 id="Subtitulo">Ruby</h3><div class="ruby"></div></a></p>
  
  <p>Otro lenguaje de programación de alto nivel lo encontramos en el proyecto Ruby, desarrollado por Yukihiro Matsumoto a mediados de los años noventa. Este sencillolenguaje de programación orientado a objetos ha convencido a muchos no solo por ofrecer una escritura dinámica y permitir reflexión sobre los objetos y las listas, sino también gracias a su recolector de basura automático. La principal característica distintiva de Ruby es el enfoque que tiene en el objeto: todo se considera objeto, tanto los valores como las clases. A diferencia de otros lenguajes de programación web orientados a objetos, Ruby no presenta excepciones aplicables a los tipos de datos primitivos. En resumen: “todo es objeto”.</p>
  
    <p>En aras de la comodidad, la sintaxis de Ruby es flexible. Por ejemplo, el uso de paréntesis suele ser opcional. Esto lo convierte en un lenguaje muy fácil de leer que, en muchas ocasiones, parece a simple vista un lenguaje de marcado. No obstante, Ruby ofrece una gran potencia y permite también la metaprogramación, una habilidad que los desarrolladores utilizan para generar sus propios métodos, manipular la jerarquía de herencia y modificar otras constantes del lenguaje de programación y así poder personalizarlas.</p>
  
      <p>Por eso se dice que Ruby es “fácil de aprender, pero difícil de dominar”. Sus críticos llaman la atención sobre las consecuencias negativas que se derivan cuando hay errores tipográficos en el código: en esos casos, esos errores inesperados que afectan al tiempo de ejecución pueden acabar desencadenando desesperantes procesos de resolución de problemas. Con frecuencia, Ruby se utiliza como un lenguaje de scripting para servidores web, aunque es también increíblemente popular dentro de la industria de los videojuegos. Este lenguaje está disponible para los principales sistemas operativos.</p>
    </div>
  
  <div class="Seccion5">
  <a name="c" title="Más información" href="https://negociosyestrategia.com/blog/que-es-csharp/#:~:text=C%23%20(en%20ingl%C3%A9s%20es%20pronunciado,para%20los%20servicios%20o%20productos." style="text-decoration: none;" target="blank">
  <p><h3 id="Subtitulo">C#</h3><div class="cchat"></div></a></p>
  
  <p>El relativamente joven lenguaje de programación C# (“C Sharp”, en su voz inglesa), lanzado en 2001, se considera un lenguaje de propósito general. Sigue un sistema de tipos unificados, está orientado a objetos y es, en términos generales, multiplataforma, aunque al tratarse de un proyecto de Microsoft ha sido específicamente diseñado para .NET Framework. Es muy frecuente encontrarlo bajo el nombre “Visual C#”, sobre todo como implementación. Conceptualmente, se trata de una evolución de Java y C++ que amplía el modelo orientado a objetos gracias a los llamados atributos, que almacenan información sobre clases, objetos y métodos, y a los delegados, que representan referencias a métodos determinados. Principalmente, esto nos permite conseguir una descripción de error más eficiente durante la compilación de código, algo que ahorra tiempo a los desarrolladores.</p>
  
  <p>Para muchos, C# es, junto a Java, el lenguaje de programación más importante y que todo desarrollador web debería aprender. Como lenguaje de programación orientado a objetos, C# ofrece la mejorcombinación entre funcionalidad y potencia. Sus críticos advierten del problema derivado de vincular el uso de C# a .NET Framework de Microsoft. No obstante, con esta sintaxis, los programadores cubren un gran sector del mercado: muchos confían actualmente en C# a la hora de programar para sistemas Windows o videojuegos para Xbox y PC. Como lenguaje de programación web, C# se utiliza principalmente en las API web y en varias aplicaciones web.</p>
  
  </div>
  
  <div class="Seccion6">
  <a name="cc" title="Más información" href="https://openwebinars.net/blog/que-es-cpp/" style="text-decoration: none;">
  <p><h3 id="Subtitulo">C++</h3><div class="cmasmas"></div></a></p>
  
  <p>C++ está basado en C, uno de los lenguajes de programación más antiguos. Se empezó a desarrollar en 1979 y estaba pensado como una extensión de aquel. Hubo que esperar hasta 1985 para que fuera puesto a disposición del público. Hasta la fecha, es un lenguaje muy popular. C++ es un lenguaje de programación ratificado como estándar ISO (Organización Internacional de Normalización) que se considera tanto de bajo nivel y eficiente como complejo y con alta capacidad de abstracción. C++ es, en términos generales, fácil de aprender, sobre todo porque el núcleo del lenguaje es muy abarcable e incluye aproximadamente 60 palabras clave. El lenguaje se vuelve más complejo y gana en alcance gracias a su biblioteca estándar.</p>
  
  <p>Las mayores fortalezas del lenguaje C++ son su gran variedad de combinaciones y su eficiente programación de bajo nivel. Es posible agrupar en funciones básicas incluso los procesos de mayor complejidad. Por eso, los programadores de C++ se ahorran mucho trabajo al poder confiar en el núcleo del lenguaje y en la biblioteca estándar. Debido a que se basa estrictamente en C, este lenguaje de programación tiene algunas desventajas, como, por ejemplo, una sintaxis desordenada en comparación con otros lenguajes. No obstante, C++ es actualmente uno de los lenguajes de programación más utilizados en el ámbito de la programación de aplicaciones y sistemas. Como lenguaje de programación web, C++ está por detrás de Java, JavaScript y C#.</p>
  </div>
  
  <div class="Seccion7">
  <a name="java" title="Más información" href="https://developer.ibm.com/es/tutorials/j-introtojava1/" style="text-decoration: none;" target="blank">
  <p><h3 id="Subtitulo">Java</h3><div class="java"></div></a></p>
  <p>Java es un lenguaje de programación open source y multiplataforma que, gracias a su versatilidad, es adecuado para, prácticamente, cualquier proyecto. Como la mayoría de los lenguajes web más conocidos, está orientado a objetos, es decir, depende de su campo de aplicación concreto. En internet existen incontables marcos y bibliotecas que están, generalmente, muy bien documentados, lo que facilita la ejecución de proyectos web, aunque sean muy complejos. Además, los programas escritos en Java son extensibles, escalables y fáciles de mantener siempre que el programador que esté realizando el proyecto sea un experto.</p>
  
  <p>El hecho de que Java sea, en comparación con otros códigos, difícil de aprender hace que existan, como consecuencia, menos expertos de este lenguaje de programación web. Como clientes, esto nos supone esperar un precio más alto en relación con otros lenguajes de programación. De este modo, los programadores que dominan Java tienen mayores probabilidades de obtener ingresos relativamente altos.</p>
  </div>
  
  <div class="Seccion8">
  <a name="perl" title="Más información" href="https://lenguajedeprogramacionblog.wordpress.com/perl/" style="text-decoration: none;" target="blank">
  <p><h3 id="Subtitulo">Perl</h3><div class="perl"></div></a></p>
  
  <p>El lenguaje de programación gratuito Perl fue lanzado en 1987 como lenguaje de programación interpretado e inspiró, entre otros, los lenguajes PHP, JavaScript, Ruby y Python. Los desarrolladores se basaron, sobre todo, en los lenguajes de programación de la familia C. En términos generales, es un lenguaje multiplataforma, diseñado en principio para ser utilizado en la administración de redes y sistemas. Actualmente, Perl se ha establecido como uno de los lenguajes de programación más utilizados en el ámbito del software web, la bioinformática y las finanzas.</p>
  
  <p>Con Perl, los programadores disfrutan de una gran libertad y de eficiencia en la resolución de problemas. Por ejemplo, los textos pueden ser editados con expresiones regulares y, además, existen muchos módulos gratuitos disponibles para Perl a los que se accede a través del módulo de biblioteca de Perl, CPAN. Como lenguaje de programación, Perl se mantiene fiel a sus principios de ofrecer siempre al programador varias formas de alcanzar su objetivo, continuar siendo sencillo y eficiente y actuar de manera sensible al contexto. Perl ha sido fundamental en la difusión de la World Wide Web y sigue desempeñando un papel importante como lenguaje de programación web, aunque es cierto que se usa con menos frecuencia en ese sentido cuando la proximidad del hardware (por ejemplo, con los servidores web) y la velocidad (por ejemplo, de los controladores) son relevantes.</p>
  </div>
  </div>
    
  
  


<div class="Footer">
<a name="mas"></a>
<h3 id="Subtitulo">Más Información</h3>

<p>Para obtener mas información acerca del tema <a href="https://es.wikipedia.org/wiki/Lenguaje_de_programaci%C3%B3n" target="blank"> Visite Wikipedia Lenguajes de Programacion. </a></p>


<p>Para retornar al principio <a href="#inicio">Volver a Inicio de la pagina</a></p>

<button class="buttonCS"><a href="http://localhost:809/Proyectos/Herramientas/Menu.php" style="text-decoration: none; color: white">Atras</a></button>

<a name="fin"></a>
</div>
</div>
</div>
</body>
</html>