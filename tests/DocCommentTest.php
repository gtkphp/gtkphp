<?php

namespace My;

#include <time.h>
use \time;
#include <glib-object.h>
use G\Object as GObject;
use G\Signal as GSignal;

/** {@example https://www/ion-molecule-atoms.html } */
class Atom extends GObject {
        public $name;
        /**
         * @var int $protons The number of electrons
         */
        public int $electrons=1;
        protected $protons = 1;
  
        /**
         * @property
         */
        protected $spectra = [410, 434, 486, 656];
        private $levels = [410=>0, 434=>0, 486=>0, 656=>0];

        /**
         * @property int
         * @nick("Energy")
         * @blurb("Energy of the atom")
         * @minimum(0)
         * @maximum(LONG_MAX)
         * @default_value(1)
         * @get self::getEnergy 
         * {@set if ($energy<1) throw new Exception("Plasma"); }
         */
        protected int $energy;// optional, automaticly set to @default_value
  
        protected function getEnergy ()
        {
                return 1;
        }

        /**
         * When the atom absorb energy, sends out a signal, the caller
         * of the signal should provide the date of impulse
         * @signal absorption
         * @nick("Spectra of absorption")
         * @blurb("Spectra of absorption of the atom")
         * @minimum(0)
         * @maximum(LONG_MAX)
         * @default_value(1)
         */
        public const ABSORB = g_signal_id;
  
        /**
         * when the atom emit energy, sends out a signal, the caller
         * of the signal should provide the spectra of emission
         * @signal emission
         */
        public const EMIT = g_signal_id;
  
        /**
         * @slot self::EMIT
         */
        public function emit_first ()
        {
                $this->level--;
        }
  
        public function absorb ()
        {
                if ($this->level > 10) {
                        return;
                }
                $this->level++;
        }
}
$hydrogen = Atom::Factory(1, 1);
$hydrogen->name = '¹H';
$hydrogen->connect('signal::emission', function(){}, NULL,
                   'signal::absorption', function(){}, "User data",
                   NULL);// null-terminated sentinel
connect($hydrogen, 'absorption', function(){}, "User data");
connect($hydrogen, 'absorption', function(){}, "User data");// 3 absorption  listeners

connect($hydrogen, 'notify::name', function(){}, "User data");
connect($hydrogen, 'notify::protons', function(){});// Deprecated optional NULL

$hydrogen->connect('signal::notify::spectra', function(){}, "User data", NULL);// sentinel
      connect($hydrogen, 'notify::electrons', function(){}, NULL);

$hydrogen->connect('signal::notify::levels', function(){}, NULL);// Deprecated optional sentinel
$hydrogen->connect('object-signal::notify::levels', function(){}, NULL, NULL);
$hydrogen->connect('swapped-signal::notify::levels', function(){}, NULL, NULL);
$hydrogen->connect('swapped-object-signal::notify::levels', function(){}, NULL, NULL);

$hydrogen->connect('signal-after::notify::levels', function(){}, NULL, NULL);
$hydrogen->connect('object-signal-after::notify::levels', function(){}, NULL, NULL);
$hydrogen->connect('swapped-signal-after::notify::levels', function(){}, NULL, NULL);
$hydrogen->connect('swapped-object-signal-after::notify::levels', function(){}, NULL, NULL);

// play
g_signal_emit($hydrogen, Atom::ABSORB, [656=>1], $return);// +1 photon
//g_signal_emit_by_name($hydrogen, "absorption", [656=>1], $return);// +1 photon
