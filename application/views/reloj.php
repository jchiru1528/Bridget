
<html lang="es">
<head>
	
	<title>Reloj con cuenta regresiva, JavaScript</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
	<style>
		div.contenedores{
			padding:10px;
		}
		.cuponn{
			background: white;
			border-radius: 5px;
			margin-top: 15px;
		}
		.cuponn p{
			color: black !important;
			font-size: 25px !important;
			padding: 8px 0px;
			text-align: center;
		}
		.mdi-action-alarm{
			color: white;
			font-size: 95px;
			text-shadow:5px 5px #000;
		}
		h9{
			margin-top: 0 !important;
			text-shadow:4px 4px #007A7A;
		}
		h9.texto{
			color:#FFF;
			font-family: "Lato",sans-serif;
			font-size: 30px;
			font-weight: bold;
			margin:0;
		}
		#Scroll{
			display: none;
			position: fixed;
			top:0;
		}
		h9.counter1{
			color:#FFF;
			display: inline-block;
			font-family: "Lato",sans-serif;
			font-size: 50px;
			font-weight: bold;
			margin-bottom: 0px;
			margin-right:10px;			
			margin-top:0px;
		}
		h9.counter{
			color:#FFF;
			display: inline-block;
			font-family: "Lato",sans-serif;
			font-size: 50px;
			font-weight: bold;
			margin-bottom: 0px;
			margin-right:10px;
			margin-top:0px;
		}
		h9.counter:before{
			content: ":";
			position: relative;
			right: 0.1em;
		}
		div.pre{
			margin-top: -15px;
		}
		.pre{
			font-family: "Lato",sans-serif;
			font-size: 15px;
			text-align: center;
			text-transform: uppercase;
		}
		p.time-rest{
			color:#FFF;
			font-family: "Lato",sans-serif;
			font-size: 18px;
			font-weight: bold;
			margin-bottom: -10px;
			margin: 0;
			text-shadow: 4px 1px rgb(1, 113, 113);
		}
		.btn-shop{
			background-color: #428bca !important;
			font-family: "Lato",sans-serif;
			font-size: 18px;
			font-weight: bold;
			margin-top: -15px;
		}
		@media screen and (max-width: 992px){
			.img-responsive{
				display: none;
			}
			.mdi-action-alarm{
				font-size: 50px;
			}
			h9.texto{
				font-size: 18px;
			}
			p.time-rest{
				font-size: 11px;
			}
			#quedan{
				font-size: 13px !important;
				margin-top:15px;
			}
			h9.counter{
				font-size: 35px;
				margin-top: 10px !important;
			}
			h9.counter1{
				font-size: 35px;
				margin-top: 10px !important;
			}
			div.pre span{
				font-size: 10px;
				margin-right: 18px;
			}
			.btn-shop{
				margin-top: -9px !important;
			}
			.ticket{
				margin-top: 15px;
			}
		}
		.inline-block{
			display:inline-block;
		}
		.block{
			display: block;
		}
		</style>
</head>
<body onload="getTime()">
	

			<div class="col-xs-12"  align="center">
				
				<div class="col-md-12 col-xs-12 reloj">

					<div class="inline-block">
						<h9 style="color:#c10202" class="counter1" id="dias">00</h9>
						<span style="color:#FFF" class="pre block">días</span>
					</div>
					<div class="inline-block">
						<h9 style="color:#c10202" class="counter" id="horas">00</h9>
						<span style="color:#FFF" class="pre block">horas</span>
					</div>
					<div class="inline-block">
						<h9  style="color:#c10202" class="counter" id="min">00</h9>
						<span style="color:#FFF" class="pre block">min</span>
					</div>
					<div class="inline-block">
						<h9 style="color:#c10202" class="counter" id="seg">00</h9>
						<span style="color:#FFF" class="pre block">seg</span>
					</div>
				</div>
			</div>
	
	
		
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script>
	function getTime() {
	now = new Date();
	fecha = new Date("2019-01-14 19:00:00");
	days = (fecha - now) / 1000 / 60 / 60 / 24;
	daysRound = Math.floor(days);
	hours = (fecha - now) / 1000 / 60 / 60 - (24 * daysRound);
	hoursRound = Math.floor(hours);
	minutes = (fecha - now) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
	minutesRound = Math.floor(minutes);
	seconds = (fecha - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
	secondsRound = Math.round(seconds);
	if (daysRound <= "-1") {
		//   IMPORTANTE  //
		//Si el conteo regresivo del script el valor de los días es mayor a -1 se para el script, 
		//ya que la fecha esperada se a cumplido, es necesaria este línea de código ya que si no se pone 
		//seguiria el conteo regresívo pero en valores negativos.
	}
	else{
		document.getElementById('dias').innerHTML = daysRound;
		document.getElementById('horas').innerHTML = hoursRound;
		document.getElementById('min').innerHTML = minutesRound;
		document.getElementById('seg').innerHTML = secondsRound;
	}
	newtime = window.setTimeout("getTime();", 1000);
}	
	</script>	
</body>

