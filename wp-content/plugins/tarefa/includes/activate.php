<?php

function rai_activate_plugin(){
    //verificando a versão do WP

    if( version_compare(get_bloginfo('version'),'4.5', '<') ){
        wp_die(__('Você precisa atualizar o WordPress', 'tarefas'));
    }
}
