<link rel="stylesheet" type="text/css" href="../css/table.css" title="standard">
<?php
$game = array( array("Team Playing"=>"West Ham", "Location"=>"Emirates Stadium" , "Date"=>"Sunday 9 August", "time"=>"3:50PM", "Final Score"=>""),
               array("Team Playing"=>"Arsenal", "Location"=>"Selhurst Park" , "Date"=>"Sunday 16 August", "time"=>"3:50PM", "Final Score"=>""),
               array("Team Playing"=>"Liverpool", "Location"=>"Emirates Stadium" , "Date"=>"Saturday 12 SepT", "time"=>"3:50PM", "Final Score"=>""),
               array("Team Playing"=>"Stoke", "Location"=>"Emirates Stadium", "Date"=>"Sunday 9 August", "time"=>"3:50PM", "Final Score"=>""),
               array("Team Playing"=>"Man Utd", "Location"=>"St. James' Park" , "Date"=>"Sunday 9 August", "time"=>"3:50PM", "Final Score"=>""),
               array("Team Playing"=>"West Ham", "Location"=>"Emirates Stadium" , "Date"=>"Sunday 9 August", "time"=>"3:50PM", "Final Score"=>""),
               array("Team Playing"=>"Watford", "Location"=>"Vicarage Road" , "Date"=>"Saturday 17 October", "time"=>"3:50PM", "Final Score"=>""),
               array("Team Playing"=>"Watford", "Location"=>"Vicarage Road" , "Date"=>"Saturday 17 October", "time"=>"3:50PM", "Final Score"=>"")
             ); 
?>

<?php if (count($game) > 0): ?>
<table class="table-striped font table-bordered table">
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($game))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($game as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>

<!-- array("Team Playing"=>"rose", "Location"=>1.25 , "date"=>15, "time"=>july 15, "Final Score") -->