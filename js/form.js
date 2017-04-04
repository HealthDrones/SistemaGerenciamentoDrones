function validaNome(form){
			if (form.nome.value.length<6) {
				document.getElementById("divNome").innerHTML = "<input class='form-control-err' onblur='validaNome(this.form);' id='nome' name='nome' value='"+form.nome.value+"' required type='text' autocomplete='off'><label for='last_name'>Digite um nome válido</label>";
				form.nome.focus();
			} 
		}
function validaCPF(form){
	if (form.cpf.value.length<14) {
		document.getElementById("divCPF").innerHTML = "<input class='validate' onkeydown='Mascara(this,Cpf);' onkeypress='Mascara(this,Cpf);' onkeyup='Mascara(this,Cpf);' onblur='validaCPF(this.form);' length='14' id='cpf' name='cpf' value='"+form.cpf.value +"' required type='text' autocomplete='off'><label for='cpf'>Digite um CPF válido</label>";
		form.cpf.focus();
	} 
}
function validaPeriodo(form){
	if (form.periodo.value.length<6) {
		document.getElementById("divPeriodo").innerHTML = "Digite seu Período completo. Ex.: 1º Período.<input class='form-control-err' onblur='validaPeriodo(this.form);' placeholder='Perído' id='periodo' name='periodo' value='"+form.periodo.value+"' required type='text' autocomplete='off'>";
		form.periodo.focus();
	} 
}
function validaCurso(form){
	if (form.curso.value.length<6) {
		document.getElementById("divCurso").innerHTML = "Digite o nome do seu curso <input class='form-control-err' onblur='validaCurso(this.form);' placeholder='Curso' id='curso' name='curso' value='"+form.curso.value+"' required type='text' autocomplete='off'>";
	} 
}
function validaEmail(form){
	emailTeste = new String(document.getElementById("email").value);
	re = /^[^@]+@[^@]+.[a-z]{2,}$/i;
	if(emailTeste.search(re) == -1){
		document.getElementById("divEmail").innerHTML = "<input class='form-control-err' onblur='validaEmail(this.form);' placeholder='Email' id='email' name='email' value='"+emailTeste+"' required type='text' autocomplete='off'><label for='email'>Digite um Email Válido</label>";
		form.email.focus();//Digite um email válido. Exemplo: seunome@servidor.com.br 
	} 
}
function validaUsuario(form) {
	if((!document.getElementById("login").value=="" || !document.getElementById("login").value==" ")){
		$.ajax({
			url: 'procuraLogin.php',
			type: 'post',
			data: {login: document.getElementById("login").value},
			success: function(data) {
				if(data == "Login existente"){
					document.getElementById("divUsuario").innerHTML = "Usuário Existente... Favor informar outro<input class='validate' onblur='validaUsuario(this.form);' id='login' name='login' value='"+form.login.value+"' required type='text' autocomplete='off'>";
//							form.login.focus();
				}else{
					document.getElementById("divUsuario").innerHTML = "<input class='validate' onblur='validaUsuario(this.form);' id='login' name='login' value='"+form.login.value+"' required type='text' autocomplete='off'>";
				}
			},
			error: function(data) {

			}
		});
	} else{
		document.getElementById("divUsuario").innerHTML = "Digite um nome de Usuário.<input class='form-control-err' onblur='validaUsuario(this.form);' placeholder='Usu�rio' id='login' name='login' value='"+form.login.value+"' required type='text' autocomplete='off'>";
		form.login.focus();
	}
}
function validaSenha(form){
	if(form.senha.value.length<5){
		document.getElementById("divSenha").innerHTML = "A senha deve conter pelo menos 6 dígitos.<input class='form-control-err' onblur='validaSenha(this.form);' placeholder='Senha' id='senha' name='senha' value='"+form.senha.value+"' required type='password'>";
	}else{
		document.getElementById("divSenha").innerHTML = "<input class='form-control-corr' onblur='validaSenha(this.form);' placeholder='Senha' id='senha' name='senha' value='"+form.senha.value+"' required type='password'>";
	}
}
function validaSenhaRep(form){
	if(form.senhaRep.value!=form.senha.value){
		document.getElementById("divSenhaConf").innerHTML = "As duas senhas não são iguais.<input class='form-control-err' onblur='validaSenhaRep(this.form);' placeholder='Repita a Senha' id='senhaRep' name='senhaRep' value='"+form.senhaRep.value+"' required type='password'>";
//				form.senhaRep.focus();
	}else{
		document.getElementById("divSenhaConf").innerHTML = "<input class='form-control-corr' onblur='validaSenhaRep(this.form);' placeholder='Repita a Senha' id='senhaRep' name='senhaRep' value='"+form.senhaRep.value+"' required type='password'>";
	}
}

function getRadioValue() {
    if(document.getElementById('radio1').checked==true){
    	return '1';
    }
    else{
    	return '2';
    }
}


$("#enviarCadastro").click(function(e) {
	emailTeste = new String(document.getElementById("email").value);
	re = /^[^@]+@[^@]+.[a-z]{2,}$/i;
	if(document.getElementById("nome").value=="" || document.getElementById("nome").value==" "){
		alert("Por favor informe um nome válido :}");
	}else if(emailTeste.search(re) == -1){
		alert("Por favor informe um Email válido :}");
	}else if((!document.getElementById("login").value=="" || !document.getElementById("login").value==" ") && (!document.getElementById("senha").value=="")){
		$.ajax({
			url: 'procuraLogin.php',
			type: 'post',
			data: {login: document.getElementById("login").value},
			success: function(data) {
				if(data == "Login existente"){
					alert("Esse login já existe, por favor informe outro :}");
				}else{
					$.ajax({
						url: 'novoCadastro.php',
						type: 'post',
						data: {nome: document.getElementById("nome").value, email: document.getElementById("email").value, login: document.getElementById("login").value, senha: document.getElementById("senha").value, cpf: document.getElementById("cpf").value, cidade: document.getElementById("cidade").value, instituicao: document.getElementById("instituicao").value, nomeCracha: document.getElementById("nomeCracha").value, categoria: document.getElementById("categoria").value},
						success: function(data) {
							document.getElementById("nome").disabled = true;
							document.getElementById("nomeCracha").disabled = true;
							document.getElementById("email").disabled = true;
							document.getElementById("login").disabled = true;
							document.getElementById("senha").disabled = true;
							document.getElementById("senhaRep").disabled = true;
							document.getElementById("cpf").disabled = true;
							document.getElementById("cidade").disabled = true;
							document.getElementById("instituicao").disabled = true;
							document.getElementById("categoria").disabled = true;
							document.getElementById("enviarCadastro").disabled = true;
							document.getElementById("limpar").disabled = true;
							alert("Cadastro Realizado com sucesso! OBS: A inscrição será confirmada após o depósito de pagamento e o anexo do comprovante de depósito (em formato jpeg, png ou jpg) no seu cadastro.");
							document.getElementById("entrar").click();
//									document.getElementById("console").className = "bs-old-docs-sucess";
//									document.getElementById("console").innerHTML = "<div class='container'><p>Cadastro Realizado com sucesso... Você já pode entrar na nossa plataforma<a href='index.php'> Clique aqui e acesse o sistema de inscrições em minicursos</a></p></div>";
							
						},
						error: function(data) {
							alert("Nao funcionou")
						}
					});
				}
			},
			error: function(data) {

			}
		});
	}else{
		document.getElementById("console").innerHTML = "<div class='container'><p>Informe todos os dados!</p></div>";
	}
});