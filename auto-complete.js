jQuery(document).ready(function ($) {
	//COPIA Y PEGA IMAGEN
	////funcion random fecha
	/*		var date =new Date();
  var components = [
	  date.getYear(),
	  date.getMonth(),
	  date.getDate(),
	  date.getHours(),
	  date.getMinutes(),
	  date.getSeconds()
	  
  ];
  
  var ids = components.join("");
  */

	/*var ids =Date.now() + Math.random();	*/

	/*var ids = moment().format('DMMMYYYY');*/
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth() + 1; //January is 0!
	var yyyy = today.getFullYear();

	if (dd < 10) {
		dd = "0" + dd;
	}

	if (mm < 10) {
		mm = "0" + mm;
	}

	today = mm + dd + yyyy;
	var ids = today + Math.floor(Math.random() * 100000 + 1);

	$("div.demo").each(function (i, el) {
		var paste = new $.paste()
			.appendTo(el)

			.on("focus", function () {
				$(el).css("background-color", "steelblue");
			})

			.on("blur", function () {
				$(el).css("background-color", "");
			})

			.on("pasteImage", function (ev, data) {
				// $('.demodentro').css('display', 'none');

				//$('<img id="canvasimage" src="' + data.dataURL + '" width="500px" height="350px"/>').appendTo(el);

				$(".demodentro").html(
					'<img id="canvasimage" src="' +
					data.dataURL +
					'" width="500px" height="350px"/>'
				);

				/*$('.demodentro').html('<img id="canvasimage" src="/wp-content/143.gif" width="500px" height="350px"/>');*/

				data = $("#canvasimage").attr("src");

				//////////////////////
				$.ajax({
					type: "POST",

					url: "/wp-content/guarda_imagen.php",

					dataType: "text",

					data: {
						file: data,
						id: ids,
					},
					dataType: "json",
				}).done(function (msg) {
					/*alert( "success" );*/
					/*alert(msg.imagen_nombre );*/
					$(".imagen_testigo input").val(msg.imagen_nombre);
					$(".demodentro").html(
						'<img id="canvasimage" src="' +
						msg.imagen_nombre +
						'" width="500px" height="350px"/>'
					);
				});

				////////////////
				$(el).css("background-color", "");

				//image(' + data.width + 'x' + data.height + '):
			})

			.on("pasteText", function (ev, data) {
				//$('<p>text: ' + data.text + '</p>').appendTo(el);
			});

		$(el).click(function () {
			$(paste).focus();
		});

		if (i == 0) {
			paste.focus();
		}
	});

	/*Numero de cliente*/
	jQuery(".numero_cliente input")
		.autocomplete({
			search: function () {
				$(this).addClass("working");
			},
			open: function () {
				$(this).removeClass("working");
			},
			delay: 500,
			minLength: 3,
			source: function (request, response) {
				var tag = jQuery(".numero_cliente input").val();
				jQuery.getJSON(
					"/wp-content/clientes.php?nombre=&clave=" + tag + "&eligio=0",
					{
						q: request.term,
						page_limit: 10,
					},
					function (data) {
						console.log(data);
						var array = data.error
							? []
							: jQuery.map(data.Datos.Datos, function (m) {
								return {
									Clave: m.Clave,
									RazonSocial: m.RazonSocial,
									RazonComercial: m.RazonComercial,
									RFC: m.RFC,
									EstatusCredito: m.EstatusCredito,
									Domicilio: m.Domicilio,
									Telefono: m.Telefono,
									Email: m.Email,
								};
							});
						response(array);
					}
				);
			},
			focus: function (event, ui) {
				event.preventDefault();
			},
			select: function (event, ui) {
				/*alert("NO entro");
			alert(ui.item.Clave);*/
				$(".numero_cliente input").val(ui.item.Clave);
				if (ui.item.RazonSocial == "PUBLICO EN GENERAL") {
					$(".rfc input").val("...");
					$(".mail input").val("uniprint@uniprint.com");
				} else {
					$(".rfc input").val(ui.item.RFC);
					$(".mail input").val(ui.item.Email);
				}
				$(".razon_social input").val(ui.item.RazonSocial);
				$(".razon_comercial input").val(ui.item.RazonComercial);
				$(".direccion input").val(ui.item.Domicilio);
				$(".telefono input").val(ui.item.Telefono);
				$(".contado input").val(ui.item.EstatusCredito);

				return false;
			},
		})
		.data("ui-autocomplete")._renderItem = function (ul, item) {
			return $("<li>")
				.append(
					"<a  class='autocompletado'>" +
					"N.Cliente: " +
					item.Clave +
					" | " +
					"R.F.C: " +
					item.RFC +
					" <br> " +
					"R.Social: " +
					item.RazonSocial +
					" | " +
					"R.Comercial: " +
					item.RazonComercial +
					"</a>"
				)
				.appendTo(ul);
		};

// planeacion de produccion 


	/*RFC*/
	jQuery(".rfc input")
		.autocomplete({
			search: function () {
				$(this).addClass("working");
			},
			open: function () {
				$(this).removeClass("working");
			},
			delay: 500,
			minLength: 3,
			source: function (request, response) {
				var tag = jQuery(".rfc input").val();
				jQuery.getJSON(
					"/wp-content/clientes.php?nombre=&clave=" + tag + "&eligio=2",
					{
						q: request.term,
						page_limit: 10,
					},
					function (data) {
						var array = data.error
							? []
							: jQuery.map(data.Datos.Datos, function (m) {
								return {
									Clave: m.Clave,
									RazonSocial: m.RazonSocial,
									RazonComercial: m.RazonComercial,
									RFC: m.RFC,
									EstatusCredito: m.EstatusCredito,
									Domicilio: m.Domicilio,
									Telefono: m.Telefono,
									Email: m.Email,
								};
							});
						response(array);
					}
				);
			},
			focus: function (event, ui) {
				event.preventDefault();
			},
			select: function (event, ui) {
				/*alert("NO entro");
			alert(ui.item.Clave);*/
				$(".numero_cliente input").val(ui.item.Clave);
				$(".rfc input").val(ui.item.RFC);
				$(".mail input").val(ui.item.Email);
				$(".razon_social input").val(ui.item.RazonSocial);
				$(".razon_comercial input").val(ui.item.RazonComercial);
				$(".direccion input").val(ui.item.Domicilio);
				$(".telefono input").val(ui.item.Telefono);
				$(".contado input").val(ui.item.EstatusCredito);

				return false;
			},
		})
		.data("ui-autocomplete")._renderItem = function (ul, item) {
			return $("<li>")
				.append(
					"<a  class='autocompletado'>" +
					"N.Cliente: " +
					item.Clave +
					" | " +
					"R.F.C: " +
					item.RFC +
					" <br> " +
					"R.Social: " +
					item.RazonSocial +
					" | " +
					"R.Comercial: " +
					item.RazonComercial +
					"</a>"
				)
				.appendTo(ul);
		};

	/*Raz?0?1?0?6n social*/
	jQuery(".razon_social input")
		.autocomplete({
			search: function () {
				$(this).addClass("working");
			},
			open: function () {
				$(this).removeClass("working");
			},
			delay: 500,
			minLength: 3,
			source: function (request, response) {
				var tag = jQuery(".razon_social input").val();
				jQuery.getJSON(
					"/wp-content/clientes.php?nombre=&clave=" + tag + "&eligio=1",
					{
						q: request.term,
						page_limit: 10,
					},
					function (data) {
						var array = data.error
							? []
							: jQuery.map(data.Datos.Datos, function (m) {
								return {
									Clave: m.Clave,
									RazonSocial: m.RazonSocial,
									RazonComercial: m.RazonComercial,
									RFC: m.RFC,
									EstatusCredito: m.EstatusCredito,
									Domicilio: m.Domicilio,
									Telefono: m.Telefono,
									Email: m.Email,
								};
							});
						response(array);
					}
				);
			},
			focus: function (event, ui) {
				event.preventDefault();
			},
			select: function (event, ui) {
				/*alert("NO entro");
			alert(ui.item.RazonSocial);*/
				$(".numero_cliente input").val(ui.item.Clave);
				if (ui.item.RazonSocial == "PUBLICO EN GENERAL") {
					$(".rfc input").val("...");
					$(".mail input").val("uniprint@uniprint.com");
				} else {
					$(".rfc input").val(ui.item.RFC);
					$(".mail input").val(ui.item.Email);
				}

				$(".razon_social input").val(ui.item.RazonSocial);
				$(".razon_comercial input").val(ui.item.RazonComercial);
				$(".direccion input").val(ui.item.Domicilio);
				$(".telefono input").val(ui.item.Telefono);
				$(".contado input").val(ui.item.EstatusCredito);

				return false;
			},
		})
		.data("ui-autocomplete")._renderItem = function (ul, item) {
			return $("<li>")
				.append(
					"<a  class='autocompletado'>" +
					"N.Cliente: " +
					item.Clave +
					" | " +
					"R.F.C: " +
					item.RFC +
					" <br> " +
					"R.Social: " +
					item.RazonSocial +
					" | " +
					"R.Comercial: " +
					item.RazonComercial +
					"</a>"
				)
				.appendTo(ul);
		};

	/*Raz?0?1?0?6n comercial*/
	jQuery(".razon_comercial input")
		.autocomplete({
			search: function () {
				$(this).addClass("working");
			},
			open: function () {
				$(this).removeClass("working");
			},
			delay: 500,
			minLength: 3,
			source: function (request, response) {
				var tag = jQuery(".razon_comercial input").val();
				jQuery.getJSON(
					"/wp-content/clientes.php?nombre=&clave=" + tag + "&eligio=3",
					{
						q: request.term,
						page_limit: 10,
					},
					function (data) {
						var array = data.error
							? []
							: jQuery.map(data.Datos.Datos, function (m) {
								return {
									Clave: m.Clave,
									RazonSocial: m.RazonSocial,
									RazonComercial: m.RazonComercial,
									RFC: m.RFC,
									EstatusCredito: m.EstatusCredito,
									Domicilio: m.Domicilio,
									Telefono: m.Telefono,
									Email: m.Email,
								};
							});
						response(array);
					}
				);
			},
			focus: function (event, ui) {
				event.preventDefault();
			},
			select: function (event, ui) {
				/*alert("NO entro");
			alert(ui.item.Clave);*/
				$(".numero_cliente input").val(ui.item.Clave);
				$(".rfc input").val(ui.item.RFC);
				$(".mail input").val(ui.item.Email);
				$(".razon_social input").val(ui.item.RazonSocial);
				$(".razon_comercial input").val(ui.item.RazonComercial);
				$(".direccion input").val(ui.item.Domicilio);
				$(".telefono input").val(ui.item.Telefono);
				$(".contado input").val(ui.item.EstatusCredito);

				return false;
			},
		})
		.data("ui-autocomplete")._renderItem = function (ul, item) {
			return $("<li>")
				.append(
					"<a  class='autocompletado'>" +
					"N.Cliente: " +
					item.Clave +
					" | " +
					"R.F.C: " +
					item.RFC +
					" <br> " +
					"R.Social: " +
					item.RazonSocial +
					" | " +
					"R.Comercial: " +
					item.RazonComercial +
					"</a>"
				)
				.appendTo(ul);
		};

	//FACTURACI?0?1?CN

	jQuery(".facturacion input").change(function () {
		var val1 = jQuery(".facturacion input:checked").val();
		/*alert(val1);*/
		var val2 = jQuery(".numero_cliente input").val();
		var val3 = jQuery(".rfc input").val();
		var val4 = jQuery(".mail input").val();
		var val5 = jQuery(".razon_social input").val();
		var val6 = jQuery(".razon_comercial input").val();
		var val7 = jQuery(".direccion input").val();
		var val8 = jQuery(".telefono input").val();
		var val9 = jQuery(".nombre_trabajo input").val();
		if (val1 == "Si") {
			$(".numero_cliente_2 input").val(val2);
			$(".rfc_2 input").val(val3);
			$(".mail_2 input").val(val4);
			$(".razon_social_2 input").val(val5);
			$(".razon_comercial_2 input").val(val6);
			$(".direccion_2 input").val(val7);
			$(".telefono_2 input").val(val8);
			$(".nombre_trabajo_2 input").val(val9);
		} else {
			$(".numero_cliente_2 input").val("");
			$(".rfc_2 input").val("");
			$(".mail_2 input").val("");
			$(".razon_social_2 input").val("");
			$(".razon_comercial_2 input").val("");
			$(".direccion_2 input").val("");
			$(".telefono_2 input").val("");
			$(".nombre_trabajo_2 input").val("");
		}
	});

	/*Puntos de env???0?9o*/
	/*li[class^="lugarenvio_"] select
	  input_1_48*/
	jQuery(".lugarenvio select").change(function () {
		/*alert('entro1');*/
		var val1 = jQuery(this).val();
		/*alert(val1);*/
		var val3 = jQuery(this).parents().eq(1).attr("class");
		/*alert(val3);*/
		var res5 = val3.split(" ");
		var res = res5[2];
		/*alert(res);*/
		if (val1 == "Almacen") {
			/*alert('entro1');*/
			jQuery(".entrega_" + res + " input").val("Almacenista");
			jQuery(".direccion_" + res + " textarea").val("Almacen");
		}
		if (val1 == "Otro") {
			jQuery(".entrega_" + res + " input").val("");
			jQuery(".direccion_" + res + " textarea").val("");
		}
		if (val1 == "Centro Megamedia Sucursal Centro") {
			/*alert('entro1123');*/
			/*alert(".entrega_"+res);*/
			jQuery(".entrega_" + res + " input").val("Brenda Sosa");
			jQuery(".direccion_" + res + " textarea").val(
				"C. 60 # 521 x 67 y 65 Centro Tel. 942 22 22 y 928 01 62"
			);
		}
		if (val1 == "Centro Megamedia Francisco de Montejo") {
			jQuery(".entrega_" + res + " input").val("Ariel Conrado");
			jQuery(".direccion_" + res + " textarea").val(
				"C. 51 x 42 Francisco de Montejo Tel. 953 67 20, 953 67 21"
			);
		}
		if (val1 == "Centro Megamedia Garc???0?9a Gineres") {
			jQuery(".entrega_" + res + " input").val(
				"Mar???0?9a Luisa ?0?10?6?99lvarez"
			);
			jQuery(".direccion_" + res + " textarea").val(
				"C. 17 # 200 Loc. O x 18 y 20 Garc???0?9a Giner???0?7s Tel. 925 34 21, 920 08 51"
			);
		}
		if (val1 == "Centro Megamedia Campestre") {
			jQuery(".entrega_" + res + " input").val("Selmy Palomo");
			jQuery(".direccion_" + res + " textarea").val(
				"Prolongaci???0?3n Paseo de Montejo #250 Loc. 4 Tel. 944 17 14, 944 17 13"
			);
		}
		if (val1 == "Centro Megamedia Plaza Dorada") {
			jQuery(".entrega_" + res + " input").val("Teresa Rodr???0?9guez");
			jQuery(".direccion_" + res + " textarea").val(
				"C. 50 #130d Depto.11 Miguel Hidalgo Tel. 945 59 80 y 9 45-70-52"
			);
		}
		if (val1 == "Centro Megamedia Plaza Oriente") {
			jQuery(".entrega_" + res + " input").val("Zuhey Almeida");
			jQuery(".direccion_" + res + " textarea").val(
				"C. 65 #199 Loc. 29 x Circuito Colonias Col. Cort???0?7s Sarmiento Tel. 983 03 81 y 983 45 07"
			);
		}
		if (val1 == "Centro Megamedia Plaza Fiesta") {
			jQuery(".entrega_" + res + " input").val("Jos???0?7 Chac???0?3n");
			jQuery(".direccion_" + res + " textarea").val(
				"C. 6 #400 Loc. 11 x 21 Col. D???0?9az Ordaz Tel. 943 23 08"
			);
		}
		if (val1 == "Centro Megamedia Progreso") {
			jQuery(".entrega_" + res + " input").val("");
			jQuery(".direccion_" + res + " textarea").val(
				"Calle 31 No. 143, entre 78 y 80, Centro. Tel: 01 (969 93) 5-24-34"
			);
		}
		if (val1 == "Centro Megamedia Ciudad del Carmen") {
			jQuery(".entrega_" + res + " input").val("");
			jQuery(".direccion_" + res + " textarea").val(
				"Prolongaci???0?3n de la avenida 56 No. 40, entre Av.Colosio y calle 19, colonia Benito Ju???0?4rez. Tel: 01 (938 11) 1-00-32"
			);
		}
		if (val1 == "Centro Megamedia Cancun") {
			jQuery(".entrega_" + res + " input").val("");
			jQuery(".direccion_" + res + " textarea").val(
				"SM 64 M 12 Lote 18, entre 9 y 10. Tel:01 (998 88) 3-92-41, 01 (998 88) 3-92-42, 01 (998 89) 8-05-82, 01 (998 89) 8-41-61"
			);
		}
		if (val1 == "Centro Megamedia Campeche") {
			jQuery(".entrega_" + res + " input").val("");
			jQuery(".direccion_" + res + " textarea").val(
				"Calle 12 No. 124 con 53, Centro Tel: 01 (981 81) 6-48-41, 01 (981 81) 6-79-96 y 01 (981 81) 1-52-62"
			);
		}
	});

	$(".contado_dos").css("display", "none");
	$(".con_check").click(function () {
		if ($(".con_check input").is(":checked")) {
			$(".contado_dos").css("display", "block");
			$(".contado").css("display", "none");
		} else {
			$(".contado").css("display", "block");
			$(".contado_dos").css("display", "none");
		}
	});
});
