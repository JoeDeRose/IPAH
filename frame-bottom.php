		</td>
		<td width="50">&nbsp;</td>
	</tr>
</table>

<?php
	$ThisFile = preg_replace( '/\/(.+)\.php/i', '$1', $_SERVER['SCRIPT_NAME'] );
?>
<script>
	$( ".menu_<?=$ThisFile?>" ).addClass( "MenuItemSelected" ).removeClass( "MenuItem" );
</script>

</body>
</html>
