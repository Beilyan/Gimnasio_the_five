<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Buscador extends Component
{
    public $datos;

    public function __construct()
    {
        $this->datos = [

    // PECHO
    ['nombre' => 'Press de pecho declinado en máquina', 'ruta' => '/pecho_1'],
    ['nombre' => 'Press martillo en banco inclinado con mancuernas', 'ruta' => '/pecho_2'],
    ['nombre' => 'Press martillo con mancuernas en banco plano', 'ruta' => '/pecho_3'],
    ['nombre' => 'Press de banca inclinado con barra', 'ruta' => '/pecho_4'],
    ['nombre' => 'Press de banca con mancuernas', 'ruta' => '/pecho_5'],
    ['nombre' => 'Press alternado con mancuernas en banco plano', 'ruta' => '/pecho_6'],
    ['nombre' => 'Fondos de pecho en máquina asistida', 'ruta' => '/pecho_7'],
    ['nombre' => 'Flexiones con toque de pecho', 'ruta' => '/pecho_8'],
    ['nombre' => 'Flexiones con banda de resistencia', 'ruta' => '/pecho_9'],
    ['nombre' => 'Flexiones sobre balón medicinal', 'ruta' => '/pecho_10'],
    ['nombre' => 'Flexiones a una mano', 'ruta' => '/pecho_11'],
    ['nombre' => 'Flexiones abiertas', 'ruta' => '/pecho_12'],
    ['nombre' => 'Aperturas en banco plano con polea', 'ruta' => '/pecho_13'],
    ['nombre' => 'Aperturas declinado en polea', 'ruta' => '/pecho_14'],
    ['nombre' => 'Squeeze Bench Press', 'ruta' => '/pecho_15'],
    ['nombre' => 'Squeeze Press inclinado con mancuernas', 'ruta' => '/pecho_16'],
    ['nombre' => 'Vuelos a una mano con mancuerna', 'ruta' => '/pecho_17'],
    ['nombre' => 'Fondos de pecho', 'ruta' => '/pecho_18'],
    ['nombre' => 'Aperturas pec deck de pecho', 'ruta' => '/pecho_19'],
    ['nombre' => 'Aperturas con mancuernas en banco plano', 'ruta' => '/pecho_20'],

    // ESPALDA
    ['nombre' => 'Remo supino con mancuernas', 'ruta' => '/espalda_1'],
    ['nombre' => 'Remo supino en polea baja (de pie)', 'ruta' => '/espalda_2'],
    ['nombre' => 'Remo sentado en polea con agarre de cuerda', 'ruta' => '/espalda_3'],
    ['nombre' => 'Remo invertido agarre supino', 'ruta' => '/espalda_4'],
    ['nombre' => 'Remo inclinado en banco con mancuernas (agarre prono)', 'ruta' => '/espalda_5'],
    ['nombre' => 'Remo en polea agarre supino', 'ruta' => '/espalda_6'],
    ['nombre' => 'Remo sentado en polea con agarre abierto', 'ruta' => '/espalda_7'],
    ['nombre' => 'Remo en banco inclinado con mancuernas (agarre neutro)', 'ruta' => '/espalda_8'],
    ['nombre' => 'Remo con mancuernas (ambas manos)', 'ruta' => '/espalda_9'],
    ['nombre' => 'Remo con barra Z (agarre supino)', 'ruta' => '/espalda_10'],
    ['nombre' => 'Remo a una mano en polea baja', 'ruta' => '/espalda_11'],
    ['nombre' => 'Remo con barra landmine (agarre V)', 'ruta' => '/espalda_12'],
    ['nombre' => 'Jalón al pecho tras nuca', 'ruta' => '/espalda_13'],
    ['nombre' => 'Remo sentado en polea baja (agarre V)', 'ruta' => '/espalda_14'],
    ['nombre' => 'Remo con mancuerna (unilateral)', 'ruta' => '/espalda_15'],
    ['nombre' => 'Jalón al pecho agarre abierto', 'ruta' => '/espalda_16'],
    ['nombre' => 'Dominadas agarre neutro', 'ruta' => '/espalda_17'],
    ['nombre' => 'Pull-ups o dominadas', 'ruta' => '/espalda_18'],
    ['nombre' => 'Remo con barra en banco inclinado', 'ruta' => '/espalda_19'],
    ['nombre' => 'Remo con barra recta', 'ruta' => '/espalda_20'],

    // BICEPS
    ['nombre' => 'Curl predicador con polea', 'ruta' => '/biceps_1'],
    ['nombre' => 'Curl predicador a una mano con mancuerna', 'ruta' => '/biceps_2'],
    ['nombre' => 'Curl martillo en polea (con cuerda)', 'ruta' => '/biceps_3'],
    ['nombre' => 'Curl concentrado con mancuerna agarre prono', 'ruta' => '/biceps_4'],
    ['nombre' => 'Curl con barra Z', 'ruta' => '/biceps_5'],
    ['nombre' => 'Curl con barra Z (agarre abierto)', 'ruta' => '/biceps_6'],
    ['nombre' => 'Curl alternado con banda elástica', 'ruta' => '/biceps_7'],
    ['nombre' => 'Curl agarre prono con mancuernas', 'ruta' => '/biceps_8'],
    ['nombre' => 'Curl a un brazo en polea', 'ruta' => '/biceps_9'],
    ['nombre' => 'Curl de martillo cruzado con mancuernas', 'ruta' => '/biceps_10'],
    ['nombre' => 'Curl concentrado en máquina', 'ruta' => '/biceps_11'],
    ['nombre' => 'Curl en polea baja con barra recta', 'ruta' => '/biceps_12'],
    ['nombre' => 'Curl predicador con mancuernas (agarre supino)', 'ruta' => '/biceps_13'],
    ['nombre' => 'Bíceps, brazos en cruz en polea alta', 'ruta' => '/biceps_14'],
    ['nombre' => 'Curl de bíceps en banco Scott', 'ruta' => '/biceps_15'],
    ['nombre' => 'Curl martillo con mancuernas', 'ruta' => '/biceps_16'],
    ['nombre' => 'Curl alternado con mancuerna', 'ruta' => '/biceps_17'],
    ['nombre' => 'Curl de bíceps', 'ruta' => '/biceps_18'],
    ['nombre' => 'Curl invertido con barra', 'ruta' => '/biceps_19'],
    ['nombre' => 'Curl Zottman con mancuernas', 'ruta' => '/biceps_20'],

    // TRICEPS
    ['nombre' => 'Press francés con polea baja', 'ruta' => '/triceps_1'],
    ['nombre' => 'Press de copa con mancuerna de pie', 'ruta' => '/triceps_2'],
    ['nombre' => 'Patada de tríceps con banda elástica', 'ruta' => '/triceps_3'],
    ['nombre' => 'Patada de tríceps en polea a una mano', 'ruta' => '/triceps_4'],
    ['nombre' => 'Patada de tríceps con mancuerna', 'ruta' => '/triceps_5'],
    ['nombre' => 'Flexiones sobre los antebrazos', 'ruta' => '/triceps_6'],
    ['nombre' => 'Flexiones Diamante', 'ruta' => '/triceps_7'],
    ['nombre' => 'Flexiones diamante de rodillas', 'ruta' => '/triceps_8'],
    ['nombre' => 'Extensión de tríceps sobre la cabeza con polea (versión 2)', 'ruta' => '/triceps_9'],
    ['nombre' => 'Extensión de tríceps sobre la cabeza en polea (de rodillas)', 'ruta' => '/triceps_10'],
    ['nombre' => 'Extensión de tríceps en polea (agarre supino)', 'ruta' => '/triceps_11'],
    ['nombre' => 'Extensión de tríceps sobre la cabeza con banda elástica', 'ruta' => '/triceps_12'],
    ['nombre' => 'Rompecráneos con mancuernas', 'ruta' => '/triceps_13'],
    ['nombre' => 'Extensiones de tríceps con agarre en V en polea', 'ruta' => '/triceps_14'],
    ['nombre' => 'Extensión de tríceps acostado con polea baja', 'ruta' => '/triceps_15'],
    ['nombre' => 'Extensión de tríceps acostado con mancuerna', 'ruta' => '/triceps_16'],
    ['nombre' => 'Extensión de tríceps a una mano en polea (agarre cuerda)', 'ruta' => '/triceps_17'],
    ['nombre' => 'Extensión de tríceps a una mano con polea (agarre supino)', 'ruta' => '/triceps_18'],
    ['nombre' => 'Extensión de triceps con mancuernas acostado (agarre prono)', 'ruta' => '/triceps_19'],
    ['nombre' => 'Fondos en banco plano', 'ruta' => '/triceps_20'],

    // ABDOMEN
    ['nombre' => 'Rueda abdominal de rodillas', 'ruta' => '/abdomen_1'],
    ['nombre' => 'Rueda abdominal de pie', 'ruta' => '/abdomen_2'],
    ['nombre' => 'Rotaciones de tronco en máquina', 'ruta' => '/abdomen_3'],
    ['nombre' => 'Plancha lateral', 'ruta' => '/abdomen_4'],
    ['nombre' => 'Plancha de rodillas', 'ruta' => '/abdomen_5'],
    ['nombre' => 'Plancha a una pierna', 'ruta' => '/abdomen_6'],
    ['nombre' => 'Hollow Hold', 'ruta' => '/abdomen_7'],
    ['nombre' => 'Giro Ruso con mancuerna', 'ruta' => '/abdomen_8'],
    ['nombre' => 'Giro Ruso (sin equipo)', 'ruta' => '/abdomen_9'],
    ['nombre' => 'Dead Bug', 'ruta' => '/abdomen_10'],
    ['nombre' => 'Crunch sentado en máquina', 'ruta' => '/abdomen_11'],
    ['nombre' => 'Abdominales sobre pelota de yoga', 'ruta' => '/abdomen_12'],
    ['nombre' => 'Crunch (brazos rectos por encima de la cabeza)', 'ruta' => '/abdomen_13'],
    ['nombre' => 'Criss Cross Legs', 'ruta' => '/abdomen_14'],
    ['nombre' => 'Cocoons', 'ruta' => '/abdomen_15'],
    ['nombre' => 'Air Bike en el suelo', 'ruta' => '/abdomen_16'],
    ['nombre' => 'Toque de talones', 'ruta' => '/abdomen_17'],
    ['nombre' => 'V-Up con mancuerna', 'ruta' => '/abdomen_18'],
    ['nombre' => 'Abdominales cruzados', 'ruta' => '/abdomen_19'],
    ['nombre' => 'Crunch en polea alta', 'ruta' => '/abdomen_20'],

    // HOMBROS
    ['nombre' => 'Rotación interna de hombro en polea', 'ruta' => '/hombros_1'],
    ['nombre' => 'Rotación externa de hombro en polea', 'ruta' => '/hombros_2'],
    ['nombre' => 'Rotación externa de hombro con mancuerna', 'ruta' => '/hombros_3'],
    ['nombre' => 'Remo de deltoides posterior con mancuerna', 'ruta' => '/hombros_4'],
    ['nombre' => 'Press militar de pie en máquina Smith', 'ruta' => '/hombros_5'],
    ['nombre' => 'Press de hombros sentado con mancuernas (agarre neutro)', 'ruta' => '/hombros_6'],
    ['nombre' => 'Press de hombros alternado con mancuernas sentado (agarre neutro)', 'ruta' => '/hombros_7'],
    ['nombre' => 'Press de hombros tras nuca en máquina Smith', 'ruta' => '/hombros_8'],
    ['nombre' => 'Press Arnold con mancuernas', 'ruta' => '/hombros_9'],
    ['nombre' => 'Pike Push-Up', 'ruta' => '/hombros_10'],
    ['nombre' => 'Aperturas posteriores en polea', 'ruta' => '/hombros_11'],
    ['nombre' => 'Vuelos posteriores en banco inclinado con mancuernas', 'ruta' => '/hombros_12'],
    ['nombre' => 'Remo a la cara con cuerda en polea alta', 'ruta' => '/hombros_13'],
    ['nombre' => 'Elevaciones laterales en máquina', 'ruta' => '/hombros_14'],
    ['nombre' => 'Press de hombros en máquina Smith', 'ruta' => '/hombros_15'],
    ['nombre' => 'Aperturas invertidas en máquina', 'ruta' => '/hombros_16'],
    ['nombre' => 'Press de hombros sentado en máquina', 'ruta' => '/hombros_17'],
    ['nombre' => 'Elevaciones frontales con barra', 'ruta' => '/hombros_18'],
    ['nombre' => 'Elevaciones laterales en polea baja', 'ruta' => '/hombros_19'],
    ['nombre' => 'Elevación frontal con mancuernas', 'ruta' => '/hombros_20'],

    // PANTORRILLAS
    ['nombre' => 'Levantamiento de pantorrillas en máquina Smith', 'ruta' => '/pantorrillas_1'],
    ['nombre' => 'Elevación de pantorrillas con barra', 'ruta' => '/pantorrillas_2'],
    ['nombre' => 'Levantamiento de pantorrilla a una pierna (sin equipo)', 'ruta' => '/pantorrillas_3'],
    ['nombre' => 'Elevación de pantorrilla a una pierna con mancuernas', 'ruta' => '/pantorrillas_4'],
    ['nombre' => 'Press de pantorrillas', 'ruta' => '/pantorrillas_5'],
    ['nombre' => 'Elevación de talones de pie en máquina', 'ruta' => '/pantorrillas_6'],
    ['nombre' => 'Elevación de talones sentado', 'ruta' => '/pantorrillas_7'],
    ['nombre' => 'Donkey Calf Raises', 'ruta' => '/pantorrillas_8'],

    // PIERNAS
    ['nombre' => 'Sentadilla sobre Bosu', 'ruta' => '/piernas_1'],
    ['nombre' => 'Sentadilla sumo (sin equipo)', 'ruta' => '/piernas_2'],
    ['nombre' => 'Sentadilla sumo en máquina Smith', 'ruta' => '/piernas_3'],
    ['nombre' => 'Sentadilla sumo con pesa rusa', 'ruta' => '/piernas_4'],
    ['nombre' => 'Sentadilla sumo con barra landmine', 'ruta' => '/piernas_5'],
    ['nombre' => 'Sentadilla split en máquina Smith', 'ruta' => '/piernas_6'],
    ['nombre' => 'Sentadilla split con mancuernas', 'ruta' => '/piernas_7'],
    ['nombre' => 'Sentadilla split con barra', 'ruta' => '/piernas_8'],
    ['nombre' => 'Sentadilla silla en máquina Smith', 'ruta' => '/piernas_9'],
    ['nombre' => 'Sentadilla lateral con mancuerna', 'ruta' => '/piernas_10'],
    ['nombre' => 'Sentadilla en máquina péndulo', 'ruta' => '/piernas_11'],
    ['nombre' => 'Sentadillas con salto', 'ruta' => '/piernas_12'],
    ['nombre' => 'Farmer Carry con barra trampa', 'ruta' => '/piernas_13'],
    ['nombre' => 'Extensión a una pierna en máquina', 'ruta' => '/piernas_14'],
    ['nombre' => 'Estocada con mancuernas', 'ruta' => '/piernas_15'],
    ['nombre' => 'Curl de pierna de pie en máquina', 'ruta' => '/piernas_16'],
    ['nombre' => 'Curl a una pierna tumbado en máquina', 'ruta' => '/piernas_17'],
    ['nombre' => 'Press de pierna posición abierta', 'ruta' => '/piernas_18'],
    ['nombre' => 'Sentadilla Hack Squat', 'ruta' => '/piernas_19'],
    ['nombre' => 'Peso muerto con barra', 'ruta' => '/piernas_20'],
];
    }

    public function render()
    {
        return view('components.buscador');
    }
}
