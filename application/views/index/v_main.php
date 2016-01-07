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
            
            <div class="col-md-6 animated slideInLeft">
                    <img src="/media/img/logo.png" alt="ферма эко логотип">
                   
            </div>
            <!--header -->
            <div class="col-md-3  center-block search-top form animated slideInRight">
                <?if(isset($search)):?>
                <?foreach($search as $seaech):?>
                <?= $seaech ?>
                <?endforeach?>
                <?endif?> 


            </div>
            </div>
        <div class="row">
            <div class="col-md-12 animated shake">
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


