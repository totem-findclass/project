// Javascript do teclado

function Senha(valor)
{
	//Objeto de acesso ao campo hidden senha
	var senha = document.getElementById("login");
	senha.value += valor;
}

function Limpa()
{
	var senha = document.getElementById("login");
	senha.value = "";
}

function Valida()
{
	var senha = document.getElementById("login");
	//Valida algum valor foi digitado
	if(!senha.value)
	{
		alert("Utilize o teclado virtual para preencher a senha !");
		return false;
	}
	
	//valida o tamanho da senha, pode ser alterada ou excluida
	if(senha.value.length < 10)
	{
		alert("A senha deve possuir no mínimo 6 números !");
		return false;
	}
}