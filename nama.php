<?php

for ($y=0; $y<9; $y++)
{
  for ($x=0; $x<=9; $x++)
	{
     if ($x == 1 or (($y == 0 or $y == 8) and ($x > 1 and $x < 8)) or ($x == 8 and $y != 0 and $y != 8))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
echo "\n";


for ($y=0; $y<9; $y++)
{
  for ($x=0; $x<=9; $x++)
	{
   if ($x == 5 or ($y == 0 and $x > 0 and $x < 10) or ($y == 8 and $x > 0 and $x < 10))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
echo "\n";


for ($row=0; $row<9; $row++)
{
  for ($col=0; $col<=9; $col++)
	{
  if ($col == 1 or $col == 9 or ($row == 2 and ($col == 3 or $col == 7)) or ($row== 4 and $col == 5))
           echo "*";    
        else  
           echo " ";     
	}        
  echo "\n";
}
echo "\n";


for ($row=0; $row<=9; $row++)
{
  for ($col=0; $col<=9; $col++)
	{
        if ((($col == 1 or $col == 9) and $row != 0) or (($row == 0 or $row == 4) and ($col > 1 and $col < 8)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n";
}
echo "\n";


for ($row=0; $row<9; $row++)
{
  for ($col=0; $col<=9; $col++)
        {
  if ((($row == 0 or $row == 4 or $row == 8) and $col > 1 and $col < 10) or ($col == 1 and ($row == 1 or $row == 3 or $row == 2 or $row == 8)) or 
($col == 9 and ($row == 6 or $row == 5 or $row == 7 )))
            echo "*";    
        else  
            echo " ";     
        }        
  echo "\n";
}
echo "\n";


?>
