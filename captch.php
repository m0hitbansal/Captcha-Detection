 <?php

 function creat(){
 $image = imagecreatetruecolor(52, 24);       
        $background_color = imagecolorallocate($image, 255, 255, 255);  
        imagefilledrectangle($image,0,0,52,24,$background_color); 
 
       /*$line_color = imagecolorallocate($image, 64,64,64);
       // $number_of_lines=rand(3,5);
 
        for($i=0;$i<2;$i++)
        {
            imageline($image,0,rand()%24,52,rand()%24,$line_color);
        }
 
        $pixel = imagecolorallocate($image, 0,0,255);
        for($i=0;$i<50;$i++)
        {
            imagesetpixel($image,rand()%52,rand()%24,$pixel);
        }  */
        $allowed_letters = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456589';
        $length = strlen($allowed_letters);
        $letter = $allowed_letters[rand(0, $length-1)];
        $word='';
        $text_color = imagecolorallocate($image, 0,0,0);
        for ($i = 0; $i< 4;$i++)
        {
            $letter = $allowed_letters[rand(0, $length-1)];
            imagestring($image, 5,  10+($i*10),3+rand()%5, $letter, $text_color);
            $word.=$letter;
        }
 
       // $_SESSION['captcha_string'] = $word;
        $str='image4/'.$word.'.png';
        imagepng($image, $str);
    }
   /* function creat2(){
 $image = imagecreatetruecolor(52, 24);       
        $background_color = imagecolorallocate($image, 231, 235, 111);  
        imagefilledrectangle($image,0,0,52,24,$background_color); 
 
       
 
        $pixel = imagecolorallocate($image, 0,0,255);
        for($i=0;$i<50;$i++)
        {
            imagesetpixel($image,rand()%52,rand()%24,$pixel);
        }  
        $allowed_letters = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456589';
        $length = strlen($allowed_letters);
        $letter = $allowed_letters[rand(0, $length-1)];
        $word='';
        $text_color = imagecolorallocate($image, 0,0,0);
        for ($i = 0; $i< 4;$i++)
        {
            $letter = $allowed_letters[rand(0, $length-1)];
            imagestring($image, 5,  10+($i*10),3+rand()%5, $letter, $text_color);
            $word.=$letter;
        }
 
       // $_SESSION['captcha_string'] = $word;
        $str='image4/'.$word.'.png';
        imagepng($image, $str);
    }
    function creat3(){
 $image = imagecreatetruecolor(52, 24);       
        $background_color = imagecolorallocate($image, 231, 235, 111);  
        imagefilledrectangle($image,0,0,52,24,$background_color); 
 
       $line_color = imagecolorallocate($image, 64,64,64);
       // $number_of_lines=rand(3,5);
 
        for($i=0;$i<2;$i++)
        {
            imageline($image,0,rand()%24,52,rand()%24,$line_color);
        }
 
        
        $allowed_letters = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456589';
        $length = strlen($allowed_letters);
        $letter = $allowed_letters[rand(0, $length-1)];
        $word='';
        $text_color = imagecolorallocate($image, 0,0,0);
        for ($i = 0; $i< 4;$i++)
        {
            $letter = $allowed_letters[rand(0, $length-1)];
            imagestring($image, 5,  10+($i*10),3+rand()%5, $letter, $text_color);
            $word.=$letter;
        }
 
       // $_SESSION['captcha_string'] = $word;
        $str='image4/'.$word.'.png';
        imagepng($image, $str);
    }*/
    for($i=0;$i<15000;$i++){
        creat();
    
    /*creat();
    creat2();
    creat2();
    creat3();*/
}
    ?>
