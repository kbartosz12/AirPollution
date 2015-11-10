
    <h2>Aleja Krasińskiego</h2>
    <div>
        
        <table class="table-bordered" data-toggle="table">
              <thead>
            <tr>
                <th >Jakość powietrza</th>
                <th>Pył PM10</th>
                <th>Pył PM2.5</th>
                <th>Dwutlenek azotu</th>
                <th>Dwutlenek siarki</th>
                <th>Tlenek węgla</th>
                <th>Aktualizacja</th>
            </tr>
            <?php if (!empty($dane)): ?>
                <?php foreach ($dane as $krasinskiego): ?>
            <?php endforeach; ?>
                    <tr>
                        
                        <td>
                            <?php $kolor = $krasinskiego->quality;
                            
 
                            if($kolor == "bardzo zła"){
                            echo "<font color='#800000'>bardzo zła</font>";
                            
                            }
                            
                                                                      
                            elseif ($kolor == "zła") {
                                echo "<font color='#FF0000'>zła</font>";
                            }
                            elseif ($kolor == "dostateczna") {
                                echo "<font color='#FF9900'>dostateczna</font>";
                            }
                            elseif ($kolor =="dobra") {
                                echo "<font color='#33CC33'>dobra</font>";
                            }
                             elseif ($kolor == "bardzo dobra") {
                                echo "<font color='#ADEBAD'>bardzo dobra</font>";
                            }
                            
                            else {
                                     echo $kolor;
                            }
                            ?>
                        </td>
                        <td>
                             <?php echo $krasinskiego->PM10; ?>
                        </td>
                        <td>
                             <?php echo $krasinskiego->PM25; ?>
                        </td>
                        <td>
                            <?php echo $krasinskiego->NO2; ?>
                        </td>
                        <td>
                            <?php echo $krasinskiego->SO2; ?>
                        </td>
                        <td>
                            <?php echo $krasinskiego->CO; ?>
                        </td>
                        <td>
                            <?php echo $krasinskiego->date; ?>
                        </td>
                    </tr>
                <?php echo $krasinskiego->krasinskiego_id; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="3">brak danych</td>
                    </tr>
            <?php endif; ?>
                    
                    <?php if (!empty($dane_bujaka)): ?>
                <?php foreach ($dane_bujaka as $bujaka): ?>
            <?php endforeach; ?>
                    <tr>
                        
                        <td>
                            <?php $kolor_b = $bujaka->quality;
                            
 
                            if($kolor == "bardzo zła"){
                            echo "<font color='#800000'>bardzo zła</font>";
                            
                            }
                            
                                                                      
                            elseif ($kolor == "zła") {
                                echo "<font color='#FF0000'>zła</font>";
                            }
                            elseif ($kolor == "dostateczna") {
                                echo "<font color='#FF9900'>dostateczna</font>";
                            }
                            elseif ($kolor =="dobra") {
                                echo "<font color='#33CC33'>dobra</font>";
                            }
                             elseif ($kolor == "bardzo dobra") {
                                echo "<font color='#ADEBAD'>bardzo dobra</font>";
                            }
                            
                            else {
                                     echo $kolor_b;
                            }
                            ?>
                        </td>
                        <td>
                             <?php echo $bujaka->PM10; ?>
                        </td>
                        <td>
                             <?php echo $bujaka->PM25; ?>
                        </td>
                        <td>
                            <?php echo $bujaka->NO2; ?>
                        </td>
                        <td>
                            <?php echo $bujaka->SO2; ?>
                        </td>
                        <td>
                            <?php echo $bujaka->CO; ?>
                        </td>
                        <td>
                            <?php echo $bujaka->date; ?>
                        </td>
                    </tr>
                <?php //echo $bujaka->bujaka_id; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="3">brak danych</td>
                    </tr>
            <?php endif; ?>
                      </thead>
        </table>
    </div>
</div>


<script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?sensor=false">
        </script>
        <script type="text/javascript">
        var map;
        var lat=50.0456303;
        var lng=19.9979558;
        var zoom=11;
        var info = new google.maps.InfoWindow();
         
    function initialize()
    {
                var myLatlng = new google.maps.LatLng(lat,lng);
                var myOptions = {
                    zoom: zoom,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(document.getElementById("moja-mapa"), myOptions);
     
                var markers = [
                        ['Czujnik Aleja Krasińskiego', 50.0572, 19.9262,'<b>Kraków - Aleja Krasińskiego</B> <br> </br> <?php echo "Jakość powietrza jest <b>".$kolor."</b>";?> \n\
                        <br><strong><a href="/AirPollution/index.php/krasinskiego"><font color=#1F7A1F>Więcej informacji...</font></a></strong></br> '],
                        ['Bujaka', 50.0112, 19.9506,'<b>Kraków - ulica Bujaka</B> 1 content'],
                        ['Bulwarowa', 50.0655, 20.1175,'<b>Kraków - ulica Bulwarowa</B> 1 content']
                ];
 
             for (var i = 0; i < markers.length; i++)
             {
                    marker=addMarker(i);
                }
 
            google.maps.event.trigger(addMarker(2) ,'click');
                 
            function addMarker(i)
            {
                var draftMarker = markers[i];
                var myLatLng = new google.maps.LatLng(draftMarker[1], draftMarker[2]);
                var marker = new google.maps.Marker({
                         position: myLatLng,
                         map: map,
                         title: draftMarker[0]
                 });
                             
                google.maps.event.addListener(marker,"click",function()
                {
                    info.setContent(draftMarker[3]);
                    info.open(map,marker);
                });
                return marker;
            }
        }
 
        </script>
    </head>
    <body onLoad="initialize()">
 <center>
    <div id="moja-mapa" style="width: 1000px; height: 500px;">
        <!-- Miejsce wyświetlenia mapy -->
    </div>
</center>
    </body>      