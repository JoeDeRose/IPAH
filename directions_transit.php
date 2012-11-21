<?php
	require($DOCUMENT_ROOT . "frame-top.php");
?>
<table class="Content">
	<tr>
		<td>
			<table class="Submenu" width="100%">
				<tr>
					<td>
						<table class="MenuItemList" width="100%">
							<tr>
								<td width="33%" class="menu_directions_car MenuItem" onclick="ChangePage('directions_car.php')">Car</td>
								<td width="33%" class="menu_directions_transit MenuItem" onclick="ChangePage('directions_transit.php')">Public Transit</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<p><b>Inman Park Animal Hospital</b> is located 3 blocks from the Inman Park/Reynoldstown MARTA station (station E3, on the MARTA Blue and Green lines), and is near the routes for several bus lines.</p>
			<p>Please <a href="http://mycommute.itsmarta.com/" target="_blank">click here</a> for MARTA's trip planning service; use the following address for the destination:</p>
			<blockquote>
				<p>926 DEKALB AVE NE</p>
			</blockquote>
			<p>Please be aware of MARTA's animal policy: Other than service animals, all animals must be in a locked, rigid pet carrier. </p>
		</td>
	</tr>
</table>
<?php
	require($DOCUMENT_ROOT . "frame-bottom.php");
?>
