<?php

class Collector
{

        public function addTree($garden, Fruit $tree) : array{
            $garden[] = $tree;
            return $garden;
        }

        public function collectFruits(array $garden) :int {
            $total = 0;
            foreach ($garden as $tree) {
                    $total += $tree->getQty();
            }
            return $total;
        }

        public function countFruits(array $garden, string $fruit) :int {
            $quantity = 0;
            foreach ($garden as $tree) {
                if ($tree instanceof $fruit) $quantity += $tree->getQty();
            }
            return $quantity;
        }

        public function weight(array $garden) :float {
            $weight = 0;
            foreach ($garden as $tree) {
                $weight += ($tree->getWeight() * $tree->getQty());
            }
            return $weight;
        }

}