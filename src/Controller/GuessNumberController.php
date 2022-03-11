<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class GuessNumberController extends AbstractController
{
    private $userNumber = 0;
    private $MIN_VALUE = 1;
    private $MAX_VALUE = 10000000000;
    private $solutions;

    public function __invoke(Request $request) {
        $this->gameStart();

        return $this->render("webs/example-2.html.twig", [
            "guessNumber" => $this->solutions["half"]["guessNumber"],
            "solutions" => $this->solutions,
        ]);
    }

    private function gameStart() {
        $this->userNumber = $_GET["number"];
        $this->solutions["half"] = $this->halfAlgorithm();
        $this->solutions["thirds"] = $this->thirdsAlgorithm();
        $this->solutions["random"] = $this->randomAlgorithm();
        $this->solutions["blend"] = $this->blendAlgorithm();
    }

    private function halfAlgorithm() {
        return $this->test(0);
    }

    private function thirdsAlgorithm() {
        return $this->test(0, 3);
    }

    private function randomAlgorithm() {
        return $this->test(1);
    }

    private function blendAlgorithm() {
        list($guessNumber, $minValue, $maxValue, $attempts) = $this->loadDefaultValues();

        $startTime = microtime(true);

        do { # Forces an interaction before conditional
            $halfNumber = round((($maxValue - $minValue) / 2) + $minValue, 0, PHP_ROUND_HALF_DOWN);
            $randomNumber = random_int($minValue, $halfNumber);

            if ($this->userNumber < $randomNumber) {
                $maxValue = $randomNumber - 1;
                $guessNumber = $halfNumber;
                continue;
            }
            else {
                if ($this->userNumber > $randomNumber) {
                    $minValue = $randomNumber + 1;
                    $guessNumber = $halfNumber;
                } else {
                    $guessNumber = $randomNumber;
                    break;
                }
            }

            if ($this->userNumber < $guessNumber) {
                $maxValue = $guessNumber - 1;
                $guessNumber = $halfNumber;
                continue;
            } else {
                if ($this->userNumber > $guessNumber) $minValue = $guessNumber + 1;
                else break;
            }

            $guessNumber = $halfNumber;

            $attempts[] = $guessNumber; # Appends element - end of array
        } while ($guessNumber != $this->userNumber);

        $endTime = microtime(true);

        return [
            "guessNumber" => $guessNumber,
            "attempts" => $attempts,
            # Time is always returning 0 due to the speed of the program, therefore I commented it
            "time" => $endTime - $startTime,
        ]; # Associative array - accesses by name
    }

    private function test($type = 0, $division = 2)
    {
        list($guessNumber, $minValue, $maxValue, $attempts) = $this->loadDefaultValues();

//        $startTime = round(microtime(true) * 1000); # Current time - miliseconds
        $startTime = microtime(true);

        do { # Forces an interaction before conditional
            if ($this->userNumber < $guessNumber) $maxValue = $guessNumber - 1;
            else $minValue = $guessNumber + 1;

            $guessNumber = $type == 0 ?
                round((($maxValue - $minValue) / $division) + $minValue, 0, PHP_ROUND_HALF_DOWN) :
                random_int($minValue, $maxValue);

            $attempts[] = $guessNumber; # Appends element - end of array
        } while ($guessNumber != $this->userNumber);

//        $endTime = round(microtime(true) * 1000);
        $endTime = microtime(true);

        return [
            "guessNumber" => $guessNumber,
            "attempts" => $attempts,
            # Time is always returning 0 due to the speed of the program, therefore I commented it
            "time" => $endTime - $startTime,
        ]; # Associative array - accesses by name
    }

    private function loadDefaultValues()
    {
        return [0, $this->MIN_VALUE, $this->MAX_VALUE, []];
    }
}
