<x-guest-layout>
    <head>
        <meta name="author" content="Raul Riera"/>
        <meta name="credit" content="https://www.instagram.com/_wrightdesign/"/>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css"
        />
        <title>Odonto On</title>
    </head>
    <style>
        .bg-blue-600{
            background-color: #00bed8;
        }
        .border-blue-700{
            border-color: #00bed8;
        }
        .border-blue-600{
            border-color: #00bed8;
        }
    </style>
    <body class="bg-indigo-500">
    <header class="relative w-full px-8 text-gray-700 bg-white body-font">
        <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
            <img class="relative z-10 flex items-center w-14 py-2"
                 src="{{url('assets/favicon.png')}}"
                 alt="OdontoOn logo"
            />

            <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">
                <a href="{{route('login')}}"
                   class=" inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none">
                    Login
                </a>
                <span class="inline-flex rounded-md shadow-sm">
        <a
            href="{{route('register')}}"
            class="inline-flex items-center justify-center px-4 py-2 text-base font-medium
            leading-6
            text-white
            whitespace-no-wrap
            bg-blue-600
            border-blue-700
            rounded-md
            shadow-sm
            hover:bg-blue-700
            focus:outline-none
            focus:ring-2
            focus:ring-offset-2
            focus:ring-blue-500
          ">
          Cadastro
        </a>
      </span>
            </div>
        </div>
    </header>
    <!-- Section 2 -->
    <section class="px-2 pt-32 bg-white md:px-0">
        <div
            class="
			container
			items-center
			max-w-6xl
			px-5
			mx-auto
			space-y-6
			text-center
		"
        >
            <h1
                class="
				text-4xl
				font-extrabold
				tracking-tight
				text-left text-gray-900
				sm:text-5xl
				md:text-6xl md:text-center
			"
            >
			<span class="block">
				Aumente o seu nível
				<span class="block mt-1 lg:inline lg:mt-0" style="color: #00bed8">
					Prática Dental
				</span>
			</span>
            </h1>
            <p
                class="
				w-full
				mx-auto
				text-base text-left text-gray-500
				md:max-w-md
				sm:text-lg
				lg:text-2xl
				md:max-w-3xl md:text-center
			"
            >
                Agende, notifique e gerencie pacientes com mais facilidade com Odonto On
            </p>
            <div
                class="relative flex flex-col justify-center md:flex-row md:space-x-4"
            >
                <a
                    href="{{route('login')}}"
                    class="
					flex
					items-center
					w-full
					px-6
					py-3
					mb-3
					text-lg text-white
					bg-blue-500
					rounded-md
					md:mb-0
					hover:bg-blue-700
					md:w-auto
				" style="background-color:#00bed8"
                >
                    Comece — grátis
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 ml-1"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <div
            class="container items-center max-w-6xl px-5 mx-auto mt-16 text-center"
        >
            <img src="{{asset('assets/site_review.png')}}"/>
        </div>
    </section>

    <!-- Features -->

    <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24">
        <div
            class="
			box-border
			flex flex-col
			items-center
			content-center
			px-8
			mx-auto
			leading-6
			text-black
			border-0 border-gray-300 border-solid
			md:flex-row
			max-w-7xl
			lg:px-16
		"
        >
            <!-- Image -->
            <div
                class="
				box-border
				relative
				w-full
				max-w-md
				px-4
				mt-5
				mb-4
				-ml-5
				text-center
				bg-no-repeat bg-contain
				border-solid
				md:ml-0 md:mt-0 md:max-w-none
				lg:mb-0
				md:w-1/2
				xl:pl-10
			"
            >
                <img
                    src="{{asset('assets/calendar_girl.png')}}"
                    class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20"
                />
            </div>

            <!-- Content -->
            <div
                class="
				box-border
				order-first
				w-full
				text-black
				border-solid
				md:w-1/2 md:pl-10 md:order-none
			"
            >
                <h2
                    class="
					m-0
					text-xl
					font-semibold
					leading-tight
					border-0 border-gray-300
					lg:text-3xl
					md:text-2xl
				"
                >
                    Aumente a Produtividade
                </h2>
                <p
                    class="
					pt-4
					pb-8
					m-0
					leading-7
					text-gray-700
					border-0 border-gray-300
					sm:pr-12
					xl:pr-32
					lg:text-lg
				"
                >
                    Aproveite as ferramentas para criar produtividade em sua clínica. Foco no que importa, seus pacientes.
                </p>
                <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                    <li
                        class="
						box-border
						relative
						py-1
						pl-0
						text-left text-gray-500
						border-solid
					"
                    >
					<span
                        class="
							inline-flex
							items-center
							justify-center
							w-6
							h-6
							mr-2
							text-white
							bg-blue-600
							rounded-full
						" style="background-color: #00bed8"
                    ><span class="text-sm font-bold">✓</span></span
                    >
                        Um único ponto de referência
                    </li>
                    <li
                        class="
						box-border
						relative
						py-1
						pl-0
						text-left text-gray-500
						border-solid
					"
                    >
					<span
                        class="
							inline-flex
							items-center
							justify-center
							w-6
							h-6
							mr-2
							text-white
							bg-blue-600
							rounded-full
						"
                    ><span class="text-sm font-bold">✓</span></span
                    >
                        Fluxos de trabalho rápidos.
                    </li>
                    <li
                        class="
						box-border
						relative
						py-1
						pl-0
						text-left text-gray-500
						border-solid
					"
                    >
					<span
                        class="
							inline-flex
							items-center
							justify-center
							w-6
							h-6
							mr-2
							text-white
							bg-blue-600
							rounded-full
						"
                    ><span class="text-sm font-bold">✓</span></span
                    >
                        Sempre disponível sempre que precisar.
                    </li>
                </ul>
            </div>
            <!-- End  Content -->
        </div>
        <div
            class="
			box-border
			flex flex-col
			items-center
			content-center
			px-8
			mx-auto
			mt-2
			leading-6
			text-black
			border-0 border-gray-300 border-solid
			md:mt-20
			xl:mt-0
			md:flex-row
			max-w-7xl
			lg:px-16
		"
        >
            <!-- Content -->
            <div
                class="
				box-border
				w-full
				text-black
				border-solid
				md:w-1/2 md:pl-6
				xl:pl-32
			"
            >
                <h2
                    class="
					m-0
					text-xl
					font-semibold
					leading-tight
					border-0 border-gray-300
					lg:text-3xl
					md:text-2xl
				"
                >
                    Tarefas Automatizadas
                </h2>
                <p
                    class="
					pt-4
					pb-8
					m-0
					leading-7
					text-gray-700
					border-0 border-gray-300
					sm:pr-10
					lg:text-lg
				"
                >
                    Economize tempo e dinheiro com nossos serviços. Tornamos o complexo, simples.
                </p>
                <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                    <li
                        class="
						box-border
						relative
						py-1
						pl-0
						text-left text-gray-500
						border-solid
					"
                    >
					<span
                        class="
							inline-flex
							items-center
							justify-center
							w-6
							h-6
							mr-2
							text-white
							bg-blue-600
							rounded-full
						"
                    ><span class="text-sm font-bold">✓</span></span
                    >
                        Lembretes e revisões automatizados.
                    </li>
                    <li
                        class="
						box-border
						relative
						py-1
						pl-0
						text-left text-gray-500
						border-solid
					"
                    >
					<span
                        class="
							inline-flex
							items-center
							justify-center
							w-6
							h-6
							mr-2
							text-white
							bg-blue-600
							rounded-full
						"
                    ><span class="text-sm font-bold">✓</span></span
                    >
                        Informações detalhadas sobre seus pacientes.
                    </li>
                    <li
                        class="
						box-border
						relative
						py-1
						pl-0
						text-left text-gray-500
						border-solid
					"
                    >
					<span
                        class="
							inline-flex
							items-center
							justify-center
							w-6
							h-6
							mr-2
							text-white
							bg-blue-600
							rounded-full
						"
                    ><span class="text-sm font-bold">✓</span></span
                    >
                        Acompanhe os pagamentos dos pacientes.
                    </li>
                </ul>
            </div>
            <!-- End  Content -->

            <!-- Image -->
            <div
                class="
				box-border
				relative
				w-full
				max-w-md
				px-4
				mt-10
				mb-4
				text-center
				bg-no-repeat bg-contain
				border-solid
				md:mt-0 md:max-w-none
				lg:mb-0
				md:w-1/2
			"
            >
                <img
                    src="{{asset('assets/doctor.png')}}"
                    class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32"
                />
            </div>
        </div>
    </section>

    <!-- Pricing -->

    <section
        class="py-8 leading-7 text-gray-900 bg-white sm:py-12 md:py-16 lg:py-24">
        <div
            class="
			box-border
			px-4
			mx-auto
			border-solid
			sm:px-6
			md:px-6
			lg:px-8
			max-w-7xl
		"
        >
            <div
                class="
				flex flex-col
				items-center
				leading-7
				text-center text-gray-900
				border-0 border-gray-200
			"
            >
                <h2
                    class="
					box-border
					m-0
					text-3xl
					font-semibold
					leading-tight
					tracking-tight
					text-black
					border-solid
					sm:text-4xl
					md:text-5xl
				"
                >
                    Preços simples e transparentes
                </h2>
                <p
                    class="
					box-border
					mt-2
					text-xl text-gray-900
					border-solid
					sm:text-2xl
				"
                >
                    Preços de acordo com sua necessidade.
                </p>
            </div>
            <div
                class="
				grid grid-cols-1
				gap-4
				mt-4
				leading-7
				text-gray-900
				border-0 border-gray-200
				sm:mt-6 sm:gap-6
				md:mt-8 md:gap-0
				lg:grid-cols-2
			"
            >
                <!-- Price 1 -->
                <div
                    class="
					relative
					z-10
					flex flex-col
					items-center
					max-w-md
					p-4
					mx-auto
					my-0
					border border-solid
					rounded-lg
					lg:-mr-3
					sm:my-0 sm:p-6
					md:my-8 md:p-8
				"
                >
                    <h3
                        class="
						m-0
						text-2xl
						font-semibold
						leading-tight
						tracking-tight
						text-black
						border-0 border-gray-200
						sm:text-3xl
						md:text-4xl
					"
                    >
                        Comunidade
                    </h3>
                    <div
                        class="
						flex
						items-end
						mt-6
						leading-7
						text-gray-900
						border-0 border-gray-200
					"
                    >
                        <p
                            class="
							box-border
							m-0
							text-6xl
							font-semibold
							leading-none
							border-solid
						"
                        >
                            R$0
                        </p>
                        <p
                            class="box-border m-0 border-solid"
                            style="border-image: initial"
                        >
                            / mes
                        </p>
                    </div>
                    <p
                        class="
						mt-6
						mb-5
						text-base
						leading-normal
						text-left text-gray-900
						border-0 border-gray-200
					"
                    >
                        Ideal para pessoas físicas e pequenas empresas que querem sujar as mãos.
                    </p>
                    <ul
                        class="
						flex-1
						p-0
						mt-4
						ml-5
						leading-7
						text-gray-900
						border-0 border-gray-200
					"
                    >
                        <li
                            class="
							inline-flex
							items-center
							block
							w-full
							mb-2
							ml-5
							font-semibold
							text-left
							border-solid
						"
                        >
                            <svg
                                class="
								w-5
								h-5
								mr-2
								font-semibold
								leading-7
								text-blue-600
								sm:h-5 sm:w-5
								md:h-6 md:w-6
							"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            Lembretes de compromisso
                        </li>
                        <li
                            class="
							inline-flex
							items-center
							block
							w-full
							mb-2
							ml-5
							font-semibold
							text-left
							border-solid
						"
                        >
                            <svg
                                class="
								w-5
								h-5
								mr-2
								font-semibold
								leading-7
								text-blue-600
								sm:h-5 sm:w-5
								md:h-6 md:w-6
							"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            Comentários de pacientes
                        </li>
                        <li
                            class="
							inline-flex
							items-center
							block
							w-full
							mb-2
							ml-5
							font-semibold
							text-left
							border-solid
						"
                        >
                            <svg
                                class="
								w-5
								h-5
								mr-2
								font-semibold
								leading-7
								text-blue-600
								sm:h-5 sm:w-5
								md:h-6 md:w-6
							"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            Vários calendários
                        </li>
                        <li
                            class="
							inline-flex
							items-center
							block
							w-full
							mb-2
							ml-5
							font-semibold
							text-left
							border-solid
						"
                        >
                            <svg
                                class="
								w-5
								h-5
								mr-2
								font-semibold
								leading-7
								text-blue-600
								sm:h-5 sm:w-5
								md:h-6 md:w-6
							"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            Saldos de Pacientes
                        </li>
                        <li
                            class="
							inline-flex
							items-center
							block
							w-full
							mb-2
							ml-5
							font-semibold
							text-left
							border-solid
						"
                        >
                            <svg
                                class="
								w-5
								h-5
								mr-2
								font-semibold
								leading-7
								text-blue-600
								sm:h-5 sm:w-5
								md:h-6 md:w-6
							"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            Código aberto
                        </li>
                        <li
                            class="
							inline-flex
							items-center
							block
							w-full
							mb-2
							ml-5
							font-semibold
							text-left
							border-solid
						"
                        >
                            <svg
                                class="
								w-5
								h-5
								mr-2
								font-semibold
								leading-7
								text-red-600
								sm:h-5 sm:w-5
								md:h-6 md:w-6
							"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                            </svg>
                            Suporte Premium
                        </li>
                        <li
                            class="
							inline-flex
							items-center
							block
							w-full
							mb-2
							ml-5
							font-semibold
							text-left
							border-solid
						"
                        >
                            <svg
                                class="
								w-5
								h-5
								mr-2
								font-semibold
								leading-7
								text-red-600
								sm:h-5 sm:w-5
								md:h-6 md:w-6
							"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                            </svg>
                            Hospedagem grátis
                        </li>
                    </ul>
                    <form id="signup-cta" action="https://github.com/odontome/app">
                        <button
                            class="
							inline-flex
							justify-center
							w-full
							px-4
							py-3
							mt-8
							font-sans
							text-sm
							leading-none
							text-center text-blue-600
							no-underline
							bg-transparent
							border border-blue-600
							rounded-md
							cursor-pointer
							hover:bg-blue-700 hover:border-blue-700 hover:text-white
							focus-within:bg-blue-700
							focus-within:border-blue-700
							focus-within:text-white
							sm:text-base
							md:text-lg
						"
                        >
                            Use por conta própria
                        </button>
                    </form>
                </div>
                <!-- Price 2 -->
                <div
                    class="
					relative
					z-20
					flex flex-col
					items-center
					max-w-md
					p-4
					mx-auto
					my-0
					bg-white
					border-4 border-blue-600 border-solid
					rounded-lg
					sm:p-6
					md:px-8 md:py-16
				"
                >
                    <h3
                        class="
						m-0
						text-2xl
						font-semibold
						leading-tight
						tracking-tight
						text-black
						border-0 border-gray-200
						sm:text-3xl
						md:text-4xl
					"
                    >
                        Pro
                    </h3>
                    <div
                        class="
						flex
						items-end
						mt-6
						leading-7
						text-gray-900
						border-0 border-gray-200
					"
                    >
                        <p
                            class="
							box-border
							m-0
							text-6xl
							font-semibold
							leading-none
							border-solid
						"
                        >
                            R$99
                        </p>
                        <p
                            class="box-border m-0 border-solid"
                            style="border-image: initial"
                        >
                            / mes
                        </p>
                    </div>
                    <p
                        class="
						mt-6
						mb-5
						text-base
						leading-normal
						text-left text-gray-900
						border-0 border-gray-200
					"
                    >
                        Ideal para indivíduos e empresas que desejam se concentrar em seus clientes.
                    </p>
                    <ul
                        class="
						flex-1
						p-0
						mt-4
						leading-7
						text-gray-900
						border-0 border-gray-200
					"
                    >
                        <li
                            class="
							inline-flex
							items-center
							block
							w-full
							mb-2
							ml-5
							font-semibold
							text-left
							border-solid
						"
                        >
                            <svg
                                class="
								w-5
								h-5
								mr-2
								font-semibold
								leading-7
								text-blue-600
								sm:h-5 sm:w-5
								md:h-6 md:w-6
							"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            Tudo na Comunidade
                        </li>
                        <li
                            class="
							inline-flex
							items-center
							block
							w-full
							mb-2
							ml-5
							font-semibold
							text-left
							border-solid
						"
                        >
                            <svg
                                class="
								w-5
								h-5
								mr-2
								font-semibold
								leading-7
								text-blue-600
								sm:h-5 sm:w-5
								md:h-6 md:w-6
							"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            Suporte Premium
                        </li>
                        <li
                            class="
							inline-flex
							items-center
							block
							w-full
							mb-2
							ml-5
							font-semibold
							text-left
							border-solid
						"
                        >
                            <svg
                                class="
								w-5
								h-5
								mr-2
								font-semibold
								leading-7
								text-blue-600
								sm:h-5 sm:w-5
								md:h-6 md:w-6
							"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"
                                ></path>
                            </svg>
                            Hospedagem grátis
                        </li>
                    </ul>
                    <form action="https://my.odonto.me/signup">
                        <button
                            class="
							inline-flex
							justify-center
							w-full
							px-4
							py-3
							mt-8
							font-sans
							text-sm
							leading-none
							text-center text-white
							no-underline
							bg-blue-600
							border
							rounded-md
							cursor-pointer
							hover:bg-blue-700 hover:border-blue-700 hover:text-white
							focus-within:bg-blue-700
							focus-within:border-blue-700
							focus-within:text-white
							sm:text-base
							md:text-lg
						"
                        >
                            Comece — grátis
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Outro -->

    <section
        class="py-8 leading-7 text-gray-900 bg-white sm:py-12 md:py-16 lg:py-24">
        <div class="max-w-6xl px-4 px-10 mx-auto border-solid lg:px-12">
            <div
                class="
				flex flex-col
				items-start
				leading-7
				text-gray-900
				border-0 border-gray-200
				lg:items-center lg:flex-row
			"
            >
                <div class="box-border flex-1 text-center border-solid sm:text-left">
                    <h2
                        class="
						m-0
						text-4xl
						font-semibold
						leading-tight
						tracking-tight
						text-left text-black
						border-0 border-gray-200
						sm:text-5xl
					"
                    >
                        Aumente o nível da sua clínica odontológica
                    </h2>
                    <p
                        class="
						mt-2
						text-xl text-left text-gray-900
						border-0 border-gray-200
						sm:text-2xl
					"
                    >
                        Nosso serviço irá ajudá-lo a maximizar e aumentar sua produtividade.
                    </p>
                </div>
                <a
                    href="{{route('register')}}"
                    class="
					inline-flex
					items-center
					justify-center
					w-full
					px-5
					py-4
					mt-6
					ml-0
					font-sans
					text-base
					leading-none
					text-white
					no-underline
					bg-blue-600
					border border-blue-600 border-solid
					rounded
					cursor-pointer
					md:w-auto
					lg:mt-0
					hover:bg-blue-700 hover:border-blue-700 hover:text-white
					focus-within:bg-blue-700
					focus-within:border-blue-700
					focus-within:text-white
					sm:text-lg
					lg:ml-6
					md:text-xl
				"
                >
                    Iniciar
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 ml-2"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <footer class="text-gray-700 bg-white body-font">
        <div
            class="
			container
			flex flex-col
			items-center
			px-8
			py-8
			mx-auto
			max-w-7xl
			sm:flex-row
		"
        >
            <a
                href="#_"
                class="text-xl font-black leading-none text-gray-900 select-none logo"
            >Odonto<span class="text-blue-600">On</span></a
            >
            <p
                class="
				mt-4
				text-sm text-gray-500
				sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0
			"
            >
                © 2022 Odonto On - Made with ❤️ Universidade de Vila Velha
            </p>
            <p
                class="
				mt-4
				text-sm text-gray-500
				sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0
			"
            >
                Template website <a href="http://odonto.me" target="_blank"><b>Odonto.me</b></a> All rights reserved
            </p>
            <span
                class="
				inline-flex
				justify-center
				mt-4
				space-x-5
				sm:ml-auto sm:mt-0 sm:justify-start
			"
            >
{{--			<a--}}
{{--                href="#"--}}
{{--                class="text-gray-400 hover:text-gray-500"--}}
{{--            >--}}
{{--				<span class="sr-only">Facebook</span>--}}
{{--				<svg--}}
{{--                    class="w-6 h-6"--}}
{{--                    fill="currentColor"--}}
{{--                    viewBox="0 0 24 24"--}}
{{--                    aria-hidden="true"--}}
{{--                >--}}
{{--					<path--}}
{{--                        fill-rule="evenodd"--}}
{{--                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"--}}
{{--                        clip-rule="evenodd"--}}
{{--                        class=""--}}
{{--                    ></path>--}}
{{--				</svg>--}}
{{--			</a>--}}

{{--			<a--}}
{{--                href="#"--}}
{{--                class="text-gray-400 hover:text-gray-500"--}}
{{--            >--}}
{{--				<span class="sr-only">Twitter</span>--}}
{{--				<svg--}}
{{--                    class="w-6 h-6"--}}
{{--                    fill="currentColor"--}}
{{--                    viewBox="0 0 24 24"--}}
{{--                    aria-hidden="true"--}}
{{--                >--}}
{{--					<path--}}
{{--                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"--}}
{{--                        class=""--}}
{{--                    ></path>--}}
{{--				</svg>--}}
{{--			</a>--}}

			<a
                href="https://github.com/Garchy/Site-InovaWeek"
                class="text-gray-400 hover:text-gray-500"
            >
				<span class="sr-only">GitHub</span>
				<svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >
					<path
                        fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd"
                        class=""
                    ></path>
				</svg>
			</a>
		</span>
        </div>
    </footer>
    </body>

</x-guest-layout>

