@extends('layouts.plantilla')

@section('title', 'Contactame')

@section('content')
    <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800">
    <div class="flex flex-wrap">
      <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
        <h2 class="text-3xl font-bold mb-6">Contactame</h2>
        <p class="text-gray-500 mb-6">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Laudantium, modi accusantium ipsum corporis quia asperiores
          dolorem nisi corrupti eveniet dolores ad maiores repellendus enim
          autem omnis fugiat perspiciatis? Ad, veritatis.
        </p>
        <p class="text-gray-500 mb-2">Colombia, San Juan De Pasto</p>
        <p class="text-gray-500 mb-2">316 650 8808</p>
        <p class="text-gray-500 mb-2">ingjefersond@gmail.com</p>
      </div>
      <div class="grow-0 shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
        <form action="{{route('contactanos.store')}}" method="POST">
            @csrf
          <div class="form-group mb-6">
            <input type="text" name="name" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
              placeholder="Nombre">
          </div>
          <div class="form-group mb-6">
            <input type="email" name="correo" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
              placeholder="Correo">
          </div>
          <div class="form-group mb-6">
            <textarea name="mensaje" class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            " id="exampleFormControlTextarea13" rows="3" placeholder="Mensaje"></textarea>
          </div>
          <button type="submit" class="
            w-full
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Enviar</button>
        </form>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->
    
@endsection