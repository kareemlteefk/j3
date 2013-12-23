<?php 

/*******************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: Creative Commons
/*
/*******************************************************************************************/


function fontChooser($fontfamily)
{
	
	$font_arr = array('fontlink'=>false, 'fontfamily'=>false);
	
	switch($fontfamily)
	{
		case 'ABeeZee':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=ABeeZee&subset=cyrillic,greek,latin' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'ABeeZee', Arial, serif !important;";
			break;	
		case 'Acme':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Acme&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Acme', Arial, serif !important;";
			break;	
		case 'Advent Pro:100':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:100&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Advent Pro', Arial, serif !important; font-weight: 100;";
			break;	
		case 'Advent Pro:200':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:200&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Advent Pro', Arial, serif !important; font-weight: 200;";		
			break;	
		case 'Advent Pro:300':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Advent Pro', Arial, serif !important; font-weight: 300;";		
			break;	
		case 'Advent Pro:400':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Advent Pro', Arial, serif !important; font-weight: 400;";		
			break;	
		case 'Advent Pro:500':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Advent Pro', Arial, serif !important; font-weight: 500;";		
			break;	
		case 'Advent Pro:600':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Advent Pro', Arial, serif !important; font-weight: 600;";		
			break;	
		case 'Advent Pro:700':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Advent Pro', Arial, serif !important; font-weight: 700;";		
			break;	
		case 'Arimo:400':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Arimo:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Arimo', Arial, serif !important; font-weight: 400;";		
			break;	
		case 'Arimo:400italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Arimo:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Arimo', Arial, serif !important; font-weight: 400; font-style: italic;";				
			break;	
		case 'Arimo:700':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Arimo:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Arimo', Arial, serif !important; font-weight: 700;";						
			break;	
		case 'Arimo:700italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Arimo:700italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Arimo', Arial, serif !important; font-weight: 700; font-style: italic;";						
			break;	
		case 'Arizonia':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Arizonia&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Arizonia', Arial, serif !important;";
			break;	
		case 'Average':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Average&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Average', Arial, serif !important;";
			break;	
		case 'BenchNine:700':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=BenchNine:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'BenchNine', Arial, serif !important; font-weight: 700;";
			break;	
		case 'BenchNine:400':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=BenchNine:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'BenchNine', Arial, serif !important; font-weight: 400;";
			break;	
		case 'BenchNine:300':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=BenchNine:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'BenchNine', Arial, serif !important; font-weight: 300;";
			break;	
		case 'Carme':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Carme&subset=cyrillic,greek,latin' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Carme', Arial, sans-serif; !important;";
			break;	
		case 'Comfortaa':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Comfortaa&subset=cyrillic,greek,latin' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Comfortaa', Arial, sans-serif; !important;";
			break;	
		case 'Convergence':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Convergence&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Convergence', Arial, serif !important;";
			break;	
		case 'Cuprum:400':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Cuprum:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Cuprum', Arial, serif !important; font-weight: 400;";
			break;	
		case 'Cuprum:400italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Cuprum:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Cuprum', Arial, serif !important; font-weight: 400; font-style: italic;";
			break;	
		case 'Cuprum:700':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Cuprum:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Cuprum', Arial, serif !important; font-weight: 700;";
			break;	
		case 'Cuprum:700italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Cuprum:700italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Cuprum', Arial, serif !important; font-weight: 700; font-style: italic;";
			break;	
		case 'Exo:100':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:100&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 100;";
			break;	
		case 'Exo:100italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:100italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 100; font-style: italic;";
			break;	
		case 'Exo:200':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:200&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 200;";
			break;	
		case 'Exo:200italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:200italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 200; font-style: italic;";
			break;	
		case 'Exo:300':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 300;";
			break;	
		case 'Exo:300italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:300italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 300; font-style: italic;";
			break;	
		case 'Exo:400':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 400;";
			break;	
		case 'Exo:400italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 400; font-style: italic;";
			break;	
		case 'Exo:500':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:500&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 500;";
			break;	
		case 'Exo:500italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:500italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 500; font-style: italic;";
			break;	
		case 'Exo:600':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 600;";
			break;	
		case 'Exo:600italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:600italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 600; font-style: italic;";
			break;	
		case 'Exo:700':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 700;";
			break;	
		case 'Exo:700italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:700italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 700; font-style: italic;";
			break;	
		case 'Exo:800':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:800&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 800;";
			break;																																																															
		case 'Exo:800italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:800italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 800; font-style: italic;";
			break;	
		case 'Exo:900':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:900&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 900;";
			break;	
		case 'Exo:900italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Exo:900italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Exo', Arial, serif !important; font-weight: 900; font-style: italic;";
			break;	
		case 'Felipa':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Felipa&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Felipa', Arial, serif !important;";
			break;	
		case 'Fredoka One':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Fredoka+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Fredoka One', Arial, serif !important;";
			break;	
		case 'Hammersmith One':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Hammersmith+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Hammersmith One', Arial, serif !important;";
			break;	
		case 'Homenaje':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Homenaje&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Homenaje', Arial, serif !important;";
			break;	
		case 'Jockey One':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Jockey+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Jockey One', Arial, serif !important;";
			break;	
		case 'Jura:300':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Jura:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Jura', Arial, serif !important; font-weight: 300;";
			break;	
		case 'Jura:400':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Jura:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Jura', Arial, serif !important; font-weight: 400;";
			break;	
		case 'Jura:500':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Jura:500&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Jura', Arial, serif !important; font-weight: 500;";
			break;	
		case 'Jura:600':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Jura:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Jura', Arial, serif !important; font-weight: 600;";
			break;	
		case 'Macondo':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Macondo&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Macondo', Arial, serif !important;";
			break;	
		case 'Marmelad':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Marmelad&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Marmelad', Arial, serif !important;";
			break;
		case 'Michroma':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Michroma&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Michroma', sans-serif !important; ";
			break;				
		case 'Mr Bedfort':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Mr+Bedfort&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Mr Bedfort', Arial, serif !important;";
			break;	
		case 'Montserrat':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Montserrat&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Montserrat', Arial, serif !important;";
			break;	
		case 'Monsieur La Doulaise':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Monsieur La Doulaise', Arial, serif !important;";
			break;	
		case 'Muli:300':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Muli:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Muli', Arial, serif !important; font-weight: 300;";
			break;	
		case 'Muli:300italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Muli:300italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Muli', Arial, serif !important; font-weight: 300; font-style: italic;";
			break;	
		case 'Muli:400':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Muli:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Muli', Arial, serif !important; font-weight: 400;";
			break;	
		case 'Muli:400italic':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Muli:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Muli', Arial, serif !important; font-weight: 400; font-style: italic;";
			break;	
		case 'Numans':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Numans&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Numans', Arial, serif !important;";
			break;	
		case 'Oxygen':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Oxygen&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Oxygen', Arial, serif !important;";
			break;	
		case 'Parisienne':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Parisienne&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Parisienne', Arial, serif !important;";
			break;	
		case 'Pontano Sans':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Pontano Sans', Arial, serif !important;";
			break;	
		case 'PT Sans':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'PT Sans', Arial, serif !important;";
			break;	
		case 'Prosto One':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Prosto+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Prosto One', Arial, serif !important;";
			break;	
		case 'Questrial':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Questrial&subset=cyrillic,greek,latin' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Questrial', Arial, serif !important;";
			break;	
		case 'Rouge Script':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Rouge+Script&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Rouge Script', Arial, serif !important;";
			break;	
		case 'Russo One':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Russo+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Russo One', Arial, serif !important;";
			break;	
		case 'Sacramento':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Sacramento&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Sacramento', Arial, serif !important;";
			break;
		case 'Sail':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Sail&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Sail', Arial, serif !important;";
			break;			
		case 'Salsa':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Salsa&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Salsa', Arial, serif !important;";
			break;	
		case 'Sevillana':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Sevillana&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Sevillana', Arial, serif !important;";
			break;				
		case 'Signika:300':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Signika:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Signika', Arial, serif !important; font-weight: 300;";
			break;	
		case 'Signika:400':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Signika:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Signika', Arial, serif !important; font-weight: 400;";
			break;	
		case 'Signika:600':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Signika:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Signika', Arial, serif !important; font-weight: 600;";
			break;	
		case 'Signika:700':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Signika:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Signika', Arial, serif !important; font-weight: 700;";
			break;	
		case 'Six Caps':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Six+Caps&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Six Caps', Arial, serif !important;";
			break;	
		case 'Tangerine:400':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Tangerine:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Tangerine', Arial, serif !important; font-weight: 400;";
			break;	
		case 'Tangerine:700':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Tangerine:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Tangerine', Arial, serif !important; font-weight: 700;";
			break;				
		case 'Tulpen One':
			$font_arr['fontlink'] = "<link href='http://fonts.googleapis.com/css?family=Tulpen+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
			$font_arr['fontfamily'] = "font-family: 'Tulpen One', Arial, serif !important;";
			break;	
		default:
			$font_arr['fontlink'] = false;
			$font_arr['fontfamily'] = "font-family: " . $fontfamily . ';';
	} 

	return $font_arr;
}



?>

