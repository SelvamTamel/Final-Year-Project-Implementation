<html>
  <head>

      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui">
    
      <title>CyberPersona - CyberSecurity Personality Quiz</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

     <!-- Favicons -->
     <link href="{{ asset('assets/images/head-Icon.ico') }}" rel="icon">

     <!-- Template Main CSS File -->
     <link href="{{ asset('assets/css/tailwind.css') }}" rel="stylesheet">


</head>

<body>

  <div id="root">

    <div>

      <header class="bg-blue-500 h-12 flex items-center">
        <div class="font-sans text-white font-semibold px-5">
          CyberPersona
        </div>
      </header>
      <div class="bg-blue-400 h-64 shape text-blue-50 flex items-center justify-center flex-col">
        <h1 class="relative -top-4 text-3xl md:text-5xl m-2 md:pr-20">
          Cybersecurity Personality Quiz
        </h1>
        <h2 class="relative -top-4 text-lg md:text-xl md:pl-20">
          bigfivetraits
        </h2>
      </div>
        <section id="main" class="max-w-2xl mx-3 sm:mx-auto">
          <div>
            <div class="mt-5 md:mt-8 p-4 p-10 text-gray-600  bg-opacity-70 rounded bg-gray-100">
              <p class="pb-5">
           The big-five personality model is the dominant model within personality psychology, and is also the model that is considered to have the strongest scientific basis.
              </p>
              <p class="pb-5">
                It is based on the fact that humans have five different personality traits that make up our personality/behavior. Each personality trait can vary between 0-100%, which     will indicate the vulnerability level of each personality type based on the user's input.
           <a href="https://www.cybsafe.com/community/blog/how-does-personality-influence-your-cyber-risk/">
           big-five personality test with 5 personalities
              </a>
              "."
              </p>
              <p class="pb-5">
           The five factors are
              <strong class="text-emphasis">Extraversion,</strong>
              <strong class="text-emphasis">Agreeableness,</strong>
              <strong class="text-emphasis">Conscientiousness,</strong>
              <strong class="text-emphasis">Openness to Experience,</strong>
              <strong class="text-emphasis">Neuroticism</strong>. sometimes in English as OCEAN.
              </p>
        </div>
        <div class="my-6 mx-auto w-3/4 md:w-full md:my-3 md:flex items-center">
          <div class="md:mr-3 rounded md:w-1/3 p-3 md:p-8 text-center text-indigo-900 bg-indigo-400 bg-opacity-50">
            Takes about 15 minutes to do
          </div>
          <div class="md:my-3 md:rounded p-3 md:w-1/3 md:p-8 text-center text-yellow-900 bg-yellow-400 bg-opacity-50">
            Try to answer as honestly as possible
          </div>
          <div class="md:ml-3 rounded p-3 md:w-1/3 md:p-8 text-center text-blue-900 bg-blue-400 bg-opacity-50">
            Take a stand instead of responding neutrally
            </div>
          </div>

          <form action="store" method="POST"> 
            @csrf
          <div class="mt-10 mb-10">
          <div>
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">1. I am often in the centre of the party.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  {{-- User Input For question-1-answers --}}
                  <input 
                  type="radio" 
                  name="question-1-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  {{-- User Input For question-1-answers --}}
                  <input 
                  type="radio" 
                  name="question-1-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  {{-- User Input For question-1-answers --}}
                  <input
                    type="radio"
                    name="question-1-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  {{-- User Input For question-1-answers --}}
                  <input
                    type="radio"
                    name="question-1-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  {{-- User Input For question-1-answers --}}
                  <input
                    type="radio"
                    name="question-1-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
             {{-- Validate Require --}}
            <span class="flex sm:flex-col items-center text-red-600">@error('question-1-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">2. I don't care much about others.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-2-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-2-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-2-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-2-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-2-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-2-answers'){{ $message }} @enderror</span>
            </div>


            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">3. I am always well prepared.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-3-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-3-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-3-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-3-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-3-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-3-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">4. I get stressed easily.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-4-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-4-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-4-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-4-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-4-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-4-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">5. I have a rich vocabulary.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-5-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-5-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-5-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-5-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-5-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-5-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">6. I don't talk much.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-6-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-6-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-6-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-6-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-6-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-6-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">7. I am interested in other people.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-7-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-7-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-7-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-7-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-7-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
                <br>
                <span class="flex sm:flex-col items-center text-red-600">@error('question-7-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">8. I often leave things around.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-8-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-8-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-8-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-8-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-8-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-8-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">9. I'm relaxed most of the time.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-9-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-9-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-9-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-9-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-9-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-9-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">10. I have difficulty grasping theoretical concepts.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-10-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-10-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-10-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-10-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-10-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-10-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">11. I feel comfortable around people.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-11-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-11-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-11-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-11-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-11-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-11-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">12. I don't care much about others.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-12-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-12-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-12-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-12-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-12-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-12-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">13. I focus on details.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-13-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-13-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-13-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-13-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-13-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-13-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">14. I often worry about things.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-14-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-14-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-14-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-14-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-14-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-14-answers'){{ $message }} @enderror</span>
            </div>


            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">15. I have a vivid imagination.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-15-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-15-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-15-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-15-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-15-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-15-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">16. I mostly stay in the background.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-16-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-16-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-16-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-16-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-16-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-16-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">17. I sympathize with other people's feelings.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-17-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-17-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-17-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-17-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-17-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-17-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">18. I often mess up.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-18-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-18-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-18-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-18-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-18-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-18-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">19. I rarely feel down.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-19-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-19-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-19-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-19-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-19-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-19-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">20. I'm not interested in abstract ideas.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-20-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-20-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-20-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-20-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-20-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-20-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">21. I often start conversations with people.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-21-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-21-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-21-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-21-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-21-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-21-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">22. I am not interested in other people's problems.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-22-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-22-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-22-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-22-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-22-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-22-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">23. I get chores done in one go.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-23-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-23-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-23-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-23-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-23-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-23-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">24. I am easily distracted.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-24-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-24-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-24-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-24-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-24-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-24-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">25. I have excellent ideas.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-25-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-25-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-25-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-25-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-25-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-25-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">26. I don't have much to say.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-26-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-26-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-26-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-26-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-26-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-26-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">27. I am empathetic.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-27-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-27-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-27-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-27-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-27-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-27-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">28. I often forget to put things back in the right place.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-28-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-28-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-28-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-28-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-28-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-28-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">29. I get upset easily.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-29-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-29-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-29-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-29-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-29-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-29-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">30. I don't have a very good imagination.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-30-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-30-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-30-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-30-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-30-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-30-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">31. I talk to a lot of different people at parties.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-31-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-31-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-31-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-31-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-31-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-31-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">32. I'm not that interested in other people.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-32-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-32-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-32-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-32-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-32-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-32-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">33. I appreciate order.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-33-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-33-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-33-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-33-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-33-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-33-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">34. I often have mood swings.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-34-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-34-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-34-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-34-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-34-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-34-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">35. I understand things quickly.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-35-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-35-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-35-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-35-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-35-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-35-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">36. I don't like to draw attention to myself.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-36-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-36-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-36-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-36-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-36-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-36-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">37. I make time for other people.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-37-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-37-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-37-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-37-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-37-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-37-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">38. I avoid responsibility.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-38-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-38-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-38-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-38-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-38-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-38-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">39. I can get angry for no reason.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-39-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-39-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-39-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-39-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-39-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-39-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">40. I often use difficult words.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-40-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-40-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-40-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-40-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-40-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-40-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">41. I don't mind being in the centre.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-41-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-41-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-41-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-41-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-41-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-41-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">42. I can feel other people's feelings.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-42-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-42-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-42-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-42-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-42-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-42-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">43. I follow a daily routine.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-43-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-43-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-43-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-43-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-43-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-43-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">44. I am easily irritated.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-44-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-44-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-44-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-44-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-44-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-44-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">45. I often think about things.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-45-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-45-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-45-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-45-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-45-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-45-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">46. I'm quiet around strangers.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-46-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-46-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-46-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-46-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-46-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-46-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">47. I make people feel comfortable.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-47-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-47-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-47-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-47-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-47-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-47-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">48. I manage my tasks carefully.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-48-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-48-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-48-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-48-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-48-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-48-answers'){{ $message }} @enderror</span>
            </div>
            
            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">49. I often feel down.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-49-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-49-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-49-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-49-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-49-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-49-answers'){{ $message }} @enderror</span>
            </div>

            <div class="transition-all duration-500 ease-in-out mb-12 pt-3 pb-5 px-3 bg-gray-50">
              <h2 class="text-lg text-gray-600 pb-4"><span class="text-base text-gray-400 mr-1">50. I have many ideas about things.</span></h2>
              <section class="flex flex-col-reverse sm:flex-row  justify-between text-sm align-middle">
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-600">
                  <input 
                  type="radio" 
                  name="question-50-answers"
                  class="transform scale-200 sm:mt-3 sm:order-last cursor-pointer"
                  value="1">
                  <label class="sm:order-first pl-4 sm:p-0">Strongly <br>Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center sm:w-1/6 mt-3 mx-4 sm:m-0 text-red-400">
                  <input 
                  type="radio" 
                  name="question-50-answers" 
                  class="transform scale-200 sm:mt-3 cursor-pointer" 
                  value="2">
                  <label class="sm:order-first pl-4 sm:p-0">Disagree</label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-50-answers" 
                    value="3"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-gray-600 pl-4 sm:p-0">
                  Neutral
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-50-answers"
                    value="4"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-600 pl-4 sm:p-0">
                  Agree
                  </label>
                </div>
                <div class="flex sm:flex-col items-center mt-3 mx-4 sm:m-0 sm:w-1/6">
                  <input
                    type="radio"
                    name="question-50-answers"
                    value="5"
                    class="transform scale-200 sm:mt-3 cursor-pointer"
                  />
                  <label class="sm:order-first text-green-500 pl-4 sm:p-0">
                  Strongly <br>Agree 
                  </label>
                </div>
              </section>
              <br>
              <span class="flex sm:flex-col items-center text-red-600">@error('question-50-answers'){{ $message }} @enderror</span>
            </div>
          </div>

            <input type="submit" class="transition-all duration-500 ease-in-out mb-20 h-12 px-8 rounded text-white text-lg hover:bg-green-500 bg-green-500 mx-auto block">

        </form> 

        </body>
</html>