function movDelete(id) {
	if(confirm("Deseja apagar este registro?")) {
		window.location.href = 'movimentacao_financeira/destroy/' + id;
	} else {
		return false;
	}
}

function contDelete(id) {
	if(confirm("Deseja apagar este registro?")) {
		window.location.href = 'conta_bancaria/destroy/' + id;
	} else {
		return false;
	}
}

$(function () {
	$("#valor").mask("#0.00", {reverse: true});
});

$(function () {
	$("#saldo").mask("#0.00", {reverse: true});
});
