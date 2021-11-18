<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = false;


    public function getList(){
        
            $array = $this->select()
                          ->orderBy('sub', 'DESC') 
                          ->get();

            if($array){
                
                foreach($array as $item){

                    $item['subs'] = array();
                    $array[$item['id']] = $item;

                }

                while($this->stillNeed($array)){
                    $this->organizeCategory($array);
                }

            }
                
            echo "<pre/>";
            print_r($array);
            exit;
        
    }

    private function organizeCategory(&$array){
        foreach($array as $id => $item){
            if(isset($array[$item['sub']])){
                $array[$item['sub']]['subs'][$item['id']] = $item;
                unset($array[$id]);
                break;
            }
        }
    }
    
    private function stillNeed($array){

        foreach($array as $item){
            
            if(!empty($item['sub'])){
                return true;
            }

        }

        return false;
    }

}
