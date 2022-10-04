<?php
/*
 * Template Name: PDF-REVISTA 1.0
 * Version: 1.0
 * Description: revista pdf
 * Author: Hugo Díaz Hierro
 * Author URI: https://programacionaldesnudo.com
 * Group: Plantillas Catweb.Rocks
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: catweb.rocks.
 */
/* Prevent direct access to the template (always good to include this) */
if ( ! class_exists( 'GFForms' ) ) {
	return;
}
/*
 * Include your PHP variables in this section
 */
?>

<style>
b {
    font-size: 9px;
}

.titulos {
    background: #BDC3C7;
    line-height: 1;
    margin-top: 5px;
    margin-bottom: 5px;
    padding-top: 4px;
    padding-bottom: 4px;
    margin-right: 10px;
    border: 0.1px solid #979A9A;
    text-align: center;
}

.titulos-dos {
    /*background: #BDC3C7;*/
    line-height: 1;
    margin-top: 5px;
    margin-bottom: 5px;
    padding-top: 4px;
    padding-bottom: 4px;
    margin-right: 10px;
    border: 0.1px solid #979A9A;
    /*text-align: center; */
}

.titulos-2 {
    background: #D5D8DC;
    line-height: 1;
    margin-top: 5px !important;
    margin-bottom: 5px;
    padding-top: 3px;
    padding-bottom: 3px;
    margin-right: 10px;
    text-align: center;
}

td {
    line-height: 1;
    padding-top: 3px;
    padding-bottom: 3px;
    padding-right: 5px;
    border-bottom: 0.5px solid #BDC3C7;

}

.firmas td {
    border-bottom: 0.5px solid white;
}

.texto-aumentado {
    font-size: 16px !important;
}

