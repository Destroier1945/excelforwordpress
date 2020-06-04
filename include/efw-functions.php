<?php 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'admin_menu', 'efw_Import_Excel');

function efw_Import_Excel(){
    add_menu_page( 
        'Importação de Dados',
        'Importar o Excel',
        'manage_options',
        'include/efw-page.php',
        'importExcel'
        
    );
    
}
function importExcel(){
    require_once'efw-page.php';
}
