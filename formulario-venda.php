<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Lista</a></li>
				<li class="breadcrumb-item active" aria-current="page">
					Cadastrar Venda
				</li>
			</ol>
		</nav>

		<h1>Cadastrar Venda</h1>

		<div class="mb-3">
			<label for="valor" class="form-label">Valor</label>
			<input type="number" class="form-control" placeholder="Valor da Venda" id="valor">
		</div>
		<button type="button" class="btn btn-success" id="btn_enviar">Enviar</button>
	</div>
</main>

<script>
	$(function() {
		$(document).on('click', '#btn_enviar', function() {
			var valor = $('#valor').val();

			$.ajax({
				url: 'vendas/insert.php',
				type: 'post',
				data: {
					valor
				}
			}).done(res => {
				var json = JSON.parse(res);
				// alert(json.mensagem);
				window.location.href = "lista-venda";
			});
		});
	});
</script>