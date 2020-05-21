
	
	<!--Edit me graph-->
	<script type="text/javascript">		
		var ctx = document.getElementById('chart-tenant1').getContext('2d');

       

<?php
include 'include/db.php';	
		
	

$sql_1= "SELECT room.room_name, utilities.util_water FROM utilities INNER JOIN (billing INNER JOIN (room INNER JOIN billing_list ON room.room_id = billing_list.billing_room) ON billing.bill_id = billing_list.bill_id) ON utilities.util_id = billing.bill_util Order by util_water DESC LIMIT 1";
$result_1=mysqli_query($con,$sql_1);
while($row_1 = mysqli_fetch_array($result_1)) {

$top_1=(int)$row_1['util_water']; 
$top_1_room=$row_1['room_name']; 

}

		
			
//top2
$sql_2= "SELECT room.room_name, utilities.util_water FROM utilities INNER JOIN (billing INNER JOIN (room INNER JOIN billing_list ON room.room_id = billing_list.billing_room) ON billing.bill_id = billing_list.bill_id) ON utilities.util_id = billing.bill_util Order by util_water DESC LIMIT 2";
$result_2=mysqli_query($con,$sql_2);
while($row_2 = mysqli_fetch_array($result_2)) {

$top_2=(int)$row_2['util_water']; 
$top_2_room=$row_2['room_name']; 
}

	
//top3
$sql_3= "SELECT room.room_name, utilities.util_water FROM utilities INNER JOIN (billing INNER JOIN (room INNER JOIN billing_list ON room.room_id = billing_list.billing_room) ON billing.bill_id = billing_list.bill_id) ON utilities.util_id = billing.bill_util Order by util_water DESC LIMIT 3";
$result_3=mysqli_query($con,$sql_3);
while($row_3 = mysqli_fetch_array($result_3)) {

$top_3=(int)$row_3['util_water']; 
$top_3_room=$row_3['room_name']; 
}

		
		
         
//top4
$sql_4= "SELECT room.room_name, utilities.util_water FROM utilities INNER JOIN (billing INNER JOIN (room INNER JOIN billing_list ON room.room_id = billing_list.billing_room) ON billing.bill_id = billing_list.bill_id) ON utilities.util_id = billing.bill_util Order by util_water DESC LIMIT 4";
$result_4=mysqli_query($con,$sql_4);
while($row_4 = mysqli_fetch_array($result_4)) {

$top_4=(int)$row_4['util_water']; 
$top_4_room=$row_4['room_name']; 
}

		
		
		
//top5
$sql_5= "SELECT room.room_name, utilities.util_water FROM utilities INNER JOIN (billing INNER JOIN (room INNER JOIN billing_list ON room.room_id = billing_list.billing_room) ON billing.bill_id = billing_list.bill_id) ON utilities.util_id = billing.bill_util Order by util_water DESC LIMIT 5";
$result_5=mysqli_query($con,$sql_5);
while($row_5 = mysqli_fetch_array($result_5)) {

$top_5=(int)$row_5['util_water']; 
$top_5_room=$row_5['room_name']; 
}

		
//top6
$sql_6= "SELECT room.room_name, utilities.util_water FROM utilities INNER JOIN (billing INNER JOIN (room INNER JOIN billing_list ON room.room_id = billing_list.billing_room) ON billing.bill_id = billing_list.bill_id) ON utilities.util_id = billing.bill_util Order by util_water DESC LIMIT 6";
$result_6=mysqli_query($con,$sql_6);
while($row_6 = mysqli_fetch_array($result_6)) {

$top_6=(int)$row_6['util_water']; 
$top_6_room=$row_6['room_name']; 
}
            $data = array($top_6,$top_5,$top_4,$top_3,$top_2,$top_1);
            $label = array($top_6_room,$top_5_room,$top_4_room,$top_3_room,$top_2_room,$top_1_room);
		
            $js_data = json_encode($data);
            $js_label = json_encode($label);
			
            echo "var number = ". $js_data . ";\n";
            echo "var label = ". $js_label . ";\n";
           
?>


		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		               'rgb(54, 162, 235)',
					   'rgb(54, 162, 235)',
					   'rgb(54, 162, 235)',
					   'rgb(54, 162, 235)',
					   'rgb(54, 162, 235)',
					   'rgb(54, 162, 235)'
		            ],
		            borderColor: [
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)'
		              
		            ],
		            borderWidth: 1
		        }]
		    },
			
			 options: {
				responsive: true,
				scales: {
						yAxes: [{
						ticks: {
							beginAtZero: true
                }
            }]
        }
    }
		});
	</script>	
	
	
	
	
	
	<!--Edit me graph-->
	<script type="text/javascript">		
		var ctx = document.getElementById('chart-tenant').getContext('2d');

       

<?php
include 'include/db.php';	
		
	

