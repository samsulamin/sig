<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title>Dashboard &mdash; Stisla</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <link rel="stylesheet" href="{{asset('public/dist/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('public/dist/modules/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dist/modules/summernote/summernote-lite.css')}}">
    <link rel="stylesheet" href="{{asset('public/dist/modules/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dist/css/demo.css')}}">
    <link href="{{asset('public/kartik/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/kartik/themes/explorer-fas/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('public/dist/css/style.css')}}">
    <style>
        #mapid { height: 415px; }
        tr:hover {background-color:#d9d9f2;}
    </style>
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">
            <div class="wrapper">
                @include('admin.navbar')

                {{-- memasukan sidebar--}}
                @include('admin.sidebar')

                {{-- Memanggil halaman section main--}}
                @yield('main')
                
                
                @include('admin.footer')
	        </div>
	    </div>

	    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>
        <script src="{{asset('public/dist/js/leaflet.js')}}"></script>
        <script src="{{asset('public/dist/modules/popper.js')}}"></script>
        <script src="{{asset('public/dist/modules/tooltip.js')}}"></script>
        <script src="{{asset('public/dist/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('public/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
        <script src="{{asset('public/dist/js/sa-functions.js')}}"></script>
        <script src="{{asset('public/dist/modules/chart.min.js')}}"></script>
        <script src="{{asset('public/dist/modules/summernote/summernote-lite.js')}}"></script>
        <script src="{{asset('public/kartik/js/plugins/piexif.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/kartik/js/plugins/sortable.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/kartik/js/fileinput.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/kartik/js/locales/fr.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/kartik/js/locales/es.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/kartik/themes/fas/theme.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/kartik/themes/explorer-fas/theme.js')}}" type="text/javascript"></script>
        {{--<script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                label: 'Statistics',
                data: [460, 458, 330, 502, 430, 610, 488],
                borderWidth: 2,
                backgroundColor: 'rgb(87,75,144)',
                borderColor: 'rgb(87,75,144)',
                borderWidth: 2.5,
                pointBackgroundColor: '#ffffff',
                pointRadius: 4
                }]
            },
            options: {
                legend: {
                display: false
                },
                scales: {
                yAxes: [{
                    ticks: {
                    beginAtZero: true,
                    stepSize: 150
                    }
                }],
                xAxes: [{
                    gridLines: {
                    display: false
                    }
                }]
                },
            }
            });
        </script>--}}
        <script src="{{asset('public/dist/js/scripts.js')}}"></script>
        <script src="{{asset('public/dist/js/custom.js')}}"></script>
        <script src="{{asset('public/dist/js/demo.js')}}"></script>
        <script>
            {{--
            var southWest 	=  	L.latLng(109.020871, -7.313229),
                northEast	=	L.latLng(109.361502, -6.446988),
                maxBoundingBox = L.latLngBounds(southWest, northEast);
                
            var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                maxBounds: maxBoundingBox,
                minZoom: 9,
                maxZoom: 20,
                subdomains:['mt0','mt1','mt2','mt3']
            });

            var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
                maxBounds: maxBoundingBox,
                minZoom: 9,
                maxZoom: 20,
                subdomains:['mt0','mt1','mt2','mt3']
            });

            var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
                maxBounds: maxBoundingBox,
                minZoom: 9,
                maxZoom: 20,
                subdomains:['mt0','mt1','mt2','mt3']
            });
            
            openStreetMap = new L.tileLayer('http://www.openstreetmap.org/',{
                maxZoom:20,
                subdomains:['mt0','mt1','mt2','mt3']
            });

            var mymap = L.map('mapid',{
                zoom: 10,
                center : [-7.031932, 109.145145],
                layers: [googleStreets],
                minZoom: 9,
                maxZoom: 20,
                zoomControl: true,
                attributionControl: false
            });
            
            mymap.setMaxBounds([[-7.313229, 109.020871],[-6.446988, 109.361502]]);
            
            var baseMaps = {
                "Open Street Map":openStreetMap,
                "Google Street": googleStreets,
                "Google Hybrid": googleHybrid,
                "Google Satellite": googleSat
                
            };
            
            L.control.layers(baseMaps).addTo(mymap);
            
            var myStyle = {
                color  : "#9656a1",
                fill : false,
                weight : 1.5,
                opacity : 0.4,
            };
            
            function popUp(f,l){
                var out = [];
                if (f.properties){
                    //for(key in f.properties){
                    //}
                    out.push("Kecamatan : "+f.properties['kecamatan']);
                    out.push("Kota : "+f.properties['kota']);
                    l.bindPopup(out.join("<br />"));
                }
            }
            var jsonTest = new L.GeoJSON.AJAX(["{{asset('public/dist/geojson/tegal.geojson')}}"],{onEachFeature:popUp,style: myStyle}).addTo(mymap);
            
            var myIcon = L.icon({
                iconUrl: '{{asset("public/icon/tourism.png")}}',
                iconSize: [20,20],
                //iconAnchor: [22, 94],
                //popupAnchor: [-3, -76],
                //shadowUrl: '{{asset("public/icon/marker.png")}}',
                //shadowSize: [68, 95],
                //shadowAnchor: [22, 94]
            });
            
            @foreach($wisata as $wisata )
                var marker = L.marker([{{$wisata->latitude}},{{$wisata->longitude}}], {icon: myIcon, title:"Klik untuk melihat informasi"}).addTo(mymap).bindPopup("<b>{{$wisata->namawisata}}</b>");
            @endforeach

            //var popup = L.popup();
            /*marker.on({
                click: function (e) {
                    $("#feature-title").html(myMarkerTitle);
                    $("#feature-info").html(myMarkerContent);
                    $("#featureModal").modal("show");
                }
            });   
            /*marker.on({
                click: function(e){
                    var win =  L.control.window(map,{title:'Hello world!',maxWidth:400,modal: true})
                    .content('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac sollicitudin eros, ut imperdiet felis. Pellentesque pretium mi ante, et faucibus ipsum rutrum sed. Proin accumsan luctus consectetur. In sit amet purus id dui scelerisque ultricies non porta dui. Cras sit amet arcu non est efficitur molestie.')
                    .prompt({callback:function(){alert('This is called after OK click!')}})
                    .show()
                }
            });*/
            --}}
        </script>
        <script>
            $(document).ready( function () {
                $('#table_id').DataTable();
            } );
            $(document).ready( function () {
                $('#table_id').DataTable();
            } );            
        </script>
    </body>
</html>