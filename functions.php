<?php

function get_field($key, $page_id = 0) {
	$id = $page_id !== 0 ? $page_id : get_the_ID();
	return get_post_meta($id, $key, true);
};

function the_field($key, $page_id = 0) {
	echo get_field($key, $page_id);
};

add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home() {
	$cmb = new_cmb2_box([
		'id' => 'home_box',
		'title' => 'Menu da Semana',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-home.php',
		],
	]);
    
    $cmb->add_field([
        'name'=> 'Comida Lista-Esquerda',
        'id'=> 'comida_l',
        'type'=>'text',
    ]);

    $pratos = $cmb->add_field([
        'name' => 'Pratos',
        'id' => 'pratos',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
          'group_title' => 'Prato {#}',
          'add_button' => 'Adicionar',
          'remove_button' => 'Remover',
          'sortable' => true,
        ],
      ]);
	$cmb->add_group_field($pratos, [
		'name' => 'Preço',
		'id' => 'preco',
		'type' => 'text',
	]);

	$cmb->add_group_field($pratos, [
		'name' => 'Nome',
		'id' => 'nome',
		'type' => 'text',
	]);

	$cmb->add_group_field($pratos, [
		'name' => 'Descrição',
		'id' => 'descricao',
		'type' => 'text',
	]);


    $cmb->add_field([
        'name'=> 'Comida Lista-Direita',
        'id'=> 'comida_r',
        'type'=>'text',
    ]);

    $pratos_r = $cmb->add_field([
        'name' => 'Pratos',
        'id' => 'pratos_r',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
          'group_title' => 'Prato {#}',
          'add_button' => 'Adicionar',
          'remove_button' => 'Remover',
          'sortable' => true,
        ],
      ]);

	$cmb->add_group_field($pratos_r, [
		'name' => 'Preço',
		'id' => 'preco_r',
		'type' => 'text',
	]);

	$cmb->add_group_field($pratos_r, [
		'name' => 'Nome',
		'id' => 'nome_r',
		'type' => 'text',
	]);

	$cmb->add_group_field($pratos_r, [
		'name' => 'Descrição',
		'id' => 'descricao_r',
		'type' => 'text',
	]);

};
add_action('cmb2_admin_init', 'cmb2_fields_sobre');
function cmb2_fields_sobre() {
	$cmb = new_cmb2_box([
		'id' => 'sobre_box',
		'title' => 'Sobre',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-sobre.php',
		],
	]);

	$cmb->add_field([
		'name' => 'Foto Rest',
		'id' => 'foto_rest',
		'type' => 'file',
		'options' => [
			'url' => false,
		],
	]);

	$contents = $cmb->add_field([
        'name' => 'Conteúdos',
        'id' => 'conteudos',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
          'group_title' => 'Conteudo {#}',
          'add_button' => 'Adicionar',
          'remove_button' => 'Remover',
          'sortable' => true,
        ],
      ]);
	$cmb->add_group_field($contents, [
		'name' => 'Titulo',
		'id' => 'titulo_contents',
		'type' => 'text',
	]);

	$cmb->add_group_field($contents, [
		'name' => 'Conteúdo',
		'id' => 'texto_contents',
		'type' => 'textarea',
	]);
}

add_action('cmb2_admin_init', 'cmb2_fields_contato');
function cmb2_fields_contato() {
	$cmb = new_cmb2_box([
		'id' => 'contato_box',
		'title' => 'Contato',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-contato.php',
		],
	]);
	$cmb->add_field([
		'name' => 'Mapa Rest',
		'id' => 'mapa_rest',
		'type' => 'file',
		'options' => [
			'url' => false,
		],
	]);
	$cmb->add_field([
		'name' => 'Link Mapa',
		'id' => 'mapa_link',
		'type' => 'text',
		
	]);

	$datas = $cmb->add_field([
        'name' => 'Dados para contato',
		'description' => 'Inserir dados como: horário de atendimento, endereço, telefone, etc; ',
        'id' => 'dados',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
          'group_title' => 'Conteudo {#}',
          'add_button' => 'Adicionar',
          'remove_button' => 'Remover',
          'sortable' => true,
        ],
      ]);
	$cmb->add_group_field($datas, [
		'name' => 'Titulo',
		'id' => 'titulo_dados',
		'type' => 'text',
	]);

	$cmb->add_group_field($datas, [
		'name' => 'Conteúdo',
		'id' => 'item1_dados',
		'type' => 'text',
	]);
	$cmb->add_group_field($datas, [
		'name' => 'Conteúdo',
		'id' => 'item2_dados',
		'type' => 'text',
	]);
	$cmb->add_group_field($datas, [
		'name' => 'Conteúdo',
		'id' => 'item3_dados',
		'type' => 'text',
	]);
}

?>