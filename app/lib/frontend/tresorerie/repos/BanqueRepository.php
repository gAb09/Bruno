<?php

class BanqueRepository {

	public function nomBanque($id)
	{
		return Banque::find($id)->nom;
	}

}