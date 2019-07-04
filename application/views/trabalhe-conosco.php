<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/css/style.min.css');?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
		integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a class="navbar-brand" href="#">RJ Express</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('consultar')?>">Consultar</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="<?=base_url('trabalhe-conosco')?>">Trabalhe conosco</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('login')?>">Login</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="jumbotron text-center">
		<h1>Trabalhe Conosco</h1>
		<p>Faça parte da nossa equipe!</p>
	</div>
	<!-- Start .\ Section de cadastro -->
	<section>
		<div class="container">
			<form id="formCadastro">
				<!-- Start .\ Habilitação -->
				<div class="row">
					<!-- Message alert -->
					<div class="col-12" id="alert-message">
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<span class="message"><strong>Desculpe!</strong> Mas para trabalha conosco é necessário
								possui um veículo.</span>
						</div>
					</div>
					<!-- Start .\ Possui habilitação -->
					<div class="col-md-12 text-center d-block">
						<label for="habilitacao">Você possui habilitação categoria A?</label><br />
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" class="custom-control-input" id="habilitacao_sim" name="habilitacao">
							<label class="custom-control-label" for="habilitacao_sim">Sim</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" class="custom-control-input" id="habilitacao_nao" name="habilitacao">
							<label class="custom-control-label" for="habilitacao_nao">Não</label>
						</div>
					</div>
					<!-- End .\ Possui habilitação -->

					<!-- Start .\ Tempo de habilitação -->
					<div class="col-md-12 text-center">
						<label for="tempo_habilitado">Você está habilitado na categoria A pelo menos á 2
							anos?</label><br />
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" class="custom-control-input" id="tempo_sim" name="tempo_habilitado">
							<label class="custom-control-label" for="tempo_sim">Sim</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" class="custom-control-input" id="tempo_nao" name="tempo_habilitado">
							<label class="custom-control-label" for="tempo_nao">Não</label>
						</div>
					</div>
					<!-- End .\ Tempo de habilitação -->

					<!-- Start .\ Possui veículo -->
					<div class="col-md-12 text-center">
						<label for="habilitacao">Você possui uma moto para trabalhar?</label><br />
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" class="custom-control-input" id="moto_sim" name="veiculo">
							<label class="custom-control-label" for="moto_sim">Sim</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" class="custom-control-input" id="moto_nao" name="veiculo">
							<label class="custom-control-label" for="moto_nao">Não</label>
						</div>
					</div>
					<!-- End .\ Possui veículo -->

					<!-- Start .\ Possui Data nascimento -->
					<div class="col-md-12">
						<label for="idade21">Para trabalhar conosco, deve ter no mínimo 21 anos.</label><br />
						<input type="date" class="form-control" id="nascimento" name="nascimento" style="width: 50%" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
					</div>
					<!-- End .\ Possui Data nascimento -->

					<!-- Informações pessoais -->
					<div class="col-12">
						<h2>Informações pessoais</h2>
						<hr />

						<!-- Campo Nome -->
						<div class="col-md-5">
							<div class="form-group">
								<label for="nome">Nome</label>
								<input type="text" class="form-control" id="nome" placeholder="Seu nome completo"
									name="nome" maxlength="100" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						<!-- End .\ campo Nome -->

						<!-- Campo CPF -->
						<div class="col-md-3">
							<div class="form-group">
								<label for="cpf">Número do CPF</label>
								<input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" name="cep"
									required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						<!-- End .\ Campo CPF -->

						<!-- Campo CNH -->
						<div class="col-md-3">
							<div class="form-group">
								<label for="cnh">Número da CNH</label>
								<input type="text" class="form-control" id="cnh" placeholder="00000000000" name="cnh"
									required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						<!-- End .\ Campo CNH -->

						<!-- Campo E-mail -->
						<div class="col-md-4">
							<div class="form-group">
								<label for="email">E-mail</label>
								<input type="email" class="form-control" id="email" placeholder="seuemail@exemplo.com"
									name="email" maxlength="100" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						<!-- End .\ Campo E-mail -->

						<!-- Campo Telefone -->
						<div class="col-md-3">
							<div class="form-group">
								<label for="contato">Contato</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroupPrepend2"><i
												class="fas fa-phone"></i></span>
									</div>
									<input type="text" class="form-control" id="validationDefaultUsername"
										placeholder="(XX) XXXXX-XXXX" aria-describedby="inputGroupPrepend2" required>
								</div>
							</div>
						</div>
						<!-- End .\ Campo Telefone -->

						<div class="col-12 text-right">
							<button type="button" class="btn btn-success btn-prox">Próximo</button>
						</div>
					</div>

					<!-- Informações pessoais -->
					<div class="col-12">
						<h2>Informações pessoais</h2>
						<hr />
						<!-- Campo Gênero -->
						<div class="col-md-3">
							<div class="form-group">
								<label for="sexo">Sexo</label><br />
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="Masculino" name="sexo"
										value="Masculino">
									<label class="custom-control-label" for="Masculino">Masculino</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="Feminino" name="sexo"
										value="Feminino">
									<label class="custom-control-label" for="Feminino">Feminino</label>
								</div>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						<!-- End .\ Campo Gênero -->

						<!-- Campo Estado Civil -->
						<div class="col-md-2">
							<div class="form-group">
								<label for="estado_civil">Estado Civil</label>
								<select class="form-control" id="estado_civil" name="estado_civil">
									<option disabled selected>Selecione</option>
									<option>Solteiro (a)</option>
									<option>Casado (a)</option>
									<option>Viúvo (a)</option>
									<option>Separado (a)</option>
									<option>Divorciado (a)</option>
									<option>União Estável</option>
									<option>Outro</option>
								</select>
							</div>
						</div>
						<!-- End .\ Campo Estado Civil -->


						<!-- Campo Filhos -->
						<div class="col-md-2">
							<div class="form-group">
								<label for="filhos">Número de filhos</label>
								<input type="number" class="form-control" min="0" max="20" id="filhos" value="0"
									name="filhos" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						<!-- End .\ Campo Filhos -->

						<!--  Campo Moradia -->
						<div class="col-md-3">
							<div class="form-group">
								<label for="sexo">Moradia</label><br />
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="moradia_sim" name="moradia"
										value="casa">
									<label class="custom-control-label" for="moradia_sim">Casa própria</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="moradia_nao" name="moradia"
										value="aluguel">
									<label class="custom-control-label" for="moradia_nao">Aluguel</label>
								</div>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						<!-- End .\ Campo Moradia -->

						<!--  Campo Trabalha outro serviço -->
						<div class="col-md-3">
							<div class="form-group">
								<label for="sexo">Você trabalha em outro serviço?</label><br />
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="trabalha_sim" name="trabalha"
										value="casa">
									<label class="custom-control-label" for="trabalha_sim">Sim</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" id="trabalha_nao" name="trabalha"
										value="aluguel">
									<label class="custom-control-label" for="trabalha_nao">Não</label>
								</div>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						<!-- End .\ Campo Trabalha outro serviço -->



						<div class="col-12 text-right">
							<button type="button" class="btn btn-success btn-prox">Próximo</button>
						</div>
					</div>
					<!-- -->
				</div>
			</form>
			<!-- End .\ Formulário -->
		</div>
	</section>
	<!-- End .\ Section de cadastro -->
	<div class="container d-none">
		<div class="row">
			<div class="col">
				<h2 class="text-center d-none">Preecha o formulário abaixo:</h2>
				<p class="d-none">Preencha o cadastro abaixo, e aguarde seus dados serem aprovados.</p>
				<form action="/action_page.php" class="needs-validation" novalidate>

					<!-- Possui veículo -->
					<div class="row d-none">
						<div class="col-md-12 text-center">
							<label for="possui_moto">Você possui uma moto?</label><br />
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="sim" name="casa" value="1">
								<label class="custom-control-label" for="sim">Sim</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="nao" name="casa" value="0">
								<label class="custom-control-label" for="nao">Não</label>
							</div>
						</div>
					</div>

					<div class="d-none">
						<!-- Formulário Informações Pessoais -->
						<h2>Informações Pessoais</h2>
						<hr />
						<div class="row">
							<!-- campo Nome -->
							<div class="col-md-8">
								<div class="form-group">
									<label for="nome">Nome</label>
									<input type="text" class="form-control" id="nome" placeholder="Seu nome completo"
										name="nome" maxlength="100" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<!-- campo E-mail -->
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">E-mail</label>
									<input type="email" class="form-control" id="email"
										placeholder="seuemail@exemplo.com" name="email" maxlength="100" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<!-- Campo Telefone -->
							<div class="col-md-3">
								<div class="form-group">
									<label for="contato">Contato</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="inputGroupPrepend2"><i
													class="fas fa-phone"></i></span>
										</div>
										<input type="text" class="form-control" id="validationDefaultUsername"
											placeholder="(XX) XXXXX-XXXX" aria-describedby="inputGroupPrepend2"
											required>
									</div>
								</div>
							</div>
							<!-- campo CPF -->
							<div class="col-md-3">
								<div class="form-group">
									<label for="cpf">CPF: <span>*</span></label>
									<input type="text" class="form-control" id="cpf" placeholder="000.000.000-00"
										name="cep" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<!-- campo CNH -->
							<div class="col-md-3">
								<div class="form-group">
									<label for="cnh">CNH: <span>*</span></label>
									<input type="text" class="form-control" id="cnh" placeholder="00000000000"
										name="cnh" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<!-- campo Data Nascimento -->
							<div class="col-md-3">
								<div class="form-group">
									<label for="nascimento">Data de Nascimento: <span>*</span></label>
									<input type="date" class="form-control" id="nascimento" name="nascimento" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label for="estado_civil">Estado Civil: <span>*</span></label>
									<select class="form-control" id="estado_civil" name="estado_civil">
										<option disabled selected>Selecione</option>
										<option>Solteiro (a)</option>
										<option>Casado (a)</option>
										<option>Viúvo (a)</option>
										<option>Separado (a)</option>
										<option>Divorciado (a)</option>
										<option>União Estável</option>
										<option>Outro</option>
									</select>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="filhos">Número de filhos:</label>
									<input type="number" class="form-control" min="0" max="20" id="filhos" value="0"
										name="filhos" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<!-- campo Gênero -->
							<div class="col-md-3">
								<div class="form-group">
									<label for="sexo">Gênero: <span>*</span></label><br />
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" class="custom-control-input" id="Masculino" name="sexo"
											value="Masculino">
										<label class="custom-control-label" for="Masculino">Masculino</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" class="custom-control-input" id="Feminino" name="sexo"
											value="Feminino">
										<label class="custom-control-label" for="Feminino">Feminino</label>
									</div>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<!-- campo Aluguel ou casa própria -->
							<div class="col-md-3">
								<div class="form-group">
									<label for="sexo">Possui casa própria: <span>*</span></label><br />
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" class="custom-control-input" id="sim" name="casa" value="1">
										<label class="custom-control-label" for="sim">Sim</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" class="custom-control-input" id="nao" name="casa" value="0">
										<label class="custom-control-label" for="nao">Não</label>
									</div>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
						</div>
						<h2>Endereço</h2>
						<hr />
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label for="cep">Cep</label>
									<input type="text" class="form-control" id="cep" placeholder="00000-000" name="cep"
										required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="endereco">Endereço:</label>
									<input type="text" class="form-control" id="endereco" placeholder="Endereço"
										name="endereco" readonly required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="endereco">Complemento <small
											class="text-muted">(Opcional)</small></label>
									<input type="text" class="form-control" id="complemento" placeholder="Complemento"
										name="complemento">
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="bairro">Bairro:</label>
									<input type="text" class="form-control" id="bairro" placeholder="Bairro"
										name="bairro" readonly required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="cidade">Cidade:</label>
									<input type="text" class="form-control" id="cidade" placeholder="Cidade"
										name="cidade" readonly required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="estado">Estado:</label>
									<input type="text" class="form-control" id="estado" placeholder="Estado"
										name="estado" readonly required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			</form>
		</div>
	</div>
	</div>

	</section>
	<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?=base_url('assets/js/popper.min.js')?>"></script>
	<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('assets/js/app.js')?>"></script>
</body>

</html>