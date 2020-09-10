
$(".btnedit").click( (e) => {
	let textValues = displayData(e);

	let id = $("input[name*='book_id']");
	let book_name = $("input[name*='book_name']");
	let book_publisher = $("input[name*='book_publisher']");
	let book_price = $("input[name*='book_price']");

	//metodo val, do jquery, modifica o valor do campo
	id.val(textValues[0]);
	book_name.val(textValues[1]);
	book_publisher.val(textValues[2]);
	book_price.val(textValues[3].replace("$", ""));
});


function displayData(e) {
	let id = 0;
	// tds são os elemntos da tabelma <td> <\td>
	const tds = $("#tbody tr td"); // isso é um array de <td>s
	let textValues = [];

	// dataset é atributo que esta nas tags --> <td data-id >
	// 'e' é o elemento que foi clicado, no cado um botão(ícone) de editar, também tem o atributo --> <i data-id >
	for (const td of tds) {
		if (td.dataset.id == e.target.dataset.id) {
			textValues[id++] = td.textContent; 
		}
	}
	return textValues;
}