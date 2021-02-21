<?php


class ArrayWorker
{
    protected $array = array();
    protected $min = 0;
    protected $max = 0;

    function  __construct(){
        $this->fill();
        $this->reindex();
    }

    protected function fill()
    {
        for($i=0;$i<10;$i++){
            $this->array[$i]=rand(0,100);
        }
        //var_dump($this->array);
    }

    protected function reindex()
    {
        $count = count ($this->array);
        // поиск минимального и максимального индекса массива
        for ($i = 1; $i < $count; $i++) {
            if ($this->array[$i] > $this->array[$this->max]) {
                $this->max = $i;
            }
            if ($this->array[$i] < $this->array[$this->min]){
                $this->min = $i;
            }
        }
        // меняем местами максимальное и минимальное значение свойства
        $this->array[$this->min] += $this->array[$this->max];
        $this->array[$this->max] = $this->array[$this->min] - $this->array[$this->max];
        $this->array[$this->min] = $this->array[$this->min] - $this->array[$this->max];
        //var_dump($this->array);
    }

    public function dump(){
        $sum = $this->max+$this->min;
        echo('Вывод суммы min и max индексов чисел массива(PHP):'.' '.$sum);
    }
}

