<div class="students-banner full">
    <div class="container">
        <div class="legend">
            <h2>Conoce lo mejor de cada uno de nuestros estudiantes</h2>
        </div>
        <div class="showcase-search">
            <form action="#" method="post">                
                <input type="text" placeholder="Contador, Desarrollador, Compositor etc.">
                <input type="submit" value="Buscar">
            </form>
        </div>
    </div>
</div>

<div class="students-showcase full">
    <div class="container">
        <div class="left">
           <?php foreach ($data as $row) {?>
               <div class="card">
                   <div class="image">
                       <img src="<?PHP echo $row -> Imagen_Perfil;?>" alt="">
                   </div>
                   <div class="information">
                       <div class="title">
                           <h3><?php echo $row->Nombre; ?></h3>
                           <h4><?php echo $row->Centro_de_Estudios;?></h4>
                       </div>
                       <div class="location">
                           <p><?php echo(!empty($row->Ciudad))? $row->Ciudad : "No Disponible".','.(!empty($row->Pais))? $row->Pais : "No Disponible"; ?></p>
                       </div>
                       <div class="tags">
                           <?php ?>
                           <div class="tag">
                               <a href="#">Android</a>
                           </div>
                           <div class="tag">
                               <a href="#">Programming</a>
                           </div>
                           <div class="tag">
                               <a href="#">Software</a>
                           </div>
                           <div class="tag">
                               <a href="#">Android</a>
                           </div>
                           <div class="tag">
                               <a href="#">Technology</a>
                           </div>
                           <?php ?>
                       </div>
                   </div>
               </div>
            <?php } ?>
            <div class="showcase-next full">
                <div class="container">
                    <a href="#" class="darkpurple">Siguiente ></a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="container">
                <div class="title darkpurple">
                    <h4>Conecta con estudiantes</h4>
                </div>
                <div class="students-filter">
                    <form action="#" method="get">
                        <p>País</p>
                        <select name="country" id="country">
                            <option value="#">México</option>
                            <option value="#">Colombia</option>
                        </select>
                        
                        <p>Ciudad</p>
                        <select name="city" id="city">
                            <option value="#">Cancún</option>
                            <option value="#">Mérida</option>
                        </select>
                        
                        <p>Skill</p>
                        <select name="skill" id="skill">
                            <option value="#">Todos</option>
                            <option value="#">Diseño</option>
                        </select>
                        <input type="submit" value="Filtrar" id="filtrar" class="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>