.border {
    border: 1px solid #BDC3C7;
    padding: 5px;
    margin: 5px;
}
</style>
<div class="container">

    <table width="100%">
        <tbody>
            <tr>
                <td style="font-size: 11px; text-align: left; font-weight: bold;" width="50%"><img
                        src="https://goi.uniprint.com.mx/wp-content/uploads/2019/11/logo-uniprint.png" alt="Logo" />
                </td>
                <td style="text-align: right; font-size: 11px; " width="50%">Trabajo: Revista<br>
                    Cotización N°: {entry_id}<br>
                    Folio: {Fecha de Vendedor:91}<br>
                    Fecha de cotización:
                    <?php setlocale(LC_TIME, 'es_ES'); 
					echo strftime( "%B %e, %G %k:%M" ,strtotime(rgar( $entry, 'date_created' )));?>
                    [gravityforms action="conditional" merge_tag="{Fecha de Vendedor:91}" condition="isnot"
                    value=""]<br>
                    Fecha de confirmación: <?php  echo strftime( "%B %e, %G" ,strtotime($form_data['field'][91])); 
					echo " ".strftime( "%k:%M" ,strtotime($form_data['field'][824])); ?>
                    [/gravityforms]

                </td>
            </tr>
        </tbody>
    </table>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th colspan="4" scope="col" class="titulos">Datos de Facturación</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Nombre del trabajo:</b> {Nombre del trabajo:15}</td>
                <td><b>Nº del cliente:</b> {N° del cliente:18}</td>
                <td><b>R.F.C:</b> {R.F.C:19}</td>

            </tr>
            <tr>
                <td colspan="1"><b>Razón Social:</b> {Razón Social:20}</td>

                <td scope="row" colspan="1"><b>Estatus:</b>
                    [gravityforms action="conditional" merge_tag="{¿El pago será de contado?:28}" condition="isnot"
                    value=""]
                    CONTADO
                    [/gravityforms]
                    [gravityforms action="conditional" merge_tag="{¿El pago será de contado?:28}" condition="is"
                    value=""]
                    {Estado de crédito del cliente:26}
                    [/gravityforms]
                </td>



                <td colspan="1"><b>Contacto: </b>{Contacto:16} </td>
            </tr>
            <tr>
                <td colspan="1"><b>Nombre comercial:</b> {Nombre comercial:21}</td>
                <td colspan="1"><b>Dirección:</b> {Dirección:22}</td>
                <td colspan="1"><b>Teléfono:</b> {Teléfono:23}</td>
            </tr>


            <tr>

                <td colspan="1"><b>Email:</b> {E-mail:40}</td>
                <td scope="row" colspan="1"><b>Uso de CFDI:</b> {Uso de CFDI:25} </td>
                <td scope="row" colspan="1"><b>Agente:</b> {created_by:display_name}</td>
            </tr>


        </tbody>
    </table>



    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th colspan="9" scope="col" class="titulos">Información de Archivo</th>
            </tr>
        </thead>
        <tbody>
            <tr>

            </tr>
            <tr>
                <td colspan="1"><b>Ubicación</b>
                </td>
                <td colspan="1"><b>Prueba de color</b> {¿Requiere prueba de color?:41}</p>
                </td>
            <tr>
                <p> Medida Final </p>
                <td colspan="1">
                    <b>Base (cm)</b>{Medida Final Base (cm):79}
                </td>
                <td colspan="1">
                    <b>Altura (cm)</b>{Medida Final Altura (cm):80}
                </td>
            </tr>
            </tr>

            [gravityforms action="conditional" merge_tag="{Cantidad - (1) - Italiano:109}" condition="isnot" value=""]
            <tr>

            </tr>
        </tbody>
    </table>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th colspan="9" scope="col" class="titulos">Revistas</th>
            </tr>
        </thead>
        <tbody>
            <tr colspan="2">
                <td scope="col"><b>Numero total de páginas</b> {Número total de páginas (Forros + Interiores):51}
                </td>
                <td scope="col"><b>Tipo de encuadernado</b> {Tipo de Encuadernado:50}
                </td>
            </tr>
            <tr>
                <td colspan="1"><b>Acabado</b> {Acabado:3}
                </td>
                <td colspan="1"><b>Embolsado</b> {¿Requiere Embolsado?:44}
                </td>
            </tr>
        </tbody>

    </table>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th colspan="9" scope="col" class="titulos">Portada</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="1"><b>Tipo de papel</b> {Tipo de papel de la portada*:52}
                </td>
                <td colspan="1"><b>Número de páginas</b> {Número de páginas de portada:49}
                </td>
                <td colspan="1"><b>Tintas</b> {Tintas de portada:53}

                </td>
            </tr>
            <tr>
                <td colspan="1"><b>Recubrimiento Barniz</b> {Recubrimiento de Portada:54}
                </td>
            </tr>
            <tr>
                <td colspan="1"><b>Acabados especiales</b> {Acabados especiales de portada:55}
                </td>
            </tr>
        </tbody>

    </table>


    <!------------------------- Cantidad  ------------------------------>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th colspan="9" scope="col" class="titulos">Cantidad</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td colspan="1"><b>Cantidad Solicitada</b> {Cantidad solicitada:13}
                </td>

            </tr>
        </tbody>

    </table>

    <!------------------------- Finaliza Cantidad  ------------------------------>

    <!------------------------- observaciones  ------------------------------>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th colspan="9" scope="col" class="titulos">Observaciones</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td colspan="1"><b>Observaciones</b> {Observaciones:30}
                </td>

            </tr>
        </tbody>

    </table>
    <!------------------------- Finaliza observaciones  ------------------------------>
    <!------------------------- Importe total  ------------------------------>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th colspan="9" scope="col" class="titulos">Condiciones de pago e importe total</th>
            </tr>

        </thead>
        <tbody>
            <tr colspan="2">
                <td colspan="1">Todo trabajo requiere el 50% de anticipo
                    La cantidad entregada puede variar entre +/- 5%
                    Cambio de precios sin previo aviso por error u omisión de materiales
                    Los diseños que requieran modificación tendrán un costo adicional.
                    Vigencia de la cotización 30 días hábiles
                </td>
                <td colspan="1">

                </td>

                <td colspan="1">Gran Total <b>$</b>

                </td>
                <td>
                    <? echo $total=number_format((float)$form_data['field'][38], 2, '.', ','); ?>
                </td>


            </tr>
        </tbody>
    </table>
    <!------------------------- Finaliza importe total  ---------------------------------->

    <!------------------------- NO Hay Costos  ------------------------------>
    <?php ?>
    <?php if ( $trabajo == 'Agendas' || $trabajo == 'Cajas' || $trabajo == 'Dípticos' || $trabajo == 'Otros' || $trabajo == 'Posters' || $trabajo =='Revistas' || $trabajo =='Rotativa Comercial' || $trabajo =='Rotativa Períodicos' || $trabajo =='Trípticos' || $trabajo =='Volantes' || $trabajo =='Etiquetas' ){ ?>
    <td colspan="2" align="right">
        <table>
            <?php if ( $precio_total != '' ): ?>
            <tr>
                <td><b>Precio Total (Sin IVA) :</b></td>
                <td><b>$</b><?php echo number_format($precio_total, 2, '.', ',');?></td>
            </tr>
            <?php endif; ?>
            <?php if ( $subtotal != '' ): ?>
            <tr>
                <td><b>Subtotal:</b></td>
                <td><b>$</b><?php echo number_format($subtotal, 2, '.', ',');?></td>
            </tr>
            <tr>
                <?php endif; ?>
                <?php if ( $iva != '' ): ?>
                <td><b>IVA:</b></td>
                <td><b>$</b><?php echo number_format($iva, 2, '.', ',');?></td>
            </tr>
            <?php endif; ?>
            <?php if ( $total_uno != ''):?>
            <tr>
                <td><b>TOTAL</b></td>
                <td><b>$</b><?php echo number_format($total, 2, '.', ','); ?></td>
            </tr>
            <?php endif; ?>

        </table>
        <?php } ?>

        <!------------------------- Finaliza Costos  ------------------------------>
        <!------------------------- Produccion  ------------------------------>
        <table class="table border">
            <thead class="thead-dark">
                <tr>
                    <th colspan="9" scope="col" class="titulos">Planeación de Producción</th>
                </tr>

            </thead>
            <tbody class="border">
                <tr>
                    <td colspan="1"><b>SECCION</b> {SECCION (1):82}
                    </td>
                    <td colspan="1"><b>PAPEL REQUERIDO</b> {PAPEL REQUERIDO (1):83}
                    </td>
                    <td colspan="1"><b>HOJAS X PLIEGO</b> {HOJAS X PLIEGO (1):84}
                    </td>
                    <td colspan="1"><b>MERMA</b> {MERMA (1):85}
                    </td>
                    <td colspan="1"><b>TOTAL PAPEL ASIGNADO</b> {TOTAL (1):86}
                    </td>
                    <td colspan="1"><b>COSTO</b> {COSTO (1):87}
                    </td>
                </tr>
            </tbody>
            <!--seccion 2 -------------------------------------------->
            <tbody class="border">
                <tr>
                    <td colspan="1"><b>SECCION</b> {SECCION (2):108}
                    </td>
                    <td colspan="1"><b>PAPEL REQUERIDO</b> {PAPEL REQUERIDO (2):109}
                    </td>
                    <td colspan="1"><b>HOJAS X PLIEGO</b> {HOJAS X PLIEGO (2):110}
                    </td>
                    <td colspan="1"><b>MERMA</b> {MERMA (2):111}
                    </td>
                    <td colspan="1"><b>TOTAL PAPEL ASIGNADO</b> {TOTAL PAPEL ASIGNADO (2):112}
                    </td>
                    <td colspan="1"><b>COSTO</b> {COSTO (2):113}
                    </td>
                </tr>
            </tbody>
            <!--seccion 3 -------------------------------------------->
            <tbody class="border">
                <tr>
                    <td colspan="1"><b>SECCION</b> {SECCION (3):114}
                    </td>
                    <td colspan="1"><b>PAPEL REQUERIDO</b> {PAPEL REQUERIDO (3):115}
                    </td>
                    <td colspan="1"><b>HOJAS X PLIEGO</b> {HOJAS X PLIEGO (3):116}
                    </td>
                    <td colspan="1"><b>MERMA</b> {MERMA (3):117}
                    </td>
                    <td colspan="1"><b>TOTAL PAPEL ASIGNADO</b> {TOTAL PAPEL ASIGNADO (3):118}
                    </td>
                    <td colspan="1"><b>COSTO</b> {COSTO (3):119}
                    </td>
                </tr>
            </tbody>
            <!--seccion 4 -------------------------------------------->
            <tbody class="border">
                <tr>
                    <td colspan="1"><b>SECCION</b> {SECCION (4):120}
                    </td>
                    <td colspan="1"><b>PAPEL REQUERIDO</b> {PAPEL REQUERIDO (4):121}
                    </td>
                    <td colspan="1"><b>HOJAS X PLIEGO</b> {HOJAS X PLIEGO (4):122}
                    </td>
                    <td colspan="1"><b>MERMA</b> {MERMA (4):123}
                    </td>
                    <td colspan="1"><b>TOTAL PAPEL ASIGNADO</b> {TOTAL PAPEL ASIGNADO (4):124}
                    </td>
                    <td colspan="1"><b>COSTO</b> {COSTO (4):125}
                    </td>
                </tr>
            </tbody>
            <!--seccion 5 -------------------------------------------->
            <tbody class="border">
                <tr>
                    <td colspan="1"><b>SECCION</b> {SECCION (5):126}
                    </td>
                    <td colspan="1"><b>PAPEL REQUERIDO</b> {PAPEL REQUERIDO (5):127}
                    </td>
                    <td colspan="1"><b>HOJAS X PLIEGO</b> {HOJAS X PLIEGO (5):128}
                    </td>
                    <td colspan="1"><b>MERMA</b> {MERMA (5):129}
                    </td>
                    <td colspan="1"><b>TOTAL PAPEL ASIGNADO</b> {TOTAL PAPEL ASIGNADO (5):130}
                    </td>
                    <td colspan="1"><b>COSTO</b> {COSTO (5):131}
                    </td>
                </tr>
            </tbody>
            <!--seccion 6 -------------------------------------------->
            <tbody class="border">
                <tr>
                    <td colspan="1"><b>SECCION</b> {SECCION (6):132}
                    </td>
                    <td colspan="1"><b>PAPEL REQUERIDO</b> {PAPEL REQUERIDO (6):133}
                    </td>
                    <td colspan="1"><b>HOJAS X PLIEGO</b> {HOJAS X PLIEGO (6):134}
                    </td>
                    <td colspan="1"><b>MERMA</b> {MERMA (6):135}
                    </td>
                    <td colspan="1"><b>TOTAL PAPEL ASIGNADO</b> {TOTAL PAPEL ASIGNADO (6):136}
                    </td>
                    <td colspan="1"><b>COSTO</b> {COSTO (6):137}
                    </td>
                </tr>
            </tbody>
            <!--seccion 7 -------------------------------------------->
            <tbody class="border">
                <tr>
                    <td colspan="1"><b>SECCION</b> {SECCION (7):138}
                    </td>
                    <td colspan="1"><b>PAPEL REQUERIDO</b> {PAPEL REQUERIDO (7):139}
                    </td>
                    <td colspan="1"><b>HOJAS X PLIEGO</b> {HOJAS X PLIEGO (7):140}
                    </td>
                    <td colspan="1"><b>MERMA</b> {MERMA (7):141}
                    </td>
                    <td colspan="1"><b>TOTAL PAPEL ASIGNADO</b> {TOTAL PAPEL ASIGNADO (7):142}
                    </td>
                    <td colspan="1"><b>COSTO</b> {COSTO (7):143}
                    </td>
                </tr>
        </table>

        <!------------------------- Finaliza Produccion  ------------------------------>
</div>