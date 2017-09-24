<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Texto
 *
 * @author horacio
 */
class Texto {

    public $texto_pronto;
    public $totalColunas;

    public function converteTexto($info = '') {
        $this->texto_pronto = "<br><div style='clear:both'>";
        $x = explode("[–coluna–]", $info);

        if (is_array($x)) {

            $this->totalColunas = count($x);
            foreach ($x as $parte):
                $this->texto_pronto .= "<div class='coluna_" . $this->totalColunas . "'>" . $parte . "</div>";
            endforeach;
            $this->texto_pronto .= "</div>";
        }
        else
        {$this->texto_pronto=$info;}
        return $this;
    }

}
