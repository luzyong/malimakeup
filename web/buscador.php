<?php
//CÓDIGO PARA HACER FUNCIONAR EL BUSCADOR. LUZ YONG 2020
$busqueda = $_GET["search"];
$buscar=strtoupper($busqueda);
$actual;
switch ($buscar) {
	case 'MAQUILLAJE':
		header("location:contact.html");
		
		break;
	case 'PEINADO':
		header("location:contact.html");
		break;
	case 'COMPRAR':
		header("location:about.html");
		break;
	case 'AMOR':
		header("location:amor.html");
		break;
	case 'AMOR US':
		header("location:amor.html");
		break;
	case "BISU":
		header("location:bissu.html");
		break;
	case "BISSU":
		header("location:bissu.html");
		break;
	case "BISSÚ":
		header("location:bissu.html");
		break;
	case "PRIMER":
		header("location:primer.html");
		break;
	case "BASE":
		header("location:basem.html");
		break;
	case "POLVO FIJADOR":
		header("location:polvof.html");
		break;
	case "FIJADOR DE MAQUILLAJE":
		header("location:fijadorm.html");
		break;
	case "POLVO COMPACTO":
		header("location:polvoc.html");
		break;
    case "CORRECTOR":
		header("location:corrector.html");
		break;
    case "BRONCEADOR":
		header("location:bronceador.html");
		break;
	case "CONTOUR":
		header("location:countour.html");
		break;
	case "ILUMINADOR":
		header("location:iluminador.html");
		break;
	case "BLUSH":
		header("location:blush.html");
		break;
	case "ESPONJA":
		header("location:esponjas.html");
		break;
	case "LIMPADOR DE BROCHAS":
		header("location:limpiador.html");
		break;
	case "ESPEJO":
		header("location:espejo.html");
		break;
	case "MASCARILLA":
		header("location:mascarilla.html");
		break;
	case "MASCARILLAS":
		header("location:mascarilla.html");
		break;
	case "CREMA":
		header("location:crema.html");
		break;
	case "CREMA":
		header("location:crema.html");
		break;
	case "DEPILACION":
		header("location:depilacion.html");
		break;
	case "CEPILLO FACIAL":
		header("location:cepillo.html");
		break;
	case "CEPILLO":
		header("location:cepillo.html");
		break;
	case "ARO DE LUZ":
		header("location:aroluz.html");
		break;
	case "GLITTER":
		header("location:glitter.html");
		break;
	case "ESMALTE":
		header("location:esmalteq.html");
		break;
	case "ESMALTES":
		header("location:esmalteq.html");
		break;
	case "BARNIZ":
		header("location:esmalteq.html");
		break;
	case "PLUMIN PARA CEJAS":
		header("location:plumin.html");
		break;
	case "POLVO PARA CEJAS":
		header("location:polvocejas.html");
		break;
	case "LAPIZ PARA CEJAS":
		header("location:lapiz.html");
		break;
	case "GEL PARA CEJAS":
		header("location:gelc.html");
		break;
	case "SOMBRAS":
		header("location:sombras.html");
		break;
	case "BRILLO LABIAL":
		header("location:brillol.html");
		break;
	case "GLOSS":
		header("location:gloss.html");
		break;
	case "LABIAL LIQUIDO":
		header("location:labial.html");
		break;
	case "LABIAL":
		header("location:labial.html");
		break;
	case "LIPSTICK":
		header("location:lipstic.html");
		break;
	case "DELINEADOR DE LABIOS":
		header("location:delineadorojos.html");
		break;
	case "PESTAÑAS POSTIZAS":
		header("location:pestañas.html");
		break;
	case "MASCARA PARA PESTAÑAS":
		header("location:mascara.html");
		break;
	case "MASCARA":
		header("location:mascara.html");
		break;
	case "RIMEL":
		header("location:mascara.html");
		break;
	case "DELINEADOR":
		header("location:delineador.html");
		break;
	case "PIGMENTOS":
		header("location:pigmentos.html");
		break;
	case "PIEGAMENTO PARA PESTAÑAS":
		header("location:pegamento.html");
		break;
	
	default:
		header("location:index.html");
		break;
}


?>
