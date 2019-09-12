<?php
/**
 * This class is useful for creating an instance and making increment and decrement
 * operations on a given date, you can also store a date and check its value as a buffer
 * even calculate the time interval between this and another given date.
 *
 * @author Francisco García Sosa <dev.fran.gs@gmail.com>
 *
 * @since 1.0
 *
 * @param datetime $dataDateTime Date for inialize the status of instance
 *
 */
class classDateTime {
        private $_objetDateTime;

        /**
         * Create internal objet and update the status of the intance with the date and time passed
         *
         * @param  datetime $dataDateTime
         *
         * @return void
         */
        public function __constructor($dataDateTime){

                $this->_objetDateTime = new DateTime($dataDateTime);
        }

        /**
         * Increase a given date and time in a given time interval.
         *
         * @param  datetime $dataDateTime (ex: '20181231 09:30:01')
         * @param  dateinterval $interval a determinted time (ex:'P2D' )
         *
         * @return datetime
         */
        static public function incrementDateTime(DateTime $dataDateTime,DateInterval $interval){

                $resultDateTime = clone $dataDateTime;
                $resultDateTime->add($interval);

           return $resultDateTime;
        }

        /**
         * Decrease a given date and time in a given time interval.
         *
         * @param  datetime $dataDateTime (ex: '20181231 09:30:01')
         * @param  dateinterval $interval a determinted time (ex:'P2D' )
         *
         * @return datetime
         */
        static public function decrementDateTime (DateTime $dataDateTime ,DateInterval $interval){

                $resultDateTime = clone $dataDateTime;
                $resultDateTime->sub($interval);

                return $resultDateTime;
        }

        /**
         * Calculate the time interval between two given dates
         *
         * @param  datetime $dataDateTime
         *
         * @return dateinterval
         */
        public function intervalDateTime(DateTime $dataDateTime){
                return $this->_objetDateTime->diff($dataDateTime);
        }

        /**
         * Shows the current state of the instance, which consists of showing the date and time stored.
         *
         * @return datetime
         */
        public function viewContentObjetDateTime (){
                return this->_objetDateTime;
        }

}

?>

