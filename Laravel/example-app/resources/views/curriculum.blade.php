@extends('layouts.app')

@section('titulo')
  Curriculum
@endsection

@section('contenido')
<header id="home">
  <!-- banner -->
  <div class="relative bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('img/Code.jpg')">
    <div class="banner-overlay absolute inset-0"></div> <!-- Capa para aplicar el filtro -->
    <div class="text-white text-center relative z-10">
        <h1 class="text-4xl font-bold mb-4">KEVIN HERNÁNDEZ</h1>
        <p class="text-lg mb-6">¡Bienvenidos a mi portafolio de proyectos de programación web!</p>
        <p class="mb-6">Mi nombre es Kevin Alejandro Hernández Campillo y soy estudiante de Ingeniería en Tecnologías de Información. Me apasiona el mundo de la programación y la tecnología, y en esta página podrás encontrar una muestra de mis proyectos en el área de desarrollo web.</p>
        <a href="#curriculum" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Curriculum</a>
    </div>
</div>

    <!-- Acerca de Mi -->
    <div class="container mx-auto py-10">
      <h2 class="text-3xl font-extrabold mb-4  text-center "> ACERCA DE <span class="text-cyan-300" >MI</span></h2>
      <div class="flex flex-wrap items-center">
        
        <div class="w-full md:w-1/2">
          
          <div class="text-lg mb-4 text-cyan-900 ">
            <p class="m-4" >¡Hola! Mi nombre es Kevin Alejandro Hernández Campillo y soy un apasionado de la tecnología y la programación web. Estudio Ingeniería en Tecnologías de Información y he estado trabajando en proyectos de desarrollo web desde que comencé mi carrera.</p>
            <p  class="m-4">Me encanta crear soluciones innovadoras y eficientes que puedan ayudar a las personas a resolver problemas y mejorar su experiencia en línea. Mis habilidades en HTML, CSS y JavaScript me permiten diseñar y desarrollar sitios web y aplicaciones que sean intuitivas, elegantes y funcionales.</p>
            <p class="m-4" >Siempre estoy buscando aprender más y mejorar mis habilidades, y estoy emocionado por las nuevas oportunidades y desafíos que se presenten en mi camino como desarrollador web. Cuando no estoy trabajando en proyectos de programación, me gusta pasar tiempo explorando nuevas tecnologías, jugando videojuegos y leyendo.</p>
          </div>
        </div>
        <div class="w-full md:w-1/2">
          <img src="img/html-css-js.png" alt="Imagen" class="w-full h-auto">
        </div>
      </div>
    </div>
    
    <!-- Curriculum-->
    <div id="curriculum" class="container mx-auto py-10">
      <h2 class="text-3xl font-extrabold mb-4  text-center "><span class="text-cyan-300" >CURRICULUM</span></h2>
      <div class="text-lg mb-4 text-cyan-900 ">
        <p>
        En esta sección se presentan prácticas realizadas a lo largo de la materia de Programación web.
        </p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="http://watchzone.me/">
              <img class="rounded-t-lg" src="img/watchzone.jpg" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">WatchZone</h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Plataforma de e comerse de productos relacionados con películas y series. Este proyecto fue creado con WordPress.</p>
              <a href="http://watchzone.me/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Read more
                  <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
          </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="http://kevinhc.me/practicano2/">
              <img class="rounded-t-lg" src="img/adminLTE.png" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Sistema simple con registros y tablas</h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Este sistema realiza acciones como registro y listado de clientes, productos y usuarios. Fue realizado utilizando AdminLTE.</p>
              <a href="http://kevinhc.me/practicano2/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Read more
                  <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
          </div>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="http://kevinhc.me/examenjs/">
              <img class="rounded-t-lg" src="img/examen.png" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Examen de JS</h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Este sitio fue creado como parte del examen de la segunda unidad de la materia de Programación Web. Fue creado utilizando bootstrap para los modales.</p>
              <a href="http://kevinhc.me/examenjs/" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Read more
                  <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
          </div>
        </div>
      </div>
    </div>



    <!-- Multimedia -->
    <div class="container mx-auto py-10">
      <h2 class="text-3xl font-extrabold mb-4  text-center "><span class="text-cyan-300" >MULTIMEDIA</span></h2>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/LAlceG2cY_w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/sYqn4lhcMZE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>


        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/2SetvwBV-SU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

      </div>
    </div>
    <!-- Contacto -->
    <div class="container mx-auto py-10">
      <h2 class="text-3xl font-extrabold mb-4  text-center "><span class="text-cyan-300" >CONTACTO</span></h2>
      <div class="text-lg mb-4 text-cyan-900 ">
        <p>
          Puedes encontrar mi trabajo y proyectos en mi cuenta de GitHub: https://github.com/KevinHC13. También puedes enviarme un correo electrónico directamente a 2030284@upv.edu.mx y estaré encantado de responder lo más pronto posible.
        </p>
        <p>
        Además, puedes seguirme en Twitter en @KevinHC016 para mantenerte al tanto de mis últimos proyectos y actualizaciones.
        </p>
      </div>
    </div>
  



    <!-- footer -->
    <!--
    <footer class="bg-white  shadow dark:bg-gray-900 min-h-full ">
      <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
          <div class="sm:flex sm:items-center sm:justify-between">
              <a href="" class="flex items-center mb-4 sm:mb-0">
                  <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">KevinHC</span>
              </a>
              <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                  <li>
                      <a href="/" class="mr-4 hover:underline md:mr-6 ">Inicio</a>
                  </li>
                  <li>
                      <a href="/alumnos" class="mr-4 hover:underline md:mr-6">Alumnos</a>
                  </li>
                  <li>
                      <a href="/curriculum" class="mr-4 hover:underline md:mr-6 ">Curriculum</a>
                  </li>
              </ul>
          </div>
          <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
          <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://https://github.com/kevinHC13/" class="hover:underline">KevinHC</a>. All Rights Reserved.</span>
      </div>
  </footer>
-->
@endsection