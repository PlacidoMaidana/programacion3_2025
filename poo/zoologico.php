<?php

// INTERFACES >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


interface Volador {
    public function volar();
}

interface Nadador {
    public function nadar();
   
}
interface  Sumergirse{
    public function sumergirse();
}
interface Corredor {
    public function correr();
}


// CLASES >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

class Ave {
    protected string $nombre;
    
    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }
    
    public function ponerHuevos(): void {
        echo "$this->nombre está poniendo huevos.<br>";
    }
}

class Gorrion extends Ave implements Volador {
    public function volar(): void {
        echo "$this->nombre está volando.<br>";
    }
}

class Paloma extends Ave implements Volador {
    public function volar(): void {
        echo "$this->nombre está volando.<br>";
    }
}

class Pato extends Ave implements Volador, Nadador, Sumergirse {
    public function volar(): void {
        echo "$this->nombre está volando.<br>";
    }
    
    public function nadar(): void {
        echo "$this->nombre está nadando.<br>";
    }

        
    public function sumergirse(): void {
        echo "$this->nombre se está sumergiendo.<br>";
    }
}

class Avestruz extends Ave implements Corredor {
    public function correr(): void {
        echo "$this->nombre está corriendo.<br>";
    }
}

class PatoDeGoma implements Nadador {
    public function flotar(): void {
        echo "El pato de goma está flotando.<br>";
    }
    
    public function nadar(): void {
        echo "El pato de goma está nadando.<br>";
    }
    
    
}

// Ejemplo de uso >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$gorrion = new Gorrion("Gorrión");
$gorrion->volar();
$gorrion->ponerHuevos();

$paloma = new Paloma("Paloma");
$paloma->volar();
$paloma->ponerHuevos();

$pato = new Pato("Pato");
$pato->volar();
$pato->nadar();
$pato->sumergirse();
$pato->ponerHuevos();

$avestruz = new Avestruz("Avestruz");
$avestruz->correr();
$avestruz->ponerHuevos();

$patoDeGoma = new PatoDeGoma();
$patoDeGoma->flotar();
$patoDeGoma->nadar();