$sql_elec_1= "SELECT room.room_name, utilities.util_elec FROM utilities INNER JOIN (room INNER JOIN (billing INNER JOIN billing_list ON billing.bill_id = billing_list.bill_id) ON room.room_id = billing_list.billing_room) ON utilities.util_id = billing.bill_util Order by util_elec DESC LIMIT 1";
$result_elec_1=mysqli_query($con,$sql_elec_1);
while($row_elec_1 = mysqli_fetch_array($result_elec_1)) {

$top_elec_1=(int)$row_elec_1['util_elec']; 
$top_elec_1_room=$row_elec_1['room_name']; 

}
		
			
//top2
$sql_elec_2= "SELECT room.room_name, utilities.util_elec FROM utilities INNER JOIN (room INNER JOIN (billing INNER JOIN billing_list ON billing.bill_id = billing_list.bill_id) ON room.room_id = billing_list.billing_room) ON utilities.util_id = billing.bill_util Order by util_elec DESC LIMIT 2";
$result_elec_2=mysqli_query($con,$sql_elec_2);
while($row_elec_2 = mysqli_fetch_array($result_elec_2)) {

$top_elec_2=(int)$row_elec_2['util_elec']; 
$top_elec_2_room=$row_elec_2['room_name']; 
}


	
	
//top3
$sql_elec_3= "SELECT room.room_name, utilities.util_elec FROM utilities INNER JOIN (room INNER JOIN (billing INNER JOIN billing_list ON billing.bill_id = billing_list.bill_id) ON room.room_id = billing_list.billing_room) ON utilities.util_id = billing.bill_util Order by util_elec DESC LIMIT 3";
$result_elec_3=mysqli_query($con,$sql_elec_3);
while($row_elec_3 = mysqli_fetch_array($result_elec_3)) {

$top_elec_3=(int)$row_elec_3['util_elec']; 
$top_elec_3_room=$row_elec_3['room_name']; 
}

		
		
         
//top4
$sql_elec_4= "SELECT room.room_name, utilities.util_elec FROM utilities INNER JOIN (room INNER JOIN (billing INNER JOIN billing_list ON billing.bill_id = billing_list.bill_id) ON room.room_id = billing_list.billing_room) ON utilities.util_id = billing.bill_util Order by util_elec DESC LIMIT 4";
$result_elec_4=mysqli_query($con,$sql_elec_4);
while($row_elec_4 = mysqli_fetch_array($result_elec_4)) {

$top_elec_4=(int)$row_elec_4['util_elec']; 
$top_elec_4_room=$row_elec_4['room_name']; 
}

		
		
		
//top5
$sql_elec_5= "SELECT room.room_name, utilities.util_elec FROM utilities INNER JOIN (room INNER JOIN (billing INNER JOIN billing_list ON billing.bill_id = billing_list.bill_id) ON room.room_id = billing_list.billing_room) ON utilities.util_id = billing.bill_util Order by util_elec DESC LIMIT 5";
$result_elec_5=mysqli_query($con,$sql_elec_5);
while($row_elec_5 = mysqli_fetch_array($result_elec_5)) {

$top_elec_5=(int)$row_elec_5['util_elec']; 
$top_elec_5_room=$row_elec_5['room_name']; 
}

//top6
$sql_elec_6= "SELECT room.room_name, utilities.util_elec FROM utilities INNER JOIN (room INNER JOIN (billing INNER JOIN billing_list ON billing.bill_id = billing_list.bill_id) ON room.room_id = billing_list.billing_room) ON utilities.util_id = billing.bill_util Order by util_elec DESC LIMIT 6";
$result_elec_6=mysqli_query($con,$sql_elec_6);
while($row_elec_6 = mysqli_fetch_array($result_elec_6)) {

$top_elec_6=(int)$row_elec_6['util_elec']; 
$top_elec_6_room=$row_elec_6['room_name']; 
}
            $data_elec = array($top_elec_6,$top_elec_5,$top_elec_4,$top_elec_3,$top_elec_2,$top_elec_1);
            $label = array($top_elec_6_room,$top_elec_5_room,$top_elec_4_room,$top_elec_3_room,$top_elec_2_room,$top_elec_1_room);
		
            $js_data_elec = json_encode($data_elec);
            $js_label = json_encode($label);
			
            echo "var number = ". $js_data_elec . ";\n";
            echo "var label = ". $js_label . ";\n";
           
?>


		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: label,
		        datasets: [{
		            label: 'Meter',
		            data: number,
		            backgroundColor: [
		                'rgb(255, 206, 86)',
						'rgb(255, 206, 86)',
		                'rgb(255, 206, 86)',
		                 'rgb(255, 206, 86)',
		               'rgb(255, 206, 86)',
		              'rgb(255, 206, 86)',
						
		                
		            ],
		            borderColor: [
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)',
		                'rgba(0, 0, 0, 1)'
		                
		            ],
		            borderWidth: 1
		        }]
		    },
			
			 options: {
				responsive: true,
				scales: {
						yAxes: [{
						ticks: {
							beginAtZero: true
                }
            }]
        }
    }
		});
	</script>	
	
	
	
	
	
