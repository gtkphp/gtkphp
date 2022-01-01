<?php

namespace My;

#include <time.h>
use \time;
#include <glib-object.h>
use G\Object as GObject;

/** {@example https://www.jirka.org/my-person.gob.html } */
class Person extends GObject {
        /**
         * @var
         */
        public $name = "Nobody";

        /**
         * @property int
         * @nick("Date of birth")
         * @blurb("Date of birth of the person")
         * @minimum(0)
         * @maximum(LONG_MAX)
         * @default_value(2000)
         * @get self::getDob 
         * {@set if ($dob<2002) throw new Exception("Too young"); }
         */
        private $dob;// automaticly set to 2000
  
        /**
         * date of death as a time_t
         * @property int
         * @nick Date of death
         * @blurb Date of death of the person
         * @minimum(0)
         * @maximum(LONG_MAX)
         * @default_value(0)
         * @export
         * @link
         */
        private $dod;
  
        /**
         * number of rounds in our shotgun
         * @var
         */
        private int $rounds_in_shotgun = 0;

        /**
         * When the person gets born, sends out a signal, the caller
         * of the signal should provide the date of birth
         * @signal birth
         * @nick("Date of birth")
         * @blurb("Date of birth of the person")
         * @minimum(0)
         * @maximum(LONG_MAX)
         * @default_value(2022)
         */
        public const BIRTH = g_signal_id;// Hack

        /**
         * @slot BIRTH
         */
        protected function birth (long $dob)
        {
                $this->dob = $dob;
        }
        
        /**
         * when the person dies, sends out a signal, the caller
         * of the signal should provide the date of death
         * @signal death
         */
        public const DEATH = g_signal_id;// Hack
  
        /**
         * @slot DEATH
         */
        public function death (int $dod)
        {
                $this->dod = $dod;
        }

        public function load_shotgun ()
        {
                /* add a round to our shotgun */
                $this->rounds_in_shotgun++;
        }
  
        public function shoot_oneself_in_the_head ()
        {
                if ($this->rounds_in_shotgun == 0) {
                        // trigger_error
                        g_warning ("No rounds in the shotgun!");
                        return;
                }
                
                /* one round was fired */
                $this->rounds_in_shotgun--;

                /* death is imminent if we shoot oneself in the head */
                $this->death (time());
        }
}

$person = new Person();
$person->name = 'Morales';
$person->connect('death', function(){});

// play
$person->rounds_in_shotgun = 3;
g_signal_emit($person, Person::BIRTH, strtotime("10 september 2000"));
