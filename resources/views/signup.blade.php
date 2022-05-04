<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Checkout example · Bootstrap v5.1</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container">
    <main>
      <div class="py-5 text-start">
        <h2>Criar Conta</h2>
      </div>

      <div class="row g-5">
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Dados Pessoais</h4>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Nome</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Por favor, informe um nome válido.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Por favor, informe um sobrenome válido.
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Por favor, insira um email válido.
                </div>
              </div>

              <div class="col-6">
                <label for="birthdate" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="birthdate">
                <div class="invalid-feedback">
                  Por favor, insira uma data de nascimento válida.
                </div>
              </div>

              <div class="col-md-6">
                <label for="gender" class="form-label">Gênero</label>
                <select class="form-select" id="country" required>
                  <option value="">Selecione...</option>
                  <option>Masculino</option>
                  <option>Feminino</option>
                  <option>Outro</option>
                  <option>Prefiro não informar</option>
                </select>
                <div class="invalid-feedback">
                  Por favor, insira um gênero válido.
                </div>
              </div>

              <div class="col-6"> {{-- PRECISA COLOCAR A MASCARA PARA SO ACEITAR ENTRADA FORMATADA 127.456.789-10 --}}
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00">
                <div class="invalid-feedback">
                  Por favor, insira uma data de nascimento válida.
                </div>
              </div>
            </div>
            
            <hr class="mt-4">
            
            <div class="row g-3">
              <h4>Definir Senha</h4>
              <div class="col-6 ">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control cpf-mask" >
                <div class="invalid-feedback">
                  Por favor, insira uma senha válida.
                </div>
              </div>

              <div class="col-6">
                <label for="ConfSenha" class="form-label">Confirmar Senha</label>
                <input type="password" class="form-control cpf-mask" >
                <div class="invalid-feedback">
                  As senhas não coincidem.
                </div>
              </div>
            </div>
            
                              
            <hr class="my-4">

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="terms">
              <label class="form-check-label" for="same-address">
                Eu concordo com os <a href="">Termos de Uso e Política de Privacidade</a>
              </label>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
          </form>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2022 Odonto On</p>
    </footer>
  </div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>
</body>

</html>
