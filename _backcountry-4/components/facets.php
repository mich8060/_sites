<div class="facets">
    <div class="facets-overlay"></div>
    <div class="facets-title">
        Filters
        <div class="done">Close</div>
    </div>
    <div class="facets-container">
<?php

    foreach($data->metadata->facets as $f){
        if($f->name != 'Scale' && $f->name != "Shop By" && $f->name != "Outlet"){
            echo '<div class="facet">';
            if($f->name == "category"){
                echo '<a href="#" class="action expanded">';
            }else{
                echo '<a href="#" class="action">';
            }
            echo $f->name;
            echo '</a>';
            if(count($f->filters) > 1){
                echo '<div class="items '.strtolower($f->name).'">';
                if($f->name == "Brands"){
                    echo '<div class="brand-search"><input type="search" placeholder="Search Brands" /></div>';
                }
                if($f->name == "Prices"){
                    echo '<div class="min">Min</div>';
                    echo '<div class="max">Max</div>';
                    echo '<input type="number" placeholder="$25" />';
                    echo '<span class="dash">to</span>';
                    echo '<input type="number" placeholder="$3,000" />';
                    echo '<a href="#" style="display:inline-block;float:right;margin:0;padding:0 10px;">GO</a>';
                }
                if($f->name == "Colors" || $f->name == "Sizes"){ echo '<div class="item-container">'; }
                foreach($f->filters as $i){
                    if($f->name == 'category'){
                        $i->name = str_replace("1.bcs.", "", $i->name); 
                        echo '<a href="#">'.$i->name.'</a>';
                    }elseif($f->name == 'Colors'){
                        echo '<input type="checkbox" id="c-'.$i->name.'" />';
                        echo '<label for="c-'.$i->name.'" class="c-colors '.$i->name.'"></label>';
                    }elseif($f->name == 'Sizes'){
                        echo '<input type="checkbox" id="s-'.$i->name.'" />';
                        echo '<label for="s-'.$i->name.'" class="s-sizes" data="'.$i->filterQuery.'">'.$i->name.'</label>';
                    }elseif($f->name == 'Brands'){
                        echo '<input type="checkbox" id="b-'.$i->name.'" />';
                        echo '<label for="b-'.$i->name.'" class="b-brands">'.$i->name.'</label>';
                    }elseif($f->name == 'Recommended Use'){
                        echo '<input type="checkbox" id="r-'.$i->name.'" />';
                        echo '<label for="b-'.$i->name.'" class="r-recommended">'.$i->name.'</label>';
                    }elseif($f->name == "Prices"){
                        
                    }elseif($f->name == "Customer Review"){
                        $i->name = str_replace(" Stars & Up", "", $i->name); 
                        $i->name = str_replace(" Star & Up", "", $i->name);
                        echo '<rating rate="'.$i->name.'"></rating> <span class="and-up">&amp; Up</span>';
                        echo '<div class="clear"></div>';
                    }else{   
                        echo '<a href="#">'.$i->name.'</a>';
                    }
                }
                if($f->name == "Colors" || $f->name == "Sizes"){ echo '<div class="clear"></div></div>'; }
                echo '</div>';
            }    
            echo '</div>';
        }elseif($f->name == "Outlet"){    
            echo '<div class="facet">';
            echo '<input type="checkbox" id="foutlet" class="classic" />';
            echo '<label for="foutlet"></label>';
            echo '<a href="#" class="action no-expand">Outlet</a>';
            echo '</div>';
        }
    }

?>
        <div class="clear"></div>
    </div>
</div>