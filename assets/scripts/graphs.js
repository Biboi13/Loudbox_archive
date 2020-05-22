
	<!--Edit me graph-->
	<script type="text/javascript">		
		var ctx = document.getElementById('top_schools_public').getContext('2d');


		var myChart = new Chart(ctx, {
		    type: 'horizontalBar',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		               'rgb(51, 153, 255)',
					   'rgb(255, 105, 97)',
					   'rgb(224, 187, 228)',
					   'rgb(152, 230, 144)',
					   'rgb(255, 253, 150)',
					   'rgb(255, 180, 71)',
					   'rgb(224, 254, 254)'

		            ],
		            borderColor: [
		               'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
					   'rgb(0, 0, 0)',
		    
		            ],
		            borderWidth: 1
					
		        }]
		    },
			
		});
	</script>	
	
	

