<?php
	class HTML_Helper  //new HTML_Helper class
	{
		function print_table($array)
		{
			$item1 = $array[0]; //first array in multi-dimensional array
			$html="
			<table>
				<thead>
					<tr>";
					//gets keys out of 1st array to makes them table headings (loops through 1st array pulling keys)
					foreach ($item1 as $key => $value) 
					{
						$html .= "<th>" . $key . "</th>";
					}
			$html .= "</tr>
				</thead>
				<tbody>";
				//creates 1 table row for each array
				foreach ($array as $item)
				{
					$html .= "<tr>";
					//creates table cells within each table row  
					foreach ($item as $key => $value)
					{
						$html .= "<td>" . $value . "</td>";
					}
					$html .= "</tr>";
				}
			$html .= "
				</tbody>
			</table>";
			return $html;
		}

		function print_select($select, $array)
		{
			$string = "<select name=" . $select . ">";
			foreach($array as $item)
			{
				$string .= "<option>" . $item . "</option>";
			}
			return $string;
		}
	}
?>