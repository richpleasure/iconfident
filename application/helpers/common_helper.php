<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');


    function ucname($string) {
        $string =ucwords(strtolower($string));

        foreach (array('-', '\'') as $delimiter) {
          if (strpos($string, $delimiter)!==false) {
            $string =implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
          } 
        }
        return $string;
    }
	function display_event_date_list($start_date, $end_date)
	{
		$s1 = date('Y-M-d',strtotime($start_date));
		$s2 = date('Y-M-d',strtotime($end_date));
		$str_start_date = strtotime($s1);
		$str_end_date = strtotime($s2);
		
		//Get Day Differences
		
		$day_diff = ($str_end_date - $str_start_date)/60/60/24;
		$date_output = "";
		if($day_diff == 1) // means course is 2 days
		{ 
			//If 2 days.. then display like 3&8 Aug 2019
        
            
            //If the month is not same then show:
            if(date('M',$str_start_date) != date('M',$str_end_date))
            {
                $date_output = date('j M',$str_start_date).' & '.date('j M',$str_end_date).' '.date('Y',$str_start_date);
            }else 
            {
            //If the same month..then show:
                $date_output = date('j',$str_start_date).' & '.date('j',$str_end_date).' '.date('M Y',$str_start_date);
            }
            
		}elseif($day_diff == 0)
		{
			//If only day.. then display like 3 Aug 2019 
			$date_output = date('j',$str_end_date).' '.date('M Y',$str_end_date);
		}
		
		return $date_output;
	}
	
