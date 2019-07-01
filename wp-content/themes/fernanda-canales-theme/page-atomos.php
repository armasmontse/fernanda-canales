<?php get_header(); ?>

     <div class="archive__row">
          <div class="archive__container">
               <div class="archive__wrapper">
                    <div class="archive__box header">
                         <div class="" style="min-height: 100px;">
                              Header
                         </div>
                    </div>
                    <div class="archive__box sidebar">
                         <ul>
                              <li class="active"> <!-- display block-->
                                   Hola
                                   <ul>
                                        <li>Jajaja</li>
                                        <li>Jajaja</li>
                                        <li>Jajaja</li>
                                   </ul>
                              </li>

                              <li class=""> <!-- display none--> <!-- Mostrarlo siempre en desktop-->
                                   Hola
                                   <ul>
                                        <li>Jajaja</li>
                                        <li>Jajaja</li>
                                        <li>Jajaja</li>
                                   </ul>
                              </li>
                         </ul>
                    </div>
                    <div class="archive__box content">
                         <div class="archive__wrapper-cuadricula">

                              <?php for($i = 0; $i <= 80; $i++): ?>
                                   <div class="archive__box-cuadricula"><?php echo $i; ?></div>
                              <?php endfor; ?>

                         </div>
                    </div>
               </div>
          </div>
     </div>


     <div class="archive__row" style=" margin: 20px 0;">
          <div class="archive__container">
               <div class="archive__wrapper">
                    <div class="archive__box header">
                         <div class="">
                              Header
                         </div>
                    </div>
                    <div class="archive__box sidebar">
                         <ul>
                              <li class="active"> <!-- display block-->
                                   Hola
                                   <ul>
                                        <li>Jajaja</li>
                                        <li>Jajaja</li>
                                        <li>Jajaja</li>
                                   </ul>
                              </li>

                              <li class=""> <!-- display none--> <!-- Mostrarlo siempre en desktop-->
                                   Hola
                                   <ul>
                                        <li>Jajaja</li>
                                        <li>Jajaja</li>
                                        <li>Jajaja</li>
                                   </ul>
                              </li>
                         </ul>
                    </div>
                    <div class="archive__box content">
                         <div class="archive__columns">
                              <div class="archive__col-1-12">IMAGE</div>

                         </div>
                         <div class="archive__columns">

                              <div class="archive__col-1-6">IMAGE</div>
                              <div class="archive__col-1-3">TEXT</div>
                              <div class="archive__col-1-3">TEXT</div>


                         </div>
                         <div class="archive__columns">
                              <div class="archive__col-1-6">IMAGE</div>
                              <div class="archive__offset-1-3"></div>
                              <div class="archive__col-1-3">TEXT</div>

                         </div>
                    </div>
               </div>
          </div>
     </div>


     <div class="grid__row" style="background-color: white;">
          <div class="grid__container" style="background-color: white;">

               <div class="" style="width: 100%; margin: 20px 0; font-size: 26px;">
                    ---------   F O N T S   ----------
               </div>

               <div class="Helvetica" style="width: 100%; font-size: 26px; margin: 0 0 20px 0; ">
                    Helvetica
               </div>

               <div class="HelveticaNeueLTStdRoman" style="width: 100%; font-size: 26px;">
                    HelveticaNeueLTStdRoman
               </div>

               <div class="HelveticaNeueLTStdBd" style="width: 100%; font-size: 26px;">
                    HelveticaNeueLTStdBd
               </div>

               <div class="CourierNew" style="width: 100%; font-size: 26px;">
                    CourierNew
               </div>

          </div>
     </div>


<?php get_footer(); ?>
