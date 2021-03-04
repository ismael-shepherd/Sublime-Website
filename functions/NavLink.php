<?php


    function nav_item(string $lien, string $titre, string $LinkClass = ''): string
    {
      $classe = 'nav-item';
      if($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe = $classe . ' active';
      }
      return <<<HTML
                 <li class="$classe"><a class="$LinkClass" href="$lien" accesskey="1" title="">$titre</a></li>
HTML;
 } 

function nav_menu(string $LinkClass = ''): string {
    return 
      nav_item('../public/index.php', 'Accueil', $LinkClass) .
      nav_item('https://discord.gg/tGV2cu3GvC', 'Discord', $LinkClass) .
      nav_item('../public/error.php', 'Wiki', $LinkClass) .
      nav_item('../public/', 'Donation', $LinkClass) .
      nav_item('../public/', 'news', $LinkClass);
       
}




function checkbox(string $name, string $value, array $data): string {
  $attributes = '';
  if(isset($data[$name]) && in_array($value, $data[$name])) {
    $attributes .= 'checked';
  }
  return <<<HTML
  <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;  
}


function radio(string $name, string $value, array $data): string {
  $attributes = '';
  if(isset($data[$name]) && $value === $data[$name]) {
    $attributes .= 'checked';
  }
  return <<<HTML
  <input type="radio" name="{$name}" value="$value" $attributes>
HTML;  
}

function select (string $name, $value, array $options): string {
  $html_options = [];
   foreach($options as $k => $option) {
      $attributes = $k == $value ? 'selected' : '';
      $html_options[] = "<option value='$k' $attributes>$option</option>";
   }
   return "<select class='form-control' name='$name'>" . implode($html_options) . "</select>";
}