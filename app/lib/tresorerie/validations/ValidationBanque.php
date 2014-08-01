<?php namespace Lib\Validations;

class ValidationBanque extends ValidationBase
{

	protected $liste_base = array(
		'description' => 'required|not_in:CREATE_FORM_DEFAUT_TXT_DESCRIPTION', 
		);

	protected $liste_store = array(
		'nom' => 'unique:banques,nom|required|not_in:CREATE_FORM_DEFAUT_TXT_NOM', // aFa : Attention redondance dans controller@update
		);

	protected $liste_update = array(
		'nom' => 'unique:banques,nom,<id>|required|not_in:CREATE_FORM_DEFAUT_TXT_NOM', // aFa : Attention redondance dans controller@update
		);

	protected $messages = array(
		'nom.unique' => 'Il existe déjà une banque portant ce nom.',
		'nom.not_in' => 'Oups… Vous n’avez rien saisi de nouveau dans le champs :attribute !',
		'description.not_in' => 'Il vaut mieux, soit laisser le champs :attribute vide, soit y saisir une description.',
		);
}