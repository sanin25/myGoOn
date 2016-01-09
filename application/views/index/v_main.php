<meta http-equiv='Content/Type' content="text/html" charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
            <!--Подключение стилей  -->
                <?if(isset($styles)):?>
                 <?foreach($styles as $style):?>
                  <?= html::style($style)?>
                   <?endforeach?>
                    <?endif?>    
                      <?if(isset($scripts)):?>
                 <?foreach($scripts as $script):?>
                  <?= html::script($script)?>
                   <?endforeach?>
                    <?endif?> 
           <body>              
    <div class="container">
        <div class="row">
            <img class="sun" src="/media/img/sun.png" alt="ферма эко логотип">
            
            <img class="ptic" src="/media/img/ptic.png" alt="ферма эко логотип">
                
            <div class="col-md-4 col-xs-3 animated slideInLeft logo">
                    <img src="/media/img/logo4.png" alt="ферма эко логотип">
                   
            </div>
            <!--header -->
            <div class="col-md-8 col-xs-6 center-block  form animated slideInRight">
               
                
                 <?if(isset($corusel)):?>
                <?foreach($corusel as $corusel):?>
                <?= $corusel ?>
                <?endforeach?>
                <?endif?> 


            </div>
            </div>
        <div class="row">
            <div class="col-md-12 ">
            <!--Меню-->
            <?if(isset($menu_top)):?>
           <?foreach($menu_top as $menu_top):?>
                        <?=$menu_top?>
           <?endforeach?>
           <?endif?> 
           
            </div>
            </div>
       
        <div class="left"></div>
        <div class="center">
           
            <?if(isset($center)):?>
             <p><?=$title?></p>
             <hr>
           <?foreach($center as $center):?>
                <?=$center?>
            <?endforeach?>
            <?endif?> 
        </div>
        <div class="footer">
         <?if(isset($footer)):?>
         <?endif?> 
        </div>
        
        
    </div>
</body>


