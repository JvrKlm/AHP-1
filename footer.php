<footer>
    <div class="container">
        <div class="row" style="margin-top:30px;">
            <div class="col-xs-12 text-center">
                <a href="http://www.pjesnici-ane-horvat.net/">www.pjesnici-ane-horvat.net</a> | <a href="http://drugaprilika.hr/">www.drugaprilika.hr</a>
                <br>
                <a href="https://www.facebook.com/ana.horvat.7568">FB-profil Ane Horvat</a> | <a href="https://www.facebook.com/Razgovor-s-pjesnikinjom-294300494458039/?modal=admin_todo_tour">Tibine RAZGOVOR S PJESNIKINJOM (koju vodi Ana Horvat)</a>
            </div>
        </div>

        <?php
        
        //Connects to your Database 
        mysql_connect("localhost", "anahorv_brojac", "Zec2605!") or die(mysql_error());
        mysql_select_db("anahorv_brojac") or die(mysql_error());

        //Has visitor been counted in this session?
        //If not, increase counter value by one
        if (!isset($_SESSION['hasVisited'])) {
            $_SESSION['hasVisited'] = "yes";
          //Adds one to the counter
            mysql_query("UPDATE counter SET counter = counter + 1");
        }
        ?>

        <div class="row" style="margin-top:15px;">
            <div class="col-xs-12 text-center">
                <?php 
                    $count = mysql_fetch_row(mysql_query("SELECT counter FROM counter"));
                ?>
                <p>Brojač posjeta: <strong><?php  print "$count[0]"; ?></strong></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center">
                <p>&copy;2016-<?php echo date('Y') ?>. Jasna Palčec/Ana Horvat. Sva prava zadržana.</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://ana-horvat-poetry.net/js/bootstrap.min.js"></script>

</body>

</html>
