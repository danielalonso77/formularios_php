<?php
/*
 * Template Name: PDF-CUADERNO PERSONALIZADO 1.0
 * Version: 1.0
 * Description: CUADERNO PERSONALIZADO
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
/*
.table {      
    line-height: 1.6;
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: justify;  
}
*/
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
                    [gravityforms action="conditional" merge_tag="{Nomenclatura:829}" condition="isnot" value=""]
                    <br>Nomenclatura: {Nomenclatura:829}
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
                <td scope="row" colspan="1"><b>Uso de CFDI:</b> {Uso de CFDI:25}</td>
                <td scope="row" colspan="1"><b>Agente:</b> {created_by:display_name}</td>
            </tr>


        </tbody>
    </table>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th colspan="9" scope="col" class="titulos">Interiores</th>
            </tr>
        </thead>
    </table>

    <table>
        <tbody>


            <!-- ITALIANO -->

            <tr>
                <td colspan="9"><b>Fomato: ITALIANO Tamaño: 21X16 CM [gravityforms action="conditional"
                        merge_tag="{¿Rayado personalizado Italiano (1)?:108}" condition="is" value=""] UNIVERSAL
                        [/gravityforms]{¿Rayado personalizado Italiano (1)?:108}</b>
                </td>
            </tr>
            <tr>
                <td colspan="1">Cant</td>
                <td colspan="1">Portada</td>
                <td colspan="1">Tipo de cuaderno</td>
                <td colspan="1">Hojas&nbsp;&nbsp; /&nbsp; Papel&nbsp;&nbsp; / &nbsp; Acabado</td>
                <td colspan="1">Cinta/Espiral</td>
                <td colspan="1">Precio lista</td>
                <td colspan="1">Des</td>
                <td colspan="1">Precio/vta</td>
                <td colspan="1">Subtotal</td>
            </tr>

            <!-- ITALIANO 1-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (1) - Italiano:313}" condition="isnot" value=""]
            <tr>
                <td colspan="1">{Cantidad - (1) - Italiano:109}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (1) - Italiano:110}</td>
                <td colspan="1">{Páginas - Acabado - (1) - Italiano:111}</td>
                <td colspan="1">{Colores de Cinta - (1) - Italiano:112}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_1_italiano=number_format((float)$form_data['field'][111], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano=number_format((float)$form_data['field'][113], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_1_italiano=number_format((float)$form_data['field'][114], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_1_italiano=number_format((float)$form_data['field'][115], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 1-->

            <!-- ITALIANO 2-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (2) - Italiano:118}" condition="isnot" value=""]
            <tr>
                <td colspan="1">{Cantidad - (2) - Italiano:118}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (2) - Italiano:119}</td>
                <td colspan="1">{Páginas - Acabado - (2) - Italiano:120}</td>
                <td colspan="1">{Colores de Cinta - (2) - Italiano:121}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_2_italiano=number_format((float)$form_data['field'][120], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano=number_format((float)$form_data['field'][113], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_2_italiano=number_format((float)$form_data['field'][122], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_2_italiano=number_format((float)$form_data['field'][123], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 2-->
            <!-- ITALIANO 3-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (3) - Italiano:124}" condition="isnot" value=""]
            <tr>
                <td colspan="1">{Cantidad - (3) - Italiano:124}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (3) - Italiano:125}</td>
                <td colspan="1">{Páginas - Acabado - (3) - Italiano:126}</td>
                <td colspan="1">{Colores de Cinta - (3) - Italiano:127}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_3_italiano=number_format((float)$form_data['field'][126], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano=number_format((float)$form_data['field'][113], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_3_italiano=number_format((float)$form_data['field'][128], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_3_italiano=number_format((float)$form_data['field'][129], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 3-->
            <!-- ITALIANO 4-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (4) - Italiano:130}" condition="isnot" value=""]
            <tr>
                <td colspan="1">{Cantidad - (4) - Italiano:130}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (4) - Italiano:131}</td>
                <td colspan="1">{Páginas - Acabado - (4) - Italiano:132}</td>
                <td colspan="1">{Colores de Cinta - (4) - Italiano:133}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_4_italiano=number_format((float)$form_data['field'][132], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano=number_format((float)$form_data['field'][113], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_4_italiano=number_format((float)$form_data['field'][134], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_4_italiano=number_format((float)$form_data['field'][135], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 4-->

            <!-- ITALIANO 5-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (5) - Italiano:136}" condition="isnot" value=""]
            <tr>
                <td colspan="1">{Cantidad - (5) - Italiano:136}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (5) - Italiano:137}</td>
                <td colspan="1">{Páginas - Acabado - (5) - Italiano:138}</td>
                <td colspan="1">{Colores de Cinta - (5) - Italiano:139}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_5_italiano=number_format((float)$form_data['field'][138], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano=number_format((float)$form_data['field'][113], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_5_italiano=number_format((float)$form_data['field'][140], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_5_italiano=number_format((float)$form_data['field'][141], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 5-->

            <!-- ITALIANO 6-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (6) - Italiano:142}" condition="isnot" value=""]
            <tr>
                <td colspan="1">{Cantidad - (6) - Italiano:142}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (6) - Italiano:143}</td>
                <td colspan="1">{Páginas - Acabado - (6) - Italiano:144}</td>
                <td colspan="1">{Colores de Cinta - (6) - Italiano:145}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_6_italiano=number_format((float)$form_data['field'][144], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano=number_format((float)$form_data['field'][113], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_6_italiano=number_format((float)$form_data['field'][146], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_6_italiano=number_format((float)$form_data['field'][147], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 6-->

            <!-- ITALIANO 7-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (7) - Italiano:149}" condition="isnot" value=""]
            <tr>
                <td colspan="1">{Cantidad - (7) - Italiano:149}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (7) - Italiano:150}</td>
                <td colspan="1">{Páginas - Acabado - (7) - Italiano:151}</td>
                <td colspan="1">{Colores de Cinta - (7) - Italiano:152}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_7_italiano=number_format((float)$form_data['field'][151], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano=number_format((float)$form_data['field'][113], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_7_italiano=number_format((float)$form_data['field'][153], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_7_italiano=number_format((float)$form_data['field'][154], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 7-->

            <!-- ITALIANO 8-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (8) - Italiano:155}" condition="isnot" value=""]
            <tr>
                <td colspan="1">{Cantidad - (8) - Italiano:155}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (8) - Italiano:156}</td>
                <td colspan="1">{Páginas - Acabado - (8) - Italiano:157}</td>
                <td colspan="1">{Colores de Cinta - (8) - Italiano:158}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_8_italiano=number_format((float)$form_data['field'][157], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano=number_format((float)$form_data['field'][113], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_8_italiano=number_format((float)$form_data['field'][159], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_8_italiano=number_format((float)$form_data['field'][160], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 8-->


            <!-- ITALIANO 9-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (9) - Italiano:161}" condition="isnot" value=""]
            <tr>
                <td colspan="1">{Cantidad - (9) - Italiano:161}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (9) - Italiano:162}</td>
                <td colspan="1">{Páginas - Acabado - (9) - Italiano:163}</td>
                <td colspan="1">{Colores de Cinta - (9) - Italiano:164}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_9_italiano=number_format((float)$form_data['field'][163], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano=number_format((float)$form_data['field'][113], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_9_italiano=number_format((float)$form_data['field'][165], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_9_italiano=number_format((float)$form_data['field'][166], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 9-->

            <!-- ITALIANO 10-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (10) - Italiano:167}" condition="isnot" value=""]
            <tr>
                <td colspan="1">{Cantidad - (10) - Italiano:167}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (10) - Italiano:168}</td>
                <td colspan="1">{Páginas - Acabado - (10) - Italiano:169}</td>
                <td colspan="1">{Colores de Cinta - (10) - Italiano:170}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_10_italiano=number_format((float)$form_data['field'][169], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano=number_format((float)$form_data['field'][113], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_10_italiano=number_format((float)$form_data['field'][171], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_10_italiano=number_format((float)$form_data['field'][172], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 10-->

            <tr>
                <td colspan="1">Tot. Cuadernos : {Total cuadernos cantidad italiano:116}</td>
                <td colspan="5"></td>
                <td colspan="1">Subtotal Italiano: </td>
                <td colspan="1"></td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_italiano=number_format((float)$form_data['field'][117], 2, '.', ','); ?>
                </td>
            </tr>


            [gravitywp_count formid="2" workflow_step="5"]
            <tr>

            </tr>
            [/gravitywp_count]
        </tbody>
    </table>


    <!---------------------------------------------------------------------------------------------->
    <table>
        <tbody>
            <!-- ITALIANO COLLEGE -->

            <tr>
                <td colspan="9"><b>Fomato: ITALIANO COLLEGE Tamaño: 21X16 CM [gravityforms action="conditional"
                        merge_tag="{¿Rayado personalizado Italiano (1)?:108}" condition="is" value=""] UNIVERSAL
                        [/gravityforms]{¿Rayado personalizado Italiano (1)?:108}</b>
                </td>
            </tr>
            <tr>
                <td colspan="1">Cant</td>
                <td colspan="1">Portada</td>
                <td colspan="1">Tipo de cuaderno</td>
                <td colspan="1">Hojas&nbsp;&nbsp; /&nbsp; Papel&nbsp;&nbsp; / &nbsp; Acabado</td>
                <td colspan="1">Cinta/Espiral</td>
                <td colspan="1">Precio lista</td>
                <td colspan="1">Des</td>
                <td colspan="1">Precio/vta</td>
                <td colspan="1">Subtotal</td>
            </tr>

            <!-- ITALIANO COLLEGE 1-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (1) - Italiano Collage:180}" condition="isnot"
            value=""]
            <tr>
                <td colspan="1">{Cantidad - (1) - Italiano:180}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (1) - Italiano:181}</td>
                <td colspan="1">{Páginas - Acabado - (1) - Italiano:182}</td>
                <td colspan="1">{Colores de Cinta - (1) - Italiano:183}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_1_italiano_collage=number_format((float)$form_data['field'][182], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano_collage=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_1_italiano_collage=number_format((float)$form_data['field'][184], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_1_italiano_collage=number_format((float)$form_data['field'][185], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO COLLAGE 1-->

            <!-- ITALIANO COLLAGE 2-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (2) - Italiano Collage:186}" condition="isnot"
            value=""]
            <tr>
                <td colspan="1">{Cantidad - (2) - Italiano Collage:186}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (2) - Italiano Collage:187}</td>
                <td colspan="1">{Páginas - Acabado - (2) - Italiano Collage:188}</td>
                <td colspan="1">{Colores de Cinta - (2) - Italiano Colllage:189}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_2_italiano_collage=number_format((float)$form_data['field'][188], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano_collage=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_2_italiano_collage=number_format((float)$form_data['field'][190], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_2_italiano_collage=number_format((float)$form_data['field'][191], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 2-->

            <!-- ITALIANO COLLAGE 3-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (3) - Italiano Collage:192}" condition="isnot"
            value=""]
            <tr>
                <td colspan="1">{Cantidad - (3) - Italiano Collage:192}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (3) - Italiano Collage:193}</td>
                <td colspan="1">{Páginas - Acabado - (3) - Italiano Collage:195}</td>
                <td colspan="1">{Colores de Cinta - (3) - Italiano Collage:19600}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_3_italiano_collage=number_format((float)$form_data['field'][195], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano_collage=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_3_italiano_collage=number_format((float)$form_data['field'][197], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_3_italiano_collage=number_format((float)$form_data['field'][198], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO COLLAGE 3-->

            <!-- ITALIANO COLLAGE 4-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (4) - Italiano Collage:199}" condition="isnot"
            value=""]
            <tr>
                <td colspan="1">{Cantidad - (4) - Italiano Collage:199}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (4) - Italiano Collage:201}</td>
                <td colspan="1">{Páginas - Acabado - (4) - Italiano Cllage:202}</td>
                <td colspan="1">{Colores de Cinta - (4) - Italiano Collage:203}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_4_italiano_collage=number_format((float)$form_data['field'][202], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano_collage=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_4_italiano_collage=number_format((float)$form_data['field'][204], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_4_italiano_collage=number_format((float)$form_data['field'][205], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO COLLAGE 4-->

            <!-- ITALIANO 5-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (5) - Italiano Collage:206}" condition="isnot"
            value=""]
            <tr>
                <td colspan="1">{Cantidad - (5) - Italiano Collage:206}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (5) - Italiano Collage:207}</td>
                <td colspan="1">{Páginas - Acabado - (5) - Italiano College:208}</td>
                <td colspan="1">{Colores de Cinta - (5) - Italiano Collage:209}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_5_italiano_collage=number_format((float)$form_data['field'][208], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano_collage=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_5_italiano=number_format((float)$form_data['field'][210], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_5_italiano=number_format((float)$form_data['field'][211], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO 5-->

            <!-- ITALIANO 6-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (6) - Italiano Collage:212}" condition="isnot"
            value=""]
            <tr>
                <td colspan="1">{Cantidad - (6) - Italiano Collage:212}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (6) - Italiano Collage:213}</td>
                <td colspan="1">{Páginas - Acabado - (6) - Italiano Collage:214}</td>
                <td colspan="1">{Colores de Cinta - (6) - Italiano Collage:215}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_6_italiano_collage=number_format((float)$form_data['field'][213], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano_collage=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_6_italiano_collage=number_format((float)$form_data['field'][216], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_6_italiano_collage=number_format((float)$form_data['field'][217], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO COLLAGE 6-->

            <!-- ITALIANO COLLAGE 7-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (7) - Italiano Collage:218}" condition="isnot"
            value=""]
            <tr>
                <td colspan="1">{Cantidad - (7) - Italiano Collage:218}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (7) - Italiano Collage:219}</td>
                <td colspan="1">{Páginas - Acabado - (7) - Italiano Collage:220}</td>
                <td colspan="1">{Colores de Cinta - (7) - Italiano Collage:221}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_7_italiano_college=number_format((float)$form_data['field'][220], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano_college=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_7_italiano_collage=number_format((float)$form_data['field'][222], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_7_italiano_college=number_format((float)$form_data['field'][223], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO COLLAGE 7-->

            <!-- ITALIANO COLLEGE 8-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (8) - Italiano Collage:224}" condition="isnot"
            value=""]
            <tr>
                <td colspan="1">{Cantidad - (8) - Italiano Collage:224}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (8) - Italiano Collage:225}</td>
                <td colspan="1">{Páginas - Acabado - (8) - Italiano Collage:226}</td>
                <td colspan="1">{Colores de Cinta - (8) - Italiano:227}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_8_italiano_collage=number_format((float)$form_data['field'][226], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano_collage=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_8_italiano_collage=number_format((float)$form_data['field'][228], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_8_italiano_collage=number_format((float)$form_data['field'][229], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO COLLAGE 8-->


            <!-- ITALIANO COLLAGE 9-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (9) - Italiano Collage:230}" condition="isnot"
            value=""]
            <tr>
                <td colspan="1">{Cantidad - (9) - Italiano College:230}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (9) - Italiano Collage:231}</td>
                <td colspan="1">{Páginas - Acabado - (9) - Italiano Collage:232}</td>
                <td colspan="1">{Colores de Cinta - (9) - Italiano Collage:233}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_9_italiano_college=number_format((float)$form_data['field'][231], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano_colllage=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_9_italiano_collage=number_format((float)$form_data['field'][234], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_9_italiano_collage=number_format((float)$form_data['field'][235], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO COLLAGE 9-->

            <!-- ITALIANO COLLAGE 10-->
            [gravityforms action="conditional" merge_tag="{Cantidad - (10) - Italiano Collage:236}" condition="isnot"
            value=""]
            <tr>
                <td colspan="1">{Cantidad - (10) - Italiano Collage:236}</td>
                <td colspan="1">{Nombre de la Portada:99}</td>
                <td colspan="1">{Rayado - (10) - Italiano Collage:237}</td>
                <td colspan="1">{Páginas - Acabado - (10) - Italiano Collage:238}</td>
                <td colspan="1">{Colores de Cinta - (10) - Italiano Collage:239}</td>
                <td colspan="1"><b>$</b>
                    <? echo $paginas_acabado_10_italiano_collage=number_format((float)$form_data['field'][238], 2, '.', ','); ?>
                </td>
                <td colspan="1">
                    <? echo $descuento_italiano_collage=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $Precio_venta_10_italiano_collage=number_format((float)$form_data['field'][240], 2, '.', ','); ?>
                </td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_10_italiano_collage=number_format((float)$form_data['field'][241], 2, '.', ','); ?>
                </td>
            </tr>


            [/gravityforms]
            <!--TERMINA ITALIANO COLLEGE 10-->

            <!-- TOTALES ITALIANO COLLEGE-->
            <tr>
                <td colspan="1">{Total cuadernos cantidad italiano:175}</td>
                <td colspan="5"></td>
                <td colspan="1">Subtotal Italiano College: </td>
                <td colspan="1"></td>
                <td colspan="1"><b>$</b>
                    <? echo $subtotal_italiano_collage=number_format((float)$form_data['field'][176], 2, '.', ','); ?>
                </td>
            </tr>

            <!-- TERMINA TOTALES ITALIANO COLLAGE ---->
        </tbody>
    </table>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------->
<table>
    <tbody>
        <!-- COLLEGE -->

        <tr>
            <td colspan="9"><b>Fomato: COLLEGE Tamaño: 21X16 CM [gravityforms action="conditional" merge_tag="{¿Rayado
                    personalizado College (1)?:245}" condition="is" value=""] UNIVERSAL [/gravityforms]{¿Rayado
                    personalizado Collage (1)?:245}</b>
            </td>
        </tr>
        <tr>
            <td colspan="1">Cant</td>
            <td colspan="1">Portada</td>
            <td colspan="1">Tipo de cuaderno</td>
            <td colspan="1">Hojas&nbsp;&nbsp; /&nbsp; Papel&nbsp;&nbsp; / &nbsp; Acabado</td>
            <td colspan="1">Cinta/Espiral</td>
            <td colspan="1">Precio lista</td>
            <td colspan="1">Des</td>
            <td colspan="1">Precio/vta</td>
            <td colspan="1">Subtotal</td>
        </tr>

        <!-- COLLEGE 1-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (1) - Collage:246}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (1) - Collage:246}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (1) - Collage:247}</td>
            <td colspan="1">{Páginas - Acabado - (1) - Collage:248}</td>
            <td colspan="1">{Colores de Cinta - (1) - Collage:249}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_1_collage=number_format((float)$form_data['field'][182], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_italiano_collage=number_format((float)$form_data['field'][174], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_1_italiano_collage=number_format((float)$form_data['field'][184], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_1_italiano_collage=number_format((float)$form_data['field'][185], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA ITALIANO COLLAGE 1-->

        <!-- COLLAGE 2-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (2) - Collage:253}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (2) - Collage:253}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (2) - Italiano Collage:254}</td>
            <td colspan="1">{Páginas - Acabado - (2) - Collage:255}</td>
            <td colspan="1">{Colores de Cinta - (2) - Colllage:256}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_2_collage=number_format((float)$form_data['field'][255], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_collage=number_format((float)$form_data['field'][243], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_2_collage=number_format((float)$form_data['field'][257], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_2_collage=number_format((float)$form_data['field'][258], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA COLLEGE 2-->

        <!-- COLLAGE 3-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (3) - Italiano Collage:259}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (3) - Collage:259}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (3) - Collage:260}</td>
            <td colspan="1">{Páginas - Acabado - (3) - Collage:261}</td>
            <td colspan="1">{Colores de Cinta - (3) - Collage:262}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_3_collage=number_format((float)$form_data['field'][261], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_italiano_collage=number_format((float)$form_data['field'][243], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_3_italiano_collage=number_format((float)$form_data['field'][263], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_3_italiano_collage=number_format((float)$form_data['field'][264], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA COLLAGE 3-->

        <!-- INICIO COLLAGE 4-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (4) - Collage:265}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (4) - Collage:265}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (4) - Collage:266}</td>
            <td colspan="1">{Páginas - Acabado - (4) - Cllage:267}</td>
            <td colspan="1">{Colores de Cinta - (4) - Collage:268}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_4_collage=number_format((float)$form_data['field'][267], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_collage=number_format((float)$form_data['field'][243], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_4_collage=number_format((float)$form_data['field'][269], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_4_collage=number_format((float)$form_data['field'][270], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA COLLAGE 4-->

        <!-- COLLEGE 5-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (5) - Collage:271}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (5) - Collage:271}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (5) - Collage:272}</td>
            <td colspan="1">{Páginas - Acabado - (5) - College:273}</td>
            <td colspan="1">{Colores de Cinta - (5) - Collage:274}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_5_collage=number_format((float)$form_data['field'][273], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_collage=number_format((float)$form_data['field'][243], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_5_college=number_format((float)$form_data['field'][275], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_5_college=number_format((float)$form_data['field'][276], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--COLLEGE 5-->

        <!-- COLLEGE 6-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (6) - Collage:277}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (6) - Collage:277}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (6) - Collage:278}</td>
            <td colspan="1">{Páginas - Acabado - (6) - Collage:279}</td>
            <td colspan="1">{Colores de Cinta - (6) - Collage:280}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_6_collage=number_format((float)$form_data['field'][279], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_collage=number_format((float)$form_data['field'][243], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_6_collage=number_format((float)$form_data['field'][281], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_6_collage=number_format((float)$form_data['field'][282], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA COLLAGE 6-->

        <!-- INICIA COLLAGE 7-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (7) - Collage:283}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (7) - Collage:283}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (7) - Collage:284}</td>
            <td colspan="1">{Páginas - Acabado - (7) - Collage:285}</td>
            <td colspan="1">{Colores de Cinta - (7) - Collage:286}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_7_college=number_format((float)$form_data['field'][285], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_college=number_format((float)$form_data['field'][243], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_7_collage=number_format((float)$form_data['field'][287], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_7_college=number_format((float)$form_data['field'][288], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA COLLAGE 7-->

        <!-- COLLEGE 8-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (8) - Collage:289}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (8) - Collage:289}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (8) - Collage:290}</td>
            <td colspan="1">{Páginas - Acabado - (8) - Italiano Collage:226}</td>
            <td colspan="1">{Colores de Cinta - (8) - Italiano:292}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_8_collage=number_format((float)$form_data['field'][226], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_collage=number_format((float)$form_data['field'][243], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_8_collage=number_format((float)$form_data['field'][293], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_8_collage=number_format((float)$form_data['field'][294], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA COLLAGE 8-->


        <!-- INICIO COLLAGE 9-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (9) - Collage:295}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (9) - College:295}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (9) - Collage:296}</td>
            <td colspan="1">{Páginas - Acabado - (9) - Collage:297}</td>
            <td colspan="1">{Colores de Cinta - (9) - Collage:298}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_9_college=number_format((float)$form_data['field'][297], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_colllage=number_format((float)$form_data['field'][243], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_9_collage=number_format((float)$form_data['field'][299], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_9_collage=number_format((float)$form_data['field'][300], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA COLLAGE 9-->

        <!-- INICIA COLLAGE 10-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (10) - Collage:301}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (10) - Collage:301}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (10) - Collage:302}</td>
            <td colspan="1">{Páginas - Acabado - (10) - Collage:303}</td>
            <td colspan="1">{Colores de Cinta - (10) - Collage:304}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_10_collage=number_format((float)$form_data['field'][302], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_collage=number_format((float)$form_data['field'][243], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_10_collage=number_format((float)$form_data['field'][305], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_10_collage=number_format((float)$form_data['field'][306], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA COLLEGE 10-->


        <!-- TOTALES COLLEGE-->
        <tr>
            <td colspan="1">{Total cuadernos cantidad italiano:175}</td>
            <td colspan="5"></td>
            <td colspan="1">Subtotal College: </td>
            <td colspan="1"></td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal__collage=number_format((float)$form_data['field'][564], 2, '.', ','); ?>
            </td>
        </tr>

        <!-- TERMINA TOTALES COLLAGE ---->
    </tbody>
</table>
</div>

<!--------------------------------------------------------------------------------------------------------------------->

<!-------------------------Interiores profesional ---------------------------------->
<table>
    <tbody>
        <!-- COLLEGE -->

        <tr>
            <td colspan="9"><b>Fomato: PROFESIONAL Tamaño: 21X16 CM [gravityforms action="conditional"
                    merge_tag="{¿Rayado personalizado Profesional (1)?:310}" condition="is" value=""] UNIVERSAL
                    [/gravityforms]{¿Rayado personalizado Profesional (1)?:310}</b>
            </td>
        </tr>
        <tr>
            <td colspan="1">Cant</td>
            <td colspan="1">Portada</td>
            <td colspan="1">Tipo de cuaderno</td>
            <td colspan="1">Hojas&nbsp;&nbsp; /&nbsp; Papel&nbsp;&nbsp; / &nbsp; Acabado</td>
            <td colspan="1">Cinta/Espiral</td>
            <td colspan="1">Precio lista</td>
            <td colspan="1">Des</td>
            <td colspan="1">Precio/vta</td>
            <td colspan="1">Subtotal</td>
        </tr>

        <!-- PROFESIONAL 1-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (1) - Profesional:311}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (1) - Profesional:311}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (1) - Profesional:312}</td>
            <td colspan="1">{Páginas - Acabado - (1) - Profesional:313}</td>
            <td colspan="1">{Colores de Cinta - (1) - Profesional:314}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_1_profesional=number_format((float)$form_data['field'][313], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_profesional=number_format((float)$form_data['field'][308], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_1_profesinal=number_format((float)$form_data['field'][315], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_1_profesinal=number_format((float)$form_data['field'][316], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA TERMINA PROFESIONAL 1-->

        <!-- Profesiona 2-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (2) - Profesional:317}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (2) -Profesional:317}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (2) - Profesional:318}</td>
            <td colspan="1">{Páginas - Acabado - (2) Profesional:319}</td>
            <td colspan="1">{Colores de Cinta - (2) - Profesional:320}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_2_profesional=number_format((float)$form_data['field'][255], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_profesional=number_format((float)$form_data['field'][308], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_2_pofesional=number_format((float)$form_data['field'][321], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_2_profesional=number_format((float)$form_data['field'][322], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA PROFESIONAL 2-->

        <!-- PROFESIONAL 3-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (3) - Profesional:323}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (3) - Profesional:323}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (3) - Profesional:324}</td>
            <td colspan="1">{Páginas - Acabado - (3) - Profesional:325}</td>
            <td colspan="1">{Colores de Cinta - (3) - Profesional:326}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_3_profesional=number_format((float)$form_data['field'][325], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_profesional=number_format((float)$form_data['field'][308], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_3_profesional=number_format((float)$form_data['field'][327], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_3_profesional=number_format((float)$form_data['field'][328], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA PROFESIONAL 3-->

        <!-- INICIO PROFESIONAL 4-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (4) - Profesional:329}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (4) - Profesional:329}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (4) - Profesional:330}</td>
            <td colspan="1">{Páginas - Acabado - (4) -Profesional:331}</td>
            <td colspan="1">{Colores de Cinta - (4) - Profesional:332}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_4_profesional=number_format((float)$form_data['field'][331], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_profesional=number_format((float)$form_data['field'][308], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_4_profesional=number_format((float)$form_data['field'][333], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_4_profesional=number_format((float)$form_data['field'][334], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA PROFESIONAL 4-->

        <!-- PROFESIONAL 5-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (5) - Profesional:335}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (5) - Profesional:335}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (5) - Profesional:336}</td>
            <td colspan="1">{Páginas - Acabado - (5) - Profesional:337}</td>
            <td colspan="1">{Colores de Cinta - (5) - Profesional:338}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_5_profesional=number_format((float)$form_data['field'][337], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_profesional=number_format((float)$form_data['field'][308], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_5_profesional=number_format((float)$form_data['field'][339], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_5_profesional=number_format((float)$form_data['field'][340], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--PROFESIONAL 5-->

        <!-- PROFESIONAL 6-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (6) - Profesional:341}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (6) - Profesional:341}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (6) - Profesional:342}</td>
            <td colspan="1">{Páginas - Acabado - (6) - Profesional:343}</td>
            <td colspan="1">{Colores de Cinta - (6) - Profesional:344}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_6_profesinal=number_format((float)$form_data['field'][343], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_profesinal=number_format((float)$form_data['field'][308], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_6_profesinal=number_format((float)$form_data['field'][345], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_6_profesinal=number_format((float)$form_data['field'][346], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA PROFESIONAL 6-->

        <!-- INICIA PROFESIONAL 7-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (7) - Profesional:347}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (7) - Profesional:347}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (7) - Profesional:348}</td>
            <td colspan="1">{Páginas - Acabado - (7) - Profesional:349}</td>
            <td colspan="1">{Colores de Cinta - (7) - Profesional:350}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_7_profesional=number_format((float)$form_data['field'][349], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_profesional=number_format((float)$form_data['field'][308], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_7_profesional=number_format((float)$form_data['field'][351], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_7_profesional=number_format((float)$form_data['field'][352], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA PROFESIONAL 7-->

        <!-- PROFESIONAL 8-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (8) - Profesional:353}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (8) - Profesional:353}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (8) - Profesional:354}</td>
            <td colspan="1">{Páginas - Acabado - (8) - Profesional:355}</td>
            <td colspan="1">{Colores de Cinta - (8) - Profesional:356}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_8_profesional=number_format((float)$form_data['field'][355], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_profesional=number_format((float)$form_data['field'][308], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_8_profesional=number_format((float)$form_data['field'][357], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_8_profesional=number_format((float)$form_data['field'][358], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA PROFESIONAL 8-->


        <!-- INICIO PROFESIONAL 9-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (9) - Profesional:359}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (9) - Profesional:359}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (9) - Profesional:360}</td>
            <td colspan="1">{Páginas - Acabado - (9) - Profesional:361}</td>
            <td colspan="1">{Colores de Cinta - (9) - Profesional:362}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_9_profesional=number_format((float)$form_data['field'][361], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cprofesional=number_format((float)$form_data['field'][308], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_9_profesional=number_format((float)$form_data['field'][363], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_9_profesional=number_format((float)$form_data['field'][364], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA PROFESIONAL 9-->

        <!-- INICIA PROFESIONAL 10-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (10) - Profesional:365}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (10) - Profesional:365}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (10) - Profesional:366}</td>
            <td colspan="1">{Páginas - Acabado - (10) - Profesional:367}</td>
            <td colspan="1">{Colores de Cinta - (10) - Profesional:368}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_10_profesional=number_format((float)$form_data['field'][367], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_profesional=number_format((float)$form_data['field'][308], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_10_profesional=number_format((float)$form_data['field'][369], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_10_profesional=number_format((float)$form_data['field'][370], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA PROFESIONAL 10-->


        <!-- TOTALES PROFESIONAL-->
        <tr>
            <td colspan="1">{Total cuadernos cantidad Profesional:565}</td>
            <td colspan="5"></td>
            <td colspan="1">Subtotal Profesional: </td>
            <td colspan="1"></td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal__profesional=number_format((float)$form_data['field'][566], 2, '.', ','); ?>
            </td>
        </tr>

        <!-- TERMINA TOTALES PROFESIONAL ---->
    </tbody>
</table>
</div>

<!--------------------------------------------------------------------------------------------------------------------->

<!-------------------------Interiores Cuaderno de dibujo ---------------------------------->
<table>
    <tbody>
        <!-- CUADERNO DE DIBUJO -->

        <tr>
            <td colspan="9"><b>Fomato: CUADERNO DE DIBUJO Tamaño: 30X245 CM [gravityforms action="conditional"
                    merge_tag="{¿Rayado personalizado Profesional (1)?:310}" condition="is" value=""] UNIVERSAL
                    [/gravityforms]{¿Rayado personalizado Profesional (1)?:310}</b>
            </td>
        </tr>
        <tr>
            <td colspan="1">Cant</td>
            <td colspan="1">Portada</td>
            <td colspan="1">Tipo de cuaderno</td>
            <td colspan="1">Hojas&nbsp;&nbsp; /&nbsp; Papel&nbsp;&nbsp; / &nbsp; Acabado</td>
            <td colspan="1">Cinta/Espiral</td>
            <td colspan="1">Precio lista</td>
            <td colspan="1">Des</td>
            <td colspan="1">Precio/vta</td>
            <td colspan="1">Subtotal</td>
        </tr>

        <!-- CUADERNO DE DIBUJO 1-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (1) - Cuaderno de dibujo:377}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (1) - Cuaderno de dibujo:377}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (1) - Cuaderno de dibujo:378}</td>
            <td colspan="1">{Páginas - Acabado - (1) - Cuaderno de dibujo:379}</td>
            <td colspan="1">{Colores de Cinta - (1) - Cuaderno de dibujo:380}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_1_cuaderno_de_dibujo=number_format((float)$form_data['field'][379], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cuaderno_de_dibujo=number_format((float)$form_data['field'][452], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_1_Cuaderno_de_dibujo=number_format((float)$form_data['field'][390], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_1_Cuaderno_de_dibujo=number_format((float)$form_data['field'][391], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA TERMINA CUADERNO DE DIBUJO 1-->

        <!-- CUADERNO DE DIBUJO 2-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (2) - Cuaderno de dibujo:398}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (2) - Cuaderno de dibujo:398}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (2) - Cuaderno de dibujo:399}</td>
            <td colspan="1">{Páginas - Acabado - (2) - Cuaderno de dibujo:400}</td>
            <td colspan="1">{Colores de Cinta - (2) - Cuaderno de dibujo:401}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_1_cuaderno_de_dibujo=number_format((float)$form_data['field'][400], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cuaderno_de_dibujo=number_format((float)$form_data['field'][452], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_1_cuaderno_de_dibujo=number_format((float)$form_data['field'][402], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_1_cuaderno_de_dibujo=number_format((float)$form_data['field'][403], 2, '.', ','); ?>
            </td>
        </tr>

        [/gravityforms]
        <!--TERMINA TERMINA CUADERNO DE DIBUJO 2-->

        <!-- CUADERNO DE DIBUJO 3-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (3) - Cuaderno de dibujo:404}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (3) - Cuaderno de dibujo:404}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (3) - Cuaderno de dibujo:405}</td>
            <td colspan="1">{Páginas - Acabado - (3) - Cuaderno de dibujo:406}</td>
            <td colspan="1">{Colores de Cinta - (3) - Cuaderno de dibujo:407}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_3_cuaderno_de_dibujo=number_format((float)$form_data['field'][406], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cuaderno_de_dibujo=number_format((float)$form_data['field'][452], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_3_cuaderno_de_dibujo=number_format((float)$form_data['field'][408], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_3_cuaderno_de_dibujo=number_format((float)$form_data['field'][409], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA CUADERNO E DIBUJO 3-->

        <!-- INICIO CUADERNO DE DIBUJO 4-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (4) - Cuaderno de dibujo:410}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (4) - Cuaderno de dibujo:410}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (4) - Cuaderno de dibujo:411}</td>
            <td colspan="1">{Páginas - Acabado - (4) -Cuaderno de dibujo:412}</td>
            <td colspan="1">{Colores de Cinta - (4) - Cuaderno de dibujo:413}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_4_cuaderno_de_dibujo=number_format((float)$form_data['field'][412], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cuaderno_de_dibujo=number_format((float)$form_data['field'][452], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_4_cuaderno_de_dibujo=number_format((float)$form_data['field'][414], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_4_cuaderno_de_dibujo=number_format((float)$form_data['field'][415], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA CUADERNO DE DIBUJO 4-->

        <!-- CUADERNO DE DIBUJO 5-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (5) - Cuaderno de dibujo:416}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (5) - Cuaderno de dibujo:416}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (5) - Cuaderno de dibujo:417}</td>
            <td colspan="1">{Páginas - Acabado - (5) - Cuaderno de dibujo:418}</td>
            <td colspan="1">{Colores de Cinta - (5) - Cuaderno de dibujo:419}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_5_cuaderno_de_dibujo=number_format((float)$form_data['field'][418], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cuaderno_de_dibujo=number_format((float)$form_data['field'][452], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_5_cuaderno_de_dibujo=number_format((float)$form_data['field'][420], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_5_cuaderno_de_dibujo=number_format((float)$form_data['field'][421], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA CUADERNO DE DIBUJO 5-->

        <!-- CUADERNO DE DIBUJO 6-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (6) - Cuaderno de dibujo:422}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (6) - Cuaderno de dibujo:422}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (6) - Cuaderno de dibujo:423}</td>
            <td colspan="1">{Páginas - Acabado - (6) - Cuaderno de dibujo:424}</td>
            <td colspan="1">{Colores de Cinta - (6) - Cuaderno de dibujo:425}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_6_cuaderno_de_dibujo=number_format((float)$form_data['field'][424], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cuaderno_de_dibujo=number_format((float)$form_data['field'][452], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_6_cuaderno_de_dibujo=number_format((float)$form_data['field'][426], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_6_cuaderno_de_dibujo=number_format((float)$form_data['field'][427], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA CUADERNO DE DIBUJO 6-->

        <!-- INICIA CUADERNO DE DIBUJO 7-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (7) - Cuaderno de dibujo:428}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (7) - Cuaderno de dibujo:428}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (7) - Cuaderno de dibujo:429}</td>
            <td colspan="1">{Páginas - Acabado - (7) - Cuaderno de dibujo:430}</td>
            <td colspan="1">{Colores de Cinta - (7) - Cuaderno de dibujo:431}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_7_cuaderno_de_dibujo=number_format((float)$form_data['field'][430], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cuaderno_de_dibujo=number_format((float)$form_data['field'][452], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_7_cuaderno_de_dibujo=number_format((float)$form_data['field'][432], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_7_cuaderno_de_dibujo=number_format((float)$form_data['field'][433], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA CUADERNO DE DIBUJO 7-->

        <!-- CUADERNO DE DIBUJO 8-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (8) - Cuaderno de dibujo:434}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (8) - Cuaderno de dibujo:434}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (8) - Cuaderno de dibujo:435}</td>
            <td colspan="1">{Páginas - Acabado - (8) - Cuaderno de dibujo:436}</td>
            <td colspan="1">{Colores de Cinta - (8) - Cuaderno de dibujo:437}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_8_cuadeno_de_dibujo=number_format((float)$form_data['field'][436], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cuadeno_de_dibujo=number_format((float)$form_data['field'][452], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_8_cuadeno_de_dibujo=number_format((float)$form_data['field'][438], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_8_cuadeno_de_dibujo=number_format((float)$form_data['field'][439], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA CUADERNO DE DIBUJO 8-->


        <!-- INICIO CUADERNO DE DIBUJO 9-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (9) - Cuaderno de dibujo:440}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (9) - Cuaderno de dibujo:440}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (9) - Cuaderno de dibujo:441}</td>
            <td colspan="1">{Páginas - Acabado - (9) - Cuaderno de dibujo:442}</td>
            <td colspan="1">{Colores de Cinta - (9) - Cuaderno de dibujo:443}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_9_cuaderno_de_dibujo=number_format((float)$form_data['field'][442], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_ccuaderno_de_dibujo=number_format((float)$form_data['field'][452], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_9_cuaderno_de_dibujo=number_format((float)$form_data['field'][444], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_9_cuaderno_de_dibujo=number_format((float)$form_data['field'][445], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA CUADERNO DE DIBUJO 9-->

        <!-- INICIA CUADERNO DE DIBUJO 10-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (10) - Cuaderno de dibujo:446}" condition="isnot"
        value=""]
        <tr>
            <td colspan="1">{Cantidad - (10) - Cuaderno de dibujo:446}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (10) - Cuaderno de dibujo:447}</td>
            <td colspan="1">{Páginas - Acabado - (10) - Cuaderno de dibujo:448}</td>
            <td colspan="1">{Colores de Cinta - (10) - Cuaderno de dibujo:449}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_10_cuaderno_de_dibujo=number_format((float)$form_data['field'][448], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cuaderno_de_dibujo=number_format((float)$form_data['field'][452], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_10_cuaderno_de_dibujo=number_format((float)$form_data['field'][450], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_10_cuaderno_de_dibujo=number_format((float)$form_data['field'][451], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA CUADERNO DE DIBUJO 10-->


        <!-- TOTALES CUADERNO DE DIBUJO-->
        <tr>
            <td colspan="1">{Total cuadernos cantidad Cuaderno de dibujo:567}</td>
            <td colspan="5"></td>
            <td colspan="1">Subtotal Cuaderno de dibujo: </td>
            <td colspan="1"></td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal__cuaderno_de_dibujo=number_format((float)$form_data['field'][570], 2, '.', ','); ?>
            </td>
        </tr>

        <!-- TERMINA TOTALES CUADERNO DE DIBUJO ---->
    </tbody>
</table>
</div>

<!--------------------------------------------------------------------------------------------------------------------->

<!-------------------------Interiores Frances ---------------------------------->
<table>
    <tbody>
        <!-- FRANCES -->

        <tr>
            <td colspan="9"><b>Fomato: FRANCES Tamaño: 14X21.5 CM [gravityforms action="conditional" merge_tag="{¿Rayado
                    personalizado Frances (1)?:382}" condition="is" value=""] UNIVERSAL [/gravityforms]{¿Rayado
                    personalizado Frances (1)?:382}</b>
            </td>
        </tr>
        <tr>
            <td colspan="1">Cant</td>
            <td colspan="1">Portada</td>
            <td colspan="1">Tipo de cuaderno</td>
            <td colspan="1">Hojas&nbsp;&nbsp; /&nbsp; Papel&nbsp;&nbsp; / &nbsp; Acabado</td>
            <td colspan="1">Cinta/Espiral</td>
            <td colspan="1">Precio lista</td>
            <td colspan="1">Des</td>
            <td colspan="1">Precio/vta</td>
            <td colspan="1">Subtotal</td>
        </tr>

        <!-- CUADERNO DE DIBUJO 1-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (1) - Frances:384}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (1) - Frances:384}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (1) - Frances:385}</td>
            <td colspan="1">{Páginas - Acabado - (1) - Frances:386}</td>
            <td colspan="1">{Colores de Cinta - (1) - Frances:387}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_1_frances=number_format((float)$form_data['field'][386], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_frances=number_format((float)$form_data['field'][453], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_1_frances=number_format((float)$form_data['field'][388], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_1_frances=number_format((float)$form_data['field'][389], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA TERMINA FRANCES 1-->

        <!-- CUADERNO DE FRANCES 2-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (2) - Frances:455}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (2) - Frances:455}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (2) - Frances:456}</td>
            <td colspan="1">{Páginas - Acabado - (2) - Frances:457}</td>
            <td colspan="1">{Colores de Cinta - (2) - Frances:458}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_2_frances=number_format((float)$form_data['field'][457], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_2_frances=number_format((float)$form_data['field'][453], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_2_frances=number_format((float)$form_data['field'][459], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_2_frances=number_format((float)$form_data['field'][460], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA FRANCES 2-->

        <!-- FRANCES 3-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (3) - Frances:461}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (3) - Frances:461}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (3) - Frances:462}</td>
            <td colspan="1">{Páginas - Acabado - (3) - Frances:463}</td>
            <td colspan="1">{Colores de Cinta - (3) - Frances:464}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_3_frances=number_format((float)$form_data['field'][463], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_frances=number_format((float)$form_data['field'][453], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_3_frances=number_format((float)$form_data['field'][465], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_3_frances=number_format((float)$form_data['field'][466], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA FRANCES 3-->

        <!-- INICIO FRANCES 4-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (4) - Frances:467}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (4) - Frances:467}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (4) - Frances:468}</td>
            <td colspan="1">{Páginas - Acabado - (4) -Frances:469}</td>
            <td colspan="1">{Colores de Cinta - (Frances:470}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_4_frances=number_format((float)$form_data['field'][469], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_frances=number_format((float)$form_data['field'][453], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_4_frances=number_format((float)$form_data['field'][471], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_4_frances=number_format((float)$form_data['field'][472], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA FRANCES 4-->

        <!-- FRANCES 5-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (5) - Frances:473}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (5) - Frances:473}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (5) - Frances:474}</td>
            <td colspan="1">{Páginas - Acabado - (5) - Frances:475}</td>
            <td colspan="1">{Colores de Cinta - (5) - Frances:476}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_5_frances=number_format((float)$form_data['field'][475], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_frances=number_format((float)$form_data['field'][453], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_5_frances=number_format((float)$form_data['field'][476], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_5_frances=number_format((float)$form_data['field'][477], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA FRANCES 5-->

        <!-- FRANCES 6-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (6) - Frances:479}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (6) - Frances:479}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (6) - Frances:480}</td>
            <td colspan="1">{Páginas - Acabado - (6) - Frances:481}</td>
            <td colspan="1">{Colores de Cinta - (6) - Frances:482}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_6_frances=number_format((float)$form_data['field'][481], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_frances=number_format((float)$form_data['field'][453], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_6_frances=number_format((float)$form_data['field'][483], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_6_frances=number_format((float)$form_data['field'][484], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA FRANCES 6-->

        <!-- INICIA FRANCES 7-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (7) - Frances:485}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (7) - Frances:485}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (7) - Frances:486}</td>
            <td colspan="1">{Páginas - Acabado - (7) - Frances:487}</td>
            <td colspan="1">{Colores de Cinta - (7) - Frances:488}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_7_frances=number_format((float)$form_data['field'][487], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_frances=number_format((float)$form_data['field'][453], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_7_frances=number_format((float)$form_data['field'][489], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_7_frances=number_format((float)$form_data['field'][490], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA FRANCES 7-->

        <!-- FRANCES 8-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (8) - Frances:491}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (8) - Frances:491}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (8) - Frances:492}</td>
            <td colspan="1">{Páginas - Acabado - (8) - Frances:493}</td>
            <td colspan="1">{Colores de Cinta - (8) - Frances:494}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_8_frances=number_format((float)$form_data['field'][493], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_frances=number_format((float)$form_data['field'][453], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_8_frances=number_format((float)$form_data['field'][495], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_8_frances=number_format((float)$form_data['field'][496], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA FRANCES 8-->


        <!-- INICIO FRANCES 9-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (9) - Frances:497}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (9) - Frances:497}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (9) - Frances:498}</td>
            <td colspan="1">{Páginas - Acabado - (9) - Frances:499}</td>
            <td colspan="1">{Colores de Cinta - (9) - Frances:500}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_9_frances=number_format((float)$form_data['field'][499], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cfrances=number_format((float)$form_data['field'][453], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_9_frances=number_format((float)$form_data['field'][501], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_9_frances=number_format((float)$form_data['field'][502], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA FRANCES 9-->

        <!-- INICIA FRANCES 10-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (10) - Frances:503}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (10) - Frances:503}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (10) - Frances:504}</td>
            <td colspan="1">{Páginas - Acabado - (10) - Frances:505}</td>
            <td colspan="1">{Colores de Cinta - (10) - Frances:506}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_10_frances=number_format((float)$form_data['field'][505], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_frances=number_format((float)$form_data['field'][453], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_10_frances=number_format((float)$form_data['field'][507], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_10_frances=number_format((float)$form_data['field'][508], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA FRANCES 10-->


        <!-- TOTALES FRANCES-->
        <tr>
            <td colspan="1">{Total cuadernos cantidad Cuaderno de dibujo:571}</td>
            <td colspan="5"></td>
            <td colspan="1">Subtotal Francés: </td>
            <td colspan="1"></td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal__frances=number_format((float)$form_data['field'][572], 2, '.', ','); ?>
            </td>
        </tr>

        <!-- TERMINA TOTALES CUADERNO DE DIBUJO ---->
    </tbody>
</table>
</div>

<!--------------------------------------------------------------------------------------------------------------------->

<!-------------------------Interiores Bloc Escolar ---------------------------------->
<table>
    <tbody>
        <!-- BLOC ESCOLAR -->

        <tr>
            <td colspan="9"><b>Fomato: Bloc Escolar Tamaño: 14X21.5 CM [gravityforms action="conditional"
                    merge_tag="{¿Rayado personalizado Bloc Escolar (1)?:383}" condition="is" value=""] UNIVERSAL
                    [/gravityforms]{¿Rayado personalizado Bloc Escolar (1)?:383}</b>
            </td>
        </tr>
        <tr>
            <td colspan="1">Cant</td>
            <td colspan="1">Portada</td>
            <td colspan="1">Tipo de cuaderno</td>
            <td colspan="1">Hojas&nbsp;&nbsp; /&nbsp; Papel&nbsp;&nbsp; / &nbsp; Acabado</td>
            <td colspan="1">Cinta/Espiral</td>
            <td colspan="1">Precio lista</td>
            <td colspan="1">Des</td>
            <td colspan="1">Precio/vta</td>
            <td colspan="1">Subtotal</td>
        </tr>

        <!-- BLOC ESCOLAR 1-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (1) - Bloc Escolar:392}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (1) - Bloc Escolar:392}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (1) - Bloc Escolar:393}</td>
            <td colspan="1">{Páginas - Acabado - (1) - Bloc Escolar:394}</td>
            <td colspan="1">{Colores de Cinta - (1) - Bloc Escolar:395}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_1_bloc_escolar=number_format((float)$form_data['field'][394], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_bloc_escolar=number_format((float)$form_data['field'][509], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_1_bloc_escolar=number_format((float)$form_data['field'][396], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_1_bloc_escolar=number_format((float)$form_data['field'][397], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA TERMINA BLOC ESCOLAR 1-->

        <!-- CUADERNO DE BLOC ESCOLAR 2-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (2) - Bloc Escolar:454}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (2) - Bloc Escolar:454}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (2) - Bloc Escolar:510}</td>
            <td colspan="1">{Páginas - Acabado - (2) - Bloc Escolar:511}</td>
            <td colspan="1">{Colores de Cinta - (2) - Bloc Escolar:512}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_2_bloc_escolar=number_format((float)$form_data['field'][511], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_2_bloc_escolar=number_format((float)$form_data['field'][509], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_2_bloc_escolar=number_format((float)$form_data['field'][513], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_2_bloc_escolar=number_format((float)$form_data['field'][514], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA BLOC ESCOLAR 2-->

        <!-- BLOC ESCOLAR 3-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (3) - Bloc Escolar:515}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (3) - Bloc Escolar:515}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (3) - Bloc Escolar:516}</td>
            <td colspan="1">{Páginas - Acabado - (3) - Bloc Escolar:517}</td>
            <td colspan="1">{Colores de Cinta - (3) - Bloc Escolar:518}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_3_bloc_escolar=number_format((float)$form_data['field'][517], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_bloc_escolar=number_format((float)$form_data['field'][509], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_3_bloc_escolar=number_format((float)$form_data['field'][519], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_3_bloc_escolar=number_format((float)$form_data['field'][520], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA BLOC ESCOLAR 3-->

        <!-- INICIO BLOC ESCOLAR 4-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (4) - Bloc Escolar:521}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (4) - Bloc Escolar:521}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (4) - Bloc Escolar:522}</td>
            <td colspan="1">{Páginas - Acabado - (4) -Bloc Escolar:523}</td>
            <td colspan="1">{Colores de Cinta - (4) Bloc Escolar:524}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_4_bloc_escolar=number_format((float)$form_data['field'][523], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_bloc_escolar=number_format((float)$form_data['field'][509], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_4bloc_escolars=number_format((float)$form_data['field'][525], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_4_bloc_escolar=number_format((float)$form_data['field'][526], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA BLOC ESCOLAR 4-->

        <!-- BLOC ESCOLAR 5-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (5) - Bloc Escolar:527}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (5) - Bloc Escolar:527}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (5) - Bloc Escolar:528}</td>
            <td colspan="1">{Páginas - Acabado - (5) - Bloc Escolar:529}</td>
            <td colspan="1">{Colores de Cinta - (5) - Bloc Escolar:530}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_5_bloc_escolar=number_format((float)$form_data['field'][529], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_bloc_escolar=number_format((float)$form_data['field'][509], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_5_bloc_escolar=number_format((float)$form_data['field'][531], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_5_bloc_escolar=number_format((float)$form_data['field'][532], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA BLOC ESCOLAR 5-->

        <!-- BLOC ESCOLAR 6-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (6) - Bloc Escolar:533}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (6) - Bloc Escolar:533}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (6) - Bloc Escolar:534}</td>
            <td colspan="1">{Páginas - Acabado - (6) - Bloc Escolar:535}</td>
            <td colspan="1">{Colores de Cinta - (6) - Bloc Escolar:536}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_6_bloc_escolar=number_format((float)$form_data['field'][535], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_bloc_escolar=number_format((float)$form_data['field'][509], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_6_bloc_escolar=number_format((float)$form_data['field'][537], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_6_bloc_escolar=number_format((float)$form_data['field'][538], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA BLOC ESCOLAR 6-->

        <!-- INICIA BLOC ESCOLAR 7-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (7) - Bloc Escolar:539}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (7) - Bloc Escolar:539}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (7) - Bloc Escolar:540}</td>
            <td colspan="1">{Páginas - Acabado - (7) - Bloc Escolar:541}</td>
            <td colspan="1">{Colores de Cinta - (7) - Bloc Escolar:542}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_7_bloc_escolar=number_format((float)$form_data['field'][541], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_bloc_escolar=number_format((float)$form_data['field'][509], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_7_bloc_escolar=number_format((float)$form_data['field'][543], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_7_bloc_escolar=number_format((float)$form_data['field'][544], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA BLOC ESCOLAR 7-->

        <!-- INICIA BLOC ESCOLAR 8-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (8) - Bloc Escolar:545}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (8) - Bloc Escolar:545}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (8) - Bloc Escolar:546}</td>
            <td colspan="1">{Páginas - Acabado - (8) - Bloc Escolar:547}</td>
            <td colspan="1">{Colores de Cinta - (8) - Bloc Escolar:548}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_8_bloc_escolar=number_format((float)$form_data['field'][547], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_bloc_escolar=number_format((float)$form_data['field'][509], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_8_bloc_escolar=number_format((float)$form_data['field'][549], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_8_bloc_escolar=number_format((float)$form_data['field'][550], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA BLOC ESCOLAR 8-->


        <!-- INICIO BLOC ESCOLAR 9-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (9) - Bloc Escolar:551}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (9) - Bloc Escolar:551}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (9) - Bloc Escolar:552}</td>
            <td colspan="1">{Páginas - Acabado - (9) - Bloc Escolar:553}</td>
            <td colspan="1">{Colores de Cinta - (9) - Bloc Escolar:554}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_9_bloc_escolar=number_format((float)$form_data['field'][553], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_cbloc_escolar=number_format((float)$form_data['field'][509], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_9_bloc_escolar=number_format((float)$form_data['field'][555], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_9_bloc_escolar=number_format((float)$form_data['field'][556], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA BLOC ESCOLAR 9-->

        <!-- INICIA BLOC ESCOLAR 10-->
        [gravityforms action="conditional" merge_tag="{Cantidad - (10) - Bloc Escolar:557}" condition="isnot" value=""]
        <tr>
            <td colspan="1">{Cantidad - (10) - Bloc Escolar:557}</td>
            <td colspan="1">{Nombre de la Portada:99}</td>
            <td colspan="1">{Rayado - (10) - Bloc Escolar:558}</td>
            <td colspan="1">{Páginas - Acabado - (10) - Bloc Escolar:559}</td>
            <td colspan="1">{Colores de Cinta - (10) - Bloc Escolar:560}</td>
            <td colspan="1"><b>$</b>
                <? echo $paginas_acabado_10_boc_escolar=number_format((float)$form_data['field'][559], 2, '.', ','); ?>
            </td>
            <td colspan="1">
                <? echo $descuento_boc_escolar=number_format((float)$form_data['field'][509], 2, '.', ','); ?>%
            </td>
            <td colspan="1"><b>$</b>
                <? echo $Precio_venta_10_boc_escolar=number_format((float)$form_data['field'][561], 2, '.', ','); ?>
            </td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal_10_boc_escolar=number_format((float)$form_data['field'][562], 2, '.', ','); ?>
            </td>
        </tr>


        [/gravityforms]
        <!--TERMINA BLOC ESCOLAR 10-->


        <!-- TOTALES CUADERNO DE DIBUJO-->
        <tr>
            <td colspan="1">{Total cuadernos cantidad Cuaderno de dibujo:573}</td>
            <td colspan="5"></td>
            <td colspan="1">Subtotal Bloc escolar: </td>
            <td colspan="1"></td>
            <td colspan="1"><b>$</b>
                <? echo $subtotal__bloc_escolar=number_format((float)$form_data['field'][574], 2, '.', ','); ?>
            </td>
        </tr>

        <!-- TERMINA TOTALES CUADERNO DE DIBUJO ---->
    </tbody>
</table>
</div>

<!--------------------------------------------------------------------------------------------------------------------->

<!-- Basic Page Break -->
<pagebreak />

<!-------------------------------------------- Detalles del empaque ------------------->

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th colspan="9" scope="col" class="titulos">DETALLE DE EMPAQUE</th>
            </tr>
        </thead>
    </table>

    <table>
        <tbody>


            <!-- ITALIANO EMPAQUE -->

            <tr>
                <td colspan="9"><b></b>
                </td>
            </tr>
            <tr>
                <td colspan="1">Pend</td>
                <td colspan="1">Entrega</td>
                <td colspan="1">Pedido</td>
                <td colspan="1">Cajas</td>
                <td colspan="1">Contenido</td>
                <td colspan="1"># de cajas</td>
                <td colspan="1">Interior</td>
                <td colspan="1">Forma</td>
                <td colspan="1">Terminado</td>
                <td colspan="1">Color</td>

            </tr>

            <!-- ITALIANO 1-->
            <!-- rayados
            RAYADO PERSONALIZADO
            RAYAS
            CUADRO 5
            CUADRO 7
            CUADRO 10
            CUADRO 14
            PAUTADO
            BLANCO
            DOBLE RAYA -->
            <!--colores:
            MAGENTA
            NARANJA
            AZUL MARINO
            VERDE
            GRIS
            NEGRO
            ROJO
            AMARILLO
            AZUL CYAN
            VIOLETA
            BLANCO
            CAFÉ
            ORO METÁLICO
            PLATA METÁLICO
            POR DEFINIR
                -->
            <tr>

                <!-------------------------------------ITALIANO 1 COLORES -------------------------------------------->
                <?php
	//italiano 1
if($form_data['field'][110] == "RAYAS"){
	$Cantidad_1_Italiano_rayas = $form_data['field'][109]; //10

		//italiano 1 color MAGENTA
	if($form_data['field'][112]=="MAGENTA"){
		$Cantidad_1_Italiano_rayas_magenta = $form_data['field'][109]; //10
		}else{
		$Cantidad_1_Italiano_rayas_magenta = '';
		}else{
	   $Cantidad_1_Italiano_rayas = 0;
	   }
	   //italiano 1 color NARANJA
	if($form_data['field'][112]=="NARANJA"){
		$Cantidad_1_Italiano_rayas_naranja = $form_data['field'][109]; //10
		}else{
		$Cantidad_1_Italiano_rayas_naranja = 0;
		} else {
          $Cantidad_1_Italiano_rayas = 0;
        }
		//italiano 1 color AZUL MARINO
	if($form_data['field'][112]=="AZUL MARINO"){
		$Cantidad_1_Italiano_rayas_azul_marino = $form_data['field'][109]; //10
		}else{
		$Cantidad_1_Italiano_rayas_azul_marino = 0;
		}else{
	   $Cantidad_1_Italiano_rayas = 0;
	   }
       //italiano 1 color VERDE
    if ($form_data['field'][112] == "VERDE") {
            $Cantidad_1_Italiano_rayas_verde = $form_data['field'][109]; //10
        } else {
            $Cantidad_1_Italiano_rayas_verde = 0;
        } else {
            $Cantidad_1_Italiano_rayas = 0;
        }
        //italiano 1 color GRIS
    if ($form_data['field'][112] == "GRIS") {
            $Cantidad_1_Italiano_rayas_gris = $form_data['field'][109]; //10
        } else {
            $Cantidad_1_Italiano_rayas_gris = 0;
        } else {
            $Cantidad_1_Italiano_rayas = 0;
        }

        //italiano 1 color NEGRO    
    if ($form_data['field'][112] == "NEGRO"){
            $Cantidad_1_Italiano_rayas_negro = $form_data['field'][109];
        } else {
            $Cantidad_1_Italiano_rayas_negro = 0;
        }   else{
            $Cantidad_1_Italiano_rayas = 0;
        }

        // italiano 1 color ROJO 
    if ($form_data['field'][112] == "ROJO"){
        $Cantidad_1_Italiano_rayas_rojo = $form_data['field'][109];
    } else {
        $Cantidad_1_Italiano_rayas_rojo = 0;
    } else{
        $Cantidad_1_Italiano_rayas = 0;
    }
        //italiano 1 color AMARILLO
    if ($form_data['field'][112] == "AMARILLO"){
        $Cantidad_1_Italiano_rayas_amarillo = $form_data['field'][109];
    } else {
        $Cantidad_1_Italiano_rayas_amarillo = 0;
    } else{
        $Cantidad_1_Italiano_rayas = 0;
    }
        //italiano 1 color AZUL CYAN
    if ($form_data['field'][112] == "AZUL CYAN"){
        $Cantidad_1_Italiano_rayas_azul_cyan = $form_data['field'][109];
    } else {
        $Cantidad_1_Italiano_rayas_azul_cyan = 0;
    } else{
        $Cantidad_1_Italiano_rayas = 0;
    }
        //italiano 1 color VIOLETA
    if ($form_data['field'][112] == "VIOLETA"){
        $Cantidad_1_Italiano_rayas_violeta = $form_data['field'][109];
    } else {
        $Cantidad_1_Italiano_rayas_violeta = 0;
    } else{
        $Cantidad_1_Italiano_rayas = 0;
    }
        //italiano 1 color BLANCO
    if ($form_data['field'][112] == "BLANCO"){
        $Cantidad_1_Italiano_rayas_blanco = $form_data['field'][109];
    } else {
        $Cantidad_1_Italiano_rayas_blanco = 0;
    } else{
        $Cantidad_1_Italiano_rayas = 0;
    }
        //italiano 1 color CAFÉ
    if ($form_data['field'][112] == "CAFÉ"){
        $Cantidad_1_Italiano_rayas_cafe = $form_data['field'][109];
    } else {
        $Cantidad_1_Italiano_rayas_cafe = 0;
    } else{
        $Cantidad_1_Italiano_rayas = 0;
    }
        //italiano 1 color ORO METÁLICO
    if ($form_data['field'][112] == "ORO METÁLICO"){
        $Cantidad_1_Italiano_rayas_oro_metalico = $form_data['field'][109];
    } else {
        $Cantidad_1_Italiano_rayas_oro_metalico = 0;
    } else{
        $Cantidad_1_Italiano_rayas = 0;
    }
        //italiano 1 color PLATA METÁLICO
    if ($form_data['field'][112] == "PLATA METÁLICO"){
        $Cantidad_1_Italiano_rayas_plata_metalico = $form_data['field'][109];
    } else {
        $Cantidad_1_Italiano_rayas_plata_metalico = 0;
    } else{
        $Cantidad_1_Italiano_rayas = 0;
    }
        //italiano 1 color POR DEFINIR  
    if ($form_data['field'][112] == "POR DEFINIR"){
        $Cantidad_1_Italiano_rayas_por_definir = $form_data['field'][109];
    } else {
        $Cantidad_1_Italiano_rayas_por_definir = 0;
    } else{
        $Cantidad_1_Italiano_rayas = 0;
    }
}

if ($form_data['field'][119] == "RAYAS") {
    $Cantidad_2_Italiano_rayas = $form_data['field'][119]; 

    //italiano 2 color MAGENTA
    if ($form_data['field'][121] == "MAGENTA") {
        $Cantidad_2_Italiano_rayas_magenta = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_magenta = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color NARANJA
    if ($form_data['field'][121] == "NARANJA") {
        $Cantidad_2_Italiano_rayas_naranja = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_naranja = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color AZUL MARINO
    if ($form_data['field'][121] == "AZUL MARINO") {
        $Cantidad_2_Italiano_rayas_azul_marino = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_azul_marino = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color VERDE
    if ($form_data['field'][121] == "VERDE") {
        $Cantidad_2_Italiano_rayas_verde = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_verde = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color GRIS
    if ($form_data['field'][121] == "GRIS") {
        $Cantidad_2_Italiano_rayas_gris = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_gris = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color ROJO
    if ($form_data['field'][121] == "ROJO") {
        $Cantidad_2_Italiano_rayas_rojo = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_rojo = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color AMARILLO
    if ($form_data['field'][121] == "AMARILLO") {
        $Cantidad_2_Italiano_rayas_amarillo = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_amarillo = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color AZUL CYAN
    if ($form_data['field'][121] == "AZUL CYAN") {
        $Cantidad_2_Italiano_rayas_azul_cyan = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_azul_cyan = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color VIOLENTA
    if ($form_data['field'][121] == "VIOLENTA") {
        $Cantidad_2_Italiano_rayas_violeta = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_violeta = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color BLANCO
    if ($form_data['field'][121] == "BLANCO") {
        $Cantidad_2_Italiano_rayas_blanco = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_blanco = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color CAFE
    if ($form_data['field'][121] == "CAFE") {
        $Cantidad_2_Italiano_rayas_cafe = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_cafe = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color ORO METALICO
    if ($form_data['field'][121] == "ORO METALICO") {
        $Cantidad_2_Italiano_rayas_oro_metalico = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_oro_metalico = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 color PLATA METALICO
    if ($form_data['field'][121] == "PLATA METALICO") {
        $Cantidad_2_Italiano_rayas_plata_metalico = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_plata_metalico = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
    //italiano 2 colo POR DEFINIR
    if ($form_data['field'][121] == "POR DEFINIR") {
        $Cantidad_2_Italiano_rayas_por_definir = $form_data['field'][119]; //10
    } else {
        $Cantidad_2_Italiano_rayas_por_definir = 0;
    } else {
        $Cantidad_2_Italiano_rayas = 0;
    }
} 

if ($form_data['field'][125] == "RAYAS") {
    $Cantidad_3_Italiano_rayas = $form_data['field'][124]; //10

    //italiano 3 color MAGENTA 
    if ($form_data['field'][127] == "MAGENTA") {
        $Cantidad_3_Italiano_rayas_magenta = $form_data['field'][124]; //10
    } else {
        $Cantidad_3_Italiano_rayas_magenta = 0;
    } else {
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color NARANJA
    if ($form_data['field'][127] == "NARANJA") {
        $Cantidad_3_Italiano_rayas_naranja = $form_data['field'][124]; //10
    } else {
        $Cantidad_3_Italiano_rayas_naranja = 0;
    } else {
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color AZUL MARINO
    if ($form_data['field'][127] == "AZUL MARINO") {
        $Cantidad_3_Italiano_rayas_azul_marino = $form_data['field'][124]; //10
    } else {
        $Cantidad_3_Italiano_rayas_azul_marino = 0;
    } else {
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color VERDE
    if ($form_data['field'][127] == "VERDE") {
        $Cantidad_3_Italiano_rayas_verde = $form_data['field'][124]; //10
    } else {
        $Cantidad_3_Italiano_rayas_verde = 0;
    } else {
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color GRIS
    if ($form_data['field'][127] == "GRIS") {
        $Cantidad_3_Italiano_rayas_gris = $form_data['field'][124]; //10
    } else {
        $Cantidad_3_Italiano_rayas_gris = 0;
    } else {
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color NEGRO    
    if ($form_data['field'][127]){
        $Cantidad_3_Italiano_rayas_gris = $form_data['field'][124]; //10
    } else {
        $Cantidad_3_Italiano_rayas_negro = 0;
    } else {
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color ROJO 
    if ($form_data['field'][127]){
        $Cantidad_3_Italiano_rayas_rojo = $form_data['fiel'][124];
    }else{
        $Cantidad_3_Italiano_rayas_rojo = 0;
    }else{
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color AMARILLO
    if ($form_data['field'][127]){
        $Cantidad_3_Italiano_rayas_amarillo = $form_data['fiel'][124];
    }else{
        $Cantidad_3_Italiano_rayas_amarillo = 0;
    }else{
        $Cantidad_3_Italiano_rayas = 0;
    }

    //italiano 3 color AZUL CYAN
    if ($form_data['field'][127]){
        $Cantidad_3_Italiano_rayas_azul_cyan = $form_data['fiel'][124];
    }else{
        $Cantidad_3_Italiano_rayas_azul_cyan = 0;
    }else{
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color VIOLETA
    if ($form_data['field'][127]){
        $Cantidad_3_Italiano_rayas_violeta = $form_data['fiel'][124];
    }else{
        $Cantidad_3_Italiano_rayas_violeta = 0;
    }else{
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color BLANCO
    if ($form_data['field'][127]){
        $Cantidad_3_Italiano_rayas_blanco = $form_data['fiel'][124];
    }else{
        $Cantidad_3_Italiano_rayas_blanco = 0;
    }else{
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color CAFE
    if ($form_data['field'][127]){
        $Cantidad_3_Italiano_rayas_cafe = $form_data['fiel'][124];  
    }else{
        $Cantidad_3_Italiano_rayas_cafe = 0;
    }else{
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color ORO METALICO
    if ($form_data['field'][127]){
        $Cantidad_3_Italiano_rayas_oro_metalico = $form_data['fiel'][124];
    }else{
        $Cantidad_3_Italiano_rayas_oro_metalico = 0;
    }else{
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color PLATA METALICO
    if ($form_data['field'][127]){
        $Cantidad_3_Italiano_rayas_plata_metalico = $form_data['fiel'][124];
    }else{
        $Cantidad_3_Italiano_rayas_plata_metalico = 0;
    }else{
        $Cantidad_3_Italiano_rayas = 0;
    }
    //italiano 3 color POR DEFINIR  
    if ($form_data['field'][127]){
        $Cantidad_3_Italiano_rayas_por_definir = $form_data['fiel'][124];
    }else{
        $Cantidad_3_Italiano_rayas_por_definir = 0;
    }else{
        $Cantidad_3_Italiano_rayas = 0;
    }
}

if ($form_data['field'][131] == "RAYAS") {
    $Cantidad_4_Italiano_rayas = $form_data['field'][130]; //10

    //italiano 4 color MAGENTA
    if ($form_data['field'][133] == "MAGENTA") {
        $Cantidad_4_Italiano_rayas_magenta = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_magenta = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color NARANJA
    if ($form_data['field'][133] == "NARANJA") {
        $Cantidad_4_Italiano_rayas_naranja = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_naranja = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color AZUL MARINO
    if ($form_data['field'][133] == "AZUL MARINO") {
        $Cantidad_4_Italiano_rayas_azul_marino = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_azul_marino = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color VERDE
    if ($form_data['field'][133] == "VERDE") {
        $Cantidad_4_Italiano_rayas_verde = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_verde = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color GRIS
    if ($form_data['field'][133] == "GRIS") {
        $Cantidad_4_Italiano_rayas_gris = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_gris = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color NEGRO
    if ($form_data['field'][133]){
        $Cantidad_4_Italiano_rayas_negro = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_gris = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color ROJO
    if ($form_data['field'][133]){
        $Cantidad_4_Italiano_rayas_rojo = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_rojo = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color AMARILLO
    if ($form_data['field'][133]){
        $Cantidad_4_Italiano_rayas_amarillo = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_amarillo = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color AZUL CYAN
    if ($form_data['field'][133]){
        $Cantidad_4_Italiano_rayas_azul_cyan = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_azul_cyan = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color VIOLETA
    if ($form_data['field'][133]){
        $Cantidad_4_Italiano_rayas_violeta = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_violeta = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color BLANCO
    if ($form_data['field'][133]){
        $Cantidad_4_Italiano_rayas_blanco = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_blanco = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color CAFE
    if ($form_data['field'][133]){
        $Cantidad_4_Italiano_rayas_cafe = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_cafe = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color ORO METALICO
    if ($form_data['field'][133]){
        $Cantidad_4_Italiano_rayas_oro_metalico = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_oro_metalico = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color PLATA METALICO
    if ($form_data['field'][133]){
        $Cantidad_4_Italiano_rayas_plata_metalico = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_plata_metalico = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
    //italiano 4 color POR DEFINIR
    if ($form_data['field'][133]){
        $Cantidad_4_Italiano_rayas_por_definir = $form_data['field'][130]; //10
    } else {
        $Cantidad_4_Italiano_rayas_por_definir = 0;
    } else {
        $Cantidad_4_Italiano_rayas = 0;
    }
}

if ($form_data['field'][137] == "RAYAS") {
    $Cantidad_5_Italiano_rayas = $form_data['field'][136]; //10

    //italiano 5 color MAGENTA
    if ($form_data['field'][139] == "MAGENTA") {
        $Cantidad_5_Italiano_rayas_magenta = $form_data['field'][136]; //10
    } else {
        $Cantidad_5_Italiano_rayas_magenta = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color NARANJA
    if ($form_data['field'][139] == "NARANJA") {
        $Cantidad_5_Italiano_rayas_naranja = $form_data['field'][136]; //10
    } else {
        $Cantidad_5_Italiano_rayas_naranja = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color AZUL MARINO
    if ($form_data['field'][139] == "AZUL MARINO") {
        $Cantidad_5_Italiano_rayas_azul_marino = $form_data['field'][136]; //10
    } else {
        $Cantidad_5_Italiano_rayas_azul_marino = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color VERDE
    if ($form_data['field'][139] == "VERDE") {
        $Cantidad_5_Italiano_rayas_verde = $form_data['field'][136]; //10
    } else {
        $Cantidad_5_Italiano_rayas_verde = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color GRIS
    if ($form_data['field'][139] == "GRIS") {
        $Cantidad_5_Italiano_rayas_gris = $form_data['field'][136]; //10
    } else {
        $Cantidad_5_Italiano_rayas_gris = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color NEGRO
    if ($form_data['field'][139] == "NEGRO"){
        $Cantidad_5_Italiano_rayas_negro = $form_data['field'][136];
    }else{
        $Cantidad_5_Italiano_rayas_negro = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color ROJO
    if ($form_data['field'][139] == "ROJO"){
        $Cantidad_5_Italiano_rayas_rojo = $form_data['field'][136];
    }else{
        $Cantidad_5_Italiano_rayas_rojo = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color AMARILLO
    if ($form_data['field'][139] == "AMARILLO"){
        $Cantidad_5_Italiano_rayas_amarillo = $form_data['field'][136];
    }else{
        $Cantidad_5_Italiano_rayas_amarillo = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color AZUL CYAN
    if ($form_data['field'][139] == "AZUL CYAN"){
        $Cantidad_5_Italiano_rayas_azul_cyan = $form_data['field'][136];
    }else{
        $Cantidad_5_Italiano_rayas_azul_cyan = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color VIOLETA
    if ($form_data['field'][139] == "VIOLETA"){
        $Cantidad_5_Italiano_rayas_violeta = $form_data['field'][136];
    }else{
        $Cantidad_5_Italiano_rayas_violeta = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color BLANCO
    if ($form_data['field'][139] == "BLANCO"){
        $Cantidad_5_Italiano_rayas_blanco = $form_data['field'][136];
    }else{
        $Cantidad_5_Italiano_rayas_blanco = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color CAFE
    if ($form_data['field'][139] == "CAFE"){
        $Cantidad_5_Italiano_rayas_cafe = $form_data['field'][136];
    }else{
        $Cantidad_5_Italiano_rayas_cafe = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color ORO METALICO
    if ($form_data['field'][139] == "ORO METALICO"){
        $Cantidad_5_Italiano_rayas_oro_metalico = $form_data['field'][136];
    }else{
        $Cantidad_5_Italiano_rayas_oro_metalico = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color PLATA METALICO
    if ($form_data['field'][139] == "PLATA METALICO"){
        $Cantidad_5_Italiano_rayas_plata_metalico = $form_data['field'][136];
    }else{
        $Cantidad_5_Italiano_rayas_plata_metalico = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
    //italiano 5 color POR DEFINIR
    if ($form_data['field'][139] == "POR DEFINIR"){
        $Cantidad_5_Italiano_rayas_por_definir = $form_data['field'][136];
    }else{
        $Cantidad_5_Italiano_rayas_por_definir = 0;
    } else {
        $Cantidad_5_Italiano_rayas = 0;
    }
}
if ($form_data['field'][143] == "RAYAS") {
    $Cantidad_6_Italiano_rayas = $form_data['field'][142]; //10

    //italiano 6 color MAGENTA
    if ($form_data['field'][145] == "MAGENTA") {
        $Cantidad_6_Italiano_rayas_magenta = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_magenta = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color NARANJA
    if ($form_data['field'][145] == "NARANJA") {
        $Cantidad_6_Italiano_rayas_naranja = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_naranja = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color AZUL MARINO
    if ($form_data['field'][145] == "AZUL MARINO") {
        $Cantidad_6_Italiano_rayas_azul_marino = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_azul_marino = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color VERDE
    if ($form_data['field'][145] == "VERDE") {
        $Cantidad_6_Italiano_rayas_verde = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_verde = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color GRIS
    if ($form_data['field'][145] == "GRIS") {
        $Cantidad_6_Italiano_rayas_gris = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_gris = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color NEGRO
    if ($form_data['field'][145] == "GRIS") {
        $Cantidad_6_Italiano_rayas_negro = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_negro = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color ROJO
    if ($form_data['field'][145] == "ROJO") {
        $Cantidad_6_Italiano_rayas_rojo = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_rojo = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color AMARILLO
    if ($form_data['field'][145] == "AMARILLO") {
        $Cantidad_6_Italiano_rayas_amarillo = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_amarillo = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color AZUL CYAN
    if ($form_data['field'][145] == "AZUL CYAN") {
        $Cantidad_6_Italiano_rayas_azul_cyan = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_azul_cyan = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color VIOLETA
    if ($form_data['field'][145] == "VIOLETA") {
        $Cantidad_6_Italiano_rayas_violeta = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_violeta = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color BLANCO
    if ($form_data['field'][145] == "BLANCO") {
        $Cantidad_6_Italiano_rayas_blanco = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_blanco = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color CAFE
    if ($form_data['field'][145] == "CAFE") {
        $Cantidad_6_Italiano_rayas_cafe = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_cafe = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color ORO METALICO
    if ($form_data['field'][145] == "ORO METALICO") {
        $Cantidad_6_Italiano_rayas_oro_metalico = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_oro_metalico = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color PLATA METALICO
    if ($form_data['field'][145] == "PLATA METALICO") {
        $Cantidad_6_Italiano_rayas_plata_metalico = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_plata_metalico = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
    //italiano 6 color POR DEFINIR
    if ($form_data['field'][145] == "POR DEFINIR") {
        $Cantidad_6_Italiano_rayas_por_definir = $form_data['field'][142]; //10
    } else {
        $Cantidad_6_Italiano_rayas_por_definir = 0;
    } else {
        $Cantidad_6_Italiano_rayas = 0;
    }
}

if ($form_data['field'][150] == "RAYAS") {
    $Cantidad_7_Italiano_rayas = $form_data['field'][149]; //10
    //italiano 7 color MAGENTA
    if ($form_data['field'][152] == "MAGENTA") {
        $Cantidad_7_Italiano_rayas_magenta = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_magenta = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color NARANJA
    if ($form_data['field'][152] == "NARANJA") {
        $Cantidad_7_Italiano_rayas_naranja = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_naranja = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color AZUL MARINO
    if ($form_data['field'][152] == "AZUL MARINO") {
        $Cantidad_7_Italiano_rayas_azul_marino = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_azul_marino = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color VERDE
    if ($form_data['field'][152] == "VERDE") {
        $Cantidad_7_Italiano_rayas_verde = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_verde = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color GRIS
    if ($form_data['field'][152] == "GRIS") {
        $Cantidad_7_Italiano_rayas_gris = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_gris = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color NEGRO
    if ($form_data['field'][152] == "NEGRO") {
        $Cantidad_7_Italiano_rayas_negro = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_negro = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color ROJO
    if ($form_data['field'][152] == "ROJO" ) {
        $Cantidad_7_Italiano_rayas_rojo = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_rojo = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color AMARILLO
    if ($form_data['field'][152] == "AMARILLO") {
        $Cantidad_7_Italiano_rayas_amarillo = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_amarillo = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color AZUL CYAN
    if ($form_data['field'][152] == "AZUL CYAN") {
        $Cantidad_7_Italiano_rayas_azul_cyan = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_azul_cyan = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color VIOLETA
    if ($form_data['field'][152] == "VIOLETA") {
        $Cantidad_7_Italiano_rayas_violeta = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_violeta = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color BLANCO
    if ($form_data['field'][152] == "BLANCO") {
        $Cantidad_7_Italiano_rayas_blanco = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_blanco = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color CAFE
    if ($form_data['field'][152] == "CAFE") {
        $Cantidad_7_Italiano_rayas_cafe = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_cafe = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color ORO METALICO
    if ($form_data['field'][152] == "ORO METALICO") {
        $Cantidad_7_Italiano_rayas_oro_metalico = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_oro_metalico = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color PLATA METALICO
    if ($form_data['field'][152] == "PLATA METALICO") {
        $Cantidad_7_Italiano_rayas_plata_metalico = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_plata_metalico = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
    //italiano 7 color POR DEFINIR
    if ($form_data['field'][152] == "POR DEFINIR") {
        $Cantidad_7_Italiano_rayas_por_definir = $form_data['field'][149]; //10
    } else {
        $Cantidad_7_Italiano_rayas_por_definir = 0;
    } else {
        $Cantidad_7_Italiano_rayas = 0;
    }
}

if ($form_data['field'][156] == "RAYAS") {
    $Cantidad_8_Italiano_rayas = $form_data['field'][155]; //10

    //italiano 8 color MAGENTA
    if ($form_data['field'][158] == "MAGENTA") {
        $Cantidad_8_Italiano_rayas_magenta = $form_data['field'][155]; //10
    } else {
        $Cantidad_8_Italiano_rayas_magenta = 0;
    } else {
        $Cantidad_8_Italiano_rayas = 0;
    }
    //italiano 8 color NARANJA
    if ($form_data['field'][158] == "NARANJA") {
        $Cantidad_8_Italiano_rayas_naranja = $form_data['field'][155]; //10
    } else {
        $Cantidad_8_Italiano_rayas_naranja = 0;
    } else {
        $Cantidad_8_Italiano_rayas = 0;
    }
    //italiano 8 color AZUL MARINO
    if ($form_data['field'][158] == "AZUL MARINO") {
        $Cantidad_8_Italiano_rayas_azul_marino = $form_data['field'][155]; //10
    } else {
        $Cantidad_8_Italiano_rayas_azul_marino = 0;
    } else {
        $Cantidad_8_Italiano_rayas = 0;
    }
    // italiano 8 color VERDE
    if ($form_data['field'][158] == "VERDE") {
        $Cantidad_8_Italiano_rayas_verde = $form_data['field'][155]; //10
    } else {
        $Cantidad_8_Italiano_rayas_verde = 0;
    } else {
        $Cantidad_8_Italiano_rayas = 0;
    }
    //italiano 8 color GRIS
    if ($form_data['field'][158] == "GRIS") {
        $Cantidad_8_Italiano_rayas_gris = $form_data['field'][155]; //10
    } else {
        $Cantidad_8_Italiano_rayas_gris = 0;
    } else {
        $Cantidad_8_Italiano_rayas = 0;
    }
    //italiano 8 color NEGRO
    if ($form_data['field'][158] == "NEGRO") {
       $Cantidad_8_Italiano_rayas_negro = $form_data['field'][155];
    }else {
        $Cantidad_8_Italiano_rayas_negro = 0;
    } else {
        $Cantidad_8_Italiano_rayas = 0;
    }
    //italiano 8 color ROJO
    if ($form_data['field'][158] == "ROJO") {
        $Cantidad_8_Italiano_rayas_rojo = $form_data['field'][155];
     }else {
         $Cantidad_8_Italiano_rayas_rojo = 0;
     } else {
         $Cantidad_8_Italiano_rayas = 0;
     }
    //italiano 8 color AMARILLO
    if ($form_data['field'][158] == "AMARILLO") {
        $Cantidad_8_Italiano_rayas_amarillo = $form_data['field'][155];
     }else {
         $Cantidad_8_Italiano_rayas_amarillo = 0;
     } else {
         $Cantidad_8_Italiano_rayas = 0;
     }
    //italiano 8 color AZUL CYAN
    if ($form_data['field'][158] == "AZUL CYAN") {
        $Cantidad_8_Italiano_rayas_azul_cyan = $form_data['field'][155];
     }else {
         $Cantidad_8_Italiano_rayas_azul_cyan = 0;
     } else {
         $Cantidad_8_Italiano_rayas = 0;
     }
    //italiano 8 color VIOLETA
    if ($form_data['field'][158] == "VIOLETA") {
        $Cantidad_8_Italiano_rayas_violeta = $form_data['field'][155];
     }else {
         $Cantidad_8_Italiano_rayas_violeta = 0;
     } else {
         $Cantidad_8_Italiano_rayas = 0;
     }
    //italiano 8 color BLANCO
    if ($form_data['field'][158] == "BLANCO") {
        $Cantidad_8_Italiano_rayas_blanco = $form_data['field'][155];
     }else {
         $Cantidad_8_Italiano_rayas_blanco = 0;
     } else {
         $Cantidad_8_Italiano_rayas = 0;
     }
    //italiano 8 color CAFE
    if ($form_data['field'][158] == "CAFE") {
        $Cantidad_8_Italiano_rayas_cafe = $form_data['field'][155];
     }else {
         $Cantidad_8_Italiano_rayas_cafe = 0;
     } else {
         $Cantidad_8_Italiano_rayas = 0;
     }

    //italiano 8 color ORO METALICO
    if ($form_data['field'][158] == "ORO METALICO") {
        $Cantidad_8_Italiano_rayas_oro_metalico = $form_data['field'][155];
     }else {
         $Cantidad_8_Italiano_rayas_oro_metalico = 0;
     } else {
         $Cantidad_8_Italiano_rayas = 0;
     }
    //italiano 8 color PLATA METALICO
    if ($form_data['field'][158] == "PLATA METALICO") {
        $Cantidad_8_Italiano_rayas_plata_metalico = $form_data['field'][155];
     }else {
         $Cantidad_8_Italiano_rayas_plata_metalico = 0;
     } else {
         $Cantidad_8_Italiano_rayas = 0;
     }
    }
    if ($form_data['field'][162] == "RAYAS"){
        $Cantidad_9_Italiano_rayas = $form_data['field'][161]; //10

    //italiano 9 color MAGENTA
    if ($form_data['field'][164] == "MAGENTA") {
        $Cantidad_9_Italiano_rayas_magenta = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_magenta = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color NARANJA
    if ($form_data['field'][164] == "NARANJA") {
        $Cantidad_9_Italiano_rayas_naranja = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_naranja = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color AZUL MARINO
    if ($form_data['field'][164] == "AZUL MARINO") {
        $Cantidad_9_Italiano_rayas_azul_marino = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_azul_marino = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color VERDE
    if ($form_data['field'][164] == "VERDE") {
        $Cantidad_9_Italiano_rayas_verde = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_verde = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color GRIS
    if ($form_data['field'][164] == "GRIS") {
        $Cantidad_9_Italiano_rayas_gris = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_gris = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color NEGRO    
    if ($form_data['field'][164] == "NEGRO") {
        $Cantidad_9_Italiano_rayas_negro = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_negro = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color ROJO
    if ($form_data['field'][164] == "ROJO") {
        $Cantidad_9_Italiano_rayas_negro = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_negro = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color AMARILLO
    if ($form_data['field'][164]){
        $Cantidad_9_Italiano_rayas_amarillo = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_amarillo = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color AZUL CYAN
    if ($form_data['field'][164] == "AZUL CYAN") {
        $Cantidad_9_Italiano_rayas_azul_cyan = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_azul_cyan = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color VIOLETA
    if ($form_data['field'][164] == "VIOLETA") {
        $Cantidad_9_Italiano_rayas_violeta = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_violeta = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color BLANCO
    if ($form_data['field'][164] == "BLANCO") {
        $Cantidad_9_Italiano_rayas_blanco = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_blanco = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color CAFE
    if ($form_data['field'][164] == "CAFE") {
        $Cantidad_9_Italiano_rayas_cafe = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_cafe = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color ORO METALICO
    if ($form_data['field'][164] == "ORO METALICO") {
        $Cantidad_9_Italiano_rayas_oro_metalico = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_oro_metalico = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    //italiano 9 color PLATA METALICO
    if ($form_data['field'][164] == "PLATA METALICO") {
        $Cantidad_9_Italiano_rayas_plata_metalico = $form_data['field'][161]; //10
    } else {
        $Cantidad_9_Italiano_rayas_plata_metalico = 0;
    } else {
        $Cantidad_9_Italiano_rayas = 0;
    }
    }
    if ($form_data['field'][168] == "RAYAS") {
        $Cantidad_10_Italiano_rayas = $form_data['field'][167]; //11
        //italiano 10 color MAGENTA
        if ($form_data['field'][170] == "MAGENTA") {
            $Cantidad_10_Italiano_rayas_magenta = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_magenta = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color NARANJA
        if ($form_data['field'][170] == "NARANJA") {
            $Cantidad_10_Italiano_rayas_naranja = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_naranja = 0;
        }else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color AZUL MARINO
        if ($form_data['field'][170] == "AZUL MARINO") {
            $Cantidad_10_Italiano_rayas_azul_marino = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_azul_marino = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color VERDE
        if ($form_data['field'][170] == "VERDE") {
            $Cantidad_10_Italiano_rayas_verde = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_verde = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color GRIS
        if ($form_data['field'][170] == "GRIS") {
            $Cantidad_10_Italiano_rayas_gris = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_gris = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color NEGRO
        if ($form_data['field'][170] == "NEGRO") {
            $Cantidad_10_Italiano_rayas_negro = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_negro = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color ROJO
        if ($form_data['field'][170] == "ROJO") {
            $Cantidad_10_Italiano_rayas_rojo = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_rojo = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color AMARILLO
        if ($form_data['field'][170] == "AMARILLO") {
            $Cantidad_10_Italiano_rayas_amarillo = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_amarillo = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color AZUL CYAN
        if ($form_data['field'][170] == "AZUL CYAN") {
            $Cantidad_10_Italiano_rayas_azul_cyan = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_azul_cyan = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color VIOLETA
        if ($form_data['field'][170] == "VIOLETA") {
            $Cantidad_10_Italiano_rayas_violeta = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_violeta = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color BLANCO
        if ($form_data['field'][170] == "BLANCO") {
            $Cantidad_10_Italiano_rayas_blanco = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_blanco = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color CAFE
        if ($form_data['field'][170] == "CAFE") {
            $Cantidad_10_Italiano_rayas_cafe = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_cafe = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color ORO METALICO
        if ($form_data['field'][170] == "ORO METALICO") {
            $Cantidad_10_Italiano_rayas_oro_metalico = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_oro_metalico = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
        //italiano 10 color PLATA METALICO
        if ($form_data['field'][170] == "PLATA METALICO") {
            $Cantidad_10_Italiano_rayas_plata_metalico = $form_data['field'][167]; //11
        } else {
            $Cantidad_10_Italiano_rayas_plata_metalico = 0;
        } else {
            $Cantidad_10_Italiano_rayas = 0;
        }
    }

  

    ?>
                <!----------------------- TERMINA ITALIANO 1 RAYAS ------------------------->




                <?php  





	
	//  $suma_total_italiano_rayas = $Cantidad_1_Italiano_rayas+$Cantidad_2_Italiano_rayas+$Cantidad_3_Italiano_rayas
	//  $suma_total_italiano_color_magenta = $Cantidad_1_Italiano_rayas_magenta + $Cantidad_2_Italiano_rayas_magenta
	//  $suma_total_italiano_color_naranja =
	//  $suma_total_italiano_color_azul_marino =
	  
	  
	  // $form_data['field'][130];
	  // $form_data['field'][136];
	  // $form_data['field'][142];
	  // $form_data['field'][149];
	  // $form_data['field'][155];
	  // $form_data['field'][161];
	  // $form_data['field'][167];
	   
	   
     ?>
                <?php if($Cantidad_1_Italiano_rayas > 0){ ?>
                <td colspan="1"><?php echo $Cantidad_1_Italiano_rayas?></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1">MAGENTA: <?php echo $Cantidad_1_Italiano_rayas_magenta ?>
                    NARANJA
                    AZUL MARINO
                    VERDE
                    GRIS
                    NEGRO
                    ROJO
                    AMARILLO
                    AZUL CYAN
                    VIOLETA
                    BLANCO
                    CAFÉ
                    ORO METÁLICO
                    PLATA METÁLICO </td>
                <?php }	?>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>

            </tr>


            [/gravityforms]

            <tr>

            </tr>
            <td colspan="9"></td>
        </tbody>
    </table>

    <!----------------------------------- fin detalle de pedido ------------------------------------>
</div>