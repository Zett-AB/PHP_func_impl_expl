<?php
    $nickname=" Alexander";
    $hello="Привет";
    $hellow="Продолжаем изучение PHP - массивы и функции.";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы - функции implode(); и explode();.</title>
</head>
<body>
    <div class="intro">
        <?php
            echo $hello . $nickname . "<br>" . $hellow;
        ?>
    </div>
    <header class="title">
        <h2>Массивы - функции implode(); и explode();.</h2>
    </header>
    <div class="first_step">
        <p>
            В этой части будет рассмотрены функции:
            <ul>
                <li>array_merge();</li>
                <li>implode();</li>
                <li>explode();</li>
            </ul>   
        </p>
    </div>
    <div class="first_step">
        <h3 class="subtitle"> Функция - array_merge();.</h3>
        <p>
            Функция - array_merge();, объединяет два разных массива в один, т.е. с помощью этой функции мы создаем новый массив на основе двух или более других массивов.<br>
            Пример:
            <ul>
                <li>Создаем два массива - $arr и  $arb:</li>
                <li>$arr = array ("продукты", "бутылка");</li>
                <li>$arb = array ("кокос", "банан");</li>
                <li>Теперь с помощью функции array_merge(); объединяем эти два массива в один и таким образом, создаем новый массив $newarr;</li>
                <li>$newarr = array_merge($arr, $arb);</li>
                <li>Выводим в браузер созданный на основе массивов $arr и $arb, новый массив $newarr;</li>
                <li>foreach($newarr as $key => $value ){</li>
                <li>echo "Ключ массива - ".$key. "| Значение массива: ".$value."br>";</li>   
                <li>}</li>                      
            </ul>
            Смотрив в браузере результат, он ниже.
        </p>
        <div class="code_php">
            <?php
               $arr = array ("продукты", "бутылка");
               $arb = array ("кокос", "банан"); ?>
                <h5>Массив $arr</h5>
               <?php
                foreach($arr as $key=>$value){
                    echo "Ключ массива - ".$key." | Значение массива: ".$value."<br>";
                } ?>
                <h5>Массив $arb</h5>
                <?php
                foreach($arb as $key=>$value){
                    echo "Ключ массива - ".$key." | Значение массива: ".$value."<br>";
                }
               $newarr = array_merge($arr, $arb); ?>
               <h5>Массив $newarr</h5>
               <?php
               foreach($newarr as $key=>$value){
                   echo "Ключ массива - ".$key." | Значение массива: ".$value."<br>";
               }
            ?>
        </div>
        <p>
            Видим созданный нами, на основе объединения двух массивов $arr и $arb в один, новый массив $newarr(который содержит значения вышеуказанных двух массивов). 
        </p>
    </div>
    <div class="first_step">
        <h3 class="subtitle"> Функция - implode();.</h3>
        <p>
            Функция - implode();, преобразует массив в строку.<br>
            Пример:
            <ul>
                <li>Создаем два массива - $arс :</li>
                <li>$arс = array ("продукты", "бутылка", "бокал");</li>
                <li>Теперь с помощью функции implode(); преобразуем наш массив $arc в строку, при этом при создании строки даем ей имя $str;</li>
                <li>$str = implode(", ",$arc);</li>
                <li>Выводим в браузер созданную на основе массива $arc нашу нову строку $str;</li>
                <li>echo $str;</li>
            </ul>
            Смотрив в браузере результат, он ниже.
        </p>
        <div class="code_php">
               <h5>Массив $arс</h5>
               <?php
                $arc = array("продукты", "бутылка", "бокал"); 
                foreach($arc as $key=>$value){
                    echo "Ключ массива - ".$key." | Значение массива: ".$value."<br>";
                } ?>
                <h5>Строка $str</h5>
                <?php
                    $str = implode(", ",$arc);
                    echo $str;                
                ?>
        </div>
        <p>
            Видим созданную строку $str, на основе массива $arc. 
        </p>
        <p>
            ВАЖНО - при преобразовании массива в строку, необходимо первым указать разделитель, который используется в массиве(разделитель моожет быть любым начиная от запятой и заканчивая двоеточием, в нашем примере выше, разделитель значения в массиве запятая), именно поэтому в скобках функции implode(); на первом месте мы указали запятую и пробел, т.е. ", ".   
        </p>
    </div>
    <div class="first_step">
        <h3 class="subtitle"> Функция - explode();.</h3>
        <p>
            Функция - explode();, преобразует строку в массив.<br>
            Пример:
            <ul>
                <li>Создаем новую строку - $strarr :</li>
                <li>$strarr = "фотоаппарат", "пленка для фотоаппарата", "фотовспышка", "фотобумага";</li>
                <li>Теперь с помощью функции explode(); преобразуем нашу строку в массив $arrfoto;</li>
                <li>$arrfoto = explode(", ",$strarr);</li>
                <li>Выводим в браузер созданную на основе строки $strarr массив $arrfoto;</li>
                <li>echo "pre>"</li>
                <li>print_r($arrfoto);</li>
                <li>echo "/pre>"</li>
            </ul>
            Смотрив в браузере результат, он ниже.
        </p>
        <div class="code_php">
               <h5>Строка $strarr</h5>
               <?php
                $strarr = "фотоаппарат, пленка для фотоаппарата, фотовспышка, фотобумага"; 
                echo $strarr;
                ?>
                <h5>Массив $arrfoto</h5>
                <?php
                    $arrfoto = explode(", ",$strarr);
                    echo "<pre>";
                    print_r($arrfoto);
                    echo "</pre>";                
                ?>
        </div>
        <p>
            Видим созданный массив $arrfoto, на основе строки $strarr. 
        </p>
        <p>
            ВАЖНО - при преобразовании строки в массив, необходимо первым указать разделитель, который используется в строке(разделитель моожет быть любым начиная от запятой и заканчивая двоеточием, в нашем примере выше, разделитель значения в строке запятая), именно поэтому в скобках функции explode(); на первом месте мы указали запятую и пробел, т.е. ", ".   
        </p>
        <p>
            Теперь попробуем вывести созданный нами из строки $strarr массив $arrfoto с помощью функции foreach.
            <div class="code_php">
               <h5>Наш массив $arrfoto выведенный через foreach</h5>
               <?php
                foreach($arrfoto as $key=>$value){
                    echo "Ключ к массиву - ".$key." | Значение массива: ".$value."<br>";
                }                
                ?>
        </div>
        </p>
    </div>
    
</body>
</html>