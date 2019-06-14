<html lang="pt-br">
  <head>
    <title>@lang('errors.404title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ url('/css/error.css') }}">
  </head>

  <body class="antialiased font-sans">
    <div class="md:flex min-h-screen">
      <div class="w-full md:w-1/2 bg-white flex items-center justify-center">
        <div class="max-w-sm m-8">
          <div class="text-black text-5xl md:text-15xl font-black">
            404
          </div>
          <div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>
          <p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">
            @lang('errors.404text')
          </p>
          <a href="{{ url('/') }}">
            <button class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg">
              @lang('errors.btn')
            </button>
          </a>
        </div>
      </div>
      <div class="relative pb-full md:flex md:pb-0 md:min-h-screen w-full md:w-1/2">
        <div style="background-image: url('{{ url('/svg/404.svg') }}');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
        </div>
      </div>
    </div>
  </body>
</html>
