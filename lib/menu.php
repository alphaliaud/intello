<?php
/**
 * Classe Menu
 * Permet de créer des menus
 * $style style css
 * $composants liste des items coposant le menu
 */
class Menu{
	private $style;
	private $composants = array();

	/**
	 * Constructeur de la classe Menu
	 * @param $unStyle (style pour css)
	 */
	public function __construct($unStyle ){
		$this->style = $unStyle;
	}

	/**
	 * Ajoute un item à la liste des items du menu
	 * @param $unComposant (un item du menu)
	 */
	public function ajouterComposant($unComposant){
		$this->composants[] = $unComposant;
	}


	/**
	 * Crée un nouvelle item pour le menu
	 * @param $unLien  (valeur transmise)
	 * @param $uneValeur (valeur affichée)
	 * @return un item pour le menu
	 */
	public function creerItemLien($unLien,$uneValeur){
		$composant = array();
		$composant[0] = $unLien ;
		$composant[1] = $uneValeur ;
		return $composant;
	}

	/**
	 * crée le menu à afficher
	 * @param $composantActif (item sélectionné)
	 * @param $nomMenu (nom variable transmise)
	 */
	/*public function creerMenu($composantActif,$nomMenu){
		$menu = '<ul class="nav navbar-nav">';
		foreach($this->composants as $composant){
			if($composant[1] == $composantActif){
				$menu .= "<li>";
				$menu .=  "<span>" . $composant[1] ."</span>";
			}
			else{
				$menu .= "<li>";
				$menu .= "<a href='index.php?" . $nomMenu ;
				$menu .= "=" . $composant[0] . "' >";
				$menu .= "<span>" . $composant[1] ."</span>";
				$menu .= "</a>";
			}
			$menu .= "</li>";
		}
		$menu .= "</ul>";
		return $menu ;
	}*/

    public function creerMenu($composantActif,$nomMenu){
        $menu = "<nav class='ulnav'><div class='menu-icon menu-icon-cross'><span></span></div>";
        foreach($this->composants as $composant){
            if($composant[1] == $composantActif){
                $menu .=  "<a class='disapear'>" . $composant[1] ."</a>";
            }
            else{
                $menu .= "<a class='disapear' href='index.php?" . $nomMenu ;
                $menu .= "=" . $composant[0] . "' >";
                $menu .=  $composant[1] ;
                $menu .= "</a>";
            }
        }
        $menu .= "<a class='hrefimg' href='#'></a>";
        $menu .= "</nav>";
        return $menu ;
    }



}